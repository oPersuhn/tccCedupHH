<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/sign.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="shortcut icon" href="../assets/images/icon.ico" type="image/x-icon">
    

    <title>Entre na sua conta  MVMT GYM</title>
</head>
<body>
  

<div class="container">
        <div class="card">
        <form action="login.php" method="post" id="userLogin">
            <h1>Entrar</h1>
    
            <div id="msgError"><?php echo $msgError; ?></div>
    
            <div class="label-float">
                <input type="text" id="email" name="email" required />
                <label id="emailLabel" for="email">Email</label>
            </div>
    
            <div class="label-float">
                <input type="password" id="senha" name="senha" required />
                <label id="senhaLabel" for="senha">Senha</label>
                <i class="bi bi-eye-fill" id="btn-senha" onclick="mostrarSenha()" ></i>
            </div>
    
            <div class="label-float">
          <input type="submit" value="Entrar" id="btnEntrar">
        </div>
    

            <p>
              Não tem uma conta?
              <a href="../php/signup.php">
                Cadastre-se
              </a>
            </p>
            <p>
              <a href="../php/signinprof.php">
                Sou professor
              </a>
            </p>
        </form>
        </div>
    </div>
    
    
    <script src="../assets/js/sign.js"></script>   
</body>
</html>

