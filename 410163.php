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
	height:8000px;
}
@media(min-width:600px)
{
.content{
	height:7200px;
}
}
@media(min-width:768px)
{
.content{
	height:5000px;
}
}
@media(min-width:1000px)
{
.content{
	height:5000px;
}
}
</style>
</head>
<?php
$n=mt_rand(1,20); 
$dbc=mysqli_connect('localhost','root','','ktmnews');
$query="SELECT * FROM page WHERE name='410163'"; // change for every page  & change it on form action below
	$result=mysqli_query($dbc,$query);
	$row=mysqli_fetch_array($result);
	$n=$n+$row['view'];
	$p=$row['point'];
		$query2="UPDATE page SET view=$n WHERE name='410163'"; // change for every page
			$result2=mysqli_query($dbc,$query2);
			$query3="SELECT fname,lname,email,path FROM comment WHERE name='410163'"; // change for every page
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
04 October, 2016
<center><b>सुप्रभात मित्रो !!!<br>Uttarakhand News.com में आपका स्वागत है</b></center>
<div id="left">
<img src="20151226_170139.jpg" class="img-circle" width="250" height="200">
<br><font color="purple"><b>Shaan Hasan</b>
<br>hshan888@gmail.com</font><br><br>
<font color="red"><b>यूरिक एसिड ने शरीर को जकड़ रखा है तो चिंता ना करे, ये पोस्ट आपके लिए वरदान साबित होगी, जरूर पढ़े और शेयर करे</b></font><br>
<img src="uric.jpg" width="300" height="300"><br>
<b>यूरिक एसिड हमारे जीवन में रोगों का घर :</b><br>
यूरिक एसिड का बढ़ने की समस्या बडी तेजी से बढ़ रही है। आयु बढ़ने के साथ-साथ यूरिन एसिड गाउट आर्थराइटिस समस्या का होना तेजी से आंका गया है। जोकि लाईफ स्टाईल, खान-पान, दिनचर्या के बदलाव से भोजन पाचन प्रक्रिया के दौरान 
बनने वाले ग्लूकोज प्रोटीन से सीधे यूरिन एसिड में बदलने की प्रक्रिया को यूरिन एसिड कहते हैं। भोजन पाचन प्रक्रिया दौरान प्रोटीन से ऐमिनो एसिड और प्यूरीन न्यूक्लिओटाइडो से यूरिक एसिड बनता है। यूरिक एसिड का मतलब है, जो भोजन खाया 
जाता है, उसमें प्यूरीन पोष्टिकता संतुलन की कमी से रक्त में असंतुलन प्रक्रिया है। जिससे प्यूरीन टूटने से यूरिक एसिड बनता है। यूरिक ऐसिड एक तरह से हड्डियों जोड़ों अंगों के बीच जमने वाली एसिड़ क्रिस्टल है। जोकि चलने फिरने में चुभन जकड़न 
से दर्द होता है। जिसे यूरिक एसिड कहते हैं। शोध में यूरिक एसिड को शरीर में जमने वाले कार्बन हाइड्रोजन आक्सीजन नाइट्रोजन सी-5, एच-4, एन-4, ओ-3 का समायोजक माना जाता है। यूरिक एसिड समय पर नियत्रंण करना अति जरूरी है। यूरिक एसिड 
बढ़ने पर समय पर उपचार ना करने से जोड़ों गाठों का दर्द, गठिया रोग, किड़नी स्टोन, डायबिटीज, रक्त विकार होने की संभावनाएं ज्यादा बढ़ जाती है। रक्त में यूरिक एसिड की मात्रा को नियत्रंण करना अति जरूरी है। <br>
<b>यूरिक एसिड के लक्षण :</b><br>
पैरो-जोड़ों में दर्द होना।<br>
पैर एडियों में दर्द रहना।<br>
गांठों में सूजन<br>
जोड़ों में सुबह शाम तेज दर्द कम-ज्यादा होना।<br>
एक स्थान पर देर तक बैठने पर उठने में पैरों एड़ियों में सहनीय दर्द। फिर दर्द सामन्य हो जाना।<br>
पैरों, जोड़ो, उगलियों, गांठों में सूजन होना।<br>
शर्करा लेबल बढ़ना। इस तरह की कोई भी समस्या होने पर तुरन्त यूरिक एसिड जांच करवायें।<br>
<b>यूरिक एसिड नियत्रंण करने के आर्युवेदिक तरीके :</b><br>
1. यूरिक एसिड बढ़ने पर हाईड्रालिक फाइबर युक्त आहार खायें। जिसमें पालक, ब्रोकली, ओट्स, दलिया, इसबगोल भूसी फायदेमंद हैं।<br>
2. आंवला रस और एलोवेरा रस मिश्रण कर सुबह शाम खाने से 10 मिनट पहले पीने से यूरिक एसिड कम करने में सक्षम है।<br>
3. टमाटर और अंगूर का जूस पीने से यूरिक एसिड तेजी से कम करने में सक्षम है।<br>
4. तीनो वक्त खाना खाने के 5 मिनट बाद 1 चम्मच अलसी के बीज का बारीक चबाकर खाने से भोजन पाचन क्रिया में यूरिक ऐसिड नहीं बनता।<br>
5. 1 चम्मच शहद और 1 चम्मच अश्वगन्धा पाउडर को 1 कप गर्म दूध के साथ घोल कर पीने से यूरिक एसिड नियत्रंण में आता है।<br>
6. यूरिक एसिड बढ़ने के दौरान जैतून तेल का इस्तेमाल खाने तड़के-खाना बनाने में करें। जैतून तेल में विटामिन-ई एवं मिनरलस मौजूद हैं। जोकि यूरिक एसिड नियत्रंण करने में सहायक हैं।<br>
7. यूरिक एसिड बढ़ने पर खाने से 15 पहले अखरोट खाने से पाचन क्रिया शर्करा को ऐमिनो एसिड नियत्रंण करती है। जोकि प्रोटीन को यूरिक एसिड़ में बदलने से रोकने में सहायक है।<br>
8. विटामिन सी युक्त चीजें खाने में सेवन करें। विटामिन सी यूरिक एसिड को मूत्र के रास्ते विसर्ज करने में सहायक है।<br>
9. रोज 2-3 चैरी खाने से यूरिक एसिड नियत्रंण में रखने में सक्षम है। चेरी गांठों में एसिड क्रिस्टल नहीं जमने देती।<br>
10. सलाद में आधा नींबू निचैड कर खायें। दिन में 1 बार 1 गिलास पानी में 1 नींबू निचैंड कर पीने से यूरिक एसिड मूत्र के माध्यम से निकलने में सक्षम है। चीनी, मीठा न मिलायें।<br>
11. तेजी से यूरिक एसिड घटाने के लिए रोज सुबह शाम 45-45 मिनट तेज पैदल चलकर पसीना बहायें। तेज पैदल चलने से एसिड क्रिस्टल जोड़ों गांठों पर जमने से रोकता है। साथ में रक्त संचार को तीब्र कर रक्त संचार सुचारू करने में सक्षम है।
 पैदल चलना से शरीर में होने वाले सैकड़ों से आसानी से छुटकारा पाया जा सकता है। तेज पैदल चलना एसिड एसिड को शीध्र नियत्रंण करने में सक्षम पाया गया है।<br>
