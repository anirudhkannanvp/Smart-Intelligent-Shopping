

<?php

        $database = "id5216540_grocery";
        $db = mysqli_connect('localhost','id5216540_vdmask','vdmask',$database);
        
        $result3 = $db->query("SELECT * FROM dummy2 ");
        //header('Location: Admin_logged.php');

?>

      	<?php
     
 while ($row = mysqli_fetch_array ($result3)) {
      
      echo $row["itemName"]; echo ":";
      


  }
 // $result1 = $db->query("delete FROM dummy2 where itemId!=0");
  ?><form action="route.php" method="post" enctype="multipart/form-data">
      	
      	
        <input type="submit" name="submit" value="SHOW ROUTE"/>
    </form>


