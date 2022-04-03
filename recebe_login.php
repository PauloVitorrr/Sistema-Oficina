<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript">
        function funcionario(){
            setTimeout("window.location='funcpage.php'",2500);
        }
        function tecnico(){
            setTimeout("window.location='tecpage.php'",2000);
        }
        function adm(){
            setTimeout("window.location='admpage.php'",2000);
        }
        function erro(){
            setTimeout("window.location='index.php'",2000);
        }
    </script>
</head>
<body>
    <?php
    include'./conexao.php';
        $login =$_POST['login'];
        $senha =$_POST['senha'];
        $funcao =$_POST['funcao'];
        $sql = mysql_query(SELECT * FROM login WHERE login='$login' AND senha='$senha' AND funcao='$funcao');
        $row = mysql_num_rows($sql);
            if ($row> 0) {
                if ($funcao =='funcionario') {
                    session_start();
                    $_SESSION['$login'] = $_POST['login'];
                    $_SESSION['$senha'] = $_POST['senha'];
                    $_SESSION['$funcao'] = $_POST['funcao'];
                    echo'Você está logado';
                    echo'<script>funcionario()</script>';
            }
        }
        $row = mysql_num_rows($sql);
        if ($row> 0) {
            if ($funcao =='adm') {
                session_start();
                $_SESSION['$login'] = $_POST['login'];
                $_SESSION['$senha'] = $_POST['senha'];
                $_SESSION['$funcao'] = $_POST['funcao'];
                echo'Você está logado';
                echo'<script>funcionario()</script>';
        }
    }
        $row = mysql_num_rows($sql);
        if ($row> 0) {
            if ($funcao =='tecnico') {
                session_start();
                $_SESSION['$login'] = $_POST['login'];
                $_SESSION['$senha'] = $_POST['senha'];
                $_SESSION['$funcao'] = $_POST['funcao'];
                echo'Você está logado';
                echo'<script>tecnico()</script>';
        }
    }
    ?>
</body>
</html>