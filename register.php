<?php
require_once 'settings.php';
require('libs/Smarty.class.php');
$smarty = new Smarty;
$smarty->assign("title","Registration");
$smarty->assign("name",SET_name);
$smarty->assign("loggedIn",false);


if ((isset($_SESSION["username"]))){

// Redirect when logged in.
header("Location: ./");
die();

}else{


$smarty->display('templates/header.html');
// it is assumed that the data is valid first!
$valid=true;
$errorMsg="Invalid registration details! Please re-register!";
// Setup inital variables from the registration form!
if(isset($_POST["username"])) {
    $username=htmlentities($_POST["username"]);
}else{
    $username="";
}
if(isset($_POST["email"])) {
    $email=$_POST["email"];
}else{
    $email="";
}
if(isset($_POST["password"])) {
    $password=$_POST["password"];
}else{
    $password="";
}
// Validation of the data from the form.. Code is self-explaintory.....
if (strlen($username)<3 || strlen($username)>30) {
    $valid=false;
}
// Basic validation of the email using the code from the "required" field back at the registration form...
if (!preg_match("/[^ @]*@[^ @]/",$email)) {
    $valid=false;
}
if (strlen($password)<6) {
    $valid=false;
}
if (strlen($username)>128) {
    $valid=false;
    $errorMsg="Please keep the password to under 128 characters!";
}
if (strlen($email)>254) {
    $valid=false;
    $errorMsg="Email address provided is far too long!";
}
if ($valid) {
    // Authorization code..
    $auth = md5(time());
    // Generate the encrypted password.
    $password = genPassword($password,$username);
    // Create MySQL connection
    $link = mysqli_connect(DB_host, DB_username, DB_password);
    if (!$link) {
        die('Could not connect: ' . mysqli_error());
    }
    // Create the database if it doesn't exist...
    if (!mysqli_select_db($link,DB_name)) {
        $sql = 'CREATE DATABASE ' . DB_name;
        mysqli_query($link,$sql);
    }
    // Create the tables if they don't exist
    mysqli_query($link, "CREATE TABLE IF NOT EXISTS confirmationMap ( auth VARCHAR(32), username VARCHAR(30), PRIMARY KEY (username))");
    mysqli_query($link, "CREATE TABLE IF NOT EXISTS accountMap ( username VARCHAR(30), password VARCHAR(128), email VARCHAR(254), activated TINYINT(1), PRIMARY KEY (username))");

    // Check if username exists
    $sql = "SELECT * FROM confirmationMap WHERE username = '" . mysqli_real_escape_string($link,$username) . "'";
    $result = mysqli_query($link,$sql);

    if($result == false){
        $valid=true;
    }
    else if(mysqli_num_rows($result)) {
        $row = mysqli_fetch_assoc($result);
        $errMsg = 'Username exists';
        $valid=false;
        $errorMsg="Username already exists! Please try another one!";
    }
}
if ($valid){


    // Store the authorization code and the username for future reference...
    $query = "INSERT INTO confirmationMap (auth, username) VALUES (?,?)";
    $stmt = mysqli_stmt_init($link);
    if (mysqli_stmt_prepare($stmt, $query)) {
        mysqli_stmt_bind_param($stmt, "ss", $auth, $username);
        if (!mysqli_stmt_execute($stmt)) {
            $error = mysqli_stmt_error($stmt);
        }
            mysqli_stmt_close($stmt);
        } else {
            $error = mysqli_error($link);
        }


    // Not yet, a temporary variable stored in the database for the account to be verified/confirmed.....
    $notyet=0;
    // Store the authorization code and the accountMap for future reference...
    $query = "INSERT INTO accountMap (username, password, email, activated) VALUES (?,?,?,?)";
    $stmt = mysqli_stmt_init($link);
    if (mysqli_stmt_prepare($stmt, $query)) {
        mysqli_stmt_bind_param($stmt, "sssi", $username, $password, $email, $notyet);
        if (!mysqli_stmt_execute($stmt)) {
            $error = mysqli_stmt_error($stmt);
        }
        mysqli_stmt_close($stmt);
    } else {
        $error = mysqli_error($link);
    }
    // This is the email script....
    $to = $email;
    $subject = 'Registration at Strawberry';
    $message = '<h2>Hola ' . $username . '!</h2>
    <p>Click on the link below to complete your registration</p>
    <p><a href="'.SET_directory.'/confirm.php?user=' . $username . '&auth=' . $auth . '">'.SET_directory.'/confirm.php?user=' . $username . '&auth=' . $auth . '</a></p>
    <style type="text/css">body {font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;background: #2a3644;color: white;text-align:center;}a{color: white;}</style>';
    $headers = 'MIME-Version: 1.0' . "\r\n" . 'Content-type: text/html; charset=iso-8859-1' . "\r\n" . 'From: ' . SET_email . "\r\n" .'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
    $email=htmlentities($email);
    // registration succeded
    $smarty->assign("username",$username);
    $smarty->assign("email",$email);
    $smarty->display('templates/register_success.html');
} else { 
    // registration failed
    $smarty->assign("errorMsg",$errorMsg);
    $smarty->display('templates/register_failed.html');
}
$smarty->display('templates/footer_javascript.html');
$smarty->display('templates/footer_fin.html');
}
?>

