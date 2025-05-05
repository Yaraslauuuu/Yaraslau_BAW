<?php
/* Smarty version 5.5.0, created on 2025-05-05 23:24:53
  from 'file:register.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.0',
  'unifunc' => 'content_68192ca580f1b5_90708381',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf57eba643f54906c348a0ebd6e8928678313b69' => 
    array (
      0 => 'register.tpl',
      1 => 1746480290,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
))) {
function content_68192ca580f1b5_90708381 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\projekt7\\views\\templates';
$_smarty_tpl->renderSubTemplate("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<div class="container">
  <div class="card">
    <h1>Rejestracja</h1>

    <?php if ($_smarty_tpl->getValue('error')) {?>
      <div class="error"><?php echo $_smarty_tpl->getValue('error');?>
</div>
    <?php }?>

    <form method="post" action="index.php?action=register">
      <div class="form-group">
        <label for="login">Username:</label>
        <input
          id="login"
          name="login"
          type="text"
          value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('oldLogin'), ENT_QUOTES, 'UTF-8', true);?>
"
          class="form-control"
        >
      </div>

      <div class="form-group">
        <label for="password">Password:</label>
        <input
          id="password"
          name="password"
          type="password"
          class="form-control"
        >
      </div>

      <button type="submit" class="btn">Zarejestruj</button>
    </form>
  </div>
</div>

<?php $_smarty_tpl->renderSubTemplate("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
