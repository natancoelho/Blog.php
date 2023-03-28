<?php 
    include_once("helpers/url.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= $BASE_URL?>/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;600&display=swap" rel="stylesheet">
    
</head>
<body>
        <footer>

        <?php



if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
  // o usuário está logado, exibe um botão de logout
  echo '<form method="post" action="logout.php">';
  echo '<button type="submit">Sair</button>';
  echo '</form>';
}

?>
            <h1>
                footer
            </h1>
        </footer>
</body>
</html>