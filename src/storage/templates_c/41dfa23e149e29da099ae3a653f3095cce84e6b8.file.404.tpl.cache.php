<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-07 04:43:43
         compiled from "C:\wamp\www\fw\src\resources\Views\error\404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:217005483daffb4e756-84895749%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41dfa23e149e29da099ae3a653f3095cce84e6b8' => 
    array (
      0 => 'C:\\wamp\\www\\fw\\src\\resources\\Views\\error\\404.tpl',
      1 => 1417170378,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '217005483daffb4e756-84895749',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5483daffc08462_88759754',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5483daffc08462_88759754')) {function content_5483daffc08462_88759754($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<h1>404</h1>

<?php echo $_smarty_tpl->tpl_vars['errors']->value;?>


<hr />

<h3>The page you were looking for could not be found</h3>
<p>This could be the result of the page being removed, the name being changed or the page being temporarily unavailable</p>
<h3>Troubleshooting</h3>

<ul>
  <li>If you spelled the URL manually, double check the spelling</li>
  <li>Go to our website's home page, and navigate to the content in question</li>
</ul>

<?php echo $_smarty_tpl->getSubTemplate ('../layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
