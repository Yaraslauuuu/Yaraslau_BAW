{include file="header.tpl"}

<div class="container">
  <div class="card">
    <h2>Twój Profil</h2>
    <p><strong>Użytkownik:</strong> {$profile.username}</p>
    <p><strong>Zalogowany od:</strong> {$profile.since}</p>

    <div class="form-group" style="text-align:center; margin-top:20px;">
      <a href="index.php?action=home" class="btn">Powrót do strony głównej</a>
    </div>
  </div>
</div>

{include file="footer.tpl"}
