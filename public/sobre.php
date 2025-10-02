<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content=" FRONT DEV ">
    <link rel="shortcut icon" href="./assets/img/flaticon.png" type="image/x-icon">
    <!-- RESET CSS -->
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;900&family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href=".assets/estilo.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <title>FrontDev</title>
    <!-- ANIMATE CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- SLICK CSS -->
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">
    <!--  LITY CSS -->
    <link rel="stylesheet" href="assets/css/lity.min.css">
    <link rel="stylesheet" href="assets/css/estilo.css">
</head>


<body id="dark-mode-toggle">
    <?php require_once('conteudo/topo.php');  ?>

    <main>
        <section class="sobre__banner">
            <img id="sobre__banner_img" src="assets/img/sobre__foto_banner_1.jpg" alt="foto banner página sobre">
            <h2 id="sobre__banner_texto">Nosso Coworking</h2>
        </section>

        <!-- nossa historia -->
        <section class="diferencial_agencia">
            <h2>Nossa História</h2>
            <p>Fundada em 06 de agosto de 2024, no coração de São Miguel Paulista, a Front Dev é uma agência jovem e ousada, especializada em transformar ideias em experiências digitais impactantes.</p>
            <p>Acreditamos que cada projeto carrega sua própria identidade. Por isso, adotamos uma <strong>abordagem personalizada</strong>, pensada nos objetivos e desafios de cada cliente. Nossa equipe é formada por profissionais criativos, apaixonados por design, desenvolvimento e inovação digital.</p>
            <p>Mais do que criar sites, buscamos <strong>construir parcerias duradouras</strong>, estratégias de crescimento e colaboração verdadeira. Prezamos pela <strong>transparência e comunicação aberta</strong>, porque sabemos que os melhores resultados surgem do trabalho em conjunto.</p>
            <p>Nossos diferenciais vão além da estética e funcionalidade. Trabalhamos com <strong>tecnologias sustentáveis</strong>, priorizamos a <strong>acessibilidade digital</strong> e entregamos soluções que impactam positivamente pessoas e marcas.</p>
            <p>Se você está em busca de uma presença online marcante, moderna e com propósito, a Front Dev é a parceira ideal. Vamos juntos criar algo incrível ?</p>
        </section>

        <section class="sobre__missao_visao_valores">
            <div class="site">
                <div class="sobre__container">
                    <h2>Missão</h2>
                    <p>O propósito da FrontDev é viabilizar a inserção da sua empresa no mapa digital e por consequência abrir uma porta tecnológica com infinitas oportunidades.</p>
                </div>
                <div class="sobre__container">
                    <h2>Visão</h2>
                    <p>Visamos estar entre os melhores na área de desenvolvimento de páginas web e para isso contamos com uma equipe técnica que se mantém atualizada quanto as práticas do mercado.</p>
                </div>
                <div class="sobre__container">
                    <h2>Valores</h2>
                    <p>Os princípios que norteiam a FrontDev são ética, fala simples e com transparência sobre todo o processo.</p>
                </div>
            </div>
        </section>

        <!-- equipe -->
        <section class="sobre__equipe">
            <div class="site_equipe">
                <h2>Equipe</h2>
                <div class="equipe__box">
                    <img src="assets/img/equipe_foto1.png" alt="foto do integrante da equipe">
                    <h3>Fernanda</h3>
                    <p>Dev com alma de exploradora digital, codifico entre um carinho no gato e um estoque secreto de chocolate. Se tem bug, eu resolvo</p>
                    <div class="social">
                        <a href="https://github.com/Bl0nd" target="_blank">
                            <i class='bx bxl-github'></i></a>
                        <a href="https://www.instagram.com/diasfeeh/" target="_blank">
                            <i class='bx bxl-instagram'></i></a>
                        <a href="https://www.linkedin.com/in/diasfeeh/" target="_blank">
                            <i class='bx bxl-linkedin'></i></a>
                    </div>
                </div>
                <div class="equipe__box">
                    <img src="assets/img/equipe_foto2.png" alt="foto do integrante da equipe">
                    <h3>Giovani</h3>
                    <p>Nada mais do que um programador viciado em código, movido a altas doses de cafeína</p>
                    <div class="social">
                        <a href="https://github.com/not15-cpu" target="_blank">
                            <i class='bx bxl-github'></i></a>
                        <a href="https://www.instagram.com/useless.persooonnn/" target="_blank">
                            <i class='bx bxl-instagram'></i></a>
                        <a href="https://www.linkedin.com/in/giovani-henrique-braz-nunes-232007264/" target="_blank">
                            <i class='bx bxl-linkedin'></i></a>
                    </div>
                </div>
                <div class="equipe__box">
                    <img src="assets/img/equipe_foto3.png" alt="foto do integrante da equipe">
                    <h3>Iara</h3>
                    <p>Com uma mente criativa alimentada por viagens, momentos de instrospecção em casa e a paixão pela dança, encontro equilibrio entre inspiração e foco. Cada experiência, seja explorando novos lugares ou apreciando a fluidez dos movimentos, contribui para criar projetos digitais inovadores e harmoniosos.</p>
                    <div class="social">
                        <a href="https://github.com/IaraFreitas" target="_blank">
                            <i class='bx bxl-github'></i></a>
                        <a href="https://www.instagram.com/if.dev_/" target="_blank">
                            <i class='bx bxl-instagram'></i></a>
                        <a href="https://www.linkedin.com/in/iara-freitas-if/" target="_blank">
                            <i class='bx bxl-linkedin'></i></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="sobre__chamada_para_acao">
            <h2>Portfólio</h2>

            <div class="sobre__chamada_para_acao_clientes">
                <div class="site-cliente">
                    <a href="https://agenciatipi03.smpsistema.com.br/aluno/iara/ideiatech360/public/" target="_blank">
                        <img src="assets//img/sobre__port_foto_ideiaTech.png" alt="site Ideia Tech 360" class="img-site-cliente">
                    </a>
                    <h5>Ideia Tech 360</h5>
                </div>

                <div class="site-cliente">
                    <a href="https://agenciatipi03.smpsistema.com.br/aluno/iara/frontdev/public/" target="_blank">
                        <img src="assets/img/sobre__port_foto_frontDev.png" alt="site Agência Front Dev (V1)" class="img-site-cliente">
                    </a>
                    <h5>Agência Front Dev (V1)</h5>
                </div>

                <div class="site-cliente">
                    <a href="https://achievo.conexusnet.org/" target="_blank">
                        <img src="assets/img/sobre__port_achievo.png" alt="site Achievo" class="img-site-cliente">
                    </a>
                    <h5>Achievo</h5>
                </div>

                <div class="site-cliente">
                    <a href="https://agenciatipi03.smpsistema.com.br/aluno/fernanda/studio/" target="_blank">
                        <img src="assets/img/sobre__port_studio.png" alt="site de tatuagem" class="img-site-cliente">
                    </a>
                    <h5>Studio</h5>
                </div>

            </div>

            <a href="contato.php" class="botao-contato">Entre em contato !</a>
        </section>


    </main>

    <?php require_once('conteudo/footer.php'); ?>


    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <!-- LITY JS -->
    <script src="assets/js/lity.min.js"> </script>
    <script src="assets/js/script.js"></script>
</body>

</html>