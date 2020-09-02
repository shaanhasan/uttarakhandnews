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
$query="SELECT * FROM page WHERE name='410161'"; // change for every page  & change it on form action below
	$result=mysqli_query($dbc,$query);
	$row=mysqli_fetch_array($result);
	$n=$n+$row['view'];
	$p=$row['point'];
		$query2="UPDATE page SET view=$n WHERE name='410161'"; // change for every page
			$result2=mysqli_query($dbc,$query2);
			$query3="SELECT fname,lname,email,path FROM comment WHERE name='410161'"; // change for every page
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
<font color="red"><b>दुनिया रोचक और मजेदार चीज़ो से भरी हुई है पढ़े “Interesting facts in hindi”</b></font><br>
दुनिया गजब की है, यह तो हम सब जानते हैं। शायद यही कारण है कि हर कोई ज्यादा से ज्यादा जीना चाहता है। लेकिन अफसोस कि दुनिया इतनी बड़ी है कि कोई भी इंसान अपने जीवन में पूरी दुनिया तो देख ही नहीं सकता है। 
खैर कोई बात नहीं, कम से कम हम दुनिया से जुड़े उन रहस्यों को तो जान ही सकते हैं, जो वाकई में अद्भुत हैं। <br>
उदाहरण के तौर पर अगर हम आइसलैंड की बात करें तो वो सबसे खुशहाल राष्ट्र है। वहीं शायद आपको यह भी नहीं मालूम होगा कि चार महीने की उम्र तक आप नमक का टेस्ट भी नहीं कर सकते थे। यानी चार महीने की उम्र तक बच्चा नमक-चीनी के 
टेस्ट में फर्क नहीं कर पाता है ।<br>
और सुनिये क्या आपको मालूम है कि अंटार्कटिका में बर्फ के क्रिस्टल का साइज क्या है? हैरान मत होईये, एक-एक क्रिस्टल का साइज स्कूल बस से लेकर ट्रक के बराबर होता है। और भी रोचक और मजेदार तथ्य हैं,....<br>
 पहली बार चीनी भारत में ही बनाई गई थी.<br>
आइसलैंड सबसे खुशहाल राष्ट्र है। एक मात्र ऐसा देश है जिसके पास आर्मी नहीं ।<br>
Copy और Paste की खोज Larry Tesler ने की थी.<br>
 लंदर में 72 अरबपति रहते हैं, जो किसी भी शहर से सबसे ज्यादा हैं.<br>
भारत में सिर्फ 3% लोग ही Income Tax भरते हैं.<br>
भारत में सिर्फ 3% लोग ही Income Tax भरते हैं.<br>
Guinness Book of World Records में दर्ज नामों में भारतीयों की संख्या तीसरे नंबर पर हैं.<br>
सपने में देखने वाले हर चेहरे से हम एक बार जरूर मिले होते हैं.<br>
 माइक्रोवेव में पकाई गई पहली चीज पोपकार्न थी.<br>
दुनिया का सबसे पहला कंप्यूटर माउस 1964 में बनाया गया था. वो भी लकड़ी से.<br>
 <img src="mouse.jpg" width="300" height="300"><br>
 प्रिटिंग प्रेस के आविष्कार के बाद Comma का प्रयोग अनिवार्य हो गया.<br>
 हर दिन 30 मिनिट का व्यायाम आपको 10 प्रतिशत अधिक स्मार्ट बनाता हैं.<br>
 अगर आप सोचते हुए सोते हैं तो दिमाग नींद में भी सोचता रहता है जिससे आपको जागने पर आराम की फीलिंग नहीं आती और थकावट महसूस होती हैं.<br>
गर्म रंग जैसे पीला, केसरिया और लाल भूख बढ़ाते हैं. यही वजह है कि कुछ रेस्टोरेंट पीला, केसरिया और लाल रंग से पेंट किए जाते हैं.<br>
 52,000 टन सोना अभी भी जमीन के भीतर है जिसकी कीमत 2 ट्रिलियन डॉलर हैं.<br>
मनुष्य की आईब्रो हर दो महीने में बदलती रहती हैं.<br>
 स्पर्म में पाए जाने वाले प्रोटीन को महिलाओंं की त्वचा के लिए काफी अच्छा बताया जाता हैं.<br>
