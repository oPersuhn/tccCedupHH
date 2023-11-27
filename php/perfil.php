<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Projeto de conclusão de curso- MVMT GYM">
  <meta name="author" content="Ruan Mouzinho">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="../assets/images/icon.ico" type="image/x-icon">
  <link rel="stylesheet" href="../assets/css/styleperfil.css">
  <title>MEU PERFIL</title>
</head>

<body>  
  <header class="header-area">
    <div class="container">
      <div class="row">
        <div class="header-nav">
          <nav class="main-nav">
            <a class="logo">MVMT<em>GYm</em></a>
            <ul>
              <li id='button-header'> 
                <a href="../home.php">Home</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>

  <section class="section" id="schedule">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading dark-bg">
            <h1>Perfil de usuário</h1>

            <?php
              
              $conn = new mysqli("localhost:3306", "root", "Augusto@17", "mvmtgym");
  
              if ($conn->connect_error) {
                die("Falha na conexão com o banco de dados: " . $conn->connect_error);
              }
  
              $email = "joaosilvasantos@gmail.com"; // Substitua pelo email do usuário logado
  
              $sql = "SELECT nome, email, pesoatual, pesometa FROM usuarios WHERE email = ?";
              $stmt = $conn->prepare($sql);
              $stmt->bind_param("s", $email);
              $stmt->execute();
              $stmt->bind_result($nome, $email, $pesoatual, $metaPeso); // Adicione $metaPeso aqui
              $stmt->fetch();
              $stmt->close();
  
              echo '<div class="user-info">';
              echo "<h2>$nome</h2>";
              echo "<p>E-mail: $email</p>";
              echo "<p>Peso Atual: $pesoatual Kg</p>";
              echo '</div>';
              
            ?>

            <section class="section" id="atualizar-peso">
              <div class="container">
                <div class="row">
                  <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading dark-bg">
                      <h2 id="atualiza-peso">Atualizar informações de peso</h2>
                      <div class="card"> 
                        <form action="atualizar_usuario.php" method="post">
                          <label for="pesoatual">Novo Peso Atual:</label>
                          <input type="number" name="pesoatual" id="pesoatual" required>
                          <label for="pesometa">Nova Meta de Peso:</label>
                          <input type="number" name="pesometa" id="pesometa" required>
                          <button type="submit">Atualizar Dados</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>

            <section class="section" id="progresso">
              <div class="container">
                <div class="row">
                  <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading dark-bg">
                      <h2>Progresso em relação à meta de peso</h2>
                      <?php
                        // Defina a diferença entre a meta e o peso atual
                        $diferencaPeso = abs($metaPeso - $pesoatual);

                        // Calcule a porcentagem de progresso
                        $porcentagem = ($diferencaPeso / $metaPeso) * 100;
                      ?>
                      <div class="progresso-info">
                        <p>Peso Atual: <?php echo $pesoatual; ?> Kg</p>
                        <p>Meta de Peso: <?php echo $metaPeso; ?> Kg</p>
                        <p>Progresso: <?php echo round($porcentagem, 2); ?>%</p>
                        <div class="progresso-bar" style="width: 300px; border: 1px solid #ccc;">
                          <div class="progresso" style="width: <?php echo $porcentagem; ?>%; background-color: #10f810; height: 20px;">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>