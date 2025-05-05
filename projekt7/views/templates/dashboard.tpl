{include file="header.tpl"}
<div class="container"><div class="card">
  <h1>Panel Administratora</h1>
  <h3>Historia logowań:</h3>
  <ul>
    {foreach $history as $entry}
      <li>{$entry.time} — {$entry.user}</li>
    {/foreach}
  </ul>
</div></div>
{include file="footer.tpl"}
