<html>
<head>
	<style>
	body{
		background-repeat: no-repeat;
		background-size: cover;
	}
</style>
</head>
<body background="b1.jpg" >

<?php
if(isset($_POST["submit"])){
        $value3 = $_POST['sitem_name'];
        $db="id5216540_grocery";
   $connect = mysqli_connect('localhost','id5216540_vdmask','vdmask',$db);
   $query = mysqli_query($connect,"SELECT * FROM product_barcode where itemName='$value3'");
   
        //header('Location: Admin_logged.php');
}
?><center>
<table cellpadding="5" cellspacing="5">
      <?php
   
   $Cart_total=0;
      echo "<center>";
      ?><table cellpadding="45" cellspacing="45">
         <?php
      echo "<tr>";
      echo "<h4>";
      
      echo "<th>"; echo "Product ID"; echo "&nbsp&nbsp";echo "</th>";
      echo "<th>"; echo "Name"; echo "&nbsp&nbsp";echo "</th>";
      echo "<th>"; echo "cost";echo "&nbsp&nbsp"; echo "</th>";
      echo "</h4>";
      echo "</tr>";
 while ($row = mysqli_fetch_array ($query,MYSQLI_ASSOC)) {
      echo "<tr>";
      echo "<h5>";
      echo "<td>"; echo $row["itemId"]; echo "&nbsp&nbsp";echo "</td>";
      echo "<td>"; echo $row["itemName"]; echo "&nbsp&nbsp";echo "</td>";
      echo "<td>"; echo $row["price"]; echo "&nbsp&nbsp";echo "</td>";
      echo "</h5>";
      echo "</tr>";
  }
  echo "<tr>";
  
  echo "</table>";
  echo "</center>";

?>
</body>
</html>
