<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style>
.w3-container {
padding:10px !important;
} 
.w3-display-container {
background-color:#000 !important;
} 
.w3-card-2 {
margin:15px 0px !important;
}
</style>
</head>
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

<div class="w3-container">

<div class="w3-display-container w3-card-2 w3-border  w3-border-deep-orange">
<img src="../images/campus-bg.jpg"  class="w3-image w3-opacity-min">
<a href="pics-loader.php?dir=campus">
<div class="w3-display-middle w3-deep-orange w3-padding">
<b>CAMPUS PHOTOS</b>
</div>
</a>
</div>


<div class="w3-display-container w3-card-2 w3-border w3-border-blue">
<img src="../images/onnewspaper-bg.jpg"  class="w3-image w3-opacity-min">
<a href="pics-loader.php?dir=newspaper">
<div class="w3-display-middle w3-blue w3-padding">
<b>ON NEWSPAPERS</b>
</div>
</a>
</div>


<div class="w3-display-container w3-card-2 w3-border w3-border-red">
<img src="../images/sankranthi-bg.jpg"  class="w3-image w3-opacity-min">
<a href="pics-loader.php?dir=sankranthi">
<div class="w3-display-middle w3-red w3-padding">
<b>SANKRANTHI</b>
</div>
</a>
</div>

<div class="w3-display-container w3-card-2 w3-border w3-border-pink">
<img src="../images/teachersday-bg.jpg"  class="w3-image w3-opacity-min">
<a href="pics-loader.php?dir=teachersday">
<div class="w3-display-middle w3-pink w3-padding">
<b>TEACHER'S DAY</b>
</div>

</div>

</body>


<script>
setTimeout(function(){ 
var elem = document. createElement("link"); elem.setAttribute("rel","stylesheet"); 
elem.setAttribute("href","../files/font-loader.css"); 
document.head.appendChild(elem); },100);
</script>


</html>
