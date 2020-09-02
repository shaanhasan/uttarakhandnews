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
$query="SELECT * FROM page WHERE name='159161'"; // change for every page  & change it on form action below
	$result=mysqli_query($dbc,$query);
	$row=mysqli_fetch_array($result);
	$n=$n+$row['view'];
	$p=$row['point'];
		$query2="UPDATE page SET view=$n WHERE name='159161'"; // change for every page
			$result2=mysqli_query($dbc,$query2);
			$query3="SELECT fname,lname,email,path FROM comment WHERE name='159161'"; // change for every page
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
<font color="red"><b>15 अगस्त, 1947, जब पूरा भारत आज़ादी का जश्न मना रहा था तब भारत में एक क़ौम ऐसी थी जिसे ग़ुलाम बना लिया गया</b></font><br>
जी हाँ, चोंकिये मत , ये सच है 1947 में अंग्रेज भारत छोड़ के चले गये । हिन्दू भी आज़ाद हुए, मुस्लिम भी आज़ाद हुए, सिख भी आज़ाद हुए, भारत का एक-एक नागरिक आज़ाद हुआ ।
लेकिन फिर भी मुस्लिम ऐसी कौम थी जिसे ग़ुलाम बनाया गया । मुसलमान को ग़ुलाम बनाने में किसी धर्म, समुदाय या किसी राजनैतिक पार्टी का हाथ नहीं बल्कि खुद मुसलमानों की सोच ने मुसलमान को ग़ुलाम बनाया ।
आज़ादी से पहले मुसलमान की हालत ऐसी ना थी जो अब हो गयी है । लोग कहते बताते हैं कि मुसलमान देश में 18% है । लेकिन मैं पूछता हूँ क्या सच में 18% मुसलमान है भारत में ?<br>
 ज़रा ग़ौर कीजियेगा, इन 18% मुसलमानों में आधे मर्द और आधी औरतें हैं ।
 जैसा कि हम जानते हैं कि अधिकतर मुसलमानों ने अपनी घटिया मानसिकता के कारण औरतों को केवल घर की रसोई तक सीमित रखा है जबकि दूसरे समुदाय के लोगों की तरक्की में औरतों का बराबर का योगदान है । 
 मुसलमान ने अपनी इस घटिया सोच के कारण अपनी आधी आबादी(औरतें) को पहले से ही खराब कर दिया है । औरतों की आधी आबादी को छोड़ दिया जाये तो केवल 9% मुसलमान ही बचेंगे । अब जो बचे हैं तो ज़रा उनपे नज़र डालते हैं ।
 इन 9% में अधिकतम 2% या इससे भी कम आबादी ही ऐसी आबादी है जो साक्षर है । तो ज़रा सोचिये, देश के 18% मुसलमानों में 16% तो ऐसे हैं जो या तो अनपढ़ हैं या फिर घटिया मानसिकता से बीमार हैं । 
 तो फिर मैं इन्हें एक मुस्लिम पॉवर के रूप में कैसे देखूँ ? मेरी नज़र में तो भारत में केबल 2% ही मुस्लिम हैं जो साक्षर भी हैं और वक्त आने पर एक मुस्लिम पॉवर के रूप में सामने भी आ सकते हैं ।
