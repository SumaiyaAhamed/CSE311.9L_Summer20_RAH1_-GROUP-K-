<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration Form</title>
	<link rel="stylesheet" href="peopleStyle.css">
</head>
<body>

<div class="wrapper">
    <div class="title">
      COVID-19 Cases
  </div>
    <div class="form">
			<form action="covidCase_connect.php" method="post">
        <div class="inputfield">
          <label>national id</label>
          <div class="custom_select">
          <select name="national_id">

					<?php
      include_once("connect.php");
      session_start();
      $sql = "SELECT national_id FROM people WHERE national_id NOT IN (SELECT national_id FROM `covid-19_cases`WHERE status= \"deceased\" UNION SELECT national_id FROM patients WHERE status= \"deceased\")";
      $result = mysqli_query($conn, $sql);
      while($row = mysqli_fetch_row($result)){
        ?>
				<option value="<?php echo $row[0]?>"> <?php echo $row[0]?></option>

        <?php
      }
      ?>
    </select>
    </div>
       </div>
       <div class="inputfield">
           <label>patient id</label>
          <div class="custom_select">
           <select name="patient_id" >
						 <option value=>Null</option>

            <?php
              include_once("connect.php");
              session_start();
              $sql = "SELECT patient_id FROM `patients` WHERE patient_id NOT in (SELECT patient_id FROM`covid-19_cases`) AND disease= \"covid-19\" AND status!=\"deceased\"";
              $result = mysqli_query($conn, $sql);
              while($row = mysqli_fetch_row($result)){
								?>
								<option value="<?php echo $row[0]?>"> <?php echo $row[0]?></option>
								  <?php
						}
              ?>

          </select>

          </div>
        </div>
        <div class="inputfield">
            <label>status</label>

						<div class="custom_select">
			  <select name="status" name="status">

						<?php
	      include_once("connect.php");
	      session_start();
	      $sql = "SELECT DISTINCT status FROM `covid-19_cases`";
	      $result = mysqli_query($conn, $sql);
	      while($row = mysqli_fetch_row($result)){
	        ?>
					<option value="<?php echo $row[0]?>"> <?php echo $row[0]?></option>

	        <?php
	      }
	      ?>
			</select>
				</div>
					</div>
      <div class="inputfield">
          <label>condition</label>
					<div class="custom_select">
		<select name="condition" name="condition">

					<?php
      include_once("connect.php");
      session_start();
      $sql = "SELECT DISTINCT conditions FROM `covid-19_cases`";
      $result = mysqli_query($conn, $sql);
      while($row = mysqli_fetch_row($result)){
        ?>
				<option value="<?php echo $row[0]?>"> <?php echo $row[0]?></option>

        <?php
      }
      ?>
		</select>
			</div>
				</div>
      <div class="inputfield">
        <input type="submit" value="Submit" class="btn">
      </div>
		</form>
			<a href="button.html">
      <div class="inputfield">
        <input type="submit" value="Back" class="btn">
      </div>
			</a>
    </div>

</body>
</html>
