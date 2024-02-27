##area of circle and circum of circle..
<?php
 class circle{
    function area($r)
    {
        $a=3.14*$r*$r;
        echo("<br>area of circle".$a);
    }
    function circum($r)
    {
        $a=2*3.14*$r;
        echo("<br>circumferance of circle".$a);
    }
 }
 $ob=new circle();
 $ob->area(4.5);
 $ob->circum(5.6);
 ?>