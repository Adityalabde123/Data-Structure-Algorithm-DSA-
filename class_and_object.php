<?php
class emp{
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
        echo("<br>salary=".$this->sal);
    }
}
$ob= new emp();
$ob->accept(101,"aditya",100000);
$ob->disp();
?>