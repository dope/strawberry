<?php /* Smarty version Smarty-3.1.14, created on 2013-07-16 18:54:17
         compiled from "templates/index_registered.html" */ ?>
<?php /*%%SmartyHeaderCode:127048315351e5761f5576d8-58543113%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46f29694243157c72724f04583292fbb1c2ad237' => 
    array (
      0 => 'templates/index_registered.html',
      1 => 1373993655,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127048315351e5761f5576d8-58543113',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_51e5761f57d397_36237639',
  'variables' => 
  array (
    'username' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51e5761f57d397_36237639')) {function content_51e5761f57d397_36237639($_smarty_tpl) {?><div class="frame columns">
	<div class="bit-1">
		<h1 class="welcomes" class="example-head">Welcome, <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
!</h1>
        <a class="welcomes log-block" href="logout.php">Logout</a>
	</div>


	hi

</div><?php }} ?>