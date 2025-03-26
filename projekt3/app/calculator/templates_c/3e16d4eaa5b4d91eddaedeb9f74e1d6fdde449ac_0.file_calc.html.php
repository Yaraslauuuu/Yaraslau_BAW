<?php
/* Smarty version 5.4.2, created on 2025-03-25 23:23:10
  from 'file:C:\xampp\htdocs\projekt3/app/calculator/calc.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_67e32cced474e7_65287506',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e16d4eaa5b4d91eddaedeb9f74e1d6fdde449ac' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt3/app/calculator/calc.html',
      1 => 1742941386,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67e32cced474e7_65287506 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\projekt3\\app\\calculator';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_154689737967e32cced31777_37182661', 'main');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "../../templates/main.html", $_smarty_current_dir);
}
/* {block 'main'} */
class Block_154689737967e32cced31777_37182661 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\projekt3\\app\\calculator';
?>

<section>
	<form action="<?php echo $_smarty_tpl->getValue('app_url');?>
/app/calculator/calculator.php" method="post">
		<div class="row gtr-50 gtr-uniform">
			<div class="col-12">
				<input type="text" name="kwota" id="id_kwota" placeholder="Kwota" required />
			</div>
			<div class="col-12">
				<input type="text" name="okres" id="id_okres" placeholder="Okres" required />
			</div>
			<div class="col-12">
				<input type="text" name="procent" id="id_procent" placeholder="Procent" required />
			</div>
			<div class="col-12">
				<input type="submit" value="Oblicz" class="button primary" />
			</div>
		</div>
	</form>
</section>

<div class="l-box-lrg pure-u-1 pure-u-med-3-5">
	<?php if ((null !== ($_smarty_tpl->getValue('messages') ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('messages')) > 0) {?>
	<h4>Wystąpiły błędy: </h4>
	<ol class="err">
		<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('messages'), 'msg');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('msg')->value) {
$foreach0DoElse = false;
?>
		<li><?php echo $_smarty_tpl->getValue('msg');?>
</li>
		<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
	</ol>
	<?php }?>

	<?php if ((null !== ($_smarty_tpl->getValue('infos') ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('infos')) > 0) {?>
	<h4>Informacje: </h4>
	<ol class="inf">
		<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('infos'), 'msg');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('msg')->value) {
$foreach1DoElse = false;
?>
		<li><?php echo $_smarty_tpl->getValue('msg');?>
</li>
		<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
	</ol>
	<?php }?>

	<?php if ((null !== ($_smarty_tpl->getValue('result') ?? null)) && $_smarty_tpl->getValue('result') != '') {?>
	<h4>Wynik</h4>
	<p class="res">
		<?php echo $_smarty_tpl->getValue('result');?>

	</p>
	<?php } else { ?>
	<p>Brak wyniku</p>
	<?php }?>

</div>
<?php
}
}
/* {/block 'main'} */
}
