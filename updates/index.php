<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
<link rel="stylesheet" href="w3.css">

<script src="jquery.min.js"></script>


<style>
@font-face { 
font-family: prn;
src: url("../files/proxima_nova.ttf"); 
}
*{
font-family: 'prn' !important;
}
a{
color:green;
text-decoration:none;
}
body {
margin:8px;
font-family:aerial;
background-color:#f2f2f2;
} 

.card {
background-color:#fff;
display:block;
height:auto;
margin-top:15px;
box-shadow:0px 3px 8px -3px rgba(0,0,0,.2);
padding:5px 10px;
line-height:28px;

} 

.meta {
margin:0;
font-size:small;
color:#aaa;
} 

.meta b{
margin:0px 3px;
} 

.title {
color:#36555f;
margin:8px 0px 3px 0px;
} 

.content {
display:none;
color:#36555f;
font-size:15px;
text-indent:10px;
border-top:2px solid #f2f2f2;
margin-top:10px;
padding-top:10px;
} 


.new {
display:inline-block;
clear:both;
width:25px;
margin:10px 5px -2px 10px;
} 

</style>
</head>

<body>
<center>
<h3 style="color:#aaa;margin-top:15px;">NEWS & UPDATES</h3>
</center>

<div id="updates">

</div>

<input type="hidden" id="count" value="0" />

</body>


<script>
$(document).ready(function(){


setInterval(function(){
$.post("updates.php", {},
function(data,status) {
if(data.charAt(0) != $("#count").val()){
$("#count").val(data.charAt(0));
$("#updates").html(data.substr(1));
}
});
 },1000);


});
</script>

</html>
