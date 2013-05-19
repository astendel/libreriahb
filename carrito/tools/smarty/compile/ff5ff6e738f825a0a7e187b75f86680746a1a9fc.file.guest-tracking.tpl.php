<?php /* Smarty version Smarty-3.0.7, created on 2011-12-07 12:45:08
         compiled from "/home/libhb/public_html/carrito/themes/prestashop/guest-tracking.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7674334814edf8a049fa945-54485542%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff5ff6e738f825a0a7e187b75f86680746a1a9fc' => 
    array (
      0 => '/home/libhb/public_html/carrito/themes/prestashop/guest-tracking.tpl',
      1 => 1322709273,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7674334814edf8a049fa945-54485542',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/home/libhb/public_html/carrito/tools/smarty/plugins/modifier.escape.php';
?>

<?php ob_start(); ?><?php echo smartyTranslate(array('s'=>'Track your order'),$_smarty_tpl);?>
<?php  Smarty::$_smarty_vars['capture']['path']=ob_get_clean();?>
<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('tpl_dir')->value)."./breadcrumb.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<h1><?php echo smartyTranslate(array('s'=>'Track your order'),$_smarty_tpl);?>
</h1>

<?php if (isset($_smarty_tpl->getVariable('order',null,true,false)->value)){?>
	<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('tpl_dir')->value)."./order-detail.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
	
	<h2 id="guestToCustomer"><?php echo smartyTranslate(array('s'=>'Create your customer account'),$_smarty_tpl);?>
</h2>
	
	<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('tpl_dir')->value)."./errors.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
	
	<?php if (isset($_smarty_tpl->getVariable('transformSuccess',null,true,false)->value)){?>
		<p class="success"><?php echo smartyTranslate(array('s'=>'Your guest account has been successfully transformed into a customer account. You can now log-in on this'),$_smarty_tpl);?>
 <a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('authentication.php',true);?>
"><?php echo smartyTranslate(array('s'=>'page'),$_smarty_tpl);?>
</a></p>
	<?php }else{ ?>
		<form method="post" action="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('action')->value,'htmlall','UTF-8');?>
#guestToCustomer" class="std">
			<fieldset>
				<p class="bold"><?php echo smartyTranslate(array('s'=>'Transform your guest account into a customer account and enjoy:'),$_smarty_tpl);?>
</p>
				<ul class="bullet">
					<li><?php echo smartyTranslate(array('s'=>'Personal and secure access'),$_smarty_tpl);?>
</li>
					<li><?php echo smartyTranslate(array('s'=>'Quick and easy check out'),$_smarty_tpl);?>
</li>
					<li><?php echo smartyTranslate(array('s'=>'Easier merchandise return'),$_smarty_tpl);?>
</li>
				</ul>
				<p class="text">
					<label><?php echo smartyTranslate(array('s'=>'Define your password:'),$_smarty_tpl);?>
</label>
					<input type="password" name="password" />
				</p>
				
				<input type="hidden" name="id_order" value="<?php if (isset($_GET['id_order'])){?><?php echo smarty_modifier_escape($_GET['id_order'],'htmlall','UTF-8');?>
<?php }else{ ?><?php if (isset($_POST['id_order'])){?><?php echo smarty_modifier_escape($_POST['id_order'],'htmlall','UTF-8');?>
<?php }?><?php }?>" />
				<input type="hidden" name="email" value="<?php if (isset($_GET['email'])){?><?php echo smarty_modifier_escape($_GET['email'],'htmlall','UTF-8');?>
<?php }else{ ?><?php if (isset($_POST['email'])){?><?php echo smarty_modifier_escape($_POST['email'],'htmlall','UTF-8');?>
<?php }?><?php }?>" />
				
				<p class="center"><input type="submit" class="exclusive_large" name="submitTransformGuestToCustomer" value="<?php echo smartyTranslate(array('s'=>'Submit'),$_smarty_tpl);?>
" /></p>
			</fieldset>
		</form>
	<?php }?>
<?php }else{ ?>
	<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('tpl_dir')->value)."./errors.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
	<?php if (isset($_smarty_tpl->getVariable('show_login_link',null,true,false)->value)&&$_smarty_tpl->getVariable('show_login_link')->value){?>
		<p><img src="<?php echo $_smarty_tpl->getVariable('img_dir')->value;?>
icon/userinfo.gif" alt="<?php echo smartyTranslate(array('s'=>'Information'),$_smarty_tpl);?>
" class="icon" /><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('my-account.php',true);?>
"><?php echo smartyTranslate(array('s'=>'Click here to log-in to your customer account'),$_smarty_tpl);?>
</a><br /><br /></p>
	<?php }?>
	<form method="post" action="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('action')->value,'htmlall','UTF-8');?>
" class="std">
		<fieldset>
			<p><?php echo smartyTranslate(array('s'=>'To track your order, please enter the following information:'),$_smarty_tpl);?>
</p>
			<p class="text">
				<label><?php echo smartyTranslate(array('s'=>'Order ID:'),$_smarty_tpl);?>
 <b>#</b></label>
				<input type="text" name="id_order" value="<?php if (isset($_GET['id_order'])){?><?php echo smarty_modifier_escape($_GET['id_order'],'htmlall','UTF-8');?>
<?php }else{ ?><?php if (isset($_POST['id_order'])){?><?php echo smarty_modifier_escape($_POST['id_order'],'htmlall','UTF-8');?>
<?php }?><?php }?>" size="8" />
				<i><?php echo smartyTranslate(array('s'=>'For example: 010123'),$_smarty_tpl);?>
</i>
			</p>
			
			<p class="text">
				<label><?php echo smartyTranslate(array('s'=>'E-mail:'),$_smarty_tpl);?>
</label>
				<input type="text" name="email" value="<?php if (isset($_GET['email'])){?><?php echo smarty_modifier_escape($_GET['email'],'htmlall','UTF-8');?>
<?php }else{ ?><?php if (isset($_POST['email'])){?><?php echo smarty_modifier_escape($_POST['email'],'htmlall','UTF-8');?>
<?php }?><?php }?>" />
			</p>
		
			<p class="center"><input type="submit" class="exclusive_large" name="submitGuestTracking" value="<?php echo smartyTranslate(array('s'=>'View my order'),$_smarty_tpl);?>
" /></p>
		</fieldset>
	</form>
<?php }?>
