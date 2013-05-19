<?php /* Smarty version Smarty-3.0.7, created on 2011-12-02 16:56:52
         compiled from "/home/libhb/public_html/carrito/themes/prestashop/./order-opc-new-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14815212314ed92d84a6f022-12965604%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3313006ab477a5739e470c3191ea553b36214420' => 
    array (
      0 => '/home/libhb/public_html/carrito/themes/prestashop/./order-opc-new-account.tpl',
      1 => 1322709273,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14815212314ed92d84a6f022-12965604',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/home/libhb/public_html/carrito/tools/smarty/plugins/modifier.escape.php';
?>
<?php if (!isset($_smarty_tpl->getVariable('dlv_all_fields',null,true,false)->value)){?>
		<?php if (!isset($_smarty_tpl->tpl_vars['dlv_all_fields']) || !is_array($_smarty_tpl->tpl_vars['dlv_all_fields']->value)) $_smarty_tpl->createLocalArrayVariable('dlv_all_fields', null, null);
$_smarty_tpl->tpl_vars['dlv_all_fields']->value[0] = 'company';?>
		<?php if (!isset($_smarty_tpl->tpl_vars['dlv_all_fields']) || !is_array($_smarty_tpl->tpl_vars['dlv_all_fields']->value)) $_smarty_tpl->createLocalArrayVariable('dlv_all_fields', null, null);
$_smarty_tpl->tpl_vars['dlv_all_fields']->value[1] = 'firstname';?>
		<?php if (!isset($_smarty_tpl->tpl_vars['dlv_all_fields']) || !is_array($_smarty_tpl->tpl_vars['dlv_all_fields']->value)) $_smarty_tpl->createLocalArrayVariable('dlv_all_fields', null, null);
$_smarty_tpl->tpl_vars['dlv_all_fields']->value[2] = 'lastname';?>
		<?php if (!isset($_smarty_tpl->tpl_vars['dlv_all_fields']) || !is_array($_smarty_tpl->tpl_vars['dlv_all_fields']->value)) $_smarty_tpl->createLocalArrayVariable('dlv_all_fields', null, null);
$_smarty_tpl->tpl_vars['dlv_all_fields']->value[3] = 'address1';?>
		<?php if (!isset($_smarty_tpl->tpl_vars['dlv_all_fields']) || !is_array($_smarty_tpl->tpl_vars['dlv_all_fields']->value)) $_smarty_tpl->createLocalArrayVariable('dlv_all_fields', null, null);
$_smarty_tpl->tpl_vars['dlv_all_fields']->value[4] = 'address2';?>
		<?php if (!isset($_smarty_tpl->tpl_vars['dlv_all_fields']) || !is_array($_smarty_tpl->tpl_vars['dlv_all_fields']->value)) $_smarty_tpl->createLocalArrayVariable('dlv_all_fields', null, null);
$_smarty_tpl->tpl_vars['dlv_all_fields']->value[5] = 'postcode';?>
		<?php if (!isset($_smarty_tpl->tpl_vars['dlv_all_fields']) || !is_array($_smarty_tpl->tpl_vars['dlv_all_fields']->value)) $_smarty_tpl->createLocalArrayVariable('dlv_all_fields', null, null);
$_smarty_tpl->tpl_vars['dlv_all_fields']->value[6] = 'city';?>
		<?php if (!isset($_smarty_tpl->tpl_vars['dlv_all_fields']) || !is_array($_smarty_tpl->tpl_vars['dlv_all_fields']->value)) $_smarty_tpl->createLocalArrayVariable('dlv_all_fields', null, null);
$_smarty_tpl->tpl_vars['dlv_all_fields']->value[7] = 'country';?>
		<?php if (!isset($_smarty_tpl->tpl_vars['dlv_all_fields']) || !is_array($_smarty_tpl->tpl_vars['dlv_all_fields']->value)) $_smarty_tpl->createLocalArrayVariable('dlv_all_fields', null, null);
$_smarty_tpl->tpl_vars['dlv_all_fields']->value[8] = 'state';?>
<?php }?>

<div id="opc_new_account" class="opc-main-block">
	<div id="opc_new_account-overlay" class="opc-overlay" style="display: none;"></div>
	<h2>1. <?php echo smartyTranslate(array('s'=>'Account'),$_smarty_tpl);?>
</h2>
	<form action="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('authentication.php',true);?>
?back=order-opc.php" method="post" id="login_form" class="std">
		<fieldset>
			<h3><?php echo smartyTranslate(array('s'=>'Already registered?'),$_smarty_tpl);?>
 <a href="#" id="openLoginFormBlock"><?php echo smartyTranslate(array('s'=>'Click here'),$_smarty_tpl);?>
</a></h3>
			<div id="login_form_content" style="display:none;">
				<!-- Error return block -->
				<div id="opc_login_errors" class="error" style="display:none;"></div>
				<!-- END Error return block -->
				<div style="margin-left:40px;margin-bottom:5px;float:left;width:40%;">
					<label for="login_email"><?php echo smartyTranslate(array('s'=>'E-mail address'),$_smarty_tpl);?>
</label>
					<span><input type="text" id="login_email" name="email" /></span>
				</div>
				<div style="margin-left:40px;margin-bottom:5px;float:left;width:40%;">
					<label for="passwd"><?php echo smartyTranslate(array('s'=>'Password'),$_smarty_tpl);?>
</label>
					<span><input type="password" id="login_passwd" name="passwd" /></span>
				</div>
				<p class="submit">
					<?php if (isset($_smarty_tpl->getVariable('back',null,true,false)->value)){?><input type="hidden" class="hidden" name="back" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('back')->value,'htmlall','UTF-8');?>
" /><?php }?>
					<input type="submit" id="SubmitLogin" name="SubmitLogin" class="button" value="<?php echo smartyTranslate(array('s'=>'Log in'),$_smarty_tpl);?>
" />
				</p>
				<p class="lost_password"><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('password.php',true);?>
"><?php echo smartyTranslate(array('s'=>'Forgot your password?'),$_smarty_tpl);?>
</a></p>
			</div>
		</fieldset>
	</form>
	<form action="#" method="post" id="new_account_form" class="std">
		<fieldset>
			<h3 id="new_account_title"><?php echo smartyTranslate(array('s'=>'New Customer'),$_smarty_tpl);?>
</h3>
			<div id="opc_account_choice">
				<div class="opc_float">
					<h4><?php echo smartyTranslate(array('s'=>'Instant Checkout'),$_smarty_tpl);?>
</h4>
					<p>
						<input type="button" class="exclusive_large" id="opc_guestCheckout" value="<?php echo smartyTranslate(array('s'=>'Checkout as guest'),$_smarty_tpl);?>
" />
					</p>
				</div>

				<div class="opc_float">
					<h4><?php echo smartyTranslate(array('s'=>'Create your account today and enjoy:'),$_smarty_tpl);?>
</h4>
					<ul class="bullet">
						<li><?php echo smartyTranslate(array('s'=>'Personalized and secure access'),$_smarty_tpl);?>
</li>
						<li><?php echo smartyTranslate(array('s'=>'Fast and easy check out'),$_smarty_tpl);?>
</li>
						<li><?php echo smartyTranslate(array('s'=>'Separate billing and shipping addresses'),$_smarty_tpl);?>
</li>
					</ul>
					<p>
						<input type="button" class="button_large" id="opc_createAccount" value="<?php echo smartyTranslate(array('s'=>'Create an account'),$_smarty_tpl);?>
" />
					</p>
				</div>
				<div class="clear"></div>
			</div>
			<div id="opc_account_form">
				<?php echo $_smarty_tpl->getVariable('HOOK_CREATE_ACCOUNT_TOP')->value;?>

				<script type="text/javascript">
				// <![CDATA[
				idSelectedCountry = <?php if (isset($_smarty_tpl->getVariable('guestInformations',null,true,false)->value)&&$_smarty_tpl->getVariable('guestInformations')->value['id_state']){?><?php echo intval($_smarty_tpl->getVariable('guestInformations')->value['id_state']);?>
<?php }else{ ?>false<?php }?>;
				<?php if (isset($_smarty_tpl->getVariable('countries',null,true,false)->value)){?>
					<?php  $_smarty_tpl->tpl_vars['country'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('countries')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['country']->key => $_smarty_tpl->tpl_vars['country']->value){
?>
						<?php if (isset($_smarty_tpl->tpl_vars['country']->value['states'])&&$_smarty_tpl->tpl_vars['country']->value['contains_states']){?>
							countries[<?php echo intval($_smarty_tpl->tpl_vars['country']->value['id_country']);?>
] = new Array();
							<?php  $_smarty_tpl->tpl_vars['state'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['country']->value['states']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['state']->key => $_smarty_tpl->tpl_vars['state']->value){
?>
								countries[<?php echo intval($_smarty_tpl->tpl_vars['country']->value['id_country']);?>
].push({'id' : '<?php echo $_smarty_tpl->tpl_vars['state']->value['id_state'];?>
', 'name' : '<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['state']->value['name'],'htmlall','UTF-8');?>
'});
							<?php }} ?>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['country']->value['need_identification_number']){?>
							countriesNeedIDNumber.push(<?php echo intval($_smarty_tpl->tpl_vars['country']->value['id_country']);?>
);
						<?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['country']->value['need_zip_code'])){?>
							countriesNeedZipCode[<?php echo intval($_smarty_tpl->tpl_vars['country']->value['id_country']);?>
] = <?php echo $_smarty_tpl->tpl_vars['country']->value['need_zip_code'];?>
;
						<?php }?>
					<?php }} ?>
				<?php }?>
				//]]>
				<?php if ($_smarty_tpl->getVariable('vat_management')->value){?>
					
					function vat_number()
					{
						if ($('#company').val() != '')
							$('#vat_number_block').show();
						else
							$('#vat_number_block').hide();
					}
					function vat_number_invoice()
					{
						if ($('#company_invoice').val() != '')
							$('#vat_number_block_invoice').show();
						else
							$('#vat_number_block_invoice').hide();
					}

					$(document).ready(function() {
						$('#company').blur(function(){
							vat_number();
						});
						$('#company_invoice').blur(function(){
							vat_number_invoice();
						});
						vat_number();
						vat_number_invoice();
					});
					
				<?php }?>
				</script>
				<!-- Error return block -->
				<div id="opc_account_errors" class="error" style="display:none;"></div>
				<!-- END Error return block -->
				<!-- Account -->
				<input type="hidden" id="is_new_customer" name="is_new_customer" value="0" />
				<input type="hidden" id="opc_id_customer" name="opc_id_customer" value="<?php if (isset($_smarty_tpl->getVariable('guestInformations',null,true,false)->value)&&$_smarty_tpl->getVariable('guestInformations')->value['id_customer']){?><?php echo $_smarty_tpl->getVariable('guestInformations')->value['id_customer'];?>
<?php }else{ ?>0<?php }?>" />
				<input type="hidden" id="opc_id_address_delivery" name="opc_id_address_delivery" value="<?php if (isset($_smarty_tpl->getVariable('guestInformations',null,true,false)->value)&&$_smarty_tpl->getVariable('guestInformations')->value['id_address_delivery']){?><?php echo $_smarty_tpl->getVariable('guestInformations')->value['id_address_delivery'];?>
<?php }else{ ?>0<?php }?>" />
				<input type="hidden" id="opc_id_address_invoice" name="opc_id_address_invoice" value="<?php if (isset($_smarty_tpl->getVariable('guestInformations',null,true,false)->value)&&$_smarty_tpl->getVariable('guestInformations')->value['id_address_delivery']){?><?php echo $_smarty_tpl->getVariable('guestInformations')->value['id_address_delivery'];?>
<?php }else{ ?>0<?php }?>" />
				<p class="required text">
					<label for="email"><?php echo smartyTranslate(array('s'=>'E-mail'),$_smarty_tpl);?>
</label>
					<input type="text" class="text" id="email" name="email" value="<?php if (isset($_smarty_tpl->getVariable('guestInformations',null,true,false)->value)&&$_smarty_tpl->getVariable('guestInformations')->value['email']){?><?php echo $_smarty_tpl->getVariable('guestInformations')->value['email'];?>
<?php }?>" />
					<sup>*</sup>
				</p>
				<p class="required password is_customer_param">
					<label for="passwd"><?php echo smartyTranslate(array('s'=>'Password'),$_smarty_tpl);?>
</label>
					<input type="password" class="text" name="passwd" id="passwd" />
					<sup>*</sup>
					<span class="form_info"><?php echo smartyTranslate(array('s'=>'(5 characters min.)'),$_smarty_tpl);?>
</span>
				</p>
				<p class="radio required">
					<span><?php echo smartyTranslate(array('s'=>'Title'),$_smarty_tpl);?>
</span>
					<input type="radio" name="id_gender" id="id_gender1" value="1" <?php if (isset($_smarty_tpl->getVariable('guestInformations',null,true,false)->value)&&$_smarty_tpl->getVariable('guestInformations')->value['id_gender']==1){?>checked="checked"<?php }?> />
					<label for="id_gender1" class="top"><?php echo smartyTranslate(array('s'=>'Mr.'),$_smarty_tpl);?>
</label>
					<input type="radio" name="id_gender" id="id_gender2" value="2" <?php if (isset($_smarty_tpl->getVariable('guestInformations',null,true,false)->value)&&$_smarty_tpl->getVariable('guestInformations')->value['id_gender']==2){?>checked="checked"<?php }?> />
					<label for="id_gender2" class="top"><?php echo smartyTranslate(array('s'=>'Ms.'),$_smarty_tpl);?>
</label>
				</p>
				<p class="required text">
					<label for="firstname"><?php echo smartyTranslate(array('s'=>'First name'),$_smarty_tpl);?>
</label>
					<input type="text" class="text" id="customer_firstname" name="customer_firstname" onblur="$('#firstname').val($(this).val());" value="<?php if (isset($_smarty_tpl->getVariable('guestInformations',null,true,false)->value)&&$_smarty_tpl->getVariable('guestInformations')->value['customer_firstname']){?><?php echo $_smarty_tpl->getVariable('guestInformations')->value['customer_firstname'];?>
<?php }?>" />
					<sup>*</sup>
				</p>
				<p class="required text">
					<label for="lastname"><?php echo smartyTranslate(array('s'=>'Last name'),$_smarty_tpl);?>
</label>
					<input type="text" class="text" id="customer_lastname" name="customer_lastname" onblur="$('#lastname').val($(this).val());" value="<?php if (isset($_smarty_tpl->getVariable('guestInformations',null,true,false)->value)&&$_smarty_tpl->getVariable('guestInformations')->value['customer_lastname']){?><?php echo $_smarty_tpl->getVariable('guestInformations')->value['customer_lastname'];?>
<?php }?>" />
					<sup>*</sup>
				</p>
				<p class="select">
					<span><?php echo smartyTranslate(array('s'=>'Date of Birth'),$_smarty_tpl);?>
</span>
					<select id="days" name="days">
						<option value="">-</option>
						<?php  $_smarty_tpl->tpl_vars['day'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('days')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['day']->key => $_smarty_tpl->tpl_vars['day']->value){
?>
							<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['day']->value,'htmlall','UTF-8');?>
" <?php if (isset($_smarty_tpl->getVariable('guestInformations',null,true,false)->value)&&($_smarty_tpl->getVariable('guestInformations')->value['sl_day']==$_smarty_tpl->tpl_vars['day']->value)){?> selected="selected"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['day']->value,'htmlall','UTF-8');?>
&nbsp;&nbsp;</option>
						<?php }} ?>
					</select>
					<select id="months" name="months">
						<option value="">-</option>
						<?php  $_smarty_tpl->tpl_vars['month'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('months')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['month']->key => $_smarty_tpl->tpl_vars['month']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['month']->key;
?>
							<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['k']->value,'htmlall','UTF-8');?>
" <?php if (isset($_smarty_tpl->getVariable('guestInformations',null,true,false)->value)&&($_smarty_tpl->getVariable('guestInformations')->value['sl_month']==$_smarty_tpl->tpl_vars['k']->value)){?> selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>($_smarty_tpl->tpl_vars['month']->value)),$_smarty_tpl);?>
&nbsp;</option>
						<?php }} ?>
					</select>
					<select id="years" name="years">
						<option value="">-</option>
						<?php  $_smarty_tpl->tpl_vars['year'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('years')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['year']->key => $_smarty_tpl->tpl_vars['year']->value){
?>
							<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['year']->value,'htmlall','UTF-8');?>
" <?php if (isset($_smarty_tpl->getVariable('guestInformations',null,true,false)->value)&&($_smarty_tpl->getVariable('guestInformations')->value['sl_year']==$_smarty_tpl->tpl_vars['year']->value)){?> selected="selected"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['year']->value,'htmlall','UTF-8');?>
&nbsp;&nbsp;</option>
						<?php }} ?>
					</select>
				</p>
				<?php if (isset($_smarty_tpl->getVariable('newsletter',null,true,false)->value)&&$_smarty_tpl->getVariable('newsletter')->value){?>
				<p class="checkbox">
					<input type="checkbox" name="newsletter" id="newsletter" value="1" <?php if (isset($_smarty_tpl->getVariable('guestInformations',null,true,false)->value)&&$_smarty_tpl->getVariable('guestInformations')->value['newsletter']){?>checked="checked"<?php }?> />
					<label for="newsletter"><?php echo smartyTranslate(array('s'=>'Sign up for our newsletter'),$_smarty_tpl);?>
</label>
				</p>
				<p class="checkbox" >
					<input type="checkbox"name="optin" id="optin" value="1" <?php if (isset($_smarty_tpl->getVariable('guestInformations',null,true,false)->value)&&$_smarty_tpl->getVariable('guestInformations')->value['optin']){?>checked="checked"<?php }?> />
					<label for="optin"><?php echo smartyTranslate(array('s'=>'Receive special offers from our partners'),$_smarty_tpl);?>
</label>
				</p>
				<?php }?>
				<h3><?php echo smartyTranslate(array('s'=>'Delivery address'),$_smarty_tpl);?>
</h3>
				<?php $_smarty_tpl->tpl_vars['stateExist'] = new Smarty_variable(false, null, null);?>
				<?php  $_smarty_tpl->tpl_vars['field_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('dlv_all_fields')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['field_name']->key => $_smarty_tpl->tpl_vars['field_name']->value){
?>
				<?php if ($_smarty_tpl->tpl_vars['field_name']->value=="company"){?>
				<p class="text">
					<label for="company"><?php echo smartyTranslate(array('s'=>'Company'),$_smarty_tpl);?>
</label>
					<input type="text" class="text" id="company" name="company" value="<?php if (isset($_smarty_tpl->getVariable('guestInformations',null,true,false)->value)&&$_smarty_tpl->getVariable('guestInformations')->value['company']){?><?php echo $_smarty_tpl->getVariable('guestInformations')->value['company'];?>
<?php }?>" />
				</p>
				<?php }elseif($_smarty_tpl->tpl_vars['field_name']->value=="firstname"){?>
				<p class="required text">
					<label for="firstname"><?php echo smartyTranslate(array('s'=>'First name'),$_smarty_tpl);?>
</label>
					<input type="text" class="text" id="firstname" name="firstname" value="<?php if (isset($_smarty_tpl->getVariable('guestInformations',null,true,false)->value)&&$_smarty_tpl->getVariable('guestInformations')->value['firstname']){?><?php echo $_smarty_tpl->getVariable('guestInformations')->value['firstname'];?>
<?php }?>" />
					<sup>*</sup>
				</p>
				<?php }elseif($_smarty_tpl->tpl_vars['field_name']->value=="lastname"){?>
				<p class="required text">
					<label for="lastname"><?php echo smartyTranslate(array('s'=>'Last name'),$_smarty_tpl);?>
</label>
					<input type="text" class="text" id="lastname" name="lastname" value="<?php if (isset($_smarty_tpl->getVariable('guestInformations',null,true,false)->value)&&$_smarty_tpl->getVariable('guestInformations')->value['lastname']){?><?php echo $_smarty_tpl->getVariable('guestInformations')->value['lastname'];?>
<?php }?>" />
					<sup>*</sup>
				</p>
				<?php }elseif($_smarty_tpl->tpl_vars['field_name']->value=="address1"){?>
				<p class="required text">
					<label for="address1"><?php echo smartyTranslate(array('s'=>'Address'),$_smarty_tpl);?>
</label>
					<input type="text" class="text" name="address1" id="address1" value="<?php if (isset($_smarty_tpl->getVariable('guestInformations',null,true,false)->value)&&$_smarty_tpl->getVariable('guestInformations')->value['address1']){?><?php echo $_smarty_tpl->getVariable('guestInformations')->value['address1'];?>
<?php }?>" />
					<sup>*</sup>
				</p>
				<?php }elseif($_smarty_tpl->tpl_vars['field_name']->value=="address2"){?>
				<p class="text">
					<label for="address2"><?php echo smartyTranslate(array('s'=>'Address (Line 2)'),$_smarty_tpl);?>
</label>
					<input type="text" class="text" name="address2" id="address2" value="" />
				</p>
				<?php }elseif($_smarty_tpl->tpl_vars['field_name']->value=="postcode"){?>
				<p class="required postcode text">
					<label for="postcode"><?php echo smartyTranslate(array('s'=>'Zip / Postal code'),$_smarty_tpl);?>
</label>
					<input type="text" class="text" name="postcode" id="postcode" value="<?php if (isset($_smarty_tpl->getVariable('guestInformations',null,true,false)->value)&&$_smarty_tpl->getVariable('guestInformations')->value['postcode']){?><?php echo $_smarty_tpl->getVariable('guestInformations')->value['postcode'];?>
<?php }?>" onkeyup="$('#postcode').val($('#postcode').val().toUpperCase());" />
					<sup>*</sup>
				</p>
				<?php }elseif($_smarty_tpl->tpl_vars['field_name']->value=="city"){?>
				<p class="required text">
					<label for="city"><?php echo smartyTranslate(array('s'=>'City'),$_smarty_tpl);?>
</label>
					<input type="text" class="text" name="city" id="city" value="<?php if (isset($_smarty_tpl->getVariable('guestInformations',null,true,false)->value)&&$_smarty_tpl->getVariable('guestInformations')->value['city']){?><?php echo $_smarty_tpl->getVariable('guestInformations')->value['city'];?>
<?php }?>" />
					<sup>*</sup>
				</p>
				<?php }elseif($_smarty_tpl->tpl_vars['field_name']->value=="country"||$_smarty_tpl->tpl_vars['field_name']->value=="Country:name"){?>
				<p class="required select">
					<label for="id_country"><?php echo smartyTranslate(array('s'=>'Country'),$_smarty_tpl);?>
</label>
					<select name="id_country" id="id_country">
						<option value="">-</option>
						<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('countries')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id_country'];?>
" <?php if ((isset($_smarty_tpl->getVariable('guestInformations',null,true,false)->value)&&$_smarty_tpl->getVariable('guestInformations')->value['id_country']==$_smarty_tpl->tpl_vars['v']->value['id_country'])||(!isset($_smarty_tpl->getVariable('guestInformations',null,true,false)->value)&&$_smarty_tpl->getVariable('sl_country')->value==$_smarty_tpl->tpl_vars['v']->value['id_country'])){?> selected="selected"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['v']->value['name'],'htmlall','UTF-8');?>
</option>
						<?php }} ?>
					</select>
					<sup>*</sup>
				</p>
				<?php }elseif($_smarty_tpl->tpl_vars['field_name']->value=="vat_number"){?>
				<div id="vat_number_block" style="display:none;">
					<p class="text">
						<label for="vat_number"><?php echo smartyTranslate(array('s'=>'VAT number'),$_smarty_tpl);?>
</label>
						<input type="text" class="text" name="vat_number" id="vat_number" value="<?php if (isset($_smarty_tpl->getVariable('guestInformations',null,true,false)->value)&&$_smarty_tpl->getVariable('guestInformations')->value['vat_number']){?><?php echo $_smarty_tpl->getVariable('guestInformations')->value['vat_number'];?>
<?php }?>" />
					</p>
				</div>
				<?php }elseif($_smarty_tpl->tpl_vars['field_name']->value=="state"||$_smarty_tpl->tpl_vars['field_name']->value=='State:name'){?>
				<?php $_smarty_tpl->tpl_vars['stateExist'] = new Smarty_variable(true, null, null);?>
				<p class="required id_state select" style="display:none;">
					<label for="id_state"><?php echo smartyTranslate(array('s'=>'State'),$_smarty_tpl);?>
</label>
					<select name="id_state" id="id_state">
						<option value="">-</option>
					</select>
					<sup>*</sup>
				</p>
				<?php }?>
				<?php }} ?>
				<p class="required text dni">
					<label for="dni"><?php echo smartyTranslate(array('s'=>'Identification number'),$_smarty_tpl);?>
</label>
					<input type="text" class="text" name="dni" id="dni" value="<?php if (isset($_smarty_tpl->getVariable('guestInformations',null,true,false)->value)&&$_smarty_tpl->getVariable('guestInformations')->value['dni']){?><?php echo $_smarty_tpl->getVariable('guestInformations')->value['dni'];?>
<?php }?>" />
					<span class="form_info"><?php echo smartyTranslate(array('s'=>'DNI / NIF / NIE'),$_smarty_tpl);?>
</span>
					<sup>*</sup>
				</p>
				<?php if (!$_smarty_tpl->getVariable('stateExist')->value){?>
				<p class="required id_state select">
					<label for="id_state"><?php echo smartyTranslate(array('s'=>'State'),$_smarty_tpl);?>
</label>
					<select name="id_state" id="id_state">
						<option value="">-</option>
					</select>
					<sup>*</sup>
				</p>
				<?php }?>
				<p class="textarea is_customer_param">
					<label for="other"><?php echo smartyTranslate(array('s'=>'Additional information'),$_smarty_tpl);?>
</label>
					<textarea name="other" id="other" cols="26" rows="3"></textarea>
				</p>
				<p class="text">
					<label for="phone"><?php echo smartyTranslate(array('s'=>'Home phone'),$_smarty_tpl);?>
</label>
					<input type="text" class="text" name="phone" id="phone" value="<?php if (isset($_smarty_tpl->getVariable('guestInformations',null,true,false)->value)&&$_smarty_tpl->getVariable('guestInformations')->value['phone']){?><?php echo $_smarty_tpl->getVariable('guestInformations')->value['phone'];?>
<?php }?>" /> <sup>*</sup>
				</p>
				<p class="text is_customer_param">
					<label for="phone_mobile"><?php echo smartyTranslate(array('s'=>'Mobile phone'),$_smarty_tpl);?>
</label>
					<input type="text" class="text" name="phone_mobile" id="phone_mobile" value="" />
				</p>
				<input type="hidden" name="alias" id="alias" value="<?php echo smartyTranslate(array('s'=>'My address'),$_smarty_tpl);?>
" />

				<p class="checkbox is_customer_param">
					<input type="checkbox" name="invoice_address" id="invoice_address" />
					<label for="invoice_address"><b><?php echo smartyTranslate(array('s'=>'Please use another address for invoice'),$_smarty_tpl);?>
</b></label>
				</p>
			
				<div id="opc_invoice_address" class="is_customer_param">
					<?php $_smarty_tpl->tpl_vars['stateExist'] = new Smarty_variable(false, null, null);?>
					<h3><?php echo smartyTranslate(array('s'=>'Invoice address'),$_smarty_tpl);?>
</h3>
					<?php  $_smarty_tpl->tpl_vars['field_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('inv_all_fields')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['field_name']->key => $_smarty_tpl->tpl_vars['field_name']->value){
?>
					<?php if ($_smarty_tpl->tpl_vars['field_name']->value=="company"){?>
					<p class="text is_customer_param">
						<label for="company_invoice"><?php echo smartyTranslate(array('s'=>'Company'),$_smarty_tpl);?>
</label>
						<input type="text" class="text" id="company_invoice" name="company_invoice" value="" />
					</p>
					<?php }elseif($_smarty_tpl->tpl_vars['field_name']->value=="vat_number"){?>
					<div id="vat_number_block_invoice" class="is_customer_param" style="display: none;">
						<p class="text">
							<label for="vat_number_invoice"><?php echo smartyTranslate(array('s'=>'VAT number'),$_smarty_tpl);?>
</label>
							<input type="text" class="text" id="vat_number_invoice" name="vat_number_invoice" value="" />
						</p>
					</div>
					<p class="required text dni_invoice">
						<label for="dni"><?php echo smartyTranslate(array('s'=>'Identification number'),$_smarty_tpl);?>
</label>
						<input type="text" class="text" name="dni_invoice" id="dni_invoice" value="<?php if (isset($_smarty_tpl->getVariable('guestInformations',null,true,false)->value)&&$_smarty_tpl->getVariable('guestInformations')->value['dni']){?><?php echo $_smarty_tpl->getVariable('guestInformations')->value['dni'];?>
<?php }?>" />
						<span class="form_info"><?php echo smartyTranslate(array('s'=>'DNI / NIF / NIE'),$_smarty_tpl);?>
</span>
						<sup>*</sup>
					</p>
					<?php }elseif($_smarty_tpl->tpl_vars['field_name']->value=="firstname"){?>
					<p class="required text">
						<label for="firstname_invoice"><?php echo smartyTranslate(array('s'=>'First name'),$_smarty_tpl);?>
</label>
						<input type="text" class="text" id="firstname_invoice" name="firstname_invoice" value="" />
						<sup>*</sup>
					</p>
					<?php }elseif($_smarty_tpl->tpl_vars['field_name']->value=="lastname"){?>
					<p class="required text">
						<label for="lastname_invoice"><?php echo smartyTranslate(array('s'=>'Last name'),$_smarty_tpl);?>
</label>
						<input type="text" class="text" id="lastname_invoice" name="lastname_invoice" value="" />
						<sup>*</sup>
					</p>
					<?php }elseif($_smarty_tpl->tpl_vars['field_name']->value=="address1"){?>
					<p class="required text">
						<label for="address1_invoice"><?php echo smartyTranslate(array('s'=>'Address'),$_smarty_tpl);?>
</label>
						<input type="text" class="text" name="address1_invoice" id="address1_invoice" value="" />
						<sup>*</sup>
					</p>
					<?php }elseif($_smarty_tpl->tpl_vars['field_name']->value=="address2"){?>
					<p class="text is_customer_param">
						<label for="address2_invoice"><?php echo smartyTranslate(array('s'=>'Address (Line 2)'),$_smarty_tpl);?>
</label>
						<input type="text" class="text" name="address2_invoice" id="address2_invoice" value="" />
					</p>
					<?php }elseif($_smarty_tpl->tpl_vars['field_name']->value=="postcode"){?>
					<p class="required postcode text">
						<label for="postcode_invoice"><?php echo smartyTranslate(array('s'=>'Zip / Postal Code'),$_smarty_tpl);?>
</label>
						<input type="text" class="text" name="postcode_invoice" id="postcode_invoice" value="" onkeyup="$('#postcode').val($('#postcode').val().toUpperCase());" />
						<sup>*</sup>
					</p>
					<?php }elseif($_smarty_tpl->tpl_vars['field_name']->value=="city"){?>
					<p class="required text">
						<label for="city_invoice"><?php echo smartyTranslate(array('s'=>'City'),$_smarty_tpl);?>
</label>
						<input type="text" class="text" name="city_invoice" id="city_invoice" value="" />
						<sup>*</sup>
					</p>
					<?php }elseif($_smarty_tpl->tpl_vars['field_name']->value=="country"||$_smarty_tpl->tpl_vars['field_name']->value=="Country:name"){?>
					<p class="required select">
						<label for="id_country_invoice"><?php echo smartyTranslate(array('s'=>'Country'),$_smarty_tpl);?>
</label>
						<select name="id_country_invoice" id="id_country_invoice">
							<option value="">-</option>
							<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('countries')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id_country'];?>
" <?php if (($_smarty_tpl->getVariable('sl_country')->value==$_smarty_tpl->tpl_vars['v']->value['id_country'])){?> selected="selected"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['v']->value['name'],'htmlall','UTF-8');?>
</option>
							<?php }} ?>
						</select>
						<sup>*</sup>
					</p>
					<?php }elseif($_smarty_tpl->tpl_vars['field_name']->value=="state"||$_smarty_tpl->tpl_vars['field_name']->value=='State:name'){?>
					<?php $_smarty_tpl->tpl_vars['stateExist'] = new Smarty_variable(true, null, null);?>
					<p class="required id_state_invoice select" style="display:none;">
						<label for="id_state_invoice"><?php echo smartyTranslate(array('s'=>'State'),$_smarty_tpl);?>
</label>
						<select name="id_state_invoice" id="id_state_invoice">
							<option value="">-</option>
						</select>
						<sup>*</sup>
					</p>
					<?php }?>
					<?php }} ?>
					<?php if (!$_smarty_tpl->getVariable('stateExist')->value){?>
					<p class="required id_state_invoice select" style="display:none;">
						<label for="id_state_invoice"><?php echo smartyTranslate(array('s'=>'State'),$_smarty_tpl);?>
</label>
						<select name="id_state_invoice" id="id_state_invoice">
							<option value="">-</option>
						</select>
						<sup>*</sup>
					</p>
					<?php }?>
					<p class="textarea is_customer_param">
						<label for="other_invoice"><?php echo smartyTranslate(array('s'=>'Additional information'),$_smarty_tpl);?>
</label>
						<textarea name="other_invoice" id="other_invoice" cols="26" rows="3"></textarea>
					</p>
					<p class="text">
						<label for="phone_invoice"><?php echo smartyTranslate(array('s'=>'Home phone'),$_smarty_tpl);?>
</label>
						<input type="text" class="text" name="phone_invoice" id="phone_invoice" value="" /> <sup>*</sup>
					</p>
					<p class="text is_customer_param">
						<label for="phone_mobile_invoice"><?php echo smartyTranslate(array('s'=>'Mobile phone'),$_smarty_tpl);?>
</label>
						<input type="text" class="text" name="phone_mobile_invoice" id="phone_mobile_invoice" value="" />
					</p>
					<input type="hidden" name="alias_invoice" id="alias_invoice" value="<?php echo smartyTranslate(array('s'=>'My Invoice address'),$_smarty_tpl);?>
" />
				</div>
				<?php echo $_smarty_tpl->getVariable('HOOK_CREATE_ACCOUNT_FORM')->value;?>

				<p style="float: right;">
					<input type="submit" class="exclusive button" name="submitAccount" id="submitAccount" value="<?php echo smartyTranslate(array('s'=>'Save'),$_smarty_tpl);?>
" />
				</p>
				<p style="float: right;color: green;display: none;" id="opc_account_saved">
					<?php echo smartyTranslate(array('s'=>'Account information saved successfully'),$_smarty_tpl);?>

				</p>
				<p style="clear: both;">
					<sup>*</sup><?php echo smartyTranslate(array('s'=>'Required field'),$_smarty_tpl);?>

				</p>
				<!-- END Account -->
			</div>
		</fieldset>
	</form>
	<div class="clear"></div>
</div>

