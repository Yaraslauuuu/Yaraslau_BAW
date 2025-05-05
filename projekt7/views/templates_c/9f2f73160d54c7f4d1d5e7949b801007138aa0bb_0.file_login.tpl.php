<?php
/* Smarty version 5.5.0, created on 2025-05-05 23:00:47
  from 'file:login.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.0',
  'unifunc' => 'content_681926ffe38f58_84791875',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f2f73160d54c7f4d1d5e7949b801007138aa0bb' => 
    array (
      0 => 'login.tpl',
      1 => 1746477404,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
))) {
function content_681926ffe38f58_84791875 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\projekt7\\views\\templates';
$_smarty_tpl->renderSubTemplate("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<div class="container">
  <div class="card">
    <h1>Logowanie</h1>

    <?php if ($_smarty_tpl->getValue('error')) {?>
      <div class="error"><?php echo $_smarty_tpl->getValue('error');?>
</div>
    <?php }?>

    <form method="post" action="index.php?action=login">
      <div class="form-group">
        <label for="login">Login:</label>
        <input type="text" id="login" name="login" required>
      </div>

      <div class="form-group">
        <label for="password">Hasło:</label>
        <input type="password" id="password" name="password" required>
      </div>

      <div class="form-group" style="text-align:center; margin-top:20px;">
        <button type="submit" class="btn">Zaloguj się</button>
      </div>
    </form>

    <div class="form-group" style="text-align:center; margin-top:10px;">
      <a href="index.php?action=home" class="btn">Powrót do strony głównej</a>
    </div>
  </div>
</div>

<?php $_smarty_tpl->renderSubTemplate("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
