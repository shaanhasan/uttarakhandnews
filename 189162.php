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
	height:6800px;
}
@media(min-width:600px)
{
.content{
	height:6100px;
}
}
@media(min-width:768px)
{
.content{
	height:4000px;
}
}
@media(min-width:1000px)
{
.content{
	height:4000px;
}
}
</style>
</head>
<?php
$n=mt_rand(1,20); 
$dbc=mysqli_connect('localhost','root','','ktmnews');
$query="SELECT * FROM page WHERE name='189162'"; // change for every page  & change it on form action below
	$result=mysqli_query($dbc,$query);
	$row=mysqli_fetch_array($result);
	$n=$n+$row['view'];
	$p=$row['point'];
		$query2="UPDATE page SET view=$n WHERE name='189162'"; // change for every page
			$result2=mysqli_query($dbc,$query2);
			$query3="SELECT fname,lname,email,path FROM comment WHERE name='189162'"; // change for every page
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
18 September, 2016
<center><b>सुप्रभात मित्रो !!!<br>Uttarakhand News.com में आपका स्वागत है</b></center>
<div id="left">
<img src="20151226_170139.jpg" class="img-circle" width="250" height="200">
<br><font color="purple"><b>Shaan Hasan</b>
<br>hshan888@gmail.com</font><br><br>
<font color="red"><b>इस तरह हिन्दी, भारत की राष्ट्रीय भाषा बनते बनते रह गई...</b></font><br>
1946 से लेकर 1949 तक जब भारतीय संविधान का मसौदा तैयार किया जा रहा था, उस दौरान भारत और भारत से जुड़े तमाम मुद्दों को लेकर संविधान सभा में लंबी लंबी बहस और चर्चा होती थी. इसका मकसद था कि जब संविधान को
 अमली जामा पहनाया जाए तो किसी भी वर्ग को यह न लगे कि उससे संबंधित मुद्दे की अनदेखी हुई है. वैसे तो लगभग सभी विषय बहस-मुबाहिस से होकर गुजरते थे लेकिन सबसे विवादित विषय रहा भाषा – संविधान को किस भाषा में लिखा जाए,
 सदन में कौन सी भाषा को अपनाया जाए, किस भाषा को ‘राष्ट्रीय भाषा’ का दर्जा दिया जाए, इसे लेकर किसी एक राय पर पहुंचना लगभग नामुमकिन सा रहा । 
पहले पहल महात्मा गांधी और जवाहरलाल नेहरू समेत कई सदस्य हिन्दुस्तानी (हिन्दी और उर्दू का मिश्रण) भाषा के पक्ष में दिखे. 1937 में ही नेहरू ने अपनी राय रखते हुए कहा था कि भारत भर में आधिकारिक रूप से संपर्क स्थापित करने के 
लिए एक भाषा का होना जरूरी है और हिन्दुस्तानी से अच्छा क्या हो सकता है. वहीं गांधी ने भी कहा था कि अंग्रेजी से बेहतर होगा कि हिन्दुस्तानी को भारत की राष्टीय भाषा बनाया जाए क्योंकि यह हिंदु और मुसलमान, उत्तर और दक्षिण को जोड़ती है. 
लेकिन विभाजन ने कई सदस्यों के मन में इतनी चिढ़ और गुस्सा भर दिया कि हिन्दुस्तानी की मांग पीछे होती चली गई और  शुद्ध हिन्दी (संस्कृतनिष्ठ) के पक्षधर भारी पड़ते नज़र आए. इधर दक्षिण भारतीय सदस्य तो हिन्दुस्तानी और हिन्दी दोनों के ही 
खिलाफ नज़र आए. जब कभी कोई सदस्य अपनी बात हिन्दी या हिन्दुस्तानी में बोलता था तो कोई दक्षिण भारतीय सदस्य इसके अनुवाद की मांग करने लगता था.
<br><br><font color="blue"><b>किसी भी प्रकार के विज्ञापन हेतु हमें सम्पर्क करें - 8057061741, hshan888@gmail</b></font>
<br><br><form name="likeform" action="like.php" method="post">
<input type="hidden" name="page" id="page" value="189162">
<input type="button" value="Views:<?php echo $n;?>" style="background:red; color:white;"> <input type="submit" value="Likes:<?php echo $p;?>" style="background:red; color:white;">
</form>
<br>To post comment, it's mandatory to login
<br><font color="red">Leave a comment:</font>
<form name="cmntform" action="cmnt.php" method="post" onSubmit="return validate()">
<input type="hidden" name="page" id="page" value="189162">
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
<a href="https://www.facebook.com/sharer/sharer.php?u=http://www.newsktm.com/189162.php" style="background:blue; color:white; font-size:18px;" target="_blank"><font bgcolor="green">Share on Facebook</font></a></i>
<br><a href="129162.php"><b>Prev<<</b></a>..................................<a href="129164.php"><b>>>Next</b></a><br><br>
<center><font color="skyblue" size="5px">Sponsered by</font></center>
<img src="WP_20131225_005.jpg" width="300" height="300"><br>
<font color="red">Mohsin Khan, famous bussinesman & Ex-district<br>president of Congress</font><br><br>
<img src="DSC_1056.jpg" width="300" height="300"><br>
<font color="red">Saddam, student BA 3<sup>rd</sup> year,<br>HNBPG College Khatima</font><br><br>
<img src="20160404_164326.jpg" width="300" height="300"><br>
<font color="red">Zeeshan Miyan<br>owner of Kamal Hosiery-8126542855</font><br><br>
<img src="12240128_979420785433022_8526815323935945818_n.jpg" width="300" height="300"><br>
<font color="red">Mohsin Beg, Advocate & Ex-President of<br>Student Union at HNBPG College, Khatima</font><br><br>
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
<img src="IMG-20160912-WA0001.jpg" width="300" height="300"><br>
<font color="red">Honey Footwear Khatima, Near-Post Office<br>Pro:Haneef Khan, 9837070363</font><br><br>
<img src="file1926.jpg" width="300" height="300"><br>
<font color="red">Razaa Juice Corner, Tanakpur Road, Opposite to<br>Pizza Bite(Arora Market), Pro-Rizwan Razaa-9690716856</font><br><br>
</div>
</div>
<footer id="bottom"><a href="index.php"><b>Home|</b></a><a href="profile.php"><b>Make Profile|</b></a><a href="index.php"><b>Search Person</b></a><br>
submit your story by mail at <font color="red"><b>chiefeditor@newsktm.com<br>&#169;</b></font> 2016-17
</footer>
</div>
</body>
</html>