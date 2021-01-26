<?php
include ('config/db_connect.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>What to See and Do</title>
        <meta lang="en">
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <style type="text/css"> -->
        <style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 12px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myUL {
  list-style-type: none;
  padding: 0;
  margin: 0;

}

#myUL li a {
  border: 1px solid #ddd;
  margin-top: -1px; /* Prevent double borders */
  background-color: #f6f6f6;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  color: black;
  display:block;
}

#myUL li a:hover:not(.header) {
  background-color: #eee;
}

#myUL li{
    display:none;
}
</style>
   
    <!-- /* #search_container {text-align: center;}
    #results {text-align: left; border: solid 1px #777; display: none; margin: 0 auto; width: 180px;}
  </style> -->
       
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
<h5> </h5>

<form action="" method="POST">
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for places.." title="Type in a place">

<ul id="myUL">
  <li><a href="https://www.google.com/search?q=germia+prishtine&source=lnms&tbm=isch&sa=X&ved=0ahUKEwiF_vikovbXAhWF3KQKHV7vBYMQ_AUICygC">Germia</a></li>
  <li><a href="https://www.google.com/search?tbm=isch&sa=1&ei=01goWqDvENCukwWylInQCQ&q=kalaja+e+prizerenit&oq=kalaja+e+prizerenit&gs_l=psy-ab.3...141726.147136.0.147692.23.16.0.0.0.0.794.794.6-1.1.0....0...1c.1.64.psy-ab..22.1.793...0.0.FpCP-O3vqBo">Prizren</a></li>
  <li><a href='https://en.wikipedia.org/wiki/Hiking_in_Kosovo'>Hiking</a></li>
  <li><a href='https://en.wikipedia.org/wikibrezovica,_Kosovo' >Skiing</a></li>
  <li><a href='https://en.wikipedia.org/wiki/Forests_of_Kosovo'>Camping</a></li>
 <li><a href='http://www.unicycle50.com/new/Cycling_in_Kosovo.php'>Cycling</a></li>
  <li><a href="https://www.google.com/search?tbm=isch&sa=1&ei=C1ooWvqaK8zSsAf0s7iYBg&q=brezovica&oq=brezovica&gs_l=psy-ab.3...17687.19763.0.19895.9.7.0.0.0.0.0.0..0.0....0...1c.1.64.psy-ab..9.0.0....0.ZeuB9Hb5cxw">Shpella e Gadimes</a></li>
  <li><a href="https://www.google.com/search?tbm=isch&sa=1&ei=wlkoWtjLI5CisAfs2I_QCg&q=gryka+e+rugoves&oq=gryka+e+rugoves&gs_l=psy-ab.3...29506.32001.0.32289.15.9.0.0.0.0.0.0..0.0....0...1c.1.64.psy-ab..15.0.0....0.mTKU8MpjFYY">Rugova</a></li>

  <li><a href="https://www.google.com/search?tbm=isch&sa=1&ei=C1ooWvqaK8zSsAf0s7iYBg&q=brezovica&oq=brezovica&gs_l=psy-ab.3...17687.19763.0.19895.9.7.0.0.0.0.0.0..0.0....0...1c.1.64.psy-ab..9.0.0....0.ZeuB9Hb5cxw">Brezovica</a></li>
  <li><a href="https://www.google.com/search?tbm=isch&q=nerodime&spell=1&sa=X&ved=0ahUKEwiakYXbo_bXAhXL_qQKHVWsDTkQvwUIOygA">Nerodimja</a></li>
  <li><a href="https://www.google.com/search?tbm=isch&sa=1&ei=S1ooWurhLdLTkwWpp5OQBw&q=ibri&oq=ibri&gs_l=psy-ab.3...19515.19992.0.20305.4.4.0.0.0.0.0.0..0.0....0...1c.1.64.psy-ab..4.0.0....0.z2zA1cbzHnw">Iber</a></li>
</ul>

<script>
function myFunction(places) {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "block";
        } else {
            li[i].style.display = "none";
        }
    }
}
</script>

<!--
<div id="search_container">
   <h2>Search for country</h2>
   <input type="text" name="places" id="places" autocomplete="off">
   <div id="results"></div>
</div>
<script type="text/javascript">
  $(document).ready(function(){
    $("#places").keyup(function(){
      var query = $(this).val();
      if (query != "") {
        $.ajax({
                url: 'query.php',
                method: 'POST',
                data: {query:query},
                success: function(data)
                {
                  $('#results').html(data);
                  $('#results').css('display', 'block');
                    $("#places").focusout(function(){
                        $('#results').css('display', 'none');
                    });
                    $("#places").focusin(function(){
                        $('#results').css('display', 'block');
                    });
                }
        });
      } else {
             $('#results').css('display', 'none');
      }
    });
  });
</script>
-->

  </div>
</div>

<article>
<section>
    <h3>Tourism types in Kosova</h3>
       <div style="float:left;">
           <ol style="float:left;"><li>Adventure travel 
                <ul class="types" style="font-color:black;"><br>
                    <li><a href='https://en.wikipedia.org/wiki/Hiking_in_Kosovo'target="_blank">Hiking</a></li>
                    <li><a href='https://en.wikipedia.org/wikibrezovica,_Kosovo' target="_blank">Skiing</a></li>
                    <li><a href='https://en.wikipedia.org/wiki/Forests_of_Kosovo' target="_blank">Camping</a></li>
                    <li><a href='http://www.unicycle50.com/new/Cycling_in_Kosovo.php' target="_blank">Cycling</a></li>
                </ul>
               </li><br>
            <li>Cultural tourism
                <ul class="types" style="list-style-type:circle;"><br>
                    <li><a href="https://en.wikipedia.org/wiki/Archaeology_of_Kosovo" target="_blank">Archaeology</a></li>
                           <li><a href="https://enjoypristina.wordpress.com/2012/07/27/dukagjini-bookstore/" target="_blank">Bookstore</a></li>
                </ul>
            </li><br>
            <li>Religious tourism
                <ul style="list-style-type:circle;"><br>
                    <li><a href="https://www.google.com/search?tbm=lcl&source=hp&ei=FTQwWuvKJsHIwA
                           L0uZfoDA&q=mosques+in+kosovo&oq=mosque&gs_l=psy-ab.3.0.35i39k1j0i67k1j0i
                           20i263i264k1j0j0i67k1j0i131k1j0l4.8641.10640.0.11829.10.7.1.0.0.0.294.12
                           85.0j5j2.7.0....0...1c.1.64.psy-ab..2.8.1291.0..0i20i264k1j0i10k1j0i20i2
                           63k1.0.CYI_18FA27g#rlfi=hd:;si:;mv:!1m3!1d370550.92305345234!2d21.0758542
                           5!3d42.515348949999996!2m3!1f0!2f0!3f0!3m2!1i529!2i378!4f13.1;tbs:lrf:!
                           2m1!1e2!2m4!1e17!4m2!17m1!1e2!3sIAE,lf:1,lf_ui:1" target="_blank">Muslim</a></li>
                    <li><a href="https://www.google.com/search?q=churches+in+kosovo&npsic=0&rflfq
                           =1&rlha=0&rllag=42474616,21306586,23731&tbm=lcl&ved=0ahUKEwiInv32n4XYA
                           hWRalAKHX_XDuEQtgMIKg&tbs=lrf:!2m4!1e17!4m2!17m1!1e2!2m1!1e2!2m1!1e3!3s
                           IAE,lf:1,lf_ui:1&rldoc=1#rlfi=hd:;si:;mv:!1m3!1d674248.5889059713!2d20.
                           87520245!3d42.350857299999994!2m3!1f0!2f0!3f0!3m2!1i249!2i343!4f13.1;tbs
                           :lrf:!2m1!1e2!2m1!1e3!2m4!1e17!4m2!17m1!1e2!3sIAE,lf:1,lf_ui:1" target="_blank">Christian</a></li>
                </ul>
            </li>
          </ol></div>
		  </section>
		  <section>
    <div class="textcolumns" style="float:left;">
     <h2 style="text-align:center; background-color:whitesmoke;">Some facts about tourism in Kosova</h2>
Kosova is situated in south-eastern Europe. With its central
position in the Balkans, it serves as a link in the connection
between central and south Europe, the Adriatic Sea, and Black Sea.
Tourism in Kosova is characterized by archaeological heritage
from Illyrian, Dardanian, Roman, Byzantine, Serbian and Ottoman
times, traditional Albanian and Serbian cuisine, architecture, religious
heritage, traditions, and natural landscapes.The New York Times included
Kosova on the list of 41 Places to go in 2011. In the same year, Kosova saw
a jump of about 40 places on the Skyscanner flight search engine which rates
global tourism growth.Kosova's monuments are classified as common property
for which the society is responsible to maintain them in order to transmit
their authenticity to future generations.Kosova has a variety of natural
features. It is surrounded by mountains: the Sharr Mountains are located
in the south and southeast, bordering Macedonia, while the Kopaonik Mountains
rise in the north. The southwest borders with Montenegro and Albania are also
mountainous, and home to the country's highest peak, Gjeravica, 2,656 m (8,714 ft) high.
The central region is mainly hilly, but two large plains spread over Kosova's
west and east, respectively, Metohija plain and Kosova plain.The bulk of international
tourists going to Kosova are from Albania, Germany, Italy, the United States, the
United Kingdom, Croatia and Austria. Tourism is a growing sector with more tourists
visiting the country every year.
    </div>
	</section>
	<section>
    <table  style="border-collapse:collapse;"> <br>
        <caption><br> <br><h3>Best places to visit</h3></caption>
            <tr>
                <th>Place name</th>
                <th>Description</th>
                <th>View</th>
            </tr>
            <tr>
                <td ><b>Germia</b> national park <i>Prishtina</i><br>
                Parku nacional i G&euml;rmis&euml; </td>
                <td class="twrap"> Germia national park is a regional park located in the northeast of Pristina,Kosovo, and covers an area of 62 square kilometres.This mountain massif is a part of the Rhodope Mountains,which lie from the Black Mountain of Skopje to Kopaonik mountains.Its highest point, Butos Peak, is 1050 meters above sea level andits lowest 663 meters above sea level.
                 <br />
                <a href="https://www.google.com/search?q=germia+prishtine&source=lnms&tbm=isch&sa=X&ved=0ahUKEwiF_vikovbXAhWF3KQKHV7vBYMQ_AUICygC" target="_blank">Click for more photos</a>
                </td>
                    <td>
                        <img src="images/germia.jpg" alt="Germia national park" style="width:250px;height:200px;">
                    </td>
            </tr>
            <tr>
                <td><i>Prizren</i> fortress<br>
                Kalaja e Prizerenit</td>
                <td><pre>
Prizren Fortress, also known as Kalaja, is a medieval fortress in
Prizren, Kosovo, which once served as the capital of the Serbian Empire.
 It was built on a hill above Prizren river, around which the modern
city developed. The first fort, erected on this location by the Byzantines,
was further expanded by Emperor Stefan Dušan. The fort then came under the
control of the Ottomans for four centuries. It was declared a Monument
of Culture of Exceptional Importance in 1948</pre>
                <a href="https://www.google.com/search?tbm=isch&sa=1&ei=01goWqDvENCukwWylInQCQ&q=kalaja+e+prizerenit&oq=kalaja+e+prizerenit&gs_l=psy-ab.3...141726.147136.0.147692.23.16.0.0.0.0.794.794.6-1.1.0....0...1c.1.64.psy-ab..22.1.793...0.0.FpCP-O3vqBo" target="_blank">Click for more photos</a>
                </td>
                <td>
                    <img src="images/prizren.jpg" alt="Prizren fortress" style="width:250px;height:200px;">
                </td>
            </tr>
            <tr>
                <td><b>Gadimja</b> cave <i>Lipjan</i><br>
                Shpella e Gadimes Lipjan</td>
                <td class="twrap">
The Marble Cave (Albanian: Shpella e Mermerit) is a karst
limestone cave in the village of Gadime e Ulët (Donje Gadimlje),
in the municipality of Lipljan in Kosovo.Much of it is still
unexplored. The cave was found in 1966 by a villager, Ahmet Asllani,
who was working on his garden.
                    <br />
                <a href="https://www.google.com/search?tbm=isch&sa=1&ei=j1koWsuVB430kwX7p6CwCg&q=shpella+e+gadimes&oq=shpella+e+gadimes&gs_l=psy-ab.3...35332.38660.0.38803.17.10.0.0.0.0.0.0..0.0....0...1c.1.64.psy-ab..17.0.0....0.9m9oY1NWidM" target="_blank">Click for more photos</a>
                </td>
                    <td>
                        <img src="images/shpellaa.png" alt="Gadimja Cave" style="width:250px;height:200px;">
                    </td>
            </tr>
            <tr>
                <td><b>Rugova</b> canyon <i>Peja</i><br>
                Gryka e Rugov&euml;s Pej&euml;</td>
                <td><pre>
Rugova Canyon or Rugova Gorge (Albanian: Gryka e Rugovës) is a river canyon
near Peja in Western Kosova, in the Prokletije mountains, close to the border
with Montenegro. With a length of 25 km (16 mi) and a depth up to 1,000 meters,
Rugova is considered to be one of Europe's longest and deepest canyons. It was
created by water erosion and the retreat of the Peja glacier. The Peja river cuts
through the canyon.</pre>
                <a href="https://www.google.com/search?tbm=isch&sa=1&ei=wlkoWtjLI5CisAfs2I_QCg&q=gryka+e+rugoves&oq=gryka+e+rugoves&gs_l=psy-ab.3...29506.32001.0.32289.15.9.0.0.0.0.0.0..0.0....0...1c.1.64.psy-ab..15.0.0....0.mTKU8MpjFYY" target="_blank">Click for more photos</a>
                </td>
                <td>
                    <img src="images/rugova.jpg" alt="Rugova canyon" style="width:250px;height:200px;">
                </td>
            </tr>
            <tr>
                <td><b>Brezovica</b> ski resort <i>Ferizaj</i><br>
                    Aren&euml; skijimi Brezovic&euml; Ferizaj</td>
                <td class="twrap">
Brezovica is the most visited winter tourist destinations in Kosovo.
The ski resort area is ideally situated on the north and
northwest-facing slopes of the Sharr National Park. The ridge line spans
39,000 hectares of high alpine mountain terrain and forests, with a highly
diverse and abundant flora and fauna. Located within 90 minutes of two
international airports, the Brezovica resort area represents one of the
last remaining under-developed ski resort areas in Southeast Europe.<br />
                <a href="https://www.google.com/search?tbm=isch&sa=1&ei=C1ooWvqaK8zSsAf0s7iYBg&q=brezovica&oq=brezovica&gs_l=psy-ab.3...17687.19763.0.19895.9.7.0.0.0.0.0.0..0.0....0...1c.1.64.psy-ab..9.0.0....0.ZeuB9Hb5cxw" target="_blank">Click for more photos</a>
                </td>
                <td>
                    <img src="imagesbrezovica.jpg" alt="Brezovica" style="width:250px;height:200px;">
                </td>
            </tr>
            <tr>
                <td><b>Nerodime</b> bifurcation <i>Ferizaj</i><br>
                Bifurkacioni i lumit Nerodime Ferizaj</td>
                <td><pre>
The Nerodimka (Albanian: Nerodimja, Nerodime), is a river in the Nerodimje
region of Kosovo, a 41 km-long left tributary to the Lepenac river. It
represents Europe's only instance of a river bifurcation flowing into two
seas, dividing into two irreversible branches. The left branch flows into
the Black Sea, and the right branch flows into the Aegean Sea.</pre>
                <a href="https://www.google.com/search?tbm=isch&q=nerodime&spell=1&sa=X&ved=0ahUKEwiakYXbo_bXAhXL_qQKHVWsDTkQvwUIOygA" target="_blank">Click for more photos</a>
                </td>
                <td>
                    <img src="images/nerodime.jpg" alt="Nerodime bifurcation" style="width:250px;height:200px;">
                </td>
            </tr>
            <tr>
                <td><b>Ibri</b> river <i>Mitrovica</i><br>
                    Lumi i Ibrit Mitrovic&euml;</td>
                <td class="twrap">
The Ibar, also known as the Ibër and Ibri, is a river that flows through
eastern Montenegro, Serbia and Kosovo, with a total length of 276 km (171 mi).
The river begins in the Hajla mountain, in Rozhaje, eastern Montenegro,
passes through Kosovo and flows into the West Morava river, Central Serbia,
near Kraljevo<br />
                <a href="https://www.google.com/search?tbm=isch&sa=1&ei=S1ooWurhLdLTkwWpp5OQBw&q=ibri&oq=ibri&gs_l=psy-ab.3...19515.19992.0.20305.4.4.0.0.0.0.0.0..0.0....0...1c.1.64.psy-ab..4.0.0....0.z2zA1cbzHnw" target="_blank">Click for more photos</a>
                </td>
                <td>
                    <img src="images/ibri.jpg" alt="Iber lake" style="width:250px;height:200px;">
                </td>
            </tr>
            <tr>
                <td><i>Gjakova</i> ethnographic museum<br>
                Muzeu etnografik Gjakov&euml;</td>
                <td><pre>
Ethnographic museum is situated in the “Citizen Traditional House”, a house
with the most interesting characteristics in the city, representing the
typical urban residence. This house has been built already in 1830 by
masters from Dibra. </pre>
                <a href="https://www.google.com/search?tbm=isch&sa=1&ei=bVooWqz7GNGNkwXp0ocQ&q=muzeu+etnografik+i+gjakoves&oq=muzeu+etnografik+i+gjakoves&gs_l=psy-ab.3...0.0.1.3191.0.0.0.0.0.0.0.0..0.0....0...1c..64.psy-ab..0.0.0....0.SKZSamp19c8" target="_blank">Click for more photos</a>
                </td>
                <td>
                    <img src="images/gjakova.jpg" alt="Gjakova museum" style="width:250px;height:200px;">
                </td>
            </tr>
            <tr>
                <td>Horse farm <i>Gjilan</i><br>
                Ferma e kuajve Gjilan</td>
                <td class="twrap">
Vali Ranch is an all-in-one stop for travelers that is located in eastern Kosovo,
just outside of Gjilan. Vali ranch offers fast service, a restaurant that
serves both traditional and international dishes, and a wide range of activities
including (but not limited to), miniature golf, and horseback riding. <br />
                <a href="https://www.google.com/search?tbm=isch&sa=1&ei=v1ooWqPwE8zWkwXxrK6YDw&q=vali+ranch&oq=vali+ranch&gs_l=psy-ab.3..0l5j0i30k1l2j0i5i30k1l3.15396.17980.0.18255.11.9.0.0.0.0.478.478.4-1.2.0....0...1c.1.64.psy-ab..9.1.477.0...394.sli65lmbXy4" target="_blank" >Click for more photos</a>
                </td>
                <td>
                    <img src="images/gjilan.jpg" alt="Gjilan horse farm" style="width:250px;height:200px;">
                </td>
            </tr>
            <tr>
                <td><b>Trofta</b> fish farm <i>Istog</i><br>
                Ferma e peshkut Trofta Istog</td>
                <td><pre>
Everyone in Kosovo knows Istog as the little city in the mountains to Montenegro,
but also everyone connects Istog automatically with TROFTA or vice versa. The fish
restaurant with extremely large garden directly at the fish farm is just beautiful. </pre>
                <a href="https://www.google.com/search?tbm=isch&sa=1&ei=4looWtKZFYLWkwWP2Kb4Ag&q=trofta+istog&oq=trofta+istog&gs_l=psy-ab.3...35719.37826.0.37988.12.8.0.0.0.0.0.0..0.0....0...1c.1.64.psy-ab..12.0.0....0.-rvbKhTC1as" target="_blank">Click for more photos</a>
                </td>
                <td>
                    <img src="images/trofta.jpg" alt="Trofta" style="width:250px;height:200px;">
                </td>
            </tr>
        </table> </section><br /><br /><br />

		<section>
        <h4>Other places worth visiting (Click on photos for more about the place)</h4> <br /><br />
   <div id="outline-offset">
    <div style="padding-left: 150px">
        <a href="https://www.biblioteka-ks.org/" target="_blank">
            <img id="a1" src="images/2560px-National_Library_of_Kosovo_Arben_Llapashtica.jpg" alt="National library-Prishtina;" style="width:300px;height:250px;"></a>
        <a href="https://en.wikipedia.org/wiki/Albanian_cuisine" target="_blank">
            <img id="a2" src="images/fli.jpg" alt="Something you should eat. Tasty!" style="width:300px;height:250px;"></a>
        <a href="http://www.viewkosova.com/listing/leqinat-lake/" target="_blank">
            <img id="a3" src="images/liqenat.jpg" alt="Lake-Rugova" style="width:300px;height:250px;"></a>
    </div>
    <div style="padding-left: 150px;">
        <a href="https://en.wikipedia.org/wiki/Mirusha_waterfalls" target="_blank">
            <img id="a4" src="images/mirusha.jpg" alt="Mirusha waterfalls" style="width:300px;height:250px;"></a>
        <a href="https://en.wikipedia.org/wiki/Pristina" target="_blank">
            <img id="a5" src="images/PRISHTINA_2013_(15).jpg" alt="Capital of Kosova" style="width:300px;height:250px;"></a>
        <a href="https://geographic.org/geographic_names/name.php?uni=520383&fid=3577&c=kosovo" target="_blank">
            <img id="a6" src="images/radafc.jpg" alt="Radafc waterfall" style="width:300px;height:250px;"></a>
    </div>
  </div>
  </section>

 <!--Kodi per Footer-->
 <div id="footer">
        <div class="wrapper head-flex">
            <div class="about">
                <br>
                    <p><b>Where to find us:</b></p>
                    <a href="https://www.tumblr.com/tagged/kosovo" target="_blank"><img src="images/tumblrlogo.png" alt="Tumblr" id="imglogo" ></a>
                    <a href="https://www.instagram.com/visitkosova/" target="_blank"><img src="images/instagramlogo.png" alt="Insta" id="imglogo"></a>
                    <a href="https://www.youtube.com/channel/UCrBPPGyR_7aOd882VpMRkRg" target="_blank"><img src="images/youtubelogo.png" alt="YT" id="imglogo"></a>
                    <a href="https://www.pinterest.com/explore/kosovo/" target="_blank"><img src="images/pinterestlogo.png" alt="P" id="imglogo"></a>
                    <p><a href="mailto:visitkosovoproject@gmail.com" style="text-decoration:none;color: black;"><img src="images/email.png" alt="Email"><span class="findfooter">visitkosovoproject@gmail.com </span></a></p>
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
