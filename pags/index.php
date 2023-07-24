<?php include("../template-parts/header.php"); ?>
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