<?php
session_start();
$user_name=$_POST['user_name'];
$pwd=$_POST['pwd'];
$enc_pwd=md5($pwd);
//connection
$conn=mysqli_connect("localhost","root","","car_store");

//check connection
if($conn->connect_error)
{
  die("connect failed" . $conn->connect_error);
}

  $query= "SELECT * FROM USER_LOGIN where user_name='$user_name' AND pwd='enc_pwd'";
  $res_array = mysqli_query($conn,$query);

  if($conn->query($query)==TRUE) 
  {
	  echo "success";
	  header("Location:uregistration.php");
	  exit();
  }
  else 
  {
	  echo "failed";
  }
$conn->close();
?>