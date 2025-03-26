<!DOCTYPE HTML>
<html>
<head>
    <title>Logowanie</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>
<body class="landing is-preload">
<div id="page-wrapper">

    <!-- Header -->
    <header id="header" class="alt">
        <h1><a href="index.html">Alpha</a></h1>
        <nav id="nav">
            <ul>
                <li><a href="index.html">Home</a></li>
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
        <h2>Witamy w systemie</h2>
        <p>Zaloguj się, aby kontynuować.</p>
    </section>

    <!-- Main -->
    <section id="main" class="container">
        <section class="box special">
            <header class="major">
                <h2>Logowanie</h2>
                <p>Wprowadź swoje dane, aby zalogować się do systemu.</p>
            </header>

            <!-- Форма для логина -->
            <form action="http://localhost/projekt3/app/security/login.php" method="post">
                <div class="row gtr-50 gtr-uniform">
                    <div class="col-12">
                        <input type="text" name="username" id="username" placeholder="Nazwa użytkownika" required />
                    </div>
                    <div class="col-12">
                        <input type="password" name="password" id="password" placeholder="Hasło" required />
                    </div>
                    <div class="col-12">
                        <input type="submit" value="Zaloguj się" class="button primary" />
                    </div>
                </div>
            </form>

            <!-- Подсветка ошибок (если есть) -->
            {if $error_message}
                <div class="error">{$error_message}</div>
            {/if}

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
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
