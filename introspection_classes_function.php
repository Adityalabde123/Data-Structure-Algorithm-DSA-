<?php
class college{}
class emp extends college{
    public $eno,$ename,$sal;
    function accept()
    {

    }
    function disp()
    {

    }

}
$ob=new emp();
if(class_exists("emp"))
echo("class is found");
else
echo("class is not found");

$a=get_declared_classes();
echo("<br>all classses=");
print_r($a);

$a=get_parent_class("emp");
echo("<br>parent classes=".$a);
?>
