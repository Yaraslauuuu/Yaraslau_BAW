{include file="header.tpl"}

<div class="container">
  <div class="card">
    <h2>Użytkownicy</h2>

    <form method="get" action="index.php" style="margin-bottom:20px;">
      <input type="hidden" name="action" value="userList">
      <div class="form-group">
        <label>Imię lub nazwisko:</label>
        <input type="text" name="filter" value="{$filter|escape}" placeholder="filtruj..." class="form-control">
      </div>
      <button type="submit" class="btn">Filtruj</button>
      <a href="index.php?action=userList" class="btn">Wyczyść</a>
    </form>

    <table class="table">
      <thead><tr><th>Login</th><th>Imię</th><th>Nazwisko</th><th>Rola</th><th>Data rej.</th></tr></thead>
      <tbody>
        {foreach $users as $u}
          <tr>
            <td>{$u.login|escape}</td>
            <td>{$u.imie|escape}</td>
            <td>{$u.nazwisko|escape}</td>
            <td>{$u.role|escape}</td>
            <td>{$u.created_at|escape}</td>
          </tr>
        {/foreach}
        {if !$users|@count}
          <tr><td colspan="5">Brak użytkowników.</td></tr>
        {/if}
      </tbody>
    </table>
  </div>
</div>

{include file="footer.tpl"}
