<?php
session_start();
include ('config/db_connect.php');


// write query for all roles
    $sql = 'SELECT * FROM roles';
    $result = mysqli_query($conn, $sql);
    // fetch the resulting rows as an array 
    $roles = mysqli_fetch_all( $result, MYSQLI_ASSOC );

    mysqli_free_result($result);
    
    //.close.connection
    mysqli_close($conn);
    

    
    
    //print_r($roles);


?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Kosova WEB</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!--e kom shtu qet skript per me i marr do fonte te veqanta (psh butoni anash per meny kur ekrani bahet i vogel)-->
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
    <?php 
    if(!isset($_COOKIE["logged"]))
    { 
        echo "<a href='login.php'>LogIn</a>";
    }
    else{
     echo "<a href='logout.php'>LogOut</a>";   
    }
    ?>



  </div>
</div>


<div id="slider">
		<div id="slider1" class="jSlider">
            <div><img src="images/Kosovo.jpg" alt="" /></div>
            <div><img src="images/Liqenat copy.jpg" alt="" /></div>
            <div><img src="gallery/Ura_e_Gurit_Prizren_foto_Arben_Llapashtica.jpg" alt="" /></div>
          
		</div>
</div>

<div id="content">
    <div class="wrapper">
    <div class="content-text">
        <h2>Top Destinations in Kosovo</h2>
        <h4>We are your local guide!</h4>
    </div>
    <div class="boxes boxes-flex">
        <div class="box">
            <img src="images/Mirusha.jpeg" class="img-responsive" alt="blog img" width="300" height="300">
			<img src="images/kosovo-map.jpg" class="box-map" alt="blog img" width="150" height="150" style="padding-bottom: 13%;">
			<h3><a href="https://en.wikipedia.org/wiki/Mirusha_waterfalls">Mirusha Waterfalls</a></h3>
            <p>Nature / Waterfalls</p>
        </div>

        <div class="box">
            <img src="images/Prizren.jpg" class="img-responsive" alt="blog img" width="300" height="300">
			<img src="images/kosovo-map.jpg" class="box-map" alt="blog img" width="150" height="150" style="padding-bottom: 13%;">
			<h3><a href="https://en.wikipedia.org/wiki/Prizren">Prizreni</a></h3>
            <p>Culture/Nature</p>
        </div>

        <div class="box">
            <img src="images/brezovica.jpg" class="img-responsive" alt="blog img" width="300" height="300">
			<img src="images/kosovo-map.jpg" class="box-map" alt="blog img" width="150" height="150" style="padding-bottom: 13%;">
			<h3><a href="https://en.wikipedia.org/wiki/Brezovica,_Kosovo">Brezovica Nature & Ski</a></h3>
            <p> Nature/Ski</p>
        </div>
    </div>
    </div>
</div>
<br /><br />

<div id="tituj">
    <h2 >KOSOVO FACTS</h2>  
                <h2>LET’S CHECK</h2>
</div>
<div id="content-bottom" style="padding-left: 10%;">
    <div class="wrapper head-flex">
        <div class="facts-left">
                
                <p><b>Name:</b> Republic of Kosova</p>
                <p><b>Capital:</b> Prishtina</p>
                <p><b>Location:</b> In the center of south-eastern Europe, In the center of Balkan Peninsula</p>
                <p><b>Area:</b> 10,887km2</p>
                <p><b>Population:</b> 1.815.606 (date: 31/12/2012)</p>
                <p><b>Languages:</b> Albanian(Official), Serbian, English, Turkish.</p>
                <p><b>Clime:</b> Continental, average high temperatures +25’C and +38°C. Average low temperatures -2°C</p>
                <p><b>Independence Day:</b> 17 Feb 2008</p>
                <p><b>Constitution Day:</b> 9 April 2008</p>
                <p><b>Government:</b> Parliamentary democracy</p>
                <p><b>Currency:</b> Euro</p>
                <p><b>Religion:</b> Muslim 92%, Orthodox 6%, Catholic 1%</p>
                <p><b>Electricity: </b> 230V/530Hz (European plug)</p>
                <p><b>Calling code:</b> +383</p>

        </div>

        <div class="facts-right" style="margin-top: 2%;">

                <img src="Images/katedrale.jpg" ALIGN ="right"class="img-responsive" alt="blog img" width="500" height="500">
        </div>
    </div>
</div>


<div id="map">

<p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1504722.053089399!2d19.780976728476453!3d42.55719838546098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13537af354bf7df1%3A0xbfffeedfabc31791!2sKosovo!5e0!3m2!1sen!2s!4v1558261400989!5m2!1sen!2s" 
        width="1519.2px" height="400" frameborder="0" style="border:0" allowfullscreen></iframe></p>
  
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

                 <br />
                 <label style=" margin-left: 85%;"><?php if(isset($_SESSION['_USERNAME'])){ echo 'Useri i kyqyr:' .$_SESSION['_USERNAME']; }?></label>
</div>



</body>
</html>

