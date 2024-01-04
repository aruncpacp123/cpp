<?php
include 'session_check.php';
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
            Author Name : <input type="text" name="author" id="">
            <input type="submit" value="Submit">
        </form>
    </center>
</body>

</html>


<?php
include 'connection.php';
if($_POST){
    $author = $_POST['author'];
    $sql = "Select * from books where author='$author'";
    $result = mysqli_query($connect, $sql);
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
            echo"

        <form action='update_query.php' method='POST'>
            <table>
                <tr>
                    <td>Book ID </td>
                    <td><input type='number' name='bookid' value='{$row['bookid']}'></td>
                </tr>
                <tr>
                    <td>Book Name </td>
                    <td><input type='text' name='bookname' value='{$row['bookname']}'></td>
                </tr>
                <tr>
                    <td>Author </td>
                    <td><input type='text' name='author' value='{$row['author']}'></td>
                </tr>
                <tr>
                    <td>Number of Copies</td>
                    <td><select name='copies' value='{$row['copies']}'>
                            <option value='1'>1</option>
                            <option value='2'>2</option>
                            <option value='3'>3</option>
                            <option value='4'>4</option>
                            <option value='5'>5</option>
                        </select></td>
                </tr>
                <tr>
                    <td colspan='2' align='center'>
                        <input type='submit' value='Update'>
                    </td>
                </tr>
            </table>
        </form>";
        }
    }
}

?>