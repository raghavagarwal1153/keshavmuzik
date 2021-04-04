
<?php
require 'connection ui.php';


$sql="select * from song where id=".$_GET['q'];
$result=mysqli_query($conn,$sql);

$row=mysqli_fetch_assoc($result);
echo $row['path'];
 
?>


