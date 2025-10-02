<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'vedors/email/Exception.php';
require 'vedors/email/PHPMailer.php';
require 'vedors/email/SMTP.php';
// Inicializa as variáveis para as mensagens de feedback no HTML
// Captura o parâmetro 'ok' da URL após o redirecionamento
$ok = isset($_GET['ok']) ? (int)$_GET['ok'] : 0;
// $okDb é mantido para fins de estrutura, mas não é usado para DB aqui
$okDb = 0;
$nome = ''; // Inicializa $nome para evitar Notice no bloco de mensagens

// 1. Verifica se o formulário foi enviado via POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // 2. Captura e sanitiza as variáveis do formulário para evitar ataques XSS
    // Se a variável não estiver definida, ela recebe uma string vazia.
    $nome    = isset($_POST['nome']) ? htmlspecialchars($_POST['nome']) : '';
    $email   = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
    $fone    = isset($_POST['fone']) ? htmlspecialchars($_POST['fone']) : '';
    $mens    = isset($_POST['mens']) ? htmlspecialchars($_POST['mens']) : '';
    $empresa = isset($_POST['empresa']) ? htmlspecialchars($_POST['empresa']) : '';

    // Envio de e-mail
    $mail = new PHPMailer(true);
    try {
        // Configurações do Servidor
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER; // Descomente para ver o log de debug!
        $mail->isSMTP();
        $mail->Host       = 'br61-cp.valueserver.com.br';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'tipi03@smpsistema.com.br';
        $mail->Password   = 'Tipi03@123'; // Mantenha a senha segura no seu código original
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;
        $mail->CharSet    = 'UTF-8'; // Adiciona suporte a caracteres especiais

        // Destinatários
        $mail->setFrom('tipi03@smpsistema.com.br', 'Front Dev');
        $mail->addAddress('fernanda.adesanto@senacsp.edu.br');

        // Conteúdo
        $mail->isHTML(true);
        $mail->Subject = 'Front Dev - Contato';
        $mail->Body = "
            <strong>Nome:</strong> $nome <br>
            <strong>Email:</strong> $email <br>
            <strong>Telefone:</strong> $fone <br>
            <strong>Empresa:</strong> $empresa <br>
            <strong>Mensagem:</strong> $mens <br>
        ";

        $mail->send();

        // Redirecionamento após o envio BEM-SUCEDIDO
        // Adiciona ?ok=1 na URL para exibir a mensagem de sucesso
        header("Location: contato.php?ok=1");
        exit();
    } catch (Exception $e) {
        // Em caso de erro, registre a mensagem e redirecione
        error_log("Messagem não enviada: {$mail->ErrorInfo}");
        // Adiciona ?ok=2 na URL para exibir a mensagem de erro
        header("Location: contato.php?ok=2&nome=" . urlencode($nome)); // Passa o nome para a mensagem de erro
        exit();
    }
} // Fim do bloco if (POST)

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="FRONT DEV ">
    <link rel="shortcut icon" href="./assets/img/flaticon.png" type="image/x-icon">
    <title>FrontDev - Contato</title>
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;900&family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">

    <link rel="stylesheet" href="assets/css/lity.min.css">
    <link rel="stylesheet" href="assets/css/estilo.css">


</head>


<body id="dark-mode-toggle">
    <?php require_once('conteudo/topo.php');  ?>
    <main>
        <section class="pgcontato">
            <img src="./assets/img/pgContato.png" alt="">
            <div class="background">
                <div class="caixa">
                    <div class="contato-info">
                        <h2>Entre em Contato</h2>
                        <p>Pronto para transformar ideias em resultados?<br>Clique agora e descubra como podemos levar seu negócio ao próximo nível!</p>
                        <ul>
                            <li>
                                <img src="./assets/img/local.png" alt="Ícone co-working" class="icone">
                                <p><strong>co-working:</strong> <br> Avenida Marechal Tito, 500<br>São Paulo</p>
                            </li>
                            <li>
                                <img src="./assets/img/email.png" alt="Ícone email" class="icone">
                                <p><strong>Email:</strong> <br>frontdev@gmail.com</p>
                            </li>
                            <li>
                                <img src="./assets/img/telefone.png" alt="Ícone telefone" class="icone">
                                <p><strong>Ligue para nós:</strong> (11) 99999-9999</p>
                            </li>
                        </ul>
                    </div>
                    <div class="form-caixa">
                        <h2>Envie sua Mensagem e faça seu <span>Orçamento!</span></h2>

                        <?php
                        // Bloco de feedback do usuário
                        if ($ok == 1) {
                            // Se o nome não foi capturado no redirecionamento, exibe uma mensagem genérica
                            $nome_feedback = isset($_GET['nome']) ? htmlspecialchars($_GET['nome']) : '';
                            echo ('<h3 style="color: green;"> ' . (!empty($nome_feedback) ? $nome_feedback . ', ' : 'Sua') . ' mensagem foi enviada com sucesso! </h3>');
                        } elseif ($ok == 2) {
                            $nome_feedback = isset($_GET['nome']) ? htmlspecialchars($_GET['nome']) : 'Usuário';
                            echo ('<h3 style="color: red;"> ' . $nome_feedback . ' , não foi possível enviar sua mensagem. Tente novamente! </h3>');
                        }
                        ?>

                        <form method="POST" action="contato.php">
                            <input type="text" name="nome" placeholder="Nome" required>
                            <input type="tel" name="fone" placeholder="Telefone" required>
                            <input type="email" name="email" placeholder="Email" required>
                            <input type="text" name="empresa" placeholder="Empresa">
                            <textarea name="mens" placeholder="Mensagem" cols="50" required></textarea>
                            <button type="submit">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section class="mapa">
            <h3>Estamos Localizados</h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.91029141648!2d-46.40244792484666!3d-23.49961625902058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce61413a936a6f%3A0xd6ef709121a2253c!2sAv.%20Marechal%20Tito%2C%20500%20-%20S%C3%A3o%20Miguel%20Paulista%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2008010-000!5e0!3m2!1spt-BR!2sbr!4v1717697387340!5m2!1spt-BR!2sbr"
                width="100%" height="400px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>

    </main>

    <?php require_once('conteudo/footer.php'); ?>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/lity.min.js"> </script>
    <script src="assets/js/script.js"></script>
    <script src="dark-mode.js" defer></script>
</body>

</html>