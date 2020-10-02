<?php
include("connect.php");
$national_id = $_POST["national_id"];
$hos_id = $_POST["hos_id"];
$appoint_date = $_POST["appoint_date"];
$appoint_time = $_POST["appoint_time"];



$sql = "INSERT INTO `appointment`(`appointment_no`, `national_id`, `hos_id`, `appointment_date`, `appointment_time`) VALUES ('NULL','$national_id','$hos_id','$appoint_date','$appoint_time')";
$result = mysqli_query($conn,$sql);

if($result){
  echo "Input Success.";
  sleep(1);
  header("Location: /cse311project/appointment.php");
}
else{
  echo "ERROR".$sql.mysqli_error(1);
}


 ?>
