<?php
$nomeSistema ="Cursos Mtos Bão";
$usuario = ["nome" => "Gustavo Corrêa"];
$produtos = [
  ["nome" => "Curso - Pica", "preco" => "Investimento: R$1000.00", "duracao"=>"Duração: 40 horas", "img"=>"img/faustao-1177619.jpg"],
  ["nome" => "Curso - Doido", "preco" => "Investimento: R$2000.00", "duracao"=>"Duração: 500 horas", "img"=>"img/faustao-1177619.jpg"],
  ["nome" => "Curso - Massa", "preco"=>"Investimento: 3 pó", "duracao"=>"Duração: Eterna", "img"=>"img/faustao-1177619.jpg"]
];
$categorias = ["Cursos", "Palestras", "Artigos"];
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
<?php include 'header.php';
include_once 'config/validacoes.php';
$nomeUsuario = $_POST{'nomeCompleto'};
$cpf = $_POST{'cpf'};

  validanome($nomeUsuario);
  validaCPF($cpf);
  if(count($erros) == 0){
    echo "<p> Olá,<b> $nomeUsuario</b>, cê comprou memo o baguio. Daora!</p>";
}else{
  foreach ($erros as $mensagemDeErro){
    echo "<h2> $mensagemDeErro </h2>";
  } }
  ?>
</body>
