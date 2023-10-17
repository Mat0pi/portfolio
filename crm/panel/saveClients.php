<?php 
    require_once("../conection.php");
    
    if (isset($_POST['update'])) {
    
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $cpf = $_POST['cpf'];
        $nivel = $_POST['nivel'];
    
        $update = "UPDATE usuarios SET nome='$nome', 
        email='$email', senha='$senha', telefone='$telefone', cpf='$cpf', nivel='$nivel' WHERE id='$id'";

        $result = $conection->prepare($update);
        $result->execute();
        
        header('Location: system.php?page=clients');
    }else {
        header('Location: system.php?page=clients');
    }
    
?>