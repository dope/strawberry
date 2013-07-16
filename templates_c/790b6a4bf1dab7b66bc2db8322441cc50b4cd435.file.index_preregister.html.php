<?php /* Smarty version Smarty-3.1.14, created on 2013-07-16 18:15:20
         compiled from "templates/index_preregister.html" */ ?>
<?php /*%%SmartyHeaderCode:7558477851e57198222917-66300921%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '790b6a4bf1dab7b66bc2db8322441cc50b4cd435' => 
    array (
      0 => 'templates/index_preregister.html',
      1 => 1374018790,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7558477851e57198222917-66300921',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_51e571982277d3_35976155',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51e571982277d3_35976155')) {function content_51e571982277d3_35976155($_smarty_tpl) {?>
	<form action="register.php" method="post" id="register">
	  <h1><img src="assets/img/logo.svg"/></h1>
	  <input placeholder="Enter a username" type="text" name="username" required="required" pattern=".{3,30}" title="Must be between 3 and 30 characters long!"/>
	  <input placeholder="Enter your email" type="text" name="email" type="email" required="required" pattern="[^ @]*@[^ @]*" title="Please enter a valid email address!"/>
	  <input placeholder="Password" type="password" id="password" required="required" title="Must be longer then 5 characters" pattern=".{5}.+"/>
	  <input placeholder="Password, again" type="password" id="cfmPassword" name="password" required="required" pattern="" title="Please enter a matching password"/>
	  <button class="button" type="submit">Register with Strawberry</button>
	  <div class="frame">
	  	<div class="bit-2 form-left"><a class="up" href="#">Terms and Conditions</a></div>
	  	<div class="bit-2 form-right"><a href="login.php">Already registered?</a></div>
  	  </div>
	</form>

	<div class="pop">
  		<span><i class="glyph-cross-white"></i></span>
  		<div class="main-pop">
  			<h1>Terms and Conditions</h1>
  			<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>


  			<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui.</p>
  		</div>
	</div>
<?php }} ?>