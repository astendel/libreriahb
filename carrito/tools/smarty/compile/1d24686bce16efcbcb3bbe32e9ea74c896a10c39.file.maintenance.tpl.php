<?php /* Smarty version Smarty-3.0.7, created on 2012-11-11 18:57:34
         compiled from "/home/libhb/public_html/carrito/themes/prestashop/maintenance.tpl" */ ?>
<?php /*%%SmartyHeaderCode:122066360150a01f4e4d01b6-68632196%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d24686bce16efcbcb3bbe32e9ea74c896a10c39' => 
    array (
      0 => '/home/libhb/public_html/carrito/themes/prestashop/maintenance.tpl',
      1 => 1322709273,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '122066360150a01f4e4d01b6-68632196',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/home/libhb/public_html/carrito/tools/smarty/plugins/modifier.escape.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $_smarty_tpl->getVariable('lang_iso')->value;?>
" lang="<?php echo $_smarty_tpl->getVariable('lang_iso')->value;?>
">
	<head>
		<title><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('meta_title')->value,'htmlall','UTF-8');?>
</title>	
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php if (isset($_smarty_tpl->getVariable('meta_description',null,true,false)->value)){?>
		<meta name="description" content="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('meta_description')->value,'htmlall','UTF-8');?>
" />
<?php }?>
<?php if (isset($_smarty_tpl->getVariable('meta_keywords',null,true,false)->value)){?>
		<meta name="keywords" content="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('meta_keywords')->value,'htmlall','UTF-8');?>
" />
<?php }?>
		<meta name="robots" content="<?php if (isset($_smarty_tpl->getVariable('nobots',null,true,false)->value)){?>no<?php }?>index,follow" />
		<link rel="shortcut icon" href="<?php echo $_smarty_tpl->getVariable('img_ps_dir')->value;?>
favicon.ico" />
		<link href="<?php echo $_smarty_tpl->getVariable('css_dir')->value;?>
maintenance.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<div id="maintenance">
			 <p><img src="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
img/logo.jpg" alt="logo" /><br /><br /></p>
			 <p id="message">
				<img src="<?php echo $_smarty_tpl->getVariable('content_dir')->value;?>
img/admin/tab-tools.gif" style="margin-right:10px; float:left;" alt="" /><?php echo smartyTranslate(array('s'=>'In order to perform site maintenance, our online shop has shut down temporarily. We apologize for the inconvenience and ask that you please try again later.'),$_smarty_tpl);?>

			 </p>
			 <span style="clear:both;">&nbsp;</span>
		</div>
	</body>
</html>
