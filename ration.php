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
      Ration info
    </div>
    <div class="form">
			<form action="ration_connect.php" method="post">
        <div class="inputfield">
          <label>national id</label>
					<div class="custom_select">
		<select name="national_id">

					<?php
      include_once("connect.php");
      session_start();
      $sql = "SELECT national_id FROM `people` WHERE national_id NOT IN (SELECT national_id FROM `covid-19_cases`WHERE status= \"deceased\" UNION SELECT national_id FROM patients WHERE status= \"deceased\") AND salary<=10000";
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
           <label>date of acceptance</label>
           <input type="date" class="input" name="date_of_acceptance">
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
