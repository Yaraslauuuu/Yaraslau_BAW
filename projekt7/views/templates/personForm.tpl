{include file="header.tpl"}

<div class="container">
  <div class="card">
    <h2>{if $person}Edytuj osobę{else}Nowa osoba{/if}</h2>
    <form method="post" action="index.php?action=personSave">
      {if $person}
        <input type="hidden" name="id" value="{$person.id}">
      {/if}

      <div class="form-group">
        <label>Imię:</label>
        <input type="text" name="imie" value="{$person.imie|default:''}" required>
      </div>

      <div class="form-group">
        <label>Nazwisko:</label>
        <input type="text" name="nazwisko" value="{$person.nazwisko|default:''}" required>
      </div>

      <div class="form-group">
        <label>Data ur.:</label>
        <input type="date" name="data_ur" value="{$person.data_ur|default:''}" required>
      </div>

      <div class="form-group" style="text-align:center; margin-top:20px;">
        <button type="submit" class="btn">Zapisz</button>
        <a href="index.php?action=personList" class="btn">Anuluj</a>
      </div>
    </form>
  </div>
</div>

{include file="footer.tpl"}
