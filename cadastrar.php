<?php
include 'cabecalho.php';
?>
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

</nav>
    
<div class="row">
  <div class="col s6 offset-s3">
    <div class="card">
      <div class="card-content">
        <span class="card-title">Cadastrar filme</span>
          
          <div class="row">
            <div class="input-field col s12">
              <input id="titulo" type="text" class="validate">
              <label for="titulo">Título do filme</label>
            </div>
          </div>
        
          <div class="row">
            <div class="input-field col s12">
              <textarea id="sinopse" class="materialize-textarea"></textarea>
              <label for="sinopse">Sinopse do filme</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s4">
              <input id="nota" type="number" step=".1" min="0" max="10" class="validate">
              <label for="nota">Nota do filme</label>
            </div>
          </div>
      
          <div class="row">
            <div class="col s12">
              <div class="file-field input-field">
                <div class="btn purple lighten-1">
                  <span>Inserir capa</span>
                  <input type="file">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text">
                </div>
              </div>
            </div>
          </div>

        </div>
      <div class="card-action">
        <a href="galeria.php" class="waves-effect waves-light btn grey">Cancelar</a>
        <a href="#" class="waves-effect waves-light btn purple">Cadastrar</a>
      </div>
    </div>
  </div>
</div>

</body>
</html>