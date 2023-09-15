<?php 
function area($r,$h)
{
    $a=2*3.14*$r*$h+2*3.14*$r*$r;
    echo("<br>area of cylinder=".$a);
}
function volume($r,$h)
{
    $v=3.14*$r*$r*$h;
    echo("<br>volume of cylinder=".$v);
}
area(5.6,8.2);
volume(4.5,2.8);

?>