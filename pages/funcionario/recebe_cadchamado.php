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
    $nome_cliente = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereço'];
    $descricao_aparelho = $_POST['desc'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $relatorio_defeito = $_POST['relatorio'];
    $garantia = $_POST['garantia'];
    $data_atendimento = $_POST['dataa'];
    $date_entrega = $_POST['datae'];

    $x = mysql_query("INSERT INTO chamado VALUES('0','$nome_cliente','$telefone','$endereco','$descricao_aparelho','$marca','$modelo','$relatorio_defeito','$garantia','$data_atendimento','$date_entrega')");

    if ($x) {
        header('Location:cadchamado.php');
    } else {
        header('Location:cadchamado.php');
    }

    ?>

</body>

</html>