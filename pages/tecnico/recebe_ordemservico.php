<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
<?php
include './conexao.php';
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$endereco = $_POST['endereço'];
$nometec= $_POST['nametec'];
$cpftec= $_POST['cpftec'];
$descserv = $_POST['descserv'];
$dataserv = $_POST['data'];
$valorserv = $_POST['valor'];


$x=mysql_query("INSERT INTO dataservico VALUES('0','$nome','$cpf','$endereco','$nometec','$cpftec','$descserv','$dataserv','$valorserv')");

if($x){
    echo "Cadastro realizado";
header('Location:cadordemservico.php');

}else{
    header('Location:cadordemservico.php');
}

?>
    
</body>
</html>