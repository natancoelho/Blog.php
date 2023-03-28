<?php
// Inicie a sessão
session_start();

// Defina as credenciais de login
$valid_username = "admin";
$valid_password = "admin";

// Obtenha as credenciais enviadas pelo formulário de login
$username = $_POST['username'];
$password = $_POST['password'];

// Verifique se as credenciais estão corretas
if ($username == $valid_username && $password == $valid_password) {
  // Defina a variável de sessão que indicará que o usuário está logado
  $_SESSION['logged_in'] = true;
  // Redirecione o usuário para a página desejada
  header("Location: home.php");
} else {
  // Exiba uma mensagem de erro e permita que o usuário tente novamente
  echo "Username ou senha incorretos. Tente novamente.";
  header("Refresh: 3; url=index.php");
}
?>
