<?php
    $host = 'localhost';//Name of the host.
    $username = 'comp2190SA';//Username for the sql database.
    $password = '2020Sem1';//Password for the sql database.
    $dbname = 'SwiftDB';//Name of the sql database.

    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);

    $rtmt = $conn->query("SELECT * FROM Customers");
    $answers = $rtmt->fetchAll(\PDO::FETCH_ASSOC);
    $count = 0;
    $id = array(0);
    $desc = array(0);
    $name = array(0);
    $stat = array(0);
    $date = array(0);
    $weight = array(0);
    $email = "";

    foreach ($answers as $rows)
    {
        $email = $email . " " . $rows['Email'];
    }
    echo json_encode($email);
?>