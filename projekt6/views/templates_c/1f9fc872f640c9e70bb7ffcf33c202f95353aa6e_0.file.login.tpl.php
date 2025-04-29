<?php
/* Smarty version 3.1.39, created on 2025-04-29 01:58:24
  from 'C:\xampp\htdocs\projekt6\views\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_68101620997550_57177276',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f9fc872f640c9e70bb7ffcf33c202f95353aa6e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt6\\views\\templates\\login.tpl',
      1 => 1745884702,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_68101620997550_57177276 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
    <div class="card">
        <h1>Logowanie</h1>

        <?php if ($_smarty_tpl->tpl_vars['error']->value != '') {?>
            <div class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
        <?php }?>

        <form method="post" action="index.php?action=login">
            <div class="form-group">
                <label for="login">Username:</label>
                <input type="text" id="login" name="login" required>
            </div>

            <div class="form-group">
                <label for="pass">Password:</label>
                <input type="password" id="pass" name="pass" required>
            </div>

            <div class="form-group">
                <input type="submit" value="Zaloguj się" class="btn">
            </div>
        </form>

        <div class="form-group" style="margin-top: 20px;">
            <a href="index.php?action=home" class="btn">Powrót do strony głównej</a>
        </div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
