<?php /* Smarty version Smarty-3.0.7, created on 2011-12-01 04:07:16
         compiled from "/home/libhb/public_html/carrito/modules/cashondelivery/payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20862577264ed727a4ab87b0-96992771%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '582b7b37e0f72cf9c688f380724b2ac4ca244215' => 
    array (
      0 => '/home/libhb/public_html/carrito/modules/cashondelivery/payment.tpl',
      1 => 1322709273,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20862577264ed727a4ab87b0-96992771',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<p class="payment_module">
	<a href="<?php echo $_smarty_tpl->getVariable('this_path_ssl')->value;?>
validation.php" title="<?php echo smartyTranslate(array('s'=>'Pay with cash on delivery (COD)','mod'=>'cashondelivery'),$_smarty_tpl);?>
">
		<img src="<?php echo $_smarty_tpl->getVariable('this_path')->value;?>
cashondelivery.gif" alt="<?php echo smartyTranslate(array('s'=>'Pay with cash on delivery (COD)','mod'=>'cashondelivery'),$_smarty_tpl);?>
" style="float:left;" />
		<br /><?php echo smartyTranslate(array('s'=>'Pay with cash on delivery (COD)','mod'=>'cashondelivery'),$_smarty_tpl);?>

		<br /><?php echo smartyTranslate(array('s'=>'You pay for the merchandise upon delivery','mod'=>'cashondelivery'),$_smarty_tpl);?>

		<br style="clear:both;" />
	</a>
</p>