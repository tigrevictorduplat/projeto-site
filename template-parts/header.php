<?php
    session_start();
    session_destroy();
    $_SESSION = array();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../pags/style.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Nosso Site</title>
</head>
<body>
    <header>
        <div class="head-logo">
            &nbsp;
        </div>
        <div class="head-nav">
            <ul >
                <li><a href="index.php">Home <i class="fa fa-home" ></i></a></li>
                <li><a href="pag1.php">Artista 1</a></li>
                <li><a href="pag2.php">Artista 2</a></li>
                <li><a href="pag3.php">Pag 3</a></li>
                <li><a href="about.php">Quem Somos <i class="fa fa-info" ></i></a></li>
                <li><a href="../crud/login.php">Login <i class="fa fa-user-circle" ></i></a></li>
                <li><a href="../crud/cadastro.php">Cadastre-se <i class="fa fa-user-plus" ></i></a></li>
            </ul>
        </div>
    </header>
    

