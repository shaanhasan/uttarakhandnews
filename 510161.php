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
	height:8400px;
}
@media(min-width:600px)
{
.content{
	height:7500px;
}
}
@media(min-width:768px)
{
.content{
	height:5200px;
}
}
@media(min-width:1000px)
{
.content{
	height:5200px;
}
}
</style>
</head>
<?php
$n=mt_rand(1,20); 
$dbc=mysqli_connect('localhost','root','','ktmnews');
$query="SELECT * FROM page WHERE name='510161'"; // change for every page  & change it on form action below
	$result=mysqli_query($dbc,$query);
	$row=mysqli_fetch_array($result);
	$n=$n+$row['view'];
	$p=$row['point'];
		$query2="UPDATE page SET view=$n WHERE name='510161'"; // change for every page
			$result2=mysqli_query($dbc,$query2);
			$query3="SELECT fname,lname,email,path FROM comment WHERE name='510161'"; // change for every page
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
05 October, 2016
<center><b>सुप्रभात मित्रो !!!<br>Uttarakhand News.com में आपका स्वागत है</b></center>
<div id="left">
<img src="20151226_170139.jpg" class="img-circle" width="250" height="200">
<br><font color="purple"><b>Shaan Hasan</b>
<br>hshan888@gmail.com</font><br><br>
<font color="red"><b>61 साल पहले पाकिस्तान की 'मैच फिक्सिंग' पकड़ी थी लाला अमरनाथ ने</b></font><br>
क्रिकेट पर 6 साल पहले एक फिल्म आई थी. नाम था पटियाला हाउस. अक्षय कुमार ‘काली’ नाम के फास्ट बॉलर बने हैं. इंग्लैंड में इंडियंस के डेरे साउथहॉल के रहने वाले हैं. फिल्म उनके मुसीबतों को पार करके इंग्लैंड के लिए खेलने तक की कहानी है. 
आखिरी सीन में बड़े टूर्नामेंट का फाइनल चल रहा है. अक्षय को आखिरी गेंद पर 3 रन डिफेंड करने हैं और सामने खड़े हैं हार्ड-हिटर एंड्रयू साइमंड्स. कमेन्टेटर और दर्शक सब सुन्न बैठे हैं. अचानक कमेंट्री बॉक्स में बैठे संजय मांजरेकर बताते हैं कि अक्षय ने 
अपना रन-अप छोटा कर लिया है. थोड़ी ही देर में उनके पिताजी बने ऋषि कपूर आपको बताते हैं कि ये गेंद अक्षय लाला अमरनाथ की तरह करेंगे. अक्षय गेंद की सिलाई को इनस्विंग की पोज़ीशन में पकड़ते हैं और घुसेड़ देते हैं साइमंड्स के स्टंप्स में. इंग्लैंड 
मैच जीत जाता है और स्टेडियम उमड़ पड़ता है.<br>
ऐसी रेपुटेशन है लाला अमरनाथ की पूरी दुनिया में. लोग लोहा मानते हैं. सदर्न पंजाब के खिलाफ 4 ओवर में 4 मेडन डाल कर 4 विकेट ले लिए. 11 सितम्बर 1911 में जन्मे थे और पूरा नाम था नानिक अमरनाथ भारद्वाज. बंटवारे के बाद 
हुई पहली इंडिया-पाक सीरीज़ में उनकी कप्तानी में इंडिया ने पाकिस्तान को 2-1 से खदेड़ा. लेकिन लालाजी सिर्फ क्रिकेटर नहीं थे. उन्होंने बाद में बहुत ही काबिल सेलेक्टर, मैनेजर और कोच का रोल अदा किया. आइये आपको सुनाते हैं लालाजी की जिंदगी से 
जुड़े कुछ किस्से.<br>
<img src="lala.jpg" width="300" height="300"><br>
<b>1. खेली तब की ट्वेंटी-ट्वेंटी पारी</b><br>
लाला अमरनाथ बस गेंदबाज़ ही नहीं थे. स्टाइलिश और अग्रेसिव बैट्समैन भी थे. उन्होंने अपने फैंस को ज़्यादा इंतज़ार नहीं कराया और पहले ही इंटरनेशनल मैच में सेंचुरी ठोक दी. तब वो केवल 22 साल के थे. 15 दिसंबर 1933. मैच था इंग्लैंड से. 
बॉम्बे जिमखाना का ग्राउंड. सिर्फ 78 मिनट में 83 के स्कोर पर पहुंच गए. फ़ास्ट बॉलर्स को बेधड़क हुक किया और स्पिनर्स को भी मार लगायी. ये समझ लीजिये कि बिलकुल सहवाग स्टाइल इनिंग्स. मुसीबत की घड़ी में काउंटर-अटैक. 117 मिनट में 100
 पूरा कर लिया. तब स्ट्राइक रेट मिनटों के हिसाब से कैलकुलेट होता था. अमरनाथ ने बाद में इस पारी के बारे में कहा कि उन पर एक ऐसी शक्ति का असर हो गया था, जिसके बारे में वो खुद नहीं जानते थे. मैच ख़त्म हुआ और दर्शक दौड़ कर मैदान पर आ 
 गए. पहले ऐसा ही होता था. इंग्लैंड जीता ज़रूर, पर हर जगह हल्ला लाला अमरनाथ का था.<br>
