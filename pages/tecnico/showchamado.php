../<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>HardTech | Técnico</title>

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

    <!-- Main CSS-->
    <link href="../../css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
        <?php require('../../modelos/modelotec.php')?>
        <!-- PAGE CONTAINER-->

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
                                        <td><?php echo $rows['nome_cliente'] ?></td>
                                        <td><?php echo $rows['cpf'] ?></td>
                                        <td><?php echo $rows['telefone'] ?></td>
                                        <td><?php echo $rows['descricao_aparelho'] ?></td>
                                        <td><?php echo $rows['marca'] ?></td>
                                        <td><?php echo $rows['relatorio_defeito'] ?></td>
                                        <td><?php echo $rows['data_atendimento'] ?></td>
                                        <td>
                                            <form action="../../controllers/Funcionario/DeletarChamado.php" class="col-sm-6 col-md-5 col-lg-3 ml-md-1" method="POST" onsubmit="return confirm('Deseja mesmo deletar o chamado do <?php echo $rows['nome_cliente']; ?> ?')">
                                                <input type="hidden" name="deleteId" value=" <?php echo $rows['id']; ?> ">
                                                <button type="submit" name="deleteBtn" id="deleteBtn" class="btn btn-xs btn-outline-danger">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>   
                                    </tr>
                                    <?php
                                            
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        </div>



        <!-- <div class="page-container">
            <form class="form-inline mt-2 mt-md-0">

            </form>
        </div>
        </nav>
        
        <main role="main" class="container">
            <div class="jumbotron">

                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th >ID</th>
                            <th >NOME</th>
                            <th >TELEFONE</th>
                            <th >ENDEREÇO</th>
                            <th >DESCRIÇÃO APARELHO</th>
                            <th >MARCA</th>
                            <th >MODELO</th>
                            <th >R. DEFEITO</th>
                            <th >GARANTIA</th>
                            <th >D. DE ATENDIMENTO</th>
                            <th >D. DE ENTREGA</th>
                        </tr>
                        <?php
                        include '../../conexao.php';
                        $y = mysql_query("SELECT * FROM chamado");
                        while ($x = mysql_fetch_array($y)) {
                            echo '
                                <tr>
                                    <th scope="row">2</th>  
                                    <td>' . $x['id'] . '</td>
                                    <td>' . $x['nome_cliente'] . '</td>
                                    <td>' . $x['telefone'] . '</td>
                                    <td>' . $x['endereco'] . '</td>
                                    <td>' . $x['descricao_aparelho'] . '</td>
                                    <td>' . $x['marca'] . '</td>
                                    <td>' . $x['modelo'] . '</td>
                                    <td>' . $x['relatorio_defeito'] . '</td>
                                    <td>' . $x['garantia'] . '</td>
                                    <td>' . $x['data_atendimento'] . '</td>
                                    <td>' . $x['date_entrega'] . '</td>
                                </tr>
                                ';
                        } ?>


                </table>
        </main> -->
                <!-- MAIN CONTENT -->
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
    <!-- Vendor JS       -->
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

</body>

</html>
<!-- end document-->