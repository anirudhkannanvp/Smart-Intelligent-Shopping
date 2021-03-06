<html>
<head>
<style>
body{
  /*background: #36394B;*/
   background-image: url("bg_bg.jpg");
    background-size: 1800px 1200px;
  /*background: 1.jpeg;*/
  height: 100%;
}

#container{
  margin: 0 auto;
  padding-top: 2%;
}
</style>
<?php 
/* Open connection to "zing_db" MySQL database. */
$mysqli = new mysqli("localhost", "id5216540_vdmask", "vdmask", "id5216540_grocery");
 
/* Check the connection. */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
 
/* Fetch result set from t_test table */
$data=mysqli_query($mysqli,"SELECT * FROM cords");
?>
<script type="text/javascript">
labels=[<?php 
while($info=mysqli_fetch_array($data))
    echo $info['x'].','; /* We use the concatenation operator '.' to add comma delimiters after each data value. */
?>];
ydata=[<?php 
while($info=mysqli_fetch_array($data))
    echo $info['y'].','; /* We use the concatenation operator '.' to add comma delimiters after each data value. */
?>];
function call(){
$(function () { 
  Highcharts.setOptions({
    colors: ['#67BCE6'],
    chart: {
        style: {
            fontFamily: 'sans-serif',
            color: '#fff'
        }
    }
});  
  $('#container').highcharts({
        chart: {
            type: 'line',
            backgroundColor: '#000000'//color behnd the graph
        },
        title: {
            text: 'MY ITEMS ROUTE',
            style: {  
              color: '#fff'
            }
        },
        xAxis: {
            gridLineWidth: .5,
            gridLineColor: 'white',
            tickWidth: 0,
            labels: {
              style: {
                  color: '#fff',
                 }
              },
            categories: labels
        },
        yAxis: {
           gridLineWidth: .5,
          //gridLineDashStyle: 'dash',
          gridLineColor: 'white',
           title: {
                text: '',
                style: {
                  color: '#fff'
                 }
            },
            labels: {
              formatter: function() {
                        return Highcharts.numberFormat(this.value, 0, '', ',');
                    },
              style: {
                  color: '#fff',
                 }
              }
            },
        legend: {
            enabled: false,
        },
        credits: {
            enabled: false
        },
        tooltip: {
           valuePrefix: '',
           valueSuffix:'mm'
        },
        plotOptions: {
          column: {
            borderRadius: 2,
             pointPadding: 0,
            groupPadding: 0.1
            } 
        },
        series: [{
            name: 'Item',
           data : ydata
        }]
    });
});}

</script>

</head>
<body onload="call()">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>

<div id="container" style="width:100%; height:700px;"></div>
</body>
</html>