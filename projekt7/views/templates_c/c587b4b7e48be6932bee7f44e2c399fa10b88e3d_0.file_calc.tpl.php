<?php
/* Smarty version 5.5.0, created on 2025-05-05 23:00:42
  from 'file:calc.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.0',
  'unifunc' => 'content_681926fa59da84_91087970',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c587b4b7e48be6932bee7f44e2c399fa10b88e3d' => 
    array (
      0 => 'calc.tpl',
      1 => 1746476838,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
))) {
function content_681926fa59da84_91087970 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\projekt7\\views\\templates';
$_smarty_tpl->renderSubTemplate("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<div class="container">
  <div class="card">
    <h2>Kalkulator kredytowy</h2>

    <?php if ($_smarty_tpl->getValue('error')) {?>
      <div class="error"><?php echo $_smarty_tpl->getValue('error');?>
</div>
    <?php }?>

    <form action="index.php?action=calc" method="post">
      <div class="form-group">
        <label for="kwota">Kwota kredytu:</label>
        <input
          type="number"
          step="0.01"
          id="kwota"
          name="kwota"
          value="<?php echo (($tmp = $_smarty_tpl->getValue('form')->kwota ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
"
          required
        >
      </div>

      <div class="form-group">
        <label for="okres">Okres spłaty (miesiące):</label>
        <input
          type="number"
          id="okres"
          name="okres"
          value="<?php echo (($tmp = $_smarty_tpl->getValue('form')->okres ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
"
          required
        >
      </div>

      <div class="form-group">
        <label for="procent">Oprocentowanie (%):</label>
        <input
          type="number"
          step="0.01"
          id="procent"
          name="procent"
          value="<?php echo (($tmp = $_smarty_tpl->getValue('form')->procent ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
"
          required
        >
      </div>

      <div class="form-group" style="text-align:center; margin-top:20px;">
        <button type="submit" class="btn">Oblicz</button>
      </div>
    </form>

    <?php if ((true && (true && null !== ($_smarty_tpl->getValue('result')->result ?? null)))) {?>
      <div class="result" style="margin-top:20px;">
        <h3>Wynik:</h3>
        <p><strong><?php echo $_smarty_tpl->getValue('result')->result;?>
 zł miesięcznie</strong></p>
      </div>
    <?php }?>

    <div class="form-group" style="text-align:center; margin-top:20px;">
      <a href="index.php?action=home" class="btn">Powrót do strony głównej</a>
    </div>
  </div>
</div>

<?php $_smarty_tpl->renderSubTemplate("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
