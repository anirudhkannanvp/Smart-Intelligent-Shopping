<?php
if(isset($_POST["submit"])){
        $cpid= $_POST['Aeid'];
       
        $value2 = $_POST['Apassword'];
        $value3 = $_POST['A_phno'];
        
        $database = "id5216540_grocery";
        $db = mysqli_connect('localhost','id5216540_vdmask','vdmask',$database);
        
        $result2 = $db->query("update employee set e_password='$value2' where ID=$cpid");
        $result3 = $db->query("update employee customer set e_phone_no='$value3' where ID=$cpid");
        
        header('Location: Admin_logged.php');
        
}
?>

