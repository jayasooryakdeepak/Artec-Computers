<html>
<head>
  <title>Checkout</title>
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
$fname = $_REQUEST['fn'];
$lname = $_REQUEST['ln'];
$country = $_REQUEST['cn'];
$address = $_REQUEST['ad'];
$city = $_REQUEST['tc'];
$pincode = $_REQUEST['pz'];
$phone = $_REQUEST['ph'];
$email = $_REQUEST['em'];

//Inserting into Billing_Details Table
$sql = "INSERT INTO Billing_Details (First_Name, Last_Name, Country, Address, City, Pincode, Phone, Email)
VALUES ('$fname', '$lname', '$country','$address','$city', '$pincode','$phone' ,'$email')";

if ($conn->query($sql) === TRUE) {
  echo "Record Added";
  header("Location:widgets/card/payment.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
</body>
</html>