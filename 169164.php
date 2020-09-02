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
	height:7300px;
}
@media(min-width:600px)
{
.content{
	height:6600px;
}
}
@media(min-width:768px)
{
.content{
	height:4500px;
}
}
@media(min-width:1000px)
{
.content{
	height:4500px;
}
}
</style>
</head>
<?php
$n=mt_rand(1,20); 
$dbc=mysqli_connect('localhost','root','','ktmnews');
$query="SELECT * FROM page WHERE name='169164'"; // change for every page  & change it on form action below
	$result=mysqli_query($dbc,$query);
	$row=mysqli_fetch_array($result);
	$n=$n+$row['view'];
	$p=$row['point'];
		$query2="UPDATE page SET view=$n WHERE name='169164'"; // change for every page
			$result2=mysqli_query($dbc,$query2);
			$query3="SELECT fname,lname,email,path FROM comment WHERE name='169164'"; // change for every page
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
16 September, 2016
<center><b>सुप्रभात मित्रो !!!<br>Uttarakhand News.com में आपका स्वागत है</b></center>
<div id="left">
<img src="20151226_170139.jpg" class="img-circle" width="250" height="200">
<br><font color="purple"><b>Shaan Hasan</b>
<br>hshan888@gmail.com</font><br><br>
<font color="red"><b>खटीमा - मेरा शहर, मेरी दुनिया</b></font><br>
वैसे तो भारतवर्ष में कई सारे छोटे-बड़े शहर है और उनका अपना अपना इतिहास है लेकिन हम बात कर रहे हैं उत्तराखंड के उधमसिंह नगर जिले के एक छोटे से शहर खटीमा की|<br> 
यह शहर भारत के तमाम शहरों की तरह विकसित तो नहीं लेकिन उत्तराखंड राज्य बनने में इस शहर का बहुत बड़ा योगदान है उत्तराखंड आंदोलन की शुरुआत सबसे पहले इसी शहर खटीमा सी की गई थी इसी कारण इस शहर को
 उत्तराखंड आंदोलन की जननी कहा जाता है । प्रखंड आंदोलन के वक्त शहर में काफी कुछ खोया लेकिन खोने के बाद हमें एक संपूर्ण प्रदेश उत्तराखंड दीया 2011 की जनगणना के अनुसार 34 हजार आबादी वाले इस शहर को उसकी धार्मिक एकता 
 और एकजुट होकर रहने वाले लोगो के नाम से भी जाना जाता है। वैसे तो यह शहर उत्तराखंड आंदोलन की जननी है लेकिन विकास के नाम पर हमेशा से ही और शहरों की अपेक्षा पिछड़ा रहा । हमेशा से ऐसा होता जब उत्तराखंड राज्य में है सरकार bjp 
 की होती तो यहां के विधायक कांग्रेस के रहे होते और जब सरकार कांग्रेस की रही होती तब विधायक बीजेपी के, जिस कारण यहां की विकास की रफ्तार धीमी पड़ गई। खटीमा शहर भारत नेपाल बॉर्डर के बसा हुआ निकट बसा हुआ शहर है ट्रांसपोर्ट के
 लिए खटीमा दूर दूर तक जाना जाता है। खटीमा को मौसम के लिए भी बहुत अच्छा माना जाता है यहां इतनी गर्मी नहीं पड़ती के लोग जल जाए ना इतनी ठंड पड़ती है कि लोग जम जाए और ना इतनी बारिश होती है कि लोग बह जाए ।<br>
 <img src="ktm.jpg" width="300" height="300"><br>
 खटीमा से यात्रा की व्यवस्था भी बहुत उचित है यहां से आप देश भर की एवं प्रदेश की किसी भी जगह की यात्रा कर सकते हैं  ।खटीमा से चार राष्ट्रीय मार्ग जुड़े हुए हैं एक जो लखनऊ को जोड़ता है दूसरा बरेली से 
 जोड़ता है तीसरा हमें पहाड़ों से पर्वती क्षेत्र से जोड़ता है चौथा भारत की राजधानी दिल्ली से जोङता है। खटीमा पर्यटन का भी बहुत अच्छा केंद्र रहा है खटीमा की उत्तर दिशा में मां पूर्णागिरी का मंदिर और पर्यटकों के पर्यटक हो के लिए भूमि स्थित है जहां पर 
 लोग अपने मन का शुद्धिकरण करते हैं दक्षिण की ओर वाईफरकेशन चूका स्पोट है। पूरब की ओर नानकमत्ता साहिब सिखों का धार्मिक स्थल जहां पर जाने के बाद मन को शांति प्राप्त होती है एवं पश्चिम की ओर लोहिया हेड पावर कारपोरेशन लिमिटेड 
 स्थित है एवं शारदा नदी का किनारा तथा जंगल का खुबसूरत नजारे देखने को मिलते है। खटीमा से वन क्षेत्र बहुत करीब है। जिस वजह से ठंडी हवाऐ पूरे शहर का वातावरण शुद्ध रहता है वैसे तो शहर खटीमा की स्थिति ठीक है लेकिन विकास की पटरी पर 
 खटीमा शहर उतना अच्छा नहीं दौड़ रहा है यहां की सड़कों की स्थिति अत्यधिक दयनीय और लोगों को परेशान कर देने वाली हो गई है हम आशा करते हैं की स्थिति जल्द से जल्द ठीक हो और खटीमावासियों को राहत मिले । हम आशा करते हैं कि
 हमारा खटीमा शहर विकसित और विकास पूर्ण बने ।<br>
 ये स्टोरी हमें हमारे एक पाठक जनाब मारूफ क़ादरी साहब ने भेजी है ।<br>
 <img src="maroof.jpg" width="300" height="300"><br>
 <font color="red">Maroof Qadri, Khatima- 8272006186</font>
<br><br><font color="blue"><b>किसी भी प्रकार के विज्ञापन हेतु हमें सम्पर्क करें - 8057061741, hshan888@gmail</b></font>
<br><br><form name="likeform" action="like.php" method="post">
<input type="hidden" name="page" id="page" value="169164">
<input type="button" value="Views:<?php echo $n;?>" style="background:red; color:white;"> <input type="submit" value="Likes:<?php echo $p;?>" style="background:red; color:white;">
</form>
<br>To post comment, it's mandatory to login
<br><font color="red">Leave a comment:</font>
<form name="cmntform" action="cmnt.php" method="post" onSubmit="return validate()">
<input type="hidden" name="page" id="page" value="169164">
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
<a href="https://www.facebook.com/sharer/sharer.php?u=http://www.newsktm.com/169164.php" style="background:blue; color:white; font-size:18px;" target="_blank"><font bgcolor="green">Share on Facebook</font></a></i>
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