<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Swift Team Services</title>

        <link href="style.css" type="text/css" rel="stylesheet" />
    </head>
</html>
<div class = "table3">
    <table>
        <tr>
            <th>Package ID</th>
            <th>Package Description</th>
            <th>Name On Package</th>
            <th>Status</th>
            <th>Date Arrived</th>
            <th>Package_Weight</th>
            <th>Charge</th>
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
            $price;

            foreach ($answers as $rows)
            {
                if ($rows['Stat'] == "updated")
                {
                    $price = 154.62 * floatval($rows['Price']);
                    echo "<tr>";
                    echo "<td>" . $rows['Package_ID'] . "</td>";
                    echo "<td>" . $rows['Package_Description'] . "</td>";
                    echo "<td>" . $rows['Name_On_Package'] . "</td>";
                    echo "<td>" . $rows['Stat'] . "</td>";
                    echo "<td>" . $rows['Date_Arrived'] . "</td>";
                    echo "<td>" . $rows['Package_Weight'] . "</td>";
                    echo "<td>" . "$" . $price . "</td>";
                    echo "<td>" . "<button>Clear</button>" . "</td>";
                    echo "</tr>";
                    array_push($id,$rows['Package_ID']);
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
                    echo "<td>" . "$$$$$" . "</td>";
                    echo "<td>" . "XXXXX" . "</td>";
                    echo "</tr>";
                }
        ?>
    </table>
</div>
<div class="content_n">
    
</div>

<script type="text/javascript">
    var num = <?php echo $count; ?>;
    var id = <?php echo json_encode($id); ?>;
    for (let i = 0; i < 2; i++) 
    {
        document.getElementsByTagName("button")[i].addEventListener("click",test);
        function test()
        {
            httpRequest = new XMLHttpRequest();

            var url = "toggle.php";
            var temp = id[i];
            httpRequest.onreadystatechange = processName;
            httpRequest.open('POST', url);
            httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            httpRequest.send('temp=' + encodeURIComponent(temp));

            function processName()
            {
                if (httpRequest.readyState === XMLHttpRequest.DONE) 
                {
                    if (httpRequest.status === 200) 
                    {
                        let response = httpRequest.responseText;
                        // alert(response);
                        if (response == "SUCCES")
                        {
                            location.reload();
                        }
                    } 
                    else 
                    {
                    alert('There was a problem with the request.');
                    }
                }
            }
            <?php 
                // $newID = $_POST['id'];
                // // $vtmt = $conn->prepare("UPDATE Packages SET Stat = 'cleared' WHERE Package_ID = $newID");
                // $vtmt->execute();    
            ?>
            // alert(id[i]);
            // document.getElementsByClassName("content_n")[0].innerHTML = "<h1>" + id[i] + "</h1>";
        }
    }
</script>