{include file="header.tpl"}
<div class="container">
  <div class="card">
    <h2>Rejestracja / Logowanie</h2>
    <form method="post" action="?action=login">
      <div class="form-group">
        <label for="login">Login:</label>
        <input type="text" name="login" id="login" placeholder="Wpisz login" value="{$smarty.post.login|default:''}">
      </div>
      <div class="form-group">
        <label for="password">Hasło:</label>
        <input type="password" name="password" id="password" placeholder="Wpisz hasło">
      </div>
      <input type="submit" value="Zarejestruj / Zaloguj">
    </form>
    {if isset($error)}
      <p class="error">{$error}</p>
    {/if}
  </div>
</div>
{include file="footer.tpl"}
