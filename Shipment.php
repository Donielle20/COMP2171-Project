<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Swift Team Services</title>

        <link href="style.css" type="text/css" rel="stylesheet" />
    </head>
</html>
<div class = "contain1" style="height:500px;">
    <div class = "table" style="width: 1000px; position: relative; left: 135px;">
        <table>
            <tr>
                <th>Package ID</th>
                <th>Package Description</th>
                <th>Name On Package</th>
                <th>Status</th>
                <th>Date Arrived</th>
                <th>Package_Weight</th>
                <th>Customs Duty</th>
                <th>Toggle</th>
            </tr>
            <?php
                $host = 'localhost';//Name of the host.
                $username = 'comp2190SA';//Username for the sql database.
                $password = '2020Sem1';//Password for the sql database.
                $dbname = 'SwiftDB';//Name of the sql database.
            
                $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);

                $rtmt = $conn->query("SELECT * FROM Packages");
                $answers = $rtmt->fetchAll(\PDO::FETCH_ASSOC);
                $count = 0;
                $id = array();
                $des = array();
                $name = array();
                $date = array();
                $weight = array();

                foreach ($answers as $rows)
                {
                    if ($rows['Stat'] == "arrived")
                    {
                        echo "<tr>";
                        echo "<td>" . $rows['Package_ID'] . "</td>";
                        echo "<td>" . $rows['Package_Description'] . "</td>";
                        echo "<td>" . $rows['Name_On_Package'] . "</td>";
                        echo "<td>" . $rows['Stat'] . "</td>";
                        echo "<td>" . $rows['Date_Arrived'] . "</td>";
                        echo "<td>" . $rows['Package_Weight'] . "</td>";
                        echo "<td>" . "<input style='width: 100px;'>" . "</td>";
                        echo "<td>" . "<button>View</button>" . "</td>";
                        echo "</tr>";
                        array_push($id,$rows['Package_ID']);
                        array_push($des,$rows['Package_Description']);
                        array_push($name,$rows['Name_On_Package']);
                        array_push($date,$rows['Date_Arrived']);
                        array_push($weight,$rows['Package_Weight']);
                        $count = $count + 1;
                    }
                }
                if ($count == 0)
                {
                    echo "<tr>";
                    echo "<td>" . "NO" . "</td>";
                    echo "<td>" . "NEW" . "</td>";
                    echo "<td>" . "PACKAGES" . "</td>";
                    echo "<td>" . "HAVE" . "</td>";
                    echo "<td>" . "BEEN" . "</td>";
                    echo "<td>" . "ADDED" . "</td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </div>
</div>

<div class = "result">

</div>

<script type="text/javascript">
    var count = <?php echo $count;?>;
    var id = <?php echo json_encode($id); ?>;
    var des = <?php echo json_encode($des); ?>;
    var name = <?php echo json_encode($name); ?>;
    var date = <?php echo json_encode($date); ?>;
    var weight = <?php echo json_encode($weight); ?>;

    for (let i = 0; i < count; i++) 
    {
        document.getElementsByTagName("button")[i].addEventListener("click",test);
        function test()
        {
            var num = document.getElementsByTagName("input")[i].value;
            var total = 0;
            if (weight[i] <= 1)
            {
                total = 4 + parseInt(num);
                document.getElementsByClassName("result")[0].innerHTML = "<h2 style = 'background-color:rgb(73, 72, 72); padding:1em; color: white;'>" + "Package ID: " + id[i] + "<br>" + "Description: " + des[i] + "<br>" + "Date Arrived: " + date[i] + "<br>" + "Weight: " + weight[i] + " lbs" + "<br>" + "Total: $" + total + "</h2>";
            }
            if (weight[i] == 2)
            {
                total = 7 + parseInt(num);
                document.getElementsByClassName("result")[0].innerHTML = "<h2 style = 'background-color:rgb(73, 72, 72); padding:1em; color: white;'>" + "Package ID: " + id[i] + "<br>" + "Description: " + des[i] + "<br>" + "Date Arrived: " + date[i] + "<br>" + "Weight: " + weight[i] + " lbs" + "<br>" + "Total: $" + total + "</h2>";
            }
            if (weight[i] == 3)
            {
                total = 9.5 + parseInt(num);
                document.getElementsByClassName("result")[0].innerHTML = "<h2 style = 'background-color:rgb(73, 72, 72); padding:1em; color: white;'>" + "Package ID: " + id[i] + "<br>" + "Description: " + des[i] + "<br>" + "Date Arrived: " + date[i] + "<br>" + "Weight: " + weight[i] + " lbs" + "<br>" + "Total: $" + total + "</h2>";
            }
            if (weight[i] == 4)
            {
                total = 12 + parseInt(num);
                document.getElementsByClassName("result")[0].innerHTML = "<h2 style = 'background-color:rgb(73, 72, 72); padding:1em; color: white;'>" + "Package ID: " + id[i] + "<br>" + "Description: " + des[i] + "<br>" + "Date Arrived: " + date[i] + "<br>" + "Weight: " + weight[i] + " lbs" + "<br>" + "Total: $" + total + "</h2>";
            }
            if (weight[i] == 5)
            {
                total = 14.5 + parseInt(num);
                document.getElementsByClassName("result")[0].innerHTML = "<h2 style = 'background-color:rgb(73, 72, 72); padding:1em; color: white;'>" + "Package ID: " + id[i] + "<br>" + "Description: " + des[i] + "<br>" + "Date Arrived: " + date[i] + "<br>" + "Weight: " + weight[i] + " lbs" + "<br>" + "Total: $" + total + "</h2>";
            }
            if (weight[i] == 6)
            {
                total = 17 + parseInt(num);
                document.getElementsByClassName("result")[0].innerHTML = "<h2 style = 'background-color:rgb(73, 72, 72); padding:1em; color: white;'>" + "Package ID: " + id[i] + "<br>" + "Description: " + des[i] + "<br>" + "Date Arrived: " + date[i] + "<br>" + "Weight: " + weight[i] + " lbs" + "<br>" + "Total: $" + total + "</h2>";
            }
            if (weight[i] == 7)
            {
                total = 19.50 + parseInt(num);
                document.getElementsByClassName("result")[0].innerHTML = "<h2 style = 'background-color:rgb(73, 72, 72); padding:1em; color: white;'>" + "Package ID: " + id[i] + "<br>" + "Description: " + des[i] + "<br>" + "Date Arrived: " + date[i] + "<br>" + "Weight: " + weight[i] + " lbs" + "<br>" + "Total: $" + total + "</h2>";
            }
            if (weight[i] == 8)
            {
                total = 22 + parseInt(num);
                document.getElementsByClassName("result")[0].innerHTML = "<h2 style = 'background-color:rgb(73, 72, 72); padding:1em; color: white;'>" + "Package ID: " + id[i] + "<br>" + "Description: " + des[i] + "<br>" + "Date Arrived: " + date[i] + "<br>" + "Weight: " + weight[i] + " lbs" + "<br>" + "Total: $" + total + "</h2>";
            }
            if (weight[i] == 9)
            {
                total = 24.5 + parseInt(num);
                document.getElementsByClassName("result")[0].innerHTML = "<h2 style = 'background-color:rgb(73, 72, 72); padding:1em; color: white;'>" + "Package ID: " + id[i] + "<br>" + "Description: " + des[i] + "<br>" + "Date Arrived: " + date[i] + "<br>" + "Weight: " + weight[i] + " lbs" + "<br>" + "Total: $" + total + "</h2>";
            }
            if (weight[i] >= 10)
            {
                total = 27 + parseInt(num);
                document.getElementsByClassName("result")[0].innerHTML = "<h2 style = 'background-color:rgb(73, 72, 72); padding:1em; color: white;'>" + "Package ID: " + id[i] + "<br>" + "Description: " + des[i] + "<br>" + "Date Arrived: " + date[i] + "<br>" + "Weight: " + weight[i] + " lbs" + "<br>" + "Total: $" + total + "</h2>";
                
                httpRequest = new XMLHttpRequest();

                var newID = id[i];
                var newPrice = total;
                var url = "price_update.php";

                httpRequest.onreadystatechange = processName;
                httpRequest.open('POST', url);
                httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                httpRequest.send('newID=' + encodeURIComponent(newID) + "&newPrice=" + encodeURIComponent(newPrice));

                function processName()
                {
                    if (httpRequest.readyState === XMLHttpRequest.DONE) 
                    {
                        if (httpRequest.status === 200) 
                        {
                            var response = httpRequest.responseText;
                            // let answer = document.getElementsByClassName("content")[0].innerHTML = data;
                            alert(response);
                        } 
                        else 
                        {
                        alert('There was a problem with the request.');
                        }
                    }
                }
            }
        }
    }
</script>