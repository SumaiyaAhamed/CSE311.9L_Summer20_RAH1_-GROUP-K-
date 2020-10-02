<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="">
	<title>Home page</title>
	<link rel="stylesheet" href="peopleStyle.css">
</head>
<body>

<div class="wrapper">
    <div class="title">
      COVID-19 UPDATE
    </div>
		<h2 align=center> Number of people in that area </h2>
		<h1 align=center>
			<?php
	include_once("connect.php");
	session_start();
	$sql = "SELECT COUNT(*) FROM `people`";
	$result = mysqli_query($conn, $sql);
	while($row = mysqli_fetch_row($result)){
		?>
		<option value="<?php echo $row[0]?>"> <?php echo $row[0]?></option>

		<?php
	}
	?>
</h1><br>
		<h2 align=center> Total affected </h2>
		<h1 align=center>
			<?php
	include_once("connect.php");
	$sql = "SELECT COUNT(*) FROM `covid-19_cases`";
	$result = mysqli_query($conn, $sql);
	while($row = mysqli_fetch_row($result)){
		?>
		<option value="<?php echo $row[0]?>"> <?php echo $row[0]?></option>

		<?php
	}
	?>
</h1><br>
		<h2 align=center> Total cured</h2>
		<h1 align=center>
			<?php
include_once("connect.php");
$sql = "SELECT COUNT(*) FROM `covid-19_cases` WHERE status=\"survived\"";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_row($result)){
	?>
	<option value="<?php echo $row[0]?>"> <?php echo $row[0]?></option>

	<?php
}
?>
</h1><br>
<h2 align=center> Under treatment</h2>
<h1 align=center>
	<?php
include_once("connect.php");
$sql = "SELECT COUNT(*) FROM `covid-19_cases` WHERE status=\"under treatment\"";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_row($result)){
?>
<option value="<?php echo $row[0]?>"> <?php echo $row[0]?></option>

<?php
}
?>
</h1><br>
<h2 align=center> Total death </h2>
<h1 align=center>
	<?php
include_once("connect.php");
$sql = "SELECT COUNT(*) FROM `covid-19_cases` WHERE status=\"deceased\"";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_row($result)){
?>
<option value="<?php echo $row[0]?>"> <?php echo $row[0]?></option>

<?php
}
?>
</h1><br>
<h2 align=center> Total seats avaliable in the hospitals </h2>
<h1 align=center>
	<?php
include_once("connect.php");
$sql = "SELECT SUM(capacity-no_of_patients) FROM hospitals";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_row($result)){
?>
<option value="<?php echo $row[0]?>"> <?php echo $row[0]?></option>

<?php
}
?>
</h1>
    <div class="form">
			<a href="appointment.php">
			<div class="inputfield">
				<input type="submit" value="Appointment" class="btn">
			</div>
		</a>

			<a href="login.html">
      <div class="inputfield">
        <input type="submit" value="Admin login" class="btn">
      </div>
			</a>
    </div>
</div>

</body>
</html>
