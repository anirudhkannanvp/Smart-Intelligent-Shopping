<?php
$user="id5216540_vdmask";
$password="vdmask";
$database = "id5216540_grocery";
$connect=mysqli_connect('localhost',$user,$password,$database);

if (isset($_GET['press'])) {
    if ($_GET['press'] == 'gdsfk')
        echo "not string";
    else
        echo "string";
        echo $_GET["press"];
        $string="1.03:4.08:Lays:9.0:6:Jim Jam:Z";
        $Array = (explode(":",$_GET["press"]));
        print_r($Array);
        $length = sizeof($Array);
        echo $length;
        $i=0;
        while(1)
            {
                if( strcmp($Array[$i],'Z')==0){
                    break;
                }
                
                $x = $Array[$i];
                $i=$i+1;
                $y = $Array[$i];
                $i=$i+1;
                $itemName = $Array[$i];
                $i=$i+1;
                $SQL = "INSERT INTO $database.cords VALUES ('$itemName',$x,$y)";     
                $qc = mysqli_query($connect,$SQL);
                
            }
    }
else {
    
    echo 0;
}

?>