जनसंख्या में एक तिहाई इजाफा अनचाहे गर्भ की वजह से हो रहा हैं.<br>
 दुनिया में सिर्फ 2% ही व्यक्ति ऐसे है जिनकी आखो का रंग हरा हैं.<br>
 दुनिया को आई फोन से परिचित कराने वाले स्‍टीव जॉब्‍स की कार पर कभी भी नंबर प्‍लेट नहीं लगा था.<br>
 इटली में लोग नये साल पर लाल अंडरवियर को पहनना लकी मानते हैं.<br>
गोल्डफिश अपनी आंखे कभी भी बंद नही करती हैं.<br>
 दुनिया में सबसे ज्‍यादा रोल्‍स रॉयस कारें हांग कांग शहर में हैं. इसे सिटी ऑफ रोल्‍स रॉयस भी कहा जाता हैं.<br>
 औसतन एक आदमी अपनी ज़िन्दगी के 14 दिन ट्रैफिक सिग्नल पर बिता देता हैं.<br>
 पहले साल में कोका-कोला की कुल 25 बॉटल ही बिकी थीं। यह एक अच्छा उदाहरण है कि असफलता मिलने पर काम को बंद नहीं करना चाहिए.<br>
रमन मैगनेसे पुरस्कार को एशिया का नोबेल पुरस्कार कहा जाता हैं.<br>
भारत में हर साल अमेरिका से दोगुने इंजीनियर बनते हैं.<br>
 पैदल चलते समय लगभग 10% टाईम हमारी आंखे बंद रहती हैं.<br>
 अगर आप मकड़ी को जलाओगे तो वह बारूद की तरह फट जाएगी.<br>
 नाश्ते में चाॅकलेट केक खाने से आपका वजन बहुत जल्दी कम होता हैं.<br>
 दुनिया में हर 60 आदमियों पर एक AK-47 हैं.<br>
 एक हिप्पोपोटेमस अपना मुँह 180° तक खोल सकता हैं.<br>
 हमारे शरीर का कंकाली ढांचा 35 साल की उम्र तक बढ़ता रहता हैं.<br>
 दुनिया में 6800 अलग-अलग भाषाएँ हैं.<br>
 अब तक दुनिया में कोई भी कुत्ता 29 साल से ज्यादा नही जिया हैं.<br>
बुद्धिमान लोग सामान्य लोगों की तुलना में बहुत जल्दी गुस्सा हो जाते हैं.<br>
 महिलाओं में अक्‍सर आयरन की कमी हो जाती है लेकिन अगर आप हरी मिर्च खाने के साथ रोज खाएंगी तो आपकी यह कमी भी पूरी हो जाएगी.<br>
 एक इंसान लगभग 6 सैकेंड तक जम्हाई लेता हैं.<br>
दुनिया में घूमने के लिए पसंद किये जाने वाले शहरों में पेरिस को सबसे ज्यादा पसंद किया जाता हैं.<br>
इंसानी शरीर की चमड़ी को अगर समतल फैलाया जाए तो यह 20 स्काॅयर फ़ीट जगह को घेर लेगी.<br>
 दिन में एक बार चांदी के ग्लास में पानी ज़रूर पीएं. इससे गुस्सा कम आता हैं.<br>
 मिस्त्र के पिरामिडों का वास्तविक रंग सफेद था. समय के साथ उनका रंग मटमैला हो गया.<br>
 सिनेमा के पर्दे पर पहला KISS, 1927 में ‘Wings’ मूवी में किया गया था.<br>
 पादने से शरीर का ब्लड प्रेशर कंट्रोल में रहता हैं.<br>
काले रंग के लोगो को कम दिल का दौरा पड़ता हैं.<br>
आप चौंक जायेंगे जब आप देखेंगे कि कोका कोला का इस्तेमाल टायलेट धोने में भी किया जा सकता है.<br>
 आपके पेट में एक दुसरा दिमाग होता है जिसे एनट्रेरिक नर्वस सिस्टम कहते हैं। इसी से अंग्रेजी में अक्सर कही जाने वाली लाइन ‘गट फीलिंग’ आती है.<br>
