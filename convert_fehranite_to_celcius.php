<?php
class tempreture{
    public $c,$f;
    function __construct($c,$f)
    {
         $this->c=$c;
         $this->f=$f;
    }
    function convert_celcius_to_fehranite()
    { 
        $ans=$this->c*9/5+32;
        echo("<br>convert celcius to fehranite".$ans);
    }
    function convert_fehranite_to_celcius()
    { 
        $ans=$this->f-9-32*5/9;
        echo("<br>convert fehranite to celcius".$ans);
    }
}
$ob=new tempreture(50,103);
$ob->convert_celcius_to_fehranite();
$ob->convert_fehranite_to_celcius();
?>