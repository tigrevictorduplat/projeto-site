<?php
date_default_timezone_set('America/Bahia');

if (isset($_POST['post_title'],$_POST['post_first_content'],$_POST['post_second_content'],$_POST['post_first_imgURL'],$_POST['post_second_imgURL'],$_POST['post_class'])){

    $postClass = $_POST['post_class'];
    $postTitle = $_POST['post_title'];
    $firstContent = $_POST['post_first_content'];
    $secondContent = $_POST['post_second_content'];
    $firstURL = $_POST['post_first_imgURL'];
    $secondURL = $_POST['post_second_imgURL'];
    
    include("conexao.php");
    mysqli_query($con,"INSERT INTO tb_posts (post_title,post_first_content,post_second_content,post_first_imgURL,post_second_imgURL,post_class) VALUES ('$postTitle','$firstContent','$secondContent','$firstURL','$secondURL','$postClass')");
}
?>


<?php
include ("conexao.php");
$result = mysqli_query($con, "SELECT * from tb_posts");
?>
<div class="container">
<table >
    <tr>
        <th>ID</th>
        <th>Titulo</th>
        
</tr>
<?php while ($row = mysqli_fetch_array ($result)){
    ?>
    <tr>
    <td><?= $row["post_id"]; ?> </td>
    <td><?= $row["post_title"]; ?> </td>
    <td><a href="alterar.php?post_id=<?= $row['post_id'];?>"?>Editar Post</a></td>
</tr>
<?php
} 
?>
<p><a href="inserir.php">ADICIONAR NOVA POSTAGEM</a></p>

<p><a href="../pags/index.php">VOLTAR PARA A PÁGINA PRINCIPAL</a></p>