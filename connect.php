<?php 
$conn= mysqli_connect("localhost","root","","test");
if(!$conn)
{
die ("connection failed:". mysqli_connect_error());
}
else echo "connected <br>";
?>