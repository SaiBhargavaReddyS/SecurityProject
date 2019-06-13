<?php 
require_once "connect.php";
require "Protect.php";
$name=test_input($_POST['nme']);
$busi=test_input($_POST['bus']);
$pwd=test_input($_POST['pwd']);
$sql=" insert into regis2 (name,busi,pas)values('$name','$busi','$pwd')";
if(mysqli_query($conn,$sql))
{
    mysqli_close($conn);
    echo "inserted sucessfully";
}
else{
    die("nope".mysqli_error($conn));
}
echo "contents <br>".$name."<br>".$busi."<br>".$pwd ;
?>