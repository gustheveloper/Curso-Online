<?php
$usuario = ["email"=>"guts.correa@gmail.com", "senha"=>'$2y$10$sHzpQaOxneZcEBQHqeKtie8VDJU2kga1ysUEHxHLsBfEbTJqXGBza'];

if($_POST){
  $email = $_POST['userEmail'];
  $senha = $_POST['password'];

  if($email==$usuario['email']){
    if (password_verify($senha, $usuario['senha'])){
      session_start();
      $_SESSION['usuario'] = ['nome'=>"Gustavo"];
      header('location: index.php');
    }else{
      echo "Email/Senha errados";
    }
  }else{
    echo "Email/Senha errados";
  }
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="index.css">
  <title>Document</title>
</head>
<body>
  <?php include_once 'header.php'; ?>
  <main class="d-flex justify-content-center align-items-center pt-5">
    <form class="card p-2" action="login.php" method="post">
      <div class="form-group">
        <label  for="userEmail">E-mail/Username</label>
        <input type="email" class="form-control"name="userEmail" id="userEmail" placeholder="Coloca e-mail" required>
      </div>
      <div class="form-group">
        <label  for="password">Senha</label>
        <input type="password" class="form-control"name="password" id="password" placeholder="Coloca senha" required>
      </div>
      <div class="form-group text-center">
        <button type="submit" name="button" class="btn btn-success">Login</button>
      </div>
    </form>
  </main>
