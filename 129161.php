<?php
session_start();
?>
<!DOCTYPE HTML>
<html xmlns="http:www.w3.org/1999/xhtml">
<head><title>Uttarakhand News</title>
<meta name="decription" content="A news website which provide news local, national and international level. News about politics, sports, movies etc are available here.">
<meta name="keywords" content="ktm,ktm news,ktmnews,newsktm,news ktm,khatima,khatima news,shahenshah,shaan,hasan,uttarakhand news,udham singh nagar news,rudrapur news,khatima congress,khatima bjp,">
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
	height:9500px;
}
@media(min-width:600px)
{
.content{
	height:8500px;
}
}
@media(min-width:768px)
{
.content{
	height:6000px;
}
}
@media(min-width:1000px)
{
.content{
	height:6000px;
}
}
</style>
</head>
<?php
$n=mt_rand(1,20); 
$dbc=mysqli_connect('localhost','root','','ktmnews');
$query="SELECT * FROM page WHERE name='129161'"; // change for every page  & change it on form action below
	$result=mysqli_query($dbc,$query);
	$row=mysqli_fetch_array($result);
	$n=$n+$row['view'];
	$p=$row['point'];
		$query2="UPDATE page SET view=$n WHERE name='129161'"; // change for every page
			$result2=mysqli_query($dbc,$query2);
			$query3="SELECT fname,lname,email,path FROM comment WHERE name='129161'"; // change for every page
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
<font color="red"><b>जब दो प्यार करने वालों ने दो देशों को हिला के रख दिया</b></font><br>
ये वो प्रेम कहानी है जिसका ज़िक्र सदियों तक रहेगा । हज़ारों लोग इस प्रेम कहानी के खिलाफ हुये तो लाखों लोगों ने समर्थन भी किया ।
 हम बात कर रहें हैं इंडिया की टेनिस स्टार सानिया मिर्ज़ा और पाकिस्तान क्रिकेट टीम के एक्स-कैप्टन शोएब मलिक की लव स्टोरी की ।
 आईये जानते हैं उनकी लव स्टोरी को खुद सानिया की ही जुबानी । सानिया मिर्ज़ा अपनी ऑटोवायोग्राफी <font color="red">"Ace against odds"</font> में लिखती हैं-<br><br>
  <img src="Sania-mirza_260816-101043-600x337.jpg" width="300" height="300"><br><br>
“पता नहीं क्यों मुझे हमेशा लगता था कि मेरी शादी 23 के आस-पास हो जाएगी. मैं पहले से ही बहुत ऑर्थोडॉक्स रही हूं । मुझे लगता था कि शादी हो जाने पर मैं टेनिस खेलना छोड़ दूंगी और 27-28 साल की उम्र तक मेरे बच्चे हो जाएंगे । 
मेरे सब दोस्त आज शादीशुदा और बच्चों वाले हैं । मेरे आस-पास भी सभी का यही ख़्याल था और शायद इसलिए मैंने भी अपने दिमाग़ में ऐसी ही एक टाइमलाइन तैयार कर ली थी । मगर ज़िंदगी हमारी सोच के हिसाब से नहीं चलती ।
 सोहराब से ब्रेकअप के बाद बचपन के ये तक़ाज़े काफ़ी कमज़ोर पड़ गये थे । अपने 23वें बर्थडे के बाद मैंने अपने को टेनिस में बिज़ी कर लिया ।
 मैं ऑस्ट्रेलिया के एक टूर्नामेंट में वापसी करने की कोशिश कर रही थी और होबार्ट के प्यारे से शहर में मेरी ज़िंदगी का एक बहुत ही ड्रामैटिक ट्विस्ट आना था ।
उस शाम मैं, मेरे डैड, और मेरे ट्रेनर लेन ओल्ड वूलस्टोर होटल से थोड़ी ही दूर एक जाने-पहचाने इंडियन रेस्टोरेंट में गये । हम ओल्ड वूलस्टोर में रह रहे थे । साल का पहला ग्रैंड स्लैम थोड़ी ही दूर था ।
 2 दिन में पाकिस्तान ऑस्ट्रेलिया के साथ एक टेस्ट मैच खेलने वाला था और इसलिए हमें उस रेस्टोरेंट में पाकिस्तानी प्लेयर्स को डिनर करते देखने का मौका मिला । थोड़ी देर में पाकिस्तान के कैप्टन रह चुके शोएब मलिक रेस्टोरेंट में घुसे ।
 टेबल ढूंढ़ते हुए वो हमारी तरफ आए । हमारी हाय-हेलो हुई और उन्होंने पापा को आदाब किया ।
