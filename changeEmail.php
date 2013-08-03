<?php

require_once 'settings.php';

if(!isset($_SESSION)) { 
    session_start(); 
}

if ((isset($_SESSION["username"]))){

// Create MySQL connection
$link = mysqli_connect(DB_host, DB_username, DB_password);
if (!$link) {
    die('Could not connect: ' . mysqli_error());
}
mysqli_select_db($link,DB_name);

// Check if username exists
$sql = "SELECT * FROM confirmationMap WHERE username = '" . $_SESSION["username"] . "'";
$result = mysqli_query($link,$sql);
if ($result){
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result)) {
         $valid=true;
         $sql = "UPDATE accountMap SET email = '" . $_POST["email"] . "' WHERE username = '" . $_SESSION["username"] . "'";
         mysqli_query($link,$sql);
    }
}

}else{
echo 'Not logged in!';
}

?>