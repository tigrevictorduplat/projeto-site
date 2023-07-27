<?php include("../template-parts/header.php"); ?>
<div class="container">
    <div class="content">
<?php
include ("../crud/conexao.php");

$result = mysqli_query($con, "SELECT * from tb_index");
$currentPag = mysqli_fetch_array ($result);
$postID = $currentPag['index_pag1']; 
include("../template-parts/content.php"); 
?>
<hr>
<?php
$postID = $currentPag['index_pag2']; 
include("../template-parts/content.php"); 
?>
<hr>
<?php
$postID = $currentPag['index_pag3']; 
include("../template-parts/content.php"); 
?>
</div>
<section class="right-content">
     <h2>SpotMy</h2>
    <figure class="album-img">
        <img src="../src/img/album.jpg" alt="Imagem do Tópico Atual">
    </figure>
    <h2>Nome da Música (Tópico)</h2>
    <p>Nome do Artista</p>
    <div class="tracker">
        <progress value="2" max="100"></progress> <br>
        <i class="fa fa-play-circle fa-4x"></i>
    </div>
</section>
</div>
<?php include("../template-parts/footer.php"); ?>