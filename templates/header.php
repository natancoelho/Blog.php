
<?php
  include_once("helpers/url.php");
  include_once("data/posts.php");
  include_once("data/categories.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog de Programação</title>
  <!-- ESTILOS DO PROJETO -->
  <link rel="stylesheet" href="<?= $BASE_URL ?>/css/styles.css">
  <!-- GOOGLE FONTS -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
</head>
<body>
  <header>
    <a href="<?= $BASE_URL ?>" id="logo">
      <img src="<?= $BASE_URL ?>/img/logo.png" alt="Blog Codar">
    </a>
    <nav>
      <ul id="navbar">
        
      </ul>
    </nav>
  </header>