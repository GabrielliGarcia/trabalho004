<?php
session_start();
if((!isset ($_SESSION['usuario']) == true) and (!isset ($_SESSION['nome']) == true))
{
  header('location: telaLogin.php');
}
    //var_dump($_POST);
    include("database\database.php");
    
    $nome = $_POST['nome'];
    $quantidade = $_POST['quantidade'];
    $preco = $_POST['preco'];
    $peso = $_POST['peso'];

    $sql = "SELECT * FROM produtos WHERE nome='${nome}'";

    $resultado = $con->query($sql)->fetch_assoc();

    if($resultado) 
    {
        echo "Já existe";
    }
    else
    {
    //Usar "INSERT" quando quiser inserir um novo produto
    
    $sql= "INSERT INTO produtos
            (nome, preco, quantidade, peso)
            VALUES
            ('{$nome}', {$preco}, {$quantidade}, {$peso})";
    
  
    $con->query($sql);
    $con->close();

    header("location: index.php");
    }

?>

<script>
    setTimeout(200000, window.location.reload)
</script>


