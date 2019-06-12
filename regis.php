<?php 
require_once "connect.php";
$name=$_POST['nme'];
$busi=$_POST['bus'];
$pwd=$_POST['pwd'];
$sql=" insert into regis_data (name,busi,pas)values('$name','$busi','$pwd')";
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