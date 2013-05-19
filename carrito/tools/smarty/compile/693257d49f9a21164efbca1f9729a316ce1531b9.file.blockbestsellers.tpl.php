<?php /* Smarty version Smarty-3.0.7, created on 2011-12-01 04:08:02
         compiled from "/home/libhb/public_html/carrito/modules/blockbestsellers/blockbestsellers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13118526104ed727d2939cd9-68875768%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '693257d49f9a21164efbca1f9729a316ce1531b9' => 
    array (
      0 => '/home/libhb/public_html/carrito/modules/blockbestsellers/blockbestsellers.tpl',
      1 => 1322709273,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13118526104ed727d2939cd9-68875768',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/home/libhb/public_html/carrito/tools/smarty/plugins/modifier.escape.php';
?>

<!-- MODULE Block best sellers -->
<div id="best-sellers_block_right" class="block products_block">
	<h4><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('best-sales.php');?>
"><?php echo smartyTranslate(array('s'=>'Top sellers','mod'=>'blockbestsellers'),$_smarty_tpl);?>
</a></h4>
	<div class="block_content">
	<?php if (count($_smarty_tpl->getVariable('best_sellers')->value)>0){?>
		<ul class="product_images">
			<li><a href="<?php echo $_smarty_tpl->getVariable('best_sellers')->value[0]['link'];?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('best_sellers')->value[0]['legend'],'htmlall','UTF-8');?>
"><img src="<?php echo $_smarty_tpl->getVariable('link')->value->getImageLink($_smarty_tpl->getVariable('best_sellers')->value[0]['link_rewrite'],$_smarty_tpl->getVariable('best_sellers')->value[0]['id_image'],'medium');?>
" height="<?php echo $_smarty_tpl->getVariable('mediumSize')->value['height'];?>
" width="<?php echo $_smarty_tpl->getVariable('mediumSize')->value['width'];?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('best_sellers')->value[0]['legend'],'htmlall','UTF-8');?>
" /></a></li>
			<?php if (count($_smarty_tpl->getVariable('best_sellers')->value)>1){?><li><a href="<?php echo $_smarty_tpl->getVariable('best_sellers')->value[1]['link'];?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('best_sellers')->value[1]['legend'],'htmlall','UTF-8');?>
"><img src="<?php echo $_smarty_tpl->getVariable('link')->value->getImageLink($_smarty_tpl->getVariable('best_sellers')->value[1]['link_rewrite'],$_smarty_tpl->getVariable('best_sellers')->value[1]['id_image'],'medium');?>
" height="<?php echo $_smarty_tpl->getVariable('mediumSize')->value['height'];?>
" width="<?php echo $_smarty_tpl->getVariable('mediumSize')->value['width'];?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('best_sellers')->value[1]['legend'],'htmlall','UTF-8');?>
" /></a></li><?php }?>
		</ul>
		<dl>
		<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('best_sellers')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['product']->iteration=0;
 $_smarty_tpl->tpl_vars['product']->index=-1;
if ($_smarty_tpl->tpl_vars['product']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
 $_smarty_tpl->tpl_vars['product']->iteration++;
 $_smarty_tpl->tpl_vars['product']->index++;
 $_smarty_tpl->tpl_vars['product']->first = $_smarty_tpl->tpl_vars['product']->index === 0;
 $_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['first'] = $_smarty_tpl->tpl_vars['product']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['last'] = $_smarty_tpl->tpl_vars['product']->last;
?>
			<dt class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['first']){?>first_item<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['last']){?>last_item<?php }else{ ?>item<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['link'];?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['name'],'htmlall','UTF-8');?>
"><?php echo smarty_modifier_escape(strip_tags($_smarty_tpl->tpl_vars['product']->value['name']),'htmlall','UTF-8');?>
</a></dt>
		<?php }} ?>
		</dl>
		<p><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('best-sales.php');?>
" title="<?php echo smartyTranslate(array('s'=>'All best sellers','mod'=>'blockbestsellers'),$_smarty_tpl);?>
" class="button_large"><?php echo smartyTranslate(array('s'=>'All best sellers','mod'=>'blockbestsellers'),$_smarty_tpl);?>
</a></p>
	<?php }else{ ?>
		<p><?php echo smartyTranslate(array('s'=>'No best sellers at this time','mod'=>'blockbestsellers'),$_smarty_tpl);?>
</p>
	<?php }?>
	</div>
</div>
<!-- /MODULE Block best sellers -->
