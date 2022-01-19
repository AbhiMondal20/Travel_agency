<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="Chart.min.js"></script>
    <title>My Pie Chart</title>
</head>
<body>
    <div style="width: 600px;">
        <canvas id="myChart"></canvas>
    </div>
<?php
    //connection
    $conn = new mysqli("localhost","root","","testdb");

    if($conn->connect_error)
        die("Connection Error: ".$conn->connect_error);

    //query
    $sql = "SELECT `v_title`, `v_category`, COUNT(`v_subscriber`) AS `no_of_subs` FROM `subs_record` 
            GROUP BY `v_title`,`v_category`";

    $res = $conn->query($sql);

    $arrdata = "";
    $arrlabels = "";

    while($row = $res->fetch_assoc())
    {
        $arrlabels .= "'".$row['v_title']." ($row[v_category])',";    //adding '' to values as it's a string
        $arrdata .= $row['no_of_subs'].",";        //it has numeric values
    }

    $labels = rtrim($arrlabels,",");     //for removing last ',' from labels string
    $data = rtrim($arrdata,",");         //for removing last ',' from data string

    $data = "{      
        labels: [$labels],
        datasets: [{
            data: [$data],
            backgroundColor: [
                'rgb(255, 99, 132)',
                'rgb(54, 162, 235)',
                'rgb(255, 206, 86)',
                'rgb(75, 192, 192)',
                'rgb(153, 102, 255)'
            ]
        }]
    }";

    $jsobj = "{
                type: 'pie',
                data: $data,
                options: {
                    title: {
                        display: true,
                        text: 'Youtube Video Subscription Chart',
                        fontSize: 20
                    },
                    legend: {
                        position: 'right',
                        labels: {
                            fontStyle: 'bold'
                        }
                    }
                }
            }";

    echo "<script>
                var ctx = document.getElementById('myChart').getContext('2d');
                new Chart(ctx,$jsobj);
          </script>";

    $conn->close();
?>
</body>
</html>