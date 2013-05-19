<?php /* Smarty version Smarty-3.0.7, created on 2011-12-01 00:42:04
         compiled from "/home/libhb/public_html/carrito/themes/prestashop/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11379612774ed6f78c06b4e3-58813697%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4cc8c8367573487bbeac29136c43b878cea3676b' => 
    array (
      0 => '/home/libhb/public_html/carrito/themes/prestashop/footer.tpl',
      1 => 1322709273,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11379612774ed6f78c06b4e3-58813697',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


		<?php if (!$_smarty_tpl->getVariable('content_only')->value){?>
				</div>

<!-- Right -->
				<div id="right_column" class="column">
					<?php echo $_smarty_tpl->getVariable('HOOK_RIGHT_COLUMN')->value;?>

				</div>
			</div>

<!-- Footer -->
			<div id="footer"><?php echo $_smarty_tpl->getVariable('HOOK_FOOTER')->value;?>
</div>
		</div>
	<?php }?>
	</body>
</html>
