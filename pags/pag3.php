<?php include("../template-parts/header.php"); ?>

<div class="container">
<main class="post3">
<?php
include ("../crud/conexao.php");
$result = mysqli_query($con, "SELECT * from tb_index");
$currentPag = mysqli_fetch_array ($result);
$postID = $currentPag['index_pag3']; 
include("../template-parts/content.php"); 
?>
</main>    
</div>
<?php include("../template-parts/footer.php"); ?>