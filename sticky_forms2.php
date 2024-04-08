<html>
    <body>
        <form method="post" action="">
            enter string:
            <input type="text" name="t1" value="<?php if(isset($_POST['t1'])) {echo $_POST['t1'];}?>">
            enter string2:
            <input type="text" name="t2" value="<?php if(isset($_POST['t2'])) {echo $_POST['t2'];}?>">
            <input type="submit">
        </form>
    </body>
</html>
<?php
 $a1=$_POST["t1"];
 $b1=$_POST["t2"];
 if($a1==$b1)
 {
     echo("string are same");
 }
 else{
     echo("string are not same");

 }
?>