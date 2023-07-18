<?php
if(isset($_POST['titulo'],$_POST['conteudo'],$_POST['autor'])){
 $titulo = $_POST['titulo'];
 $conteudo = $_POST['conteudo'];
 $autor = $_POST['autor'];
 
 echo(
    '<h2>'.$_POST['titulo'].'</h2>' .
    '<p>'.$_POST['conteudo'].'</p>' .
    '<p>Escrito por <strong>'.$_POST['autor'].'</strong></p>' 
 ) ;
?>
<form action="listar.php" method="post">
    <input type="text" name="autor" id="autor"
    value="<?= $autor?>" hidden
    >
    <input type="text" name="titulo" id="titulo"
    value="<?=$titulo?>"hidden
    >
    <input type="text" name="conteudo" id="conteudo" 
    value="<?= $conteudo?>"hidden
    ></textarea>
    <button type="submit">Confirmar</button>
    </form>

<?php }?>

<form action="inserir.php" method="post">
<table>
        <tr>
            <td>
                <label for="autor">Autor: </label>
            </td>
            <td>
                <input type="text" name="autor" id="autor">
            </td>
        </tr>
        <tr>
            <td>
                <label for="titulo">Titulo: </label>
            </td>
            <td>
                <input type="text" name="titulo" id="titulo">
            </td>
        </tr>
        <tr>
            <td>
                <label for="conteudo">Post: </label>
            </td>
            <td>
                <textarea name="conteudo" id="conteudo" rows="5" cols="30"></textarea>
            </td>
        </tr>
    <tr>
        <td colspan="2" style="text-align:center;">
            <button type="submit" style="width: 80%; ">Postar</button>
        </td>
    </tr>
    </table>
</form>