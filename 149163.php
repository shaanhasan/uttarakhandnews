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
	height:6300px;
}
@media(min-width:600px)
{
.content{
	height:5700px;
}
}
@media(min-width:768px)
{
.content{
	height:3500px;
}
}
@media(min-width:1000px)
{
.content{
	height:3500px;
}
}
</style>
</head>
<?php
$n=mt_rand(1,20); 
$dbc=mysqli_connect('localhost','root','','ktmnews');
$query="SELECT * FROM page WHERE name='149163'"; // change for every page  & change it on form action below
	$result=mysqli_query($dbc,$query);
	$row=mysqli_fetch_array($result);
	$n=$n+$row['view'];
	$p=$row['point'];
		$query2="UPDATE page SET view=$n WHERE name='149163'"; // change for every page
			$result2=mysqli_query($dbc,$query2);
			$query3="SELECT fname,lname,email,path FROM comment WHERE name='149163'"; // change for every page
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
<font color="red"><b>चोरी किया था मार्क जुगरबर्ग ने फेसबुक का आईडिया</b></font><br>
आज फेसबुक दुनिया की सबसे लोकप्रिय वेबसाइट है । लेकिन क्या आपको पता है कि फेसबुक के संस्थापक मार्क जुकरबर्ग ने फेसबुक का आईडिया चोरी किया था ?
कोई नहीं, आज हम आपको बताते हैं कि किस तरह जुकरबर्ग फेसबुक को अस्तित्व में लेकर आये ।<br>
2003 का जमाना था जब जुकरबर्ग हारवर्ड यूनिवर्सिटी में छात्र हुआ करते थे । 
उस समय जुकरबर्ग ब्लॉगिंग किया करते थे और साथ ही उन्होंने Facemash नामक एक वेवसाइट बना रखी थी जिसमें लड़कियों की फ़ोटो डालकर उनकी हॉटनेस कम्पेयर की जाती थी ।
Facemash केबल कॉलेज तक ही सीमित थी ।<br>
 तभी एक दिन जुकरबर्ग ने हारवर्ड यूनिवर्सिटी की वेबसाइट हैक कर ली और यूनिवर्सिटी के लिंक पे अपनी Facemash को कनेक्ट कर दिया जिससे उस रात Facemash को 22000 हिट्स मिले ।
 जुकरबर्ग पकड़े गए और कॉलेज ने उन्हें 6 महीने के लिए सस्पेंड कर दिया । इस घटना ने जुकरबर्ग को पुरे कॉलेज में फेमस कर दिया ।<br>
 उन्हीं दिनों कॉलेज के ही 3 लड़के Cameron Winklevoss, Tyler Winklevoss और Divya Narendra एक आईडिया पे काम कर रहे थे ।
 उन्हें एक अच्छे प्रोग्रामर की जरूरत थी । उन्हें जुकरबर्ग में एक अच्छा विकल्प दिखाई दिया । वो तीनो जुकरबर्ग से मिले और अपना आईडिया शेयर किया ।
 उन्होंने बताया के वो एक ऐसी सोसल नेटवर्किंग साईट  बनाना चाहते हैं जो हारवर्ड यूनिवर्सिटी के छात्रों को आपस में कनेक्ट करे । 
 उन्होंने अपने प्रोजेक्ट का नाम Hardword Connection  बताया । <br>
 जुकरबर्ग उनके साथ काम करने को राजी हो गए लेकिन उसके बाद जुकरबर्ग ने उन्हें दरकिनार करके अकेले ही वेबसाइट बनाने का फैसला किया ।
 जुकरबर्ग ने उनके Hardword Connection के आईडिया में कुछ बदलाव करके अकेले ही वेबसाइट बना दी और उसे नाम दिया 'The Facebook'.
 फंडिंग की जरूरत को पूरा करने के लिये जुकरबर्ग ने अपने दोस्त Eduardo Saverin को 30% का पार्टनर बनाया ।
 और फिर 4 फरबरी, 2004 को जुकरबर्ग ने फेसबुक को The Facebook नाम से लॉन्च कर दिया ।
 जुकरबर्ग ने फेसबुक को 29 कॉलेजों तक पहुँचाया । तभी जुकरबर्ग की मुलाकात Napster के संस्थापक Sean Parker से हुई ।
 पार्कर ने फेसबुक को दुनिया के कोने-कोने तक पहुंचाने का दावा किया । पार्कर के ही सुझाव से जुकरबर्ग ने फेसबुक का नाम The Facebook से Facebook किया । <br>
 बाद में कुछ अनबन के बाद Eduardo Saverin को फेसबुक के को-फाउंडर के पद से हटा दिया गया । Winklevoss twins और Divya Narendra ने जुकरबर्ग पे आईडिया चोरी का आरोप लगाया ।
 जुकरबर्ग ने 65 मिलयन डॉलर में Winklevoss twins से समझोता किया । तो ये थी फेसबुक की कहानी जिसे बहुत ही कम लोग जानते हैं ।
 आज फेसबुक मार्क जुकरबर्ग के नाम से जानी जाती है और दुनिया भर में फेसबुक के 1 अरब से अधिक यूजर हैं ।
<br><br><font color="blue"><b>किसी भी प्रकार के विज्ञापन हेतु हमें सम्पर्क करें - 8057061741, hshan888@gmail</b></font>
<br><br><form name="likeform" action="like.php" method="post">
<input type="hidden" name="page" id="page" value="149163">
<input type="button" value="Views:<?php echo $n;?>" style="background:red; color:white;"> <input type="submit" value="Likes:<?php echo $p;?>" style="background:red; color:white;">
</form>
<br>To post comment, it's mandatory to login
<br><font color="red">Leave a comment:</font>
<form name="cmntform" action="cmnt.php" method="post" onSubmit="return validate()">
<input type="hidden" name="page" id="page" value="149163">
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
<a href="https://www.facebook.com/sharer/sharer.php?u=http://www.newsktm.com/149163.php" style="background:blue; color:white; font-size:18px;" target="_blank"><font bgcolor="green">Share on Facebook</font></a></i>
<br><a href="149162.php"><b>Prev<<</b></a>..................................<a href="149164.php"><b>>>Next</b></a><br><br>
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
<font color="red">Rizwan Razaa-9690716856</font><br><br>
</div>
</div>
<footer id="bottom"><a href="index.php"><b>Home|</b></a><a href="profile.php"><b>Make Profile|</b></a><a href="index.php"><b>Search Person</b></a><br>
submit your story by mail at <font color="red"><b>chiefeditor@newsktm.com<br>&#169;</b></font> 2016-17
</footer>
</div>
</body>
</html>