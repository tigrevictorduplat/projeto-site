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
    <title>Nosso Site</title>
</head>
<body>
    <header>
        <div class="head-logo">
            &nbsp;
        </div>
        <div class="head-nav">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="pag1.php">Artista 1</a></li>
                <li><a href="pag2.php">Artista 2</a></li>
                <li><a href="pag3.php">Pag 3</a></li>
                <li><a href="about.php">Quem Somos</a></li>
                <li><a href="../crud/login.php">Login</a></li>
                <li><a href="../crud/cadastro.php">Cadastre-se</a></li>
            </ul>
        </div>
    </header>
    

