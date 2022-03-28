<?php
namespace jose\sobre\namespace;

class xmlFile
{
    public function lerXml()
    {
        $xml=simplexml_load_file("xmlFile.xml") or die("Error: Cannot create object");
        echo "Leitura do XML" . PHP_EOL;
        echo $xml->to . PHP_EOL;
        echo $xml->from . PHP_EOL;
        echo $xml->heading . PHP_EOL;
        echo $xml->body;
    }
}