12. बाहर का खाना पूर्ण रूप से बन्द कर दें। घर पर बना सात्विक ताजा भोजन खायें। खाने में ताजे फल, हरी सब्जियां, सलाद, फाइबर युक्त संतुलित पौष्टिक आहर लें।<br>
13. रोज योगा आसान व्यायाम करें। योग आसान व्यायाय यूरिक एसिड को घटाने में मद्दगार है। साथ में योगा-आसान-व्यायाम करने से मोटापा वजन नियत्रंण रहेगा।<br>
14. ज्यादा सूजन दर्द में आराम के लिए गर्म पानी में सूती कपड़ा भिगो कर सेकन करें।<br>
15. यूरिक एसिड समस्या शुरू होने पर तुरन्त जांच उपचार करवायें। यूरिक एसिड ज्यादा दिनों तक रहने से अन्य रोग आसानी से घर बना लेते हैं।<br>
<b>यूरिक ऐसिड बढ़ने पर खान-पान :</b><br>
यूरिक एसिड बढ़ने पर मीट मछली सेवन तुरन्त बंद कर दें। नॉनवेज खाने से यूरिक एसिड तेजी से बढ़ता है। औषधि दवाईयां असर कम करती है।<br>
यूरिक एसिड बढ़ने पर अण्डा का सेवन पूर्ण रूप से बंद कर दें। अण्डा रिच प्रोटीन वसा से भरपूर है। जोकि यूरिक एसिड को बढ़ता है।<br>
बेकरी से बनी सही खाद्य सामग्री बंद कर दें। बेकरी फूड प्रीजरवेटिव गिला होता है। जैसेकि पेस्ट्री, केक, पैनकेक, बंन्न, क्रीम बिस्कुट इत्यादि।<br>
यूरिक एसिड बढ़ने पर तुरन्त जंकफूड, फास्ट फूड, ठंडा सोडा पेय, तली-भुनी चीजें बन्द कर दें। जंकफूड, फास्टफूड, सोडा ठंडा पेय पाचन क्रिया को और भी बिगाड़ती है। जिससे एसिड एसिड तेजी से बढता है।<br>
चावल, आलू, तीखे मिर्चीले, चटपटा, तले पकवानों का पूरी तरह से खाना बन्द कर दें। यह चीजें यूरिक एसिड बढ़ाने में सहायक हैं।<br>
बन्द डिब्बा में मौजूद हर तरह की सामग्री खाना पूरी तरह से बंद कर दें। बन्द डब्बे की खाने पीने की चीजों में भण्डारण के वक्त कैम्किल रसायन मिलाया जाता है। जैसे कि तरह तरह के प्लास्टिक पैक चिप्स, फूड इत्यादि। हजारों तरह के बन्द 
डिब्बों और पैकेट की खाद्य सामग्री यूरिक एसिड तेजी बढ़ाने में सहायक है। <br>
एल्कोहन का सेवन पूर्ण रूप से बन्द कर दें। बीयर, शराब यूरिक एसिड तेजी से बढ़ती है। शोध में पाया गया है कि जो लोग लगातार बीयर शराब नशीली चीजों का सेवन करते हैं, 70 प्रतिशत उनको सबसे ज्यादा यूरिक एसिड की समस्या होती है। <br>
यूरिक एसिड बढ़ने पर तुरन्त बीयर, शराब पीना बन्द कर दें। बीयर शराब स्वस्थ्य व्यक्ति को भी रोगी बना देती है। बीयर, शराब नशीली चीजें स्वास्थ्य के लिए हानिकारक है।<br>
<br><br><font color="blue"><b>किसी भी प्रकार के विज्ञापन हेतु हमें सम्पर्क करें - 8057061741, hshan888@gmail</b></font>
<br><br><form name="likeform" action="like.php" method="post">
<input type="hidden" name="page" id="page" value="410163">
<input type="button" value="Views:<?php echo $n;?>" style="background:red; color:white;"> <input type="submit" value="Likes:<?php echo $p;?>" style="background:red; color:white;">
</form>
<br>To post comment, it's mandatory to login
<br><font color="red">Leave a comment:</font>
<form name="cmntform" action="cmnt.php" method="post" onSubmit="return validate()">
<input type="hidden" name="page" id="page" value="410163">
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
<a href="https://www.facebook.com/sharer/sharer.php?u=http://www.newsktm.com/410163.php" style="background:blue; color:white; font-size:18px;" target="_blank"><font bgcolor="green">Share on Facebook</font></a></i>
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