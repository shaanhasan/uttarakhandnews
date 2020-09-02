<?php
session_start();
?>
<!DOCTYPE HTML>
<html xmlns="http:www.w3.org/1999/xhtml">
<head><title>Uttarakhand News</title>
<meta name="description" content="A news website which provide news local, national and international level. News about politics, sports, movies etc are available here.">
<meta name="keywords" content="ktm,ktm news,ktmnews,newsktm,news ktm,khatima,khatima news,shahenshah,shaan,hasan,uttarakhand news,udham singh nagar news,rudrapur news,khatima congress,khatima bjp,">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Language" content="hi" />
<link rel=stylesheet href="main.css">
<style type="text/css">
.topclass{	
	height:140px;
}
#id1{ text-align:center;
color:black;
}
#left a{
	text-decoration:none;
	color:red;
}
.content{
	height:4000px;
}
@media(min-width:600px)
{ .topclass{	
	height:175px;
}
.content{
	height:3600px;
}
}
@media(min-width:768px)
{.topclass{	
	height:180px;
}
.content{
	height:2220px;
}
}
@media(min-width:1000px)
{
.topclass{	
	height:180px;
}
.content{
	height:2220px;
}
}
</style>
<script>
function validate()
{ 
 if(document.aform.fname.value=="")
{ 
aform.fname.focus();
return (false);
}
else if(document.aform.lname.value=="")
{
aform.lname.focus();
return (false);
}
else if(document.aform.email.value=="")
{
aform.email.focus();
return (false);
}
else if(document.aform.pswd.value=="")
{
aform.pswd.focus();
return (false);
}
else if(document.aform.psw.value=="")
{
aform.psw.focus();
return (false);
}
else if(document.aform.pswd.value!=document.aform.psw.value)
{ alert("Password mismatch!");
aform.psw.focus();
return (false);
}
else
return (true);
}
</script>
</head>
<body>
<?php if(isset($_GET['msg']))
{
	print '<script>alert("'.$_GET['msg'].'");</script>';
}
$page="index.php";
    if(isset($_SERVER['HTTP_REFERER']))
