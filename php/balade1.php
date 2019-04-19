<!DOCTYPE html>

<html lang="fr">
 <head>
  <meta charset='utf-8'>
  <title>QRNancy</title>
  <script src=".js" type="text/javascript">
  </script>   
    <link rel="stylesheet" href="CSS.css" type="text/css"/>

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
<img src="iconeQRVillers-les-Nancy.png" alt="logo QRNancy" width="150" height="150" id="im">


<h1 class="titre"><?php echo balade1t; ?></h1>
    <br/><br/>
<p class="p1b1"><?php echo balade1m; ?> <strong class="temps">2</strong> <?php echo balade1n; ?></p>
<p class="p1b1"><?php echo balade1b; ?></p>
    <br/><br/>

    <div class="center">
        <p><strong style="padding-bottom: 5px;">Nom des différents monuments :</strong></p>
        <ol style="list-style-position: initial; ">
	<li>Château de Rémicourt</li>
	<li>Château de Brabois</li>
	<li>La Tour Greff</li>
	<li>Château de l'Asnée</li>
	<li>Château de Madame de Graffigny</li>
	<li>Château Simon de Chattelus</li>
	<li>Château de Saint-Fiacre</li>
</ol>
</div>
    <br/><br/>

    <iframe src="https://www.google.com/maps/embed?pb=!1m62!1m12!1m3!1d10540.279529435333!2d6.1375888950610165!3d48.66590624003358!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m47!3e2!4m5!1s0x4794a27aafa79563%3A0x89871ce7516078d7!2sCh%C3%A2teau+de+Remicourt%2C+54600+Villers-l%C3%A8s-Nancy!3m2!1d48.666143!2d6.15105!4m5!1s0x4794a26d4f2e1467%3A0x48a329be3afcaee!2sCh%C3%A2teau+de+Brabois%2C+54600+Villers-l%C3%A8s-Nancy!3m2!1d48.6563328!2d6.1472408!4m5!1s0x4794a266fdebc38b%3A0x8bb7bfead9d6a038!2s1+Rue+du+Chanoine+Pieron%2C+54600+Villers-l%C3%A8s-Nancy!3m2!1d48.6690579!2d6.142129!4m3!3m2!1d48.6758777!2d6.1450628!4m5!1s0x4794a2641ac35481%3A0xe814dab5a3a4ec50!2sCh%C3%A2teau+Mme+de+Graffigny%2C+Rue+Albert+1er%2C+Villers-l%C3%A8s-Nancy!3m2!1d48.670235!2d6.1460552999999996!4m5!1s0x4794a264110c8f21%3A0x660cbaccac846cf0!2s%C3%89cole+primaire+du+ch%C3%A2teau%2C+4+Rue+Albert+1er%2C+54600+Villers-l%C3%A8s-Nancy!3m2!1d48.6696673!2d6.1458508!4m5!1s0x4794a2656a324cd5%3A0xdb16c6d6090baf8f!2sCh%C3%A2teau+Saint-Fiacre%2C+54600+Villers-l%C3%A8s-Nancy!3m2!1d48.6669245!2d6.1488204!4m5!1s0x4794a27aafa79563%3A0x89871ce7516078d7!2sCh%C3%A2teau+de+Remicourt%2C+Villers-l%C3%A8s-Nancy!3m2!1d48.666143!2d6.15105!5e0!3m2!1sfr!2sfr!4v1555332738966!5m2!1sfr!2sfr" width="800" height="750" frameborder="0" style="border:0;     display: block;
    margin-left: auto;
    margin-right: auto; " allowfullscreen></iframe>

<p class="TitreBalade"> <?php echo lancerbalade; ?></p>
<img src="continuer.jpg" width="300" height="123" alt="Continuer" style="    display: block;
    margin-left: auto;
    margin-right: auto" onClick="javascript:document.location.href='Remicourt1.php'" />

</div>

 </body>
</html>

