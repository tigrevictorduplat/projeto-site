<?php
include("crud-templates/crud-header.php");

if (isset($_POST['post_title'],$_POST['post_first_content'],$_POST['post_second_content'],$_POST['post_first_imgURL'],$_POST['post_second_imgURL'],$_POST['post_class'])){

    $postClass = $_POST['post_class'];
    $postTitle = $_POST['post_title'];
    $firstContent = $_POST['post_first_content'];
    $secondContent = $_POST['post_second_content'];
    $firstURL = $_POST['post_first_imgURL'];
    $secondURL = $_POST['post_second_imgURL'];
    
    include("conexao.php");
    mysqli_query($con,"INSERT INTO tb_post (post_title,post_first_content,post_second_content,post_first_imgURL,post_second_imgURL,post_class) VALUES ('$postTitle','$firstContent','$secondContent','$firstURL','$secondURL','$postClass')");
}
?>

<div class="admin-views">
<?php
include ("conexao.php");

$result = mysqli_query($con, "SELECT * from tb_index");
?>
<div class="admin-index">
<table>
    <tr>
        <th>Página 1</th>
        <th>Página 2</th>
        <th>Página 3</th>
    </tr>
<?php while ($indexArray = mysqli_fetch_array ($result)){
    ?>
    <tr>
    <td><?= $indexArray["index_pag1"]; ?></td>
    <td><?= $indexArray["index_pag2"]; ?> </td>
    <td><?= $indexArray["index_pag3"]; ?> </td>
</tr>
<?php
} 
?>
<tr>
    <td colspan="3" style="text-align: center;">
    <a href="alterar-index.php?index_config_id=<?= $indexArray['index_config_id'];?>"?>EDITAR EXIBIÇÃO</a>
    </td>
</tr>
</table>
</div>
<br>
<br>
<?php
$result = mysqli_query($con, "SELECT * from tb_post");
?>
<div class="admin-pag">
<table>
    <tr>
        <th>ID</th>
        <th>Titulo</th>
        <th>Conteudo</th>
        <th>Ação</th>
    </tr>
<?php while ($pagArray = mysqli_fetch_array ($result)){
    ?>
    <tr>
    <td><?= $pagArray["post_id"]; ?> </td>
    <td><?= $pagArray["post_title"]; ?> </td>
    <td><?= $pagArray["post_first_content"]; ?> </td>
    <td><a href="alterar.php?post_id=<?= $pagArray['post_id'];?>"?>Editar Página</a></td>
</tr>
<?php
} 
?>
<tr>
    <td colspan="4" style="text-align: center;">
    <a href="inserir.php">ADICIONAR NOVA POSTAGEM</a>
    </td>
</tr>
</table>
</div>
<br>
<br>
<?php
$result = mysqli_query($con, "SELECT * from tb_about");
?>
<div class="admin-about">
<table>
    <tr>
        <th>Quem Somos</th>
        <th>Missão</th>
        <th>Valores</th>
        <th>Ação</th>
    </tr>
<?php while ($aboutArray = mysqli_fetch_array ($result)){
    ?>
    <tr>
    <td><?= $aboutArray["about_who"]; ?> </td>
    <td><?= $aboutArray["about_mission"]; ?> </td>
    <td><?= $aboutArray["about_valors"]; ?> </td>
    <td><a href="alterar-about.php?about_id=<?= $aboutArray['about_id'];?>"?>Editar Sobre Nós</a></td>
</tr>
<?php
} 
?>

</table>
    </div>


<?php 
include("crud-templates/crud-footer.php");
?>