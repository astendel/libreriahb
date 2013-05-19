<?php /* Smarty version Smarty-3.0.7, created on 2011-12-01 04:07:38
         compiled from "/home/libhb/public_html/carrito/modules/paypal/standard/redirect.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14131889434ed727ba33d387-91842165%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36c56f803877881e5e4cbbc3f648e91ced04fbda' => 
    array (
      0 => '/home/libhb/public_html/carrito/modules/paypal/standard/redirect.tpl',
      1 => 1322709273,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14131889434ed727ba33d387-91842165',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/home/libhb/public_html/carrito/tools/smarty/plugins/modifier.escape.php';
?>

<html>
	<head>
		<title>PayPal</title>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('url')->value;?>
js/jquery/jquery-1.4.4.min.js"></script>
	</head>
	<body>
		<p><?php echo $_smarty_tpl->getVariable('redirect_text')->value;?>
<br /><a href="javascript:history.go(-1);"><?php echo $_smarty_tpl->getVariable('cancel_text')->value;?>
</a></p>
		<form action="<?php echo $_smarty_tpl->getVariable('paypal_url')->value;?>
" method="post" id="paypal_form" class="hidden">
			<input type="hidden" name="upload" value="1" />
			<input type="hidden" name="address_override" value="0" />
			<input type="hidden" name="first_name" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('address')->value->firstname,'htmlall','UTF-8');?>
" />
			<input type="hidden" name="last_name" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('address')->value->lastname,'htmlall','UTF-8');?>
" />
			<input type="hidden" name="address1" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('address')->value->address1,'htmlall','UTF-8');?>
" />
			<?php if ($_smarty_tpl->getVariable('address')->value->address2!=null){?>
			<input type="hidden" name="address2" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('address')->value->address2,'htmlall','UTF-8');?>
" />
			<?php }?>
			<input type="hidden" name="city" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('address')->value->city,'htmlall','UTF-8');?>
" />
			<input type="hidden" name="zip" value="<?php echo $_smarty_tpl->getVariable('address')->value->postcode;?>
" />
			<input type="hidden" name="country" value="<?php echo $_smarty_tpl->getVariable('country')->value->iso_code;?>
" />
			<?php if ($_smarty_tpl->getVariable('state')->value!=null){?>
			<input type="hidden" name="state" value="<?php echo $_smarty_tpl->getVariable('state')->value->iso_code;?>
" />
			<?php }?>
			<input type="hidden" name="amount" value="<?php echo $_smarty_tpl->getVariable('amount')->value;?>
" />
			<input type="hidden" name="email" value="<?php echo $_smarty_tpl->getVariable('customer')->value->email;?>
" />
			<?php if (!$_smarty_tpl->getVariable('discount')->value){?>
			<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('products')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['product']->key;
?>
			<input type="hidden" name="item_name_<?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['name'],'htmlall','UTF-8');?>
<?php if (isset($_smarty_tpl->tpl_vars['product']->value['attributes'])){?> - <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['attributes'],'htmlall','UTF-8');?>
<?php }?>" />
			<input type="hidden" name="amount_<?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['price_wt'];?>
" />
			<input type="hidden" name="quantity_<?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['cart_quantity'];?>
" />
			<?php }} ?>
			<input type="hidden" name="shipping_1" value="<?php echo $_smarty_tpl->getVariable('shipping')->value;?>
" />
			<?php }else{ ?>
			<input type="hidden" name="item_name_1" value="<?php echo $_smarty_tpl->getVariable('cart_text')->value;?>
" />
			<input type="hidden" name="amount_1" value="<?php echo $_smarty_tpl->getVariable('total')->value;?>
" />
			<input type="hidden" name="quantity_1" value="1" />
			<?php }?>
			<input type="hidden" name="business" value="<?php echo $_smarty_tpl->getVariable('business')->value;?>
" />
			<input type="hidden" name="receiver_email" value="<?php echo $_smarty_tpl->getVariable('business')->value;?>
" />
			<input type="hidden" name="cmd" value="_cart" />
			<input type="hidden" name="charset" value="utf-8" />
			<input type="hidden" name="currency_code" value="<?php echo $_smarty_tpl->getVariable('currency_module')->value->iso_code;?>
" />
			<input type="hidden" name="payer_id" value="<?php echo $_smarty_tpl->getVariable('customer')->value->id;?>
" />
			<input type="hidden" name="payer_email" value="<?php echo $_smarty_tpl->getVariable('customer')->value->email;?>
" />
			<input type="hidden" name="custom" value="<?php echo $_smarty_tpl->getVariable('cart_id')->value;?>
" />
			<input type="hidden" name="return" value="<?php echo $_smarty_tpl->getVariable('url')->value;?>
order-confirmation.php?key=<?php echo $_smarty_tpl->getVariable('customer')->value->secure_key;?>
&amp;id_cart=<?php echo $_smarty_tpl->getVariable('cart_id')->value;?>
&amp;id_module=<?php echo $_smarty_tpl->getVariable('paypal_id')->value;?>
&amp;slowvalidation" />
			<input type="hidden" name="cancel_return" value="<?php echo $_smarty_tpl->getVariable('url')->value;?>
" />
			<input type="hidden" name="notify_url" value="<?php echo $_smarty_tpl->getVariable('url')->value;?>
modules/paypal/validation.php" />
			<?php if ($_smarty_tpl->getVariable('header')->value!=null){?>
			<input type="hidden" name="cpp_header_image" value="<?php echo $_smarty_tpl->getVariable('header')->value;?>
" />
			<?php }?>
			<input type="hidden" name="rm" value="2" />
			<input type="hidden" name="bn" value="PRESTASHOP_WPS" />
			<input type="hidden" name="cbt" value="<?php echo $_smarty_tpl->getVariable('return_text')->value;?>
" />
			<input type="hidden" name="image_url" value="<?php echo $_smarty_tpl->getVariable('url')->value;?>
img/logo.jpg" /> 
		</form>
		<script type="text/javascript">
		
		$(document).ready(function() {
			$('#paypal_form').submit();
		});
		
		</script>
	</body>
</html>
