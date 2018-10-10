<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
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

<div id="loader">
</div>

<iframe title="YouTube video player" class="youtube-player" type="text/html" 
width="100%" height="100%" src="http://www.youtube.com/embed/6kBk2_OnwAc"
frameborder="0" allowFullScreen></iframe>