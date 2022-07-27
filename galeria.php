<?php
include 'cabecalho.php';
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