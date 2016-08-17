<!DOCTYPE html>
<html>

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>www.loseloselose.com</title> 
<font color="white"> 

<script>
function Refresh()    
{
if (count > 0)    
{
window.location.reload()
}
}

var sound = new Audio("winner.wav")    
var count = 0   
var one = Math.floor((Math.random()*9)+1)
var two = Math.floor((Math.random()*9)+1)
var three = Math.floor((Math.random()*9)+1)

function countClicks()
{
count = count + 1
document.getElementById("p2").innerHTML = count
}
</script>

</head>

<body style="background-color:black;"> 

<center>
<font size="500">
<font face="arial">

<p>
Lucky Number Slots
</p>

</font>
</font>
</center>

<center>
<svg width="550" height="250" viewBox="0 0 1600 500"> 

<rect x="0" y="10" width="500" height="500" fill="black" stroke="white" stroke-width="10">
</rect>

<rect x="550" y="10" width="500" height="500" fill="black" stroke="white" stroke-width="10">
</rect>

<rect x="1100" y="10" width="500" height="500" fill="black" stroke="white" stroke-width="10">
</rect>

<text x="100" y="415" font-family="courier" font-size="500" fill="white">

<script>  
document.write(one)
</script>

</text>

<text x="650" y="415" font-family="courier" font-size="500" fill="white">

<script>
document.write(two)
</script>

</text>

<text x="1200" y="415" font-family="courier" font-size="500" fill="white">

<script>
document.write(three)
</script>

</text>
</svg>  
</center>

<center>

<script>
if (one == two && one == three && one != null)    
{
document.write("<font face=arial color=white size=50>Winner!</font>")   
sound.play()        
}
</script>

</center>

<form>
<center>

<input type="button" value="Click Here To Spin" onClick="Refresh()"> 

</center>   
</form>

<center>

<p>
<a href="javascript:countClicks()">

<font color="white">
Add Credit   
</font>

</a>
</p>

<font size="10">

<p id="p2">        
0       
</p>

</font>    
</center>  
</body> 
</font>
</html>