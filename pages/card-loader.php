<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
@font-face {
    font-family: prn;
    src: url('../files/proxima_nova.ttf');
}
body{
background-color:#f2f3f7;
padding-bottom:50px;
}
*,h5{
font-family: 'prn', aerial;
} 

a {
text-decoration:none;
} 
img { 
width:100px;
height:100px;
object-fit:cover;
border-radius:3px;
border:1px solid #fff;
margin:5px 15px 5px 15px;
-webkit-transition:all ease-in-out 1s;
} 

img:hover {
border-radius:100px;
} 

.info{ font-size:small;margin-top:0px;padding-left:0;} button{ width:100%;} 

.w3-col{
margin-top:16px;
}


.w3-card {
background-image: url('../images/bg.png') !important;
background-size:100% 98%;
background-repeat:no-repeat;
} 

.w3-card:before{
content:"";
width:6px;
height:6px;
background-color:#fff;
display:block;
position:absolute;
border-radius:100px;
box-shadow:inset 0px 0px 5px rgba(0,0,0,.2);
margin:10px;
}
.w3-container{
color:#fff !important;

}
.black {
color:#000 !important;

}
button{
background-color:#47c200  !important;
width:120px;
color:#fff !important;
border-radius:2px;
border-bottom:2px solid #45a50d !important;
} 
span{
font-size:20px;
} 
</style>

<style>body,iframe{margin:0;}
#loader{
width:100%;
height:100%;
display:block;
z-index:9999;
top:0;
left:0;
position:absolute;
background-color:#fff;
background-image: url("../files/loader.gif");
background-size:45px 45px;
background-position: center;
background-repeat: no-repeat;
} 
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
$(window).on("load",function () {
   $("#loader").fadeOut("slow");
});
</script>

<div id="loader"></div>



<div class="w3-row-padding">

<?php
if($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["dir"]) )
{ 
echo '<base href="../images/faces/'.$_GET["dir"].'/" />';
$faculties = simplexml_load_file("faculty-xml/".$_GET["dir"]."-data.xml") or die("Error: Cannot create object");

foreach($faculties->children() as $faculty) { 
echo 
'<div class="w3-col">
<div class="w3-card">
<table></tr><td><img src="'.trim($faculty->image).'"></td><td>
<div class="w3-container info">
<h5>'.$faculty->name.'</h5>
<p>'.$faculty->qualification.'</p><br>
<p class="black">'.$faculty->position.'</p>
<p><a href="../../../pages/profile-info.php?profile='.trim($faculty->profile).'" target="_parent">
<button class="w3-button w3-hover-black">PROFILE INFO</button></a></p>
</div></td></tr></table></div>';
} 
} 
?>

</div>
