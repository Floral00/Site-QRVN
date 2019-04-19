<!DOCTYPE html>
<html lang="fr">
 <head>
  <meta charset='utf-8'/>
  <title>QRVillers-lès-Nancy</title>

  <link rel="stylesheet" href="CSS.css" type="text/css" />

 </head>
 <body>

<header>
 
 
<?php require("decide-lang.php") ?>


<nav id="primary_nav">
 
       <ul>
 
        <li><a onClick="javascript:document.location.href='QRVillers-les-Nancy.php'"><?php echo QR; ?></a></li>
 
        <li><a onClick="javascript:document.location.href='balade.php'"><?php echo balade; ?></a></li>
 
        <li><a onClick="javascript:document.location.href='ldb.php'"><?php echo ldb; ?></a></li>
 
        <li><a onClick="javascript:document.location.href='esp.php'"><?php echo esp; ?></a></li>


    </ul>
 
</nav>
</header>

<div class="global">
<img src="iconeQRVillers-les-Nancy.png" alt="logo QRVillers-lès-Nancy" width="150" height="150" id="im"/>


<div class="divtitre">
<h1 class="titre"><?php echo qr1; ?></h1></div>
<h3><?php echo qr2; ?></h3>


<p><?php echo qr3; ?></p>




<img src="fondqrvln1.jpg" width="489" height="514" alt="image fond qrvln"/>
<br/>

	<p style="font-size: 14px"><?php echo esp3 ?></p>

<img src="logovln.jpg" width="150" height="75" alt="logo qrvln" style="float: left;" />
<img src="r&t.png" width="325" height="75" alt="logo r & t Nancy" style="float: left;"/>



<div class="divtel">
<p><?php echo esp4 ?></p>
</div>

<div class="download">
<a href="https://play.google.com/store/apps/details?id=com.qrvillers_les_nancy.qrvln.qrvillers_les_nancy&rdid=com.qrvillers_les_nancy.qrvln.qrvillers_les_nancy" title="adresse google play de l'application"><img src="google_play_logo.png" width="116,09375" height="109,375" alt="Lien de telechargement" style="margin-right: 10px;" /></a>
</div>


</div>

 </body>
</html>

