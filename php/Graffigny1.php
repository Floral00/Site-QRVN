<!DOCTYPE html>
<html lang="fr">
 <head>
  <meta charset='utf-8'>
  <title>QRVillers-lès-Nancy</title>
  <script src="java.js" type="text/javascript">
  </script>   
     <link rel="stylesheet" href="CSS.css" type="text/css" />

 </head>
 <body>

 <header>
<?php require("decide-lang.php") ?>
 
 
</header>

<nav id="primary_nav">
 
      <ul>
 
        <li><a onClick="javascript:document.location.href='QRVillers-les-Nancy.php'"><?php echo QR; ?></a></li>
 
        <li><a onClick="javascript:document.location.href='balade.php'"><?php echo balade; ?></a></li>
 
        <li><a onClick="javascript:document.location.href='ldb.php'"><?php echo ldb; ?></a></li>
 
        <li><a onClick="javascript:document.location.href='esp.php'"><?php echo esp; ?></a></li>
 
 

 

    </ul>
 
</nav>

<div class="global">

<img src="iconeQRVillers-les-Nancy.png" alt="logo QRVillers-lès-Nancy" width="150" height="150" id="im">

<h1 class="titre">Le château Madame de Graffigny (ex GEC)</h1>
<img src="chateaummedegraffigny.jpg" alt="Le château Madame de Graffigny"  id="mid">
<br/>

<p id="desc"><?php echo graft; ?></p>

<br/>
<audio id="audioPlayer"  controls="controls">
<source src="Mme de graffigny.m4a" type="audio/ogg"> 
</audio>
<?php echo graff; ?>




<p id="desc">Carte</p>

<br/>
<iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d2634.9615972544902!2d6.145089465898128!3d48.66797717204856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e2!4m4!2s48.67024958775726%2C6.146060875424155!3m2!1d48.6702496!2d6.1460609!4m4!2s48.66615061287881%2C6.148775270947226!3m2!1d48.666150599999995!2d6.1487753!5e0!3m2!1sfr!2sfr!4v1545860687967" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
<br/>

<p id="desc">Photos</p>

<div style="display: inline-block; margin-left: 5px;">
<p class="imgc"><img src="grap1.jpg" alt="photo château" height="300"
  onclick="openModal();currentSlide(1)" class="hover-shadow cursor"></p>
<p class="imgc"><img src="grap4.jpg" alt="photo château" height="300"
  onclick="openModal();currentSlide(2)" class="hover-shadow cursor"></p>
<p class="imgc"><img src="grap5.jpg" alt="photo château" height="300"
  onclick="openModal();currentSlide(3)" class="hover-shadow cursor"></p>
<p class="imgc"><img src="grap3.jpg" alt="photo château" height="300"
  onclick="openModal();currentSlide(4)" class="hover-shadow cursor"></p>
<p class="imgc"><img src="parcgraf1.jpg" alt="photo château" height="300"
  onclick="openModal();currentSlide(5)" class="hover-shadow cursor"></p>
</div>





<p class="TitreBalade"> <?php echo continuet; ?></p>
<img src="continuer.jpg" width="300" height="123" alt="Continuer" onClick="javascript:document.location.href='Chattelus1.php'" />

</div>

<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 5</div>
      <img src="grap1.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 5</div>
      <img src="grap4.jpg" style="width:100%">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">3 / 5</div>
      <img src="grap5.jpg" style="width:100%">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">4 / 5</div>
      <img src="grap3.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">5 / 5</div>
      <img src="parcgraf1.jpg" style="width:100%">
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>

</div>

 </body>
</html>
