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
$query="SELECT * FROM page WHERE name='159163'"; // change for every page  & change it on form action below
	$result=mysqli_query($dbc,$query);
	$row=mysqli_fetch_array($result);
	$n=$n+$row['view'];
	$p=$row['point'];
		$query2="UPDATE page SET view=$n WHERE name='159163'"; // change for every page
			$result2=mysqli_query($dbc,$query2);
			$query3="SELECT fname,lname,email,path FROM comment WHERE name='159163'"; // change for every page
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
13 September, 2016
<center><b>सुप्रभात मित्रो !!!<br>Uttarakhand News.com में आपका स्वागत है</b></center>
<div id="left">
<img src="20151226_170139.jpg" class="img-circle" width="250" height="200">
<br><font color="purple"><b>Shaan Hasan</b>
<br>hshan888@gmail.com</font><br><br>
<font color="red"><b>पर्वत पुत्र से डरती थी अंग्रेजी हुकूमत</b></font><br>
पर्वत पुत्र गोविंद बल्लभ पंत के डर से ब्रिटिश हुकूमत काशीपुर को गोविंदगढ़ कहती थी। यही नहीं, आंदोलन को दबाने के लिए काशीपुर को काली सूची में डाल दिया था, मगर आजादी के दीवाने पंत झुके नहीं। 
छुआछूत व कुली बेगारी के विरोधी पंत कई बार जेल गए, मगर हक व काशीपुर के युवाओं में राजनैतिक चेतना व राष्ट्रीय भावना पैदा करने में पीछे नहीं रहे।<br>
खूंट गांव, अल्मोड़ा में 10 सितंबर 1887 में जन्मे पं.गोविंद बल्लभ पंत की प्रारंभिक शिक्षा गांव में हुई। इंटर की पढ़ाई अल्मोड़ा में करने के बाद कानून की पढ़ाई इलाहाबाद विवि से 1909 में की। 
इस दौरान पंत महात्मा गांधी व जवाहर लाल नेहरू के संपर्क में आए और वर्ष 1912-13 में काशीपुर चले आए। काशीपुर को उन्होंने अपनी कर्मस्थली बना लिया और स्वंतत्रता आंदोलन में कूद पड़े। 
हिंदी भाषा के प्रेमी, कर्मयोगी व संघर्षशील पंत ने वर्ष 1914 में उदयराज हिंदू हाईस्कूल की स्थापना की, उस समय यहां पर कोई स्कूल नहीं था। पंत के बढ़ते कद को देख अंग्रेजों ने स्वतंत्रता आंदोलन को दबाने के लिए स्कूल के खिलाफ डिग्री खारिज कर दी थी।
 जिससे छात्रों को बोर्डिग हाउस का लाभ न मिल सके। उन्होंने संकल्प लिया कि जब तक डिग्री की पूरी रकम दो हजार जमा नहीं करेंगे, तब तक भोजन ग्रहण नहीं करेंगे।
 उन्होंने दो दिन में लोगों से चंदा एकत्र कर रकम जमा कर दी। पंत ने पहला मुकदमा काशीपुर में ही लड़ा था और जिस भवन में उन्होंने वकालत की थी, वह भवन आज भी साक्षी के तौर पर है। 
 इस भवन को हेरिटेज घोषित करने के लिए वरिष्ठ अधिवक्ता अमरीश अग्रवाल ने पुरातत्व विभाग को पत्र भेजा है। 
 बागेश्वर में कुली बेगारी के खिलाफ आंदोलन चलाकर इसे खत्म कराया। उन्होंने नैनीताल, अल्मोड़ा, काशीपुर व गढ़वाल में आजादी की अलख जलाई थी। कुमाऊं परिषद कोटद्वार के सचिव रहे पंत सालम व सल्ट आंदोलन के दौरान गांधी जी के बहुत करीब आए।
 साइमन कमीशन के आगमन के खिलाफ 29 नवंबर 1927 में लखनऊ में जुलूस व प्रदर्शन करने के दौरान अंग्रेजों के लाठीचार्ज में पंत को चोटें आई, जिससे उनकी गर्दन झुक गई थी। 
 समाज सुधार के मकसद से यहां पर हिंदी प्रेम सभा काशीपुर नागरी प्रचारिणी सभा की शाखा के तौर पर स्थापना की। अंग्रेजों को यह पसंद नहीं था कि लोग शिक्षित होकर स्वतंत्रता आंदोलन में भाग ले सके। 
 अंग्रेजों ने आतंकवाद को प्रोत्साहन देने का आरोप लगाकर इसे उखाड़ने की कोशिश की, मगर पंत के बढ़ते कद से अंग्रेजों की एक न चली। वर्ष 1946 में पंत संयुक्त प्रांत के सीएम बने तो उन्होंने जंगलों से पटी तराई में लोगों को बसाया।<br>
