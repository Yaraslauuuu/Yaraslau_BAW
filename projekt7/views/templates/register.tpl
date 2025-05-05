{include file="header.tpl"}

<div class="container">
  <div class="card">
    <h1>Rejestracja</h1>

    {if $error}
      <div class="error">{$error}</div>
    {/if}

    <form method="post" action="index.php?action=register">
      <div class="form-group">
        <label for="login">Username:</label>
        <input
          id="login"
          name="login"
          type="text"
          value="{$oldLogin|escape}"
          class="form-control"
        >
      </div>

      <div class="form-group">
        <label for="password">Password:</label>
        <input
          id="password"
          name="password"
          type="password"
          class="form-control"
        >
      </div>

      <button type="submit" class="btn">Zarejestruj</button>
    </form>
  </div>
</div>

{include file="footer.tpl"}
