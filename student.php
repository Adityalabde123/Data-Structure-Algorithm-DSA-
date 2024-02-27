<html>
    <body>
        <form method="POST" action="#">
            enter name:
            <input type="text" name="t1"><br>
            <input type="submit" value="search">
        </form>
    </body>
</html>
<?php
$s1=$_POST["t1"];
$flag=0;
$xml=simplexml_load_file("student.xml");
if(!$xml)
{
    die("file not found");
}
foreach($xml->info as $a)
{
    if($a->name==$s1)
    echo("<br>roll no=".$a->rno);
    echo("<br>per=".$a->per);
   $flag=1;
   break;
}
if($flag==0)
echo("file not found");
?>