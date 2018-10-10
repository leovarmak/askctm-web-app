<?php
if($_POST["username"] != "acstkm" || $_POST["password"] != "catsmk") {
die("<span style='color:red'>Sorry! This update not posted now. because of your username or password entered incorrectly.");
}


if(isset($_POST["title"]) && isset($_POST["content"]))
{

date_default_timezone_set('Asia/Kolkata');

$author = $_POST["author"];
$stamp = date("d/m/y@h:ia")."@".$author;
$title = $_POST["title"];
$content = $_POST["content"];


$file = "updates-database.xml";

$data = file_get_contents($file);

$arr[0] = '<?xml version="1.0" encoding="utf-8"?>';
$arr[1] = "<updates>";
$data = substr(str_replace($arr,'',$data),1);


$data = $arr[0]."\n".$arr[1]."\n<update>\n<stamp>".base64_encode($stamp). 
"</stamp>\n<title>".base64_encode($title)."</title>\n<content>".base64_encode($content)."</content>\n</update>".$data;

file_put_contents($file, $data);

echo "<span style='color:green'>Oh! Your update successfully added</span>";

} 
?>