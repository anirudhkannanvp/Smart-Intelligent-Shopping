<?php
if(isset($_POST["submit"])){
       	$value1 = $_POST['e_username'];
        $value2 = $_POST['e_password'];
        $value3 = $_POST['e_phone_no'];
        //echo $value1;
        //echo $value2;
        //echo $value3;
        $database = "id5216540_grocery";
        $db = mysqli_connect('localhost','id5216540_vdmask','vdmask',$database);
        
        $q = "INSERT INTO employee VALUES('$value1','$value2',$value3,now(),'')";
            $insert = $db->query($q);
        
        header('Location: Admin_logged.php');
        
}
?>

