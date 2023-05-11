<?php
    session_start();
    if((!isset ($_SESSION['usuario']) == true) and (!isset ($_SESSION['nome']) == true))
    {
    header('location: telaLogin.php');
    }

    include ('C:\wamp64\www\aula10\database\database.php');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nome = $_POST['nome'];
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        $chave = $_POST['chave'];

        $sql = "INSERT INTO usuario (nome,usuario,senha,email,chave) VALUES ('$nome', '$usuario', '$senha', '$email', '$chave')";

        if (mysqli_query($conn, $sql)) {
            echo "Usuário cadastrado com sucesso!";
        } else {
            echo "Falha ao cadastrar usuário: " . mysqli_error($conn);
        }

        mysqli_close($conn);
        header('Location: TelaLogin.php');
    } 
   
?>