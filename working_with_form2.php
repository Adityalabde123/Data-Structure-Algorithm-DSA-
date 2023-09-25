<html>
    <body>
        <form method="POST" action="">
            enter mobile no.:
            <input type="text" name="t1">
            <input type="submit" value="ok">
        </form>
    </body>
</html>
<?php
$s1=$_POST["t1"];
echo("mobile no=".$s1);
if(filter_var($s1,FILTER_VALIDATE_INT)&&strlen($s1)==10)
echo("<br>valid mobile no.");
else
echo("invalid mobile no");



?>