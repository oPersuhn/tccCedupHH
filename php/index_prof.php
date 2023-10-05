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
        <link rel="shortcut icon" href=".ico" type="image/x-icon">
        <title>Sou Professor</title>
        <!--
    
    TemplateMo 548 Training Studio
    
    https://templatemo.com/tm-548-training-studio
    
    -->
        <!-- Additional CSS Files -->
        <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    
        <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">
    
        <link rel="stylesheet" href="../assets/css/style.css">
        

    
    </head>
    
    <body>
    
      
    
    
        <!-- ***** Header Area Start ***** -->
        <header class="header-area header-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav class="main-nav">
                            <!-- ***** Logo Start ***** -->
                            <a href="index.html" class="logo">MVMT<em>GYm</em></a>
                            <!-- ***** Logo End ***** -->
                            <!-- ***** Menu Start ***** -->
                            <ul class="nav">
                              <h1> <em style="color:#10f810;">Área do Professor</em> </h1>
    
                            </ul>
                            <a class='menu-trigger'>
                                <span>Menu</span>
                            </a>
                            <!-- ***** Menu End ***** -->

                            
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- ***** Header Area End ***** -->

        <section class="section" id="schedule">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="section-heading dark-bg">
                            <h2> <em>Aulas agendadas</em></h2>
                            <img src="assets/images/line-dec.png" alt="">
                            <p>Solicitações de aulas por alunos</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- <div class="col-lg-12">
                        <div class="filters">
                            <ul class="schedule-filter">
                                <li class="active" data-tsfilter="monday">Segunda-Feira</li>
                                <li data-tsfilter="tuesday">Terça-Feira</li>
                                <li data-tsfilter="wednesday">Quarta-Feira</li>
                                <li data-tsfilter="thursday">Quinta-Feira</li>
                                <li data-tsfilter="friday">Sexta-Feira</li>
                            </ul>
                        </div>
                    </div> -->
                    <div class="col-lg-10 offset-lg-1">
                        <div class="schedule-table filtering">
                            <table>
                                <tbody>
                                    <div class="agenda">
                                        <h2 style="color:#10f810;">Minha Agenda</h2>
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