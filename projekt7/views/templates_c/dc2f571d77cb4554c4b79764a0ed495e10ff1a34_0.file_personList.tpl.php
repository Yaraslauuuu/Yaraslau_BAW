<?php
/* Smarty version 5.5.0, created on 2025-05-05 23:19:48
  from 'file:personList.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.0',
  'unifunc' => 'content_68192b74bd1998_89970630',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc2f571d77cb4554c4b79764a0ed495e10ff1a34' => 
    array (
      0 => 'personList.tpl',
      1 => 1746479985,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
))) {
function content_68192b74bd1998_89970630 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\projekt7\\views\\templates';
$_smarty_tpl->renderSubTemplate("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<div class="container">
  <div class="card">
    <h1>Lista osób</h1>

    <form method="get" action="index.php" class="form-inline" style="margin-bottom:20px;">
      <input type="hidden" name="action" value="personList">
      <label for="filter">Imię lub nazwisko:</label>
      <input
        type="text"
        id="filter"
        name="filter"
        value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('filter'), ENT_QUOTES, 'UTF-8', true);?>
"
        placeholder="wpisz część imienia lub nazwiska"
        class="form-control"
        style="width:300px; margin:0 10px;"
      >
      <button type="submit" class="btn">Filtruj</button>
      <a href="index.php?action=personEdit" class="btn">+ Nowa osoba</a>
    </form>

    <table class="table">
      <thead>
        <tr><th>Imię</th><th>Nazwisko</th><th>Data ur.</th><th>Opcje</th></tr>
      </thead>
      <tbody>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('people'), 'p');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('p')->value) {
$foreach0DoElse = false;
?>
          <tr>
            <td><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('p')['imie'], ENT_QUOTES, 'UTF-8', true);?>
</td>
            <td><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('p')['nazwisko'], ENT_QUOTES, 'UTF-8', true);?>
</td>
            <td><?php echo $_smarty_tpl->getValue('p')['data_ur'];?>
</td>
            <td>
              <a href="index.php?action=personEdit&id=<?php echo $_smarty_tpl->getValue('p')['id'];?>
" class="btn">Edytuj</a>
              <a href="index.php?action=personDelete&id=<?php echo $_smarty_tpl->getValue('p')['id'];?>
" onclick="return confirm('Usunąć?');" class="btn">Usuń</a>
            </td>
          </tr>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        <?php if (!$_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('people'))) {?>
          <tr><td colspan="4">Brak rekordów</td></tr>
        <?php }?>
      </tbody>
    </table>
  </div>
</div>

<?php $_smarty_tpl->renderSubTemplate("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
