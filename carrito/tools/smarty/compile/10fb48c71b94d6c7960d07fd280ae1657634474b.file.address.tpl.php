<?php /* Smarty version Smarty-3.0.7, created on 2011-12-01 04:00:03
         compiled from "/home/libhb/public_html/carrito/themes/prestashop/address.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13516815884ed725f3e40414-78776028%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10fb48c71b94d6c7960d07fd280ae1657634474b' => 
    array (
      0 => '/home/libhb/public_html/carrito/themes/prestashop/address.tpl',
      1 => 1322709273,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13516815884ed725f3e40414-78776028',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_counter')) include '/home/libhb/public_html/carrito/tools/smarty/plugins/function.counter.php';
if (!is_callable('smarty_modifier_escape')) include '/home/libhb/public_html/carrito/tools/smarty/plugins/modifier.escape.php';
?>
<?php if (!isset($_smarty_tpl->getVariable('ordered_adr_fields',null,true,false)->value)){?>
	<?php if (isset($_smarty_tpl->getVariable('address',null,true,false)->value)){?>
		<?php echo smarty_function_counter(array('start'=>0,'skip'=>1,'assign'=>'address_key_number'),$_smarty_tpl);?>

		<?php  $_smarty_tpl->tpl_vars['address_value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['address_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('address')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['address_value']->key => $_smarty_tpl->tpl_vars['address_value']->value){
 $_smarty_tpl->tpl_vars['address_key']->value = $_smarty_tpl->tpl_vars['address_value']->key;
?>
			<?php if (!isset($_smarty_tpl->tpl_vars['ordered_adr_fields']) || !is_array($_smarty_tpl->tpl_vars['ordered_adr_fields']->value)) $_smarty_tpl->createLocalArrayVariable('ordered_adr_fields', null, null);
$_smarty_tpl->tpl_vars['ordered_adr_fields']->value[$_smarty_tpl->getVariable('address_key_number')->value] = $_smarty_tpl->tpl_vars['address_key']->value;?>
			<?php echo smarty_function_counter(array(),$_smarty_tpl);?>

		<?php }} ?>
	<?php }else{ ?>
		<?php if (!isset($_smarty_tpl->tpl_vars['ordered_adr_fields']) || !is_array($_smarty_tpl->tpl_vars['ordered_adr_fields']->value)) $_smarty_tpl->createLocalArrayVariable('ordered_adr_fields', null, null);
$_smarty_tpl->tpl_vars['ordered_adr_fields']->value[0] = 'company';?>
		<?php if (!isset($_smarty_tpl->tpl_vars['ordered_adr_fields']) || !is_array($_smarty_tpl->tpl_vars['ordered_adr_fields']->value)) $_smarty_tpl->createLocalArrayVariable('ordered_adr_fields', null, null);
$_smarty_tpl->tpl_vars['ordered_adr_fields']->value[1] = 'firstname';?>
		<?php if (!isset($_smarty_tpl->tpl_vars['ordered_adr_fields']) || !is_array($_smarty_tpl->tpl_vars['ordered_adr_fields']->value)) $_smarty_tpl->createLocalArrayVariable('ordered_adr_fields', null, null);
$_smarty_tpl->tpl_vars['ordered_adr_fields']->value[2] = 'lastname';?>
		<?php if (!isset($_smarty_tpl->tpl_vars['ordered_adr_fields']) || !is_array($_smarty_tpl->tpl_vars['ordered_adr_fields']->value)) $_smarty_tpl->createLocalArrayVariable('ordered_adr_fields', null, null);
$_smarty_tpl->tpl_vars['ordered_adr_fields']->value[3] = 'address1';?>
		<?php if (!isset($_smarty_tpl->tpl_vars['ordered_adr_fields']) || !is_array($_smarty_tpl->tpl_vars['ordered_adr_fields']->value)) $_smarty_tpl->createLocalArrayVariable('ordered_adr_fields', null, null);
$_smarty_tpl->tpl_vars['ordered_adr_fields']->value[4] = 'address2';?>
		<?php if (!isset($_smarty_tpl->tpl_vars['ordered_adr_fields']) || !is_array($_smarty_tpl->tpl_vars['ordered_adr_fields']->value)) $_smarty_tpl->createLocalArrayVariable('ordered_adr_fields', null, null);
$_smarty_tpl->tpl_vars['ordered_adr_fields']->value[5] = 'postcode';?>
		<?php if (!isset($_smarty_tpl->tpl_vars['ordered_adr_fields']) || !is_array($_smarty_tpl->tpl_vars['ordered_adr_fields']->value)) $_smarty_tpl->createLocalArrayVariable('ordered_adr_fields', null, null);
$_smarty_tpl->tpl_vars['ordered_adr_fields']->value[6] = 'city';?>
		<?php if (!isset($_smarty_tpl->tpl_vars['ordered_adr_fields']) || !is_array($_smarty_tpl->tpl_vars['ordered_adr_fields']->value)) $_smarty_tpl->createLocalArrayVariable('ordered_adr_fields', null, null);
$_smarty_tpl->tpl_vars['ordered_adr_fields']->value[7] = 'country';?>
		<?php if (!isset($_smarty_tpl->tpl_vars['ordered_adr_fields']) || !is_array($_smarty_tpl->tpl_vars['ordered_adr_fields']->value)) $_smarty_tpl->createLocalArrayVariable('ordered_adr_fields', null, null);
$_smarty_tpl->tpl_vars['ordered_adr_fields']->value[8] = 'state';?>
	<?php }?>
<?php }?>

<script type="text/javascript">
// <![CDATA[
idSelectedCountry = <?php if (isset($_POST['id_state'])){?><?php echo intval($_POST['id_state']);?>
<?php }else{ ?><?php if (isset($_smarty_tpl->getVariable('address',null,true,false)->value->id_state)){?><?php echo intval($_smarty_tpl->getVariable('address')->value->id_state);?>
<?php }else{ ?>false<?php }?><?php }?>;
countries = new Array();
countriesNeedIDNumber = new Array();
countriesNeedZipCode = new Array();
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
$(function(){
	$('.id_state option[value=<?php if (isset($_POST['id_state'])){?><?php echo $_POST['id_state'];?>
<?php }else{ ?><?php if (isset($_smarty_tpl->getVariable('address',null,true,false)->value->id_state)){?><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('address')->value->id_state,'htmlall','UTF-8');?>
<?php }?><?php }?>]').attr('selected', 'selected');
});
<?php if ($_smarty_tpl->getVariable('vat_management')->value){?>

	$(document).ready(function() {
		$('#company').blur(function(){
			vat_number();
		});
		vat_number();
		function vat_number()
		{
			if ($('#company').val() != '')
				$('#vat_number').show();
			else
				$('#vat_number').hide();
		}
	});

<?php }?>
//]]>
</script>

<?php ob_start(); ?><?php echo smartyTranslate(array('s'=>'Your addresses'),$_smarty_tpl);?>
<?php  Smarty::$_smarty_vars['capture']['path']=ob_get_clean();?>
<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('tpl_dir')->value)."./breadcrumb.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<h1><?php echo smartyTranslate(array('s'=>'Your addresses'),$_smarty_tpl);?>
</h1>

<h3>
<?php if (isset($_smarty_tpl->getVariable('id_address',null,true,false)->value)&&(isset($_POST['alias'])||isset($_smarty_tpl->getVariable('address',null,true,false)->value->alias))){?>
	<?php echo smartyTranslate(array('s'=>'Modify address'),$_smarty_tpl);?>

	<?php if (isset($_POST['alias'])){?>
		"<?php echo $_POST['alias'];?>
"
	<?php }else{ ?>
		<?php if (isset($_smarty_tpl->getVariable('address',null,true,false)->value->alias)){?>"<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('address')->value->alias,'htmlall','UTF-8');?>
"<?php }?>
	<?php }?>
<?php }else{ ?>
	<?php echo smartyTranslate(array('s'=>'To add a new address, please fill out the form below.'),$_smarty_tpl);?>

<?php }?>
</h3>

<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('tpl_dir')->value)."./errors.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<form action="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('address.php',true);?>
" method="post" class="std">
	<fieldset>
		<h3><?php if (isset($_smarty_tpl->getVariable('id_address',null,true,false)->value)){?><?php echo smartyTranslate(array('s'=>'Your address'),$_smarty_tpl);?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'New address'),$_smarty_tpl);?>
<?php }?></h3>
		<p class="required text dni">
			<label for="dni"><?php echo smartyTranslate(array('s'=>'Identification number'),$_smarty_tpl);?>
</label>
			<input type="text" class="text" name="dni" id="dni" value="<?php if (isset($_POST['dni'])){?><?php echo $_POST['dni'];?>
<?php }else{ ?><?php if (isset($_smarty_tpl->getVariable('address',null,true,false)->value->dni)){?><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('address')->value->dni,'htmlall','UTF-8');?>
<?php }?><?php }?>" />
			<span class="form_info"><?php echo smartyTranslate(array('s'=>'DNI / NIF / NIE'),$_smarty_tpl);?>
</span>
			<sup>*</sup>
		</p>
	<?php if ($_smarty_tpl->getVariable('vat_display')->value==2){?>
		<div id="vat_area">
	<?php }elseif($_smarty_tpl->getVariable('vat_display')->value==1){?>
		<div id="vat_area" style="display: none;">
	<?php }else{ ?>
		<div style="display: none;">
	<?php }?>
		<div id="vat_number">
			<p class="text">
				<label for="vat_number"><?php echo smartyTranslate(array('s'=>'VAT number'),$_smarty_tpl);?>
</label>
				<input type="text" class="text" name="vat_number" value="<?php if (isset($_POST['vat_number'])){?><?php echo $_POST['vat_number'];?>
<?php }else{ ?><?php if (isset($_smarty_tpl->getVariable('address',null,true,false)->value->vat_number)){?><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('address')->value->vat_number,'htmlall','UTF-8');?>
<?php }?><?php }?>" />
			</p>
		</div>
		</div>
		<?php $_smarty_tpl->tpl_vars["stateExist"] = new Smarty_variable("false", null, null);?>
		<?php  $_smarty_tpl->tpl_vars['field_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('ordered_adr_fields')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['field_name']->key => $_smarty_tpl->tpl_vars['field_name']->value){
?>
		<?php if ($_smarty_tpl->tpl_vars['field_name']->value=='company'){?>
		<p class="text">
			<label for="company"><?php echo smartyTranslate(array('s'=>'Company'),$_smarty_tpl);?>
</label>
			<input type="text" id="company" name="company" value="<?php if (isset($_POST['company'])){?><?php echo $_POST['company'];?>
<?php }else{ ?><?php if (isset($_smarty_tpl->getVariable('address',null,true,false)->value->company)){?><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('address')->value->company,'htmlall','UTF-8');?>
<?php }?><?php }?>" />
		</p>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['field_name']->value=='firstname'){?>
		<p class="required text">
			<label for="firstname"><?php echo smartyTranslate(array('s'=>'First name'),$_smarty_tpl);?>
</label>
			<input type="text" name="firstname" id="firstname" value="<?php if (isset($_POST['firstname'])){?><?php echo $_POST['firstname'];?>
<?php }else{ ?><?php if (isset($_smarty_tpl->getVariable('address',null,true,false)->value->firstname)){?><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('address')->value->firstname,'htmlall','UTF-8');?>
<?php }?><?php }?>" />
			<sup>*</sup>
		</p>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['field_name']->value=='lastname'){?>
		<p class="required text">
			<label for="lastname"><?php echo smartyTranslate(array('s'=>'Last name'),$_smarty_tpl);?>
</label>
			<input type="text" id="lastname" name="lastname" value="<?php if (isset($_POST['lastname'])){?><?php echo $_POST['lastname'];?>
<?php }else{ ?><?php if (isset($_smarty_tpl->getVariable('address',null,true,false)->value->lastname)){?><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('address')->value->lastname,'htmlall','UTF-8');?>
<?php }?><?php }?>" />
			<sup>*</sup>
		</p>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['field_name']->value=='address1'){?>
		<p class="required text">
			<label for="address1"><?php echo smartyTranslate(array('s'=>'Address'),$_smarty_tpl);?>
</label>
			<input type="text" id="address1" name="address1" value="<?php if (isset($_POST['address1'])){?><?php echo $_POST['address1'];?>
<?php }else{ ?><?php if (isset($_smarty_tpl->getVariable('address',null,true,false)->value->address1)){?><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('address')->value->address1,'htmlall','UTF-8');?>
<?php }?><?php }?>" />
			<sup>*</sup>
		</p>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['field_name']->value=='address2'){?>
		<p class="required text">
			<label for="address2"><?php echo smartyTranslate(array('s'=>'Address (Line 2)'),$_smarty_tpl);?>
</label>
			<input type="text" id="address2" name="address2" value="<?php if (isset($_POST['address2'])){?><?php echo $_POST['address2'];?>
<?php }else{ ?><?php if (isset($_smarty_tpl->getVariable('address',null,true,false)->value->address2)){?><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('address')->value->address2,'htmlall','UTF-8');?>
<?php }?><?php }?>" />
		</p>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['field_name']->value=='postcode'){?>
		<p class="required postcode text">
			<label for="postcode"><?php echo smartyTranslate(array('s'=>'Zip / Postal Code'),$_smarty_tpl);?>
</label>
			<input type="text" id="postcode" name="postcode" value="<?php if (isset($_POST['postcode'])){?><?php echo $_POST['postcode'];?>
<?php }else{ ?><?php if (isset($_smarty_tpl->getVariable('address',null,true,false)->value->postcode)){?><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('address')->value->postcode,'htmlall','UTF-8');?>
<?php }?><?php }?>" onkeyup="$('#postcode').val($('#postcode').val().toUpperCase());" />
			<sup>*</sup>
		</p>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['field_name']->value=='city'){?>
		<p class="required text">
			<label for="city"><?php echo smartyTranslate(array('s'=>'City'),$_smarty_tpl);?>
</label>
			<input type="text" name="city" id="city" value="<?php if (isset($_POST['city'])){?><?php echo $_POST['city'];?>
<?php }else{ ?><?php if (isset($_smarty_tpl->getVariable('address',null,true,false)->value->city)){?><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('address')->value->city,'htmlall','UTF-8');?>
<?php }?><?php }?>" maxlength="64" />
			<sup>*</sup>
		</p>
		<!-- If the merchant has not updated his layout address, country has to be verified - however it's deprecated -->
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['field_name']->value=='Country:name'||$_smarty_tpl->tpl_vars['field_name']->value=='country'){?>
		<p class="required select">
			<label for="id_country"><?php echo smartyTranslate(array('s'=>'Country'),$_smarty_tpl);?>
</label>
			<select id="id_country" name="id_country"><?php echo $_smarty_tpl->getVariable('countries_list')->value;?>
</select>
			<sup>*</sup>
		</p>
		<?php if (isset($_smarty_tpl->getVariable('vatnumber_ajax_call',null,true,false)->value)&&$_smarty_tpl->getVariable('vatnumber_ajax_call')->value){?>
		<script type="text/javascript">
		var ajaxurl = '<?php echo $_smarty_tpl->getVariable('ajaxurl')->value;?>
';
		
				$(document).ready(function(){
					$('#id_country').change(function() {
						$.ajax({
							type: "GET",
							url: ajaxurl+"vatnumber/ajax.php?id_country="+$('#id_country').val(),
							success: function(isApplicable){
								if(isApplicable == "1")
								{
									$('#vat_area').show();
									$('#vat_number').show();
								}
								else
								{
									$('#vat_area').hide();
								}
							}
						});
					});

				});
		
		</script>
		<?php }?>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['field_name']->value=='State:name'||$_smarty_tpl->tpl_vars['field_name']->value=='state'){?>
		<?php $_smarty_tpl->tpl_vars["stateExist"] = new Smarty_variable("true", null, null);?>
		<p class="required id_state select">
			<label for="id_state"><?php echo smartyTranslate(array('s'=>'State'),$_smarty_tpl);?>
</label>
			<select name="id_state" id="id_state">
				<option value="">-</option>
			</select>
			<sup>*</sup>
		</p>
		<?php }?>
		<?php }} ?>
		<p><input type="hidden" name="token" value="<?php echo $_smarty_tpl->getVariable('token')->value;?>
" /></p>
		<?php if ($_smarty_tpl->getVariable('stateExist')->value=="false"){?>
		<p class="required id_state select">
			<label for="id_state"><?php echo smartyTranslate(array('s'=>'State'),$_smarty_tpl);?>
</label>
			<select name="id_state" id="id_state">
				<option value="">-</option>
			</select>
			<sup>*</sup>
		</p>
		<?php }?>
		<p class="textarea">
			<label for="other"><?php echo smartyTranslate(array('s'=>'Additional information'),$_smarty_tpl);?>
</label>
			<textarea id="other" name="other" cols="26" rows="3"><?php if (isset($_POST['other'])){?><?php echo $_POST['other'];?>
<?php }else{ ?><?php if (isset($_smarty_tpl->getVariable('address',null,true,false)->value->other)){?><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('address')->value->other,'htmlall','UTF-8');?>
<?php }?><?php }?></textarea>
		</p>
		<p style="margin-left:50px;"><?php echo smartyTranslate(array('s'=>'You must register at least one phone number'),$_smarty_tpl);?>
 <sup style="color:red;">*</sup></p>
		<p class="text">
			<label for="phone"><?php echo smartyTranslate(array('s'=>'Home phone'),$_smarty_tpl);?>
</label>
			<input type="text" id="phone" name="phone" value="<?php if (isset($_POST['phone'])){?><?php echo $_POST['phone'];?>
<?php }else{ ?><?php if (isset($_smarty_tpl->getVariable('address',null,true,false)->value->phone)){?><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('address')->value->phone,'htmlall','UTF-8');?>
<?php }?><?php }?>" />
		</p>
		<p class="text">
			<label for="phone_mobile"><?php echo smartyTranslate(array('s'=>'Mobile phone'),$_smarty_tpl);?>
</label>
			<input type="text" id="phone_mobile" name="phone_mobile" value="<?php if (isset($_POST['phone_mobile'])){?><?php echo $_POST['phone_mobile'];?>
<?php }else{ ?><?php if (isset($_smarty_tpl->getVariable('address',null,true,false)->value->phone_mobile)){?><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('address')->value->phone_mobile,'htmlall','UTF-8');?>
<?php }?><?php }?>" />
		</p>
		<p class="required text" id="address_alias">
			<label for="alias"><?php echo smartyTranslate(array('s'=>'Assign an address title for future reference'),$_smarty_tpl);?>
</label>
			<input type="text" id="alias" name="alias" value="<?php if (isset($_POST['alias'])){?><?php echo $_POST['alias'];?>
<?php }else{ ?><?php if (isset($_smarty_tpl->getVariable('address',null,true,false)->value->alias)){?><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('address')->value->alias,'htmlall','UTF-8');?>
<?php }?><?php if (isset($_smarty_tpl->getVariable('select_address',null,true,false)->value)){?><?php }else{ ?><?php echo smartyTranslate(array('s'=>'My address'),$_smarty_tpl);?>
<?php }?><?php }?>" />
			<sup>*</sup>
		</p>
	</fieldset>
	<p class="submit2 address_navigation" style="padding:0">
		<?php if (isset($_smarty_tpl->getVariable('id_address',null,true,false)->value)){?><input type="hidden" name="id_address" value="<?php echo intval($_smarty_tpl->getVariable('id_address')->value);?>
" /><?php }?>
		<?php if (isset($_smarty_tpl->getVariable('back',null,true,false)->value)){?><input type="hidden" name="back" value="<?php echo $_smarty_tpl->getVariable('back')->value;?>
" /><?php }?>
		<?php if (isset($_smarty_tpl->getVariable('mod',null,true,false)->value)){?><input type="hidden" name="mod" value="<?php echo $_smarty_tpl->getVariable('mod')->value;?>
" /><?php }?>
		<?php if (isset($_smarty_tpl->getVariable('select_address',null,true,false)->value)){?><input type="hidden" name="select_address" value="<?php echo intval($_smarty_tpl->getVariable('select_address')->value);?>
" /><?php }?>
		<a class="button" href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('addresses.php',true);?>
" title="<?php echo smartyTranslate(array('s'=>'Previous'),$_smarty_tpl);?>
">&laquo; <?php echo smartyTranslate(array('s'=>'Previous'),$_smarty_tpl);?>
</a>
		<input type="submit" name="submitAddress" id="submitAddress" value="<?php echo smartyTranslate(array('s'=>'Save'),$_smarty_tpl);?>
" class="button" />
		<br class="clear"/>
	</p>
	<p class="required"><sup>*</sup><?php echo smartyTranslate(array('s'=>'Required field'),$_smarty_tpl);?>
</p>
</form>

