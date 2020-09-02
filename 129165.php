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
	height:5900px;
}
@media(min-width:600px)
{
.content{
	height:5300px;
}
}
@media(min-width:768px)
{
.content{
	height:3300px;
}
}
@media(min-width:1000px)
{
.content{
	height:3300px;
}
}
</style>
</head>
<?php
$n=mt_rand(1,20); 
$dbc=mysqli_connect('localhost','root','','ktmnews');
$query="SELECT * FROM page WHERE name='129165'"; // change for every page  & change it on form action below
	$result=mysqli_query($dbc,$query);
	$row=mysqli_fetch_array($result);
	$n=$n+$row['view'];
	$p=$row['point'];
		$query2="UPDATE page SET view=$n WHERE name='129165'"; // change for every page
			$result2=mysqli_query($dbc,$query2);
			$query3="SELECT fname,lname,email,path FROM comment WHERE name='129165'"; // change for every page
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
12 September, 2016
<center><b>सुप्रभात मित्रो !!!<br>Uttarakhand News.com में आपका स्वागत है</b></center>
<div id="left">
<img src="20151226_170139.jpg" class="img-circle" width="250" height="200">
<br><font color="purple"><b>Shaan Hasan</b>
<br>hshan888@gmail.com</font><br><br>
<font color="red"><b>फिल्‍म रिव्‍यू- स्‍ट्रीट स्‍मार्ट 'फ्रीकी अली' (3 स्‍टार) </b></font><br>
प्रमुख कलाकार- नवाजुद्दीन सिद्दीकी, एमी जैकसन, अरबाज खान <br>
निर्देशक- सोहेल खान<br>
संगीत निर्देशक- साजिद-वाजिद<br> 
अवधि- 125 मिनट<br>
स्टार- तीन<br>
सोहेल खान की ‘फ्रीकी अली’ के नायक अली और एक्टर नवाजुद्दीन सिद्दीकी की कहानी और चरित्र में समानता है। फिल्म का नायक हुनरमंद है। वह छह गेंद पर छह छक्के लगा सकता है तो गोल्फ में भी बॉल को होल में डाल सकता है।
 थोड़ी सी ट्रेनिंग के बाद वह गोल्फ के चैंपियन के मुकाबले में खड़ा हो जाता है। एक्टर नवाजुद्दीन सिद्दीकी हुनरमंद हैं। वे इस फिल्म में बतौर हीरो अपने समकालीनों के साथ खड़े हो गए हैं। नवाज ने पहले भी फिल्मों में लीड रोल किए हैं, 
 लेकिन वे फिल्में मेनस्ट्रीम मसाला फिल्में नहीं थीं। मेनस्ट्रींम की फिल्मों में छोटी-मोटी भूमिकाओं से उन्होंंने पॉपुलर पहचान बना ली है। दर्शक उन्हें पसंद करने लगे हैं। लेखक व निर्देशक सोहेल खान ने उनकी इस पॉपुलैरिटी का इस्तेलमाल किया है। 
 उन्हें लीड रोल दिया है और साथ में अपने भाई अरबाज खान को सपोर्टिंग रोल दिया है।<br>
 <img src="freaky.jpg" width="300" height="300"><br>
‘फ्रीकी अली’ पर अलग से बात की जाए तो यह नवाजुद्दीन सिद्दीकी की भी जीत की कहानी है। स्क्रिप्ट की सीमाओं के बावजूद नवाज अपनी प्रतिभा से फिल्म को रोचक बनाते हैं। उनकी संवाद अदायगी और आकस्मिक अदा दर्शकों को भाती है।
 पर्दे पर उनकी आंखों की शरारत रिझाती है। संयोग से पॉपुलर फिल्मों में उन्हें स्ट्रीट स्मार्ट किरदार मिलते रहे हैं, जिनमें उनकी ये भंगिमाएं प्रभाव पैदा करती हैं। ‘फ्रीकी अली’ पूरी तरह से उन पर निर्भर करती है। 
 थोड़ी देर के लिए सीमा विश्वास सहयोग देती है। आरिफ बसरा किरदार की सादगी और ईमानदारी की वजह से पसंद आते हैं। बाकी कलाकार भरपाई के लिए हैं। न तो उनके किरदारों पर मेहनत की गई है और न ही उनके भाव और अंदाज पर ध्यान दिया गया है।
 अरबाज खान लंबे अनुभवों के बावजूद नवाज के साथ के दृश्यों में घिसटते ही नजर आते हैं। इसका असर नवाज के परफारमेंस पर भी पड़ा है। अगर उन्हेंं सहयोगी कलाकार के रूप में बराबर का जोड़ीदार मिलता तो यह फिल्म कुछ और ऊंचाई हासिल करती।
