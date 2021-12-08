<?php
    $conn = new mysqli("mysql.eecs.ku.edu", "d318d032", "zae4eipo", "d318d032");

    if($conn -> connect_errno){
        echo "Connection Failed";
        exit();
    }


    echo "<h1>Deleted Posts</h1>";
    echo "<table>";

    echo "<tr><th>Post ID</th><tr>";

    foreach($_POST['delete'] as $deletedid){
        $query = "DELETE FROM posts WHERE post_id=" .$deletedid;
        if($result = $conn->query($query)){
            echo "<tr><td>" .$deletedid . "</td></tr>";
        }
    }

    echo "</table>";
    $conn->close();






?>