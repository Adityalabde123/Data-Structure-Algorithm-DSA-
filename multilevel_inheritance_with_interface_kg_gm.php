<?php
//convert kilo to gram and gram to kilo....
interface I1
{
    function gm_to_kg($gm);
    function kg_to_gm($gm);
}
class demo implements I1
{
   function gm_to_kg($gm)
   {
     $kg=$gm/1000;
     echo("<br>kg=".$kg);
   }
   function kg_to_gm($kg)
   {
     $gm=$kg*1000;
     echo("<br>kg=".$gm);
   }
}
$ob=new demo();
$ob->gm_to_kg(2500);
$ob->kg_to_gm(1);
?>