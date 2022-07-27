<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Filmes</title>
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <!-- Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>
<nav class="nav-extended purple lighten-3">
  
  <div class="nav-wrapper">
    <ul id="nav-mobile" class="right">
      <li><a href="galeria.php">Galeria</a></li>
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

  <div class="col s3">
    <div class="card hoverable">
      <div class="card-image">
        <img src="https://www.themoviedb.org/t/p/w300/q6725aR8Zs4IwGMXzZT8aC8lh41.jpg">
        <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">favorite_border</i></a>
      </div>
      <div class="card-content">
        <p class="valign-wrapper"><i class="material-icons amber-text">star</i> 9,7</p>
        <span class="card-title">Vingadores</span>
        <p>Após os eventos devastadores de "Vingadores: Guerra Infinita", o universo está em ruínas devido aos esforços do Titã Louco, Thanos. Com a ajuda de aliados remanescentes, os Vingadores devem se reunir mais uma vez a fim de desfazer as ações de Thanos e restaurar a ordem no universo de uma vez por todas, não importando as consequências.</p>
      </div>
    </div>
  </div>


</div>
</body>
</html>