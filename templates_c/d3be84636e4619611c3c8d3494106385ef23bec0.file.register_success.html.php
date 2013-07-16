<?php /* Smarty version Smarty-3.1.14, created on 2013-07-16 18:32:52
         compiled from "templates/register_success.html" */ ?>
<?php /*%%SmartyHeaderCode:42601164351e575b4710d65-36794680%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3be84636e4619611c3c8d3494106385ef23bec0' => 
    array (
      0 => 'templates/register_success.html',
      1 => 1373992350,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '42601164351e575b4710d65-36794680',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'username' => 0,
    'email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_51e575b4741de0_89678830',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51e575b4741de0_89678830')) {function content_51e575b4741de0_89678830($_smarty_tpl) {?><!-- registration successful! -->
<div class="frame columns">
	<div class="bit-1">
		<h1 class="example-head">Thanks for registering, <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
! A confirmation link has just been sent to <span class="emails"><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</span>. If you have not recieved confirmation, please check Junk folder.</h1>
	</div>
</div>
<script src="http://code.jquery.com/jquery-1.10.0.js"></script>
<script src="js/strawberry.js"></script>
</body>
</html><?php }} ?>