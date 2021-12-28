<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="pond.css">
    </head>
<body>

<canvas id="myCanvas">
Your browser does not support the HTML5 canvas tag.</canvas>

<script>
var c = document.getElementById("myCanvas");
var ctx = c.getContext("2d");
var cty = c.getContext("2d");
ctx.beginPath();
ctx.rect(0, 0, 100, 100);
ctx.stroke();

cty.beginPath();
cty.rect(110,0,100,100);
cty.stroke();

</script> 

</body>
</html>