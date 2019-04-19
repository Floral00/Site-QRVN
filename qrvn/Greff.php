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

<h1 class="titre">La Tour Greff</h1>
<img src="tourgreff.jpg" alt="La Tour Greff" width="321.2" height="480"  id="mid">
<br/>

<p id="desc"><?php echo greft; ?></p>

<br/>
<audio id="audioPlayer"  controls>
<source src="Greff.m4a" type="audio/ogg"> 
</audio>
<?php echo gref; ?>


<p id="desc">Carte</p>

<br/>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d329.36255126210534!2d6.141941248370811!3d48.6691473356856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4794a266fdebc38b%3A0x8bb7bfead9d6a038!2s1+Rue+du+Chanoine+Pieron%2C+54600+Villers-l%C3%A8s-Nancy!5e0!3m2!1sfr!2sfr!4v1555332532602!5m2!1sfr!2sfr" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

<br/>

<p id="desc">Photos</p>

<div style="display: inline-block; margin-left: 5px;">
<p><img src="greff1.jpg" alt="photo château" height="300"
  onclick="openModal();currentSlide(1)" class="hover-shadow cursor"></p>
<p><img src="greff2.jpg" alt="photo château" height="300"
  onclick="openModal();currentSlide(2)" class="hover-shadow cursor"></p>
<p><img src="greff3.jpg" alt="photo château" height="300"
  onclick="openModal();currentSlide(3)" class="hover-shadow cursor"></p>
<p><img src="greff4.jpg" alt="photo château" height="300"
  onclick="openModal();currentSlide(4)" class="hover-shadow cursor"></p>    
</div>

</div>

  <div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 4</div>
      <img src="greff1.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 4</div>
      <img src="greff2.jpg" style="width:100%">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">3 / 4</div>
      <img src="greff3.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">4 / 4</div>
      <img src="greff4.jpg" style="width:100%">
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>

</div>

 </body>
</html>