<?php
require_once 'settings.php';


if(!isset($_SESSION)) { 
    session_start(); 
} 



if ((isset($_SESSION["username"]))){

// Redirect when logged in.
header("Location: ./");
die();

}else{
require('libs/Smarty.class.php');
$smarty = new Smarty;
$smarty->assign("title","Login");
$smarty->assign("name",SET_name);
$smarty->assign("loggedIn",false);
$smarty->display('templates/header.html');
// it is assumed that the data is not valid first!
$valid=false;
$errorMsg="Invalid login details!";

// Setup inital variables from the login form!
if(isset($_POST["username"])) {
    $username=htmlentities($_POST["username"]);
}else{
    $username="";
}
if(isset($_POST["password"])) {
    $password=$_POST["password"];
}else{
    $password="";
}
if(!isset($_POST["password"]) && !isset($_POST["username"])){
$smarty->display('templates/login_prelogin.html');
} else {
    // Create MySQL connection
    $link = mysqli_connect(DB_host, DB_username, DB_password);
    if (!$link) {
        die('Could not connect: ' . mysqli_error());
    }
    mysqli_select_db($link,DB_name);
    // Check if username exists
    $sql = "SELECT * FROM accountMap WHERE username = '" . mysqli_real_escape_string($link,$username) . "'";
    $result = mysqli_query($link,$sql);
    if ($result){
        $row = mysqli_fetch_assoc($result);
        if(mysqli_num_rows($result)) {
            if ($row["activated"]==0){
                $valid=false;
                $errorMsg="Account has to be activated first! Please check your email.";
            }
            else if (genPassword($password,$username) == $row["password"]){
                $valid=true;
            }
        }
    }
if ($valid){
// When the login is sucessful...
$_SESSION["username"]=$row["username"];
$_SESSION["email"]=$row["email"];

$smarty->display('templates/login_success.html');

} else { 
$smarty->assign("errorMsg",$errorMsg);
$smarty->display('templates/login_failed.html');
}}}
$smarty->display('templates/footer_javascript.html');
$smarty->display('templates/footer_fin.html');
?>