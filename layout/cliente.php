<?php
    session_start();
    if((!isset ($_SESSION['usuario']) == true) and (!isset ($_SESSION['nome']) == true))
    {
      header('location: telaLogin.php');
    }
    include("topo.php");
?>

<h1>Página de cliente</h1>

<?php
    include("baixo.php");
?>
