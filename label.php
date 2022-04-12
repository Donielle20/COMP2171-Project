<div class = "show">
    <div class="bar">
        <button class="preview">Show Preview</button>
        <br><br>
    </div>
    <div class="table">
        <?php
            $host = 'localhost';//Name of the host.
            $username = 'comp2190SA';//Username for the sql database.
            $password = '2020Sem1';//Password for the sql database.
            $dbname = 'SwiftDB';//Name of the sql database.

            $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);

            $rtmt = $conn->query("SELECT * FROM Packages");

            $answers = $rtmt->fetchAll(\PDO::FETCH_ASSOC);
            $count = 0;
        ?> 
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