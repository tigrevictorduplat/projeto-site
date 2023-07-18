<?php
date_default_timezone_set('America/Bahia');

$postID = (isset($_GET['post_id']))? $_GET['post_id'] : $_POST['post_id'];

if(isset($_POST['autor'],$_POST['titulo'],$_POST['conteudo'])){

    $titulo = $_POST['titulo'];
    $conteudo = $_POST['conteudo'];
    $autor = $_POST['autor'];
    $updateDate = date('Y-m-d H:i:s');
    $postID = $_POST['post_id'];
       
    include("conexao.php");
    mysqli_query($con,"UPDATE tb_posts SET `post_title`= '$titulo' , `post_content` = '$conteudo', `post_author` = '$autor' , `post_update` = '$updateDate' WHERE `post_id` = '$postID' ");

    header("location:../pags/index.php");
    die;
}

include("conexao.php");
$result = mysqli_query($con, "SELECT * FROM tb_posts WHERE `post_id` = '$postID'");
$row = mysqli_fetch_array($result);

?>

<form action="alterar.php" method="post">
<input type="hidden" name="post_id" id="post_id" value="<?=$postID?>" >

<table>
        <tr>
            <td>
                <label for="autor">Autor: </label>
            </td>
            <td>
                <input type="text" name="autor" id="autor" value="<?= $row['post_author'] ?>">
            </td>
        </tr>
        <tr>
            <td>
                <label for="titulo">Titulo: </label>
            </td>
            <td>
                <input type="text" name="titulo" id="titulo" value="<?=$row['post_title']?>">
            </td>
        </tr>
        <tr>
            <td>
                <label for="conteudo">Post: </label>
            </td>
            <td>
                <textarea name="conteudo" id="conteudo" rows="5" cols="30"><?=$row['post_content']?></textarea>
            </td>
        </tr>
    <tr>
        <td colspan="2" style="text-align:center;">
            <button type="submit">Postar</button>
        </td>
    </tr>
    </table>
</form>