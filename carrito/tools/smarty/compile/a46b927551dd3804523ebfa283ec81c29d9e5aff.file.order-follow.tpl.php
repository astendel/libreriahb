<?php /* Smarty version Smarty-3.0.7, created on 2012-08-24 15:53:47
         compiled from "/home/libhb/public_html/carrito/themes/prestashop/order-follow.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18476231435037cdbb85c222-40700784%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a46b927551dd3804523ebfa283ec81c29d9e5aff' => 
    array (
      0 => '/home/libhb/public_html/carrito/themes/prestashop/order-follow.tpl',
      1 => 1322709273,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18476231435037cdbb85c222-40700784',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/home/libhb/public_html/carrito/tools/smarty/plugins/modifier.escape.php';
?>

<?php ob_start(); ?><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('my-account.php',true);?>
"><?php echo smartyTranslate(array('s'=>'My account'),$_smarty_tpl);?>
</a><span class="navigation-pipe"><?php echo $_smarty_tpl->getVariable('navigationPipe')->value;?>
</span><?php echo smartyTranslate(array('s'=>'Return Merchandise Authorization (RMA)'),$_smarty_tpl);?>
<?php  Smarty::$_smarty_vars['capture']['path']=ob_get_clean();?>
<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('tpl_dir')->value)."./breadcrumb.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<h1><?php echo smartyTranslate(array('s'=>'Return Merchandise Authorization (RMA)'),$_smarty_tpl);?>
</h1>
<?php if (isset($_smarty_tpl->getVariable('errorQuantity',null,true,false)->value)&&$_smarty_tpl->getVariable('errorQuantity')->value){?><p class="error"><?php echo smartyTranslate(array('s'=>'You do not have enough products to request another merchandise return.'),$_smarty_tpl);?>
</p><?php }?>
<?php if (isset($_smarty_tpl->getVariable('errorMsg',null,true,false)->value)&&$_smarty_tpl->getVariable('errorMsg')->value){?><p class="error"><?php echo smartyTranslate(array('s'=>'Please provide an explanation for your RMA.'),$_smarty_tpl);?>
</p><?php }?>
<?php if (isset($_smarty_tpl->getVariable('errorDetail1',null,true,false)->value)&&$_smarty_tpl->getVariable('errorDetail1')->value){?><p class="error"><?php echo smartyTranslate(array('s'=>'Please check at least one product you would like to return.'),$_smarty_tpl);?>
</p><?php }?>
<?php if (isset($_smarty_tpl->getVariable('errorDetail2',null,true,false)->value)&&$_smarty_tpl->getVariable('errorDetail2')->value){?><p class="error"><?php echo smartyTranslate(array('s'=>'Please provide a quantity for the product you checked.'),$_smarty_tpl);?>
</p><?php }?>
<?php if (isset($_smarty_tpl->getVariable('errorNotReturnable',null,true,false)->value)&&$_smarty_tpl->getVariable('errorNotReturnable')->value){?><p class="error"><?php echo smartyTranslate(array('s'=>'This order cannot be returned.'),$_smarty_tpl);?>
</p><?php }?>

<p><?php echo smartyTranslate(array('s'=>'Here are the merchandise returns you have made'),$_smarty_tpl);?>
.</p>
<div class="block-center" id="block-history">
	<?php if ($_smarty_tpl->getVariable('ordersReturn')->value&&count($_smarty_tpl->getVariable('ordersReturn')->value)){?>
	<table id="order-list" class="std">
		<thead>
			<tr>
				<th class="first_item"><?php echo smartyTranslate(array('s'=>'Return'),$_smarty_tpl);?>
</th>
				<th class="item"><?php echo smartyTranslate(array('s'=>'Order'),$_smarty_tpl);?>
</th>
				<th class="item"><?php echo smartyTranslate(array('s'=>'Package status'),$_smarty_tpl);?>
</th>
				<th class="item"><?php echo smartyTranslate(array('s'=>'Date issued'),$_smarty_tpl);?>
</th>
				<th class="last_item"><?php echo smartyTranslate(array('s'=>'Return slip'),$_smarty_tpl);?>
</th>
			</tr>
		</thead>
		<tbody>
		<?php  $_smarty_tpl->tpl_vars['return'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('ordersReturn')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['return']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['return']->iteration=0;
 $_smarty_tpl->tpl_vars['return']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['index']=-1;
if ($_smarty_tpl->tpl_vars['return']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['return']->key => $_smarty_tpl->tpl_vars['return']->value){
 $_smarty_tpl->tpl_vars['return']->iteration++;
 $_smarty_tpl->tpl_vars['return']->index++;
 $_smarty_tpl->tpl_vars['return']->first = $_smarty_tpl->tpl_vars['return']->index === 0;
 $_smarty_tpl->tpl_vars['return']->last = $_smarty_tpl->tpl_vars['return']->iteration === $_smarty_tpl->tpl_vars['return']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['first'] = $_smarty_tpl->tpl_vars['return']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['index']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['last'] = $_smarty_tpl->tpl_vars['return']->last;
?>
			<tr class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['first']){?>first_item<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['last']){?>last_item<?php }else{ ?>item<?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['index']%2){?>alternate_item<?php }?>">
				<td class="bold"><a class="color-myaccount" href="javascript:showOrder(0, <?php echo intval($_smarty_tpl->tpl_vars['return']->value['id_order_return']);?>
, '<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('order-return.php',true);?>
');"><?php echo smartyTranslate(array('s'=>'#'),$_smarty_tpl);?>
<?php echo sprintf("%06d",$_smarty_tpl->tpl_vars['return']->value['id_order_return']);?>
</a></td>
				<td class="history_method"><a class="color-myaccount" href="javascript:showOrder(1, <?php echo intval($_smarty_tpl->tpl_vars['return']->value['id_order']);?>
, '<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('order-detail.php',true);?>
');"><?php echo smartyTranslate(array('s'=>'#'),$_smarty_tpl);?>
<?php echo sprintf("%06d",$_smarty_tpl->tpl_vars['return']->value['id_order']);?>
</a></td>
				<td class="history_method"><span class="bold"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['return']->value['state_name'],'htmlall','UTF-8');?>
</span></td>
				<td class="bold"><?php echo Tools::dateFormat(array('date'=>$_smarty_tpl->tpl_vars['return']->value['date_add'],'full'=>0),$_smarty_tpl);?>
</td>
				<td class="history_invoice">
				<?php if ($_smarty_tpl->tpl_vars['return']->value['state']==2){?>
					<a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('pdf-order-return.php',true);?>
?id_order_return=<?php echo intval($_smarty_tpl->tpl_vars['return']->value['id_order_return']);?>
" title="<?php echo smartyTranslate(array('s'=>'Order return'),$_smarty_tpl);?>
 <?php echo smartyTranslate(array('s'=>'#'),$_smarty_tpl);?>
<?php echo sprintf("%06d",$_smarty_tpl->tpl_vars['return']->value['id_order_return']);?>
"><img src="<?php echo $_smarty_tpl->getVariable('img_dir')->value;?>
icon/pdf.gif" alt="<?php echo smartyTranslate(array('s'=>'Order return'),$_smarty_tpl);?>
 <?php echo smartyTranslate(array('s'=>'#'),$_smarty_tpl);?>
<?php echo sprintf("%06d",$_smarty_tpl->tpl_vars['return']->value['id_order_return']);?>
" class="icon" /></a>
					<a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('pdf-order-return.php',true);?>
?id_order_return=<?php echo intval($_smarty_tpl->tpl_vars['return']->value['id_order_return']);?>
" title="<?php echo smartyTranslate(array('s'=>'Order return'),$_smarty_tpl);?>
 <?php echo smartyTranslate(array('s'=>'#'),$_smarty_tpl);?>
<?php echo sprintf("%06d",$_smarty_tpl->tpl_vars['return']->value['id_order_return']);?>
"><?php echo smartyTranslate(array('s'=>'Print out'),$_smarty_tpl);?>
</a>
				<?php }else{ ?>
					--
				<?php }?>
				</td>
			</tr>
		<?php }} ?>
		</tbody>
	</table>
	<div id="block-order-detail" class="hidden">&nbsp;</div>
	<?php }else{ ?>
		<p class="warning"><?php echo smartyTranslate(array('s'=>'You have no return merchandise authorizations.'),$_smarty_tpl);?>
</p>
	<?php }?>
</div>

<ul class="footer_links">
	<li><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('my-account.php',true);?>
"><img src="<?php echo $_smarty_tpl->getVariable('img_dir')->value;?>
icon/my-account.gif" alt="" class="icon" /></a><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('my-account.php',true);?>
"><?php echo smartyTranslate(array('s'=>'Back to Your Account'),$_smarty_tpl);?>
</a></li>
	<li><a href="<?php echo $_smarty_tpl->getVariable('base_dir')->value;?>
"><img src="<?php echo $_smarty_tpl->getVariable('img_dir')->value;?>
icon/home.gif" alt="" class="icon" /></a><a href="<?php echo $_smarty_tpl->getVariable('base_dir')->value;?>
"><?php echo smartyTranslate(array('s'=>'Home'),$_smarty_tpl);?>
</a></li>
</ul>