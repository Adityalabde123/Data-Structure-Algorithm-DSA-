<?php
session_start();
if(isset($_SESSION["Vcount"]))
{
    $_SESSION["Vcount"]+= 1;
    echo("<h1>visit count=".$_SESSION["Vcount"]);

}
else
{
    $_SESSION["Vcount"]=1;
    echo("first time visit");
}


?>