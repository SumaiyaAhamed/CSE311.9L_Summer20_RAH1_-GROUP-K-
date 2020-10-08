<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="">
	<title>people Form</title>
	<link rel="stylesheet" href="peopleStyle.css">
</head>
<body>

<div class="wrapper">
    <div class="title">
      People info
    </div>
    <div class="form">
			<form action="people.php" method="post">
       <div class="inputfield">
          <label>Name</label>
          <input type="text" class="input" name="Name">
       </div>
        <div class="inputfield">
          <label>Age</label>
          <input type="text" class="input" name="Age">
       </div>
        <div class="inputfield">
          <label>Sex</label>
					<div class="custom_select">
		<select name="Sex">

					<?php
      include_once("connect.php");
      session_start();
      $sql = "SELECT DISTINCT sex FROM people";
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
          <label>Phone_Number</label>
          <input type="text" class="input" name="Phone">
       </div>
      <div class="inputfield">
          <label>Address</label>
          <input type="text" class="input" name="Address">
       </div>
      <div class="inputfield">
          <label>Occupation</label>
          <input type="text" class="input" name="Occupation">
       </div>
			 <div class="inputfield">
				 <label>Salary($)</label>
				 <input type="text" class="input" name="salary">
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
</div>

</body>
</html>
