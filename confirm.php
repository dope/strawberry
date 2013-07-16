<?php
require_once 'settings.php';
require('libs/Smarty.class.php');
$smarty = new Smarty;
$smarty->assign("title","Confirm Registration");
$smarty->assign("name",SET_name);
$smarty->assign("loggedIn",false);
$smarty->display('templates/header.html');

// it is assumed that the data is invalid first!
$valid=false;
$errorMsg="Username or Authorization code invalid!";
// setup variables from the form!
if(isset($_GET["user"])){
    $username=htmlentities($_GET["user"]);
}else{
    $username="";
}
if(isset($_GET["auth"])){
    $auth=$_GET["auth"];
}else{
    $auth="";
}   
// Create MySQL connection
$link = mysqli_connect(DB_host, DB_username, DB_password);
if (!$link) {
    die('Could not connect: ' . mysqli_error());
}
mysqli_select_db($link,DB_name);
// Check if username exists
$sql = "SELECT * FROM confirmationMap WHERE username = '" . mysqli_real_escape_string($link,$username) . "'";
$result = mysqli_query($link,$sql);
if ($result){
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result)) {
        if ($row["auth"]==$auth){
         $valid=true;
         $sql = "UPDATE accountMap SET activated = 1 WHERE username = '" . mysqli_real_escape_string($link,$username) . "'";
         mysqli_query($link,$sql);
        }
    }
}
if ($valid){
$smarty->display('templates/confirm_success.html');
$smarty->display('templates/footer_javascript.html');
}else{


$sql = "SELECT * FROM forgotMap WHERE username = '" . mysqli_real_escape_string($link,$username) . "'";
$result = mysqli_query($link,$sql);
if ($result){
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result)) {
        if ($row["auth"]==$auth){
         $valid=true;

                if ((time()-intval($row["date"]))/60/60>=1){
                $valid=false;
                $errorMsg="Expired password reset attempt!";
                }

        }
    }
}



if ($valid){

if(!isset($_SESSION)) { 
    session_start(); 
} 
$_SESSION = array();
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}
session_destroy();


$smarty->assign("auth",$auth);
$smarty->assign("username",$username);
$smarty->display('templates/confirm_newpassword.html');
$smarty->display('templates/footer_javascript.html');
$smarty->display('templates/confirm_newpassword_javascript.html');


}else{
$smarty->assign("errorMsg",$errorMsg);
$smarty->display('templates/confirm_failed.html');
$smarty->display('templates/footer_javascript.html');
}}
$smarty->display('templates/footer_fin.html');
?>

