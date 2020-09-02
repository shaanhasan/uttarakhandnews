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
	height:6300px;
}
@media(min-width:600px)
{
.content{
	height:5700px;
}
}
@media(min-width:768px)
{
.content{
	height:3500px;
}
}
@media(min-width:1000px)
{
.content{
	height:3500px;
}
}
</style>
</head>
<?php
$n=mt_rand(1,20); 
$dbc=mysqli_connect('localhost','root','','ktmnews');
$query="SELECT * FROM page WHERE name='149162'"; // change for every page  & change it on form action below
	$result=mysqli_query($dbc,$query);
	$row=mysqli_fetch_array($result);
	$n=$n+$row['view'];
	$p=$row['point'];
		$query2="UPDATE page SET view=$n WHERE name='149162'"; // change for every page
			$result2=mysqli_query($dbc,$query2);
			$query3="SELECT fname,lname,email,path FROM comment WHERE name='149162'"; // change for every page
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
<font color="red"><b>कश्मीर में तैनात एक सिपाही का खुला खत, जो पूरे देश का सिर शर्म से झुका देगा</b></font><br>
<b>नई दिल्ली: </b>मैं पैरामिलिट्री फोर्स में सेवारत हूं, और पिछले चार साल से कश्मीर में तैनात हूं, इसी महीने मेरी नौकरी को दस साल भी पूरे हो गए है, और मुझे करीब 28,000 रुपये तनख्वाह मिलती है, और अगर इस दौरान छुट्टी पर गया तो तनख्वाह भी कट जाती है,
 तो सिर्फ 22,500 रुपये ही मिलेंगे।<br>
मेरा परिवार किराये के मकान में रहता है, जिसके लिये मैं हर महीने उन्हें 5000 रुपये चुकाता हूं, दो बच्चे हैं, जिनकी स्कूल फीस, ट्यूशन और बाकी चीजों में करीब 6 हजार रुपये खर्च हो जाते है, 
घर में राशन और गैस वगैरह पर हर महीने करीब 7 हजार रुपये खर्च होते है। यानि कुल मिलाकर मेरे घर का मोटा-मोटी खर्च 18 हजार रुपये है।
इसके बाद मेरा और परिवार का मोबाइल खर्च करीब 1500 रुपये है, इसके अलावा अगर मैं हर तीन महीने के बाद घर छुट्टी पर लौटता हूं तो दोनों तरफ का किराया और बाकी खर्च जोड़कर करीब 10 हजार रुपये खर्च हो जाते है,
 अगर परिवार का हर सदस्य स्वस्थ्य रहें यानि डॉक्टर का चक्कर नहीं लगता है तो करीब तीन हजार महीने में बच जाते हैं नहीं तो वो भी खत्म। मेरी कुछ बातों पर सभी गौर करें, और छोटे-बड़े सभी इसे शेयर भी करें <br>
मैं कश्मीर में तैनात हूं इस वजह से मेरे घर पर ना होने के कारण मेरे बच्चों को कोई सुरक्षा नहीं मिलती है, मैं उनसे केवल बात कर पाता हूं। मेरी गैर-मौजूदगी में उनके पास ऐसा कोई रोल मॉडल नहीं होता, जो उन्हें अच्छी बातें सिखा सकें, 
हां, अगर आस-पास कोई नशा करने वाला व्यक्ति है तो वो जल्दी ही उनकी नकल करने लग जाते हैं। हमारे परिवार की भी ठीक ढ़ंग से सुरक्षा नहीं हो पाती है, सरे राह, भरे बाजार कोई भी उनसे कुछ भी कहकर चला जाता है।
इसके बाद पुलिस से शिकायत करने जाओ, तो वो कहती है कि परिवार वालों को कहो कि सुरक्षित तरीके से रहे, अगर एफआईआर दर्ज करा दिया तो उल्टा दबंगों और नेताओं का दबाव सहों। इसके साथ ही हमारी संपत्ति भी सुरक्षित नहीं है, 
जिसके आगे या अगल-बगल है, वहीं कब्जा करने लगता है, शिकायत करो तो पता चलता है कि वो किसी नेता का रिश्तेदार है, मामले में कुछ नहीं हो पाएगा, केवल आश्वासन मिलता है, इसके सिवा कुछ नहीं।<br>
साथ ही हमारी जान का भी कुछ पता नहीं, कभी भी जा सकती है। हम भी पढ़ें-लिखे हैं, घर पर रहकर अपना और अपने परिवार का पालन-पोषण अच्छे से कर सकते हैं, आजीविका अच्छे से चला सकते हैं, अपने बच्चों को अच्छी शिक्षा घर में ही दे सकते हैं, 
उन्हें स्कूल छोड़ सकते है, अपनी संपत्ति का रख-रखाव कर सकते है, अपने परिवार के सदस्यों मां, बहन और बीवी की सुरक्षा खुद कर सकते हैं, हमारा शरीर तो पूरा साल चौबीसी घंटे ड्यूटी पर ही रहता है, लेकिन इस घिनौनी दुनिया से इतना डर लगता है
 कि दो-दो दिनों तक नींद ही नहीं आती है।<br>
लोग हमारे लिए सिर्फ बड़ी-बड़ी बातें करते हैं, लेकिन असल में होता क्या है इसका एक ताजा उदाहरण देता हूं, मैं पिछले 10 सालों से नौकरी कर रहा हूं, मेरे घर तक अभी तक ना तो बिजली पहुंची है और न ही पक्की सड़क, उसी ग्राम पंचायत का दूसरा शख्स 
है जिसका साल 2013-14 में सिविल सेवा में चयन हो गया। सरकार ने 3 महीने के भीतर उसके घर तक बिजली और पक्की सड़क बनवा दी, जबकि मैंने संबंधित विभागों से कई बार कहा लेकिन इस दिशा में कुछ भी काम नहीं हुआ।<br>
बताइये हमारी क्या गलती है और हमने किस गरीब का पैसा खाया है, हमको किसी गरीब का पेट काटकर सरकार सैलरी न दे, लेकिन, देशभक्त का चोला पहनाकर हमारे स्वाभिमान और हमारे परिवार को लज्जित भी मत करो।
<br><br><font color="blue"><b>किसी भी प्रकार के विज्ञापन हेतु हमें सम्पर्क करें - 8057061741, hshan888@gmail</b></font>
<br><br><form name="likeform" action="like.php" method="post">
<input type="hidden" name="page" id="page" value="149162">
<input type="button" value="Views:<?php echo $n;?>" style="background:red; color:white;"> <input type="submit" value="Likes:<?php echo $p;?>" style="background:red; color:white;">
</form>
<br>To post comment, it's mandatory to login
<br><font color="red">Leave a comment:</font>
<form name="cmntform" action="cmnt.php" method="post" onSubmit="return validate()">
<input type="hidden" name="page" id="page" value="149162">
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
<a href="https://www.facebook.com/sharer/sharer.php?u=http://www.newsktm.com/149162.php" style="background:blue; color:white; font-size:18px;" target="_blank"><font bgcolor="green">Share on Facebook</font></a></i>
<br><a href="149161.php"><b>Prev<<</b></a>..................................<a href="149163.php"><b>>>Next</b></a><br><br>
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
<font color="red">Rizwan Razaa-9690716856</font><br><br>
</div>
</div>
<footer id="bottom"><a href="index.php"><b>Home|</b></a><a href="profile.php"><b>Make Profile|</b></a><a href="index.php"><b>Search Person</b></a><br>
submit your story by mail at <font color="red"><b>chiefeditor@newsktm.com<br>&#169;</b></font> 2016-17
</footer>
</div>
</body>
</html>