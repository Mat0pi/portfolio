<?php 
    require_once("../conection.php");
    
    if (isset($_POST['updateSupplier'])) {
    
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $social = $_POST['social'];
        $cnpj = $_POST['cnpj'];
        $seguimento = $_POST['seguimento'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $redesocial = $_POST['redesocial'];
        $descritivo = $_POST['descritivo'];
        $endereco = $_POST['endereco'];
        $cep = $_POST['cep'];
        $estado = $_POST['estado'];
        $cidade = $_POST['cidade'];
        $chave1 = $_POST['chave1'];
        $chave2 = $_POST['chave2'];
        $chave3 = $_POST['chave3'];
    
        $updateSupplier = "UPDATE fornecedores SET nome='$nome', 
        social='$social', cnpj='$cnpj', seguimento='$seguimento', telefone='$telefone', email='$email', 
        redesocial='$redesocial', descritivo='$descritivo', endereco='$endereco', cep='$cep', estado='$estado',
        cidade='$cidade', chave1='$chave1', chave2='$chave2', chave3='$chave3' WHERE id='$id'";

        $result = $conection->prepare($updateSupplier);
        $result->execute();

        header('Location: system.php');
    }else {
        header('Location: system.php');
    }
    
?>