<html>
<head>
  <title>Inserted</title>
</head>
<body>

<?php
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
$id = 113;
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$user_name = $_REQUEST['user_name'];
$passwo = $_REQUEST['passwo'];
$place = $_REQUEST['place'];
//Inserting into Customer_Details Table
$sql = "INSERT INTO Customer_details (Cust_Name, Email, Phone, user_name, Passwo, Place)
VALUES ('$name', '$email','$phone','$user_name', '$passwo','$place')";

if ($conn->query($sql) === TRUE) {
  echo "Record Added";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

//Inserting into Login Table
$sql = "INSERT INTO User_Credentials (id, user_name, pwd)
VALUES ('$id','$user_name', '$passwo')";

if ($conn->query($sql) === TRUE) {
  echo "Record Added";
  header("Location:login.html");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</body>
</html>