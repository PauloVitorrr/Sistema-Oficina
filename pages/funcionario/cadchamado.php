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

    <!-- Main CSS-->
    <link href="../../css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
    <?php require('../../modelos/modelofunc.php')?>
        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <form action="recebe_cadchamado.php" method="post">
                        <div class="col-lg-13">
                                <div class="card">
                                    <div class="card-header">Cadastrar</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Cadastro de Chamado</h3>
                                        </div>
                                        <hr>
                                        <form action="" method="post" novalidate="novalidate">
                                            <div class="form-group">
                                                <label for="Nome" class="control-label mb-1">Nome</label>
                                                <input id="Nome" name="nome" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="Digite seu nome">
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="Telefone" class="control-label mb-1">Telefone</label>
                                                <input id="Telefone" name="telefone" type="text" class="form-control cc-name valid" placeholder="Digite seu número">
                                            </div>
                                            <div class="form-group">
                                                <label for="Endereço" class="control-label mb-1">Endereço</label>
                                                <input id="Endereço" name="endereco" type="text" class="form-control cc-number identified visa" placeholder="Digite seu endereço">
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Expiration</label>
                                                        <input id="cc-exp" name="cc-exp" type="tel" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration"
                                                            data-val-cc-exp="Please enter a valid month and year" placeholder="MM / YY"
                                                            autocomplete="cc-exp">
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Security code</label>
                                                    <div class="input-group">
                                                        <input id="x_card_code" name="x_card_code" type="tel" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code"
                                                            data-val-cc-cvc="Please enter a valid security code" autocomplete="off">

                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                    <i class="fa fa-lock fa-lg"></i>&nbsp;
                                                    <span id="payment-button-amount">Pay $100.00</span>
                                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </form>
                    <!-- <form action="recebe_cadchamado.php" method="post">
            <div class="form-row">
                    <div class="col">
                        <label for="inputCity">Nome</label>
                        <input type="text" name="nome" class="form-control" placeholder="Digite seu nome">
                    </div>
                    <div class="col">
                        <label for="inputCity">Telefone</label>
                        <input type="text" name="telefone" class="form-control" placeholder="Digite seu numero">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="inputCity">Endereço</label>
                        <input type="text" name="endereço" class="form-control" placeholder="Digite seu endereço">
                    </div>
                    <div class="col">
                        <label for="inputCity">Desc Aparelho</label>
                        <input type="text" name="desc" class="form-control" placeholder="Dê a descrição">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="inputCity">Marca</label>
                        <input type="text" name="marca" class="form-control" placeholder="Digite a marca">
                    </div>
                    <div class="col">
                        <label for="inputCity">Modelo</label>
                        <input type="text" name="modelo" class="form-control" placeholder="Digite o modelo">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="inputCity">Relatorio Defeito</label>
                        <input type="text" name="relatorio" class="form-control" placeholder="Diga o defeito">
                    </div>
                    <div class="col">
                        <label for="inputCity">Garantia</label>
                        <input type="text" name="garantia" class="form-control" placeholder="Digite a garantia">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-6">
                        <label for="inputCity">Data de atendimento</label>
                        <input type="date" name="dataa" class="form-control" placeholder="">
                    </div>
                    <div class="col-6">
                        <label for="inputCity">Data de entrega</label>
                        <input type="date" name="datae" class="form-control" placeholder="">
                    </div>
                    <div class="col-6">
                        <input class="btn btn-primary mt-3 col-6" type="submit" value="Cadastrar">
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