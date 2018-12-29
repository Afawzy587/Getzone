<?php /* Smarty version Smarty-3.0.8, created on 2018-10-30 10:46:51
         compiled from "./assets/themes/sqlerror.htm" */ ?>
<?php /*%%SmartyHeaderCode:15630632425bd8369b453d25-05631176%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b7cd7b0a12ddfcc7dc9953326ad95a4b70f6807' => 
    array (
      0 => './assets/themes/sqlerror.htm',
      1 => 1540816211,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15630632425bd8369b453d25-05631176',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<html dir="rtl">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256">
<base href="<?php echo $_smarty_tpl->getVariable('site')->value['url'];?>
/" />
<title>Sql Error</title>

</head>

<body>

<br />
<br />
<br />
<br />
<br />
<br />
<br />
<div align="center">
	<br /><br />
	<font face="Tahoma" size="2">حدث خطأ SQL اثناء عرض
	هذه الصفحة برجاء مراجعه الدعم الفني </font>
	</div>

	<!--
	// This List Of Sql Error's

	<?php  $_smarty_tpl->tpl_vars["error"] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('errors')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars["error"]->key => $_smarty_tpl->tpl_vars["error"]->value){
?>
		<?php echo $_smarty_tpl->getVariable('error')->value;?>

	<?php }} ?>

	!-->
</body>

</html>