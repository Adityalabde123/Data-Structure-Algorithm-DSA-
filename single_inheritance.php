<?php
class college{
    public $cno,$cname,$cadd;
    function acceptc($cno,$cname,$cadd)
    {
        $this->cno=$cno;
        $this->cname=$cname;
        $this->cadd=$cadd;
    }
}
class student extends college{
    public $rno,$sname,$per;
    function accepts($rno,$sname,$per)
    {
        $this->rno=$rno;
        $this->sname=$sname;
        $this->per=$per;
    }
    function display()
    {
        echo("<br>college no=".$this->cno);
        echo("<br>college name=".$this->cname);
        echo("<br>college address=".$this->cadd);
        echo("<br>student no=".$this->rno);
        echo("<br>student name=".$this->sname);
        echo("<br>student percenntage=".$this->per);
    }
}
$ob=new student();
$ob->acceptc(10,"rsmdp","deolali");
$ob->accepts(101,"aditya",80);
$ob->display();


?>