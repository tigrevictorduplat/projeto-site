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

<?php
$postID = 1; 
include("../template-parts/content.php"); 
?>

<?php
$postID = 2; 
include("../template-parts/content.php"); 
?>

</section>
</div>
<?php include("../template-parts/footer.php"); ?>