<b>2. क्रिकेट को दिए एक या दो नहीं बल्कि तीन बेटे</b><br>
क्रिकेट में बाप-बेटों के बारे में अक्सर सुना होगा. जेफ मार्श के बेटे हैं शॉन मार्श और मिचेल मार्श. वाल्टर हैडली के बेटे हैं सर रिचर्ड हेडली और डेल हेडली. लाला मोहिंदर अमरनाथ और सुरिंदर ने टेस्ट क्रिकेट खेला और राजिंदर ने सिर्फ फर्स्ट-क्लास.
 इनमें मोहिंदर ‘जिमी’ अमरनाथ सबसे सफल रहे. इनके नाम 11 टेस्ट शतक और 42.50 की एवरेज से बनाये 4378 रन हैं. इंडिया के 1983 के वर्ल्ड कप जीतने में भी इनका बड़ा हाथ है. जिमी बताते हैं कि कैसे एक बार पिताजी के मशवरे ने उन्हें
 पार लगाया. 1977 में बैंगलोर में हो रहे इंडिया-इंग्लैंड टेस्ट में जिमी को टोनी ग्रेग को खेलने में दिक्कत आ रही थी. ग्रेग का कद काफी लम्बा था और मोहिंदर उन्हें पढ़ नहीं पा रहे थे. लालाजी ने उनसे खेलने से पहले बॉल के लिए वेट करने को कहा. 
 लंच ख़त्म होने पर यही बात मान कर जिमी ने ग्रेग की पहली दो बॉल पर चौके लगाये. फिफ्टी भी बनायी. बड़े बेटे सुरिंदर स्कूल क्रिकेट में 5 बार डक पर आउट हो चुके थे. लालाजी ने उन्हें फ्रंट फुट पर खेलने की सलाह दी. बैकफुट प्लेयर होने पर भी
 सुरिंदर ने उनकी बात मानी और अगले मैच में सेंचुरी बनाई. राजिंदर उनके तीसरे बेटे थे और उन्होंने फर्स्ट क्लास क्रिकेट खेला.<br>
<b>3. जसु पटेल बने लालाजी के ट्रम्प कार्ड</b><br>
1959 में ऑस्ट्रेलिया इंडिया में सीरीज़ खेलने आया. पहले टेस्ट में ऑस्ट्रेलिया ने होस्ट्स को मात दे दी. वो भी पूरे एक पारी और 127 रनों से. रिची बेनो ने 8-76 के मैच फिगर्स रिकॉर्ड किए. दूसरा टेस्ट शुरू होने से पहले इंडियन क्रिकेट से जुड़े सब 
लोग उलझन में थे कि क्या किया जाये. तभी सेलेक्टर्स के सरदार लाला अमरनाथ ने 35 साल के एक स्पिनर को सेलेक्ट कर लिया. इस स्पिनर का नाम था जसुभाई पटेल. इस फैसले के पीछे का तुक पूरी क्रिकेट बिरादरी में कोई समझ नहीं पा रहा था. 
टीम के कप्तान गुलाबराय रामचंद तक राज़ी नहीं थे. वो इसलिए क्यूंकि जसु पटेल अब तक मैटिंग विकेटों के स्पेशलिस्ट माने जाते थे. मगर लालाजी कानपुर की हाल ही में बिछी टर्फ विकेट का स्वभाव तुरंत जान गए थे. किसी की नहीं माने. 19 दिसंबर को
 मैच शुरू हुआ. भारत की पूरी बैटिंग 152 पर ढेर. ऑस्ट्रेलिया के टॉप तीन ने रन तो किए, मगर मिडल और लोअर ऑर्डर का सफाया कर दिया जसु पटेल ने. 6 बैट्समैन बिना खाता खोले आउट. जसु पटेल ने लिए 5 या 6 नहीं, बल्कि पूरे 9 विकेट. दूसरी 
 पारी में 5 विकेट और लेकर 14 विकेट का मैच हॉल ले लिया. इंडिया मैच भी जीता. 1999 में अनिल कुंबले के एक पारी में 10 विकेटों से पहले इन्हीं बोलिंग फिगर्स पर हमें घमंड था.<br>
