<?php
/* Smarty version 5.5.0, created on 2025-05-05 23:14:42
  from 'file:profile.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.0',
  'unifunc' => 'content_68192a42cbe847_39750115',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a139917eb63f35573b29ca79b5df7d4847ff18b' => 
    array (
      0 => 'profile.tpl',
      1 => 1746477651,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
))) {
function content_68192a42cbe847_39750115 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\projekt7\\views\\templates';
$_smarty_tpl->renderSubTemplate("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<div class="container">
  <div class="card">
    <h2>Twój Profil</h2>
    <p><strong>Użytkownik:</strong> <?php echo $_smarty_tpl->getValue('profile')['username'];?>
</p>
    <p><strong>Zalogowany od:</strong> <?php echo $_smarty_tpl->getValue('profile')['since'];?>
</p>

    <div class="form-group" style="text-align:center; margin-top:20px;">
      <a href="index.php?action=home" class="btn">Powrót do strony głównej</a>
    </div>
  </div>
</div>

<?php $_smarty_tpl->renderSubTemplate("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
