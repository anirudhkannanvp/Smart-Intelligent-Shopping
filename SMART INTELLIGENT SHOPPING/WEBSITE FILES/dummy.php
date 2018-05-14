<?php
   session_start();
   $db="id5216540_grocery";
   $connect = mysqli_connect('localhost','id5216540_vdmask','vdmask',$db);
   $query = mysqli_query($connect,"SELECT * FROM cart");
   $var1=$_SESSION['cid12'];
   $q = mysqli_query($connect,"SELECT rfid from RFID_USER where uid=$var1");
    $result = mysqli_fetch_assoc($q);
    $rfid = $result['rfid'];
    $q2 = mysqli_query($connect,"SELECT cunt(*) AS count from CurrentyLogged where uid=$rfid");
    $result2 = mysqli_fetch_assoc($q2);
    if($result2['count']==0){
        echo "<p>";
        echo "0";
        echo "</p>";
    }
    else{
        echo "<p>";
        echo "1";
        echo "</p>";
    }
   /*
 while ($row = mysqli_fetch_array ($query)) {
      
      $ppid = $row["pid"]; 
      $pno_of_items = $row["no_of_items"];  
      $total = $row["no_of_items"]*$row["cost_of_item"]; 
      $today1 = date("Y-m-d H:i:s");

      $var1=$_SESSION['cid12'];
      $_SESSION['cid12'] = null;
      //echo $var1;
      $q = mysqli_query($connect,"INSERT INTO purchase VALUES($var1,$ppid,$pno_of_items,$total,NOW())");
                                           
  }*/
  //$qc = mysqli_query($connect,"DELETE from cart where pid>0");
  
  
header('Location: index.php');
?>
