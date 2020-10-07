<?php
include("connect.php");
if(isset($_POST['username'])){

    $uname=$_POST['username'];
    $password=$_POST['pass'];

    $sql="select * from login where user_name='".$uname."' AND password='".$password."' limit 1";
    $result = mysqli_query($conn,$sql);
    $row= mysqli_num_rows($result);
    if($row==1){
        echo " You Have Successfully Logged in";
        header("Location: /cse311project/button.html");
        exit();

    }
    else{
        echo " You Have Entered Incorrect Password";
        header("Location: /cse311project/login.html");
        exit();
    }

}
?>
