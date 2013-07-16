<?php
require_once 'settings.php';



require('libs/Smarty.class.php');
$smarty = new Smarty;
$smarty->assign("title","Forgot Password");
$smarty->assign("name",SET_name);
$smarty->assign("loggedIn",false);
$smarty->display('templates/header.html');
// it is assumed that the data is invalid first!
$valid=false;
$errorMsg="Invalid email!";



    // Create MySQL connection
    $link = mysqli_connect(DB_host, DB_username, DB_password);
    if (!$link) {
        die('Could not connect: ' . mysqli_error());
    }

mysqli_select_db($link,DB_name);




if (isset($_POST["auth"])){



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



$auth=$_POST["auth"];
$username=$_POST["username"];
$password=$_POST["password"];

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
    }else{

    $errorMsg="Invalid password reset attempt!";

    }
}else{
    $errorMsg="Invalid password reset attempt!";
}

if ($valid){

         $sql = "UPDATE accountMap SET password = '" . (genPassword($password,$username)) . "' WHERE username = '" . mysqli_real_escape_string($link,$username) . "'";
         mysqli_query($link,$sql);


$smarty->display('templates/forgot_newpassword_success.html');


}else{
$smarty->assign("errorMsg",$errorMsg);
$smarty->display('templates/forgot_newpassword_failed.html');
}


}else if(!isset($_POST["email"])){
$smarty->display('templates/forgot_preforget.html');
} else {

    $email=$_POST["email"];
    mysqli_query($link, "CREATE TABLE IF NOT EXISTS forgotMap ( auth VARCHAR(32), username VARCHAR(30), date BIGINT(8), PRIMARY KEY (username))");

    // Check if username exists
    $sql = "SELECT * FROM accountMap WHERE email = '" . mysqli_real_escape_string($link,$email) . "'";
    $result = mysqli_query($link,$sql);
    if ($result){
        $row = mysqli_fetch_assoc($result);
        if(mysqli_num_rows($result)) {
                $username=$row["username"];
                $valid=true;
        }
    }else{
    $errorMsg="Invalid account!";
    }


if ($valid){
    $sql = "SELECT * FROM forgotMap WHERE username = '" . mysqli_real_escape_string($link,$username) . "'";
    $result = mysqli_query($link,$sql);
    if ($result){
        $row = mysqli_fetch_assoc($result);
        if(mysqli_num_rows($result)) {

                // If less then one hour..
                if ((time()-intval($row["date"]))/60/60<1){
                $valid=false;
                $errorMsg="Whoa! Slow down!";
                }
        }
    }
}

if ($valid){

    $auth = md5(time() . $username);
    $currTime = time();

    // Store the authorization code and the username for future reference...
    $query = "REPLACE INTO forgotMap (auth, username, date) VALUES (?,?,?)";
    $stmt = mysqli_stmt_init($link);
    if (mysqli_stmt_prepare($stmt, $query)) {
        mysqli_stmt_bind_param($stmt, "ssi", $auth, $username, $currTime);
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
    <p>Did you recently forget your password?</p>
    <p>Click on the link below to recover your account</p>
    <p><a href="'.SET_directory.'/confirm.php?user=' . $username . '&auth=' . $auth . '">'.SET_directory.'/confirm.php?user=' . $username . '&auth=' . $auth . '</a></p>
    <style type="text/css">body {font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;background: #2a3644;color: white;text-align:center;}a{color: white;}</style>';
    $headers = 'MIME-Version: 1.0' . "\r\n" . 'Content-type: text/html; charset=iso-8859-1' . "\r\n" . 'From: ' . SET_email . "\r\n" .'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);


$smarty->assign("email",$email);
$smarty->display('templates/forgot_success.html');

} else { 
$smarty->assign("errorMsg",$errorMsg);
$smarty->display('templates/forgot_failed.html');
}}
$smarty->display('templates/footer_javascript.html');
$smarty->display('templates/footer_fin.html');
?>