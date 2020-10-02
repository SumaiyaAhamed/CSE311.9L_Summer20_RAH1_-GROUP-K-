<?php
include( 'connect.php' );
$national_id = $_POST['national_id'];
$patient_id = $_POST['patient_id'];
$status = $_POST['status'];
$conditions = $_POST['condition'];

//echo $conditions;

$sql = "INSERT INTO `covid-19_cases`(`case_id`, `national_id`, `patient_id`, `status`, `conditions`) VALUES ('NULL','$national_id',NULLIF('$patient_id',''),'$status','$conditions')";
$result = mysqli_query( $conn, $sql );


if($result){
  echo "Input Success.";
  sleep(1);
  header("Location: /cse311project/covidTable.php");
}
else{
  echo "ERROR".$sql.mysqli_error(1);
}
 ?>
