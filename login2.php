<?php
session_start();
?>
<?php 
$email=$_POST['email'];
$pswd=$_POST['pswd'];
$page=$_POST['prepage'];
$dbc=mysqli_connect('localhost','root','','ktmnews');
$query="SELECT sn,fname,lname FROM reader WHERE email='$email' and pswd='$pswd'";
	$result=mysqli_query($dbc,$query);
	$row=mysqli_fetch_array($result);
	if(mysqli_num_rows($result)==1)
	{   $_SESSION['uid']=$row['sn'];
        $_SESSION['fname']=$row['fname'];
		$_SESSION['lname']=$row['lname'];
		$_SESSION['email']=$email;
   $msg="Successfully login! Now, you can leave comment on any post or can make your profile";
	header ("Location: $page? msg=".urlencode($msg));
exit;
	}
else
{   $msg="You are not login correctly, login again!!!";
	header ("Location: $page? msg=".urlencode($msg));
exit;
}
?>