{include file="header.tpl"}
<div id="calc-form" class="container">
  <div class="card">
    <h2>Kalkulator Kredytowy</h2>
    <form method="post" action="?action=calc">
      <div class="form-group">
        <label for="kwota">Kwota kredytu:</label>
        <input type="text" name="kwota" id="kwota" value="{$smarty.post.kwota|default:''}">
      </div>
      <div class="form-group">
        <label for="okres">Okres (w miesiącach):</label>
        <input type="text" name="okres" id="okres" value="{$smarty.post.okres|default:''}">
      </div>
      <div class="form-group">
        <label for="procent">Procent:</label>
        <input type="text" name="procent" id="procent" value="{$smarty.post.procent|default:''}">
      </div>
      <input type="submit" value="Oblicz">
    </form>
    {if isset($result->result) && $result->result !== null}
      <div class="result">
        <h3>Wynik</h3>
        <p>Miesięczna rata: <strong>{$result->result}</strong></p>
      </div>
    {/if}
  </div>
</div>
{if $smarty.get.scroll == 1}
{literal}
<script>
  window.onload = function(){
    document.getElementById('calc-form').scrollIntoView({behavior: 'smooth'});
  };
</script>
{/literal}
{/if}

