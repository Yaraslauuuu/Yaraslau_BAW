<?php
/* Smarty version 5.4.2, created on 2025-04-15 03:30:33
  from 'file:CalcView.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_67fdb6b9cfad06_98707894',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bdc932419bd119c4e7de18a426dbc6d73d8be432' => 
    array (
      0 => 'CalcView.tpl',
      1 => 1744680626,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
))) {
function content_67fdb6b9cfad06_98707894 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\projekt5\\views\\templates';
$_smarty_tpl->renderSubTemplate("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
<div id="calc-form" class="container">
  <div class="card">
    <h2>Kalkulator Kredytowy</h2>
    <form method="post" action="?action=calc">
      <div class="form-group">
        <label for="kwota">Kwota kredytu:</label>
        <input type="text" name="kwota" id="kwota" value="<?php echo (($tmp = $_POST['kwota'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
      </div>
      <div class="form-group">
        <label for="okres">Okres (w miesiącach):</label>
        <input type="text" name="okres" id="okres" value="<?php echo (($tmp = $_POST['okres'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
      </div>
      <div class="form-group">
        <label for="procent">Procent:</label>
        <input type="text" name="procent" id="procent" value="<?php echo (($tmp = $_POST['procent'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
      </div>
      <input type="submit" value="Oblicz">
    </form>
    <?php if ((null !== ($_smarty_tpl->getValue('result')->result ?? null)) && $_smarty_tpl->getValue('result')->result !== null) {?>
      <div class="result">
        <h3>Wynik</h3>
        <p>Miesięczna rata: <strong><?php echo $_smarty_tpl->getValue('result')->result;?>
</strong></p>
      </div>
    <?php }?>
  </div>
</div>
<?php if ($_GET['scroll'] == 1) {?>

<?php echo '<script'; ?>
>
  window.onload = function(){
    document.getElementById('calc-form').scrollIntoView({behavior: 'smooth'});
  };
<?php echo '</script'; ?>
>

<?php }?>

<?php }
}
