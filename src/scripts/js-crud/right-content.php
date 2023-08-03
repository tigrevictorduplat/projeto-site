<?php 
    header('Content-Type:application/json');

    $pdoConn = new PDO('mysql:host=localhost;dbname=banco-site;','root','');

    $statment = $pdoConn -> prepare('SELECT * FROM tb_extras');
    $statment -> execute();
    echo json_encode($statment->fetchAll(PDO::FETCH_ASSOC));
    
    $statment = $pdoConn-> prepare('SELECT * FROM tb_post');
    $statment -> execute();
    echo json_encode($statment->fetchAll(PDO::FETCH_ASSOC));

