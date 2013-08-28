<?php
require_once 'settings.php';

if(!isset($_SESSION)) { 
    session_start(); 
} 


if (!(isset($_SESSION["username"]))){

header("Location: login.php");
die();

}else{

// IMCOMPLETE!
require('libs/Smarty.class.php');
$smarty = new Smarty;
$smarty->assign("title","User Panel");
$smarty->assign("name",SET_name);


// Variables involved when the user is already logged in
$defaultGravatar="http://lifes.gd/cloud.jpg";
$sizeGravatar="64";
$grav_url = "http://www.gravatar.com/avatar/" . md5( strtolower( trim( $_SESSION["email"] ) ) ) . "?d=" . urlencode( $defaultGravatar ) . "&s=1" . $sizeGravatar;

$smarty->assign("loggedIn",true);
$smarty->assign("gravatar",$grav_url);
$smarty->assign("username",$_SESSION["username"]);
$smarty->display('templates/header.html');
$smarty->display('templates/profile.html');
$smarty->display('templates/footer_javascript.html');
$smarty->display('templates/profile_javascript.html');
}
$smarty->display('templates/footer_fin.html');
?>
