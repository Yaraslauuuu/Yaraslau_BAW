<?php
/* Smarty version 5.4.2, created on 2025-04-15 03:25:27
  from 'file:LoginView.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_67fdb587e65c02_01248041',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b54b6e9cbaf2478b78338372e6a958de1825c5d8' => 
    array (
      0 => 'LoginView.tpl',
      1 => 1744680128,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
))) {
function content_67fdb587e65c02_01248041 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\projekt5\\views\\templates';
$_smarty_tpl->renderSubTemplate("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
<div class="container">
  <div class="card">
    <h2>Rejestracja / Logowanie</h2>
    <form method="post" action="?action=login">
      <div class="form-group">
        <label for="login">Login:</label>
        <input type="text" name="login" id="login" value="<?php echo (($tmp = $_POST['login'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
      </div>
      <div class="form-group">
        <label for="password">Hasło:</label>
        <input type="password" name="password" id="password">
      </div>
      <input type="submit" value="Zaloguj">
    </form>
    <?php if ((null !== ($_smarty_tpl->getValue('error') ?? null))) {?>
      <p class="error"><?php echo $_smarty_tpl->getValue('error');?>
</p>
    <?php }?>
  </div>
</div>
<?php $_smarty_tpl->renderSubTemplate("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
