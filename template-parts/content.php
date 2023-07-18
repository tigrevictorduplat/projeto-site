<?php

include ("../crud/conexao.php");
$result = mysqli_query($con, "SELECT * from tb_posts");
$row = mysqli_fetch_array ($result);

if ($postNumber == 2);{
    $postID = $row['post_id']+1;
    $result = mysqli_query($con, "SELECT * from tb_posts WHERE `post_id` = '$postID'");
    $row = mysqli_fetch_array ($result);
}

 echo(
    '<h2>'.$row['post_title'].'</h2>' .
    '<p>'.$row['post_content'].'</p>' .
    '<p>Escrito por <strong>'.$row['post_author'].'</strong></p>' 
 );
    
    
