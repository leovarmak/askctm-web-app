<?php
if(isset($_GET["key"]))
{

$index = (int)base64_decode($_GET["key"]);

$updates = simplexml_load_file("updates-database.xml");

$str = base64_decode($updates->update[$index]->content);
echo $str;
}
?>