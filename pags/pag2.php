<?php include("../template-parts/header.php"); ?>

<div class="container">
<main>
<?php
include ("../crud/conexao.php");
$result = mysqli_query($con, "SELECT * from tb_index");
$currentPag = mysqli_fetch_array ($result);
$postID = $currentPag['index_pag2']; 
include("../template-parts/content.php"); 
?>
</main>    
</div>
<?php include("../template-parts/footer.php"); ?>