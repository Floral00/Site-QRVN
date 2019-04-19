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

<h1 class="titre">Le château de Remicourt</h1>
<img src="remicourt.jpg" alt="Le château de Rémicourt" width="700" height="200" id="mid">
<br/>

<p id="desc"><?php echo remit; ?>
</p>

<br/>
<audio id="audioPlayer"  controls>
<source src="Remicourt.m4a" type="audio/ogg"> 
</audio>
<br/><br/>
<?php echo remicourt; ?>



<p id="desc">Carte</p>

<br/>
<iframe src="https://www.google.com/maps/embed?pb=!1m25!1m12!1m3!1d5270.642727358666!2d6.145341928705708!3d48.6610964536055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m10!3e2!4m3!3m2!1d48.6664167!2d6.1513056!4m4!2s48.65628620004921%2C6.147262505062827!3m2!1d48.6562862!2d6.1472625!5e0!3m2!1sfr!2sfr!4v1545860010347" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
<br/>

<p id="desc">Photos</p>


<div style="display: inline-block; margin-left: 5px;">
<p><img src="remip1.jpg" alt="photo château" height="300"
  onclick="openModal();currentSlide(1)" class="hover-shadow cursor"></p>
<p><img src="remip4.jpg" alt="photo château" height="300"
  onclick="openModal();currentSlide(2)" class="hover-shadow cursor"></p>
<p><img src="remip5.jpg" alt="photo château" height="300"
  onclick="openModal();currentSlide(3)" class="hover-shadow cursor"></p>
<p><img src="remip2.jpg" alt="photo château" height="300"
  onclick="openModal();currentSlide(4)" class="hover-shadow cursor"></p>
<p><img src="remip3.jpg" alt="photo château" height="300"
  onclick="openModal();currentSlide(5)" class="hover-shadow cursor"></p>
<p><img src="remip6.jpg" alt="photo château" height="300"
  onclick="openModal();currentSlide(6)" class="hover-shadow cursor"></p>
<p><img src="remip7.jpg" alt="photo château" height="300"
  onclick="openModal();currentSlide(7)" class="hover-shadow cursor"></p>
<p><img src="remip8.jpg" alt="photo château" height="300"
  onclick="openModal();currentSlide(8)" class="hover-shadow cursor"></p>
</div>




<p class="TitreBalade"> <?php echo continuet; ?></p>
<img src="continuer.jpg" width="300" height="123" alt="Continuer" onClick="javascript:document.location.href='Brabois1.php'" />
</div>

<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 8</div>
      <img src="remip1.jpg" style="width:100%">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">2 / 8</div>
      <img src="remip4.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 8</div>
      <img src="remip5.jpg" style="width:100%">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">4 / 8</div>
      <img src="remip2.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">5 / 8</div>
      <img src="remip3.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">6 / 8</div>
      <img src="remip6.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">7 / 8</div>
      <img src="remip7.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">8 / 8</div>
      <img src="remip8.jpg" style="width:100%">
    </div>            
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>
 </body>
</html>