<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Doctors Form</title>
	<link rel="stylesheet" href="peopleStyle.css">
</head>
<body>

<div class="wrapper">
    <div class="title">
      Doctors info
    </div>
    <div class="form">
			<form action="doc_connect.php" method="post">
        <div class="inputfield">
          <label>national id</label>
					<div class="custom_select">
		<select name="national_id">

					<?php
      include_once("connect.php");
      session_start();
    $sql = "SELECT national_id FROM people WHERE national_id NOT IN( SELECT national_id FROM doctors UNION SELECT national_id from patients WHERE status=\"deceased\" UNION SELECT national_id from `covid-19_cases` WHERE status=\"deceased\") AND people.occupation LIKE \"doctor\"";
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
           <label>specility</label>
           <input type="text" class="input" name="specility">
        </div>
        <div class="inputfield">
            <label>hospital id</label>
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
