<!DOCTYPE html>

<html>
 <head>
  <meta charset='utf-8'>
  <title>QRVillers-lès-Nancy</title>
  <script src="java.js" type="text/javascript">
  </script>   
     <link rel="stylesheet" href="CSS.css" type="text/css" />

 </head>
 <body>

 <header>
 <?php require ("decide-lang.php");
?>
 
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

<img src="iconeQRVillers-les-Nancy.png" alt="logo QRVillers-les-Nancy" width="150" height="150" id="im">

<h1 class="titre">Le château de l'Asnée</h1>

<img src="chateau-de-lasnee.jpg" alt="Le château de l'Asnée" width="480" height="360" id="mid">

<br/>

<p id="desc"><?php echo asneet; ?></p>
<br/>
<audio id="audioPlayer"  controls>
<source src="Asnee.m4a" type="audio/ogg"> 
</audio>
<br/><br/>
<?php echo asnee; ?>


<br/>

<p id="desc">Carte</p>

<br/>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2634.6371054639003!2d6.140160515898332!3d48.6741826216129!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4794a2605a8835ab%3A0x1033d61bc988735b!2zQ2jDonRlYXUgZGUgbCdBc27DqWU!5e0!3m2!1sfr!2sfr!4v1545860947817" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>

<br/>


<p id="desc">Photos</p>

<div style="display: inline-block; margin-left: 5px;">
<p class="imgc"><img src="asneep1.jpg" alt="photo château" height="300"
  onclick="openModal();currentSlide(1)" class="hover-shadow cursor"></p>
<p class="imgc"><img src="asneep4.jpg" alt="photo château" width="600"
  onclick="openModal();currentSlide(2)" class="hover-shadow cursor"></p>
<p class="imgc"><img  src="asneep5.jpg" alt="photo château"   height="300"
  onclick="openModal();currentSlide(3)" class="hover-shadow cursor"></p>
<p class="imgc"><img src="asneep2.jpg" alt="photo château" height="300"
  onclick="openModal();currentSlide(4)" class="hover-shadow cursor"></p>
<p class="imgc"><img src="asneep3.jpg" alt="photo château" height="300"
  onclick="openModal();currentSlide(5)" class="hover-shadow cursor"></p>
<p class="imgc"><img src="asneedetail.jpg" alt="photo château" height="300" 
  onclick="openModal();currentSlide(6)" class="hover-shadow cursor"></p>
<p class="imgc"><img src="asneeescalierinterieur.jpg" alt="photo château" height="300" 
  onclick="openModal();currentSlide(7)" class="hover-shadow cursor"></p>
<p class="imgc"><img src="deatilasnee.jpg" alt="photo château" height="300" 
  onclick="openModal();currentSlide(8)" class="hover-shadow cursor"></p>
  <p class="imgc"><img src="domainedelasnee.jpg" alt="photo château" height="300" 
  onclick="openModal();currentSlide(9)" class="hover-shadow cursor"></p>
  <p class="imgc"><img src="entreeasnee.jpg" alt="photo château" height="300" 
  onclick="openModal();currentSlide(10)" class="hover-shadow cursor"></p>
</div>


</div>
<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 10</div>
      <img src="asneep1.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 10</div>
      <img src="asneep4.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 10</div>
      <img src="asneep5.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">4 / 10</div>
      <img src="asneep2.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">5 / 10</div>
      <img src="asneep3.jpg" style="width:100%">
    </div>
        <div class="mySlides">
      <div class="numbertext">6 / 10</div>
      <img src="asneedetail.jpg" style="width:100%">
    </div>

     	<div class="mySlides">
      <div class="numbertext">7 / 10</div>
      <img src="asneeescalierinterieur.jpg" style="width:100%">
    </div>

        <div class="mySlides">
      <div class="numbertext">8 / 10</div>
      <img src="deatilasnee.jpg" style="width:100%">
    </div>

        <div class="mySlides">
      <div class="numbertext">9 / 10</div>
      <img src="domainedelasnee.jpg" style="width:100%">
    </div>

        <div class="mySlides">
      <div class="numbertext">10 / 10</div>
      <img src="entreeasnee.jpg" style="width:100%">
    </div>
    
    
    

    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>







 </body>
</html>
