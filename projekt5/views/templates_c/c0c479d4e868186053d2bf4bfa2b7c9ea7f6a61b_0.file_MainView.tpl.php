<?php
/* Smarty version 5.4.2, created on 2025-04-15 04:33:18
  from 'file:MainView.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_67fdc56eaae188_77574751',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0c479d4e868186053d2bf4bfa2b7c9ea7f6a61b' => 
    array (
      0 => 'MainView.tpl',
      1 => 1744684396,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
))) {
function content_67fdc56eaae188_77574751 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\projekt5\\views\\templates';
$_smarty_tpl->renderSubTemplate("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
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
  
  <?php if ((null !== ($_smarty_tpl->getValue('calc') ?? null)) && $_smarty_tpl->getValue('calc') == 1) {?>
    <div id="calc-section" class="card">
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
<?php $_smarty_tpl->renderSubTemplate("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
