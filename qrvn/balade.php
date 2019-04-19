<!DOCTYPE html>
<html lang="fr">
 <head>
  <meta charset='utf-8'/>
  <title>QRVillers-lès-Nancy</title>
  <script src=".js" type="text/javascript">
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


	<div class="divtitre">
<h1 class="titre"><?php echo baladet;?></h1>
</div>

<p class="TitreBalade"><?php echo baladet1;?></p>
<p class="ppp"><?php echo tb;?><span class="temps">2</span> <?php echo hs;?></p>

<div class="ppp">
<img  class="photo111" src="chateaummedegraffigny.jpg" alt="Cliquez ici pour accéder à la balade des sept châteaux" usemap="#logodownload"/>
</div>

<map name="logodownload">
	<area shape="rect" Coords="0,0,700,200" alt="Cliquez ici pour accéder à la première balade" href="balade1.php"/>
	</map>

<br/>
<br/>

</div>


 </body>
</html>

