
<?php 
  session_start();
  if((!isset ($_SESSION['usuario']) == true) and (!isset ($_SESSION['nome']) == true))
  {
    header('location: telaLogin.php');
  }
  include("topo.php");

    $id= $_GET["id"];

    $sql= "SELECT * FROM produtos WHERE id=" . $id;

    include("database/database.php");

    $resultado = $con->query($sql);
    $dados = $resultado->fetch_assoc();


    ?>

    <h1>Alteração de produto</h1>

    <form method="post" action="salvar_alt_produto.php">
      <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
      <div class="form-group">
        <label>Nome do produto</label>
        <input type="text" name ="nome" class="form-control" placeholder="Calça Jeans" value="<?php echo $dados['nome']; ?>">
      </div>
    
      <div class="form-group">
        <label>Preço</label>
        <input type="text" name="preco" class="form-control" placeholder="50.89" value="<?php echo $dados['preco']; ?>">
      </div>
      
      <div class="form-group">
        <label>Quantidade de estoque</label>
        <input type="text" name="quantidade" class="form-control" placeholder="10" value="<?php echo $dados['quantidade']; ?>">
      </div>
      
      <div class="form-group">
        <label>Peso</label>
        <input type="text" name="peso" class="form-control" placeholder="0.8" value="<?php echo $dados['peso']; ?>">
      </div>

      <button type="submit" class="btn btn-sucess">Salvar</button>
    </form>

    <?php include("baixo.php");

    $id = $_GET["id"];

    $sql= "SELECT * FROM produtos WHERE id=" . $id;

    include("database/database.php");

    $resultado = $con->query($sql);
    $dados= $resultado->fetch_assoc();

?>

