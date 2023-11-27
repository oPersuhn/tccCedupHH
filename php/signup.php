<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/css/sign.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
  <link rel="shortcut icon" href="../assets/images/icon.ico" type="image/x-icon">
  
  <title>Cadastro - MVMT GYM</title>
</head>

<body>
  <div class="container">
    <div class="card">
      <form action="./cadastrouser.php" method="post" id="userCad">

        <h1>Cadastro</h1>
        <div class="label-float">
          <input type="text" id="nome" name="nome" required />
          <label id="labelNome" for="nome">Nome</label>
        </div>

        <div class="label-float">
          <input type="text" id="usuario" name="usuario" required />
          <label id="labelUsuario" for="usuario">Usuário</label>
        </div>

        <div class="label-float">
          <input type="text" id="email" name="email" required />
          <label id="labelEmail" for="email">E-mail</label>
        </div>

        <div class="label-float">
          <input type="number" id="altura" name="altura" required />
          <label id="labelaltura" for="altura">Altura</label>
        </div>

        <div class="label-float">
          <input type="number" id="pesoinicial" name="pesoinicial" required />
          <label id="labelPesoInicial" for="pesoinicial">Peso inicial(kg)</label>
        </div>

        <div class="label-float">
          <input type="number" id="pesometa" name="pesometa" required />
          <label id="pesometa" for="pesometa">Peso Meta(kg)</label>
        </div>
        <div class="label-float">
          <input type="password" id="senha" name="senha" required />
          <label id="labelSenha" for="senha">Senha</label>
          <i class="bi bi-eye-fill" id="btn-senha" onclick="mostrarSenha()" ></i>
        </div>

        <div class="label-float">
          <input type="password" id="confirmSenha" name="confirmSenha" required />
          <label id="labelConfirmSenha" for="confirmSenha">Confirmar Senha</label>
          <i class="bi bi-eye-fill" id="btn-senha-confirm" onclick="mostrarSenhaConfirm()" ></i>
        </div>

        <div class="label-float">
          <input type="submit" value="Cadastrar" id="btnCad">
        </div>

        <p>Já tem uma conta? <a href="./signin.php">Entre</a></p>
    </div>
    </form>
  </div>

<script src="../assets/js/sign.js"></script>
</body>

</html>