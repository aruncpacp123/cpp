<html>

<head>

</head>

<body>
    <h1>Update</h1>
    <form action="" method="post">
        User ID : <input type="number" name="userid">
        <input type="submit" value="Submit">
    </form>
</body>

</html>
<?php
include('connection.php');
if($_POST) {
    $userid = $_POST['userid'];
$sql = "select * from groupism where userid = '$userid'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0) {
   while($row = mysqli_fetch_assoc($result)) {
     echo "<form action='update_query.php' method='post'>";
     echo "User ID :<input type='number' name='user' readonly value='".$row['userid']."'>"."<br>";
    echo "Name :<input type='text' name='groupname' value='".$row['name']."'>"."<br>";
    echo "Group :<input type='text' name='groupno' value='".$row['groupno']."'>"."<br>";
        echo "<input type='submit' value='Update'>";
    echo "</form>";
   }
} else {
    echo "No data found !!";
}
}
?>