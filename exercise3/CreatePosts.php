<?php

$user = $_POST['user'];
$message = $_POST['message'];


$conn = new mysqli("mysql.eecs.ku.edu","d318d032","zae4eipo","d318d032");

if($conn->connect_errno){
  die("Connection Failed: " . $conn->connect_error);
}

if($message == "" || $user == ""){
  echo "Cannot post, user or message is blank.";
  exit();
}


$query = "SELECT user_id FROM users WHERE user_id = '$user'";

if($conn->query($query)){
  $upload = "INSERT INTO posts (author_id, content) VALUES ('$user' , '$message')";
  if($conn->query($upload)){
    echo "Message Added <br>";
  }
  else{
    echo "Could not add post. <br>";
  }
}
else{
  echo "Could not add post, nonexistent user.";
}



$conn->close();
?>
