<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

<script src="jquery.min.js"></script>

<script>
$(document).ready(function(){

$("[name=submit]").click(function(){

$.post("poster.php",{
username: $("[name=username]").val(),
password: $("[name=password]").val(),
author: $("[name=author]").val(),
title: $("[name=title]").val(),
content: $("[name=content]").val()
},function(data,status) {
$("#result").html(data);});

});

});
</script>

<style>
input[type="text"],input[type="password"], textarea {
width:100%;
line-height:35px;
padding:5px 10px;
border:none;
background-color:#f3f9fe;
} 

button {
background-color:#33aaff;
color:#fff;
border:none;
border-radius:3px;
} 

button h3{
margin:8px 16px;
} 

</style>



<center>
<span style="border-bottom:3px solid #555;font-size:x-large;color:#555;">UPDATES ADMIN</span>
</center>

<br>



<input type="text" name="author" style="width:100%;" value="Author" />
</p>

<p>

<input type="text" name="title" style="width:100%;" placeholder="Update title" />
</p>


<p>

<textarea name="content" style="width:100%;height:150px;" placeholder="type the content here..."></textarea>
</p>

<p>
<table style="width:100%">
<tr>
<td style="width:50%">
<input type="text" name="username" placeholder="username"  />
</td>
<td style="width:50%">
<input type="password" name="password" placeholder="password" />
</td>
</tr>
</table>
</p>

<button name="submit"><h3>POST NOW</h3></button>

<h3 id="result"></h3>



