<?php
interface t1{
   function acceptc($cno,$cname,$cadd);
   function dispc();
   function accepts($rno,$sname,$per);
   function disps();
   function acceptf($dno,$dname);
   function dispf();
}
 class college implements t1
 {
   public $cno,$cname,$cadd,$rno,$sname,$per,$dno,$dname;
    function acceptc($cno,$cname,$cadd)
    {
      $this->cno=$cno;
      $this->cname=$cname;
      $this->cadd=$cadd;
    }
    function dispc()
    {
        echo("<br>college no=".$this->cno);
        echo("<br>college name=".$this->cname);
        echo("<br>college address=".$this->cadd);
    }
  function accepts($rno,$sname,$per)
    {
      $this->rno=$rno;
      $this->sname=$sname;
      $this->per=$per;
    }
    function disps()
    {
        echo("<br>student no=".$this->rno);
        echo("<br>student  name=".$this->sname);
        echo("<br>student percentage=".$this->per);
    }
    function acceptf($dno,$dname)
    {
      $this->dno=$dno;
      $this->dname=$dname;
     }
    function dispf()
    {
        echo("<br>faculty no=".$this->dno);
        echo("<br> faculty name=".$this->dname);
        
    }
}
$ob=new college();
$ob->acceptc(101,"rsmdp","deolali");
$ob->dispc();
$ob->accepts(10,"aditya",80);
$ob->disps();
$ob->acceptf(1,"computer");
$ob->dispf();
?>
                