<b>4. भिड़ गए विजयनगरम के महाराजा से</b><br>
बिशन सिंह बेदी ने लाला अमरनाथ के बारे में कहा है कि पाकिस्तान में उनका अच्छा-खासा रोब था. अपने गुस्से के कारण मशहूर लालाजी का झगड़ा एक बार महाराजा ‘विज़ी’ से हो गया. विज़ी की कप्तानी में इंडिया ने 1936 में इंग्लैंड का दौरा किया. 
विज़ी का पहले ही एक झगड़ा सी.के. नायडू से चल रहा था. दूसरा भी पाल लिया. उन्होंने अमरनाथ को नायडू का साथ करने से मना कर दिया. ये वाकया तो बिलकुल बचपन के झगड़ों की याद दिलाता है. इस ऑर्डर को अमरनाथ ने मान लिया. नोर्थैप्टनशायर के
 खिलाफ सेंचुरी लगायी और विज़ी और भी खुश हो गए. मगर विज़ी न तो क्रिकेट पर ज़्यादा पकड़ रखते थे और न ही साथी खिलाड़ियों के साथ अच्छा बर्ताव करते थे. अमरनाथ से भी झगड़ा होना ही था. अच्छी बॉलिंग करने पर भी विज़ी ने उन्हें पूरे मौके 
 नहीं दिए. उन्हें उनका फील्ड नहीं दिया. मगर घड़ा भरा माइनर काउंटीज़ के साथ एक मैच में. विज़ी ने अमरनाथ को उनकी जगह बैटिंग नहीं करने दी. परेशान होकर अमरनाथ ने पैड्स उतार फेंके और पंजाबी की भद्दी गालियां विजयनगरम के महाराजा को 
 दे डालीं. लालाजी को उस समय वापिस इंडिया भेज तो दिया गया पर बाद में सब ने विज़ी की ख़राब कप्तानी और बर्ताव को ही गरियाया.<br>
<b>5. जब मैच-फिक्सिंग की कोशिश को धर दबोचा लाला अमरनाथ ने</b><br>
ये किस्सा इंडिया के 1954 के पाकिस्तान टूर का है. पाकिस्तान के कप्तान अब्दुल हफीज़ करदार ने लालाजी को चाय पर बुलाया. इस समय लालाजी इंडिया के मैनजर थे. वो ऐसे बैठे थे कि उनकी पीठ दरवाज़े की तरफ थी. तभी अंपायर 
इदरीस बेग़ कमरे में घुसे. बिना ये जाने कि लालाजी भी उसी कमरे में हैं, उन्होंने करदार से अगले दिन होने वाले मैच के लिए ‘हिदायत’ जाननी चाही. लाला अमरनाथ पीछे मुड़े और तपाक से बेग़ से पूछ लिया कि किस तरह की हिदायत 
चाहिए थी उन्हें. बेग़ बिना कुछ कहे सरपट दौड़ लिए और कैप्टन करदार चौंक गए. लालाजी जिद पर अड़ गए और कहा कि अगर बेग़ ने अंपायरिंग की तो इंडिया की टीम मैच नहीं खेलेगी. इदरीस बेग़ के अलावा पाकिस्तान में कोई और इंटरनेशनली
 क्वॉलिफाइड अंपायर नहीं था. थे तो बस सेलेक्टर मसूद सलाउद्दीन जो कि फर्स्ट-क्लास क्वॉलिफाइड थे. मजेदार बात तो सुनिए कि सलाउद्दीन ने उसी मैच में करदार को 93 रन पे आउट दिया. बाद में लालाजी ने उनकी दाद भी दी. तब थर्ड अंपायर और
 विडियो रीप्ले वगैरह नहीं होते थे.
<br><br><font color="blue"><b>किसी भी प्रकार के विज्ञापन हेतु हमें सम्पर्क करें - 8057061741, hshan888@gmail</b></font>
<br><br><form name="likeform" action="like.php" method="post">
<input type="hidden" name="page" id="page" value="510161">
<input type="button" value="Views:<?php echo $n;?>" style="background:red; color:white;"> <input type="submit" value="Likes:<?php echo $p;?>" style="background:red; color:white;">
</form>
<br>To post comment, it's mandatory to login
<br><font color="red">Leave a comment:</font>
<form name="cmntform" action="cmnt.php" method="post" onSubmit="return validate()">
<input type="hidden" name="page" id="page" value="510161">
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
<a href="https://www.facebook.com/sharer/sharer.php?u=http://www.newsktm.com/510161.php" style="background:blue; color:white; font-size:18px;" target="_blank"><font bgcolor="green">Share on Facebook</font></a></i>
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