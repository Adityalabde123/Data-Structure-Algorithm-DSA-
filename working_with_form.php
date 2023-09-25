<html>
    <body>
        <form method="POST" action="">
            enter email id:
            <input type="text" name="t1">
            <input type="submit" value="ok">
        </form>
    </body>
</html>
<?php
$s1=$_POST["t1"];
echo("email id=".$s1);
if(filter_var($s1,FILTER_VALIDATE_EMAIL))
echo("<br>valid email id");
else
echo("invalid email id");



?>