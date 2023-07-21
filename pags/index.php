<?php include("../template-parts/header.php"); ?>
<div class="container">
<main>
    <h2>Conteudo Principal</h2>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Nisi, voluptate aliquam aperiam vero quidem ea, fugit dolores 
        placeat quos quaerat distinctio sunt dignissimos molestias 
        ducimus suscipit corrupti atque similique excepturi.
    </p>
</main>    
<hr>
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
    <p>Subtitulo</p>
    <div class="album-img">
        Imagem
    </div>
    <p>Nome da Música (Tópico)</p>
    <small>Nome do Artista</small>
    <div>
        Barrinha de Carregamento
    </div>
</section>
<?php include("../template-parts/footer.php"); ?>