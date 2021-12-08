<?php




$user = $_POST['user'];
$conn = new mysqli("mysql.eecs.ku.edu","d318d032","zae4eipo","d318d032");

if($conn->connect_errno){
  die("Connection Failed: " . $conn->connect_error);
}


if($user === "")
{
  die("Submission failed, you cannot make a blank user: " . $conn->connect_error);
}
else {
  $sql = "INSERT INTO users (user_id) VALUES ('$user')";
}

if($conn-> query($sql) === TRUE){
  echo ("User Created");
}
else {
   echo "Error: User couldn't be created." ;
}

$conn->close();
?>
