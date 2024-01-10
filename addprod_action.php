<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Artec_Computers";

global $user_name;
global $pwd;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


//$prodcode = $_POST[ 'pcode' ];
$prodname = $_POST[ 'pname' ];
$quantity = $_POST['quant'];
$uprice = $_POST[ 'uprice' ];
$sprice = $_POST[ 'sprice' ];
$descp = $_POST[ 'descp' ];
$target_dir = 'uploads/';   
echo $target_file = $target_dir . basename( $_FILES[ 'file' ][ 'name' ] );
$uploadOk = 1;
$imageFileType = strtolower( pathinfo( $target_file, PATHINFO_EXTENSION ) );
$FileType = strtolower( pathinfo( $target_file, PATHINFO_EXTENSION ) );

if ( isset( $_POST[ 'submit' ] ) ) {

    if ( move_uploaded_file( $_FILES[ 'file' ][ 'tmp_name' ], $target_file ) ) 
    {
        $s = "select * from Product_details where productname='$prodname'";
        $rt = 2;
        if ( $rt == 1 )
        {
            echo"<script>alert('Already Exists');window.location='admin_products.php';</script>";
        } else {
            $sql = "insert into Product_Details (productname,qty,unitprice,sellingprice,description,filename) 
            values('$prodname','$quantity','$uprice','$sprice','$descp','$target_file')";
            $conn->query($sql);
            echo "<script>alert('Product Added Successfully');window.location='admin_products.php';</script>";
        }
    } else {
        //echo "<script>alert('Sorry, there was an error uploading your file.');window.location='addprod.php';</script>";
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
