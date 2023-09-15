<?php 
class fruit
{
    public $fname,$color,$price;
    function accept($fname,$color,$price)
{
    $this->fname=$fname;
    $this->color=$color;
    $this->price=$price;
}
function disp()
{
    echo("<br>fruit name=".$this->fname);
    echo("<br>color=".$this->color);
    echo("<br>price=".$this->price);
}

}
$ob=new fruit();
$ob->accept("apple","red",100);
$ob->disp();


?>