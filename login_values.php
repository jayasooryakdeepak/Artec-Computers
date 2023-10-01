<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Artec_Computers";

global $user_name;
global $pwd;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//DATA FROM LOGIN PAGE
$user_name=$_POST['user_name'];
$pwd=$_POST['pwd'];
  //$enc_pwd=md5($pwd);

//check connection
if($conn->connect_error)
{
  die("connect failed" . $conn->connect_error);
}

$query= "SELECT * FROM User_Credentials where user_name='$user_name' AND pwd='$pwd'";

  $res_array = mysqli_query($conn,$query);

  $num = mysqli_num_rows($res_array);

  if($num > 0) {
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $user_name; 
    $row = mysqli_fetch_array($res_array);
    echo "success";
    header("Location:it_shop.php");
    exit();
  }
  else
  {
    header("Location:registration.html");
  }

$conn->close();
?>