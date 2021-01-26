<?php 
    
	include ('config/db_connect.php');

	$firstname = $lastname = $email = $phone = $username = $password = '';

    $errors = array('firstname'=>'', 'lastname'=>'', 'email'=>'', 'phone'=>'', 'username'=>'', 'password'=>'');

    if (isset($_POST['submit'])) {
       // echo htmlspecialchars($_POST['places']);

        //check firstname
        if(empty($_POST['firstname'])){
            $errors['firstname'] = 'Please type your first name ';
        } else {
                 $firstname = $_POST['firstname'];

                 if(!preg_match('/^[a-zA-Z\s]+$/', $firstname)){
                 $errors['firstname'] = 'Must be a valid first name ';
            	 }
        }

        //check lastname
        if(empty($_POST['lastname'])){
            $errors['lastname'] = 'Please type your last name ';
        } else {
                 $lastname = $_POST['lastname'];

                 if(!preg_match('/^[a-zA-Z\s]+$/', $lastname)){
                 $errors['lastname'] = 'Must be a valid last name ';
            	 } 
        }



        //check email
        if(empty($_POST['email'])){
            $errors['email'] = 'Please type your email ';
        } else {
                 $email = $_POST['email'];

                 if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                 $errors['email'] = 'Must be a valid email address ';
            	 }
              }

        //check phone
        if(empty($_POST['phone'])){
            $errors['phone'] = 'Please type your phone ';
        } else {
                 
                 $phone = $_POST['phone'];

                //  if(!preg_match("/^(\+\d{12}|\d{11}|\+\d{2}-\d{3}-\d{7})$/", $phone)){
                //  $errors['phone'] = 'Must be a valid phone number, can include +, - and .';
            	//  } 
        }





        //check username
        if(empty($_POST['username'])){
            $errors['username'] = 'Please type your username ';
        } else {
            //echo htmlspecialchars($_POST['username']);
            $username = $_POST['username'];

            if(!preg_match('/^(?=.{3,20}$)(?![_.])(?!.*[_.]{2})[a-zA-Z0-9._]+(?<![_.])$/', $username)){
                 $errors['username'] = 'Must be a valid username (min.3 char - max.20';
            	 } 
            
        }


        //check password
        if(empty($_POST['password'])){
            $errors['password'] = 'Please type your password ';
        } else {
            //echo htmlspecialchars($_POST['password']);
            $password = $_POST['password'];

            if(!preg_match('/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$/', $password)){
                 $errors['password'] = 'Passowrd must be minimum six characters, at least one letter and one number ';
            	 } 

        }


        if(array_filter($errors)){
			//echo 'errors in form';
		} else {
			// escape sql chars
			$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
			$lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
			$email = mysqli_real_escape_string($conn, $_POST['email']);
			$phone = mysqli_real_escape_string($conn, $_POST['phone']);
			$username = mysqli_real_escape_string($conn, $_POST['username']);
			$password = mysqli_real_escape_string($conn, $_POST['password']);
			// create sql
			$sql = "INSERT INTO users(firstname, lastname, email, phone, username, password, roles_id) VALUES('$firstname', '$lastname', '$email', '$phone', '$username', '$password', 2)";
			// save to db and check
			if(mysqli_query($conn, $sql)){
				// success
				header('Location: index.php');
			} else {
				echo 'query error: '. mysqli_error($conn);
			}
			
		}


    }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Kosova WEB</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  <!--Script per  fonte te veqanta (psh butoni anash per meny kur ekrani bahet i vogel)-->
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/jSlider.css" />

<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/jquery.jSlider.js"></script>
<script src="js/clock.js"></script>

</head>
<body>

<div class="nav">
  <input type="checkbox" id="nav-check">
  <div class="nav-header">
    <div class="nav-title">
      <img src="images/logo.png" />
    </div>
  </div>
  <div class="nav-btn">
    <label for="nav-check">
      <span></span>
      <span></span>
      <span></span>
    </label>
  </div>
  
    <div class="nav-links">
    <a href="index.php">Home</a>
    <a href="about.php">About Kosovo</a>
    <a href="whattoseeanddo.php">What to See and Do</a>
    <a href="gallery.php">Gallery</a>
    <a href="contact.php">Contact</a>
    <a href="signup.php">Sign Up</a>
  </div>
</div>
<section class="wrapper">
   
    <div class="container justify-content-center align-items-center">
        <div class="text">
            <h1 class="title">Create an account</h1>
        </div>
    </div>
</section>


<div class="container justify-content-center lace-color-bg">
    <div class="form-holder">
        <form action="signup.php" method="POST">

            <div class="row">
                <div class="places">
                    <label for="firstname">First Name</label>
                </div>
                <div class="places">
                    <input type="text" id="firstname" name="firstname" placeholder="Your name..">
                    <div><?php echo $errors['firstname'] ?></div>
                </div>
            </div>

            <div class="row">
                <div class="places">
                    <label for="lastname">Last Name</label>
                </div>
                <div class="places">
                    <input type="text" id="lastname" name="lastname" placeholder="Your last name..">
                    <div><?php echo $errors['lastname'] ?></div>
                </div>
            </div>

            <div class="row">
                <div class="places">
                    <label for="email">Email</label>
                </div>
                <div class="places">
                    <input type="text" id="email" name="email" placeholder="Your email..">
                    <div><?php echo $errors['email'] ?></div>
                </div>
            </div>

            <div class="row">
                <div class="places">
                    <label for="phone">Phone</label>
                </div>
                <div class="places">
                    <input type="text" id="Phone" name="phone" placeholder="Your Phone..">
                    <div><?php echo $errors['phone'] ?></div>
                </div>
            </div>

            <div class="row">
                <div class="places">
                    <label for="username">User Name</label>
                </div>
                <div class="places">
                    <input type="text" id="username" name="username" placeholder="Your username..">
                    <div><?php echo $errors['username'] ?></div>
                </div>
            </div>

            <div class="row">
                <div class="places">
                    <label for="password">Password</label>
                </div>
                <div class="places">
                    <input type="password" id="password" name="password" placeholder="Your password..">
                    <div><?php echo $errors['password'] ?></div>
                </div>
            </div>

            <div class="row">
                <input type="submit" name='submit' value="Register">
            </div>
        </form>
    </div>
</div>

<div id="footer">
        <div class="wrapper head-flex">
            <div class="about">
                <br>
                    <p><b>Where to find us:</b></p>
                    <a href="https://www.tumblr.com/tagged/kosovo" target="_blank"><img src="images/tumblrlogo.png" alt="Tumblr" id="imglogo" ></a>
                    <a href="https://www.instagram.com/visitkosova/" target="_blank"><img src="images/instagramlogo.png" alt="Insta" id="imglogo"></a>
                    <a href="https://www.youtube.com/channel/UCrBPPGyR_7aOd882VpMRkRg" target="_blank"><img src="images/youtubelogo.png" alt="YT" id="imglogo"></a>
                    <a href="https://www.pinterest.com/explore/kosovo/" target="_blank"><img src="images/pinterestlogo.png" alt="P" id="imglogo"></a>
                    <p><a href="mailto:visitkosovo@travel.com" style="text-decoration:none;color: black;"><img src="images/email.png" alt="Email"><span class="findfooter"> visitkosovo@travel.com </span></a></p>
                    <img src="images/web.png" alt="Web"><span><u>www.visitkosovo.com</u></span></p>
                 </div>
             
             
     <!-- Data -->
                 <div id="Clock" >
                 <script src="js/clock.js">
                 </script>
                 </div>
     </div>
</div>



</body>
</html>
