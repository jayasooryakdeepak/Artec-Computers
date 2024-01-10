<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Artec_Computers";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$user_id = $_SESSION['user_id'];
$fname = $_REQUEST['fname'];
$lname = $_REQUEST['lname'];
$email = $_REQUEST['email'];
$phn = $_REQUEST['phn'];
$adr = $_REQUEST['adr'];
$lndmrk = $_REQUEST['lndmrk'];
$iname = $_REQUEST['iname'];
$desc = $_REQUEST['desc'];

//Inserting into Service_Details Table
$sql = "INSERT INTO Service_Details (id,First_Name, Last_Name, email, phone, address, landmark, item_name, complaint_description)
VALUES ('$user_id', '$fname', '$lname','$email','$phn', '$adr','$lndmrk','$iname','$desc')";

if ($conn->query($sql) === TRUE) {
  echo "<script>alert('Our Representatives will get back to you'); window.location = 'it_home.php';</script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?>