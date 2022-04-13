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
    $name = "";
    $stat = array(0);
    $date = array(0);
    $weight = array(0);

    foreach ($answers as $rows)
    {
        if ($rows['Stat'] == "updated")
        {
            if ($name == "")
            {
                $info = explode(" ",$rows['Name_On_Package']);
                $name = $name . $info[0];
            }
            else
            {
                $info = explode(" ",$rows['Name_On_Package']);
                $name = $name . "," . $info[0];
            }   
        }
    }
    echo $name;
?>