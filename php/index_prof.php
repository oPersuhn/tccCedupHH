<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Projeto de conclusão de curso- MVMT GYM">
    <meta name="author" content="Ruan Mouzinho">
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet">
        <link rel="shortcut icon" href="../assets/images/icon.ico" type="image/x-icon">
    <title>Sou Professor</title>
    <!--
    
    TemplateMo 548 Training Studio
    
    https://templatemo.com/tm-548-training-studio
    
    -->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">

    <link rel="stylesheet" href="../assets/css/styleprof.css">


</head>

<body>




    <!-- ***** Header Area Start ***** -->



    <!-- ***** Header Area End ***** -->
    <?php

        session_start();
        $conn = new mysqli("localhost:3306", "root", "Augusto@17", "mvmtgym");
        
        if ($conn->connect_error) {
            die("Falha na conexão com o banco de dados: " . $conn->connect_error);
        }

if (isset($_SESSION["idprofessores"])) {
    $idProfessor = $_SESSION["idprofessores"];

    // Consulta ao banco de dados para obter o nome do professor baseado no $idProfessor
    $sql = "SELECT nomeprofessor FROM professores WHERE idprofessores = ?";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die("Erro na preparação da consulta: " . $conn->error);
    }

    $stmt->bind_param("s", $idProfessor);
    $stmt->execute();
    $stmt->bind_result($nomeProfessor);
    $stmt->fetch();

    // Agora $nomeProfessor contém o nome do professor logado
        echo '<header class="header-area header-sticky">';
        echo '<div class="container">';
        echo '<div class="row">';
        echo '<div class="col-12">';
        echo '<nav class="main-nav">';
        echo '<a href="./index.php" class="logo">MVMT<em>GYm</em></a>';
        echo '<ul class="nav">';
        echo "<p id='user-nav'>Área do Professor - Bem-vindo, $nomeProfessor!</p>";

        echo '</ul>';
        echo '<a class="menu-trigger">';
        echo '<span>Menu</span>';
        echo '</a>';
        echo '</nav>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</header>';
    } else {
        // Se não estiver logado, continue com o cabeçalho original
        // ... (seu cabeçalho existente)
    }
    ?>
    <section class="section" id="schedule">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading dark-bg">

                        <p>Solicitações de aulas por alunos</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="schedule-table filtering">
                        <table>
                            <tbody>
                                <div class="agenda">
                                    <h2 style="color:#10f810;
                                               margin-button: 5px">Minha Agenda</h2>
                                    <table>
                                        <thead>
                                        </thead>
                                        <tbody>
                                            <?php include 'agendaprof.php'; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

</html>