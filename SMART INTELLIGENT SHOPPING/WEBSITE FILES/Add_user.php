<?php


if(isset($_POST["submit"])){
        $RFID= $_POST['RFID'];
        $uid= $_POST['uid'];
        $database = "id5216540_grocery";
        $db = mysqli_connect('localhost','id5216540_vdmask','vdmask',$database);

        $count = "INSERT INTO RFID_USER VALUES('$RFID','$uid')";
        $row2 = $db->query($count);
}
header('Location: manager_logged.php');
?>

