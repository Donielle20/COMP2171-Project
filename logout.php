<div class ="contain_confirm" style = "background-color:rgb(209, 208, 208); height:620px;">
    <div class = "confirm" style = "text-align: center; background-color: rgb(23, 196, 219); padding: 0.5em; width: 600px; border-radius: 10px;border: 5px solid rgb(209, 208, 208); position: relative; left: 350px; top: 200px;">
        <h1 style = "color:white;">Are you sure you want to log out</h1>
        <a href="index.html" style = "text-align: center; color:white; text-decoration: none;">Yes</a>
    </div>
</div>


<?php
    session_start();
    
    session_destroy();
?>