मैं थोड़ी सी देर के लिए शोएब से पहले मिल चुकी थी । दरअसल कुछ साल पहले एक जर्नलिस्ट न हमें एक होटल के जिम में इंट्रोड्यूस करवाया था, जब पाकिस्तान इंडिया में सीरीज़ खेलने आया हुआ था ।
 एक और बार जब मैं इंडिया-पाकिस्तान का एक मैच देखने गयी हुई थी तो मैंने उन्हें मोहाली में एक होटल के ब्रेकफास्ट एरिया में देखा था । जब शोएब ने अगले दिन मेरा मैच देखने की इच्छा जताई तो मैंने उनके लिए कुछ टिकेट्स अरेंज करवाईं ।
 वो अपने 2 साथियों के साथ मैच देखने आए भी । <br><br>
 <img src="Sania-during-practise_260816-103632.jpg" width="300" height="300"><br><br>
 मैच के बाद पापा ने उन लोगों को डिनर के लिए अगले दिन उसी इंडियन रेस्टोरेंट में बुलाया, जहां हम पहले मिले थे. शोएब ने कहा, वो आएंगे ।
जब तक हम ऑस्ट्रेलिया में अपने-अपने मैच खेले, टच में रहे । मुझे शोएब के सादे अंदाज़ ने खींचा । वो पाकिस्तान के कैप्टन रह चुकने के बाद भी बहुत हंबल थे ।
 कुछ ही दिनों में हमारी बातचीत लगभग हर मुद्दे पर होने लगी और हमारी खूब पटने भी लगी । लेकिन प्यार होने में अभी कुछ वक़्त था ।
1 महीने बाद मैं दुबई ओपन खेलने जा रही थी और शोएब इंग्लैंड के साथ दुबई में ही हो रही सीरीज़ में पाकिस्तान की कप्तानी कर रहे थे । उन्हें दोबारा कैप्टन बना दिया गया था । शायद ऊपरवाला हमें मिलाने की साज़िश पे साज़िश कर रहा था ।
 शोएब मेरी मां से भी मिले और उनसे भी उनकी खूब पटी । 2 महीने बाद शोएब ने मुझे शादी के लिए प्रपोज़ किया । वो बिल्कुल भी ड्रामेबाज़ नहीं हैं और उनका प्रपोज़ल बहुत सिंपल था । 
 उन्होंने कहा कि उन्हें मुझसे ही शादी करनी थी, चाहे कितना भी वक़्त लगता और वो अपनी मां को अपना फ़ैसला बताने जा रहे थे । मैं खुद भी बहुत स्ट्रेटफॉर्वर्ड हूं, और मुझे उनकी ये साइड बहुत भायी ।
शादी का फ़ैसला लेना ज़्यादा मुश्किल नहीं था । मैं इसे ले के काफ़ी कन्ज़र्वेटिव थी और मुझे शादी के पहले डेट करने की ज़रूरत महसूस नहीं हुई ।
 वैसे भी, हम दोनों पब्लिक की नज़र में रहते थे और अपनी रिलेशनशिप को बहुत टाइम तक छुपा के रखना मुनासिब नहीं था । हालांकि हमने कुछ वक़्त उसे ज़रूर छुपाया और शायद इसलिए जब हम खुलकर सामने आए तो सबको इतना बड़ा शॉक लगा ।
हम दोनों ने अपनी मांओं से बात की । मार्च में शोएब की पूरी फैमिली उनके साथ इंडिया आए और हमारे मेहमान बने । 3 दिन बाद उन्होंने शोएब के लिए मेरा रिश्ता मांगा ।
 मेरे पेरेंट्स ने हां तो कह दी, लेकिन शोएब की नेशनैलिटी को ले के वो थोड़े-से चिंतित थे । मैं भी इस बात से पूरी वाक़िफ़ थी कि हमारे देशों के बीच सीरियस पॉलिटिकल मसला था ।
 लेकिन मैं तो टेनिस कोर्ट पर बड़ी हुई थी, जहां मेरी दोस्ती अलग-अलग धर्म, रेस और बैकग्राउंड के लोगों से हुई थी । इसलिए मेरा नज़रिया इतना बड़ा हो गया था कि मैं आसानी से इन सीमाओं के पार पर्सनल रिलेशनशिप्स बना सकती थी । 
