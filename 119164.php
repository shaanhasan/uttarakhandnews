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
	height:5500px;
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
$query="SELECT * FROM page WHERE name='119164'"; // change for every page  & change it on form action below
	$result=mysqli_query($dbc,$query);
	$row=mysqli_fetch_array($result);
	$n=$n+$row['view'];
	$p=$row['point'];
		$query2="UPDATE page SET view=$n WHERE name='119164'"; // change for every page
			$result2=mysqli_query($dbc,$query2);
			$query3="SELECT fname,lname,email,path FROM comment WHERE name='119164'"; // change for every page
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
<font color="red"><b>नैनीताल जिले के जौलासाल जंगल में मिली हथियार बनाने की फैक्ट्री</b></font><br>
<b>हल्द्वानी:</b> माओवादी गतिविधियों के लिहाज से संवेदनशील रहे कुमाऊं में एक बार फिर से माओवादियों की सक्रियता के संकेत मिल रहे हैं। 
 नैनीताल के चोरगलिया से सटे जौलासाल के घने जंगल में 16 किलोमीटर भीतर हथियार बनाने की फैक्ट्री मिलने से हड़कंप मच गया है। जंगल में हथियारबंद लोगों के दिखने की भी खबर है।
 पुलिस, एसओटीएफ और वन विभाग की संयुक्त टीम दो दिन से जंगल में कांबिंग कर रही है। फैक्ट्री के साथ ही खाने-पीने का सामान, टेंट और बर्तन आदि भी बरामद हुए हैं।
 हालांकि संयुक्त टीम के हाथ अब तक कोई भी संदिग्ध नहीं लगा है।<br>
 <img src="hathiyar.jpg" width="300" height="300"><br>
 एक वन गुर्जर ने लगभग डेढ़ दर्जन हथियारबंद लोगों को जौलासाल जंगल में देखा। सभी अत्याधुनिक हथियारों से लैस बताए जा रहे हैं।
 इस पर वन विभाग को सूचित किया गया। पुलिस तक मामला पहुंचा तो डीआइजी कुमाऊं रेंज अजय रौतेला ने तुरंत सीओ लोकजीत सिंह के नेतृत्व में पुलिस, 
 एसओटीएफ, खुफिया समेत वन विभाग की संयुक्त टीम का गठन कर चोरगलिया से लगे जंगलों में कांबिंग के लिए रवाना कर दिया। संयुक्त टीम सड़क से करीब 16 किलोमीटर दूर घने जंगल में पहुंची तो हथियार बनाने की फैक्ट्री मिली।
 पुलिस क्षेत्राधिकारी लोकजीत सिंह ने बताया कि 10 हजार से अधिक ब्लेड-आरी, एक क्विंटल वजनी हथियार बनाने के उपकरण जैसे डाई, चादर, नाल, पाइप, सांचा आदि सामान मिला है। 
 मौके पर टेंट बनाने के लिए तिरपाल, खाने-पीने के बर्तन, राशन भी मिला। पढ़ें-युवती से मोबाइल झपटकर भागा बदमाश, तभी भाई ने... संयुक्त टीमें जंगलों में डेरा डाले रहीं। 
 वहीं, नानकमत्ता के जंगल में हथियारबंद देखे जाने के बाद अलर्ट जारी कर दिया गया है। नेपाल सीमा पर भी सतर्कता बढ़ा दी गई है। 
 जौलासाल रेंज के रेंजर की ओर से अज्ञात लोगों के विरुद्ध आम्र्स एक्ट और वन्य जीव संरक्षण अधिनियम के तहत मुकदमा दर्ज किया गया है। 
 कुमाऊं रेंज के डीआइजी अजय रौतेला का कहना है कि जंगल में जो हथियार बनाने के उपकरण मिले हैं, उनमें जंग लगा होने से उनके पुराने होने का अनुमान है। माओवादी गतिविधियों की फिलहाल पुष्टि नहीं हुई है।
 यह आशंका जताई जा रही है कि शिकारी, लकड़ी तस्कर या अवैध हथियार की तस्करी करने वालों ने ये फैक्ट्री लगाई हो। इसकी जांच की जा रही है।
 <br><br><font color="blue"><b>किसी भी प्रकार के विज्ञापन हेतु हमें सम्पर्क करें - 8057061741, hshan888@gmail</b></font>
<br><br><form name="likeform" action="like.php" method="post">
<input type="hidden" name="page" id="page" value="119164">
<input type="button" value="Views:<?php echo $n;?>" style="background:red; color:white;"> <input type="submit" value="Likes:<?php echo $p;?>" style="background:red; color:white;">
</form>
<br>To post comment, it's mandatory to login
<br><font color="red">Leave a comment:</font>
<form name="cmntform" action="cmnt.php" method="post" onSubmit="return validate()">
<input type="hidden" name="page" id="page" value="119164">
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
<a href="https://www.facebook.com/sharer/sharer.php?u=https://www.ktmnews.com/158161.php" style="background:blue; color:white; font-size:18px;" target="_blank"><font bgcolor="green">Share on Facebook</font></a></i>
<br><a href="119163.php"><b>Prev<<</b></a>..................................<a href="129161.php"><b>>>Next</b></a><br><br>
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