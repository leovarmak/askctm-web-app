<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body { margin:0; } 
.w3-card{ 
margin:20px 10px !important; }
img{ width:100%; } 
</style>

<?php
if($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["dir"]) )
{ 
$dir_path = "../images/".$_GET["dir"]."/";
$extensions_array = array('jpg','png','jpeg');
if(is_dir($dir_path))
{
    $files = scandir($dir_path);  
    for($i = 0; $i < count($files); $i++)
    {
        if($files[$i] !='.' && $files[$i] !='..')
        {
            $file = pathinfo($files[$i]);
            $extension = $file['extension'];
            if(in_array($extension, $extensions_array))
            {
            echo '<div class="w3-card w3-animate-zoom"><img src="'.$dir_path.$files[$i].'"></div>';
            }
        }
     }
  }
} 
?>