मगर शोएब की मेरे करियर को ले के क्या सोच थी, मेरे लिए जानना ज़रूरी था । उन्हें शादी के बाद मेरे खेलने से कोई ऐतराज़ नहीं था, लेकिन मैंने उनसे उनकी फैमिली से पक्का करने के लिए कहा ।
 उनकी मां इस बारे में बहुत ओपन-माइंडेड थीं, और आज तक उन्हें मुझ पर और मेरे करियर पर उतना ही नाज़ है जितना मेरी अपनी फैमिली को है । शोएब एथलीट्स की फैमिली से है और वो लोग मुझसे जुड़ी हर प्राब्लम को समझ सकते थे ।
हमारी रिलेशनशिप की सबसे अच्छी बात यही है कि एथलीट होने के नाते हमें बहुत ट्रैवल करना पड़ता है, घर से बहुत दिन तक दूर रहना पड़ता है । 
उस ज़िंदगी को हम पहले भी बहुत जी चुके थे और इसलिए लंबे फेज़ेस तक एक दूसरे से दूर रहने के लिए मेंटली तैयार थे । "<br>
 <font color="red"><b>सानिया बताती हैं कि साल 2009 में उनकी रिस्ट सर्जरी हुई । उन्हें घंटों तक पेनकिलर्स के साथ खेलना पड़ता था । ये इंजरी खौफ़नाक़ साबित हो रही थी और उन्हें डर था कि ये उनका करियर ख़तम कर देगी । करियर के तौर पर भी वो स्ट्रगल कर रही थीं ।
 लगातार 4 टूर्नामेंट्स में वो शुरुआती दौर में ही बाहर हो गईं । दर्द इतना बढ़ गया कि उन्हें एक इंडेफिनिट ब्रेक भी लेना पड़ा । उन्हें पता नहीं था कि इसके बाद वो लौटेंगी भी या नहीं ।
 ऊपर से कॉमनवेल्थ गेम्स और एशियन गेम्स भी लगभग सर पर थे । और दूसरी तरफ शोएब भी खेल नहीं रहे थे । शादी करने का सबसे अच्छा मौका यही था । ब्रेक का सबसे अच्छा इस्तेमाल यही था । </b></font><br>
“मैंने अपने आप को शादी प्लान करने में बिज़ी कर लिया । इस बहाने इंजरी की टेंशन से मेरा दिमाग भी हट गया और मैं खुश रहने लगी । बहुत मज़ा आ रहा था ।
 दुबई में सेटल होने का फायदा ये था कि ये इंडिया-पाकिस्तान से ज़्यादा दूर नहीं था । शोएब को बांग्लादेश प्रीमियर लीग में कुछ मैच खेलने थे और फिर इंडिया आना था । 
 हमने डिसाइड किया कि उनके हैदराबाद पहुंचने पर शादी अनॉउंस कर देंगे । मगर आगे क्या कुछ होने वाला था, इसका हमें कोई आइडिया नहीं था । एक दूल्हा-दुल्हन और उनकी फैमिलीज़ जितनी टेंशन झेल सकते हैं, ये उससे कहीं ज़्यादा था ।
शोएब के इंडिया आने तक शादी की न्यूज़ छिपा कर रखना पॉसिबल नहीं हो पाया, मीडिया में हवा पहले ही दौड़ गयी । शोएब हैदराबाद पहुंचे 4 अप्रैल को । 
वो अपने आप को छुपाने की पूरी कोशिश कर रहे थे और डैड और मैं बाहर कार में उनका इंतज़ार कर रहे थे ।
 हम सोच ही रहे थे कि होने वाला ड्रामा कैसे अवॉइड किया जाए, मगर शोएब तो यही भूल गए थे कि उनके बैग पर ‘पाकिस्तान क्रिकेट टीम – शोएब मलिक’ साफ़-साफ़ छपा था ।
 जैसे ही मेरे अंकल ने ये देखा, वो उस हिस्से को छिपाने के लिए बैग पर झपट पड़े. आप अंदाज़ा लगा सकते हैं कि हालात को ले के हम लोग कितने नर्वस और टेंस थे ।
