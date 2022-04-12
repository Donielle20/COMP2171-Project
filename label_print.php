<div class="phead">
    <h1>Label Previews</h1>
    <div class="pbtn" id="pbtn"><button>PRINT</button></div>
</div>
<br><br>
<div class="countain_label">
    <?php
        $host = 'localhost';//Name of the host.
        $username = 'comp2190SA';//Username for the sql database.
        $password = '2020Sem1';//Password for the sql database.
        $dbname = 'SwiftDB';//Name of the sql database.

        $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);

        $rtmt = $conn->query("SELECT * FROM Packages");

        $answers = $rtmt->fetchAll(\PDO::FETCH_ASSOC);

        $vtmt = $conn->prepare("UPDATE Packages SET Stat = 'labeled' WHERE Stat = 'arrived'");
        $vtmt->execute();

        foreach ($answers as $rows)
        {
            if ($rows['Stat'] == "labeled")
            {
                ?>
                <div class="print">
                    <div class="weight">
                        <h2><?php echo $rows['Package_Weight'];?> LBS</h2> 
                        <h4 class="num">1 of 1</h4>
                    </div>
                    <div class="company">Swift Team Services</div>
                    <div class="company">15 Stanberry Lane</div>
                    <div class="company">Kingston 20</div>

                    <div class="fragile">
                        <h1 class="frag">FRAGILE</h1>
                    </div>
                    <div>
                        <strong>SHIP TO:</strong>
                        <div class="arrange1">
                            <?php echo $rows['Name_On_Package'];?><br>
                            <?php echo $rows['Home'];?><br>
                            <?php echo $rows['Parish'];?><br>
                            <h2><?php echo $rows['Package_Description'];?></h2>
                        </div>
                    </div>
                    <div class="comp">
                        <h3 class = "sts">Swift Team Services</h3>
                    </div>
                    <div class="twin1">
                        <?php echo date("d/m/Y");?>
                    </div>
                </div>
                <br><br>
                <?php
            }
        }
    ?>
</div>
