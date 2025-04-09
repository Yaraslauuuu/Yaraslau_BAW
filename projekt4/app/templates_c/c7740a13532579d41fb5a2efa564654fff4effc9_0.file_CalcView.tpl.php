<?php
/* Smarty version 5.4.2, created on 2025-04-10 00:24:45
  from 'file:D:\Games\xamp\htdocs\projekt4/app/CalcView.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_67f6f3ad19c967_62027398',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7740a13532579d41fb5a2efa564654fff4effc9' => 
    array (
      0 => 'D:\\Games\\xamp\\htdocs\\projekt4/app/CalcView.tpl',
      1 => 1744237001,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67f6f3ad19c967_62027398 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Games\\xamp\\htdocs\\projekt4\\app';
?><!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <title><?php echo $_smarty_tpl->getValue('page_title');?>
</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/css/main.css" />
    <style>
        /* Дополнительные стили */
        body { font-family: Arial, sans-serif; }
        .container { max-width: 800px; margin: 0 auto; padding: 20px; }
        .error { color: red; }
        .info { color: green; }
        .form-field { margin-bottom: 15px; }
        .form-field label { display: block; margin-bottom: 5px; }
        .form-field input { width: 100%; padding: 8px; }
        .result { margin-top: 20px; padding: 15px; background: #f0f0f0; }
    </style>
</head>
<body class="landing is-preload">
<div id="page-wrapper" class="container">

    <!-- Header -->
    <header id="header" class="alt">
        <h1><?php echo $_smarty_tpl->getValue('site_name');?>
</h1>
        <nav id="nav">
            <ul>
                <li><a href="<?php echo $_smarty_tpl->getValue('app_url');?>
/index.php">Home</a></li>
                <li><a href="<?php echo $_smarty_tpl->getValue('app_url');?>
/signup">Sign Up</a></li>
            </ul>
        </nav>
    </header>

    <!-- Banner -->
    <section id="banner">
        <h2>Witamy w Kalkulatorze Kredytowym</h2>
    </section>

    <!-- Calculator Section -->
    <section id="calculator">
        <h2>Kalkulator Kredytowy</h2>

        <?php if ($_smarty_tpl->getValue('msgs')->isError()) {?>
            <div class="error">
                <h3>Błędy:</h3>
                <ul>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('msgs')->getErrors(), 'err');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('err')->value) {
$foreach0DoElse = false;
?>
                    <li><?php echo $_smarty_tpl->getValue('err');?>
</li>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </ul>
            </div>
        <?php }?>

        <?php if ($_smarty_tpl->getValue('msgs')->getInfos()) {?>
            <div class="info">
                <h3>Informacje:</h3>
                <ul>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('msgs')->getInfos(), 'info');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('info')->value) {
$foreach1DoElse = false;
?>
                    <li><?php echo $_smarty_tpl->getValue('info');?>
</li>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </ul>
            </div>
        <?php }?>

        <form action="<?php echo $_smarty_tpl->getValue('app_url');?>
/app/calc.php" method="post">
            <div class="form-field">
                <label for="id_kwota">Kwota:</label>
                <input type="text" name="kwota" id="id_kwota" placeholder="Podaj kwotę" value="<?php echo (($tmp = $_smarty_tpl->getValue('form')->amount ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" required />
            </div>
            <div class="form-field">
                <label for="id_okres">Okres (lata):</label>
                <input type="text" name="okres" id="id_okres" placeholder="Podaj okres w latach" value="<?php echo (($tmp = $_smarty_tpl->getValue('form')->years ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" required />
            </div>
            <div class="form-field">
                <label for="id_procent">Procent:</label>
                <input type="text" name="procent" id="id_procent" placeholder="Podaj oprocentowanie" value="<?php echo (($tmp = $_smarty_tpl->getValue('form')->percent ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" required />
            </div>
            <div class="form-field">
                <input type="submit" value="Oblicz" class="button primary" />
            </div>
        </form>

        <?php if ((null !== ($_smarty_tpl->getValue('res')->monthlyPayment ?? null))) {?>
        <div class="result">
            <h3>Wynik obliczeń:</h3>
            <p><strong>Rata miesięczna:</strong> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('res')->monthlyPayment,2,","," ");?>
 zł</p>
            <p><strong>Łączna kwota do spłaty:</strong> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('res')->totalPayment,2,","," ");?>
 zł</p>
        </div>
        <?php }?>
    </section>

    <!-- Footer -->
    <footer id="footer">
        <p>&copy; <?php echo $_smarty_tpl->getValue('footer_text');?>
</p>
    </footer>
</div>

<!-- Подключение скриптов -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/js/jquery.dropotron.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/js/browser.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/js/util.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/js/main.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
