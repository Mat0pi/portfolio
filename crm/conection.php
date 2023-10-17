<?php
    date_default_timezone_set('America/Sao_Paulo');
    $system_name = 'Medusa';
    
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'medusa';

    $email_adm = 'souzalimamateus@gmail.com';
    $cpf = '48628885854';
    $password = 'mateus2210';
    $password_cry = md5($password);
    $cellphone = '11986682481';

    try {
        $conection = new PDO("mysql:dbname=$dbName; host=$dbHost", "$dbUsername", "$dbPassword");
    } catch (Exception $e) {
        echo 'Erro ao conectar com o banco de dados!<br>';
        echo $e;
    }

    $query = $conection->query("SELECT * FROM usuarios");
    $res = $query->fetchAll(PDO::FETCH_ASSOC);
    $total_reg = count($res);

    if ($total_reg == 0){
    $conection->query("INSERT INTO usuarios SET nome='ADM', email='$email_adm', cpf='$cpf', senha='$password', 
    senha_crip='$password_cry', telefone='$cellphone', nivel='1'");
    };
?>