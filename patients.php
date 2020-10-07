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
      Patient info
    </div>
    <div class="form">
			<form action="patient_connect.php" method="post">
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
           <label>hos_id</label>
					 <div class="custom_select">
 		<select name="hos_id">

 					<?php
       include_once("connect.php");
       session_start();
       $sql = "SELECT hos_id FROM `hospitals`";
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
            <label>doctor id</label>
						<div class="custom_select">
			<select name="doc_id">

						<?php
	      include_once("connect.php");
	      session_start();
	      $sql = "SELECT doc_id FROM `doctors`";
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
          <label>disease</label>
          <input type="text" class="input" name="disease">
       </div>
       <div class="inputfield">
           <label>status</label>
					 <div class="custom_select">
 		<select name="status">

 					<?php
       include_once("connect.php");
       session_start();
       $sql = "SELECT DISTINCT status FROM patients";
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
            <label>admission date</label>
            <input type="date" class="input" name="admission_date">
         </div>
         <div class="inputfield">
             <label>discharge date</label>
             <input type="date" class="input" name="discharge_date">
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
