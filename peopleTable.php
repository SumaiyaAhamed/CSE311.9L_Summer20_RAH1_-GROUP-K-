<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>people table showcase</title>
  </head>
  <body>
    <table align= "center" border="1px" style= width:"600px; line-height:40px;">
      <tr> <h1 align= "center">people record</h1>
      </tr>

  <?php
    session_start();
    include("connect.php");

    $sql1 = "show columns from people";
    $result1 = mysqli_query($conn, $sql1);
    while($row1 = mysqli_fetch_row($result1)){
      ?>

        <th> <?php echo $row1[0];?> </th>


    <?php } ?>
    <?php
    $sq1 = "SELECT * FROM people";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_row($result)){
      ?>
      <tr>
      <td> <a href="demo.php?name=<?php echo $row[0];?>"> <?php echo $row[0];?>  </td>
        <td> <?php echo $row[1];?> </td>
        <td> <?php echo $row[2];?> </td>
        <td> <?php echo $row[3];?> </td>
        <td> <?php echo $row[4];?> </td>
        <td> <?php echo $row[5];?> </td>
        <td> <?php echo $row[6];?> </td>
        <td> <?php echo $row[7];?> </td>

      </tr>

    <?php } ?>
</table><br>
<a href="button.html">
<div class="inputfield">
  <input type="submit" value="button page" class="btn" style="margin-left: 45%; color: orange; width:150px; height: 30px;">
</div>
</a>
<a href="peopleInfo.php">
<div class="inputfield">
  <input type="submit" value="form page" class="btn" style="margin-left: 45%; color: orange; width:150px; height: 30px;">
</div>
</a>
<a href="covid19_showcase.php">
<div class="inputfield">
  <input type="submit" value="logout" class="btn" style="margin-left: 45%; color: orange; width:150px; height: 30px;">
</div>
</a>


</body>

<footer>

</footer>



</html>
