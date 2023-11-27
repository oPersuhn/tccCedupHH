<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/css/signprof.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
  
  <link rel="shortcut icon" href="../assets/images/icon.ico" type="image/x-icon">
  <title>Entre no seu perfil de Professor</title>
</head>

<body>
  <div class="container">
    <div class="card">
      <form method="post" action="loginprof.php">
        <h1>Entrar</h1>


        <div class="label-float">
          <input type="text" id="matricula" name="idprofessores" placeholder="" required />
          <label for="matricula">Matrícula</label>
        </div>

        <div class="label-float">
          <input type="password" id="senha" name="senha" placeholder="" required />
          <label for="senha">Senha</label>
          <i class="bi bi-eye-fill" id="btn-senha" onclick="mostrarSenha()" 
          style='position: absolute;
          font-size: 30px;
          cursor: pointer;
          right: 5%;
          color: #fff'>
          </i>
        </div>

        <div class="justify-center">
          <button type="submit">Entrar</button>
        </div>
      </form>
    </div>
  </div>
  <script src="../assets/js/sign.js"></script>
</body>

</html>