<?php
include('connection.php');


$userid = $_POST['user'];
$sql = "delete from groupism where userid='$userid'";
if (mysqli_query($conn, $sql)) {
    
    header('Location:index.php');
} else {
    echo "oombiiiiiii";
}
