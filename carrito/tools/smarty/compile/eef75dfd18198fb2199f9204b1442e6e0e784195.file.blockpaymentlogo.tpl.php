<?php /* Smarty version Smarty-3.0.7, created on 2011-12-02 04:13:27
         compiled from "/home/libhb/public_html/carrito/modules/blockpaymentlogo/blockpaymentlogo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14041608534ed87a97d589e7-72178323%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eef75dfd18198fb2199f9204b1442e6e0e784195' => 
    array (
      0 => '/home/libhb/public_html/carrito/modules/blockpaymentlogo/blockpaymentlogo.tpl',
      1 => 1322709273,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14041608534ed87a97d589e7-72178323',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<!-- Block payment logo module -->
<div id="paiement_logo_block_left" class="paiement_logo_block">
	<a href="<?php echo $_smarty_tpl->getVariable('link')->value->getCMSLink($_smarty_tpl->getVariable('cms_payement_logo')->value);?>
">
		<img src="<?php echo $_smarty_tpl->getVariable('img_dir')->value;?>
logo_paiement_visa.jpg" alt="visa" width="33" height="21" />
		<img src="<?php echo $_smarty_tpl->getVariable('img_dir')->value;?>
logo_paiement_mastercard.jpg" alt="mastercard" width="32" height="21" />
		<img src="<?php echo $_smarty_tpl->getVariable('img_dir')->value;?>
logo_paiement_paypal.jpg" alt="paypal" width="61" height="21" />
	</a>
</div>
<!-- /Block payment logo module -->