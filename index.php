

<?php




session_start(); // inicia a sessão

// verifica se o usuário enviou um nome de usuário e senha
if(isset($_POST['username']) && isset($_POST['password'])) {
  // verifica se o nome de usuário e a senha são válidos
  if($_POST['username'] === 'user' && $_POST['password'] === 'senha') {
    $_SESSION['logged_in'] = true; // define a variável de sessão
    header('Location: home.php'); // redireciona para a página de dashboard
    exit();
  } else {
    $error = 'Nome de usuário ou senha inválido.'; // exibe uma mensagem de erro
  }
}

// verifica se o usuário está logado
if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
  // exibe o formulário de login
  echo '<form method="post">';
  echo '<label>Nome de usuário:</label>';
  echo '<input type="text" name="username">';
  echo '<label>Senha:</label>';
  echo '<input type="password" name="password">';
  echo '<button type="submit">Entrar</button>';
  echo '</form>';
  if(isset($error)) {
    echo '<p class="error">' . $error . '</p>'; // exibe uma mensagem de erro, se houver
  }
} else {
  // o usuário está logado, exibe o conteúdo protegido aqui
  header('Location: home.php');
}

?>


