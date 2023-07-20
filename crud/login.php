<?php
include("crud-templates/foreign-header.php");

if(isset($_POST['login'],$_POST['password'])) {
    
    $username = $_POST['login'];
    $password = $_POST['password'];

    include("conexao.php");
    $result = mysqli_query($con, "SELECT * from tb_users WHERE `username` = '$username' AND `password` = '$password' ");
    $validation = mysqli_num_rows($result);
    if ($validation){
        $_SESSION['username']= $username; 
        header('location:listar.php');
      die;
    } ;
}
?>

<form action="login.php" method="post">
    <table>
        <tr>
            <td>
                <label for="login">Login: </label>
            </td>
            <td>
                <input type="text" name="login" id="login">
            </td>
        </tr>
        <tr>
            <td>
                <label for="password">Senha: </label>
            </td>
            <td>
                <input type="password" name="password" id="password">
            </td>
        </tr>
    <tr>
        <td colspan="2" style="text-align:center;">
            <button class="btn-login" type="submit">Conectar</button>
        </td>
    </tr>
    </table>
    
    

</form>

<?php 
include("crud-templates/crud-footer.php");
?>