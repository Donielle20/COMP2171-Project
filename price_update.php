<?php
    $host = 'localhost';//Name of the host.
    $username = 'comp2190SA';//Username for the sql database.
    $password = '2020Sem1';//Password for the sql database.
    $dbname = 'SwiftDB';//Name of the sql database.

    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);

    $rtmt = $conn->query("SELECT * FROM Packages");

    $answers = $rtmt->fetchAll(\PDO::FETCH_ASSOC);

    $id = $_POST['newID'];
    $price = $_POST['newPrice'];

    $vtmt = $conn->prepare("UPDATE Packages SET Price = $price  WHERE Package_ID = $id");
    $vtmt->execute();

    echo "SUCCES";
?>