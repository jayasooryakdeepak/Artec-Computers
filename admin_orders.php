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
   header('location:login.html');
};

if(isset($_POST['update_order'])){
   $order_id = $_POST['order_id'];
   $update_payment = $_POST['update_payment'];
   mysqli_query($Con, "UPDATE `orders` SET payment_status = '$update_payment' WHERE id = '$order_id'") or die('query failed');
   $message[] = 'payment status has been updated!';
}

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   mysqli_query($Con, "DELETE FROM `orders` WHERE id = '$delete_id'") or die('query failed');
   header('location:admin_orders.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>dashboard</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/admin_style.css">

</head>
<body>
   
<?php @include 'admin_header.php'; ?>

<section class="orders">

   <h1 class="title">placed orders</h1>
   <?php
      
      $select_orders = mysqli_query($conn, "SELECT * FROM `Billing_Details`") or die('query failed');
      if(mysqli_num_rows($select_orders) > 0){
         while($fetch_orders = mysqli_fetch_assoc($select_orders)){
      ?>
   <div class="box-container">

      <div class="box">
         <p> User id : <span><?php echo $fetch_orders['id']; ?></span> </p>
         <p> First_Name : <span><?php echo $fetch_orders['First_Name']; ?></span> </p>
         <p> Last_Name : <span><?php echo $fetch_orders['Last_Name']; ?></span> </p>
         <p> Phone : <span><?php echo $fetch_orders['Phone']; ?></span> </p>
         <p> Email : <span><?php echo $fetch_orders['Email']; ?></span> </p>
         <p> Country : <span><?php echo $fetch_orders['Country']; ?></span> </p>
         <p> address : <span><?php echo $fetch_orders['Address']; ?></span> </p>
         <p> total price : <span>₹<?php echo $fetch_orders['Amount']; ?>/-</span> </p>
          <!-- <form action="" method="post">
            <input type="hidden" name="order_id" value="<?php echo $fetch_orders['id']; ?>">
            <select name="update_payment">
               <option disabled selected><?php echo $fetch_orders['payment_status']; ?></option>
               <option value="pending">pending</option>
               <option value="completed">completed</option>
            </select>
            <input type="submit" name="update_order" value="update" class="option-btn">
            <a href="admin_orders.php?delete=<?//php echo $fetch_orders['id']; ?>" class="delete-btn" onclick="return confirm('delete this order?');">delete</a>
         </form>  -->
      </div>
      
   </div>
   <?php
         }
      }else{
         echo '<p class="empty">no orders placed yet!</p>';
      }
      ?>

</section>













<script src="js/admin_script.js"></script>

</body>
</html>