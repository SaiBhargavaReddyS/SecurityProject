<?php
require_once "connect.php";
$sql="select * from regis_data";
$r=mysqli_query($conn,$sql);
    if(mysqli_num_rows($r)>0)
    {
        while($row=mysqli_fetch_assoc($r))
        {
            echo $row['id']." ".$row['name']." ".$row['busi']."".$row['pas']."<br>";
        }
    }

?>