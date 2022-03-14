<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Swift Team Services</title>

        <link href="style.css" type="text/css" rel="stylesheet" />
        <script src="script.js"></script>
    </head>

    <body>
        <header>
            <div class = "heading">
                <h1>Swift Team Services</h1>
                <ul>
                    <li class = "first" id="first"><a href="#">Home</a></li>
                    <li class = "second" id="second"><a href="#">Package</a></li>
                    <li class = "third" id="third"><a href="#">Services</a></li>
                    <li class = "fourth" id="fourth"><a href="#">About Us</a></li>
                    <li class = "fifth" id="fifth"><a href="#">Contact</a></li>
                    <li class = "sixth" id="sixth"><a href="logout.php">Sign Out</a> </li>
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
            <div class = "content">
                
            </div>
        </main>
    </body>
</html>