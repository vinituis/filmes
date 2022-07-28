<?php
include 'cabecalho.php';
?>
<body>
<nav class="nav-extended purple lighten-2">
  
  <div class="nav-wrapper">
    <ul id="nav-mobile" class="right">
      <li><a href="/">Galeria</a></li>
      <li class="active"><a href="/npvo">Cadastrar</a></li>
    </ul>
  </div>
  
  <div class="nav-header center">
    <h1>Filmes</h1>
  </div>

</nav>
    
<div class="row">
  <form method="POST">
    <div class="col s6 offset-s3">
      <div class="card">
        <div class="card-content">
          <span class="card-title">Cadastrar filme</span>
            
            <div class="row">
              <div class="input-field col s12">
                <input id="titulo" type="text" class="validate" name="titulo" required>
                <label for="titulo">Título do filme</label>
              </div>
            </div>
          
            <div class="row">
              <div class="input-field col s12">
                <textarea id="sinopse" name="sinopse" class="materialize-textarea"></textarea>
                <label for="sinopse">Sinopse do filme</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s4">
                <input id="nota" name="nota" type="number" step=".1" min="0" max="10" class="validate" required>
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
                    <input class="file-path validate" type="text"  name="poster">
                  </div>
                </div>
              </div>
            </div>

          </div>
        <div class="card-action">
          <a href="/" class="waves-effect waves-light btn grey">Voltar</a>
          <button type="submit" class="waves-effect waves-light btn purple">Cadastrar</button>
        </div>
      </div>
    </div>
  </form>
</div>

</body>
</html>