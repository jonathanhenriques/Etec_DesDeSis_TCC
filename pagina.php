<?php include "funcao.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php  require_once "bootstrap.php" ?>
    <title>Document</title>
</head>
<body>

    <header>

    <?php require_once "nav.php" ?>

    </header>

    <div>
        <?php include "formu.php" ?>
    </div>

    <div class="container">
    <h1>TESTE!!!!!!!</h1>
    <?php mensagem("Maior de todos"); ?>

    <div class="btn-group" role="group" aria-label="Exemplo básico">
        <button type="button" class="btn btn-secondary">Esquerda</button>
        <button type="button" class="btn btn-secondary">Meio</button>
        <button type="button" class="btn btn-secondary">Direita</button>
    </div>


    <?php require_once "carousel.php" ?>

    

   <?php require_once "administracao.php" ?>


</body>
</html>