$page=$_SERVER['HTTP_REFERER']; // URL of previous page
if(strpos($page,'?')!==false) // check for ? in URL
{
	$page=strstr($page,'?',true); // remove query string or return string before ?
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
&nbsp; &nbsp;<?php echo date("F d, Y");?>
<center><b>सुप्रभात मित्रो !!!<br>Uttarakhand News.com में आपका स्वागत है</b></center>
<div id="left">
<form name="aform" action="sign2.php" method="POST" onSubmit="return validate()">
<input type="hidden" name="prepage" id="prepage" value="<?php echo $page;?>">
<table align="center">
<tr><td><font color="red">FirstName:</font></td><td><input type="text" name="fname" id="fname" size="12"></td></tr>
<tr><td><font color="red">LastName:</font></td><td><input type="text" name="lname" id="lname" size="12"></td></tr>
<tr><td><font color="red">Email_ID:</font></td><td><input type="text" name="email" id="email" size="12"></td></tr>
<tr><td><font color="red">Password:</font></td><td><input type="password" name="pswd" id="pswd" size="12"></td></tr>
<tr><td><font color="red">Re-typePassword:</font></td><td><input type="password" name="psw" id="psw" size="12"></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="SignUp" style="background:red; color:white;"></td></tr></table>
</form>
<br><br>
<a href="119161.php">इस गांव के ग्रामीणों के लिए बचपन से बूढ़ा हुआ सड़क का सपना</a><br><br>
<a href="119162.php">वायु सेना में तैनात पिता बेटी को बनाता था हवस का शिकार, ऐसे हुआ खुलासा</a><br><br>
<a href="119163.php">खालिस्तान का समर्थन करने वाला युवक गिरफ्तार</a><br><br>
<a href="119164.php">नैनीताल जिले के जौलासाल जंगल में मिली हथियार बनाने की फैक्ट्री</a><br><br>
<a href="129161.php">जब दो प्यार करने वालों ने दो देशों को हिला के रख दिया <b>India weds Pak</b></a><br><br>
<a href="129162.php">'न्यूड औरत' के बारे में विक्रम भट्ट को प्राप्त हुआ ये ज्ञान</a><br><br>
<a href="129163.php">'शिवाय' के टाइटल ट्रैक में देखने-सुनने को मिलेगा सिंगर्स का अलग अंदाज</a><br><br>
<a href="129164.php">'पतलून में आग लगी हो तो...', कपिल शर्मा पर भड़के सिंगर अभिजीत</a><br><br>
<a href="129165.php">फिल्‍म रिव्‍यू- स्‍ट्रीट स्‍मार्ट 'फ्रीकी अली' (3 स्‍टार)</a><br><br>
<a href="149161.php">तराई बीज विकास निगम के एमडी ने दिया इस्तीफा</a><br><br>
<a href="149162.php">कश्मीर में तैनात एक सिपाही का खुला खत, जो पूरे देश का सिर शर्म से झुका देगा</a><br><br>
<a href="149163.php">चोरी किया था मार्क जुगरबर्ग ने फेसबुक का आईडिया</a><br><br>
<a href="149164.php">'शोले' एक ऐसी मूवी जो हिन्दी सिनेमा के लिए मील का पत्थर साबित हुई</a><br><br>
<a href="149165.php">किम करदाशियां के फिगर पर रामगोपाल वर्मा ने किया ये कमेंट</a><br><br>
<a href="158162.php">फेकिंग न्यूज के टी एम (मल्लन खाँ का सुसाइड</a><br><br>
<a href="159163.php">पर्वत पुत्र से डरती थी अंग्रेजी हुकूमत</a><br><br>
<a href="159164.php">पाकिस्तान कोई देश नहीं , ये कुछ भटके हुये लोगों का समूह है जो सन् 1947 में अपने ही देश हिन्सेदुस्तान से वगाबत कर बैठा था</a><br><br>
<a href="169161.php">आज के दौर की सबसे जरूरी फिल्म है अमिताभ-तापसी स्टारर 'पिंक'</a><br><br>
<a href="169162.php">शादी के 11 महीने बाद हुई थी दिव्या की मौत, जानें क्या हुआ था हादसे की रात</a><br><br>
<a href="169163.php">इस देश में रोड एक्सीडेंट्स से निजात दिला रहीं हैं टॉपलेस मॉडल्स</a><br><br>
<a href="169164.php">खटीमा - मेरा शहर, मेरी दुनिया</a><br><br>
<a href="189161.php">30 महीने की सर्च और 912 करोड़ खर्च करने के बाद मिला मलेशियाई प्लेन का मलबा</a><br><br>
<a href="189162.php">इस तरह हिन्दी, भारत की राष्ट्रीय भाषा बनते बनते रह गई....</a><br><br>
<a href="189163.php">पति ने पत्नी से तंग आकर उसे eBay पर बिक्री के लिए डाला, 65 हज़ार पाउंड की बोली लगी</a><br><br>
<a href="410161.php">दुनिया रोचक और मजेदार चीज़ो से भरी हुई है पढ़े “Interesting facts in hindi”</a><br><br>
<a href="410162.php">लड़के को हुआ लड़की से प्यार, कुत्ता बना बीच की दीवार</a><br><br>
<a href="410163.php">यूरिक एसिड ने शरीर को जकड़ रखा है तो चिंता ना करे, ये पोस्ट आपके लिए वरदान साबित होगी, जरूर पढ़े और शेयर कर</a><br><br>
<a href="510161.php">61 साल पहले पाकिस्तान की 'मैच फिक्सिंग' पकड़ी थी लाला अमरनाथ ने</a><br><br>
<center><font color="skyblue" size="5px">Sponsered by</font></center>
<img src="WP_20131225_005.jpg" width="300" height="300"><br>
<font color="red">Mohsin Khan, famous bussinesman & Ex-district<br>president of Congress</font><br><br>
<img src="DSC_1056.jpg" width="300" height="300"><br>
<font color="red">Saddam Hussain, student BA 3<sup>rd</sup> year,<br>HNBPG College Khatima</font><br><br>
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
</div>
</div>
<div id="bottom"><a href="index.php"><b>Home|</b></a><a href="profile.php"><b>Make Profile|</b></a><a href="index.php"><b>Search Person</b></a><br>
submit your story by mail at <font color="red"><b>chiefeditor@newsktm.com<br>&#169;</b></font> 2016-17
</div>
</div>
</body>
</html>