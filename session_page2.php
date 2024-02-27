<?php
session_start();
$_SESSION["customer name"]=$_POST["t1"];
$_SESSION["address"]=$_POST["t2"];
$_SESSION["phone number"]=$_POST["t3"];

?>


<html>
    <body>
        <form method="POST" action="session_page3.php">
            <h1 pos="mid">product details</h1>
            product name:
            <input type="text" name="t1"><br>
             quantity:
            <input type="text" name="t2"><br>
             rate:
            <input type="text" name="t3"><br>   
            <input type="submit" value="next"><br>   
        </form>
    </body>
</html>