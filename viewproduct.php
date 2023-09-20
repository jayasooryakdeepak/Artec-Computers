<html>
    <center><body>
    <table border="1">
  <tr>
    <th>PRODUCT CODE</th>
    <th>PRODUCT NAME</th>
    <th>CATEGORY</th>
    <th>MATERIAL</th>
    <th>QUANTITY</th>
    <th>UNIT PRICE</th>
    <th>SELLING PRICE</th>
    <th>FILE NAME</th>
    <th>DESCRIPTION</th>
</tr>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Artec_Computers";
$s="select * from product";
$retval=mysqli_query($this->conn,$str);
   return $retval;

  $rs=$db -> selectData($s);
  while($row=mysqli_fetch_array($rs))
  {
    ?>
  <tr>
    <td><?php echo $row['productcode'];  ?> </td>
    <td><?php echo $row['productname'];  ?> </td>
    <td><?php echo $row['qty'];  ?> </td>
    <td><?php echo $row['unitprice'];  ?> </td>
    <td><?php echo $row['sellingprice'];  ?> </td>
    <td><img src="<?php echo $row['filename'];  ?>" width="100" height="100"/></td>
    <td><?php echo $row['description'];  ?> </td>
  <?php } ?>
  </table>
  </body></center>
  </html>
