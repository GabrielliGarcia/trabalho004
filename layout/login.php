<?php

    session_start();
    if((!isset ($_SESSION['usuario']) == true) and (!isset ($_SESSION['nome']) == true))
    {
    header('location: telaLogin.php');
    }
    
    include ('C:\wamp64\www\aula10\database\database.php');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {        
        $usuario = $_POST['usuario'];        
        $senha = $_POST['senha'];
   
        $sql = "SELECT nome, usuario from usuario where usuario = '$usuario' and senha = '$senha'";

        $resultado = $conn->query($sql); 

        if($dados = $resultado->fetch_assoc()){
            include('session.php');
            header('Location: index.php');
        }else {
            echo "USUÁRIO OU SENHA INVÁLIDA!";
        }
        
       
        mysqli_close($conn);
       // header('Location: telaLogin.php');
    }
     
?>