<?php
if(isset($_POST['content'])){

$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);

if(!$con) {
  die("error".mysqli_connect_error());
}

$content = $_POST['content'];
$timeid = $_POST['timeid'];
$sql = "INSERT INTO `chats`.`questions` (`content`, `timeid`) VALUES ('$content', current_timestamp());";

if($con->query($sql) == true){
  echo "successfully inserted ";
}
else{
  echo "Error: $sql <br> $con->error";
}
header("location: index.php" );

$con->close();
}

?>