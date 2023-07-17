<?php
$con =  mysqli_connect("localhost","root","");
    if (!$con) {
        echo("Conexão Inválida!" .mysqli_error($con));
    };

    mysqli_select_db($con,"banco-site");
?>