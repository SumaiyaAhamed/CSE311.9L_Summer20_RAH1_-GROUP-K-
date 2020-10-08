<?php
include("connect.php");
$name = $_POST["Name"];
$age = $_POST["Age"];
$sex = $_POST["Sex"];
$phone = $_POST["Phone"];
$address = $_POST["Address"];
$occupation = $_POST["Occupation"];
$salary = $_POST["salary"];


$sql = "INSERT INTO `people` (`national_id`,`name`, `age`, `sex`, `phone_no`, `address`, `occupation`,`salary`) VALUES ('NULL', '$name','$age','$sex','$phone','$address','$occupation','$salary')";
$result = mysqli_query($conn,$sql);

if($result){
  echo "Input Success.";
  sleep(1);
  header("Location: /cse311project/peopleTable.php");
}
else{
  echo "ERROR".$sql.mysqli_error(1);
}


 ?>
