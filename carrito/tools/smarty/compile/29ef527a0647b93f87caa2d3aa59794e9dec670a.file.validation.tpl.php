<?php /* Smarty version Smarty-3.0.7, created on 2011-12-01 04:07:55
         compiled from "/home/libhb/public_html/carrito/modules/cashondelivery/validation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17395325914ed727cb041f66-68707259%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29ef527a0647b93f87caa2d3aa59794e9dec670a' => 
    array (
      0 => '/home/libhb/public_html/carrito/modules/cashondelivery/validation.tpl',
      1 => 1322709273,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17395325914ed727cb041f66-68707259',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<?php ob_start(); ?><?php echo smartyTranslate(array('s'=>'Shipping','mod'=>'cashondelivery'),$_smarty_tpl);?>
<?php  Smarty::$_smarty_vars['capture']['path']=ob_get_clean();?>
<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('tpl_dir')->value)."./breadcrumb.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<h2><?php echo smartyTranslate(array('s'=>'Order summation','mod'=>'cashondelivery'),$_smarty_tpl);?>
</h2>

<?php $_smarty_tpl->tpl_vars['current_step'] = new Smarty_variable('payment', null, null);?>
<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('tpl_dir')->value)."./order-steps.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<h3><?php echo smartyTranslate(array('s'=>'Cash on delivery (COD) payment','mod'=>'cashondelivery'),$_smarty_tpl);?>
</h3>

<form action="<?php echo $_smarty_tpl->getVariable('this_path_ssl')->value;?>
validation.php" method="post">
	<input type="hidden" name="confirm" value="1" />
	<p>
		<img src="<?php echo $_smarty_tpl->getVariable('this_path')->value;?>
cashondelivery.jpg" alt="<?php echo smartyTranslate(array('s'=>'Cash on delivery (COD) payment','mod'=>'cashondelivery'),$_smarty_tpl);?>
" style="float:left; margin: 0px 10px 5px 0px;" />
		<?php echo smartyTranslate(array('s'=>'You have chosen the cash on delivery method.','mod'=>'cashondelivery'),$_smarty_tpl);?>

		<br/><br />
		<?php echo smartyTranslate(array('s'=>'The total amount of your order is','mod'=>'cashondelivery'),$_smarty_tpl);?>

		<span id="amount_<?php echo $_smarty_tpl->getVariable('currencies')->value[0]['id_currency'];?>
" class="price"><?php echo Product::convertPrice(array('price'=>$_smarty_tpl->getVariable('total')->value),$_smarty_tpl);?>
</span>
		<?php if ($_smarty_tpl->getVariable('use_taxes')->value==1){?>
		    <?php echo smartyTranslate(array('s'=>'(tax incl.)','mod'=>'cashondelivery'),$_smarty_tpl);?>

		<?php }?>
	</p>
	<p>
		<br /><br />
		<br /><br />
		<b><?php echo smartyTranslate(array('s'=>'Please confirm your order by clicking \'I confirm my order\'','mod'=>'cashondelivery'),$_smarty_tpl);?>
.</b>
	</p>
	<p class="cart_navigation">
		<a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('order.php',true);?>
?step=3" class="button_large"><?php echo smartyTranslate(array('s'=>'Other payment methods','mod'=>'cashondelivery'),$_smarty_tpl);?>
</a>
		<input type="submit" name="submit" value="<?php echo smartyTranslate(array('s'=>'I confirm my order','mod'=>'cashondelivery'),$_smarty_tpl);?>
" class="exclusive_large" />
	</p>
</form>
