<?php
/* Smarty version 5.5.0, created on 2025-05-05 23:00:43
  from 'file:home.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.0',
  'unifunc' => 'content_681926fb8640e3_72578179',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2e3ce652dc85446a7b62f8d3579b9d678a1a1ca' => 
    array (
      0 => 'home.tpl',
      1 => 1746476766,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
))) {
function content_681926fb8640e3_72578179 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\projekt7\\views\\templates';
$_smarty_tpl->renderSubTemplate("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<div class="container">
    <div class="card">
        <h1>Welcome to Home!</h1>

        <div class="form-group" style="margin-top: 20px; text-align: center;">
            <a href="index.php?action=login" class="btn">Zaloguj się</a>
        </div>
    </div>
</div>

<?php $_smarty_tpl->renderSubTemplate("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
