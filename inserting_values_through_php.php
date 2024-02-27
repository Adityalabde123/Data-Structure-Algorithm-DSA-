<?php
$xml = simplexml_load_file('xml_first.xml');
if (!$xml) {
    die("File not found");
}

// Adding a new 'student' element
$student = $xml->addChild('student');

// Adding child elements to the 'student' element
$rno = $student->addChild('rno', '108');
$name = $student->addChild('name', 'aditya');
$per = $student->addChild('per', '70');

header('Content-type: text/xml');
echo $xml->asXML();
?>
