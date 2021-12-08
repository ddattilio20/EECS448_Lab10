<?php 
     $conn = new mysqli("mysql.eecs.ku.edu", "d318d032", "zae4eipo", "d318d032");

     if($conn -> connect_errno){
         echo "Connection Failed";
         exit();
     }

     $user = $_POST['users'];


     echo "<table border='1'>
    <tr>
    <th>User</th>
    <th> Posts</th>
    <th>Post id</th>
    </tr>";


    $query = sprintf ("SELECT * FROM posts WHERE author_id = '%s' ORDER BY post_id",$conn->real_escape_string($user));
    if($result = $conn->query($query)){
    while($row = $result->fetch_assoc()){
        echo "<tr>";
        echo "<td>" . $row['author_id'] . "</td>";
        echo "<td>" . $row['content'] . "</td>";
        echo "<td>" . $row['post_id'] . "</td>";
        echo "</tr>";
    }
    $result->free();
}
    echo "</table>";


    mysqli_close($conn);

?>