<?php
include("connect.php");
$national_id = $_POST["national_id"];
$date = $_POST["date_of_acceptance"];



$sql = "INSERT INTO `ration`(`card_no`, `national_id`, `date_of_acceptance`) VALUES ('NULL','$national_id','$date')";
$result = mysqli_query($conn,$sql);

if($result){
  echo "Input Success.";
  sleep(1);
  header("Location: /cse311project/rationTable.php");
}
else{
  echo "ERROR".$sql.mysqli_error(1);
}


 ?>
