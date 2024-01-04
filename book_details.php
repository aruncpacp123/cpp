

<?php

include 'session_check.php';

include 'connection.php';

$sql = "SELECT * FROM books";
$result = mysqli_query($connect, $sql);
if(mysqli_num_rows($result)>0){
    
        echo "<center>
        <a href='book.php'><button>Book Registration</button></a><br><br>
        <h1>Book Details</h1><br>
        <table border='2px'>
        <tr>
        <td>Book ID</td>
        <td>Book Name</td>
        <td>Book Author</td>
        <td>Book Copies</td>
        </tr>";
        while($rows=mysqli_fetch_assoc($result)){
            echo "<tr>
            <td>".$rows['bookid']. "</td>
            
            <td>" . $rows['bookname'] . "</td>
            <td>" . $rows['author'] . "</td>
            <td>" . $rows['copies'] . "</td>
        </tr>                  
    ";
    }
    echo "</table></center>";
}
?>