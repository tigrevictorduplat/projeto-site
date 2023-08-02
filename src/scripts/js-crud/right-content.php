<?php 
    header('Content-Type:application/json');

    $pdo = new PDO('mysql:host=localhost;dbname=banco-site;','root','');
    $statment = $pdo -> prepare('SELECT * FROM tb_extras');
    $statment -> execute();
    echo json_encode($statment->fetchAll(PDO::FETCH_ASSOC));
    
    $statment = $pdo -> prepare('SELECT * FROM tb_post');
    $statment -> execute();
    echo json_encode($statment->fetchAll(PDO::FETCH_ASSOC));

