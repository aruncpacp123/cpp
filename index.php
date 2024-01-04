<?php

include('connection.php');

echo "<h2 style='color:burlywood; background-color:black; padding:5px'>Adi Mains</h2>";

$sql = "select * from groupism";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0)
{
    echo "<table border='1' style='width:75%; text-align:center'>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>".$row['userid']."</td>"."<td>".$row['name']."</td>"."<td>".$row['groupno']."</td>";
        echo "</tr>";
}
    echo "</table>";
} else {
    echo "Oooobi";
}

?>