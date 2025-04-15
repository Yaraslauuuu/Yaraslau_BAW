<?php
/* Smarty version 5.4.2, created on 2025-04-13 21:42:59
  from 'file:main.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_67fc13c39b1c01_04757693',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa64dc2873c7cb835ae8aca2e7cab35b629f171d' => 
    array (
      0 => 'main.html',
      1 => 1744239108,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67fc13c39b1c01_04757693 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\projekt4\\templates';
?><!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator Kredytowy</title>


    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/css/main.css" />

    <style>
        /* Общие стили для страницы */
        body {
            margin: 0;
            padding: 0;
            background-color: #f0f0f0; /* Светло-серый фон */
            font-family: Arial, sans-serif;
        }
        /* Обёртка, чтобы придерживать структуру */
        #page-wrapper {
            width: 100%;
        }

        /* Шапка */
        #header {
            background: #fff; /* Белый фон для шапки */
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        #header h1 {
            margin: 0;
        }

        /* Навигация */
        #nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            gap: 10px;
        }
        #nav ul li {
            display: inline-block;
        }

        /* Блок регистрации (центрируем по горизонтали, добавляем отступы) */
        #registration {
            margin-top: 80px;
            margin-bottom: 80px;
            display: flex;
            justify-content: center; /* центрирование горизонтально */
        }
        #registrationform {
            max-width: 400px;
            width: 100%;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        /* Скрываем калькулятор по умолчанию */
        #calculator {
            display: none;
            margin-top: 50px;
            margin-bottom: 80px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
            padding: 20px;
        }
        /* Пример стилей для внутри формы */
        .form-field {
            margin-bottom: 15px;
        }
        .form-field label {
            display: block;
            margin-bottom: 5px;
        }
        .form-field input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        /* Подвал */
        #footer {
            background: none; /* Убираем тёмную полосу внизу */
            padding: 20px;
            text-align: center;
        }

    </style>
</head>
<body>
<div id="page-wrapper">


    <header id="header">
        <nav id="nav">
            <ul>

                <li><a href="#" onclick="backToHome(); return false;">Home</a></li>
                <li><a href="<?php echo $_smarty_tpl->getValue('app_url');?>
/signup" class="button">Sign Up</a></li>
            </ul>
        </nav>

        <h1><?php echo (($tmp = $_smarty_tpl->getValue('site_name') ?? null)===null||$tmp==='' ? 'Kalkulator Kredytowy' ?? null : $tmp);?>
</h1>
    </header>


    <section id="registration">
        <form id="registrationform" onsubmit="event.preventDefault(); showCalculator();">
            <h2>Rejestracja</h2>
            <input type="text" name="name" id="name" placeholder="Imię" required />
            <input type="password" name="password" id="password" placeholder="Hasło" required />
            <button type="submit" class="button primary">Zaloguj się</button>
        </form>
    </section>


    <section id="calculator">
        <h2>Kalkulator Kredytowy</h2>
        <form action="<?php echo $_smarty_tpl->getValue('app_url');?>
/app/calc.php" method="post">
            <div class="form-field">
                <label for="id_kwota">Kwota:</label>
                <input type="text" name="kwota" id="id_kwota" required />
            </div>
            <div class="form-field">
                <label for="id_okres">Okres (lata):</label>
                <input type="text" name="okres" id="id_okres" required />
            </div>
            <div class="form-field">
                <label for="id_procent">Procent:</label>
                <input type="text" name="procent" id="id_procent" required />
            </div>
            <div class="form-field">
                <input type="submit" value="Oblicz" class="button primary" />
            </div>
        </form>
    </section>


    <footer id="footer">

    </footer>
</div>


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
    function showCalculator() {
        var calcBlock = document.getElementById('calculator');
        calcBlock.style.display = 'block';
        calcBlock.scrollIntoView({ behavior: 'smooth' });
    }
    function backToHome() {
        document.getElementById('registration').scrollIntoView({ behavior: 'smooth' });
        document.getElementById('calculator').style.display = 'none';
    }
<?php echo '</script'; ?>
>


</body>
</html>
<?php }
}
