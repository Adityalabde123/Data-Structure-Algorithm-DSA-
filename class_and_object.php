<?php 
class emp
{
    public $eno,$ename,$sal;
    function accept($eno,$ename,$sal)
{
    $this->eno=$eno;
    $this->ename=$ename;
    $this->sal=$sal;
}
function disp()
{
    echo("<br>emp no=".$this->eno);
    echo("<br>emp name=".$this->ename);
    echo("<br>emp sal=".$this->sal);
}

}
$ob=new emp();
$ob->accept(101,"om",50000);
$ob->disp();


?>