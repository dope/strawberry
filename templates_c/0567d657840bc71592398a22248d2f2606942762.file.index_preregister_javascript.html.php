<?php /* Smarty version Smarty-3.1.14, created on 2013-07-16 18:15:20
         compiled from "templates/index_preregister_javascript.html" */ ?>
<?php /*%%SmartyHeaderCode:5842389351e57198230605-13304810%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0567d657840bc71592398a22248d2f2606942762' => 
    array (
      0 => 'templates/index_preregister_javascript.html',
      1 => 1373924684,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5842389351e57198230605-13304810',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_51e57198235192_71285068',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51e57198235192_71285068')) {function content_51e57198235192_71285068($_smarty_tpl) {?><!--<script type="text/javascript" src="js/jquery.h5validate.js"></script>-->
<script type="text/javascript">
$(document).ready(function () {
   // $('#register').h5Validate();
   
    $("#password").on("change",function(){
    $("#cfmPassword").attr("pattern",$(this).val());
    });
});
</script><?php }} ?>