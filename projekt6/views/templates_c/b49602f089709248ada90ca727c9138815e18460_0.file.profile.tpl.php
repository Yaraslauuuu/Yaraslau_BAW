<?php
/* Smarty version 3.1.39, created on 2025-04-29 01:36:35
  from 'C:\xampp\htdocs\projekt6\views\templates\profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_681011037033f8_13242622',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b49602f089709248ada90ca727c9138815e18460' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt6\\views\\templates\\profile.tpl',
      1 => 1745881320,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_681011037033f8_13242622 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1>Twój Profil</h1>

<p>Witaj na stronie swojego profilu!</p>

<div class="form-group">
    <a href="index.php?action=home">Powrót do strony głównej</a>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
