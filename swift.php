<?php
    $host = 'localhost';//Name of the host.
    $username = 'comp2190SA';//Username for the sql database.
    $password = '2020Sem1';//Password for the sql database.
    $dbname = 'SwiftDB';//Name of the sql database.

    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);

    if ($_POST['state'] == "up")
    {
        if ($_SERVER['REQUEST_METHOD']=== 'POST')
        {
            $data = explode(",",$_POST['user']);
            $firstname= $data[0];
            $lastname= $data[1];
            $email= $data[2];
            $password= $data[3];
            $address = $data[4];
            $parish = $data[5];
            $num = $data[6];

            $statement = $conn->prepare('INSERT INTO Customers (First_Name,Last_Name,Email,Pword,Home,Parish,Phone_Number)
            VALUES (:First_Name, :Last_Name, :Email, :Pword, :Home, :Parish, :Phone_Number)');

            $statement->execute(['First_Name' => $firstname,'Last_Name' => $lastname,'Email' => $email,'Pword' => $password,'Home' => $address,'Parish' => $parish,'Phone_Number' => $num]);

            echo "Success";
        }
    }
    if ($_POST['state'] == "down")
    {
        $info = explode(",",$_POST['cuser']);
        $business_name = $info[0];
        $business_address = $info[1];
        $business_number = $info[2];
        $email = $info[3];
        $contact_name = $info[4];
        $contact_num = $info[5];
        $business_regis_num = $info[6];

        $state = $conn->prepare('INSERT INTO Courier (Business_Name,Business_Address,Business_Number,Email,Contact_Name,Contact_Number,Registration_Number)
        VALUES (:Business_Name, :Business_Address, :Business_Number, :Email, :Contact_Name, :Contact_Number, :Registration_Number)');

        $state->execute(['Business_Name' => $business_name,'Business_Address' => $business_address,'Business_Number' => $business_number,'Email' => $email,'Contact_Name' => $contact_name,'Contact_Number' => $contact_num,'Registration_Number' => $business_regis_num]);

        echo "Success";
    }
?>