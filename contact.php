<?php
include ('config/db_connect.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'C:\xampp\composer\vendor\autoload.php';
if (isset($_POST['submit'])) {
$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 587; // Port per gmail
$mail->IsHTML(true);
$mail->Username = "visitkosovoproject@gmail.com";
$mail->Password = "Visitk123";
$mail->SetFrom("visitkosovoproject@gmail.com");
$mail->Subject = "Contact Form";
$body = '<p>Name: '.$_POST['Name'].'</p><p>Email: '.$_POST['Email'].'</p><p>Mosha: '.$_POST['mosha'].'</p><p>News: '.$_POST['News'].'</p><p>City: '.$_POST['city'].'</p>';
    $mail->Body = $body;
$mail->AddAddress("visitkosovoproject@gmail.com");


 if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
    echo "Message has been sent";
 }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Contact</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<script src="js/validimi1.js"></script>

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
    <?php 
    if(!isset($_COOKIE["logged"]))
    { 
        echo "<a href='login.php'>LogIn</a>";
        echo "<a href='signup.php'>Signup</a>";

    }
    else{
     echo "<a href='logout.php'>LogOut</a>";   
    }
    ?>
  </div>
</div>

      <h1>Get latest news for Kosovo</h1>
<!--Formulari-->

<section>
    <div class="wrapper head-flex">
        
<form id="first" action="contact.php" method="POST" onsubmit="return Validimi()">
  
  <fieldset>
   <legend>Subscribe to our Newsletter</legend>

    <p><label>Your name:</label><input type="text" id="name" class="input" name="Name" placeholder="Write your name " autocomplete="on" required ></p>    <!-- perdorimi autocomplete faza2-->


    <p><label >Email: </label><input type="email" id="email" class="input" name="Email" placeholder="ex: someone@hotmail.com" autocomplete="on" required ></p>  <!--perdorimi i required faza2-->

    <p><label >Age: </label><input type="number" name="mosha" class="input" min="10" required ></p>  <!--perdorimi i min dhe mbishkrimi me javascript validim gjithashtu-->
    <p><label>News for</label><br>
        <select class="input" name = "city">
         <option value = "All">All</option>
         <option value = "Prishtina">Prishtina</option>
         <option value = "Ferizaj">Ferizaj</option>
         <option value = "Prizren">Prizren</option>
         <option value = "Peja">Peja</option>
         <option value = "Gjakova">Gjakova</option>
         <option value = "Gjilan">Gjilan</option>
         <option value = "Mitrovica">Mitrovica</option>
        </select>
    
      <p>You want to get news :<br>
        <input   type="radio" name="News" value="Daily" checked><label style="font-size:15px;" > Daily</label><br>
        <input  type="radio" name="News" value="Weekly"><label style="font-size:15px;"> Weekly</label><br>
        <input  type="radio" name="News" value="Monthly"><label style="font-size:15px;"> Monthly</label></p>
         <br>
        <input type="submit" name="submit" value="Subscribe" id="submit"  > <!--formtarget qe tregon se ku do te hapet mesazhi nga serveri per parnimin e te dhenave pasi te shtypet submit-->
    
      </fieldset>
    </form>
</div>
    </section>


      
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

    