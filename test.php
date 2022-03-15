<?php
    $host = 'localhost';//Name of the host.
    $username = 'comp2190SA';//Username for the sql database.
    $password = '2020Sem1';//Password for the sql database.
    $dbname = 'SwiftDB';//Name of the sql database.

    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);

    $statement = $conn->prepare('INSERT INTO Admins (First_Name,Last_Name,Email,Pword)
    VALUES (:First_Name, :Last_Name, :Email, :Pword)');

    $statement->execute(['First_Name' => "Donielle",'Last_Name' => "Hope",'Email' => "donielle@yahoo.com",'Pword' => "Apple"]);
?>