'फ्रीकी अली' गोल्फ की पृष्ठभूमि पर है। स्ट्रीट स्मार्ट लावारिस अली को हिंदू मां ने पाला है। चडढी बेचने से लेेकर हफ्ता वसूलने तक के छोटे-मोटे धंधों में व्यस्त अली संयोगवश गोल्फ खेलने पर आमदा होता है और अपने हुनर से सफल रहता है।
 ऐसी फिल्मों में विजनरी निर्देशक नायक के खेल में पारंगत होने और फिर अंतिम मुकाबले में उसकी कोशिशों और निश्चय-अनिश्चय के रोमांच से दर्शकों को टस से मस नहीं होने देता। सोहेल खान अली को रच नहीं पाते। सोहेल खान विजनरी डायरेक्टर नहीं हैं।
 उन्होंने प्रीक्लाइमेक्स भी कमजोर रखा है। चूंकि ‘फ्रीकी अली’ हिंदी फिल्मों के स्ट्रक्चर का पालन करती है, इसलिए उसमें प्रचलित तत्व भी मजेदार होने चाहिए थे। <br>
 क्लालइमेक्स के पहले की कव्वाली और अली की हिंदू मां की भगवान से गुहार शुद्ध पच्चीीकारी है। अकेले नवाज के प्रयत्न और प्रतिभा से फिल्म संभल पाती है।
हिंदी फिल्मोंं में इन दिनों स्टार अौर फिल्मों के रेफरेंस से हंसी पैदा करने का चलन बढ़ा है। इस फिल्म में भी आमिर खान, सलमान खान के हवाले से कुछ संवाद रखे गए हैं। 
एक संवाद तो नवाज की फिल्म ‘मांझी’ से ले ली गई है...घमंड तो हम पहाड़ का तोड़ दें। हंसी तो आती है, लेकिन किरदार फिसल जाता है। ‘फ्रीकी अली’ में प्रोडक्शन की भी कमियां हैं। 
सेट और कॉस्ट्यूम में कल्पना और बजट की कटौती से फिल्म का प्रभाव कम हुआ है। यह फिल्म नवाजुद्दी सिद्दीकी के लिए देखी जा सकती है। लेखक-निर्देशक थोड़ा और यत्न-प्रयत्न करते तो यह नवाज की उल्लेसखनीय फिल्म होती।
<br><br><font color="blue"><b>किसी भी प्रकार के विज्ञापन हेतु हमें सम्पर्क करें - 8057061741, hshan888@gmail</b></font>
<br><br><form name="likeform" action="like.php" method="post">
<input type="hidden" name="page" id="page" value="129165">
<input type="button" value="Views:<?php echo $n;?>" style="background:red; color:white;"> <input type="submit" value="Likes:<?php echo $p;?>" style="background:red; color:white;">
</form>
<br>To post comment, it's mandatory to login
<br><font color="red">Leave a comment:</font>
<form name="cmntform" action="cmnt.php" method="post" onSubmit="return validate()">
<input type="hidden" name="page" id="page" value="129165">
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
<br><a href="129164.php"><b>Prev<<</b></a>..................................<a href="149161.php"><b>>>Next</b></a><br><br>
<center><font color="skyblue" size="5px">Sponsered by</font></center>
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
<img src="IMG-20160912-WA0001.jpg" width="300" height="300"><br>
<font color="red">Honey Footwear Khatima, Near-Post Office<br>Pro:Haneef Khan, 9837070363</font><br><br>
</div>
</div>
<footer id="bottom"><a href="index.php"><b>Home|</b></a><a href="profile.php"><b>Make Profile|</b></a><a href="index.php"><b>Search Person</b></a><br>
submit your story by mail at <font color="red"><b>chiefeditor@newsktm.com<br>&#169;</b></font> 2016-17
</footer>
</div>
</body>
</html>