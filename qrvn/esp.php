<!DOCTYPE html>
<html lang="fr">
 <head>
  <meta charset='utf-8'>
  <title>QRVillers-lès-Nancy</title>

 <link rel="stylesheet" href="CSS.css" type="text/css" />

     <style>
         a.mt-share-inline-bar-sm img {
             width: 34px;
             height: auto;
             border: 0px;
         }
         a.mt-share-inline-bar-sm:hover {
             z-index: 50;
             transform: scale3d(1.075, 1.075, 1.075);
         }
         a.mt-share-inline-bar-sm {
             display: inline-block;
             width: 64px;
             height: 32px;
             border-radius: 0px;
             margin-right: 0px;
             text-align: center;
             position: relative;
             transition: all 100ms ease-in 0s;
             transform: scale3d(1, 1, 1);
         }
         .mt-linkedin:hover {
             background-color: rgb(16, 135, 192);
         }
         .mt-linkedin {
             background-color: rgb(14, 118, 168);
         }
         .mt-twitter:hover {
             background-color: rgb(8, 187, 255);
         }
         .mt-twitter {
             background-color: rgb(0, 172, 238);
         }
         .mt-facebook:hover {
             background-color: rgb(66, 100, 170);
         }
         .mt-facebook {
             background-color: rgb(59, 89, 152);
         }
         .mt-pinterest:hover {
             background-color: rgb(221, 42, 48);
         }
         .mt-pinterest {
             background-color: rgb(204, 33, 39);
         }
     </style>
 </head>
 <body>

<script src="https://apis.google.com/js/platform.js" async defer>
  {lang: 'fr'}
</script>

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
<img src="iconeQRVillers-les-Nancy.png" alt="logo QRNancy" width="150" height="150" id="im">


 <div class="divtitre">

<h1 class="titre"><?php echo esp1; ?></h1>
<h3><?php echo esp2; ?></h3>
</div>
<img src="share3.png" alt="bouton partager" width="150" height="150" style="float: left; margin-right: 40px;">


    <div>
        <a class="mt-facebook mt-share-inline-bar-sm"
           href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fplay.google.com%2Fstore%2Fapps%2Fdetails%3Fid%3Dcom.qrvillers_les_nancy.qrvln.qrvillers_les_nancy">
            <img src="http://mojotech-static.s3.amazonaws.com/facebook@2x.png">
        </a>
        <br/>
        <a class="mt-twitter mt-share-inline-bar-sm"
           href="http://twitter.com/intent/tweet?text=Venez%20d%C3%A9couvrir%20le%20patrimoine%20de%20Villers-l%C3%A8s-Nancy%20!&amp;url=https%3A%2F%2Fplay.google.com%2Fstore%2Fapps%2Fdetails%3Fid%3Dcom.qrvillers_les_nancy.qrvln.qrvillers_les_nancy">
            <img src="http://mojotech-static.s3.amazonaws.com/twitter@2x.png">
        </a>
        <br/>
        <a class="mt-linkedin mt-share-inline-bar-sm"
           href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https%3A%2F%2Fplay.google.com%2Fstore%2Fapps%2Fdetails%3Fid%3Dcom.qrvillers_les_nancy.qrvln.qrvillers_les_nancy&amp;summary=Venez%20d%C3%A9couvrir%20le%20patrimoine%20de%20Villers-l%C3%A8s-Nancy%20!">
            <img src="http://mojotech-static.s3.amazonaws.com/linkedin@2x.png">
        </a>
        <br/>
        <a class="mt-pinterest mt-share-inline-bar-sm"
           href="http://www.pinterest.com/pin/create/button/?url=https%3A%2F%2Fplay.google.com%2Fstore%2Fapps%2Fdetails%3Fid%3Dcom.qrvillers_les_nancy.qrvln.qrvillers_les_nancy&amp;media=https%3A%2F%2Flh3.googleusercontent.com%2FJ7GSZrrpwIaicFiJ-aM2ymc3_vQhSpQ6jExS4SUDyGlyYXtg7qjzguU_VcaV3xgqal4B%3Dw1577-h959-rw&amp;guid=1234&amp;description=Venez%20d%C3%A9couvrir%20le%20patrimoine%20de%20Villers-l%C3%A8s-Nancy%20!">
            <img src="http://mojotech-static.s3.amazonaws.com/pinterest@2x.png">
        </a>
    </div>


<p style="font-size: 20px"><?php echo esp3; ?></p>
<img src="logovln.jpg" width="150" height="75" alt="logo qrvln" style="float: left;" />
<img src="r&t.png" width="325" height="75" alt="logo r & t Nancy" style="float: left;"/>



<div class="divtelesp">
<p><?php echo esp4; ?> </p>
</div>

<div class="download">
<a href="https://play.google.com/store/apps/details?id=com.qrvillers_les_nancy.qrvln.qrvillers_les_nancy&rdid=com.qrvillers_les_nancy.qrvln.qrvillers_les_nancy" title="adresse google play de l'application"><img src="google_play_logo.png" width="116,09375" height="109,375" alt="Lien de telechargement"/></a>
</div>





<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v3.0';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


    <p style="text-align: center;">Nombre de visiteur :</p><script type="text/javascript" src="//compteur.websiteout.com/js/7/5/0/1"></script>


</div>

 </body>
</html>

