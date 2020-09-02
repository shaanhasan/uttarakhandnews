<?php 
session_start();
$d=$_POST['dob'];
$gen=$_POST['gender'];
$mob=$_POST['mob'];
$home=$_POST['hometown'];
$city=$_POST['city'];
$occu=$_POST['occu'];
$dob=date("F d, Y",strtotime($d));
if($dob=="")
{ $msg="Please select your date of birth";
	header ("Location: profile.php? msg=".urlencode($msg));
         exit;
}
else if($gen=="")
{ $msg="Please select your gender";
	header ("Location: profile.php? msg=".urlencode($msg));
         exit;
}
else if($mob=="")
{ $msg="Please enter your mobile number";
	header ("Location: profile.php? msg=".urlencode($msg));
         exit;
}
else if($home=="")
{ $msg="Please enter your home town";
	header ("Location: profile.php? msg=".urlencode($msg));
         exit;
}
else if($city=="")
{ $msg="Please enter your current city";
	header ("Location: profile.php? msg=".urlencode($msg));
         exit;
}
else if($occu=="")
{ $msg="Please enter your occupation";
	header ("Location: profile.php? msg=".urlencode($msg));
         exit;
}
else if($_POST['quote']=="")
{ $msg="Please enter your favourite quote";
	header ("Location: profile.php? msg=".urlencode($msg));
         exit;
}
else if($_POST['bio']=="")
{ $msg="Please write something about yourself in bio section";
	header ("Location: profile.php? msg=".urlencode($msg));
         exit;
}
else if($_FILES["pics"]["name"]=="")
	{ $msg="Please select your profile pic";
	header ("Location: profile.php? msg=".urlencode($msg));
         exit;
}
$quote=$_POST['quote'];
$bio=$_POST['bio'];
$id=$_SESSION['uid'];
$dir="profiles/";
$t=gmdate("FdYgisA");
$t2=gmdate("FdYgis");
if($_FILES["pics"]["name"]!="")
{
$file=$dir.basename($_FILES["pics"]["name"]);
$type=pathinfo($file,PATHINFO_EXTENSION);
//check image fake or actual
if(isset($_POST["submit"]))
{
	$check=getimagesize($_FILES["pics"]["tmp_name"]);
	if($check!==false)
	{
		//echo "file is image".
		$check["mime"].".";
	}
	else
	{
		//echo "not image";
		$msg="Something is wrong in your profile pic";
	header ("Location: profile.php? msg=".urlencode($msg));
         exit;
	}
}
//check file size in bytes
if($_FILES["pics"]["size"]>5500000)
{
	$msg="Profile pic is too large, it should be less than 5 MB";
	header ("Location: profile.php? msg=".urlencode($msg));
         exit;
}
// allow certain file formats
if($type!="jpg" && $type!="jpeg" && $type!="png" && $type!="gif")
{
	$msg="Unsupported format of profile pic";
		header ("Location: profile.php? msg=".urlencode($msg));
         exit;
}
	if(move_uploaded_file($_FILES["pics"]["tmp_name"],$file))
	{
		$qtfile=fopen("profiles/".$t.$id.".txt","w");
fwrite($qtfile,$quote);
fclose($qtfile); 
$biofile=fopen("profiles/".$t2.$id.".txt","w");
fwrite($biofile,$bio);
fclose($biofile);
$dbc=mysqli_connect('localhost','root','','ktmnews');
$query="SELECT sn FROM profile WHERE uid=$id";
$result=mysqli_query($dbc,$query);
$num=mysqli_num_rows($result);
if($num!=1)
{   
$query2="INSERT INTO profile(uid,dob,gender,mobile,hometown,currentcity,occu,qtpath,biopath,picpath)".
"VALUES($id,'$dob','$gen','$mob','$home','$city','$occu','profiles/".$t.$id.".txt','profiles/".$t2.$id.".txt','".$file."')";
	mysqli_query($dbc,$query2);
	$query6="SELECT fname,lname FROM reader WHERE sn=$id";
$result6=mysqli_query($dbc,$query6);
$row6=mysqli_fetch_array($result6);
$fname=$row6['fname'];
$lname=$row6['lname'];
	$query3="INSERT INTO namedb(uid,name) VALUES($id,'$fname')";
mysqli_query($dbc,$query3);
$query4="INSERT INTO namedb(uid,name) VALUES($id,'$lname')";
mysqli_query($dbc,$query4);
$query5="INSERT INTO namedb(uid,name) VALUES($id,'$fname $lname')";
mysqli_query($dbc,$query5);
}
else { 	$query8="SELECT qtpath,biopath,picpath FROM profile WHERE uid=$id";
$result8=mysqli_query($dbc,$query8);
$row8=mysqli_fetch_array($result8);
$a=$row8['qtpath'];
$b=$row8['biopath'];
$c=$row8['picpath'];
unlink($a);
unlink($b);
unlink($c);
$qtpath="profiles/".$t.$id.".txt";
 $biopath="profiles/".$t2.$id.".txt";
	$query7="UPDATE profile SET dob='$dob', gender='$gen', mobile='$mob', hometown='$home', currentcity='$city', occu='$occu', qtpath='$qtpath', biopath='$biopath', picpath='$file' WHERE uid=$id"; 
mysqli_query($dbc,$query7);
	}
			mysqli_close($dbc);
				                $msg="Congratulations!!! You have successfully created your profile in Uttarakhand News.com";
		header ("Location: index.php? msg=".urlencode($msg));
         exit;
}
	else 
	{
				$msg="Something is wrong in your profile pic";
	header ("Location: profile.php? msg=".urlencode($msg));
         exit;
	}
   }
?>