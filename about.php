<?php
include ('config/db_connect.php');
?>

<!DOCTYPE html>
<html>
<head>
    
<title>Kosova WEB</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/jSlider.css" />
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/jquery.jSlider.js"></script>
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


<div id="slider">
    <div id="slider1" class="jSlider">
        <div><img src="gallery/1600px-Ulpiana_fotografuar_nga_lart_foto_Arben_Llapashtica.jpg" alt="" /></div>
        <div><img src="gallery/PRISHTINA_2013_(15).jpg" alt="" /></div>
        <div><img src="gallery/1920px-Mirusha_foto_Arben_Llapashtica.jpg" alt="" /></div>
        <div><img src="gallery/2560px-Medieval_Novo_Brdo_Fortress_after_reconstruction.jpg" alt="" /></div>
        <div><img src="gallery/Hamami_i_Vushtrris_foto_Arben_Llapashtica.jpg" alt="" /></div>
        <div><img src="gallery/Kalaja_e_Prizrenit_foto_Arben_Llapashtica.jpg" alt="" /></div>
        <div><img src="gallery/Shpella_e_gadimes_foto_Arben_Llapashtica.jpg" alt="" /></div>
        
    </div>
</div>


<div id="content-bottom" style="padding-left: 2%;">
    <div class="wrapper head-flex">
        <div class="facts-left">
                <h2>About Kosovo</h2>	
                <p><h3>GEOGRAPHIC INFORMATION ABOUT KOSOVA:</h3>
                    Kosovo is in the middle of the Southeastern Europe. Having occupied the central position in the Balkan Peninsula, Kosovo represents important connection between Central and South Europe, Adriatic Sea, and Black Sea.
                    Surface of Kosovo is 10,908.1 km².
                    The climate in Kosovo is middle continental with hot summer and cold winter.
                    Kosovo has about 2 million inhabitants. Its density is about 193 people per km², and is divided into 33 municipalities.</p>
                <p><h3>GEOGRAPHICAL COORDINATION OF KOSOVA:</h3>  Southern magnitude            41°53' <br> Northern magnitude             43°16′ <br> Eastern magnitude               21°16′ <br> Western magnitude             19°59′</nr></p>
                <p><h3>LONGITUDE OF THE BORDERS OF KOSOVO WITH NEIGHBOR COUNTRIES:</h3> Albania                              116.3 <br> Macedonia                        167.6 <br> Montenegro                       78.0 <br> Serbia                                381.6 <br> Total                                   743.5</p>
                <p><b>Area:</b> 10,887km2</p>
                <p><b>Population:</b> 1.815.606 (date: 31/12/2012)</p>
                <p><h3>TRAVEL TO KOSOVA:</h3>Several European Airlines have started to offer direct flights from their hubs to the International Airport of Prishtina, e.g. SAS Scandinavian Airlines, SWISS, Belle Air, Croatia Airlines, Air Berlin, Malev and Austrian Airlines. During the summer several additional charter flights are available for travelers. Pristina International Airport is located 18 km south west of Prishtina and 3 km south of Slatina and not farther than 80 km from the other cities. The time of the journey is approximately 30 minutes from Prishtina. There are direct flights from Pristina International Airport to London, New York City, Zurich, Geneva, Gothenburg, Copenhagen, Vienna, Zagreb, Hamburg, Hannover, Dusseldorf, Berlin, Frankfurt,Podgorica, Munich, Stuttgart, Bremen, Rome, Milan, Verona, Ljubljana, Budapest, Tirana, Istanbul and Antalya.. http://www.airportpristina.com/en  </p>
                
        </div>
        <div class="facts-right" style="margin-top: 7%; padding-right: 2%;">
            <iframe src="https://www.youtube.com/watch?v=3Kt9TTxLXKE"
            width="600" height="330" frameborder="10" allowfullscreen></iframe>
        </div>
    </div>
</div>

<div id="map">
    
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
                 <script src="JS/clock.js">
                 </script>
                 </div>
     </div>
</div>
    



</body>
</html>