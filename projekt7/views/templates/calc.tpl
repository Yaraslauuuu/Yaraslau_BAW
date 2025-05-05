{include file="header.tpl"}

<div class="container">
  <div class="card">
    <h2>Kalkulator kredytowy</h2>

    {if $error}
      <div class="error">{$error}</div>
    {/if}

    <form action="index.php?action=calc" method="post">
      <div class="form-group">
        <label for="kwota">Kwota kredytu:</label>
        <input
          type="number"
          step="0.01"
          id="kwota"
          name="kwota"
          value="{$form->kwota|default:''}"
          required
        >
      </div>

      <div class="form-group">
        <label for="okres">Okres spłaty (miesiące):</label>
        <input
          type="number"
          id="okres"
          name="okres"
          value="{$form->okres|default:''}"
          required
        >
      </div>

      <div class="form-group">
        <label for="procent">Oprocentowanie (%):</label>
        <input
          type="number"
          step="0.01"
          id="procent"
          name="procent"
          value="{$form->procent|default:''}"
          required
        >
      </div>

      <div class="form-group" style="text-align:center; margin-top:20px;">
        <button type="submit" class="btn">Oblicz</button>
      </div>
    </form>

    {if isset($result->result)}
      <div class="result" style="margin-top:20px;">
        <h3>Wynik:</h3>
        <p><strong>{$result->result} zł miesięcznie</strong></p>
      </div>
    {/if}

    <div class="form-group" style="text-align:center; margin-top:20px;">
      <a href="index.php?action=home" class="btn">Powrót do strony głównej</a>
    </div>
  </div>
</div>

{include file="footer.tpl"}
