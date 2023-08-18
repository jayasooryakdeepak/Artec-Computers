<html>
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

$id = $_POST['book_id'];
$name = $_POST['book_name'];
$email = $_POST['author'];
$phone = $_POST['quantity'];
$place = $_POST['price']; 
$user_name = $_POST[''];
$passwo = $_POST['email'];

$sql = "INSERT INTO book (bookid, bookname, author, email, price, qty)
VALUES ('$book_id','$book_name', '$author', '$email','$price','$quantity')";

if ($conn->query($sql) === TRUE) {
  echo "Record Added";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</body>
</html>