<?php

if(isset($_POST["submit"])){
        $itemId= $_POST['itemId'];
        $itemName = $_POST['itemName'];
}
$user="id5216540_vdmask";
$password="vdmask";
$database = "id5216540_grocery";
$connect=mysqli_connect('localhost',$user,$password,$database);
$SQL = "INSERT INTO $database.dummy2 VALUES ($itemId,'$itemName')";     
$qc = mysqli_query($connect,$SQL);
$SQL2 = "DELETE from cords where x!=0 or y!=0";     
$qc2 = mysqli_query($connect,$SQL2);

 header('Location: select_products.php');
?>