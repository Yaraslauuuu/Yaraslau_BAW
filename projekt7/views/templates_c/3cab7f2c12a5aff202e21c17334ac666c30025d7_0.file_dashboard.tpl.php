<?php
/* Smarty version 5.5.0, created on 2025-05-05 23:00:52
  from 'file:dashboard.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.0',
  'unifunc' => 'content_6819270456e525_89527687',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3cab7f2c12a5aff202e21c17334ac666c30025d7' => 
    array (
      0 => 'dashboard.tpl',
      1 => 1746478672,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
))) {
function content_6819270456e525_89527687 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\projekt7\\views\\templates';
$_smarty_tpl->renderSubTemplate("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
<div class="container"><div class="card">
  <h1>Panel Administratora</h1>
  <h3>Historia logowań:</h3>
  <ul>
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('history'), 'entry');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('entry')->value) {
$foreach0DoElse = false;
?>
      <li><?php echo $_smarty_tpl->getValue('entry')['time'];?>
 — <?php echo $_smarty_tpl->getValue('entry')['user'];?>
</li>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
  </ul>
</div></div>
<?php $_smarty_tpl->renderSubTemplate("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
