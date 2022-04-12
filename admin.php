<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Swift Team Services</title>

        <link href="style.css" type="text/css" rel="stylesheet" />
        <script src="script_2.js"></script>
    </head>

    <body>
        <header>
            <div class = "heading">
                <h1>Swift Team Services</h1>
                <ul>
                    <div class = "five">
                        <li class = "second_2" id="second_2"><a href="#">Log Package</a></li>

                        <div class = "drop1" id = "down">
                            <ul>
                                <li class="trial1"><a href = "#">Package Entry</a></li>
                                <li class="trial2"><a href = "#">View Package</a></li>
                            </ul>
                        </div>
                    </div>
                    <li class = "third_2" id="third_2"><a href="#">Label</a></li>
                    <li class = "fourth_2" id="fourth_2"><a href="#">Shipments</a></li>
                    <div class = "five">
                        <li class = "fifth_2" id="fifth_2"><a href="#">Notify Customer</a></li>
                    </div>
                    <div class = "five">
                        <li class = "first_2" id="first_2"><a href="#">Clear Package</a></li>
                    </div>
                    <div>
                        <li class = "sixth_2" id="sixth_2"><a href="logout.php">Sign Out</a> </li>
                    </div>
                    
                    <div class = "tname">
                        <?php
                            $host = 'localhost';//Name of the host.
                            $username = 'comp2190SA';//Username for the sql database.
                            $password = '2020Sem1';//Password for the sql database.
                            $dbname = 'SwiftDB';//Name of the sql database.
                        
                            $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);

                            $rtmt = $conn->query("SELECT * FROM Admins");
                            $answers = $rtmt->fetchAll(\PDO::FETCH_ASSOC);

                            foreach ($answers as $rows)
                            {
                                if($_POST['mail2'] == $rows['Email'] and $_POST['passw2'] == $rows['Pword'])
                                {
                                    session_start();
                                    $_SESSION['firstname'] = $rows['First_Name'];
                                    $_SESSION['lastname'] = $rows['Last_Name'];
                                    echo "<h4>" . $_SESSION['firstname'] . " " . $_SESSION['lastname'] . "</h4>";
                                }
                            }
                        ?> 
                    </div>   
                </ul>
            </div>
        </header>
        <main>
            <div class = "content">
                
            </div>
        </main>
    </body>
</html>