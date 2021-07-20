<script type="text/javascript">
function startTime()
{
var today=new Date()
var h=today.getHours()
var m=today.getMinutes()
var s=today.getSeconds()
m=checkTime(m)
s=checkTime(s)

document.getElementById('clock').innerHTML=h+":"+m+":"+s
t=setTimeout('startTime()', 500)
}

function checkTime(i)
{
if (i<10)
{ i="0" + i}
return i
}

window.onload=startTime;

</script>
<div id="clock" style="font-size:35px;color:#00aaff;border:3px groove blue;background-color:#aaffaa; width:195px; height:40px; margin-left: 1300px;
    margin-top: 482px;"></div>
