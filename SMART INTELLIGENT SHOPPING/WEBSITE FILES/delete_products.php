<?php


if(isset($_POST["submit"])){
        $cpid= $_POST['cpid'];
        $database = "id5216540_grocery";
        $db = mysqli_connect('localhost','id5216540_vdmask','vdmask',$database);
        echo $cpid;
        $result1 = $db->query("delete FROM PRODUCTS where ID=$cpid");
           // header('Location: Admin_logged.php');
}
?>

