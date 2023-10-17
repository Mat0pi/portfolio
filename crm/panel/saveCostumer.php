<?php 
    require_once("../conection.php");
    
    if (isset($_POST['updateCostumer'])) {
    
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $social = $_POST['social'];
        $cnpj = $_POST['cnpj'];
        $contatoOne = $_POST['contatoOne'];
        $telContatoOne = $_POST['telContatoOne'];
        $emailContatoOne = $_POST['emailContatoOne'];
        $cargoContatoOne = $_POST['cargoContatoOne'];
        $contatoTwo = $_POST['contatoTwo'];
        $telContatoTwo = $_POST['telContatoTwo'];
        $emailContatoTwo = $_POST['emailContatoTwo'];
        $cargoContatoTwo = $_POST['cargoContatoTwo'];
        $contatoThree = $_POST['contatoThree'];
        $telContatoThree = $_POST['telContatoThree'];
        $emailContatoThree = $_POST['emailContatoThree'];
        $cargoContatoThree = $_POST['cargoContatoThree'];
        $endereco = $_POST['endereco'];
        $cep = $_POST['cep'];
        $estado = $_POST['estado'];
        $cidade = $_POST['cidade'];
        $produtos = $_POST['produto'];
        $quantidades = $_POST['quantidade'];
        $valores = $_POST['valor'];
        $datas_inicio = $_POST['data_inicio'];
        $datas_fim = $_POST['data_fim'];

        $dadosProdutos = [
            'produto' => $produtos,
            'quantidade' => $quantidades,
            'valor' => $valores,
            'data_inicio' => $datas_inicio,
            'data_fim' => $datas_fim,
        ];
        
        $dadosProdutosJSON = json_encode($dadosProdutos, JSON_UNESCAPED_UNICODE);
    
        $updateCostumer = "UPDATE costumer SET nome='$nome', 
        social='$social', cnpj='$cnpj', 
        contatoOne='$contatoOne', telContatoOne='$telContatoOne', emailContatoOne='$emailContatoOne', cargoContatoOne='$cargoContatoOne',
        contatoTwo='$contatoTwo', telContatoTwo='$telContatoTwo', emailContatoTwo='$emailContatoTwo', cargoContatoTwo='$cargoContatoTwo',
        contatoThree='$contatoThree', telContatoThree='$telContatoThree', emailContatoThree='$emailContatoThree', cargoContatoThree='$cargoContatoThree',
        endereco='$endereco', cep='$cep', estado='$estado', cidade='$cidade', produtos_json='$dadosProdutosJSON'
        WHERE id='$id'";


        $result = $conection->prepare($updateCostumer);
        $result->execute();
        echo 'nice';
        //header('Location: system.php');
    }else {
        header('Location: system.php');
    }
    
?>