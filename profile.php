<div class="profile-wrap">
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
	    $grav_url = "http://www.gravatar.com/avatar/" . md5( strtolower( trim( $_SESSION["email"] ) ) ) . "?d=" . urlencode( $defaultGravatar ) . "&s=" . $sizeGravatar;


	$smarty->assign("loggedIn",true);
	$smarty->assign("gravatar",$grav_url);
	$smarty->assign("username",$_SESSION["username"]);
	$smarty->display('templates/header.html');

	// Create MySQL connection
	    $link = mysqli_connect(DB_host, DB_username, DB_password);
	    if (!$link) {
	        die('Could not connect: ' . mysqli_error());
	    }

	mysqli_select_db($link,DB_name);

	echo '<img src="' . ("http://www.gravatar.com/avatar/" . md5( strtolower( trim( $_SESSION["email"] ) ) ) . '?d=' . urlencode( "http://lifes.gd/cloud.jpg" ) . "&s=150") . '" alt="" class="profile-avatar" />
	';
	echo '<li class="profile-settings">' . ( ( ( $_SESSION["username"] ) ) ) . '</li>';
	echo '<li class="profile-settings">' . ( ( ( $_SESSION["email"] ) ) ) . '</li>';

	$smarty->display('templates/footer_javascript.html');
	}
	$smarty->display('templates/footer_fin.html');
	?>
</div>