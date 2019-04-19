<?php
    ob_start(); // Initiate the output buffer
?>
<!DOCTYPE html>
<html>
 <head>
  <meta charset='utf-8'>
  <title>QRVillers-lès-Nancy</title>
  <script src=".js" type="text/javascript">
  </script>   
    <link rel="stylesheet" href="CSS.css" type="text/css"/>

 </head>
 <body>


	<header>

  <?php require("decide-lang.php"); ?>

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

<img src="iconeQRVillers-les-Nancy.png" alt="logo QRVillers-lès-Nancy" width="150" height="150" id="im"/>


<div class="divtitre">
<h1 class="titre"><?php echo ldb1; ?></h1></div>

<p class="p1b1"><?php echo ldb2; ?></p>
<br/><br/>

<div style="width: 800px; height: 350px;">
<nav id="liste">
<ul>
<li id="align"><a title="Asnee" href="Asnee.php">Le château de l'Asnée</a></li>
<li id="align"><a title="Greff" href="Greff.php">La Tour Greff</a></li>
<li><a title="Graffigny" href="Graffigny.php">Le château Madame de Graffigny (ex GEC)</a></li>
<li><a title="Chatellus" href="Chatellus.php">Le château Simon de Chatellus</a></li>
<li id="align"><a title="Saint-Fiacre" href="Saint-Fiacre.php">Le château Saint-Fiacre</a></li>
<li id="align"><a title="Remicourt" href="Remicourt.php">Le château de Remicourt</a></li>
<li id="align"><a title="Brabois" href="Brabois.php">Le château de Brabois</a></li>
</ul>
</nav>


</div>
</div>


 </body>
</html>

