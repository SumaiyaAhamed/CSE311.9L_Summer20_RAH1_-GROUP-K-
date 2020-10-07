<?php
include("connect.php");
$national_id = $_POST["national_id"];
$hos_id = $_POST["hos_id"];
$doc_id = $_POST["doc_id"];
$disease = $_POST["disease"];
$status = $_POST["status"];
$admissiom = $_POST["admission_date"];
$discharge = $_POST["discharge_date"];



$sql = "INSERT INTO `patients`(`patient_id`, `national_id`, `hos_id`, `doc_id`, `disease`, `status`, `admission`, `discharge`) VALUES ('NULL','$national_id','$hos_id','$doc_id','$disease','$status','$admissiom','$discharge')";
$result = mysqli_query($conn,$sql);

if($result){
  echo "Input Success.";
  sleep(1);
  header("Location: /cse311project/patientTable.php");
}
else{
  echo "ERROR".$sql.mysqli_error(1);
}


 ?>
