<?php
include ('config/db_connect.php');
?>

<html>
<head>
<title>Kosova WEB</title>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/lightbox.min.css">
<script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>
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
        echo "<a href='signup.php'>Signup</a>";
        echo "<a href='login.php'>Login</a>";

    }
    else{
     echo "<a href='logout.php'>LogOut</a>";   
    }
    ?>
  </div>
</div>
        <div id="text">
            <div class="wrapper">
            <div class="content-text">
                <h1>MORE DESTINATIONS</h1>
                <h2>Hopefully, you will discover Kosovo's beauty.</h2>
            </div>
    </div>
    <div id="gallery" style="padding-left: 5%;">
        <div class="wrapper">
            <div class="gallery">
        <a href="gallery/Rrjedha_e_burimit_te_Drinit_Radavc_foto_Arben_Llapashtica.jpg" data-lightbox="mygallery" data-title="Rrjedha e Burimit te Drinit Radavc"><img src="gallery/Rrjedha_e_burimit_te_Drinit_Radavc_foto_Arben_Llapashtica.jpg"  width="300" height="200"> </a>
        <a href="gallery/1600px-Ulpiana_fotografuar_nga_lart_foto_Arben_Llapashtica.jpg" data-lightbox="mygallery"data-title="Ulpiana"><img src="gallery/1600px-Ulpiana_fotografuar_nga_lart_foto_Arben_Llapashtica.jpg"  width="300" height="200"></a>
        <a href="gallery/1920px-Foto_Abren_Llapashtica_Lugin_e_Valbones.jpg" data-lightbox="mygallery"><img src="gallery/1920px-Foto_Abren_Llapashtica_Lugin_e_Valbones.jpg"  width="300" height="200"></a>
        <a href="gallery/1920px-Lokaliteti_Ulpiana_foto_Arben_Llapashtica.jpg" data-lightbox="mygallery" data-title="Ulpiana"><img src="gallery/1920px-Lokaliteti_Ulpiana_foto_Arben_Llapashtica.jpg"  width="300" height="200"></a>
        <a href="gallery/1920px-Mirusha_foto_Arben_Llapashtica.jpg" data-lightbox="mygallery" data-title="Mirusha Waterfall"><img src="gallery/1920px-Mirusha_foto_Arben_Llapashtica.jpg"  width="300" height="200"></a>
        <a href="gallery/2560px-Medieval_Novo_Brdo_Fortress_after_reconstructiong" data-lightbox="mygallery" data-title="Medieval Fortress Novo Brdo"><img src="gallery/2560px-Medieval_Novo_Brdo_Fortress_after_reconstruction.jpg"  width="300" height="200"></a>
        <a href="gallery/2560px-Mulliri_Marec.jpg" data-lightbox="mygallery" data-title="Mulliri"><img src="gallery/2560px-Mulliri_Marec.jpg" width="300" height="200"></a>
        <a href="gallery/2560px-National_Library_of_Kosovo_Arben_Llapashtica.jpg" data-lightbox="mygallery" data-title="National Library of Kosovo"><img src="gallery/2560px-National_Library_of_Kosovo_Arben_Llapashtica.jpg" width="300" height="200"></a>
        <a href="gallery/44426111-pristina-kosovo-july-01-2015-aerial-view-of-capital-city-with-some-old-buildings-like-national-publi.jpg" data-lightbox="mygallery" data-title="Aerial view of capital city with some old buildings"><img src="gallery/44426111-pristina-kosovo-july-01-2015-aerial-view-of-capital-city-with-some-old-buildings-like-national-publi.jpg" width="300" height="200"></a>
        <a href="gallery/Diversiteti_Novobërdë_fot_Arben_Llapashtica.jpg" data-lightbox="mygallery" data-title="Novo Brdo"><img src="gallery/Diversiteti_Novobërdë_fot_Arben_Llapashtica.jpg"width="300" height="200"></a>
        <a href="gallery/FERIZAJ_kisha_edhe_xhamia_foto_Arben_Llapashtica.jpg" data-lightbox="mygallery" data-title="Ferizaj, Mosque and Church"><img src="gallery/FERIZAJ_kisha_edhe_xhamia_foto_Arben_Llapashtica.jpg"  width="300" height="200"></a>
        <a href="gallery/Filharmonia_e_Kosoves.jpg" data-lightbox="mygallery" data-title="Kosovo Philharmonia"><img src="gallery/Filharmonia_e_Kosoves.jpg" width="300" height="200"></a>
        <a href="gallery/Hamami_i_Vushtrris_foto_Arben_Llapashtica.jpg" data-lightbox="mygallery" data-title="Hamam of Vushtrria" ><img src="gallery/Hamami_i_Vushtrris_foto_Arben_Llapashtica.jpg" width="300" height="200"></a>
        <a href="gallery/Hamami_i_Vushtrrise_Korrik_2016_foto_Arben_Llapashtica.jpg" data-lightbox="mygallery" data-title="Vushtrria"><img src="gallery/Hamami_i_Vushtrrise_Korrik_2016_foto_Arben_Llapashtica.jpg"  width="300" height="200"></a>
        <a href="gallery/Janjeva_foto_Arben_Llapashtica.JPG" data-lightbox="mygallery" data-title="Janjeva"><img src="gallery/Janjeva_foto_Arben_Llapashtica.JPG"width="300" height="200"></a>
        <a href="gallery/Kalaja_e_Novoberdes_foto_Arben_Llapashtica.jpg" data-lightbox="mygallery" data-title="Novobrdo Fortress"><img src="gallery/Kalaja_e_Novoberdes_foto_Arben_Llapashtica.jpg" idth="300" height="200"></a>
        <a href="gallery/Kalaja_e_Novobërdës_(11).jpg" data-lightbox="mygallery" data-title="Novobrdo Fortress"><img src="gallery/Kalaja_e_Novobërdës_(11).jpg" width="300" height="200"></a>
        <a href="gallery/Kalaja_e_Prizrenit_foto_Arben_Llapashtica.jpg" data-lightbox="mygallery" data-title="Prizren Fortress"><img src="gallery/Kalaja_e_Prizrenit_foto_Arben_Llapashtica.jpg" width="300" height="200"></a>
        <a href="gallery/Meshtenka_Novoberde_foto_Arben_Llapashtica.jpg" data-lightbox="mygallery"><img src="gallery/Meshtenka_Novoberde_foto_Arben_Llapashtica.jpg"  width="300" height="200"></a>
        <a href="gallery/Mulliri_Letnicë_foto_Arben_Llapashtica.jpg" data-lightbox="mygallery" data-title="Letnice"><img src="gallery/Mulliri_Letnicë_foto_Arben_Llapashtica.jpg" width="300" height="200"></a>
        <a href="gallery/Ndertesa_e_Hotel_Unionit.JPG" data-lightbox="mygallery" data-title="Union Hotel Building"><img src="gallery/Ndertesa_e_Hotel_Unionit.JPG"  width="300" height="200"></a>
        <a href="gallery/PRISHTINA_2013_(12).jpg" data-lightbox="mygallery" data-title="Prishtina City"><img src="gallery/PRISHTINA_2013_(12).jpg" alt="Northern Lights, Norway" width="300" height="200"></a>
        <a href="gallery/Novoberde_Kalaja_foto_Arben_Llapashtica.jpg" data-lightbox="mygallery" data-title="Fortress in Kosova"><img src="gallery/Novoberde_Kalaja_foto_Arben_Llapashtica.jpg" width="300" height="200"></a>
        <a href="gallery/PRISHTINA_2013_(15).jpg" data-lightbox="mygallery" data-title="Prishtina City"><img src="gallery/PRISHTINA_2013_(15).jpg" width="300" height="200"></a>
        <a href="gallery/PRISHTINA_2013_(18).jpg" data-lightbox="mygallery" data-title="Prishtina"><img src="gallery/PRISHTINA_2013_(18).jpg" width="300" height="200"></a>
        <a href="gallery/Phot_Arben_Llapashtica.jpg" data-lightbox="mygallery" ><img src="gallery/Phot_Arben_Llapashtica.jpg"  width="300" height="200"></a>
        <a href="gallery/Rrjedha_e_burimit_te_Drinit_Radavc_foto_Arben_Llapashtica.jpg" data-lightbox="mygallery" data-title="Radavc, Prizren"><img src="gallery/Rrjedha_e_burimit_te_Drinit_Radavc_foto_Arben_Llapashtica.jpg" width="300" height="200"></a>
        <a href="gallery/SHEN_SPASI_PHOTO_ARBEN_LLAPASHTICA.jpg" data-lightbox="mygallery" data-title="Shen Spasi"><img src="gallery/SHEN_SPASI_PHOTO_ARBEN_LLAPASHTICA.jpg"  width="300" height="200"></a>
        <a href="gallery/Shen_Spase_foto_Arben_Llapashtica.jpg" data-lightbox="mygallery"><img src="gallery/Shen_Spase_foto_Arben_Llapashtica.jpg"  width="300" height="200"></a>
        <a href="gallery/Shpella_e_Radavcit_foto_Arben_Llapashtica_2016.jpg" data-lightbox="mygallery" data-title="Marble Cave Radavc"><img src="gallery/Shpella_e_Radavcit_foto_Arben_Llapashtica_2016.jpg"  width="300" height="200"></a>
        <a href="gallery/Shpella_e_gadimes_foto_Arben_Llapashtica.jpg" data-lightbox="mygallery" data-title="Marble Cave Gadime"><img src="gallery/Shpella_e_gadimes_foto_Arben_Llapashtica.jpg"  width="300" height="200"></a>
        <a href="gallery/Trepca_Mitrovice_foto_Arben_Llapashtica.jpg" data-lightbox="mygallery" data-title="Trepca Mitrovice"><img src="gallery/Trepca_Mitrovice_foto_Arben_Llapashtica.jpg" width="300" height="200"></a>
        <a href="gallery/Ujevara_e_Mirushes_photo_Arben_Llapashtica.jpg" data-lightbox="mygallery" data-title="Mirusha Waterfall"><img src="gallery/Ujevara_e_Mirushes_photo_Arben_Llapashtica.jpg" width="300" height="200"></a>
        <a href="gallery/Ulpiana_photo_Arben_Llapashtica.jpg" data-lightbox="mygallery" data-title="Ulpiana"><img src="gallery/Ulpiana_photo_Arben_Llapashtica.jpg" width="300" height="200"></a>
        <a href="gallery/Ulpiane_Pemet.jpg" data-lightbox="mygallery" data-title="Beautiful place near Ulpiana"><img src="gallery/Ulpiane_Pemet.jpg" width="300" height="200"></a>
        <a href="gallery/Ura_e_Gurit_Prizren_foto_Arben_Llapashtica.jpg" data-lightbox="mygallery" data-title="Stone Bridge Prizren"><img src="gallery/Ura_e_Gurit_Prizren_foto_Arben_Llapashtica.jpg" width="300" height="200"></a>
        <a href="gallery/Xhamia_Kisha_Ortodokse.jpg" data-lightbox="mygallery"><img src="gallery/Xhamia_Kisha_Ortodokse.jpg" width="300" height="200"></a>
        <a href="gallery/Xhamia_e_Mazhiqit_foto_Arben_Llapashtica.jpg" data-lightbox="mygallery"><img src="gallery/Xhamia_e_Mazhiqit_foto_Arben_Llapashtica.jpg" width="300" height="200"></a>
        <a href="gallery/Ylberi_ne_Prishtine.jpg" data-lightbox="mygallery"><img src="gallery/Ylberi_ne_Prishtine.jpg" width="300" height="200"></a>
        <a href="gallery/1600px-Ulpiana_fotografuar_nga_lart_foto_Arben_Llapashtica.jpg" data-lightbox="mygallery"><img src="gallery/1600px-Ulpiana_fotografuar_nga_lart_foto_Arben_Llapashtica.jpg"  width="300" height="200"></a>
        </div>      
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
             <script src="JS/clock.js">
             </script>
             </div>

 <!--Rrjetet Sociale te bashkangjitur me links 
 <div class="links">
 <nav id="llogo" >
        <a href="https://www.tumblr.com/tagged/kosovo" target="_blank"><img src="images/tumblrlogo.png" alt="Tumblr" id="imglogo" ></a>
        <a href="https://www.instagram.com/visitkosova/" target="_blank"><img src="images/instagramlogo.png" alt="Insta" id="imglogo"></a>
        <a href="https://www.youtube.com/channel/UCrBPPGyR_7aOd882VpMRkRg" target="_blank"><img src="images/youtubelogo.png" alt="YT" id="imglogo"></a>
        <a href="https://www.pinterest.com/explore/kosovo/" target="_blank"><img src="images/pinterestlogo.png" alt="P" id="imglogo"></a>
    </nav>-->  
 </div>
    </div>

</div>
</body>
</html>
