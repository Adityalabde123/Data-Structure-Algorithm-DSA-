<html>
    <body>
        <h1>calculator</h1>
        <form method="POST" action="#">
            enter no.1:<input type="text" name="t1"><br>
            enter no.2:<input type="text" name="t2"><br>
            enter choice:1-add<br>
                         2-sub<br>
                         3-mul<br>
                         3-div<br><input type="text" name="t3"><br>
            <input type="submit">
        </form>
    </body>
</html>
<?php
 class calculator{
    public $a,$b;
    function __construct($a,$b)
    {
        $this->a=$a;
        $this->b=$b;
    }
    function add()
    {
        $c=$this->a+$this->b;
        echo("addition=".$c);
    }
    function sub()
    {
        $c=$this->a-$this->b;
        echo("substraction=".$c);
    }
    function mul()
    {
        $c=$this->a*$this->b;
        echo("multiplication=".$c);
    }
    function div()
    {
        $c=$this->a/$this->b;
        echo("division=".$c);
    }
 }
 $a=$_POST["t1"];
 $b=$_POST["t2"];
 $ob=new calculator($a,$b);
 $ch=$_POST["t3"];
 switch($ch)
 {
    case 1:$ob->add();break;
    case 2:$ob->sub();break;
    case 3:$ob->mul();break;
    case 4:$ob->div();break;
 }
 ?>