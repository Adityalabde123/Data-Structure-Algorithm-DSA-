<?php
 interface I1
 {
    function area($r,$h);
    function volume($r,$h);
 }
 class cylinder implements  I1
 {
  function area($r,$h)
    {
    
    $a=2*3.14*$r*($r+$h);
    echo("<br>area of cylider=".$a);
}
    function volume($r,$h)
    {
    
    $a=3.14*$r*$r*$h;
    echo("<br>area of volume=".$a);
}
}
$ob=new cylinder();
$ob->area(4.5,6.2);
$ob->volume(4.5,6.2);
?>