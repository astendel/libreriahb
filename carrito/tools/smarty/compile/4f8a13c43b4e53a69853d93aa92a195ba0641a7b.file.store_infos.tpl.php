<?php /* Smarty version Smarty-3.0.7, created on 2011-12-01 01:24:06
         compiled from "/home/libhb/public_html/carrito/themes/prestashop/store_infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20510795604ed70166957090-05171653%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f8a13c43b4e53a69853d93aa92a195ba0641a7b' => 
    array (
      0 => '/home/libhb/public_html/carrito/themes/prestashop/store_infos.tpl',
      1 => 1322709273,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20510795604ed70166957090-05171653',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<br />
<br />
<span id="store_hours"><?php echo smartyTranslate(array('s'=>'Hours:'),$_smarty_tpl);?>
</span>
<table style="font-size: 9px;">
	<?php  $_smarty_tpl->tpl_vars['one_day'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('days_datas')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['one_day']->key => $_smarty_tpl->tpl_vars['one_day']->value){
?>
	<tr>
		<td style="width: 70px;"><?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['one_day']->value['day']),$_smarty_tpl);?>
</td><td><?php echo $_smarty_tpl->tpl_vars['one_day']->value['hours'];?>
</td>
	</tr>
	<?php }} ?>
</table>
