<?php include_once 'config/variaveis.php'; ?>

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
  <section class="container">
    <div class="row">
      <div class="col-12">
        <h1>Carrinho de Compras</h1>

      </div>
      <div class="col-12">
        <div class="row card">
          <div class="col-12">
            <h3>Você está comprando <?php echo $_GET['nomeProduto']; ?></h3>
          </div>
          <div class="col-lg-6 col-md-6">
            <form class="d-flex flex-column p-3" action="sucesso.php" method="post">
              <input type="text" name="nomeCompleto" placeholder="Nome completo, por favor" required>
              <input type="text" name="cpf" placeholder="CPF" required>
              <input type="number" name="cartao" placeholder="" required>
              <input type="date" name="validade" placeholder="" required>
              <input type="password" name="codigoCartao" placeholder="" required>
              <button class="btn btn-success" type="submit" name="button">Finalizar compra</button>

            </form>

          </div>
        </div>

      </div>

    </div>
  </section>
</main>
