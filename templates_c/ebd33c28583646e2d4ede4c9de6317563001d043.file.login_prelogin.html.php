<?php /* Smarty version Smarty-3.1.14, created on 2013-07-16 18:15:33
         compiled from "templates/login_prelogin.html" */ ?>
<?php /*%%SmartyHeaderCode:213708205951e571a5050084-23855089%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebd33c28583646e2d4ede4c9de6317563001d043' => 
    array (
      0 => 'templates/login_prelogin.html',
      1 => 1374009944,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213708205951e571a5050084-23855089',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_51e571a5072c84_32520597',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51e571a5072c84_32520597')) {function content_51e571a5072c84_32520597($_smarty_tpl) {?>

	<form action="login.php" method="post" id="login">
	  <h1><img src="assets/img/logo.svg"/></h1>
	  <input placeholder="Username" type="text" name="username" required="required" pattern=".{3,30}" title="Must be a valid username"/>
	  <input placeholder="Password" type="password" name="password" required="required" pattern=".{5}.+" title="Must be longer then 5 characters"/>
	  <button class="button">Login to your account</button>
	  <div class="frame">
	  	<div class="bit-2 form-left"><a class="up" href="forgot.php">Forgot password?</a></div>
	  	<div class="bit-2 form-right"><a href="./">Need an account?</a></div>
  	  </div>
	</form>

<div class="pop">
  		<span><i class="glyph-cross-white"></i></span>
  		<div class="main-pop">
  			<h1 class="lost">Lost your password?</h1>
			<form class="forgot" action="forgot.php" method="post">
			  <input placeholder="Your Email" type="text" name="email" type="email" required="required" pattern="[^ @]*@[^ @]*" title="Please enter a valid email address!"/>
			  <button class="button">Request your Password</button>
			</form>
  		</div>
	</div>

<?php }} ?>