<?php
include 'cabecalho.php';

$filme1 = [
  "titulo" => "Vingadores 2",
  "nota" => 6.6,
  "sinopse" => "Após os eventos devastadores de Vingadores: Guerra Infinita, o universo está em ruínas devido aos esforços do Titã Louco, Thanos. Com a ajuda de aliados remanescentes, os Vingadores devem se reunir mais uma vez a fim de desfazer as ações de Thanos e restaurar a ordem no universo de uma vez por todas, não importando as consequências.",
  "poster" => "https://www.themoviedb.org/t/p/w300/q6725aR8Zs4IwGMXzZT8aC8lh41.jpg"
];

$filme2 = [
  "titulo" => "Vingadores 3",
  "nota" => 6.7,
  "sinopse" => "Após os eventos devastadores de Vingadores: Guerra Infinita, o universo está em ruínas devido aos esforços do Titã Louco, Thanos. Com a ajuda de aliados remanescentes, os Vingadores devem se reunir mais uma vez a fim de desfazer as ações de Thanos e restaurar a ordem no universo de uma vez por todas, não importando as consequências.",
  "poster" => "https://www.themoviedb.org/t/p/w300/q6725aR8Zs4IwGMXzZT8aC8lh41.jpg"
];

$filme3 = [
  "titulo" => "Vingadores 4",
  "nota" => 6.8,
  "sinopse" => "Após os eventos devastadores de Vingadores: Guerra Infinita, o universo está em ruínas devido aos esforços do Titã Louco, Thanos. Com a ajuda de aliados remanescentes, os Vingadores devem se reunir mais uma vez a fim de desfazer as ações de Thanos e restaurar a ordem no universo de uma vez por todas, não importando as consequências.",
  "poster" => "https://www.themoviedb.org/t/p/w300/q6725aR8Zs4IwGMXzZT8aC8lh41.jpg"
];

$filmes = [$filme1, $filme2, $filme3];

?>
<body>
<nav class="nav-extended purple lighten-2">
  
  <div class="nav-wrapper">
    <ul id="nav-mobile" class="right">
      <li class="active"><a href="galeria.php">Galeria</a></li>
      <li><a href="cadastrar.php">Cadastrar</a></li>
    </ul>
  </div>
  
  <div class="nav-header center">
    <h1>Filmes</h1>
  </div>

  <div class="nav-content">
    <ul class="tabs tabs-transparent purple darken-1">
      <li class="tab"><a class="active" href="#test1">Todos</a></li>
      <li class="tab"><a href="#test2">Assistidos</a></li>
      <li class="tab"><a href="#test3">Favoritos</a></li>
    </ul>
  </div>

</nav>

<div class="row">
  <?php
    foreach($filmes as $filme) {
  ?>
    <div class="col s3">
      <div class="card hoverable">
        <div class="card-image">
          <img src="<?php echo $filme["poster"] ?>">
          <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">favorite_border</i></a>
        </div>
        <div class="card-content">
          <p class="valign-wrapper"><i class="material-icons amber-text">star</i> <?php echo $filme["nota"] ?></p>
          <span class="card-title"><?php echo $filme["titulo"] ?></span>
          <p><?php echo $filme["sinopse"] ?></p>
        </div>
      </div>
    </div>
  <?php } ?>

</div>
</body>
</html>