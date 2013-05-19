<?php /* Smarty version Smarty-3.0.7, created on 2011-12-01 01:36:46
         compiled from "/home/libhb/public_html/carrito/themes/prestashop/addresses.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17091198624ed7045ed257e6-68498942%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '139418a78e7c0a7db62d4e2e3a699d43e48a3c7e' => 
    array (
      0 => '/home/libhb/public_html/carrito/themes/prestashop/addresses.tpl',
      1 => 1322709273,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17091198624ed7045ed257e6-68498942',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_counter')) include '/home/libhb/public_html/carrito/tools/smarty/plugins/function.counter.php';
if (!is_callable('smarty_modifier_escape')) include '/home/libhb/public_html/carrito/tools/smarty/plugins/modifier.escape.php';
?>
<?php if (!isset($_smarty_tpl->getVariable('multipleAddresses',null,true,false)->value)){?>
	<?php if (!isset($_smarty_tpl->tpl_vars['ignoreList']) || !is_array($_smarty_tpl->tpl_vars['ignoreList']->value)) $_smarty_tpl->createLocalArrayVariable('ignoreList', null, null);
$_smarty_tpl->tpl_vars['ignoreList']->value[0] = "id_address";?>
	<?php if (!isset($_smarty_tpl->tpl_vars['ignoreList']) || !is_array($_smarty_tpl->tpl_vars['ignoreList']->value)) $_smarty_tpl->createLocalArrayVariable('ignoreList', null, null);
$_smarty_tpl->tpl_vars['ignoreList']->value[1] = "id_country";?>
	<?php if (!isset($_smarty_tpl->tpl_vars['ignoreList']) || !is_array($_smarty_tpl->tpl_vars['ignoreList']->value)) $_smarty_tpl->createLocalArrayVariable('ignoreList', null, null);
$_smarty_tpl->tpl_vars['ignoreList']->value[2] = "id_state";?>
	<?php if (!isset($_smarty_tpl->tpl_vars['ignoreList']) || !is_array($_smarty_tpl->tpl_vars['ignoreList']->value)) $_smarty_tpl->createLocalArrayVariable('ignoreList', null, null);
$_smarty_tpl->tpl_vars['ignoreList']->value[3] = "id_customer";?>
	<?php if (!isset($_smarty_tpl->tpl_vars['ignoreList']) || !is_array($_smarty_tpl->tpl_vars['ignoreList']->value)) $_smarty_tpl->createLocalArrayVariable('ignoreList', null, null);
$_smarty_tpl->tpl_vars['ignoreList']->value[4] = "id_manufacturer";?>
	<?php if (!isset($_smarty_tpl->tpl_vars['ignoreList']) || !is_array($_smarty_tpl->tpl_vars['ignoreList']->value)) $_smarty_tpl->createLocalArrayVariable('ignoreList', null, null);
$_smarty_tpl->tpl_vars['ignoreList']->value[5] = "id_supplier";?>
	<?php if (!isset($_smarty_tpl->tpl_vars['ignoreList']) || !is_array($_smarty_tpl->tpl_vars['ignoreList']->value)) $_smarty_tpl->createLocalArrayVariable('ignoreList', null, null);
$_smarty_tpl->tpl_vars['ignoreList']->value[6] = "date_add";?>
	<?php if (!isset($_smarty_tpl->tpl_vars['ignoreList']) || !is_array($_smarty_tpl->tpl_vars['ignoreList']->value)) $_smarty_tpl->createLocalArrayVariable('ignoreList', null, null);
$_smarty_tpl->tpl_vars['ignoreList']->value[7] = "date_upd";?>
	<?php if (!isset($_smarty_tpl->tpl_vars['ignoreList']) || !is_array($_smarty_tpl->tpl_vars['ignoreList']->value)) $_smarty_tpl->createLocalArrayVariable('ignoreList', null, null);
$_smarty_tpl->tpl_vars['ignoreList']->value[8] = "active";?>
	<?php if (!isset($_smarty_tpl->tpl_vars['ignoreList']) || !is_array($_smarty_tpl->tpl_vars['ignoreList']->value)) $_smarty_tpl->createLocalArrayVariable('ignoreList', null, null);
$_smarty_tpl->tpl_vars['ignoreList']->value[9] = "deleted";?>	
	
	<?php if (isset($_smarty_tpl->getVariable('addresses',null,true,false)->value)){?>
		<?php $_smarty_tpl->tpl_vars['address_number'] = new Smarty_variable(0, null, null);?>
		<?php  $_smarty_tpl->tpl_vars['address'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('addresses')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['address']->key => $_smarty_tpl->tpl_vars['address']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['address']->key;
?>
			<?php echo smarty_function_counter(array('start'=>0,'skip'=>1,'assign'=>'address_key_number'),$_smarty_tpl);?>

			<?php  $_smarty_tpl->tpl_vars['address_content'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['address_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['address']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['address_content']->key => $_smarty_tpl->tpl_vars['address_content']->value){
 $_smarty_tpl->tpl_vars['address_key']->value = $_smarty_tpl->tpl_vars['address_content']->key;
?>
				<?php if (!in_array($_smarty_tpl->tpl_vars['address_key']->value,$_smarty_tpl->getVariable('ignoreList')->value)){?>
					<?php if (!isset($_smarty_tpl->tpl_vars['multipleAddresses']) || !is_array($_smarty_tpl->tpl_vars['multipleAddresses']->value)) $_smarty_tpl->createLocalArrayVariable('multipleAddresses', null, null);
$_smarty_tpl->tpl_vars['multipleAddresses']->value[$_smarty_tpl->getVariable('address_number')->value]['ordered'][$_smarty_tpl->getVariable('address_key_number')->value] = $_smarty_tpl->tpl_vars['address_key']->value;?>
					<?php if (!isset($_smarty_tpl->tpl_vars['multipleAddresses']) || !is_array($_smarty_tpl->tpl_vars['multipleAddresses']->value)) $_smarty_tpl->createLocalArrayVariable('multipleAddresses', null, null);
$_smarty_tpl->tpl_vars['multipleAddresses']->value[$_smarty_tpl->getVariable('address_number')->value]['formated'][$_smarty_tpl->getVariable('address_key')->value] = $_smarty_tpl->tpl_vars['address_content']->value;?>
					<?php echo smarty_function_counter(array(),$_smarty_tpl);?>

				<?php }?>
			<?php }} ?>
		<?php if (!isset($_smarty_tpl->tpl_vars['multipleAddresses']) || !is_array($_smarty_tpl->tpl_vars['multipleAddresses']->value)) $_smarty_tpl->createLocalArrayVariable('multipleAddresses', null, null);
$_smarty_tpl->tpl_vars['multipleAddresses']->value[$_smarty_tpl->getVariable('address_number')->value]['object'] = $_smarty_tpl->tpl_vars['address']->value;?>
		<?php $_smarty_tpl->tpl_vars['address_number'] = new Smarty_variable($_smarty_tpl->getVariable('address_number')->value+1, null, null);?>
		<?php }} ?>
	<?php }?>
<?php }?>
<?php if (!isset($_smarty_tpl->getVariable('addresses_style',null,true,false)->value)){?>
	<?php if (!isset($_smarty_tpl->tpl_vars['addresses_style']) || !is_array($_smarty_tpl->tpl_vars['addresses_style']->value)) $_smarty_tpl->createLocalArrayVariable('addresses_style', null, null);
$_smarty_tpl->tpl_vars['addresses_style']->value['company'] = 'address_company';?>
	<?php if (!isset($_smarty_tpl->tpl_vars['addresses_style']) || !is_array($_smarty_tpl->tpl_vars['addresses_style']->value)) $_smarty_tpl->createLocalArrayVariable('addresses_style', null, null);
$_smarty_tpl->tpl_vars['addresses_style']->value['vat_number'] = 'address_company';?>
	<?php if (!isset($_smarty_tpl->tpl_vars['addresses_style']) || !is_array($_smarty_tpl->tpl_vars['addresses_style']->value)) $_smarty_tpl->createLocalArrayVariable('addresses_style', null, null);
$_smarty_tpl->tpl_vars['addresses_style']->value['firstname'] = 'address_name';?>
	<?php if (!isset($_smarty_tpl->tpl_vars['addresses_style']) || !is_array($_smarty_tpl->tpl_vars['addresses_style']->value)) $_smarty_tpl->createLocalArrayVariable('addresses_style', null, null);
$_smarty_tpl->tpl_vars['addresses_style']->value['lastname'] = 'address_name';?>
	<?php if (!isset($_smarty_tpl->tpl_vars['addresses_style']) || !is_array($_smarty_tpl->tpl_vars['addresses_style']->value)) $_smarty_tpl->createLocalArrayVariable('addresses_style', null, null);
$_smarty_tpl->tpl_vars['addresses_style']->value['address1'] = 'address_address1';?>
	<?php if (!isset($_smarty_tpl->tpl_vars['addresses_style']) || !is_array($_smarty_tpl->tpl_vars['addresses_style']->value)) $_smarty_tpl->createLocalArrayVariable('addresses_style', null, null);
$_smarty_tpl->tpl_vars['addresses_style']->value['address2'] = 'address_address2';?>
	<?php if (!isset($_smarty_tpl->tpl_vars['addresses_style']) || !is_array($_smarty_tpl->tpl_vars['addresses_style']->value)) $_smarty_tpl->createLocalArrayVariable('addresses_style', null, null);
$_smarty_tpl->tpl_vars['addresses_style']->value['city'] = 'address_city';?>
	<?php if (!isset($_smarty_tpl->tpl_vars['addresses_style']) || !is_array($_smarty_tpl->tpl_vars['addresses_style']->value)) $_smarty_tpl->createLocalArrayVariable('addresses_style', null, null);
$_smarty_tpl->tpl_vars['addresses_style']->value['country'] = 'address_country';?>
	<?php if (!isset($_smarty_tpl->tpl_vars['addresses_style']) || !is_array($_smarty_tpl->tpl_vars['addresses_style']->value)) $_smarty_tpl->createLocalArrayVariable('addresses_style', null, null);
$_smarty_tpl->tpl_vars['addresses_style']->value['phone'] = 'address_phone';?>
	<?php if (!isset($_smarty_tpl->tpl_vars['addresses_style']) || !is_array($_smarty_tpl->tpl_vars['addresses_style']->value)) $_smarty_tpl->createLocalArrayVariable('addresses_style', null, null);
$_smarty_tpl->tpl_vars['addresses_style']->value['phone_mobile'] = 'address_phone_mobile';?>
	<?php if (!isset($_smarty_tpl->tpl_vars['addresses_style']) || !is_array($_smarty_tpl->tpl_vars['addresses_style']->value)) $_smarty_tpl->createLocalArrayVariable('addresses_style', null, null);
$_smarty_tpl->tpl_vars['addresses_style']->value['alias'] = 'address_title';?>
<?php }?>

<script type="text/javascript">
//<![CDATA[
	
	$(document).ready(function()
	{
		resizeAddressesBox();
	});
	
//]]>
</script>

<?php ob_start(); ?><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('my-account.php',true);?>
"><?php echo smartyTranslate(array('s'=>'My account'),$_smarty_tpl);?>
</a><span class="navigation-pipe"><?php echo $_smarty_tpl->getVariable('navigationPipe')->value;?>
</span><?php echo smartyTranslate(array('s'=>'My addresses'),$_smarty_tpl);?>
<?php  Smarty::$_smarty_vars['capture']['path']=ob_get_clean();?>
<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('tpl_dir')->value)."./breadcrumb.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<h1><?php echo smartyTranslate(array('s'=>'My addresses'),$_smarty_tpl);?>
</h1>
<p><?php echo smartyTranslate(array('s'=>'Please configure the desired billing and delivery addresses to be preselected when placing an order. You may also add additional addresses, useful for sending gifts or receiving your order at the office.'),$_smarty_tpl);?>
</p>

<?php if (isset($_smarty_tpl->getVariable('multipleAddresses',null,true,false)->value)&&$_smarty_tpl->getVariable('multipleAddresses')->value){?>
<div class="addresses">
	<h3><?php echo smartyTranslate(array('s'=>'Your addresses are listed below.'),$_smarty_tpl);?>
</h3>
	<p><?php echo smartyTranslate(array('s'=>'Be sure to update them if they have changed.'),$_smarty_tpl);?>
</p>
	<?php $_smarty_tpl->tpl_vars["adrs_style"] = new Smarty_variable($_smarty_tpl->getVariable('addresses_style')->value, null, null);?>
	<?php  $_smarty_tpl->tpl_vars['address'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('multipleAddresses')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['address']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['address']->iteration=0;
 $_smarty_tpl->tpl_vars['address']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['index']=-1;
if ($_smarty_tpl->tpl_vars['address']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['address']->key => $_smarty_tpl->tpl_vars['address']->value){
 $_smarty_tpl->tpl_vars['address']->iteration++;
 $_smarty_tpl->tpl_vars['address']->index++;
 $_smarty_tpl->tpl_vars['address']->first = $_smarty_tpl->tpl_vars['address']->index === 0;
 $_smarty_tpl->tpl_vars['address']->last = $_smarty_tpl->tpl_vars['address']->iteration === $_smarty_tpl->tpl_vars['address']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['first'] = $_smarty_tpl->tpl_vars['address']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['index']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['last'] = $_smarty_tpl->tpl_vars['address']->last;
?>
		<ul class="address <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['last']){?>last_item<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['first']){?>first_item<?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['index']%2){?>alternate_item<?php }else{ ?>item<?php }?>">
			<li class="address_title"><?php echo $_smarty_tpl->tpl_vars['address']->value['object']['alias'];?>
</li>
			<?php  $_smarty_tpl->tpl_vars['pattern'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['address']->value['ordered']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['pattern']->key => $_smarty_tpl->tpl_vars['pattern']->value){
?>
				<?php $_smarty_tpl->tpl_vars['addressKey'] = new Smarty_variable(explode(" ",$_smarty_tpl->tpl_vars['pattern']->value), null, null);?>
				<li>
				<?php  $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('addressKey')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['key']->key => $_smarty_tpl->tpl_vars['key']->value){
?>
					<span class="<?php if (isset($_smarty_tpl->getVariable('addresses_style',null,true,false)->value[$_smarty_tpl->tpl_vars['key']->value])){?><?php echo $_smarty_tpl->getVariable('addresses_style')->value[$_smarty_tpl->tpl_vars['key']->value];?>
<?php }?>">
						<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['address']->value['formated'][$_smarty_tpl->tpl_vars['key']->value],'htmlall','UTF-8');?>

					</span>
				<?php }} ?>
				</li>
			<?php }} ?>
			<li class="address_update"><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('address.php',true);?>
?id_address=<?php echo intval($_smarty_tpl->tpl_vars['address']->value['object']['id']);?>
" title="<?php echo smartyTranslate(array('s'=>'Update'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Update'),$_smarty_tpl);?>
</a></li>
			<li class="address_delete"><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('address.php',true);?>
?id_address=<?php echo intval($_smarty_tpl->tpl_vars['address']->value['object']['id']);?>
&amp;delete" onclick="return confirm('<?php echo smartyTranslate(array('s'=>'Are you sure?'),$_smarty_tpl);?>
');" title="<?php echo smartyTranslate(array('s'=>'Delete'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Delete'),$_smarty_tpl);?>
</a></li>
		</ul>
	<?php }} ?>
	<p class="clear" />
</div>
<?php }else{ ?>
	<p class="warning"><?php echo smartyTranslate(array('s'=>'No addresses available.'),$_smarty_tpl);?>
&nbsp;<a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('address.php',true);?>
"><?php echo smartyTranslate(array('s'=>'Add new address'),$_smarty_tpl);?>
</a></p>
<?php }?>

<div class="clear address_add"><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('address.php',true);?>
" title="<?php echo smartyTranslate(array('s'=>'Add an address'),$_smarty_tpl);?>
" class="button_large"><?php echo smartyTranslate(array('s'=>'Add an address'),$_smarty_tpl);?>
</a></div>

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