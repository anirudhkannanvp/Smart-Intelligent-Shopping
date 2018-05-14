

<?php
$user="id5216540_vdmask";
$password="vdmask";
$database = "id5216540_grocery";
$connect=mysqli_connect('localhost',$user,$password,$database);

if (isset($_GET['p'])) {
    if ($_GET['p'] == 'gdsfk')
        echo "not string";
    else
        echo "successfully added into Trolley";
        $query = "SELECT * FROM product_barcode WHERE barcode = ('".$_GET["p"]."') " ;
        
        $result = mysqli_query($connect,$query);
        $row = mysqli_fetch_assoc($result);

        $itemId = $row["itemId"];
        $itemName = $row["itemName"];
        $barcode = $row["barcode"];
        $price = $row["price"];
        echo $itemId;
        
        $SQL = "INSERT INTO $database.Trolley VALUES (1,$itemId,'$itemName', $price)";
        $qc = mysqli_query($connect,$SQL);
        //$sql2="DELETE from product_barcode where barcode=$barcode";
     
    // $qc2=mysqli_query($connect,$sql2);
    
    //   $SQL3 = "UPDATE $database.dummy set pid=$itemId where id=1)";
    //    $qc3 = mysqli_query($connect,$SQL3);
        
     
    }
else {
    echo "0";
}