<?php
setcookie("rno",$_POST["t1"]);
setcookie("nm",$_POST["t2"]);
setcookie("cl",$_POST["t3"]);
?>
<html>
    <body>
        <form method="POST" action="cookie3.php">
            <h1>subject marks</h1>
            php:
            <input type="text" name="t1">
            cpp:
            <input type="text" name="t2">
            ds:
            <input type="text" name="t3">
            RDBMS:
            <input type="text" name="t4">
            <input type="SUBMIT" value="OK"> 
        </form>
    </body>
</html>