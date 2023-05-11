<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <center><h3>Tela Cadastro</h3></center>
    <form method="POST" action="CadastroUsuario.php">
    <br>
    <br>
    <div class="row mb-3">
      <label class="form-label">Nome</label>
      <input type="text" class="form-control" name="nome">
      <label class="form-label">Usuario</label>
      <input type="text" class="form-control" name="usuario">
      <label class="form-label">Senha</label>
      <input type="password" class="form-control" name="senha">
      <label class="form-label">Email</label>
      <input type="text" class="form-control" name="email">
      <label class="form-label">Chave</label>
      <input type="text" class="form-control" name="chave">
    
      <button type="submit" class="btn btn-primary" value="cadastrar">Cadastrar</button>
      <a class='btn btn-secondary' href='TelaLogin.php'>Tela Login</a>
    </div>

    </form>
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
