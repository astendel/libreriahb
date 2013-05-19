<?php /* Smarty version Smarty-3.0.7, created on 2011-12-01 07:11:09
         compiled from "/home/libhb/public_html/carrito/themes/theme001/modules/blockpermanentlinks/blockpermanentlinks-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11108859064ed752bd56b662-10558832%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eac757171a8313cab5327bd5f28556f3a03cb771' => 
    array (
      0 => '/home/libhb/public_html/carrito/themes/theme001/modules/blockpermanentlinks/blockpermanentlinks-header.tpl',
      1 => 1322733162,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11108859064ed752bd56b662-10558832',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- Block permanent links module HEADER -->
<div id="permalinks">
	<div class="permalinksLeftBg"></div>
<ul id="header_links">
	<li id="header_link_home"><a href="<?php echo $_smarty_tpl->getVariable('base_dir')->value;?>
" title="home"><span><?php echo smartyTranslate(array('s'=>'home'),$_smarty_tpl);?>
</span></a></li>
	<li id="header_link_contact"><a href="<?php echo $_smarty_tpl->getVariable('base_dir_ssl')->value;?>
contact-form.php" title="<?php echo smartyTranslate(array('s'=>'contact','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
"><span><?php echo smartyTranslate(array('s'=>'contact','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
</span></a></li>
	<li id="header_link_sitemap"><a href="<?php echo $_smarty_tpl->getVariable('base_dir')->value;?>
sitemap.php" title="<?php echo smartyTranslate(array('s'=>'sitemap','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
"><span><?php echo smartyTranslate(array('s'=>'sitemap','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
</span></a></li>
	<li id="header_link_bookmark">
		<script type="text/javascript">writeBookmarkLink('<?php echo $_smarty_tpl->getVariable('come_from')->value;?>
', '<?php echo addslashes(addslashes($_smarty_tpl->getVariable('shop_name')->value));?>
', '<span><?php echo smartyTranslate(array('s'=>'bookmark','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
</span>');</script>
	</li>
</ul>
</div>
<!-- /Block permanent links module HEADER -->
