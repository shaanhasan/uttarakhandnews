<?php 
$email=$_POST['email'];
$page=$_POST['prepage'];
$dbc=mysqli_connect('localhost','root','','ktmnews');
$query3="SELECT sn FROM reader WHERE email='$email'";
$result3=mysqli_query($dbc,$query3);
$num=mysqli_num_rows($result3);
if($num!=1)
{   
$query="INSERT INTO reader(fname,lname,email,pswd)".
"VALUES('".$_POST['fname']."','".$_POST['lname']."','".$_POST['email']."','".$_POST['pswd']."')";
	$result=mysqli_query($dbc,$query);
		mysqli_close($dbc);
		$msg="You have successfully signed up, you can login now";
		header ("Location: $page? msg=".urlencode($msg));
         exit;
}
else
{     		mysqli_close($dbc);
$msg="Sorry!!! This email ID is already registered";
			header ("Location: sign.php? msg=".urlencode($msg));
         exit;
}
?>