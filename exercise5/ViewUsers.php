<?php 
    $conn = new mysqli("mysql.eecs.ku.edu", "d318d032", "zae4eipo", "d318d032");

    if($conn -> connect_errno){
        echo "Connection Failed <br>";
        exit();
    }

    $result = mysqli_query($conn, "SELECT * FROM users");

    echo "<table border='1'>
    <tr>
    <th>User</th>
    </tr>";

    while($row = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>" . $row['user_id'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";




    mysqli_close($conn);

?>