<?php include("../template-parts/header.php"); ?>
<div class="container">
<main>
    <h2>Conteudo Principal</h2>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
        Nisi, voluptate aliquam aperiam vero quidem ea, fugit dolores <br>
        placeat quos quaerat distinctio sunt dignissimos molestias <br>
        ducimus suscipit corrupti atque similique excepturi.
    </p>
</main>    
<hr>
<?php
$postID = 1; 
include("../template-parts/content.php"); 
?>
<hr>
<?php
$postID = 3; 
include("../template-parts/content.php"); 
?>


</div>
<?php include("../template-parts/footer.php"); ?>