<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-10 12:30:14
         compiled from "/home/vagrant/Code/www/fw/src/resources/templates/error/404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:86445148554883cd6bfeae4-99186860%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad1ec40894339cd3cbc1cda33e90b64b9d34b9e2' => 
    array (
      0 => '/home/vagrant/Code/www/fw/src/resources/templates/error/404.tpl',
      1 => 1418214536,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '86445148554883cd6bfeae4-99186860',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54883cd6dfe8d1_76255573',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54883cd6dfe8d1_76255573')) {function content_54883cd6dfe8d1_76255573($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


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
