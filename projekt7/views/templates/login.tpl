{include file="header.tpl"}

<div class="container">
  <div class="card">
    <h1>Logowanie</h1>

    {if $error}
      <div class="error">{$error}</div>
    {/if}

    <form method="post" action="index.php?action=login">
      <div class="form-group">
        <label for="login">Login:</label>
        <input type="text" id="login" name="login" required>
      </div>

      <div class="form-group">
        <label for="password">Hasło:</label>
        <input type="password" id="password" name="password" required>
      </div>

      <div class="form-group" style="text-align:center; margin-top:20px;">
        <button type="submit" class="btn">Zaloguj się</button>
      </div>
    </form>

    <div class="form-group" style="text-align:center; margin-top:10px;">
      <a href="index.php?action=home" class="btn">Powrót do strony głównej</a>
    </div>
  </div>
</div>

{include file="footer.tpl"}
