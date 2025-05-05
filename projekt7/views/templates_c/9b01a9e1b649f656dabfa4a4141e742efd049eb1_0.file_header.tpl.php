<?php
/* Smarty version 5.5.0, created on 2025-05-05 23:00:42
  from 'file:header.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.0',
  'unifunc' => 'content_681926fa6c73c0_62540825',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b01a9e1b649f656dabfa4a4141e742efd049eb1' => 
    array (
      0 => 'header.tpl',
      1 => 1746478124,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_681926fa6c73c0_62540825 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\projekt7\\views\\templates';
?><!DOCTYPE html>
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
        <?php if ($_smarty_tpl->getValue('role')) {?>
          <li><a href="index.php?action=profile" class="btn">Profil</a></li>
          <?php if ($_smarty_tpl->getValue('role') == 'admin') {?>
            <li><a href="index.php?action=dashboard" class="btn">Admin</a></li>
            <li><a href="index.php?action=personList" class="btn">Lista osób</a></li>
          <?php }?>
          <li><a href="index.php?action=logout" class="btn">Wyloguj</a></li>
        <?php } else { ?>
          <li><a href="index.php?action=login" class="btn">Logowanie</a></li>
          <li><a href="index.php?action=register" class="btn">Rejestracja</a></li>
        <?php }?>
      </ul>
    </nav>
  </div>
</header>
<?php }
}
