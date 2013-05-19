<?php /* Smarty version Smarty-3.0.7, created on 2011-12-01 07:11:09
         compiled from "/home/libhb/public_html/carrito/themes/theme001/modules/blockuserinfo/blockuserinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21120599794ed752bd63f058-53461800%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4904f50b8fa333db5163237e34806b6b2e84294' => 
    array (
      0 => '/home/libhb/public_html/carrito/themes/theme001/modules/blockuserinfo/blockuserinfo.tpl',
      1 => 1322733162,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21120599794ed752bd63f058-53461800',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- Block user information module HEADER -->
<div id="header_user">
	<div class="header_userBg">
        <div class="width">
	<p id="header_user_info">
                <!--<?php echo smartyTranslate(array('s'=>'Welcome','mod'=>'blockuserinfo'),$_smarty_tpl);?>
,<br />-->
                <?php if ($_smarty_tpl->getVariable('logged')->value){?>
                    <!--<span><?php echo $_smarty_tpl->getVariable('customerName')->value;?>
</span>--> (<a href="<?php echo $_smarty_tpl->getVariable('base_dir')->value;?>
index.php?mylogout" title="<?php echo smartyTranslate(array('s'=>'Log me out','mod'=>'blockuserinfo'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Log out','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a>)
                <?php }else{ ?>
                    <a href="<?php echo $_smarty_tpl->getVariable('base_dir_ssl')->value;?>
my-account.php"><?php echo smartyTranslate(array('s'=>'Log in','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a>
                <?php }?>
            </p>
	<ul id="header_nav">
    	<div style="padding:10px 0px 0px 26px;"><div class="width">
        <li id="your_account"><a href="<?php echo $_smarty_tpl->getVariable('base_dir_ssl')->value;?>
my-account.php" title="<?php echo smartyTranslate(array('s'=>'Your Account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Your Account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a></li>
		<li id="shopping_cart">
			<a href="<?php echo $_smarty_tpl->getVariable('base_dir_ssl')->value;?>
order.php" title="<?php echo smartyTranslate(array('s'=>'Your Shopping Cart','mod'=>'blockuserinfo'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Cart:','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a>
			<span class="ajax_cart_quantity<?php if ($_smarty_tpl->getVariable('cart_qties')->value==0){?> hidden<?php }?>"><?php echo $_smarty_tpl->getVariable('cart_qties')->value;?>
</span>
			<span class="ajax_cart_product_txt<?php if ($_smarty_tpl->getVariable('cart_qties')->value!=1){?> hidden<?php }?>"><?php echo smartyTranslate(array('s'=>'product','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</span>
			<span class="ajax_cart_product_txt_s<?php if ($_smarty_tpl->getVariable('cart_qties')->value<2){?> hidden<?php }?>"><?php echo smartyTranslate(array('s'=>'products','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</span>
			<?php if ($_smarty_tpl->getVariable('cart_qties')->value>0){?>
				<span class="ajax_cart_total<?php if ($_smarty_tpl->getVariable('cart_qties')->value==0){?> hidden<?php }?>">
					<?php if ($_smarty_tpl->getVariable('priceDisplay')->value==1){?>
						<?php echo Product::convertPrice(array('price'=>$_smarty_tpl->getVariable('cart')->value->getOrderTotal(false,4)),$_smarty_tpl);?>

					<?php }else{ ?>
						<?php echo Product::convertPrice(array('price'=>$_smarty_tpl->getVariable('cart')->value->getOrderTotal(true,4)),$_smarty_tpl);?>

					<?php }?>
				</span>
			<?php }?>
			<span class="ajax_cart_no_product<?php if ($_smarty_tpl->getVariable('cart_qties')->value>0){?> hidden<?php }?>"><?php echo smartyTranslate(array('s'=>'(empty)','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</span>
		</li>
		
        </div></div>
	</ul>
</div></div></div>
<!-- /Block user information module HEADER -->
