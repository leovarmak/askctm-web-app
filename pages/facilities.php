<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body {
width:100%;
height:100%;
position:fixed;
} 


h3 {
margin:0;
text-transform:uppercase;
}
i {
top:0;
position:absolute;

font-size:22px  !important;
color:#fff  !important;
background-color:#33aaff;
} 
#left {
float:left;
left:0;
padding:15px 15px 15px 10px;
} 
#right{
padding:15px 10px 15px 15px;
float:right;
right:0;
} 
iframe{
width:100%;
height:100%;
border:none;
} 
</style>
<base href="./facility/" />




<body onload="nextPage();">

<div class="w3-row">


<div class="w3-col w3-blue" style="width:100%;">
<h3 id="heading" class="w3-center w3-padding">Facilities</h3>
</div>

<div class="w3-col w3-left" style="width:40px;"
onclick="prevPage();">
<h3><i id="left" class="fa fa-chevron-left"></i>
</h3>
</div>

<div class="w3-col w3-right" style="width:40px;"
onclick="nextPage();">
<h3>
<i id="right" class="fa fa-chevron-right"></i></h3>
</div>




<div class="w3-col">
<iframe id="page" src="Laboratories.html"></iframe>
</div>
</div>


<script>
var index=0;
var pages = ["","Laboratories","Library","Seminar-Hall", "Hostel","Transport","Gym","Cafeteria", "Sports","Wifi", "Other"];

var page = document.getElementById("page");
var heading = document.getElementById("heading");
function prevPage() {
if(index==pages.length-1){index--;}
if(index!=0) {

 heading.innerHTML = '<div class="w3-animate-left">' +pages[index].replace(/[-]/g," ")+'</div>';
 page.src=pages[index]+".html"; 
index--;
 }
};

function nextPage() {

if(index==0) {
   index++;
}
if(index!=pages.length) { 

heading.innerHTML =
'<div class="w3-animate-right">' +pages[index].replace(/[-]/g," ")+'</div>';
page.src=pages[index]+".html";

if(index!=pages.length-1) {
      index++;
    }
  } 
};


</script>