महिलाएं सामान्य तौर पर ऐसे सवाल पुछती हैं जिनके जवाब उन्हें पहले से पता होते हैं, इसलिये बेहतर होगा कि आप सच ही कह दें.<br>
 ज्यादा सोचना एक किस्म की निराशा की तरफ बढता है और आप खुद को सामाजिक और भावनात्मक तौर पर अकेला पाते हैं.<br>
 ऑस्ट्रेलिया की खोज जेम्स कुक ने की थी.<br>
 आप जिस लिफ्ट में हैं और वो नीचे गिर रही है तो आप लिफ्ट के बीच में लेटकर खुद को बचाएं.<br>
 जब आप झूठ बोलते है आपकी नाक गर्म हो जाती है.<br>
 अगर आप किसी को पहले से संदेश भेजते हैं तो 90 प्रतिशत संभावना है कि वो इंसान आप में रुचि नहीं रखता है.<br>
 होमोसेक्सुएलिटी को स्वीडन में 1979 तक एक बीमारी समझा जाता था.<br>
बिल्लियां अपने चेहरे को अगर किसी चीज से घिसती हैं तो उसका मतलब है कि वो उसे अपनी चीज समझती हैं.<br>
 अगर आप हेडफोन का एक घंटे तक इस्तेमाल करते हैं इसका मतलब होता है कि आपके कानों में बैक्टिरिया 700 गुना तक बढ गये हैं.<br>
 न्यूयॉर्क शहर का निक नेम बिग एप्पल है.<br>
नोट कागज का नहीं बल्कि कॉटन का बनता है.<br>
अगर आप किसी से सेक्स करना चाहते है तो आपकों उनसे झूठ बोलने में मुश्किल होगी.<br>
गुदगुदी प्राचीन चीन में प्रताड़ित करने का एक तरीका था क्योंकि इसके कोई निशान नहीं छूटते.<br>
 दिन में सपने देखना आपके दिमाग के लिये फायदेमंद होता है। इससे आप रचनात्मक बनते हैं.<br>
 80 प्रतिशत लोग अपनी रातों को पुराने संवाद याद करते हुए बिताते हैं और सोचते हैं कि उन्हें क्या कहना चाहिए था.<br>
 अगर बैकग्राउंड में हल्का संगीत बज रहा हो तो आप अधिक ध्यान से कार्य करते हैं.<br>
चार्ज होते हुए मोबाइल का इस्तेमाल करने से उसकी बैटरी खराब हो सकती है। यही कारण है कि चार्जर का तार इतना छोटा होता हैं.<br>
 कभी-कभी Morning Sex, रात में किए गए सेक्स से बेहतर होता हैं.<br>
 लड़कियों को वो लड़के बिल्कुल पसंद नही जो दूसरो की चुगली करते हैं.<br>
 Youtube पर सबसे ज्यादा सर्च की जाने वाली चीज हैं How To Kiss.<br>
 जो लोग जितना ज्यादा धूम्रपान करते हैं उनके बाल जल्द ही grey रंग के होते चले जाते हैं.<br>
 55% लोग “उबासी” शब्द पढ़ने के बाद उबासी लेना शुरू कर देते हैं.<br>
<br><br><font color="blue"><b>किसी भी प्रकार के विज्ञापन हेतु हमें सम्पर्क करें - 8057061741, hshan888@gmail</b></font>
<br><br><form name="likeform" action="like.php" method="post">
<input type="hidden" name="page" id="page" value="410161">
<input type="button" value="Views:<?php echo $n;?>" style="background:red; color:white;"> <input type="submit" value="Likes:<?php echo $p;?>" style="background:red; color:white;">
</form>
<br>To post comment, it's mandatory to login
<br><font color="red">Leave a comment:</font>
<form name="cmntform" action="cmnt.php" method="post" onSubmit="return validate()">
<input type="hidden" name="page" id="page" value="410161">
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
<a href="https://www.facebook.com/sharer/sharer.php?u=http://www.newsktm.com/410161.php" style="background:blue; color:white; font-size:18px;" target="_blank"><font bgcolor="green">Share on Facebook</font></a></i>
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