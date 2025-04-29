<?php
/* Smarty version 3.1.39, created on 2025-04-29 01:26:54
  from 'C:\xampp\htdocs\projekt6\views\templates\MainView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_68100ebe122d94_48231725',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b8b6a0dbf305d749fa65d6bdccfae81ad77d20c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt6\\views\\templates\\MainView.tpl',
      1 => 1744684396,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_68100ebe122d94_48231725 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
  <div class="card">
    <h2>Strona główna</h2>
    <p>Witamy na stronie!</p>
    <div class="links">
      <a class="btn" href="?action=default&calc=1">Otwórz kalkulator kredytowy</a>
      <a class="btn" href="?action=login">Logowanie / Rejestracja</a>
    </div>
  </div>
  
  <?php if ((isset($_smarty_tpl->tpl_vars['calc']->value)) && $_smarty_tpl->tpl_vars['calc']->value == 1) {?>
    <div id="calc-section" class="card">
      <h2>Kalkulator Kredytowy</h2>
      <form method="post" action="?action=calc">
        <div class="form-group">
          <label for="kwota">Kwota kredytu:</label>
          <input type="text" name="kwota" id="kwota" value="<?php echo (($tmp = @$_POST['kwota'])===null||$tmp==='' ? '' : $tmp);?>
">
        </div>
        <div class="form-group">
          <label for="okres">Okres (w miesiącach):</label>
          <input type="text" name="okres" id="okres" value="<?php echo (($tmp = @$_POST['okres'])===null||$tmp==='' ? '' : $tmp);?>
">
        </div>
        <div class="form-group">
          <label for="procent">Procent:</label>
          <input type="text" name="procent" id="procent" value="<?php echo (($tmp = @$_POST['procent'])===null||$tmp==='' ? '' : $tmp);?>
">
        </div>
        <input type="submit" value="Oblicz">
      </form>
      <?php if ((isset($_smarty_tpl->tpl_vars['result']->value->result)) && $_smarty_tpl->tpl_vars['result']->value->result !== null) {?>
        <div class="result">
          <h3>Wynik</h3>
          <p>Miesięczna rata: <strong><?php echo $_smarty_tpl->tpl_vars['result']->value->result;?>
</strong></p>
        </div>
      <?php }?>
    </div>
    
    <?php echo '<script'; ?>
>
      window.onload = function(){
        var calcSection = document.getElementById('calc-section');
        if(calcSection){
          calcSection.scrollIntoView({behavior: 'smooth'});
        }
      };
    <?php echo '</script'; ?>
>
    
  <?php }?>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
