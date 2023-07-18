
<?php
include("../crud/conexao.php"); 
$result = mysqli_query($con,"SELECT * FROM tb_post WHERE `post_id` = '$postID' ");
$row = mysqli_fetch_array($result);
?>
<div class="<?= $row['post_class']?>">

    <img src="<?= $row['post_first_imgURL'] ?>" alt="Imagem Principal">
    <h2><?=$row['post_title']?></h2>

    <p><?= $row['post_first_content']  ?></p>

    <img src="<?= $row['post_second_imgURL']?>" alt="Imagem Secundária">

    <p><?= $row['post_second_content'] ?></p>

</div>