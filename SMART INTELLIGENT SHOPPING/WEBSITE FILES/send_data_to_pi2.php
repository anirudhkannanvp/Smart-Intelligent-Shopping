<?php
$user="id5216540_vdmask";
$password="vdmask";
$database = "id5216540_grocery";
$connect=mysqli_connect('localhost',$user,$password,$database);

$query = "SELECT * FROM dummy WHERE id = 1 " ;


$result = mysqli_query($connect,$query);
$row = mysqli_fetch_assoc($result);
?>
<p><?php
echo $row['pid'];
?>
</p>
