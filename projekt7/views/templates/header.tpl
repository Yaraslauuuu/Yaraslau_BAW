<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Projekt7</title>
  <link rel="stylesheet" href="/projekt7/assets/css/custom.css">
</head>
<body>
<header>
  <div class="container">
    <h1>Projekt7</h1>
    <nav>
      <ul>
        <li><a href="index.php?action=home" class="btn">Strona główna</a></li>
        <li><a href="index.php?action=calc" class="btn">Kalkulator</a></li>
        {if $role}
          <li><a href="index.php?action=profile" class="btn">Profil</a></li>
          {if $role == 'admin'}
            <li><a href="index.php?action=dashboard" class="btn">Admin</a></li>
            <li><a href="index.php?action=personList" class="btn">Lista osób</a></li>
          {/if}
          <li><a href="index.php?action=logout" class="btn">Wyloguj</a></li>
        {else}
          <li><a href="index.php?action=login" class="btn">Logowanie</a></li>
          <li><a href="index.php?action=register" class="btn">Rejestracja</a></li>
        {/if}
      </ul>
    </nav>
  </div>
</header>
