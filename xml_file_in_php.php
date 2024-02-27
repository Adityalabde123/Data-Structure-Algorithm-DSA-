<?php
header('content-type:text/xml');
echo("<?xml version='1.0' encoding='UTF-8'?>");
echo("<bookinfo>");
echo("<book>");
echo("<bookno>101</bookno>");
echo("<bookname>java</bookname>");
echo("<bookauthor>balguru</bookauthor>");
echo("<price>100</price>");
echo("<year>2022</year>");
echo("</book>");
echo("<book>");
echo("<bookno>102</bookno>");
echo("<bookname>c</bookname>");
echo("<bookauthor>dennis ritchie</bookauthor>");
echo("<price>200</price>");
echo("<year>2021</year>");
echo("</book>");
echo("<book>");
echo("<bookno>102</bookno>");
echo("<bookname>balbharti</bookname>");
echo("<bookauthor>k.k</bookauthor>");
echo("<price>300</price>");
echo("<year>2020</year>");
echo("</book>");
echo("</bookinfo>");
?>