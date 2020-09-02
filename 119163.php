<?php
session_start();
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
	height:5000px;
}
@media(min-width:600px)
{
.content{
	height:4800px;
}
}
@media(min-width:768px)
{
.content{
	height:3000px;
}
}
@media(min-width:1000px)
{
.content{
	height:3000px;
}
}
</style>
</head>
<?php
$n=mt_rand(1,20); 
$dbc=mysqli_connect('localhost','root','','ktmnews');
$query="SELECT * FROM page WHERE name='119163'"; // change for every page  & change it on form action below
	$result=mysqli_query($dbc,$query);
	$row=mysqli_fetch_array($result);
	$n=$n+$row['view'];
	$p=$row['point'];
		$query2="UPDATE page SET view=$n WHERE name='119163'"; // change for every page
			$result2=mysqli_query($dbc,$query2);
			$query3="SELECT fname,lname,email,path FROM comment WHERE name='119163'"; // change for every page
	$result3=mysqli_query($dbc,$query3);
	$num=mysqli_num_rows($result3);
	mysqli_close($dbc);		
?>
<body>
<?php if(isset($_GET['msg']))
{print '<script>alert("'.$_GET['msg'].'");</script>';
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
11 September, 2016
<center><b>सुप्रभात मित्रो !!!<br>Uttarakhand News.com में आपका स्वागत है</b></center>
<div id="left">
<img src="20151226_170139.jpg" class="img-circle" width="250" height="200">
<br><font color="purple"><b>Shaan Hasan</b>
<br>hshan888@gmail.com</font><br><br>
<font color="red"><b>खालिस्तान का समर्थन करने वाला युवक गिरफ्तार</b></font><br>
<b>ऋषिकेश :</b>पुलिस ने ऋषिकेश से खालिस्तान समर्थक युवक को गिरफ्तार किया है। पुलिस के अनुसार आरोपी शिरोमणि अकाली दल (मान) अमृतसर का युवा उत्तराखंड प्रदेश अध्यक्ष भी है। 
उसने अपनी फेसबुक वॉल पर राष्ट्रविरोधी नारे व पोस्टर अपलोड किए थे। इस मामले में स्थानीय अभिसूचना इकाई ने जांच कर मामला ऋषिकेश कोतवाली को सौंपा था। आरोपी के खिलाफ राष्ट्रद्रोह के तहत मुकदमा दर्ज किया गया है।
कोतवाली प्रभारी निरीक्षक विजय चंद्र गोसांई ने बताया कि तिलक मार्ग ऋषिकेश के रहने वाले जगजीत सिंह सिंह उर्फ जग्गा पुत्र हरविंदर सिंह ने बीती 22 फरवरी को अपनी फेसबुक वॉल पर एक पोस्ट शेयर की थी। 
इसमें मोहम्मद अली जिन्ना व आतंकवादी जनरैल सिंह भिंडारवाला के पोस्टर शामिल थे।<br> 
<img src="khalistan.jpg" width="300" height="300"><br>
 इसके अलावा वॉल पर पाकिस्तान जिंदाबाद, खालिस्तान जिंदाबाद, लांग लिव इस्लामिक रिपब्लिक पाकिस्तान व लांग लिव सिख नेशन खालिस्तान जैसे नारे लिखे थे। 
 इसके अलावा उसने शहर में कुछ स्थानों पर ऐसे बैनर भी लगाए। इस बारे में स्थानीय अभिसूचना इकाई ने जांच पड़ताल की। इसके बाद मामले को ऋषिकेश कोतवाली के सुपुर्द कर दिया गया।
शुक्रवार को राष्ट्रद्रोह और आइटी एक्ट में मुकदमा दर्ज कर जगजीत को गिरफ्तार कर लिया गया। 
कोतवाली प्रभारी निरीक्षक विजय चंद्र गोसांई ने बताया कि वर्ष 2015 में भी आरोपी ने जरनैल सिंह भिंडरवाले के जन्म दिवस पर ऋषिकेश की रेलवे रोड व तिलक रोड पर पोस्टर लगाए थे। 
इतना ही नहीं जगजीत पर खन्ना, जिला लुधियाना(पंजाब) में हत्या का मुकदमा भी दर्ज है और जून 2016 में उसे इस मामले में गिरफ्तार भी किया गया। इन दिनों वह जमानत पर रिहा है।
<br><br><font color="blue"><b>किसी भी प्रकार के विज्ञापन हेतु हमें सम्पर्क करें - 8057061741, hshan888@gmail</b></font>
<br><br><form name="likeform" action="like.php" method="post">
<input type="hidden" name="page" id="page" value="119163">
<input type="button" value="Views:<?php echo $n;?>" style="background:red; color:white;"> <input type="submit" value="Likes:<?php echo $p;?>" style="background:red; color:white;">
</form>
<br>To post comment, it's mandatory to login
<br><font color="red">Leave a comment:</font>
<form name="cmntform" action="cmnt.php" method="post" onSubmit="return validate()">
<input type="hidden" name="page" id="page" value="119163">
<textarea id="cmnt" name="cmnt" rows="2" cols="35"></textarea>
<br><input type="submit" name="submit" value="Post" style="background:red; color:white;">
</form><br>
<font color="red">Comments:</font><br>
<?php
if($num!=0)
{
 while(	$row3=mysqli_fetch_array($result3))
 {
	$fname=$row3['fname']; 
		$lname=$row3['lname']; 
			$email=$row3['email'];
	$path=$row3['path']; 	
$myfile=fopen($path,"r");
             while(!feof($myfile))		
              echo '<i>'.fgets($myfile).'<br>';
		  echo '<font color="blue" size="2px">'.$fname.' '.$lname.' <b>'.$email.'</b></font><br><br>';
         fclose($myfile);	
 }
}
?>
<a href="https://www.facebook.com/sharer/sharer.php?u=https://www.ktmnews.com/158161.php" style="background:blue; color:white; font-size:18px;" target="_blank"><font bgcolor="green">Share on Facebook</font></a></i>
<br><a href="119162.php"><b>Prev<<</b></a>..................................<a href="119164.php"><b>>>Next</b></a><br><br>
<img src="WP_20131225_005.jpg" width="300" height="300"><br>
<font color="red">Mohsin Khan, famous bussinesman & Ex-district<br>president of Congress</font><br><br>
<img src="DSC_1056.jpg" width="300" height="300"><br>
<font color="red">Saddam, student BA 3<sup>rd</sup> year,<br>HNBPG College Khatima</font><br><br>
<img src="20160404_164326.jpg" width="300" height="300"><br>
<font color="red">Zeeshan Miyan<br>owner of Kamal Hosiery-8126542855</font><br><br>
</div>
<div id="right">
<img src="C360_2015-12-14-14-33-22-766.jpg" width="300" height="300"><br>
<font color="red">Sajid General Store, Pro:Sajid Khan, 9897573494</font><br><br>
<img src="DSC_1060.jpg" width="300" height="300"><br>
<font color="red">Nasir Razaa, student MA 1<sup>st</sup> year,<br>HNBPG College Khatima, 8445110309</font><br><br>
<img src="IMG-20160830-WA0000.jpg" width="300" height="300"><br>
<font color="red">Mohammad Arif, student BSc 1<sup>st</sup> year,<br>HNBPG College Khatima, 9997074790</font><br><br>
<img src="20160527_141354.jpg" width="300" height="300"><br>
<font color="red">Kamir Razaa-9897044392</font><br><br>
<img src="20160907_114402_20160911004148576.jpg" width="300" height="300"><br>
<font color="red">Wasim Akram, student at<br>HNBPG College Khatima-9536116891</font><br><br>
</div>
</div>
<footer id="bottom"><a href="index.php"><b>Home|</b></a><a href="profile.php"><b>Make Profile|</b></a><a href="index.php"><b>Search Person</b></a><br>
submit your story by mail at <font color="red"><b>chiefeditor@newsktm.com<br>&#169;</b></font> 2016-17
</footer>
</div>
</body>
</html>