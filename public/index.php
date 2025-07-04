<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="FRONT DEV">
    <link rel="shortcut icon" href="./assets/img/logo.png" type="image/x-icon">
    <title>FrontDev</title>
    <!-- RESET CSS -->
    <link rel="stylesheet" href="assets/css/reset.css">
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
        <section>
            <video src="./assets/img/Banner para site com aviso de estamos em manutenção.mp4" loop width="100%" autoplay muted loop
                playsinline poster style="pointer-events: none;"></video>
            <div class="site">
                <div class="texto-video">
                    <h2>Front Dev<br>Agência de criação de sites</h2>
                    <p>Tudo que seu negócio precisa !</p>
                </div>
            </div>
        </section>

        <section class="nossa-historia wow animate__animated animate__fadeInUp">
            <div class="site">
                <div>
                    <h3 class="titulo">Nossa História</h3>
                </div>

                <div class="conteudo">

                    <div class="coluna-esquerda">
                        <p>
                            Somos uma agência jovem e inovadora, especializada no desenvolvimento de sites modernos, funcionais e personalizados.
                            Apesar de estarmos começando agora, trazemos uma visão atual e focada nas tendências do mercado digital, oferecendo
                            soluções criativas e tecnológicas para empresas que desejam se destacar online.
                        </p>
                        <p>Nosso compromisso é criar sites que não apenas representem a sua marca, mas também entreguem resultados reais, combinando design atrativo, performance e estratégia. Juntos, vamos transformar ideias em projetos digitais de sucesso!</p>
                        <a href="sobre.php" class="btn-veja-mais">Veja Mais</a>
                    </div>

                    <div class="predio">
                        <img src="./assets/img/predio.png" alt="nossa-historia">
                    </div>

                    <div class="coluna-direita">
                        <ul class="lista-itens">
                            <li class="item">
                                <div class="icone wow animate__animated animate__fadeInDown">
                                    <img src="./assets/img/icone1.png" alt="Ícone 1">
                                </div>
                                <p class="wow animate__animated animate__fadeInDown">Transformamos Ideias em Experiências Digitais.</p>
                            </li>

                            <li class="item">
                                <div class="icone wow animate__animated animate__fadeInDown">
                                    <img src="./assets/img/icone2.png" alt="Ícone 2">
                                </div>
                                <p class="wow animate__animated animate__fadeInDown">Inovação de Quem Começa com Foco no Futuro.</p>
                            </li>

                            <li class="item">
                                <div class="icone wow animate__animated animate__fadeInDown">
                                    <img src="./assets/img/icone3.png" alt="Ícone 3">
                                </div>
                                <p class="wow animate__animated animate__fadeInDown">Seu Sucesso Online Começa Aqui !</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="metodologia wow animate__animated animate__fadeInUp">
            <div class="site">
                <h2>Metodologia</h2>
                <div class="caixamt">

                    <div>
                        <div class="borda">
                            <h3>1</h3>
                        </div>
                        <h4>Planejamento</h4>
                        <p> Entendemos suas necessidades, definimos objetivos e traçamos a melhor estratégia.</p>
                    </div>

                    <div>
                        <div class="borda">
                            <h3>2</h3>
                        </div>
                        <h4>Design</h4>
                        <p>Desenvolvemos layouts modernos e personalizados, focados na experiência do usuário.</p>
                    </div>

                    <div>
                        <div class="borda">
                            <h3>3</h3>
                        </div>
                        <h4>Conteúdo</h4>
                        <p>Estruturamos informações relevantes e otimizadas para atrair e engajar o público.</p>
                    </div>


                    <div>
                        <div class="borda">
                            <h3>4</h3>
                        </div>
                        <h4>Desenvolvimento</h4>
                        <p>A partir do design aprovado, transformamos o projeto em um site totalmente funcional, rápido e responsivo.</p>
                    </div>

                    <div>
                        <div class="borda">
                            <h3>5</h3>
                        </div>
                        <h4>Entrega</h4>
                        <p>Revisão final, validações e publicação do seu projeto com acompanhamento dos acessos e do desempenho.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="balao wow animate__animated animate__fadeInUp">
            <div class="site">
                <div class="textoConteudo">
                    <p class="tagline">EMPRESA DE DESENVOLVIMENTO WEB</p>
                    <h3>DESENVOLVENDO SUA PRESENÇA ONLINE</h3>
                    <p class="descri">
                        Nossos sites são desenvolvidos para que você tenha autonomia em gerenciar seu próprio conteúdo.<br>Através de um painel administrativo você terá liberdade para adicionar textos, imagens, vídeos e até mesmo criar páginas adicionais. No final do desenvolvimento do seu site você receberá um login e senha e poderá alimentá-lo com:
                    </p>
                    <div class="FVT">
                        <div class="iconFVT">📷 Fotos</div>
                        <div class="iconFVT">🎥 Vídeos</div>
                        <div class="iconFVT">📝 Textos</div>
                    </div>
                </div>
                <div>
                    <img src="assets/img/midiasociais.png" alt="redes" />
                </div>
            </div>
            <div>
                <p><span>⭐ Criação de Sites Profissionais é a nossa missão.</span></p>
            </div>
        </section>

        <section class="swot wow animate__animated animate__fadeInUp">
            <h2>Análise SWOT</h2>

            <div class="swot-grid">
                <!-- Linha 1 -->
                <div class="swot-row">
                    <div class="swot-box forcas">
                        <img src="assets/img/forca.png" alt="Ícone Forças">
                        <div>
                            <h3>Forças</h3>
                            <p>
                                Equipe altamente qualificada e comprometida com resultados excepcionais.<br>
                                Atendimento personalizado, oferecendo soluções específicas para cada cliente.<br>
                                Uso de tecnologias modernas e metodologias ágeis para maior eficiência.<br>
                                Histórico comprovado de sucesso em projetos e alta retenção de clientes
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Linha 2 -->
                <div class="swot-row">
                    <div class="swot-box oportunidades1">
                        <img src="assets/img/oportunidades.png" alt="Ícone Oportunidades 1">
                        <div>
                            <h3>Oportunidades</h3>
                            <p>
                                Expansão da demanda por soluções digitais em diversos setores.<br>
                                Possibilidade de criação de parcerias estratégicas com empresas inovadoras.<br>
                                Adaptação a novas tecnologias que aprimoram a experiência do cliente.<br>
                                Crescimento de programas de apoio a startups e pequenas empresas
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Linha 3 -->
                <div class="swot-row">
                    <div class="swot-box ameacas1">
                        <img src="assets/img/ameacas.png" alt="Ícone Ameaças 1">
                        <div>
                            <h3>Ameaças</h3>
                            <p>
                                Avanço constante de tecnologias disruptivas exige atualização contínua.<br>
                                Ambiente regulatório em transformação exige agilidade em conformidade.<br>
                                Concorrência acirrada com players globais e modelos de negócio inovadores.<br>
                                Alta demanda por soluções sob medida eleva o padrão de entrega e inovação.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </section>


        <section class="wow animate__animated animate__fadeInUp">
            <div class="promo">
                <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                        <path fill="#f0c219" fill-opacity="1" d="M0,96L40,117.3C80,139,160,181,240,181.3C320,181,400,139,480,149.3C560,160,640,224,720,208C800,192,880,96,960,90.7C1040,85,1120,171,1200,202.7C1280,235,1360,213,1400,202.7L1440,192L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
                    </svg></div>
                <div class="cor">
                    <h3>Gerando Negócio</h3>
                    <h4>Escolha a FRONT DEV e tenha seu site pronto!</h4>
                    <p>
                        Desenvolvemos sites modernos e responsivos, com<br>nossa grande experiência vamos
                        desenvolver o seu<br>projeto do início ao final, rápido, bonito e<br>principalmente, lucrativo.
                    </p>
                    <div>
                        <a href="contato.php">Mandar Email</a>
                        <a href="#servicos">Conferir nossos Serviços</a>
                    </div>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                    <path fill="#f0c219" fill-opacity="1" d="M0,96L40,117.3C80,139,160,181,240,181.3C320,181,400,139,480,149.3C560,160,640,224,720,208C800,192,880,96,960,90.7C1040,85,1120,171,1200,202.7C1280,235,1360,213,1400,202.7L1440,192L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path>
                </svg>
            </div>
        </section>

        <section class="pergunta wow animate__animated animate__fadeInUp">
            <div class="site">
                <div class="conteudo-pergunta">
                    <h3>Perguntas Frequentes</h3>
                    <details>
                        <summary>Quais serviços de desenvolvimento web vocês oferecem?</summary>
                        <div>
                            <p>Desenvolvemos websites institucionais, landing pages, sistemas personalizados e aplicativos web. Oferecemos soluções completas, desde o design até a implementação e manutenção.</p>
                        </div>
                    </details>

                    <details>
                        <summary>Quanto tempo leva?</summary>
                        <div>
                            <p>O tempo de desenvolvimento varia de acordo com o escopo do projeto. Sites simples podem levar de 4 a 6 semanas, enquanto projetos mais complexos podem levar de 8 a 12 semanas ou mais.</p>
                        </div>
                    </details>

                    <details>
                        <summary>Oferecem suporte e manutenção após o lançamento do site?</summary>
                        <div>
                            <p>Sim! Oferecemos pacotes de suporte e manutenção para garantir que o site esteja sempre atualizado e funcionando corretamente.</p>
                        </div>
                    </details>

                    <details>
                        <summary>Como é o processo de design?</summary>
                        <div>
                            <p>Trabalhamos em estreita colaboração com nossos clientes para garantir que o design atenda às suas expectativas. Apresentamos wireframes e protótipos para feedback antes de partir para a fase final de desenvolvimento.</p>
                        </div>
                    </details>

                    <details>
                        <summary>Qual é o custo para desenvolver um site?</summary>
                        <div>
                            <p>O custo varia de acordo com as necessidades específicas do projeto. Oferecemos pacotes flexíveis e personalizados com base no tamanho e complexidade do site.</p>
                        </div>
                    </details>
                </div>
            </div>
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