<?php
/* Smarty version 3.1.39, created on 2025-04-29 02:02:33
  from 'C:\xampp\htdocs\projekt6\views\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_681017190a8c33_56065131',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1733dc406de7ff927428d130a1b81796a1305503' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt6\\views\\templates\\home.tpl',
      1 => 1745884942,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_681017190a8c33_56065131 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
    <div class="card">
        <h1>Welcome to Home!</h1>

        <div class="form-group" style="margin-top: 20px; text-align: center;">
            <a href="index.php?action=login" class="btn">Zaloguj się</a>
        </div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
