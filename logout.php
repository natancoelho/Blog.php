<?php

session_start(); // inicia a sessão
session_unset(); // remove todas as variáveis de sessão
session_destroy(); // destroi a sessão
header('Location: index.php'); // redireciona para a página de login
exit();

?>