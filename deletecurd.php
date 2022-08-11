<?php

include 'Connect.php';

$id=$_REQUEST['Registerid'];

$result ="DELETE FROM booking WHERE id='$id'";

$data=mysqli_query($con,$result);

if($data=== TRUE)
{
    header("Location:crud.php");
 }

?>
