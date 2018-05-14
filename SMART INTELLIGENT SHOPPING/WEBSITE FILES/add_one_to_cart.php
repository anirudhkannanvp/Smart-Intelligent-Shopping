<?php


if(isset($_POST["submit"])){
        $cpid= $_POST['cpid'];
        $database = "id5216540_grocery";
        $db = mysqli_connect('localhost','id5216540_vdmask','vdmask',$database);

        $count = "SELECT no_of_items from products where ID=$cpid";
        $row2 = $db->query($count);
        $row1 = mysqli_fetch_assoc($row2);
        if($row1['no_of_items']<1){
            header('Location: show_cart.php');
        }
        else{
        $result = $db->query("update cart set no_of_items=no_of_items+1 where pid=$cpid");
        
            header('Location: show_cart.php');
        }
        
    ?>
    <form action="costomer_logged.php" method="post" enctype="multipart/form-data">
        <input type="submit" name="submit" value="Go BACK"/>
    </form>
    <?php
}
?>

