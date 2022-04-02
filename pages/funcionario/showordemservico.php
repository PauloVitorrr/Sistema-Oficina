<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>HardTech | Funcionário</title>

    <!-- Fontfaces CSS-->
    <link href="../../css/font-face.css" rel="stylesheet" media="all">
    <link href="../../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../../vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../../vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../../vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../../vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../../vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../../vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../../vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../../vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../../vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../../vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link href="../../vendor/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Main CSS-->
    <link href="../../css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <!-- HEADER DESKTOP-->
        <?php require('../../modelos/modelofunc.php')?>
        <!-- PAGE CONTAINER-->
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30" style="margin-left:20%">
                    <div class="container-fluid">
                        <div class="col-lg-12">
                        <div class="table-responsive">
                            <?php 
                                include '../../conexao.php';
                                $y = mysql_query("SELECT * FROM dataservico");
                            ?>
                            <table id="dataTable" class="table table-bordered table-hover table-condensed">
                            <div class="btn-group">
                                <a href="gerarOS.php" class="btn btn-info">Criar Nova OS <i class="fa fa-plus"></i></a>
                            </div>
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nome - Clinete</th>
                                        <th>CPF - Cliente</th>
                                        <th>Endereço - Cliente</th>
                                        <th>Nome - Técnico</th>
                                        <th>CPF - Técnico</th>
                                        <th>Descrição - Serviço</th>
                                        <th>Data - Serviço</th>
                                        <th>Valor - Serviço</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        
                                        while ($rows = mysql_fetch_assoc($y)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $rows['id'] ?></td>
                                        <td><?php echo $rows['nome'] ?></td>
                                        <td><?php echo $rows['cpf'] ?></td>
                                        <td><?php echo $rows['endereco'] ?></td>
                                        <td><?php echo $rows['nome_tecnico'] ?></td>
                                        <td><?php echo $rows['cpf_tecnico'] ?></td>
                                        <td><?php echo $rows['descricao_servico'] ?></td>
                                        <td><?php echo $rows['data_servico'] ?></td>
                                        <td><?php echo $rows['valor_servico'] ?></td>
                                        <!-- <td>
                                            <form action="../../funcionario/deletarchamado.php" class="col-sm-6 col-md-5 col-lg-3 ml-md-1" method="POST" onsubmit="return confirm('Deseja mesmo deletar o chamado do <?php echo $rows['nomeCli']; ?> ?')">
                                                <input type="hidden" name="deleteId" value=" <?php echo $rows['id']; ?> ">
                                                <button type="submit" name="deleteBtn" id="deleteBtn" class="btn btn-xs btn-outline-danger">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </td> -->
                                    </tr>
                                    <?php
                                            
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        </div>
                        <!-- <div class="col-lg-13">
                            <div class="card">
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">NOME</th>
                                            <th scope="col">CPF</th>
                                            <th scope="col">ENDEREÇO</th>
                                            <th scope="col">NOME TECNICO</th>
                                            <th scope="col">CPF TECNICO</th>
                                            <th scope="col">DESCRICÃO SERVIÇO</th>
                                            <th scope="col">DATA SERVIÇO</th>
                                            <th scope="col">VALOR SERVIÇO</th>
                                        </tr>
                                        <?php
                                        include '../../conexao.php';
                                        $y = mysql_query("SELECT * FROM dataservico");
                                        while ($x = mysql_fetch_array($y)) {
                                            echo '
                                                <tr>
                                                    <td>' . $x['id'] . '</td>
                                                    <td>' . $x['nome'] . '</td>
                                                    <td>' . $x['cpf'] . '</td>
                                                    <td>' . $x['endereco'] . '</td>
                                                    <td>' . $x[''] . '</td>
                                                    <td>' . $x[''] . '</td>
                                                    <td>' . $x[''] . '</td>
                                                    <td>' . $x[''] . '</td>
                                                    <td>' . $x[''] . '</td>
                                                </tr>

                                                    ';
                                        } ?>


                                </table>
                            </div>
                        </div> -->
                        <?php require('../../modelos/copyright.php')?>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
    <!-- END PAGE CONTAINER-->
    </div>

    </div>

    <!-- Jquery JS-->
    <script src="../../vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="../../vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../../vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS -->
    <script src="../../vendor/slick/slick.min.js">
    </script>
    <script src="../../vendor/wow/wow.min.js"></script>
    <script src="../../vendor/animsition/animsition.min.js"></script>
    <script src="../../vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="../../vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="../../vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="../../vendor/circle-progress/circle-progress.min.js"></script>
    <script src="../../vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../../vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="../../vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="../../js/main.js"></script>
    <!-- DataTable JavaScript -->
    <script src="../../vendor/datatables.net/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            // DataTable init
            $('#dataTable').DataTable({
                "lengthChange": false,
                "bPaginate": false,
                "bInfo": false,
                "bAutoWidth": true
            });
        })
    </script>
</body>

</html>
<!-- end document-->