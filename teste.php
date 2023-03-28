<?php 
    include_once("helpers/url.php");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" href="<?= $BASE_URL?>/css/style.css">
</head>
<body>
  <div class="tudo">
  
  <h1>Login</h1>
  <form action="valida_login.php" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <button type="submit">Login</button>
  </form>
</div>
</body>
</html>