सिचुएशन और भी बिगड़ गई, जब एक औरत ने मेरे होने वाले पति पर इलज़ाम लगाए । दोनों ही तरफ़ की मीडिया ने मुद्दे को शर्मनाक तरीके से उछाला और हमारे रिश्ते को खोलना शुरू कर दिया ।
 इंडिया में तो मीडिया ट्रायल ही शुरू हो गया । हर न्यूज़ चैनल ने ‘परदेसी दूल्हे’ को पकड़-पकड़ के उधेड़ना शुरू कर दिया । टीआरपी की होड़ में मीडिया ये तो भूल ही गया था कि ये मेरा निजी मामला था ।
 मेरे और शोएब के रिश्ते को तोड़ने की भरसक कोशिश होने लगी । 2 हफ्ते तक मीडिया ऐसे ही पगलाता रहा । लगभग 200 रिपोर्टरों ने कैमरे, माइक, फ़ाइलें और पेन समेत हमारे घर के बाहर डेरा जमा लिया ।
 वो घर में आते और बाहर जाते हर मेंबर से ताबड़तोड़ सवाल-जवाब करने लगे । बाहर रोड पर सैटलाइट वैन पार्क कर दी गईं. घर के बाहर बिल्डिंग्स पर कैमरे ऐसे लगा दिए गये थे कि चौबीसों घंटों की हरकतें रिकॉर्ड हो सकती थीं ।
 अगर परदे ज़रा भी हिलते, तो घर के अंदर की हरकतों को ऐसे दिखाया जाता, जैसे पता नहीं क्या कुछ हो रहा था ।
 एक दिन जब एक रिश्तेदार ने मेरे डैड को फ़ोन करके मेरी टी-शर्ट का रंग बताया, तब पता चला कि साथ ही की बिल्डिंग पर लगा कैमरा सीधा हमारे घर के अंदर का हाल बयां कर रहा था ।
 10 दिन तक मैं बाहर नहीं निकल पाई । 1 हफ्ते बाद हमें लगा कि बहुत हुआ, देर रात में हमने आइसक्रीम खाने जाने का रिस्क उठा लिया ।
 मगर हमारा ये वहम, कि रिपोर्टर और मीडिया इस समय कम सक्रिय होगा, जल्द ही ग़लत साबित हो गया । उस समय भी हमारा पीछा किया गया ।
 कार के अंदर तक हमारी प्राइवेसी में दखल दी गई । मीडिया मेरे डैड को तब भी न बख्शती, जब वो जुम्मे की नमाज़ पढ़ने मस्जिद जाते । उनके मना करने के बावजूद 2 फिर भी अंदर गए और माइक्रोफोन ऑन करके उनसे अजीबोगरीब सवाल करने लगे ।
 चारों तरफ़ गंदगी उछाली जा रही थी । कुछ लोगों को तो ये तक लगा कि उनके हाथ कोई असल बड़ी खबर लग गई है और फ़ायदा उठाने के लिए भरसक कोशिश करने लगे ।
 मगर मुझे हैरानी तब हुई जब शहर के कुछ छोटे सोशलाइट्स भी लाइमलाइट में आने के लिए इस सब में शामिल हो गए । बहुत ही भद्दे तरीके से मसालेदार खिचड़ियां पकाई गईं ।
 सिर्फ इसलिए ताकि मेरे होने वाले पति की एक बहुत ही ख़राब इमेज बनाई जा सके । मीडिया के एक सेक्शन ने इस बात पर बवाल उठाने कि कोशिश भी की कि शोएब शादी से पहले से ही हमारे घर में रह रहे थे ।
 ये भी पूछा गया कि क्या इस्लाम में इसकी इजाज़त थी । सवाल बिना किसी सेंसिटिविटी के पूछे जाते थे । फिर एक बार मौलवियों को टीवी पर बैठा कर हमारे साथ रहने पर कमेंट करने को कहा गया ।
 हमारा घर चारमंजिला था, या हम दोनों के परिवार अलग मंजिलों पर रह रहे थे, इसके बारे में सोचना किसी ने ज़रूरी नहीं समझा ।
कलम की ताक़त वाला उसे विवेक से इस्तेमाल करना भूल गया था । लेकिन अब इतनी छीछालेदर मच चुकी थी कि घर के बड़ों ने शोएब का होटल में जा के रहना ज़्यादा ठीक समझा ।
 मगर उन्हें घर के बाहर ले जाना भी बहुत मुसीबत वाला काम था । लेकिन फिर मेरे अंकल ने हिम्मत दिखाई, वो बाहर गए, और फ़ोन पर चिल्ला-चिल्ला कर एक दिखावटी लड़ाई करने लगे ।
 इस पर जर्नलिस्ट्स उनके आस-पास इकठ्ठा होने लगे और शोएब को चुपचाप कार में बिठाकर होटल पहुंचा दिया गया ।
