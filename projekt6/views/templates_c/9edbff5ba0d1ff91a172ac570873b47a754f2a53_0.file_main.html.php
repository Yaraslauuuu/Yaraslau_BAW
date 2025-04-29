<?php
/* Smarty version 5.4.2, created on 2025-04-09 23:57:55
  from 'file:main.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_67f6ed6339b418_74605095',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9edbff5ba0d1ff91a172ac570873b47a754f2a53' => 
    array (
      0 => 'main.html',
      1 => 1744235512,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67f6ed6339b418_74605095 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\Games\\xamp\\htdocs\\projektt4\\templates';
?><!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <title>Kalkulator Kredytowy</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/css/main.css" />
</head>
<body class="landing is-preload">

<div id="page-wrapper">

    <!-- Header -->
    <header id="header" class="alt">
        <h1><?php echo $_smarty_tpl->getValue('site_name');?>
</h1>
        <nav id="nav">
            <ul>
                <li><a href="<?php echo $_smarty_tpl->getValue('app_url');?>
/home">Home</a></li>
                <li>
                    <a href="#" class="icon solid fa-angle-down">Layouts</a>
                    <ul>
                        <li><a href="<?php echo $_smarty_tpl->getValue('app_url');?>
/generic">Generic</a></li>
                        <li><a href="<?php echo $_smarty_tpl->getValue('app_url');?>
/contact">Contact</a></li>
                        <li><a href="<?php echo $_smarty_tpl->getValue('app_url');?>
/elements">Elements</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo $_smarty_tpl->getValue('app_url');?>
/signup" class="button">Sign Up</a></li>
            </ul>
        </nav>
    </header>

    <!-- Banner -->
    <section id="banner">
        <h2>Witamy w Kalkulatorze Kredytowym</h2>
        <section id="registration">
            <h2>Rejestracja</h2>
            <form id="registrationform" method="POST" action="<?php echo $_smarty_tpl->getValue('app_url');?>
/register">
                <input type="text" name="name" id="name" placeholder="Imię" required />
                <input type="password" name="password" id="password" placeholder="Hasło" required />
                <button type="submit" class="button primary">Zaloguj się</button>
            </form>
        </section>
        <div class="scroll-to-calc" onclick="scrollToCalculator()">Przejdź do kalkulatora</div>
    </section>

    <!-- Main -->
    <section id="main" class="container">
        <section class="box special">
            <header class="major">
                <h2>Kalkulator Kredytowy</h2>
            </header>

            <form action="<?php echo $_smarty_tpl->getValue('app_url');?>
/app/calc.php" method="post">
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
    </section>

    <!-- Footer -->
    <footer id="footer">
        <ul class="copyright">
            <li>&copy; Wszystkie prawa zastrzeżone. <?php echo $_smarty_tpl->getValue('footer_text');?>
</li>
        </ul>
    </footer>

</div>

<!-- Scripts -->
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

<?php echo '<script'; ?>
>
    function scrollToCalculator() {
        document.getElementById("main").scrollIntoView({ behavior: 'smooth' });
    }
<?php echo '</script'; ?>
>

</body>
</html>
<?php }
}
