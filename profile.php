<?php
session_start();
if(($_SESSION["fname"]=="") || ($_SESSION["uid"]=="") || ($_SESSION["lname"]=="") || ($_SESSION["email"]==""))	
{ $msg="To make profile, please login first!!!";
header ("Location: login.php? msg=".urlencode($msg));
exit;
}
?>
<!DOCTYPE HTML>
<html xmlns="http:www.w3.org/1999/xhtml">
<head><title>Uttarakhand News</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Language" content="hi" />
<link rel=stylesheet href="main.css">
<style type="text/css">
#id1{ text-align:center;
color:black;
}
#left a{
	text-decoration:none;
	color:red;
}
.content{
	height:2000px;
}
.custom{
margin-left:30px;
}
@media(min-width:600px)
{
.content{
	height:1800px;
}
.custom{
margin-left:120px;
}
}
@media(min-width:768px)
{
.content{
	height:1400px;
}
.custom{
margin-left:110px;
}
}
@media(min-width:1000px)
{
.content{
	height:1100px;
}
.custom{
margin-left:110px;
}	
}
</style>
</head>
<body>
<?php if(isset($_GET['msg']))
{
	print '<script>alert("'.$_GET['msg'].'");</script>';
}
?>
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
<form name="aform" action="profile2.php" method="POST" enctype="multipart/form-data">
<table align="center">
<tr><td><font color="red">DateOfBirth:</font></td><td><input type="date" name="dob" id="dob"></td></tr>
<tr><td><font color="red">Gender:</font></td><td><input type="radio" name="gender" id="gender" value="male">Male<input type="radio" name="gender" id="gender" value="female">Female</td></tr>
<tr><td><font color="red">MobileNumber:</font></td><td><input type="text" name="mob" id="mob" size="16"></td></tr>
<tr><td><font color="red">HomeTown:</font></td><td><input type="text" name="hometown" id="hometown" size="16"></td></tr>
<tr><td><font color="red">CurrentCity:</font></td><td><input type="text" name="city" id="city" size="16"></td></tr>
<tr><td><font color="red">Occupation:</font></td><td><input type="text" name="occu" id="occu" size="16"></td></tr>
<tr><td colspan="2"><font color="red">Add your favourite quote:</font></td><td></tr>
<tr><td colspan="2"><textarea id="quote" name="quote" rows="3" cols="34"></textarea></td></tr>
<tr><td colspan="2"><font color="red">Add your bio:</font></td><td></tr>
<tr><td colspan="2"><textarea id="bio" name="bio" rows="5" cols="34"></textarea></td></tr></table>
<label class="custom">
<input type="file" id="pics" name="pics">Add Profile Pic<br>
<input type="submit" value="Submit">
</label>
</form>
<br><br><center><font color="skyblue" size="5px">Sponsered by</font></center>
<img src="WP_20131225_005.jpg" width="300" height="300"><br>
<font color="red">Mohsin Khan, famous bussinesman & Ex-district<br>president of Congress</font><br><br>
</div>
<div id="right">
<img src="C360_2015-12-14-14-33-22-766.jpg" width="300" height="300"><br>
<font color="red">Sajid General Store, Pro:Sajid Khan, 9897573494</font><br><br>
<img src="DSC_1060.jpg" width="300" height="300"><br>
<font color="red">Nasir Razaa, student MA 1<sup>st</sup> year,<br>HNBPG College Khatima, 8445110309</font><br><br>
</div>
</div>
<footer id="bottom"><a href="index.php"><b>Home|</b></a><a href="profile.php"><b>Make Profile|</b></a><a href="index.php"><b>Search Person</b></a><br>
submit your story by mail at <font color="red"><b>chiefeditor@ktmnews.com<br>&#169;</b></font> 2016-17
</footer>
</div>
</body>
</html>