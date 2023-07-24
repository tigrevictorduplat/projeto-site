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
<div class="container">
    <header>
        <div class="head-logo">
            &nbsp;
        </div>
        <div class="head-nav">
            <ul >
                <li><a href=""><i class="fa fa-search" ></i></a></li>
                <li><a href="../crud/login.php"><i class="fa fa-cog" ></i></a></li>
                
            </ul>
        </div>
    </header>


