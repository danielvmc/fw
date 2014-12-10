<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-07 05:00:07
         compiled from "C:\wamp\www\fw\src\resources\Views\tasks\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23445483dcf3b36274-75391917%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f94a42a4ed634536d3342e629f5bfa982e2a729' => 
    array (
      0 => 'C:\\wamp\\www\\fw\\src\\resources\\Views\\tasks\\index.tpl',
      1 => 1417928405,
      2 => 'file',
    ),
    'babf12e92b3a8ed5adc0fd8e9379a50674268e42' => 
    array (
      0 => 'C:\\wamp\\www\\fw\\src\\resources\\Views\\layout\\base.tpl',
      1 => 1417879368,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23445483dcf3b36274-75391917',
  'function' => 
  array (
  ),
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5483dcf3b37b93_27214188',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5483dcf3b37b93_27214188')) {function content_5483dcf3b37b93_27214188($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>



<h1>All Tasks</h1>
<?php  $_smarty_tpl->tpl_vars['task'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['task']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tasks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['task']->key => $_smarty_tpl->tpl_vars['task']->value) {
$_smarty_tpl->tpl_vars['task']->_loop = true;
?>
	<?php echo $_smarty_tpl->tpl_vars['task']->value;?>
<br>
<?php } ?>


<?php echo $_smarty_tpl->getSubTemplate ('layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
