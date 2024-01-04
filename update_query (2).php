<?php
include('connection.php');

$user = $_POST['user'];
$groupname = $_POST['groupname'];
$groupno = $_POST['groupno'];

$sql = "update groupism set name = '$groupname', groupno = '$groupno' where userid = '$user'";
if (mysqli_query($conn, $sql)) {
    header("Location:index.php");
} else {
    echo "Ooooobi";
}
