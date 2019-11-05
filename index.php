
<?php include 'config/variaveis.php'; ?>
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
  <?php require_once 'header.php'; ?>

<main>
  <section class="container mt-4">
    <div class="row d-flex justify-content-around p-3">
      <?php if(isset ($produtos)&&$produtos != []){
         foreach ($produtos as $produto){?>
        <div class="col-lg-3 card text-center ">
          <h5 class="card-title"><?php echo $produto['nome']; ?></h5>
          <img class="card-img-top" src="<?php echo $produto['img']; ?>" >
          <h5 class="card-text"><?php echo $produto['preco']; ?></h5>
          <p class="card-text"><?php echo $produto['desc']; ?></p>
          <a href="carrinho.php?nomeProduto=<?php echo $produto['nome']; ?>" class="btn btn-primary">Compra aí, caraio</a>
      </div>
    <?php } ?>
  <?php }else{?>
    <h2>Não há produtos mencionados!
  <?php } ?>
</div>
</div>
</section>
</main>
</body>
</html>
