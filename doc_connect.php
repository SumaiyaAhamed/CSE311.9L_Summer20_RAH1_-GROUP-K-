<?php
include("connect.php");
$national_id = $_POST["national_id"];
$specility = $_POST["specility"];
$hos_id = $_POST["hos_id"];



$sql = "INSERT INTO `doctors`(`doc_id`, `national_id`, `specility`, `hos_id`) VALUES ('NULL','$national_id','$specility','$hos_id')";
$result = mysqli_query($conn,$sql);

if($result){
  echo "Input Success.";
  sleep(1);
  header("Location: /cse311project/docTable.php");
}
else{
  echo "ERROR".$sql.mysqli_error(1);
}


 ?>
