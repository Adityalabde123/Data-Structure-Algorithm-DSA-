<?php
 class emp
 {
    public $eno,$ename,$sal;
    function __construct()
{
    $this->eno=101;
    $this->ename="aditya";
    $this->sal=70000;
} 
function disp()
{
    echo("<br>emp no=".$this->eno);
    echo("<br>emp name=".$this->ename);
    echo("<br>emp sal=".$this->sal);
    
}
function __destruct()
{
    echo("<br>memory free");
}
}
$ob=new emp();
$ob->disp();
?>