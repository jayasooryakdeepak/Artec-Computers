<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Artec_Computers";

global $user_name;
global $pwd;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:login.php');
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Dashboard</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/admin_style.css">

</head>
<body>
   
<?php @include 'admin_header.php'; ?>

<section class="dashboard">

   <h1 class="title">Monthly Turnover Details</h1> 

   <div class="box-container">
      <div class="box">
         <?php
            $total_completes = 0;
            $select_completes = mysqli_query($conn, "SELECT * FROM `Billing_Details` WHERE Payment_Status = 'Paid'")  or die('query failed');
            while($fetch_completes = mysqli_fetch_assoc($select_completes)){
               $total_completes += $fetch_completes['Amount'];
            };
         ?>
         <h3>₹<?php echo $total_completes; ?>/-</h3>
         <p>Total Amount</p>
      </div>

      <div class="box">
         <?php
            $total_completes = 0;
            $select_completes = mysqli_query($conn, "SELECT * FROM `Billing_Details` WHERE Month = 01")  or die('query failed');
            while($fetch_completes = mysqli_fetch_assoc($select_completes)){
               $total_completes += $fetch_completes['Amount'];
            };
         ?>
         <h3>₹<?php echo $total_completes; ?>/-</h3>
         <p>January</p>
      </div>

      <div class="box">
         <?php
            $total_completes = 0;
            $select_completes = mysqli_query($conn, "SELECT * FROM `Billing_Details` WHERE Month = 02")  or die('query failed');
            while($fetch_completes = mysqli_fetch_assoc($select_completes)){
               $total_completes += $fetch_completes['Amount'];
            };
         ?>
         <h3>₹<?php echo $total_completes; ?>/-</h3>
         <p>February</p>
      </div>
      <div class="box">
         <?php
            $total_completes = 0;
            $select_completes = mysqli_query($conn, "SELECT * FROM `Billing_Details` WHERE Month = 03")  or die('query failed');
            while($fetch_completes = mysqli_fetch_assoc($select_completes)){
               $total_completes += $fetch_completes['Amount'];
            };
         ?>
         <h3>₹<?php echo $total_completes; ?>/-</h3>
         <p>March</p>
      </div>
      <div class="box">
         <?php
            $total_completes = 0;
            $select_completes = mysqli_query($conn, "SELECT * FROM `Billing_Details` WHERE Month = 04")  or die('query failed');
            while($fetch_completes = mysqli_fetch_assoc($select_completes)){
               $total_completes += $fetch_completes['Amount'];
            };
         ?>
         <h3>₹<?php echo $total_completes; ?>/-</h3>
         <p>April</p>
      </div>
      <div class="box">
         <?php
            $total_completes = 0;
            $select_completes = mysqli_query($conn, "SELECT * FROM `Billing_Details` WHERE Month = 05")  or die('query failed');
            while($fetch_completes = mysqli_fetch_assoc($select_completes)){
               $total_completes += $fetch_completes['Amount'];
            };
         ?>
         <h3>₹<?php echo $total_completes; ?>/-</h3>
         <p>May</p>
      </div>
      <div class="box">
         <?php
            $total_completes = 0;
            $select_completes = mysqli_query($conn, "SELECT * FROM `Billing_Details` WHERE Month = 06")  or die('query failed');
            while($fetch_completes = mysqli_fetch_assoc($select_completes)){
               $total_completes += $fetch_completes['Amount'];
            };
         ?>
         <h3>₹<?php echo $total_completes; ?>/-</h3>
         <p>June</p>
      </div>
      <div class="box">
         <?php
            $total_completes = 0;
            $select_completes = mysqli_query($conn, "SELECT * FROM `Billing_Details` WHERE Month = 07")  or die('query failed');
            while($fetch_completes = mysqli_fetch_assoc($select_completes)){
               $total_completes += $fetch_completes['Amount'];
            };
         ?>
         <h3>₹<?php echo $total_completes; ?>/-</h3>
         <p>July</p>
      </div>
      <div class="box">
         <?php
            $total_completes = 0;
            $select_completes = mysqli_query($conn, "SELECT * FROM `Billing_Details` WHERE Month = 08")  or die('query failed');
            while($fetch_completes = mysqli_fetch_assoc($select_completes)){
               $total_completes += $fetch_completes['Amount'];
            };
         ?>
         <h3>₹<?php echo $total_completes; ?>/-</h3>
         <p>August</p>
      </div>
      <div class="box">
         <?php
            $total_completes = 0;
            $select_completes = mysqli_query($conn, "SELECT * FROM `Billing_Details` WHERE Month = 09")  or die('query failed');
            while($fetch_completes = mysqli_fetch_assoc($select_completes)){
               $total_completes += $fetch_completes['Amount'];
            };
         ?>
         <h3>₹<?php echo $total_completes; ?>/-</h3>
         <p>September</p>
      </div>
      <div class="box">
         <?php
            $total_completes = 0;
            $select_completes = mysqli_query($conn, "SELECT * FROM `Billing_Details` WHERE Month = 10")  or die('query failed');
            while($fetch_completes = mysqli_fetch_assoc($select_completes)){
               $total_completes += $fetch_completes['Amount'];
            };
         ?>
         <h3>₹<?php echo $total_completes; ?>/-</h3>
         <p>October</p>
      </div>
      <div class="box">
         <?php
            $total_completes = 0;
            $select_completes = mysqli_query($conn, "SELECT * FROM `Billing_Details` WHERE Month = 11")  or die('query failed');
            while($fetch_completes = mysqli_fetch_assoc($select_completes)){
               $total_completes += $fetch_completes['Amount'];
            };
         ?>
         <h3>₹<?php echo $total_completes; ?>/-</h3>
         <p>November</p>
      </div>
      <div class="box">
         <?php
            $total_completes = 0;
            $select_completes = mysqli_query($conn, "SELECT * FROM `Billing_Details` WHERE Month = 12")  or die('query failed');
            while($fetch_completes = mysqli_fetch_assoc($select_completes)){
               $total_completes += $fetch_completes['Amount'];
            };
         ?>
         <h3>₹<?php echo $total_completes; ?>/-</h3>
         <p>December</p>
      </div>

   </div>

</section>

<script src="js/admin_script.js"></script>

</body>
</html>