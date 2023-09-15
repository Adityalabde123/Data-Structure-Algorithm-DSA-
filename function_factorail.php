<?php 
function factorail($n)
{
    $f=1;
    for($i=1;$i<=$n;$i++)
    {
        $f=$f*$i;
    }
    echo("<BR>factorail=".$f);
}
factorail(5);
factorail(4);


?>