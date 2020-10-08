<?php
include("connect.php");
$national_id = $_POST["national_id"];
$current_address = $_POST["current_address"];
$country_travelled = $_POST["country_travelled"];
$status = $_POST["status"];
$quarantine_start = $_POST["quarantine_start"];
$quarantine_end = $_POST["quarantine_end"];


$sql = "INSERT INTO `travel_history`(`passport_no`, `national_id`, `current_address`, `country_travelled`, `status`, `quarantine_start`, `quarantine_ends`) VALUES ('NULL','$national_id','$current_address','$country_travelled','$status','$quarantine_start','$quarantine_end')";
$result = mysqli_query($conn,$sql);

if($result){
  echo "Input Success.";
  sleep(1);
  header("Location: /cse311project/travelTable.php");
}
else{
  echo "ERROR".$sql.mysqli_error(1);
}


 ?>
