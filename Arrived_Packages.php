<?php
    $host = 'localhost';//Name of the host.
    $username = 'comp2190SA';//Username for the sql database.
    $password = '2020Sem1';//Password for the sql database.
    $dbname = 'SwiftDB';//Name of the sql database.

    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);

    $info = explode(",",$_POST['pack']); 
    $id = $info[0];
    $des = $info[1];
    $name = $info[2];
    $address = $info[3];
    $parish = $info[4];
    $date = $info[5];
    $weight = $info[6];
    $status = "arrived";

    if ($_POST['stat'] == "package")
    {
        if ($_SERVER['REQUEST_METHOD']=== 'POST')
        {
            $state = $conn->prepare('INSERT INTO Packages (Package_ID,Package_Description,Name_On_Package,Home,Parish,Stat,Date_Arrived,Package_Weight,Price)
            VALUES (:Package_ID,:Package_Description,:Name_On_Package,:Home,:Parish,:Stat,:Date_Arrived,:Package_Weight,:Price)');

            $state->execute(['Package_ID' => $id,'Package_Description' => $des,'Name_On_Package' => $name,'Home' => $address,'Parish' => $parish,'Stat' => $status,'Date_Arrived' => $date,'Package_Weight' => $weight, 'Price' => 0.00]);

            echo "Success";
        }
    }
?>
<div class = "contain1">
    <div class = "table">
        <table>
            <tr>
                <th>Package ID</th>
                <th>Package Description</th>
                <th>Name On Package</th>
                <th>Status</th>
                <th>Date Arrived</th>
                <th>Package_Weight</th>
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
                        echo "</tr>";
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