<?php 
@session_start();
require_once('conection.php');

$email = $_POST['email'];
$senha = md5($_POST['senha']);

$query = $conection->query("SELECT * FROM usuarios WHERE email = '$email' and senha_crip = '$senha'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);

if ($total_reg > 0){
    $_SESSION['id'] = $res[0]['id'];
    $_SESSION['nome'] = $res[0]['nome'];
    $_SESSION['nivel'] = $res[0]['nivel'];
    echo "<script>window.location='panel/system.php'</script>";
}else{
    echo "<script>window.alert('Dados incorretos');</script>";
    echo "<script>window.location='index.php'</script>";
}

?>
