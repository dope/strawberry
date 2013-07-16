<?php /* Smarty version Smarty-3.1.14, created on 2013-07-16 18:45:34
         compiled from "templates/header.html" */ ?>
<?php /*%%SmartyHeaderCode:36686000451e5719811a123-52437116%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '560469858265bdf005e9583342d090c4df443c5f' => 
    array (
      0 => 'templates/header.html',
      1 => 1373993133,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '36686000451e5719811a123-52437116',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_51e57198213e32_82073600',
  'variables' => 
  array (
    'title' => 0,
    'name' => 0,
    'loggedIn' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51e57198213e32_82073600')) {function content_51e57198213e32_82073600($_smarty_tpl) {?><!DOCTYPE HTML>

<html lang="en-US">

<head>

    <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<link rel="stylesheet" type="text/css" href="assets/css/strawberry.css">
 	<link rel="stylesheet" type="text/css" href="assets/css/lemonade.css">
 	<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
	<link rel="stylesheet" type="text/css" href="assets/css/popcorn-icons.css">
	<link rel="stylesheet" type="text/css" href="assets/css/reset.css">

 	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700' rel='stylesheet' type='text/css'>

	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 &#8212; <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</title>
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>
<body>
<?php if ($_smarty_tpl->tpl_vars['loggedIn']->value==true){?>
	<nav>
        <ul>
            <li><a class="active" href="index.php">Strawberry</a></li>
        </ul>
	</nav>
<?php }else{ ?>
	<nav>
		<ul>
			<li><a class="active" href="index.php">Strawberry</a></li>
			<li><a href="https://github.com/lifesgood/strawberry">GitHub</a></li>
			<li><a href="https://github.com/lifesgood/strawberry/issues/new">Support</a></li>
		</ul>
	</nav>
<?php }?>
<?php }} ?>