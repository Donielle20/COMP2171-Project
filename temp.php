<button class="trial" style = "display:none;">Send</button>

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
            $id = array(0);
            $desc = array(0);
            $name = array(0);
            $stat = array(0);
            $date = array(0);
            $weight = array(0);

            foreach ($answers as $rows)
            {
                echo "<tr>";
                echo "<td>" . $rows['Package_ID'] . "</td>";
                echo "<td>" . $rows['Package_Description'] . "</td>";
                echo "<td>" . $rows['Name_On_Package'] . "</td>";
                echo "<td>" . $rows['Stat'] . "</td>";
                echo "<td>" . $rows['Date_Arrived'] . "</td>";
                echo "<td>" . $rows['Package_Weight'] . "</td>";
                echo "</tr>";
            }
        ?>
    </table>
</div>
<div class="content_n">
    
</div>

<script type="text/javascript">
    // for (let i = 0; i < 4; i++) 
    // {
    //     document.getElementsByTagName("button")[i].addEventListener("click",test);
    //     function test()
    //     {
    //         alert(id[i]);
    //         // document.getElementsByClassName("content_n")[0].innerHTML = "<h1>" + id[i] + "</h1>";
    //     }
    // }
</script>