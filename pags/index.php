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
<hr id = "first-break">
<?php
$postID = $currentPag['index_pag2']; 
include("../template-parts/content.php"); 
?>
<hr id = "second-break">
<?php
$postID = $currentPag['index_pag3']; 
include("../template-parts/content.php"); 
?>
</div>
<?php
$extraID = $currentPag['index_pag2']; 
include("../template-parts/right-content.php"); 
?>
</div>
<?php include("../template-parts/footer.php"); ?>