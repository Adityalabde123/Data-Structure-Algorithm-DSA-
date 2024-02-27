<?php
  class shape{
    public $b,$h,$r,$s;
    function accept($b,$h,$r,$s)
    {
        $this->b=$b;
        $this->h=$h;
        $this->r=$r;
        $this->s=$s;
    }
  }
  class triangle extends  shape{
    function dispt()
    {
     $a=$this->b*$this->h/2;
    echo("<br>area of triangle=".$a);
  }
}

  class square extends shape{
 function disps()
 {   $a=$this->s*$this->s;
    echo("<br>area of square=".$a);
  }
}

  class circle extends shape{
    function dispc()
    {
    $a=$this->r*$this->r;
    echo("<br>area of circle=".$a);
  }
}
$ob = new triangle();
$ob->accept(10, 5.5, 2.2, 7);
$ob->dispt();

$ob = new square();
$ob->accept(10, 5.5, 2.2, 7);
$ob->disps();

$ob = new circle();
$ob->accept(10, 5.5, 2.2, 7);
$ob->dispc();
?>

