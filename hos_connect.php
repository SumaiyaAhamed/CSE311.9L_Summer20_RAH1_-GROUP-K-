<?php
include("connect.php");
$hos_name = $_POST["hos_name"];
$address = $_POST["address"];
$capacity = $_POST["capacity"];
$hotline = $_POST["hotline"];
$no_of_docs = $_POST["no_of_docs"];
$no_of_patients= $_POST["no_of_patients"];


$sql = "INSERT INTO `hospitals`(`hos_id`, `hos_name`, `address`, `capacity`, `hotline`, `no_of_docs`, `no_of_patients`) VALUES ('NULL','$hos_name','$address','$capacity','$hotline','$no_of_docs','$no_of_patients')";
$result = mysqli_query($conn,$sql);

if($result){
  echo "Input Success.";
  sleep(1);
  header("Location: /cse311project/hosTable.php");
}
else{
  echo "ERROR".$sql.mysqli_error(1);
}


 ?>
