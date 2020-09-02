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
	height:5600px;
}
@media(min-width:600px)
{
.content{
	height:5000px;
}
}
@media(min-width:768px)
{
.content{
	height:3000px;
}
}
@media(min-width:1000px)
{
.content{
	height:3000px;
}
}
</style>
</head>
<?php
$n=mt_rand(1,20); 
$dbc=mysqli_connect('localhost','root','','ktmnews');
$query="SELECT * FROM page WHERE name='119161'"; // change for every page  & change it on form action below
	$result=mysqli_query($dbc,$query);
	$row=mysqli_fetch_array($result);
	$n=$n+$row['view'];
	$p=$row['point'];
		$query2="UPDATE page SET view=$n WHERE name='119161'"; // change for every page
			$result2=mysqli_query($dbc,$query2);
			$query3="SELECT fname,lname,email,path FROM comment WHERE name='119161'"; // change for every page
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
11 September, 2016
<center><b>सुप्रभात मित्रो !!!<br>Uttarakhand News.com में आपका स्वागत है</b></center>
<div id="left">
<img src="20151226_170139.jpg" class="img-circle" width="250" height="200">
<br><font color="purple"><b>Shaan Hasan</b>
<br>hshan888@gmail.com</font><br><br>
<font color="red"><b>इस गांव के ग्रामीणों के लिए बचपन से बूढ़ा हुआ सड़क का सपना</b></font><br>
<b>साहिया, देहरादून :</b>बोहा गांव के लोगों का बस एक ही सपना है, सड़क ।
 लेकिन, आजादी के बाद से अब तक के 70 वर्षों में उनका यह सपना साकार नहीं हो पाया। ऐसा नहीं कि उन्होंने सड़क के लिए आवाज न उठाई हो, लेकिन अधिकारियों से लेकर विधायक व मुख्यमंत्री तक जब कानों में रुई ठंसे बैठे हों, तो उनकी गुहार कौन सुनेगा । 
अब तो सड़क का सपना बचपन से बुढ़ापे तक आ पहुंचा है, लेकिन लगता है यह टीस मौत के बाद ही जाएगी । कालसी ब्लॉक स्थित बोहा गांव के बुजुर्ग कुछ इस तरह अपना दर्द बयां करते हैं ।<br>
<img src="sahiya.jpg" width="300" height="300"><br>
देहरादून जिले के कालसी ब्लॉक से साहिया-क्वानू मार्ग पर 33 किमी का सफर तय कर डेढ़ किमी की खड़ी चढ़ाई चढ़ने के बाद बोहा गांव पहुंचा जा सकता है । 
भले ही हमें यह चढ़ाई तकलीफदेह लगे, लेकिन बोहा में रहने वाले साढ़े छह सौ लोगों की यह नियति बन चुका है । <br>
यही नहीं, गांव में प्राथमिक शिक्षा के बाद नौनिहालों को सात किमी दूर राइंका पजिटिलानी तक की दौड़ लगानी पड़ती है । साथ ही तबीयत खराब होने पर 36 किमी दूर सीएचसी साहिया में ही इलाज मिल पाता है ।
खड़ी चढ़ाई में सबसे ज्यादा दिक्कत गर्भवती महिलाओं को होती है । कई बार ग्रामीण उन्हें खाट पर लेकर जब तक सड़क तक पहुंचते हैं, डिलीवरी हो जाती है । ऐसे में काफी दिक्कत होती है । साथ ही बुजुर्गों की तबीयत खराब होने पर भी काफी मुश्किलें होती हैं ।
यूं तो बोहा गांव जिले में अदरक उत्पादन के लिए जाना जाता है । लेकिन, सरकारों ने कभी यहां के किसानों की मुश्किलें जानने की कोशिश नहीं की । यहां के किसान पीठ पर फसल लादकर सड़क तक लेकर आते हैं ।
 ऐसे में उन्हें दिन भर में कई फेरे लगाने पड़ते हैं, जिसमें उन्हें काफी परेशानी होती है ।<br>
बोहा की ग्राम प्रधान नूपो देवी बताती हैं कि सड़क के लिए उन्होंने मुख्यमंत्री से लेकर विधायकों तक से गुहार लगाई । लेकिन, किसी ने उनकी समस्या को गंभीरता से नहीं लिया ।
 यहां तक कि विधान सभा चुनाव से पहले बोहा आए क्षेत्रीय विधायक एवं गृह मंत्री प्रीतम सिंह भी अपना वादा भूल गए । लिहाजा अब लोगों में आक्रोश पनपने लगा है ।
स्याणा अजब सिंह नेगी, चेतराम नेगी, सुरेंद्र नेगी, गुलाब ङ्क्षसह, महावीर ङ्क्षसह, संतन सिंह, मातबर ङ्क्षसह बताते हैं, गांव के 36 परिवारों ने कड़ी मशक्कत कर मकान बनाए । भवन निर्माण सामग्री वो अपनी पीठ पर लादकर गांव तक लेकर आए । 
लेकिन, उनका दर्द किसी ने नहीं समझा । कहा कि हर बार नेताओं से झूठे आश्वासन मिले, लोनिवि साहिया के चक्कर काटकर ग्रामीण थक चुके हैं । इस बार विस चुनाव में ग्रामीण उसी को वोट देंगे, जो गांव तक सड़क बनवाएगा ।
क्षेत्रीय विधायक एवं राज्य के गृह मंत्री प्रीतम सिंह का कहना है कि बोहा में सड़क निर्माण की कार्रवाई गतिमान है । पीएमजीएसवाई के तहत बजट मिलने के बाद जल्द ही सड़क का सर्वे कराकर निर्माण कार्य शुरू कराया जाएगा ।
<br><br><font color="blue"><b>किसी भी प्रकार के विज्ञापन हेतु हमें सम्पर्क करें - 8057061741, hshan888@gmail</b></font>
<br><br><form name="likeform" action="like.php" method="post">
<input type="hidden" name="page" id="page" value="119161">
<input type="button" value="Views:<?php echo $n;?>" style="background:red; color:white;"> <input type="submit" value="Likes:<?php echo $p;?>" style="background:red; color:white;">
</form>
<br>To post comment, it's mandatory to login
<br><font color="red">Leave a comment:</font>
<form name="cmntform" action="cmnt.php" method="post" onSubmit="return validate()">
<input type="hidden" name="page" id="page" value="119161">
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
<a href="https://www.facebook.com/sharer/sharer.php?u=https://www.newsktm.com/119161.php" style="background:blue; color:white; font-size:18px;" target="_blank"><font bgcolor="green">Share on Facebook</font></a></i>
<br><a href="119163.php"><b>Prev<<</b></a>..................................<a href="119162.php"><b>>>Next</b></a><br><br>
<img src="WP_20131225_005.jpg" width="300" height="300"><br>
<font color="red">Mohsin Khan, famous bussinesman & Ex-district<br>president of Congress</font><br><br>
<img src="DSC_1056.jpg" width="300" height="300"><br>
<font color="red">Saddam, student BA 3<sup>rd</sup> year,<br>HNBPG College Khatima</font><br><br>
<img src="20160404_164326.jpg" width="300" height="300"><br>
<font color="red">Zeeshan Miyan<br>owner of Kamal Hosiery-8126542855</font><br><br>
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
</div>
</div>
<footer id="bottom"><a href="index.php"><b>Home|</b></a><a href="profile.php"><b>Make Profile|</b></a><a href="index.php"><b>Search Person</b></a><br>
submit your story by mail at <font color="red"><b>chiefeditor@newsktm.com<br>&#169;</b></font> 2016-17
</footer>
</div>
</body>
</html>