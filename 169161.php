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
	height:6900px;
}
@media(min-width:600px)
{
.content{
	height:6300px;
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
$query="SELECT * FROM page WHERE name='169161'"; // change for every page  & change it on form action below
	$result=mysqli_query($dbc,$query);
	$row=mysqli_fetch_array($result);
	$n=$n+$row['view'];
	$p=$row['point'];
		$query2="UPDATE page SET view=$n WHERE name='169161'"; // change for every page
			$result2=mysqli_query($dbc,$query2);
			$query3="SELECT fname,lname,email,path FROM comment WHERE name='169161'"; // change for every page
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
<font color="red"><b>आज के दौर की सबसे जरूरी फिल्म है अमिताभ-तापसी स्टारर 'पिंक'</b></font><br>
<b>डायरेक्टर:</b> अनिरुद्ध रॉय चौधरी<br>
<b>स्टार कास्ट: </b>अमिताभ बच्चन, तापसी पन्नू, कीर्ति कुल्हाड़ी ,एंड्रिया तेरियांग, अंगद बेदी, पीयूष मिश्रा<br>
<b>रेटिंग: </b>4 स्टार<br>
'पिंक' एक कोर्ट रूम ड्रामा है, जिसके निर्देशक हैं अनिरुद्ध रॉय चौधरी और निर्माता हैं फिल्म 'पीकू' के निर्देशक शुजीत सरकार. सुभाष कपूर की जॉली एल एल बी के बाद ये दूसरी फिल्म है जिसमें कोर्ट रूम ड्रामा असल जिंदगी में जैसा होता है वैसा दिखाया गया है, 
आइए जानते हैं कैसी है फिल्म<br>
<img src="pink.jpg" width="300" height="300"><br>
<b>कहानी</b><br>
एक रात रसूखदार पॉलिटिशियन के भतीजे और उसके दोस्त, तीन लड़कियों से बंद कमरे में छेड़खानी करते हैं और बदसलूकी की कोशिश करते हैं और फिर लड़कियां जब ऐतराज़ जताती हैं तो उनमें हाथापाई होती है और एक लड़की के हाथों पॉलिटिशियन 
का भतीजा बुरी तरह से घायल हो जाता है. फिर बदलें में लड़कियों को रसूखदार लड़कों से मिलती है धमकियां और मामला पुलिस तक पहुंचता है. इसके बाद शुरू होता है इल्जामों का दौर. लड़कियों का केस लड़नेवाले वकील के किरदार में अमिताभ बच्चन नजर 
आते हैं जिन्हे एक बाइपोलर बीमारी से ग्रस्त भी दिखाया गया है. अपनी बीमारी के बावजूद वह इन लड़कियों की तरफ से केस लड़ते हैं और धीरे-धीरे कहानी का सस्पेंस डोज बढ़ने लगता है. आखि‍रकार केस कौन जीतेगा? यह देखना मजेदार होगा.<br>
<b>स्क्रिप्ट</b><br>
असल जिंदगी के असल मुद्दों से जुड़े सवाल बखूबी उठाती है ये फिल्म, क्या जो लड़कियां अकेले रहती हैं, अपने पैरों पर खड़ी हैं, डिस्को जाती हैं, वेस्टर्न कपड़े पहनती है, शराब या सिगरेट पीती हैं, लडको से हंस कर बात करती हैं, लड़कियों के किरदारों पर 
प्रशनचिन्ह क्यों लगते हैं? जबकि लड़का यही सबकुछ करे तो ऐसी कोई बात नहीं उठती. कोर्टरूम ड्रामा 'पिंक' में इन संजीदा सवालों को बखूबी उठाया गया है और ड्रामा इस तरह से पिरोया गया है कि कहीं भी ये भाषण नहीं लगता और यही इस फिल्म की 
सबसे बड़ी ताकत है. फिल्म का आर्ट डायरेक्शन भी काबिल-ए-तारीफ है. दिल्ली की सड़कें और मोहल्ले फिल्म में एक किरदार की तरह इस्तेमाल किए गए हैं और एक बार आपको यकीनन लगेगा कि जैसे वाकई सबकुछ सच में आपके सामने हो रहा हो. 
नॉर्थ ईस्ट के रहनेवालों को आज भी अपने ही देश में जो जि‍ल्लत झेलनी पड़ती है, इस मुद्दे का भी जि‍क्र किया गया है.<br>
<b>अभिनय</b><br>
तापसी पन्नू , कीर्ति कुलहरी, एंड्रिया तेरियांग, जिनके अभिनय पर पूरी फिल्म का दारोमदार है, अगर ये अभिनेत्रियां अपना दुख, जि‍ल्लत, दहशत और एक दूसरे से अपनी बॉन्डिंग नहीं दर्शाती तो ये फिल्म मुंह के बल गिरती. तापसी पन्नू का 
अभि‍नय जबरदस्त है. 'पिंक' के बाद से ही फिल्म इंडस्ट्री में उनका नाम बड़ी अभिनेत्रियों की लिस्ट में जुडने लगा है. फिल्म में कोर्ट रूम ड्रामा के दौरान उनका ग़ुस्सा और झिझक के सीन्स लाजवाब हैं. कीर्ति कुल्हरी भी कमाल की डिस्कवरी हैं और 
अच्छी अभिनेत्रियों के फेहरिस्त में एक नाम और जुड़ा है. एंड्रिया तेरियांग, अंगद बेदी, पीयूष मिश्रा, ध्रीतम चटर्जी ने दमदार अभिनय किया है. छोटे-बड़े हर किरदार की सही कास्टिंग इस फिल्म को और मजबूत बनाती है. और अब बात अमिताभ बच्चन की,
 जिन्होंने एक बार फिर साबित कर दिया है कि उम्र का अभिनय से कोई ताल्लुक नहीं, उनका अभिनय एक सबक की तरह है, हर उस कलाकार के लिए जो अभिनय करना चाहता है. अमिताभ ने अपने इस बाइपोलर किरदार में जिसका बात-बात पर मूड बदल
 जाता है, उसे बेहद इमानदारी से निभाया है.
<br><br><font color="blue"><b>किसी भी प्रकार के विज्ञापन हेतु हमें सम्पर्क करें - 8057061741, hshan888@gmail</b></font>
<br><br><form name="likeform" action="like.php" method="post">
<input type="hidden" name="page" id="page" value="169161">
<input type="button" value="Views:<?php echo $n;?>" style="background:red; color:white;"> <input type="submit" value="Likes:<?php echo $p;?>" style="background:red; color:white;">
</form>
<br>To post comment, it's mandatory to login
<br><font color="red">Leave a comment:</font>
<form name="cmntform" action="cmnt.php" method="post" onSubmit="return validate()">
<input type="hidden" name="page" id="page" value="169161">
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
<a href="https://www.facebook.com/sharer/sharer.php?u=http://www.newsktm.com/169161.php" style="background:blue; color:white; font-size:18px;" target="_blank"><font bgcolor="green">Share on Facebook</font></a></i>
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