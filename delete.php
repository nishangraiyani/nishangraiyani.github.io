<?php
$conn=mysqli_connect("localhost", "root", "","detsdb") or die(mysqli_error($conn));

$id=$_REQUEST['id'];

$result = mysqli_query($conn,"delete FROM tbluser where id='$id'");
echo"record deleted successfully...";
header("location:admin-dashboard.php");




?>

