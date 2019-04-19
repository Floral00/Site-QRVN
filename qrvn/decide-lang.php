
<?php
if(isset($HTTP_COOKIE_VARS['lang'])) {
    $lang = $HTTP_COOKIE_VARS['lang'];
 
}else {
    // si le cookie n'existe pas on tente de reconnaitre la langue par défaut du navigateur utilisé
    $lang = substr($HTTP_SERVER_VARS['HTTP_ACCEPT_LANGUAGE'],0,2);
}
?>
<?php
//On définit la durée du cookie (avant son expiration)
$expire = 365*24*3600;
//Puis on créé le cookie
//setcookie("lang", $lang, time() + $expire);
?>
<?php
switch($lang) {
    //Si lang=fr on inclut le fichier de langue française
    case 'fr':
        include('lang/fr-lang.php');
    break;
    //Si lang=en on inclut le fichier de langue anglaise
    case 'en':
        include('lang/en-lang.php');
    break;
}
?>