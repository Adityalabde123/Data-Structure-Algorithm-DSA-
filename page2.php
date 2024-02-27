<?php
session_start();
$_SESSION["empno"]=$_POST["t1"];
$_SESSION["emp name"]=$_POST["t2"];
$_SESSION["emp address"]=$_POST["t3"];
?>
<html>
    <body>
        <form method="post" action="page3.php">
            <h1>earning details</h1>
             basic salary:
             <input type="text" name="t1"><br>
              DA:
             <input type="text" name="t2"><br>
              HRA:
             <input type="text" name="t3"><br>
             <input type="submit" value="NEXT">
        </form>
    </body>
</html>