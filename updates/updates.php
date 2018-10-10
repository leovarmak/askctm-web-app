<?php
$xml = "updates-database.xml";
$updates = simplexml_load_file($xml);


echo count($updates);

for($x=0;$x<count($updates);$x++) 
{
$stamp = base64_decode($updates->update[$x]->stamp);
$stamp = explode("@",$stamp);
$date = $stamp[0];
$time = $stamp[1];
$author = $stamp[2];
$title = base64_decode($updates->update[$x]->title);
$content = base64_decode($updates->update[$x]->content);


if($date == "".date("d/m/y")) {
$title ="<img class='new' src='new.gif' />".$title;
} 

echo "<div class='card'><h4 class='title'>".$title."</h4><p class='meta'><b>on</b>".$date."<b>at</b>".$time."<b>by</b>".$author."</p><div class='content'>".$content."</div></div>";

} 

echo "<script src='script.js'></script>";
?>