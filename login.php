<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Username :</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Password :</td>
                    <td><input type="text" name="password" id=""></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" value="Login"></td>
                </tr>
            </table>
        </form>
    </center>
</body>




</html>

<?php
include 'connection.php';


if($_POST){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM login where username = '$username' and password = '$password'";
    $result = mysqli_query($connect, $sql);
    if(mysqli_num_rows($result) > 0) {
        $_SESSION['user']=$username;
        header('Location:book.php');
    }else{
        echo "<script>
            alert('Username or Password is Incorrect!')
        </script>";
    }

}


?>