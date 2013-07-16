<?php /* Smarty version Smarty-3.1.14, created on 2013-07-16 18:48:17
         compiled from "templates/forgot_success.html" */ ?>
<?php /*%%SmartyHeaderCode:16000095751e57951d17ca9-27320948%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94c44900c274bf997147d696c1f83f7f43c6ce6e' => 
    array (
      0 => 'templates/forgot_success.html',
      1 => 1373992126,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16000095751e57951d17ca9-27320948',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_51e57951d43531_44644066',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51e57951d43531_44644066')) {function content_51e57951d43531_44644066($_smarty_tpl) {?><!-- successful login! -->
<div class="frame columns">
	<div class="bit-1">
		<h1 class="example-head">An email has been sent to <?php echo $_smarty_tpl->tpl_vars['email']->value;?>
! <a class="btn" href="login.php">Login</a></h1>
	</div>
</div><?php }} ?>