<b>पंत के विस्मरणीय पल</b><br>
<font color="red">वर्ष 1912-13 में काशीपुर में आगमन हुआ<br>
-वर्ष 1913 में निकाला था अल्मोड़ा अखबार<br>
-वर्ष 1914 में उदयराज हिंदू कालेज की स्थापना की<br>
-वर्ष 1923 में उत्तर प्रदेश विधान परिषद के सदस्य बने<br>
-1927 में राष्ट्रीय कांग्रेस अध्यक्ष बने<br>
-26 मई 1930 को नमक कानून भंग करने क आरोप में छह माह की सजा<br>
-18 फरवरी 1932में असहयोग आंदोलन में भाग लेने के कारण गिरफ्तार हुए<br>
-17 जुलाई 1937 को संयुक्त प्रांत के प्रथम प्रधानमंत्री बने थे<br>
-नौ अगस्त 1942 में मुंबई में भारत छोड़ो आंदोलन में भाग लेने से गिरफ्तार हुए<br>
-24 नवंबर 1942 में व्यक्तिगत सत्याग्रह में गिरफ्तार हुए<br>
-वर्ष 1957 में भारतरत्न की उपाधि मिली<br>
कुमाऊं में सबसे पहले लागू की थी निशुल्क अनिवार्य शिक्षा</font><br>
वर्ष 2009 में भले ही शिक्षा का अधिकार अधिनियम के तहत 14 साल तक के बच्चों को नि:शुल्क शिक्षा देने का प्रावधान किया गया हो, मगर इससे पहले पंत ने वर्ष 1922 में कुमाऊं में सबसे पहले निशुल्क शिक्षा व अनिवार्य शिक्षा लागू की थी। 
यह लागू काशीपुर में की गई थी और वह शिक्षा समिति के अध्यक्ष भी थे।<br>
पंत जब यहां पर वकालत करते थे तो एक दिन वह चैंबर से गिरीताल घूमने चले गए। टहलते हुए दो युवक आपस में स्वतंत्रता आंदोलन के बारे में चर्चा कर रहे थे। यह सुन पंत ने युवकों से पूछा कि यहां भी राजनैतिक चेतना व राष्ट्रीय भावना पर बहस होती है।
 इस पर युवकों ने हामी भरते हुए कहा कि यहां नेतृत्व की जरूरत है। पंत ने युवाओं से बात कर युवाओं में राजनैतिक चेतना व राष्ट्रीय भावना जागृत करने की अगुवाई की और सफल रहे। पंत की सक्रियता से अंग्रेज परेशान थे।<br>
जिस बिल्डिंग में पं.गोविंद बल्लभ पंत वकालत करते थे, यह उनकी अंतिम निशानी है। इसे हेरिटेज घोषित करने के लिए पुरातत्व विभाग को दो साल पहले पत्र भेजा है। यहां बाहर से जो भी आए तो कम से कम उनका एक निशानी तो देख सके।
<br><br><font color="blue"><b>किसी भी प्रकार के विज्ञापन हेतु हमें सम्पर्क करें - 8057061741, hshan888@gmail</b></font>
<br><br><form name="likeform" action="like.php" method="post">
<input type="hidden" name="page" id="page" value="159163">
<input type="button" value="Views:<?php echo $n;?>" style="background:red; color:white;"> <input type="submit" value="Likes:<?php echo $p;?>" style="background:red; color:white;">
</form>
<br>To post comment, it's mandatory to login
<br><font color="red">Leave a comment:</font>
<form name="cmntform" action="cmnt.php" method="post" onSubmit="return validate()">
<input type="hidden" name="page" id="page" value="159163">
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
<a href="https://www.facebook.com/sharer/sharer.php?u=http://www.newsktm.com/159163.php" style="background:blue; color:white; font-size:18px;" target="_blank"><font bgcolor="green">Share on Facebook</font></a></i>
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