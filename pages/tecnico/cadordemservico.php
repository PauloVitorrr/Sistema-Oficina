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
        <div class="page-container">
            
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                    <form action="recebe_ordemservico.php" method="post">
                <div class="form-row">
                    <div class="col">
                        <label for="inputCity">Nome</label>
                        <input type="text" name="nome" class="form-control" placeholder="">
                    </div>
                    <div class="col">
                        <label for="inputCity">CPF</label>
                        <input type="text" name="cpf" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="inputCity">Endereço</label>
                        <input type="text" name="endereço" class="form-control" placeholder="">
                    </div>
                    <div class="col">
                        <label for="inputCity">Nome Técnico</label>
                        <input type="text" name="nametec" class="form-control" placeholder="">
                    </div>
                </div>

                <div class="form-row">
                    <div class="col">
                        <label for="inputCity">CPF Técnico</label>
                        <input type="text" name="cpftec" class="form-control" placeholder="">
                    </div>
                    <div class="col">
                        <label for="inputCity">Descrição serviço</label>
                        <input type="text" name="descserv" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="inputCity">Data do serviço</label>
                        <input type="text" name="data" class="form-control" placeholder="">
                    </div>
                    <div class="col">
                        <label for="inputCity">Valor do serviço</label>
                        <input type="text" name="valor" class="form-control" placeholder="">
                    </div>

                    <div class="col-6">
                        <input class="btn btn-primary mt-3 col-6" type="submit" value="Cadastrar">
                    </div>



            </form>
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
</body>

</html>
<!-- end document-->