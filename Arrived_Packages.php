<?php
    $host = 'localhost';//Name of the host.
    $username = 'comp2190SA';//Username for the sql database.
    $password = '2020Sem1';//Password for the sql database.
    $dbname = 'SwiftDB';//Name of the sql database.

    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);

    if ($_POST['stat'] == "package")
    {
        if ($_SERVER['REQUEST_METHOD']=== 'POST')
        {
            $info = explode(",",$_POST['pack']); 
            $id = $info[0];
            $des = $info[1];
            $name = $info[2];
            $date = $info[3];
            $weight = $info[4];
            $status = "arrived";

            $state = $conn->prepare('INSERT INTO Packages (Package_ID,Package_Description,Name_On_Package,Stat,Date_Arrived,Package_Weight)
            VALUES (:Package_ID,:Package_Description,:Name_On_Package,:Stat,:Date_Arrived,:Package_Weight)');

            $state->execute(['Package_ID' => $id,'Package_Description' => $des,'Name_On_Package' => $name,'Stat' => $status,'Date_Arrived' => $date,'Package_Weight' => $weight]);

            echo "Success";
        }
    }
?>

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
        <tr>
            <?php
                $host = 'localhost';//Name of the host.
                $username = 'comp2190SA';//Username for the sql database.
                $password = '2020Sem1';//Password for the sql database.
                $dbname = 'SwiftDB';//Name of the sql database.
            
                $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);

                $rtmt = $conn->query("SELECT * FROM Packages");
                $answers = $rtmt->fetchAll(\PDO::FETCH_ASSOC);

                foreach ($answers as $rows)
                {
                    echo "<td>" . $rows['Package_ID'] . "</td>";
                    echo "<td>" . $rows['Package_Description'] . "</td>";
                    echo "<td>" . $rows['Name_On_Package'] . "</td>";
                    echo "<td>" . $rows['Stat'] . "</td>";
                    echo "<td>" . $rows['Date_Arrived'] . "</td>";
                    echo "<td>" . $rows['Package_Weight'] . "</td>";
                }
            ?>
        </tr>
    </table>
</div>