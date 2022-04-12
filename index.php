<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Swift Team Services</title>

        <link href="style.css" type="text/css" rel="stylesheet" />
        <script src="script_3.js"></script>
    </head>

    <body>
        <header>
            <div class = "heading">
                <h1>Swift Team Services</h1>
                <ul>
                    <li class = "first_1" id="first_1"><a href="#">Home</a></li>
                    <li class = "second_1" id="second_1"><a href="#">Package</a></li>
                    <li class = "third_1" id="third_1"><a href="#">Services</a></li>
                    <li class = "fourth_1" id="fourth_1"><a href="#">About Us</a></li>
                    <li class = "fifth_1" id="fifth_1"><a href="#">Contact</a></li>
                    <li class = "sixth_1" id="sixth_1"><a href="logout.php">Sign Out</a> </li>
                    <div class = "sname">
                        <?php
                            $host = 'localhost';//Name of the host.
                            $username = 'comp2190SA';//Username for the sql database.
                            $password = '2020Sem1';//Password for the sql database.
                            $dbname = 'SwiftDB';//Name of the sql database.
                        
                            $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);

                            $stmt = $conn->query("SELECT * FROM Customers");
                            $results = $stmt->fetchAll(\PDO::FETCH_ASSOC);

                            foreach ($results as $row)
                            {
                                if($_POST['mail'] == $row['Email'] and $_POST['passw'] == $row['Pword'])
                                {
                                    session_start();
                                    $_SESSION['firstname'] = $row['First_Name'];
                                    $_SESSION['lastname'] = $row['Last_Name'];
                                    echo "<h4>" . $_SESSION['firstname'] . " " . $_SESSION['lastname'] . "</h4>";
                                }  
                            }
                        ?> 
                    </div>   
                </ul>
            </div>
        </header>
        <main>
            <div class = "content_3">
                
            </div>
        </main>
    </body>
</html>