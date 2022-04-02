<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>HardTech | Área de Login </title>
  <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/indexcss.css">
  <link rel="stylesheet" href="css/animate.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
</head>

<body>
  <form action="recebe_login.php" method="post">
    <div class="container">
      <div class="left-section">
        <div class="header">
          <h1 class="animation a1">Bem Vindo(a)</h1>
          <h4 class="animation a2">Faça login para entrar no seu painel de associação.</h4>
        </div>
        <div class="form">
          <input type="text" class="form-field animation a3" placeholder="Nome">
          <input type="password" class="form-field animation a4" placeholder="Senha">
          <select name="funcao" id="funcao" class="form-field animation a5">
              <option value="#">Selecione a Função</option>
              <option value="adm">Presidente</option>
              <option value="func">Funcionário</option>
              <option value="tec">Técnico</option>
          </select>
          <p></p>
          <button type="submit" class="animation a6" value="LOGAR">LOGAR</button>
        </div>
      </div>
      <div class="right-section">
        <h1 id='title' class="animated fadeIn delay-3">HardTech</h1>
      </div>
    </div>
  </form>
</body>

</html>