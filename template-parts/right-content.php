<?php
include("../crud/conexao.php"); 

$resultContent = mysqli_query($con,"SELECT * FROM tb_post WHERE `post_id` = '$extraID' ");
$mainContent = mysqli_fetch_array($resultContent);

$resultExtra = mysqli_query($con,"SELECT * FROM tb_extras WHERE `extra_id` = '$extraID' ");
$rightContent = mysqli_fetch_array($resultExtra);
?>
<section class="right-content">
     <h2>SpotMy</h2>
    <figure class="album-img">
        <img src="<?= $rightContent['extra_img'] ?>" alt="Imagem do Tópico Atual">
    </figure>
    <h2><?=$mainContent['post_title']?></h2>
    <p><?= $rightContent['extra_subtitle'] ?></p>
    <div class="tracker">
        <progress value="2" max="100"></progress> <br>
        <i class="fa fa-play-circle fa-4x"></i>
    </div>
</section>