इतना सब होने के बाद भी हमने शादी में खूब मज़ा किया । हालांकि मीडिया के लोग हमारे घर के बाहर पहरे पर थे । अंदर मेरे दोस्त और रिश्तेदार नाच-गाने की खूब तैयारी कर रहे थे ।
 मशहूर टीवी एक्ट्रेस रक्षंदा खान मेरी बहुत अच्छी दोस्त है । दरअसल हम लोग बहुत साल पहले किसी एअरपोर्ट के लाउन्ज पर मिले थे । रक्षंदा के साथ मेरी एक और दोस्त नेहा धूपिया ने भी मेरी शादी पर डांस किया ।
आख़िरकार, 12 अप्रैल 2010 को पाकिस्तान के एक लड़के ने इंडिया की एक लड़की से प्यार की खातिर शादी की । <br><br>
 <img src="Sania-with-her-inlaw_260816-102935.jpg" width="300" height="300"><br><br>
 जब मैं अपनी जिंदगी के सबसे बड़े दिन के लिए तैयार होकर होटल ताज कृष्णा की तरफ़ अपनी पर्सनल कार में बढ़ी, मीडिया की पूरी फ़ौज ने मेरा पीछा किया ।
 ये एक बहुत ही इंटिमेट फंक्शन था, खुदा-ना-खास्ता कोई ग़लत बात हो जाती, इसलिए मुझे पीछे के दरवाज़े से लाया गया । ये भी शायद हिस्ट्री में पहली बार हुआ होगा । मगर एक बार हम सब अंदर थे, तो सब कुछ अच्छे से हो गया ।
 अगले दिन संगीत और फिर रिसेप्शन हुआ ।
ड्रामा खुशियों में कहीं दब गया, और हम अब एक दूसरे के थे ।
 अपने होटल की बालकनी में बैठकर मैंने शोएब से कहा, “लोगों ने तुम्हारे साथ कितना गलत किया है, सोच कर भी डर लगता है कि वो कैसे ऊपरवाले का सामना करेंगे” मैं अपने आंसू रोक रही थी, तभी शोएब ने कहा, “अल्लाह उन्हें माफ़ करे” ।
 उसकी आवाज़ में कोई नफरत नहीं थी । मैं उनकी तरफ मुस्कुराई, मैंने सही इंसान को चुना था ।
 शादी के कुछ महीनों बाद जब हम एक हसीन शाम एंजॉय कर रहे थे । मैंने शोएब को छेड़ा कि क्या होता अगर वो उस रात उस रेस्टोरेंट में आए ही न होते, ‘हम कभी मिले भी ना होते!’ और तब उन्होंने मुझे बताया कि ये बस चांस की बात नहीं थी ।
 दरअसल उनका एक टीममेट उस होटल में पहले से ही था और मुझे वहां देखकर उन्होंने तुरंत शोएब को इत्तिला कर दी । शोएब ने बताया कि पहले वो बाहर नहीं खाने वाले थे लेकिन फिर वो भाग कर रेस्टोरेंट पहुंचे ।
 इस बार उन्हें मेरा नंबर चाहिए था । हम आज भी इस बात को ले के खूब हंसते हैं । " <br>
<font color="red"><b>तो ये थी शोएब-सानिया की प्रेम कहानी जिसे लोग सदियों तक पाकिस्तानी दूल्हा और हिंदुस्तानी दुल्हन के नाम से जानेंगे । 
सारी बातों को नज़रअन्दाज़ करते हुये हमारी के टी एम न्यूज़ डॉट कॉम की टीम इस जोड़ी को सलाम करती है जिसने अपने प्यार में दो देशों की सरहदों को एक कर दिया ।</b></font>
 <br><br><font color="blue"><b>किसी भी प्रकार के विज्ञापन हेतु हमें सम्पर्क करें - 8057061741, hshan888@gmail</b></font>
<br><br><form name="likeform" action="like.php" method="post">
<input type="hidden" name="page" id="page" value="129161">
<input type="button" value="Views:<?php echo $n;?>" style="background:red; color:white;"> <input type="submit" value="Likes:<?php echo $p;?>" style="background:red; color:white;">
</form>
<br>To post comment, it's mandatory to login
<br><font color="red">Leave a comment:</font>
<form name="cmntform" action="cmnt.php" method="post" onSubmit="return validate()">
<input type="hidden" name="page" id="page" value="129161">
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
<br><a href="119164.php"><b>Prev<<</b></a>..................................<a href="129162.php"><b>>>Next</b></a><br><br>
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
<font color="red">Sajid General Store Khatima(Choodi Market)<br>Pro:Sajid Khan, 9897573494</font><br><br>
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