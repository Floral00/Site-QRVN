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
 
 <?php  require("decide-lang.php"); ?>

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

<h1 class="titre">Le château de Brabois</h1>
<img src="cb.jpg" alt="Le château de Brabois" width="500" height="375" id="mid">
<br/>

<p id="desc"><?php echo braboit; ?></p>
<br/>
<audio id="audioPlayer"  controls>
<source src="Brabois.m4a" type="audio/ogg"> 
</audio>
<?php echo brabois; ?>



<p id="desc">Carte</p>

<br/>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d658.8932011514398!2d6.146715329264315!3d48.65628708460405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDjCsDM5JzIyLjYiTiA2wrAwOCc1MC4yIkU!5e0!3m2!1sfr!2sfr!4v1545861511745" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>

<br/>

<p id="desc">Photos</p>


<div style="display: inline-block; margin-left: 5px;">
<p class="imgc"><img src="Braboisp1.jpg" alt="photo château" height="300"
  onclick="openModal();currentSlide(1)" class="hover-shadow cursor"></p>
<p class="imgc"><img src="Braboisp2.jpg" alt="photo château" height="300"
  onclick="openModal();currentSlide(2)" class="hover-shadow cursor"></p>
<p class="imgc"><img src="braboisp4.jpg" alt="photo château" height="300"
  onclick="openModal();currentSlide(3)" class="hover-shadow cursor"></p>
<p class="imgc"><img src="braboisp5.jpg" alt="photo château" height="300"
  onclick="openModal();currentSlide(4)" class="hover-shadow cursor"></p>
<p class="imgc"><img src="Braboisp3.jpg" alt="photo château"  height="300"
  onclick="openModal();currentSlide(5)" class="hover-shadow cursor"></p>
<p class="imgc"><img src="chbrab.jpg" alt="photo château" height="300"
  onclick="openModal();currentSlide(6)" class="hover-shadow cursor"></p>
<p class="imgc"><img src="chbrab2.jpg" alt="photo château" height="300"
  onclick="openModal();currentSlide(7)" class="hover-shadow cursor"></p>
<p class="imgc"><img src="chbrab3.jpg" alt="photo château" height="300"
  onclick="openModal();currentSlide(8)" class="hover-shadow cursor"></p>
<p class="imgc"><img src="chbrab4.jpg" alt="photo château" height="300"
  onclick="openModal();currentSlide(9)" class="hover-shadow cursor"></p>

</div>
</div>

<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 9</div>
      <img src="Braboisp1.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 9</div>
      <img src="Braboisp2.jpg" style="width:100%">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">3 / 9</div>
      <img src="braboisp4.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">4 / 9</div>
      <img src="braboisp5.jpg" style="width:100%">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">5 / 9</div>
      <img src="Braboisp3.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">6 / 9</div>
      <img src="chbrab.png" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">7 / 9</div>
      <img src="chbrab2.png" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">8 / 9</div>
      <img src="chbrab3.png" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">9 / 9</div>
      <img src="chbrab4.png" style="width:100%">
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>
      
</div>

 </body>
</html>