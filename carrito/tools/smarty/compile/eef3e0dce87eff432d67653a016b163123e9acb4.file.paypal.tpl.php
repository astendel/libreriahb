<?php /* Smarty version Smarty-3.0.7, created on 2011-12-01 04:07:16
         compiled from "/home/libhb/public_html/carrito/modules/paypal/standard/paypal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11701752304ed727a4a795f4-37744298%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eef3e0dce87eff432d67653a016b163123e9acb4' => 
    array (
      0 => '/home/libhb/public_html/carrito/modules/paypal/standard/paypal.tpl',
      1 => 1322709273,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11701752304ed727a4a795f4-37744298',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<p class="payment_module">
	<a href="<?php echo $_smarty_tpl->getVariable('base_dir_ssl')->value;?>
modules/paypal/standard/redirect.php" title="<?php echo smartyTranslate(array('s'=>'Pay with PayPal','mod'=>'paypal'),$_smarty_tpl);?>
">
		<img src="<?php echo $_smarty_tpl->getVariable('base_dir_ssl')->value;?>
modules/paypal/paypal.gif" alt="<?php echo smartyTranslate(array('s'=>'Pay with PayPal','mod'=>'paypal'),$_smarty_tpl);?>
" />
		<?php echo smartyTranslate(array('s'=>'Pay with PayPal','mod'=>'paypal'),$_smarty_tpl);?>

	</a>
</p>
