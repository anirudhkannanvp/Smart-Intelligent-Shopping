<?php
if(isset($_POST["submit"])){
        $cpid= $_POST['cpid'];
        $value= $_POST['Acost'];
        $value2 = $_POST['Ano_of_items'];
        $value3 = $_POST['Acatogery'];
        $value4 = $_POST['AItem_name'];
        
        $database = "id5216540_grocery";
        $db = mysqli_connect('localhost','id5216540_vdmask','vdmask',$database);
        if($value2 != NULL){
        $result = $db->query("update products set no_of_items=$value2 where ID=$cpid");}
        if($value != NULL){
        $result2 = $db->query("update products set cost=$value where ID=$cpid");}
        if($value3 != NULL){
        $result3 = $db->query("update products set catogery='$value3' where ID=$cpid");}
        if($value4 != NULL){
        $result4 = $db->query("update products set Item_name='$value4' where ID=$cpid");}
        
        header('Location: Admin_logged.php');
        
}
?>

