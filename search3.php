<?php
session_start();
$uid=$_GET['id'];
$dbc=mysqli_connect('localhost','root','','ktmnews');
	$query="SELECT fname,lname,email FROM reader WHERE sn=$uid";
$result=mysqli_query($dbc,$query);
$row=mysqli_fetch_array($result);
$fname=$row['fname'];
$lname=$row['lname'];
$email=$row['email'];
$query2="SELECT * FROM profile WHERE uid=$uid";
$result2=mysqli_query($dbc,$query2);
$row2=mysqli_fetch_array($result2);
$dob=$row2['dob'];
$gen=$row2['gender'];
$mob=$row2['mobile'];
$home=$row2['hometown'];
$city=$row2['currentcity'];
$occu=$row2['occu'];
$qt=$row2['qtpath'];
$bio=$row2['biopath'];
$pic=$row2['picpath'];
	$query3="SELECT view FROM namedb WHERE uid=$uid";
$result3=mysqli_query($dbc,$query3);
$row3=mysqli_fetch_array($result3);
$view=$row3['view']+1;
$query4="UPDATE namedb SET view=$view WHERE uid=$uid";
mysqli_query($dbc,$query4);
?>
<!DOCTYPE HTML>
<html xmlns="http:www.w3.org/1999/xhtml">
<head><title>Uttarakhand News</title>
<meta name="decription" content="A news website which provide news local, national and international level. News about politics, sports, movies etc are available here.">
<meta name="keywords" content="ktm,ktm news,ktmnews,newsktm,news ktm,khatima,khatima news,shahenshah,shaan,hasan,uttarakhand news,udham singh nagar news,rudrapur news,khatima congress,khatima bjp">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Language" content="hi" />
<link rel=stylesheet href="main.css">
<style type="text/css">
<style type="text/css">
.topclass{	
	height:140px;
}
#id1{ text-align:center;
color:black;
}
#left a{
	text-decoration:none;
	color:red;
}
.content{
	height:3100px;
}
@media(min-width:600px)
{ .topclass{	
	height:175px;
}
.content{
	height:3000px;
}
}
@media(min-width:768px)
{.topclass{	
	height:180px;
}
.content{
	height:3000px;
}
}
@media(min-width:1000px)
{
.topclass{	
	height:180px;
}
.content{
	height:3000px;
}
}
</style>
</head>
<body>
<div class="wrap">
<div class="topclass">
<header id="top">Uttarakhand News.com
</header>
<header id="atop"><b>Be update yourself with us</b><hr>
</header>
<header id="btop"><ul><li><a href="sign.php">SignUp&nbsp;</a></li><li><a href="login.php">Login&nbsp;</a></li></ul>
</header>
</div>
<div class="content">
&nbsp; &nbsp;<?php echo date("F d, Y");?>
<center><b>सुप्रभात मित्रो !!!<br>Uttarakhand News.com में आपका स्वागत है</b></center>
<div id="left">
<?php 
$qtfile=fopen($qt,"r");
$biofile=fopen($bio,"r");
echo '<img src="'.$pic.'" height="300" width="300"><br><br>'.
'<table><tr><td>Name:</td><td><font color="red">'.$fname.' '.$lname.'</td></tr>'.
'<tr><td>Hometown:</td><td><font color="red">'.$home.'</td></tr>'.
'<tr><td>Currentcity:</td><td><font color="red">'.$city.'</td></tr>'.
'<tr><td>Date of birth:</td><td><font color="red">'.$dob.'</td></tr>'.
'<tr><td>Gender:</td><td><font color="red">'.$gen.'</td></tr>'.
'<tr><td>Occupation:</td><td><font color="red">'.$occu.'</td></tr>'.
'<tr><td>Mobile:</td><td><font color="red">'.$mob.'</td></tr>'.
'<tr><td>Email:</td><td><font color="red">'.$email.'</td></tr>'.
'<tr><td valign="top" width="120">Favourite quote:</td><td><font color="red">';
while(!feof($qtfile))
{ echo fgets($qtfile).'<br>';
}
echo '</font></td></tr>';
echo '<tr><td valign="top" width="100">About myself:</td><td><font color="red">';
while(!feof($biofile))
{ echo fgets($biofile).'<br>';
}
echo '</font></td></tr></table>';
fclose($qtfile);
fclose($biofile);
?>
</div>
<div id="right">
<center><font color="skyblue" size="5px">Sponsered by</font></center>
<img src="WP_20131225_005.jpg" width="300" height="300"><br>
<font color="red">Mohsin Khan, famous bussinesman & Ex-district<br>president of Congress</font><br><br>
<img src="DSC_1056.jpg" width="300" height="300"><br>
<font color="red">Saddam Hussain, student BA 3<sup>rd</sup> year,<br>HNBPG College Khatima</font><br><br>
<img src="C360_2015-12-14-14-33-22-766.jpg" width="300" height="300"><br>
<font color="red">Sajid General Store, Pro:Sajid Khan, 9897573494</font><br><br>
<img src="DSC_1060.jpg" width="300" height="300"><br>
<font color="red">Nasir Razaa, student MA 1<sup>st</sup> year,<br>HNBPG College Khatima, 8445110309</font><br><br>
<img src="IMG-20160830-WA0000.jpg" width="300" height="300"><br>
<font color="red">Mohammad Arif, student BSc 1<sup>st</sup> year,<br>HNBPG College Khatima, 9997074790</font><br><br>
<img src="20160527_141354.jpg" width="300" height="300"><br>
<font color="red">Kamir Razaa-9897044392</font><br><br>
</div>
</div>
<footer id="bottom"><a href="index.php"><b>Home|</b></a><a href="profile.php"><b>Make Profile|</b></a><a href="index.php"><b>Search Person</b></a><br>
submit your story by mail at <font color="red"><b>chiefeditor@ktmnews.com<br>&#169;</b></font> 2016-17
</footer>
</div>
</body>
</html>