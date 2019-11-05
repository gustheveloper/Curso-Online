<?php include_once 'config/variaveis.php'; ?>
<header class="navbar">
  <h1 id="logo"><a style="color:black" href="index.php"><?php echo $nomeSistema;?></a></h1>
  <ul class="nav">
    <?php if(isset($usuario)&& $usuario !=[]){
      ?>
      <li class="nav-item">
        <a class="nav-link" href="#">Cursos</a>
      </li>
      <li class="nav-item p-">
        <a class="nav-link" href="#">Olá, <?php echo $usuario["nome"] ?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="sair.php">Sair</a>
      </li>
    <?php }else{?>
      <a class="nav-link" href="#">Cadastro</a>
    </li>
    <li class="nav-item p-">
      <a class="nav-link" href="login.php">Login</a>
    </li>
    <?php } ?>
</header>
<section class="container mt-2 bg-dark">
  <div class="navbar justify-content-around">
    <ul class="nav nav-tabs">
  <?php if(isset($categorias)&&$categorias !=[]){
    foreach ($categorias as $categoria){?>
      <li class="nav-item pl-5 pr-5">
      <a class="nav-link text-white" href="#"><?php echo $categoria ?></a>
      </li>
  <?php } ?>
  <?php } ?>
</ul>
</div>
</section>
