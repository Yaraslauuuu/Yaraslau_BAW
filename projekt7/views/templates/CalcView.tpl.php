{include file="header.tpl"}
<div class="container content">
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
{if isset($result.result)}
<div class="result">
<p>Miesięczna rata: {$result.result}</p>
</div>
{/if}
</div>
{include file="footer.tpl"}
