<?php
date_default_timezone_set('America/Bahia');

if (isset($_POST['titulo'],$_POST['conteudo'],$_POST['autor'])){
    $titulo = $_POST['titulo'];
    $conteudo = $_POST['conteudo'];
    $autor = $_POST['autor'];
    $creationdate = date('Y-m-d');
    
    include("conexao.php");
    mysqli_query($con,"INSERT INTO tb_posts (post_title,post_content,post_author,post_creation) VALUES ('$titulo','$conteudo','$autor','$creationdate')");
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
        <th>Data de Criação</th>
        <th>Ultima Atualização</th>
        <th>Autor do Post</th>
</tr>
<?php while ($row = mysqli_fetch_array ($result)){
    ?>
    <tr>
    <td><?= $row["post_id"]; ?> </td>
    <td><?= $row["post_title"]; ?> </td>
        <td> <?= $row["post_creation"]; ?> </td>
        <td><?php
            if($row["post_update"] != "0000-00-00 00:00:00"){
            echo $row["post_update"];
            } else {
                echo ("--");
                }
        ?></td>
        <td> <?= $row["post_author"]; ?> </td>
        <td><a href="alterar.php?post_id=<?= $row['post_id'];?>"?>Editar Post</a></td>
</tr>
<?php
} 
?>
<p><a href="inserir.php">ADICIONAR NOVA POSTAGEM</a></p>

<p><a href="../pags/index.php">VOLTAR PARA A PÁGINA PRINCIPAL</a></p>