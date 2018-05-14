<!DOCTYPE html>
<html>

<script>

</script>

<head>
  <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
  <script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
  </script>
  <style>
    html,
    body,
    #myChart {
      height: 100%;
      width: 100%;
    }
  </style>
</head>

<body>
  <div id='myChart'></div>
  <script><?php 

$mysqli = new mysqli("localhost", "id5216540_vdmask", "vdmask", "id5216540_grocery");
 
/* Check the connection. */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
 
/* Fetch result set from t_test table */
$data=mysqli_query($mysqli,"SELECT * FROM cords");
?>
    //var myData = [24, 68, 48, 70, 40, 15, 30];
    var myData=[<?php 
while($info=mysqli_fetch_array($data))
    echo $info['y'].','; /* We use the concatenation operator '.' to add comma delimiters after each data value. */
?>];

var myLabels=[<?php 
while($info=mysqli_fetch_array($data))
    echo '"'.$info['x'].'",'; /* The concatenation operator '.' is used here to create string values from our database names. */
?>];
<?php
/* Close the connection */
$mysqli->close(); 
?>
    var myConfig = {
      "graphset": [{
        "type": "bar",
        "title": {
          "text": "Data Pulled from MySQL Database"
        },
        "scale-x": {
          "labels": ["Webster", "Parnel", "Dena", "Tyrell", "Martha", "Summer", "Linton"]
        },
        "series": [{
          "values": myData
        }]
      }]
    };

    zingchart.render({
      id: 'myChart',
      data: myConfig,
      height: "100%",
      width: "100%"
    });
    window.onload=function(){
zingchart.render({
    id:"myChart",
    width:"100%",
    height:400,
    data:{
    "type":"bar",
    "title":{
        "text":"Data Pulled from MySQL Database"
    },
    "scale-x":{
        "labels":myLabels
    },
    "series":[
        {
            "values":myData
        }
]
}
});
};
  </script>
</body>

</html>