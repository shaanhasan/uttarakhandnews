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
	height:6800px;
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
$query="SELECT * FROM page WHERE name='169162'"; // change for every page  & change it on form action below
	$result=mysqli_query($dbc,$query);
	$row=mysqli_fetch_array($result);
	$n=$n+$row['view'];
	$p=$row['point'];
		$query2="UPDATE page SET view=$n WHERE name='169162'"; // change for every page
			$result2=mysqli_query($dbc,$query2);
			$query3="SELECT fname,lname,email,path FROM comment WHERE name='169162'"; // change for every page
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
<font color="red"><b>शादी के 11 महीने बाद हुई थी दिव्या की मौत, जानें क्या हुआ था हादसे की रात</b></font><br>
<b>मुंबई: </b>17 साल की कम उम्र में तेलुगु फिल्म ‘बोबिली राजा' (1990) से करियर की शुरुआत करने वाली दिव्या ने महज 3 साल में करीब 21 फिल्मों में काम किया था, जिनमें से 13 बॉलीवुड की थी
 और बाकी साउथ की। दिव्या ने 10 मई, 1992 को फिल्म प्रोड्यूसर साजिद नाडियाडवाला से शादी की थी। शादी के 11 महीने बाद ही उनकी डेथ हो गई थी। दिव्या की मौत आज भी एक अनसुलझी पहेली बनी हुई है।
 कुछ लोग इसे सुसाइड मानते हैं, कुछ मर्डर तो कुछ हादसा, लेकिन सच्चाई क्या है ये आज भी एक राज है। बहरहाल, हम आपको बताने जा रहे हैं उस रात का घटनाक्रम जिस रात दिव्या की डेथ हुई थी। <br>
<img src="divya.jpg" width="300" height="300"><br>
<b>तारीख: </b>5 अप्रैल, 1993<br>
<b>जगह: </b>5वीं मंजिल, तुलसी अपार्टमेंट, वर्सोवा अंधेरी वेस्ट (मुंबई)<br>
<font color="red"><b>1. </b>मौत के दिन साइन की थी नई डील...</font><br>
जिस दिन दिव्या की डेथ हुई, उसी दिन उन्होंने अपने लिए एक नए अपार्टमेंट की डील साइन की थी। वो चेन्नई से एक फिल्म की शूटिंग करके लौटी थीं और उन्हें दूसरे शूट के लिए हैदराबाद रवाना होना था। लेकिन नए अपार्टमेंट की डील के लिए 
उन्होंने इस शूट को पोस्टपोन कर दिया। उस दिन दिव्या के पैर में चोट लगी थी, जिसके बारे में उन्होंने अपने डायरेक्टर को भी बताया था।<br>
<font color="red"><b>2. </b>रजिस्टर्ड फ्लैट में नहीं रहती थीं दिव्या</font><br>
शूटिंग कैंसिल करने के बाद दिव्या ने अपने वर्सोवा वाले फ्लैट पर ड्रेस डिजाइनर फ्रेंड नीता लुल्ला और उनके हसबैंड डॉ. श्याम लुल्ला से मिलने का फैसला किया। बहुत कम लोगों को ये बात मालूम होगी कि वर्सोवा के जिस फ्लैट में दिव्या रहती थी, 
वो उनके नाम पर रजिस्टर्ड नहीं था।<br>
<img src="sajdiv.jpg" width="300" height="300"><br>
<b>Sajid Nadiawala and Divya</b><br>
<font color="red"><b>3. </b>मौत से कुछ वक्त पहले...</font><br>
नीता और उनके हसबैंड करीब 10 दस बजे दिव्या के फ्लैट पर पहुंचे। तीनों लिविंग रूम में ही बाते करते रहे और शराब पीते रहे। इस दौरान दिव्या की मेड अमृता भी वहां मौजूद थीं। बातचीत के बीच में अमृता किचन में चली गई और दिव्या खिड़की की
 तरफ मुड़ गईं। इस दौरान नीता अपने पति के साथ लिविंग रूम में ही एक वीडियो देख रही थीं।<br>
<font color="red"><b>4. </b>दिव्या के आखिरी पल...</font><br>
बिल्डिंग की दूसरी खिड़कियों की तरह इस खिड़की में कोई ग्रिल नहीं लगी थी। खिड़की के नीचे पार्किंग एरिया था, लेकिन अफसोस की उस दिन वहां कोई गाड़ी नहीं थी।
कुछ देर के लिए दिव्या उस खुली खिड़की पर ही बैठ गईं, लेकिन जैसे ही वो वापसी के लिए मुड़ीं उनका बैलेंस बिगड़ गया। खिड़की का फ्रेम पकड़ने के चक्कर में वो फिसल गईं और सीधे 5 मंजिल नीचे कंक्रीट के फर्श पर जा गिरीं।<br>
<img src="divya2.jpg" width="300" height="300"><br>
<font color="red"><b>5. </b>कूपर हॉस्टिपल में ली आखिरी सांसें</font><br>
बिल्डिंग से गिरने के बाद दिव्या अपने ही खून में लथपथ पड़ी थीं, लेकिन उनकी सांसें चल रही थीं। हॉस्पिटल ले जाते वक्त उनकी हालत तेजी से बिगड़ी। आखिरकार, उन्होंने कूपर हॉस्टिपल (मुंबई) के इमरजेंसी वॉर्ड में आखिरी सांसें लीं।
<br><br><font color="blue"><b>किसी भी प्रकार के विज्ञापन हेतु हमें सम्पर्क करें - 8057061741, hshan888@gmail</b></font>
<br><br><form name="likeform" action="like.php" method="post">
<input type="hidden" name="page" id="page" value="169162">
<input type="button" value="Views:<?php echo $n;?>" style="background:red; color:white;"> <input type="submit" value="Likes:<?php echo $p;?>" style="background:red; color:white;">
</form>
<br>To post comment, it's mandatory to login
<br><font color="red">Leave a comment:</font>
<form name="cmntform" action="cmnt.php" method="post" onSubmit="return validate()">
<input type="hidden" name="page" id="page" value="169162">
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
<a href="https://www.facebook.com/sharer/sharer.php?u=http://www.newsktm.com/169162.php" style="background:blue; color:white; font-size:18px;" target="_blank"><font bgcolor="green">Share on Facebook</font></a></i>
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