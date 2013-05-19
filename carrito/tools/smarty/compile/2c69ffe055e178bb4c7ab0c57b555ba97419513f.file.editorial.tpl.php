<?php /* Smarty version Smarty-3.0.7, created on 2011-12-01 07:13:22
         compiled from "/home/libhb/public_html/carrito/themes/theme001/modules/editorial/editorial.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1050752944ed75342247b85-73115431%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c69ffe055e178bb4c7ab0c57b555ba97419513f' => 
    array (
      0 => '/home/libhb/public_html/carrito/themes/theme001/modules/editorial/editorial.tpl',
      1 => 1322733162,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1050752944ed75342247b85-73115431',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/home/libhb/public_html/carrito/tools/smarty/plugins/modifier.escape.php';
?><!-- Module Editorial -->
<div id="editorial_block_center" class="editorial_block">
	<?php if ($_smarty_tpl->getVariable('xml')->value->body->home_logo_link){?><a href="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('xml')->value->body->home_logo_link,'htmlall','UTF-8');?>
" title="<?php echo stripslashes(smarty_modifier_escape($_smarty_tpl->getVariable('xml')->value->body->{$_smarty_tpl->getVariable('title')->value},'htmlall','UTF-8'));?>
"><?php }?>
	<?php if ($_smarty_tpl->getVariable('homepage_logo')->value){?><img src="<?php echo $_smarty_tpl->getVariable('this_path')->value;?>
homepage_logo.jpg" alt="<?php echo stripslashes(smarty_modifier_escape($_smarty_tpl->getVariable('xml')->value->body->{$_smarty_tpl->getVariable('title')->value},'htmlall','UTF-8'));?>
" /><?php }?>
	<?php if ($_smarty_tpl->getVariable('xml')->value->body->home_logo_link){?></a><?php }?>
	<?php if ($_smarty_tpl->getVariable('xml')->value->body->{$_smarty_tpl->getVariable('logo_subheading')->value}){?><?php echo stripslashes($_smarty_tpl->getVariable('xml')->value->body->{$_smarty_tpl->getVariable('logo_subheading')->value});?>
<?php }?> 
	<?php if ($_smarty_tpl->getVariable('xml')->value->body->{$_smarty_tpl->getVariable('title')->value}){?><h2><?php echo stripslashes($_smarty_tpl->getVariable('xml')->value->body->{$_smarty_tpl->getVariable('title')->value});?>
</h2><?php }?>
	<?php if ($_smarty_tpl->getVariable('xml')->value->body->{$_smarty_tpl->getVariable('subheading')->value}){?><h3><?php echo stripslashes($_smarty_tpl->getVariable('xml')->value->body->{$_smarty_tpl->getVariable('subheading')->value});?>
</h3><?php }?>
	<?php if ($_smarty_tpl->getVariable('xml')->value->body->{$_smarty_tpl->getVariable('paragraph')->value}){?><div class="rte"><?php echo stripslashes($_smarty_tpl->getVariable('xml')->value->body->{$_smarty_tpl->getVariable('paragraph')->value});?>
</div><?php }?>
</div>
<!-- /Module Editorial -->
