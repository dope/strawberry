<?php
require_once 'settings.php';

if(!isset($_SESSION)) { 
    session_start(); 
} 

require('libs/Smarty.class.php');
$smarty = new Smarty;
$smarty->assign("title","User Panel");
$smarty->assign("name",SET_name);

if (!(isset($_SESSION["username"]))){


$smarty->assign("loggedIn",false);
$smarty->display('templates/header.html');
$smarty->display('templates/index_preregister.html');
$smarty->display('templates/footer_javascript.html');
$smarty->display('templates/index_preregister_javascript.html');
}else{


$smarty->assign("loggedIn",true);
$smarty->display('templates/header.html');
// Handle login the content here, such as exclusive access or beta access content...
$smarty->assign("username",$_SESSION["username"]);
$smarty->display('templates/index_registered.html');
$smarty->display('templates/footer_javascript.html');
}
$smarty->display('templates/footer_fin.html');
?>