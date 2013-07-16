<?php /* Smarty version Smarty-3.1.14, created on 2013-07-16 18:34:14
         compiled from "templates/login_failed.html" */ ?>
<?php /*%%SmartyHeaderCode:172262173751e576066c1e14-30649726%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '703410a7f595b7caafa6da35d522cca83eff8e9d' => 
    array (
      0 => 'templates/login_failed.html',
      1 => 1374009893,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '172262173751e576066c1e14-30649726',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errorMsg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_51e576066e3640_32709485',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51e576066e3640_32709485')) {function content_51e576066e3640_32709485($_smarty_tpl) {?>
<!-- invalid login! -->
	<form action="login.php" method="post" id="login">
	  
<h1><img src="assets/img/logo.svg"/></h1>
	  <input placeholder="Username" type="text" name="username" required="required" pattern=".{3,30}" title="Must be a valid username"/>
	  <input placeholder="Password" type="password" name="password" required="required" pattern=".{5}.+" title="Must be longer then 5 characters"/>
	  <button class="button">Login to your account</button>
          
	  <div class="frame">
	  	<div class="bit-1 invalid"><?php echo $_smarty_tpl->tpl_vars['errorMsg']->value;?>

      </div>
          </div>
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