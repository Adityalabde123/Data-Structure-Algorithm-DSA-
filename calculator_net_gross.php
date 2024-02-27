<?php
class emp
{
    public $ename,$dname,$bsal,$da,$hra,$ta,$it,$pf,$pt,$gross,$ded,$net;
    function __construct($ename,$dname,$bsal)
    {
        $this->ename=$ename;
        $this->dname=$dname;
        $this->bsal=$bsal;
    }
    function calculate_gross()
    {
        $this->da=$this->bsal*15/100;
        $this->hra=$this->bsal*25/100;
        $this->ta=$this->bsal*10/100;
        $this->gross=$this->da+$this->hra+$this->ta;
    }
    function calculate_deduction()
    {
        $this->it=$this->bsal*5/100;
        $this->pf=$this->bsal*7/100;
        $this->pt=$this->bsal*9/100;
        $this->ded=$this->it+$this->pf+$this->pt;
    }
    function calculate_net_sal()
    {
        $this->net=($this->bsal+$this->gross)-$this->ded;

    }
    function disp()
    {
        echo("<br>Emp name=".$this->ename);
        echo("<br>Emp dept=".$this->dname);
        echo("<br>basic salary=".$this->bsal);
        echo("<br>da=".$this->da);
        echo("<br>HRA=".$this->hra);
        echo("<br>ta=".$this->ta);
        echo("<br>INCOME TAX=".$this->it);
        echo("<br>pf=".$this->pf);
        echo("<br>PT=".$this->pt);
        echo("<br>gross salary=".$this->gross);
        echo("<br>deduction=".$this->ded);
        echo("<br>net salary=".$this->net);
    }
}
$ob=new emp("Aditya","computer","70000");
$ob->calculate_gross();
$ob->calculate_deduction();
$ob->calculate_net_sal();
$ob->disp();
?>