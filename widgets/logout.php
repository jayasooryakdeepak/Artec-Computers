<?php
session_start();
session_destroy();
header("location:../it_home.php");
?>