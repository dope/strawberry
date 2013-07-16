<?php /* Smarty version Smarty-3.1.14, created on 2013-07-16 18:49:27
         compiled from "templates/register_failed.html" */ ?>
<?php /*%%SmartyHeaderCode:182824711851e5795c585a55-14761937%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '999fde4c1aa2db4423f5b0f4aed45370807d1555' => 
    array (
      0 => 'templates/register_failed.html',
      1 => 1373993358,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '182824711851e5795c585a55-14761937',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_51e5795c5afbd3_45953161',
  'variables' => 
  array (
    'errorMsg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51e5795c5afbd3_45953161')) {function content_51e5795c5afbd3_45953161($_smarty_tpl) {?><!-- failed registration! -->
<div class="frame columns">
	<div class="bit-1">
		<h1 class="example-head"><?php echo $_smarty_tpl->tpl_vars['errorMsg']->value;?>
 <a class="btn" href="./">Return</a></h1>
	</div>
</div><?php }} ?>