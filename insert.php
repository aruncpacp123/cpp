<html>
    <body>
        <form action="" method="POST">
            <table border="2">
                <caption><i><b>Adivaaram Form</b></i></caption>
                <tr>
                    <td>Name </td>
                    <td><input type="text" name="name"></td>
                </tr>
                 <tr>
                    <td>Group Name </td>
                    <td><input type="text" name="group"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Click"></td>
                </tr>
            </table>
        </form>
    </body>
</html>


<?php

include('connection.php');
if($_POST) {
    $name = $_POST['name'];
    $group = $_POST['group'];
    $sql = "insert into groupism (name, groupno ) values ('$name','$group')";
    if(mysqli_query($conn, $sql)) {
        header('location:index.php');
    } else {
        echo "Veeendum oooombi!!";
    }
}
?>