<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content=" FRONT DEV ">
    <link rel="shortcut icon" href="./assets/img/flaticon.png" type="image/x-icon">
    <!-- RESET CSS -->
    <link rel="stylesheet" href="assets/css/reset.css">
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
                    <img src="assets/img/sobre__foto_191x318_eve.png" alt="foto do integrante da equipe">
                    <h3>Evelyn</h3>
                    <p>Sou apaixonado por tecnologia e por tudo que envolve inovação e criatividade. Também amo jogos, que me inspiram a pensar estrategicamente a buscar sempre a melhor solução. Em tudo que faço, me dedico ao máximo para entregar resultados excepcionais, com foco em qualidade e excelência.</p>
                    <div class="social">
                        <a href="https://github.com/evelyn" target="_blank">
                            <i class='bx bxl-github'></i></a>
                        <a href="https://github.com/evelyn" target="_blank">
                            <i class='bx bxl-instagram'></i></a>
                        <a href="https://github.com/evelyn" target="_blank">
                            <i class='bx bxl-linkedin'></i></a>
                    </div>
                </div>
                <div class="equipe__box">
                    <img src="assets/img/sobre__foto_191x318_caique.png" alt="foto do integrante da equipe">
                    <h3>Caique</h3>
                    <p>Minha abordagem estratégica e orientada para o futuro garante que cada decisão seja tomada com base em inovação, eficiência e resultados de longo prazo. Busco constantemente otimizar processos, motivar minha equipe e antecipar tendências do mercado para manter a empresa competitiva e em constante evolução. Minha liderança é guiada pela determinação, planejamento sólido e compromisso com a excelência.</p>
                    <div class="social">
                        <a href="https://github.com/evelyn" target="_blank">
                            <i class='bx bxl-github'></i></a>
                        <a href="https://github.com/evelyn" target="_blank">
                            <i class='bx bxl-instagram'></i></a>
                        <a href="https://github.com/evelyn" target="_blank">
                            <i class='bx bxl-linkedin'></i></a>
                    </div>
                </div>
                <div class="equipe__box">
                    <img src="assets/img/sobre__foto_191x318_iara.png" alt="foto do integrante da equipe">
                    <h3>Iara</h3>
                    <p>Com uma mente criativa alimentada por viagens, momentos de instrospecção em casa e a paixão pela dança, encontro equilibrio entre inspiração e foco. Cada experiência, seja explorando novos lugares ou apreciando a fluidez dos movimentos, contribui para criar projetos digitais inovadores e harmoniosos.</p>
                    <div class="social">
                        <a href="https://github.com/evelyn" target="_blank">
                            <i class='bx bxl-github'></i></a>
                        <a href="https://github.com/evelyn" target="_blank">
                            <i class='bx bxl-instagram'></i></a>
                        <a href="https://github.com/evelyn" target="_blank">
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
                    <a href="https://agenciatipi03.smpsistema.com.br/aluno/evelyn/newcyber/index.html" target="_blank">
                        <img src="assets/img/sobre__port_foto_newCyber.png" alt="site New Cyber" class="img-site-cliente">
                    </a>
                    <h5>New Cyber</h5>
                </div>

                <div class="site-cliente">
                    <a href="https://agenciatipi03.smpsistema.com.br/aluno/evelyn/diabete/public/" target="_blank">
                        <img src="assets/img/sobre__port_foto_glicoLife.jpg" alt="site New Cyber" class="img-site-cliente">
                    </a>
                    <h5>GlicoLife</h5>
                </div>



            </div>

            <a href="contato.php" class="botao-contato">Entre em contato!</a>
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