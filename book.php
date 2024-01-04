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
    <?php

    ?>
    <center>
        <form action="logout.php">
            <input type="submit" value="Logout">
        </form><br>
        <a href="book_details.php"><button>Book Details</button></a><br><br>
        <h1>Book Registration</h1>

        <form action=" " method="POST">
            <table>
                <tr>
                    <td>Book ID </td>
                    <td><input type="number" name="bookid"></td>
                </tr>
                <tr>
                    <td>Book Name </td>
                    <td><input type="text" name="bookname"></td>
                </tr>
                <tr>
                    <td>Author </td>
                    <td><input type="text" name="author"></td>
                </tr>
                <tr>
                    <td>Number of Copies</td>
                    <td><select name="copies">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form><br>
        <a href="update.php"><button>Update Book</button></a>
    </center>
</body>

</html>

<?php
include 'connection.php';

if ($_POST) {
    $bookid = $_POST['bookid'];
    $bookname = $_POST['bookname'];
    $author = $_POST['author'];
    $copies = $_POST['copies'];


    $sql = "INSERT into books values ($bookid,'$bookname','$author','$copies')";
    $result = mysqli_query($connect, $sql);
    if ($result) {
        echo "<script>alert('Book Registered Succesfully')</script>";
    } else {
        echo "Failed";
    }
}

?>



