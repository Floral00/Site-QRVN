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

<h1 class="titre">Le château Saint-Fiacre</h1>
<img src="fiap4.jpg" alt="Le château Saint-Fiacre" width="550" height="350"  id="mid">
<br/>

<p id="desc"><?php echo sft; ?></p>

<br/>
<audio id="audioPlayer"  controls>
<source src="Saint fiacre.mp3" type="audio/ogg"> 
</audio>
<?php echo stfiacre; ?>
<p id="desc">Photos</p>


<div style="display: inline-block; margin-left: 5px;">
<p><img src="1979 saint fiacre villers les nancy.jpg" alt="photo château" height="300"
  onclick="openModal();currentSlide(1)" class="hover-shadow cursor"></p>
<p><img src="fiap2.jpg" alt="photo château" height="300"
  onclick="openModal();currentSlide(2)" class="hover-shadow cursor"></p>
<p><img src="fiap4.jpg" alt="photo château" height="300"
  onclick="openModal();currentSlide(3)" class="hover-shadow cursor"></p>
<p><img src="fiap5.jpg" alt="photo château" height="300"
  onclick="openModal();currentSlide(4)" class="hover-shadow cursor"></p>
<p><img src="fiap3.jpg" alt="photo château" height="300"
  onclick="openModal();currentSlide(5)" class="hover-shadow cursor"></p>
</div>



<br/>
<p class="TitreBalade"> <?php echo fin; ?></p>

</div>

<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 5</div>
      <img src="1979 saint fiacre villers les nancy.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 5</div>
      <img src="fiap2.jpg" style="width:100%">
    </div>
  
    <div class="mySlides">
      <div class="numbertext">3 / 5</div>
      <img src="fiap4.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">4 / 5</div>
      <img src="fiap5.jpg" style="width:100%">
    </div>
   
    <div class="mySlides">
      <div class="numbertext">5 / 5</div>
      <img src="fiap3.jpg" style="width:100%">
    </div>
   
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>
</div>

 </body>
</html>