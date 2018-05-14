<?php
$user="id5216540_vdmask";
$password="vdmask";
$database = "id5216540_grocery";
$connect=mysqli_connect('localhost',$user,$password,$database);

if (isset($_GET['pr'])) {
    if ($_GET['pr'] == 'gdsfk')
        echo "not string";
    else
        echo "string";
     $SQL = "INSERT INTO $database.CurrentlyLogged (uid) VALUES ('".$_GET["pr"]."')";     
     $qc = mysqli_query($connect,$SQL);
    }
else {
    echo 0;
}





    // Execute SQL statement
    //$result = $database->query($SQL);
    //mysql_query($SQL);
// header("Location: index.php");
?>