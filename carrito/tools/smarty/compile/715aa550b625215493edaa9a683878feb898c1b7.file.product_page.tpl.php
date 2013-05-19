<?php /* Smarty version Smarty-3.0.7, created on 2011-12-02 19:53:45
         compiled from "/home/libhb/public_html/carrito/modules/sendtoafriend/product_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15190286804ed956f90e8866-32811138%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '715aa550b625215493edaa9a683878feb898c1b7' => 
    array (
      0 => '/home/libhb/public_html/carrito/modules/sendtoafriend/product_page.tpl',
      1 => 1322709273,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15190286804ed956f90e8866-32811138',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<li><a href="<?php echo $_smarty_tpl->getVariable('this_path')->value;?>
sendtoafriend-form.php?id_product=<?php echo intval($_GET['id_product']);?>
"><?php echo smartyTranslate(array('s'=>'Send to a friend','mod'=>'sendtoafriend'),$_smarty_tpl);?>
</a></li>
