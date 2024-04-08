<?php
  $xml=simplexml_load_file("xml_add_attribute_child.xml");
  if(!$xml)
  {
     die("file not found");
  }
  $xml->addChild('ino','2');
  $obj=$xml->addChild('iname','book');
  $obj->addAttribute('type','genral');
  $xml->addChild('qty','20');
  $xml->addChild('price','200');

  //(this is type of printing the output 1st method)echo($xml->asXML());
  //(this is type of printing the output 2nd method)print_r($xml);
?>