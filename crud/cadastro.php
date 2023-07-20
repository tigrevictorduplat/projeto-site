<?php
include("crud-templates/foreign-header.php");

if(isset($_POST['login'],$_POST['password'],$_POST['confirm-password'])) {
    
    $username = $_POST['login'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm-password'];

    include("conexao.php");
    $result = mysqli_query($con, "SELECT * from tb_users WHERE `username` = '$username'");
    $exists = mysqli_num_rows($result);
    if ($exists){
        echo(
            '<p style="color:red;">Este usuário já existe!</p>'
        );
    }else if($password != $confirmPassword) {
        echo(
            '<p style="color:red;">As senhas não coincidem!</p>'
        );
        
    } else {
        include("conexao.php");
        mysqli_query($con, "INSERT INTO tb_users (`username`,`password`) VALUES ('$username', '$password') ;");
        header('location:login.php');
        die;
    };
}
?>

<form action="cadastro.php" method="post">
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
            <td>
                <label for="confirm-password">Confirmar Senha: </label>
            </td>
            <td>
                <input type="password" name="confirm-password" id="confirm-password">
            </td>
        </tr>
    <tr>
        <td colspan="2" style="text-align:center;">
            <button type="submit" style="width: 80%; ">Cadastrar-se</button>
        </td>
    </tr>
    </table>
</form>

<?php 
include("crud-templates/crud-footer.php");
?>