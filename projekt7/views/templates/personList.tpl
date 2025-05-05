{include file="header.tpl"}

<div class="container">
  <div class="card">
    <h1>Lista osób</h1>

    <form method="get" action="index.php" class="form-inline" style="margin-bottom:20px;">
      <input type="hidden" name="action" value="personList">
      <label for="filter">Imię lub nazwisko:</label>
      <input
        type="text"
        id="filter"
        name="filter"
        value="{$filter|escape}"
        placeholder="wpisz część imienia lub nazwiska"
        class="form-control"
        style="width:300px; margin:0 10px;"
      >
      <button type="submit" class="btn">Filtruj</button>
      <a href="index.php?action=personEdit" class="btn">+ Nowa osoba</a>
    </form>

    <table class="table">
      <thead>
        <tr><th>Imię</th><th>Nazwisko</th><th>Data ur.</th><th>Opcje</th></tr>
      </thead>
      <tbody>
        {foreach $people as $p}
          <tr>
            <td>{$p.imie|escape}</td>
            <td>{$p.nazwisko|escape}</td>
            <td>{$p.data_ur}</td>
            <td>
              <a href="index.php?action=personEdit&id={$p.id}" class="btn">Edytuj</a>
              <a href="index.php?action=personDelete&id={$p.id}" onclick="return confirm('Usunąć?');" class="btn">Usuń</a>
            </td>
          </tr>
        {/foreach}
        {if !count($people)}
          <tr><td colspan="4">Brak rekordów</td></tr>
        {/if}
      </tbody>
    </table>
  </div>
</div>

{include file="footer.tpl"}
