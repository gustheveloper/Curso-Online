<?php
function cadastrarProduto($nomeProduto, $descProduto, $imgProduto, $precoProduto) {
    $nomeArquivo = "produto.json";
    if(file_exists($nomeArquivo)) {
        //se já existe, só acrescentar. se não existe, declara no else
        $arquivo = file_get_contents($nomeArquivo);
        //^abrindo e pegando informações do arquivo. como php não le json, tem que fazer o decode e transformar em array para poder acrescentar informaçoes
        $produtos = json_decode($arquivo, true);
        //^coloca o true para transformar em array, não em objeto
        $produtos[] = ["nome"=>$nomeProduto, "preco"=>$precoProduto, "desc"=>$descProduto, "img"=> $imgProduto];
        //^adicionando novo produto
        $json = json_encode($produtos);
        //transforma em json de novo para poder acrescentar as informações do novo produto
        $deuCerto = file_put_contents($nomeArquivo, $json);
        if ($deuCerto) {
            return "Seu produto foi cadastrado com sucesso!";
        } else {
            return "Erro de cadastro. Verifique as informações.";
        };
        var_dump($produtos);
    } else {
        $produtos = [];
        //array_push() --- poderia usar assim, mas é igual a:
        $produtos[] = ["nome"=>$nomeProduto, "preco"=>$precoProduto, "desc"=>$descProduto, "img"=> $imgProduto];
        // var_dump($produtos); --- testando para ver se o código funciona - OK
        $json = json_encode ($produtos);
        //^gravando as informações dentro de um json para não perder as infomações do produto toda vez que atualiza
        $deuCerto = file_put_contents($nomeArquivo, $json);
        //foi criado mais um if para validar se o file_put_contents deu certo, para então retornar a mensagem de sucesso
        if ($deuCerto) {
            return "Seu produto foi cadastrado com sucesso!";
        } else {
            return "Erro de cadastro. Verifique as informações.";
        };
    }
}
//se o POST der vazio, ele retorna falso então não deixa cadastrar o produto, dá mensagem de erro
if($_POST) {
    //salvando o arquivo de imagem
    $nomeImg = $_FILES['imgProduto']['name'];
    $localTmp = $_FILES['imgProduto']['tmp_name'];
    $dataAtual = date("(d-m-y)");
    $caminhoSalvo = 'img/'.$dataAtual.$nomeImg;
    $deuCertoImagem = move_uploaded_file($localTmp, $caminhoSalvo);
    // exit;
    // var_dump($_FILES);
    // exit; //para não continuar cadastrando
    echo cadastrarProduto($_POST["nomeProduto"],$_POST["descProduto"],$caminhoSalvo,$_POST["precoProduto"]);
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de produto</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include_once("header.php"); ?>
    <!-- ^usando PHP para incluir cabeçalho de maneira dinâmica^ -->
    <main class="container">
        <div class="row">
            <div class="col-12">
                <h1>Cadastro de produto</h1>
            </div>
            <div class="col-12">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="text" class="form-control" name="nomeProduto" placeholder="Nome do produto" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="descProduto" placeholder="Descrição do produto" required>
                    </div>
                    <div class="form-group">
                        <input type="file" class="form-control" name="imgProduto" placeholder="Imagem do produto" required>
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" name="precoProduto" placeholder="Preço do produto"required>
                    </div>
                    <button type="submit" class="btn btn-success">Cadastrar produto</button>
                </form>
            </div>
        </div>
    </main>

</body>
</html>
