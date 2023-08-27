<html>
    <body>
        <form method="POST" action="email_id_pattern.php">
            enter email id:
            <input type="text" name="t1">
            <input type="submit" value="ok">
        
        </form>
    </body>
</html>
<?php
$s=$_POST["t1"];
$p="^[a-zA-Z0-9_]+@[a-z]+\.[a-z]{2,3}$";
if(ereg($p,$s))
print("valid");
else
print("invalid")
?>