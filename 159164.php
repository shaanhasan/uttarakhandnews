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
	height:6000px;
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
$query="SELECT * FROM page WHERE name='159164'"; // change for every page  & change it on form action below
	$result=mysqli_query($dbc,$query);
	$row=mysqli_fetch_array($result);
	$n=$n+$row['view'];
	$p=$row['point'];
		$query2="UPDATE page SET view=$n WHERE name='159164'"; // change for every page
			$result2=mysqli_query($dbc,$query2);
			$query3="SELECT fname,lname,email,path FROM comment WHERE name='159164'"; // change for every page
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
14 September, 2016
<center><b>सुप्रभात मित्रो !!!<br>Uttarakhand News.com में आपका स्वागत है</b></center>
<div id="left">
<img src="20151226_170139.jpg" class="img-circle" width="250" height="200">
<br><font color="purple"><b>Shaan Hasan</b>
<br>hshan888@gmail.com</font><br><br>
<font color="red"><b>पाकिस्तान कोई देश नहीं , ये कुछ भटके हुये लोगों का समूह है जो सन् 1947 में अपने ही देश हिन्सेदुस्तान से वगाबत कर बैठा था</b></font><br>
ये कहना है भारत के पूर्व न्यायधीश मार्केंडू काटजू का । जस्टिस काटजू अपने ब्लॉग में लिखते हैं कि पाकिस्तान कोई देश नहीं है, ये भटके हुए लोगों का समूह है और जब तक पाकिस्तान, भारत में विलीन नहीं होगा तब तक ये ऐसे ही बर्बाद होता रहेगा ।
 पाकिस्तान में जो अशांति फैली है, ये उसी के नेताओं के कुकर्मों का नतीजा है ।<br>
पाकिस्तान में फैली अशान्ति ने ही बांग्लादेश को जन्म दिया और आगे भी ये अशान्ति बनी रहेगी जो पाकिस्तान के और टुकड़े करेगी ।
 ये अशान्ति पाकिस्तान के भारत में विलीन होने के बाद ही ख़त्म होगी । काटजू का मानना है कि हो सकता है कि तब तक वो दुनिया छोड़ चुके हों लेकिन एक दिन ऐसा जरूर आयेगा जब पाकिस्तान का विलय फिर से भारत में हो जायेगा ।
काटजू कहते हैं भारत और पाकिस्तान के लोगों का रहन-सहन, रंग-रूप सब एक जैसा है । दरअसल दोनों एक ही हैं । दोनों के बीच जो नफरत है वो झूटी है ।
 ये नफरत कुछ राजनीतिक लोगों द्वारा बनाया गया प्रोपेगण्डा है जो दो देश और दो धर्म के लोगों में नफरत पैदा करके देश में राज करना चाहते हैं । अगर दो लोग अलग-अलग धर्म से हैं तो इसका ये मतलब नहीं कि वो एक-दूसरे के शत्रु हैं ।
काटजू की ये पोस्ट उनके एक पाकिस्तानी फैन जो कि जर्नलिस्ट हैं, को बहुत पसन्द आयी और उन्होंने इस पोस्ट को अपने अख़बार में भी छापा । <br>
पाकिस्तान के लोगों को भी ये पोस्ट बहुत पसन्द आयी और वो भी चाहते हैं कि भारत और पाकिस्तान एक हो जायें । <br>
काटजु पाकिस्तान के साथ-साथ बांग्लादेश को भी भारत में शामिल करने पर ज़ोर देते हैं । काटजू अपने एक ब्लॉग में कश्मीर मसले पर भी लिखते हैं । वो कहते हैं कि पाकिस्तान को कश्मीर चाहिए और हमें पूरा पाकिस्तान ।
 पाकिस्तान को अब कश्मीर भुलाकर अपने अस्तित्व के लिए सोचना चाहिये । हमारी भारतीय फौज लाल बहादुर शास्त्री जी के दौर में ही पाकिस्तान की फौज को लाहौर तक खदेड़ चुकी थी और अगर अब मौका मिला तो पूरा पाकिस्तान कब्जा लेंगे ।
<br><br><font color="blue"><b>किसी भी प्रकार के विज्ञापन हेतु हमें सम्पर्क करें - 8057061741, hshan888@gmail</b></font>
<br><br><form name="likeform" action="like.php" method="post">
<input type="hidden" name="page" id="page" value="159164">
<input type="button" value="Views:<?php echo $n;?>" style="background:red; color:white;"> <input type="submit" value="Likes:<?php echo $p;?>" style="background:red; color:white;">
</form>
<br>To post comment, it's mandatory to login
<br><font color="red">Leave a comment:</font>
<form name="cmntform" action="cmnt.php" method="post" onSubmit="return validate()">
<input type="hidden" name="page" id="page" value="159164">
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
<a href="https://www.facebook.com/sharer/sharer.php?u=http://www.newsktm.com/159164.php" style="background:blue; color:white; font-size:18px;" target="_blank"><font bgcolor="green">Share on Facebook</font></a></i>
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