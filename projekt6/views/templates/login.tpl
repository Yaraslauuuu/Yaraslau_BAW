{include file="header.tpl"}

<div class="container">
    <div class="card">
        <h1>Logowanie</h1>

        {if $error neq ''}
            <div class="error">{$error}</div>
        {/if}

        <form method="post" action="index.php?action=login">
            <div class="form-group">
                <label for="login">Username:</label>
                <input type="text" id="login" name="login" required>
            </div>

            <div class="form-group">
                <label for="pass">Password:</label>
                <input type="password" id="pass" name="pass" required>
            </div>

            <div class="form-group">
                <input type="submit" value="Zaloguj się" class="btn">
            </div>
        </form>

        <div class="form-group" style="margin-top: 20px;">
            <a href="index.php?action=home" class="btn">Powrót do strony głównej</a>
        </div>
    </div>
</div>

{include file="footer.tpl"}
