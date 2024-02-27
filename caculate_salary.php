<?php
 class worker{
    public $wname,$nd,$pr;
    function __construct($wname,$nd,$pr)
    {
        $this->wname=$wname;
        $this->nd=$nd;
        $this->pr=$pr;
    }
    function calculate()
    {
         $s=$this->nd*$this->pr;
         echo("<br>worker name=".$this->wname);
        echo("<br>worker salary=".$s);
         
    }
}
$ob=new worker("aditya",8,200);
$ob->calculate();
?>