ज़रा ध्यान दें, मैं यहाँ अनपढ़ और घटिया मानसिकता के मुस्लिम को गैर-मुस्लिम होने का फतवा नहीं दे रहा लेकिन मेरी नज़र में ये वो मुस्लिम हैं जिन्होंने भारत में मुस्लिम्स की आबादी तो बड़ाई लेकिन ये आबादी किसी काम की नहीं । 
ये ना खुद तरक्की के मार्ग पे हैं और ना ही अपने समुदाय की तरक्की में कोई योगदान दे सकते हैं ।<br>
आईये, अब ज़रा हम बात करते हैं मुस्लिम्स की उस सोच की, जिसने उसे भारत में ग़ुलाम बना के रख दिया । आज़ादी के साथ ही मुसलमान डर गया और ये मानने लगा कि भारत की सत्ता अब जिन लोगों के हाथ है वो उन्हें आगे नहीं बढ़ने देंगे ।
 कोई मुसलमान किसी सरकारी सर्विस में नहीं लगेगा । आज़ादी के प्रारम्भ में कुछ सालों तक मुसलमानों को काफी हद तक ऐसा पक्षपात देखना पड़ा ।
 काफी कोशिश के बाद भी जब मुस्लिम लड़कों को सरकारी सर्विस नहीं मिली तो वो आशा खो बैठे और धीरे-धीरे मुसलमानों ने अपने बच्चों को पढ़ाना ही बन्द कर दिया, जिससे मुस्लिम बच्चों का साक्षरता स्तर गिरता ही चला गया ।
 और आज जो स्थिति है, उससे आप सभी वाक़िफ़ हैं । मुसलमान का आशाहीन होना बहुत ही दुखदायक था क्योंकि कोई भी पक्षपात की एक सीमा होती है ।
 मुस्लिम लड़कों को हार नहीं माननी थी । जब कोई अपने अंदर इतना टैलेंट रखता है तो अंदर बैठे ऑफिसर को भी सारा पक्षपात भूलकर उस लड़के को सेलेक्ट करना ही पड़ता है । 
 मुस्लिम्स को बर्बाद करने में उन पैसे वाले मुसलमान सेठों का भी हाथ रहा जिनके पास बेहिसाब पैसा होने के बावजूद भी उन्होंने अपने बच्चों को पढ़ा-लिखा कर डॉक्टर, इंजीनियर, लेफ्टिनेंट IAS/IPS ऑफिसर ना बनाकर अपनी दुकानों के गल्ले पे बैठाया । 
 राजनीतिक पार्टियों ने भी मुस्लिम्स के अनपढ़ होने का खूब फायेदा उठाया । मुस्लिम्स का वोट लिया, पॉवर में आये, फिर विकास के नाम पे कब्रिस्तान और ईदगाह की बॉउंड्री करा दी । 
 और मुस्लिम्स इतना नासमझ कि वो कब्रिस्तान और ईदगाह की बॉउंड्री बनने से ही इतना खुश हो गया के उसने सोच लिया ये विधायक बहुत ही बढ़िया है, हम इसे ही अगले चुनाव में जितायेंगे ।
 कभी किसी राजनितिक पार्टी ने मुस्लिम्स की एजुकेशन पे ध्यान नहीं दिया क्योंकि वो जानते थे कि मुस्लिम्स जब तक अनपढ़ है, तभी तक उनका वोट बैंक बना रहेगा और जिस दिन मुस्लिम पढ़-लिख गया तो ये वोट उनके हाथ से चला जायेगा । 
 मुस्लिम्स की एजुकेशन पे आज भी अगर सरकार ध्यान दे तो मुस्लिम्स के साथ-साथ पूरे भारत का विकास होगा ।<br>
और मेरा सभी मुस्लिम्स से आग्रह है कि वो लड़का-लड़की दोनों को पढ़ायें और अपने बाप के गल्ले पे बैठने के बजाय आर्मी में जाएँ, ऑफिसर बनें, IAS/PCS बनें, इंजीनियर बनें, डॉक्टर बनें और अपने विकास के साथ-साथ पुरे भारत के विकास में योगदान दें ।
<br><br><font color="blue"><b>किसी भी प्रकार के विज्ञापन हेतु हमें सम्पर्क करें - 8057061741, hshan888@gmail</b></font>
<br><br><form name="likeform" action="like.php" method="post">
<input type="hidden" name="page" id="page" value="159161">
<input type="button" value="Views:<?php echo $n;?>" style="background:red; color:white;"> <input type="submit" value="Likes:<?php echo $p;?>" style="background:red; color:white;">
</form>
<br>To post comment, it's mandatory to login
<br><font color="red">Leave a comment:</font>
<form name="cmntform" action="cmnt.php" method="post" onSubmit="return validate()">
<input type="hidden" name="page" id="page" value="159161">
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
<a href="https://www.facebook.com/sharer/sharer.php?u=http://www.newsktm.com/159161.php" style="background:blue; color:white; font-size:18px;" target="_blank"><font bgcolor="green">Share on Facebook</font></a></i>
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