<html>
<head>
    <title>ADD PRODUCT</title>
    
  </head>
  <a href="adminhome.php">Home</a>
<a href="addcatg.php">Category</a>
<a href="addmaterial.php">Material</a>
<a href="addprod.php">Item</a>

<a href="viewusers.php">Users</a>
<a href="vorders.php">Orders</a>
<a href="logout.php">Logout</a>
<br/>
<a href="viewproduct.php">View Items</a>
    <form action="addprod_action.php" method="POST" enctype="multipart/form-data">
           <center> <h2><u>ADD PRODUCT</h2></u>
        
      <input type ="text" placeholder="product code" name="pcode"><br><br>

 
    <input type ="text" placeholder="product name" name="pname" required>
        <br><br>
          <input type ="text" placeholder="unit price" name="uprice" required><br><br>

          <input type ="text" placeholder="selling price" name="sprice" required><br><br>

          <input type ="text" placeholder="Quantity" name="quant" required><br><br>
    
         <input type ="file"  name="file" id="file" required><br><br>

         <textarea id="descp" placeholder="enter a short description" name="descp" rows="7" cols="30">
</textarea><br><br>
        
         <input type="submit" value="submit" id="submit" name="submit" >
       <br><br>
</center>
</form>
</body>
</html>