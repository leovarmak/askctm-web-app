<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body {
width:100%;
height:100%;
position:fixed;
} 

.w3-button{
width:20% !important;
font-weight:bolder;
} 

.w3-button:hover{ 
background:#f2f3f7 !important; 
color:#000 !important; 
} 

iframe{
width:100%;
height:100%;
border:none;
} 
</style>

<body>

<div class="w3-row">


<div class="w3-col">
<div class="w3-bar w3-deep-orange">
<button  class="w3-bar-item w3-button w3-deep-orange tablink" onclick="faculty('cse');">CSE</button>
<button  class="w3-bar-item w3-button w3-green tablink" onclick="faculty('ece');">ECE</button>
<button class="w3-bar-item w3-button w3-indigo tablink" onclick="faculty('mech');">MECH</button>
<button class="w3-bar-item w3-button w3-pink tablink" onclick="faculty('civil');">CIVIL</button>
<button class="w3-bar-item w3-button w3-cyan tablink" onclick="faculty('bsh');">BSH</button>
</div>

</div>


<div class="w3-col">
<iframe id="page" src="card-loader.php?dir=cse"></iframe>
</div>
</div>


<script>
var page = document.getElementById("page");
function faculty(group){
page.src="card-loader.php?dir="+group; } 
</script>

<script>
setTimeout(function(){ 
var elem = document. createElement("link"); elem.setAttribute("rel","stylesheet"); 
elem.setAttribute("href","../files/font-loader.css"); 
document.head.appendChild(elem); },100);
</script>


