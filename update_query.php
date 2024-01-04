<?php
include 'session_check.php';

include 'connection.php';

if($_POST){
    $bookid = $_POST['bookid'];
    $bookname = $_POST['bookname'];
    $author = $_POST['author'];
    $copies = $_POST['copies'];
    $sql = "update books set bookid='$bookid', bookname='$bookname', author='$author',copies='$copies' where author='$author'" ;
    $result = mysqli_query($connect, $sql);
    if($result){
        echo "<script>
            alert('Data updated successfully')    
        </script>";
        header('location:book_details.php');
    }
}
?>