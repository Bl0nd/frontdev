<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'vedors/email/Exception.php';
require 'vedors/email/PHPMailer.php';
require 'vedors/email/SMTP.php';
require 'admin/conexao.php';

$ok = 0;
$okDb = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nome'])) {

    // Pegando os dados do formulário
    $nome  = trim($_POST['nome']);
    $fone  = trim($_POST['fone']);
    $email = trim($_POST['email']);
    $mens  = trim($_POST['mens']);

    // Inserção no banco de dados
    try {
        $sql = "INSERT INTO tbl_contato (nome_contato, telefone_contato, email_contato, mensagem_contato, status_contato)
                VALUES (:nome, :telefone, :email, :mensagem, 'Aguardando')";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':telefone', $fone);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':mensagem', $mens);

        if ($stmt->execute()) {
            $okDb = 1;
        } else {
            throw new Exception("Erro ao inserir no banco de dados.");
        }
    } catch (PDOException $e) {
        die("Erro no banco de dados: " . $e->getMessage());
    }

    // Envio de e-mail
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.hostinger.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'tipi03@smpsistema.com.br';
        $mail->Password   = 'Senac@tipi03';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        $mail->setFrom('tipi03@smpsistema.com.br', 'Front Dev');
        $mail->addAddress('inacioevelyn86@gmail.com');

        $mail->isHTML(true);
        $mail->Subject = 'Front Dev - Contato';
        $mail->Body = "
            <strong>Nome:</strong> $nome <br>
            <strong>Email:</strong> $email <br>
            <strong>Telefone:</strong> $fone <br>
            <strong>Mensagem:</strong> $mens <br>
        ";

        $mail->send();
        $ok = 1;
    } catch (Exception $e) {
        $ok = 2;
    }

    // Redirecionamento após o envio
    header("Location: contato.php?status=$ok&db=$okDb");
    exit();
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="FRONT DEV ">
    <link rel="shortcut icon" href="./assets/img/flaticon.png" type="image/x-icon">
    <title>FrontDev/agencia-de-criacao-de-sites</title>
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
                        if ($ok == 1 && $okDb != 1) {
                            echo ("<h3> " . $nome . " , sua mensagem foi enviada! </h3>");
                        } elseif ($ok == 2) {
                            echo ("<h3> " . $nome . " , não foi possível enviar sua mensagem. </h3>");
                        }
                        ?>

                        <form>
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
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.033985270784!2d-46.43194172309075!3d-23.49528535107992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce63dd09800149%3A0x4f436ed77615106c!2sAvenida%20Marechal%20Tito%2C%201500%20-%20S%C3%A3o%20Miguel%20Paulista%2C%20S%C3%A3o%20Paulo%20-%20SP!5e0!3m2!1spt-BR!2sbr!4v1727804163748!5m2!1spt-BR!2sbr"
                width="100%" height="400px"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>

    </main>

    <?php require_once('conteudo/footer.php'); ?>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <!-- LITY JS -->
    <script src="assets/js/lity.min.js"> </script>
    <script src="assets/js/script.js"></script>
    <script src="dark-mode.js" defer></script>
</body>

</html>