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
    $S_id = $_POST['order_id'];
    $update_status = $_POST['update_status'];
    mysqli_query($conn, "UPDATE `Service_Details` SET Status = '$update_status' WHERE S_id = '$S_id'") or die('query failed');
   //  $message[] = 'payment status has been updated!';
}

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM `Service_Details` WHERE id = '$delete_id'") or die('query failed');
   header('location:admin_service.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Service</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/admin_style.css">

</head>
<body>
   
<?php @include 'admin_header.php'; ?>

<section class="orders">

   <h1 class="title">Service Appointments</h1>
   <?php
      
      $select_orders = mysqli_query($conn, "SELECT * FROM `Service_Details`") or die('query failed');
      if(mysqli_num_rows($select_orders) > 0){
         while($fetch_orders = mysqli_fetch_assoc($select_orders)){
      ?>
   <div class="box-container">

      <div class="box">
         <p> User id : <span><?php echo $fetch_orders['id']; ?></span> </p>
         <p> Service id : <span><?php echo $fetch_orders['S_id']; ?></span> </p>
         <p> First_Name : <span><?php echo $fetch_orders['First_Name']; ?></span> </p>
         <p> Last_Name : <span><?php echo $fetch_orders['Last_Name']; ?></span> </p>
         <p> Phone : <span><?php echo $fetch_orders['phone']; ?></span> </p>
         <p> Email : <span><?php echo $fetch_orders['email']; ?></span> </p>
         <p> address : <span><?php echo $fetch_orders['address']; ?></span> </p>
         <p> Item_name : <span><?php echo $fetch_orders['item_name']; ?></span> </p>
         <p> Complaint Description : <span><?php echo $fetch_orders['complaint_description']; ?></span> </p>
          <form action="" method="post">
            <input type="hidden" name="order_id" value="<?php echo $fetch_orders['S_id']; ?>">
            <select name="update_status">
               <option disabled selected><?php echo $fetch_orders['Status']; ?></option>
               <!-- <option value="pending">pending</option> -->
               <option value="Completed">Completed</option>

               </select>
            <input type="submit" name="update_order" value="update" class="option-btn">
            <a href="admin_service.php?delete=<?php echo $fetch_orders['S_id']; ?>" class="delete-btn" onclick="return confirm('delete this order?');">delete</a>
         </form> 
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