<?php
    $host = 'localhost';//Name of the host.
    $username = 'comp2190SA';//Username for the sql database.
    $password = '2020Sem1';//Password for the sql database.
    $dbname = 'SwiftDB';//Name of the sql database.
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);

    if ($_SERVER['REQUEST_METHOD']=== 'POST')
    {
        $data = explode(",",$_POST['user']);
        $num = (int)$data[5];

        $statement = $conn->prepare('INSERT INTO Customers (First_Name, Last_Name, Email, Home, Parish, Phone_Number)
        VALUES (:First_Name, :Last_Name, :Email, :Home, :Parish, :Phone_Number)');

        $statement->execute(['First_Name' => $data[0],'Last_Name' => $data[1],'Email' => $data[2],'Home' => $data[3],'Parish' => $data[4],'Phone_Number' => $data[5]]);
        
        echo "Success";
    }
?>