<html>
    <body>
        <form method="POST" action="#">
            <h1>select option</h1>
            <input type="radio" name="r1" value="feet">convert feet to inches<br>
            <input type="radio" name="r1" value="inches">convert inches to feet<br>
               enter value:<input type="text" name="t1">
               <input type="submit">
        </form>
    </body>
</html>
<?php
class distance{
function convert_feet_to_inches($feet)
{
    $inches=$feet*12;
    echo("<br>inches=".$inches);
}
function convert_inches_to_feet($inches)
{
    $feet=$inches/12;
    echo("<br>inches=".$feet);
}
}
$ob=new distance();
$val=$_POST["t1"];
$ch=$_POST["r1"];
if($ch=="feet")
{
$ob->convert_feet_to_inches($val);
}elseif($ch=="inches")
{
    $ob->convert_inches_to_feet($val);
}
?>