<?php
date_default_timezone_set('America/Bahia');

if (isset($_POST['titulo'],$_POST['conteudo'],$_POST['autor'])){
    $titulo = $_POST['titulo'];
    $conteudo = $_POST['conteudo'];
    $autor = $_POST['autor'];
    $creationdate = date('Y-m-d');
    
    include("conexao.php");
    mysqli_query($con,"INSERT INTO tb_posts (post_title,post_content,post_author,post_creation) VALUES (
        '$titulo' ,
        '$conteudo',
        '$autor',
        '$creationdate',
    )");
}
?>


<?php
include ("conexao.php");
$result = mysqli_query($con, "SELECT * from tb_posts");
?>
<div class="container">
<table >
    <tr>
        <th>Titulo</th>
        <th>Data de Criação</th>
        <th>Última Atualização</th>
        <th>Autor do Post</th>
</tr>
<?php while ($row = mysqli_fetch_array ($result)){
    ?>
    <tr>
    <td> <?= $row ["post_title"]; ?> </td>
        <td> <?= $row ["post_creation"]; ?> </td>
        <td> <?= $row ["post_edit"]; ?> </td>
        <td> <?= $row ["post_author"]; ?> </td>
        <td><a href="login.php?id=<?= $row["ID"] ?>&option=alterar">ALTERAR</a></td>
</tr>
<?php } 
?>