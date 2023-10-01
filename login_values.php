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
  $row = mysqli_fetch_assoc($res_array);

  if($num > 0) {

    if($row['user_type'] == 'Admin')
    {
      $_SESSION['loggedin'] = true;
      $_SESSION['username'] = $user_name; 
      $_SESSION['admin_id'] = $row['id'];
      $row = mysqli_fetch_array($res_array);
      header("Location:admin_page.php");
    }
    elseif ($row['user_type'] == 'Customer') {
      $_SESSION['loggedin'] = true;
      $_SESSION['username'] = $user_name; 
      $row = mysqli_fetch_array($res_array);
      header("Location:it_shop.php");
    }
    
  }
  else
  {
    header("Location:registration.html");
  }

$conn->close();
?>