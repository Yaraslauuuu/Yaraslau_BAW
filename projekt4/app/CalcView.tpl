<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <title>{$page_title}</title>
    <link rel="stylesheet" href="{$app_url}/assets/css/main.css" />
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
        <h1>{$site_name}</h1>
        <nav id="nav">
            <ul>
                <li><a href="{$app_url}/index.php">Home</a></li>
                <li><a href="{$app_url}/signup">Sign Up</a></li>
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

        {if $msgs->isError()}
            <div class="error">
                <h3>Błędy:</h3>
                <ul>
                {foreach $msgs->getErrors() as $err}
                    <li>{$err}</li>
                {/foreach}
                </ul>
            </div>
        {/if}

        {if $msgs->getInfos()}
            <div class="info">
                <h3>Informacje:</h3>
                <ul>
                {foreach $msgs->getInfos() as $info}
                    <li>{$info}</li>
                {/foreach}
                </ul>
            </div>
        {/if}

        <form action="{$app_url}/app/calc.php" method="post">
            <div class="form-field">
                <label for="id_kwota">Kwota:</label>
                <input type="text" name="kwota" id="id_kwota" placeholder="Podaj kwotę" value="{$form->amount|default:''}" required />
            </div>
            <div class="form-field">
                <label for="id_okres">Okres (lata):</label>
                <input type="text" name="okres" id="id_okres" placeholder="Podaj okres w latach" value="{$form->years|default:''}" required />
            </div>
            <div class="form-field">
                <label for="id_procent">Procent:</label>
                <input type="text" name="procent" id="id_procent" placeholder="Podaj oprocentowanie" value="{$form->percent|default:''}" required />
            </div>
            <div class="form-field">
                <input type="submit" value="Oblicz" class="button primary" />
            </div>
        </form>

        {if isset($res->monthlyPayment)}
        <div class="result">
            <h3>Wynik obliczeń:</h3>
            <p><strong>Rata miesięczna:</strong> {$res->monthlyPayment|number_format:2:",":" "} zł</p>
            <p><strong>Łączna kwota do spłaty:</strong> {$res->totalPayment|number_format:2:",":" "} zł</p>
        </div>
        {/if}
    </section>

    <!-- Footer -->
    <footer id="footer">
        <p>&copy; {$footer_text}</p>
    </footer>
</div>

<!-- Подключение скриптов -->
<script src="{$app_url}/assets/js/jquery.min.js"></script>
<script src="{$app_url}/assets/js/jquery.dropotron.min.js"></script>
<script src="{$app_url}/assets/js/jquery.scrollex.min.js"></script>
<script src="{$app_url}/assets/js/browser.min.js"></script>
<script src="{$app_url}/assets/js/breakpoints.min.js"></script>
<script src="{$app_url}/assets/js/util.js"></script>
<script src="{$app_url}/assets/js/main.js"></script>
</body>
</html>
