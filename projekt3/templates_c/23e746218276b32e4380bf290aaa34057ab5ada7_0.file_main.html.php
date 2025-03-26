<?php
/* Smarty version 5.4.2, created on 2025-03-25 23:23:40
  from 'file:C:\xampp\htdocs\projekt3\app\calculator\../../templates/main.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_67e32cec835794_21630032',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23e746218276b32e4380bf290aaa34057ab5ada7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt3\\app\\calculator\\../../templates/main.html',
      1 => 1742939021,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67e32cec835794_21630032 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\projekt3\\templates';
?><!DOCTYPE HTML>
<html>
<head>
    <title>Kalkulator</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="/projekt3/assets/css/main.css"/>
    <style>
        /* Устанавливаем черный цвет для текста по умолчанию */
        body {
            color: black; /* Устанавливаем черный цвет для текста */
        }

        /* Стили для формы регистрации */
        #registrationform {
            max-width: 400px; /* Ограничиваем ширину формы */
            margin: 0 auto; /* Центрируем форму */
            padding: 20px;
            background-color: #f9f9f9; /* Светлый фон для формы */
            border-radius: 10px; /* Скругленные углы формы */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Легкая тень для формы */
        }

        #registrationform input {
            width: 100%; /* Устанавливаем ширину полей на 100% от родительского элемента */
            padding: 12px; /* Добавляем отступы внутри полей */
            margin-bottom: 15px; /* Отступ снизу между полями */
            border: 1px solid #ccc; /* Легкая граница вокруг полей */
            border-radius: 5px; /* Скругленные углы */
            font-size: 16px; /* Увеличиваем размер шрифта для лучшего восприятия */
            color: black; /* Цвет текста внутри поля */
            background-color: #fff; /* Белый фон для полей */
        }

        #registrationform input:focus {
            border-color: #007bff; /* Подсветка границы при фокусе */
            outline: none; /* Убираем обводку при фокусе */
        }

        /* Кнопка регистрации */
        .button.primary {
            width: 100%; /* Ширина кнопки по всей ширине формы */
            padding: 15px;
            background-color: #007bff; /* Синий фон для кнопки */
            color: white; /* Белый цвет текста на кнопке */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px; /* Увеличиваем шрифт кнопки */
            text-align: center; /* Центрируем текст внутри кнопки */
        }

        .button.primary:hover {
            background-color: #0056b3; /* Цвет кнопки при наведении */
        }

        /* Стили для кнопки прокрутки */
        .scroll-to-calc {
            margin-top: 20px;
            cursor: pointer;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border-radius: 5px;
            text-align: center;
            display: inline-block;
        }

        /* Стили для калькулятора */
        #main {
            margin-top: 30px;
        }

        /* Стили для заголовка "Rejestracja" */
        #registration h2 {
            font-size: 32px; /* Увеличиваем размер шрифта заголовка */
            color: #007bff; /* Синий цвет для заголовка */
            text-align: center; /* Центрируем текст */
            margin-bottom: 20px; /* Отступ снизу */
            font-weight: bold; /* Жирный шрифт */
        }
    </style>
</head>
<body class="landing is-preload">
<div id="page-wrapper">

    <!-- Header -->
    <header id="header" class="alt">
        <h1>Alpha</h1>
        <nav id="nav">
            <ul>
                <li>Home</li>
                <li>
                    <a href="#" class="icon solid fa-angle-down">Layouts</a>
                    <ul>
                        <li><a href="generic.html">Generic</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="elements.html">Elements</a></li>
                    </ul>
                </li>
                <li><a href="#" class="button">Sign Up</a></li>
            </ul>
        </nav>
    </header>

    <!-- Banner -->
    <section id="banner">
        <h2>Witamy</h2>
        <section id="registration">
            <h2>Rejestracja</h2> <!-- Заголовок, для которого добавлены стили -->
            <form id="registrationform">
                <input type="text" name="name" id="name" placeholder="Imię" required/>
                <input type="password" name="hasło" id="password" placeholder="Hasło" required/>
                <button type="submit" class="button primary">Zaloguj się</button>
            </form>
        </section>
<!--        <div class="scroll-to-calc" onclick="scrollToCalculator()">Przejdź do kalkulatora</div>-->
    </section>

    <!-- Main -->
    <section id="main" class="container">
        <section class="box special">
            <header class="major">
                <h2>Kalkulator</h2>
            </header>
            <!-- Форма калькулятора -->
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
    </section>


    <!-- Footer -->
    <footer id="footer">
        <ul class="copyright">
            <li>&copy; Wszystkie prawa zastrzeżone.</li>
        </ul>
    </footer>

</div>

<!-- Scripts -->
<?php echo '<script'; ?>
 src="../../assets/js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../../assets/js/jquery.dropotron.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../../assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../../assets/js/browser.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../../assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../../assets/js/util.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../../assets/js/main.js"><?php echo '</script'; ?>
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
