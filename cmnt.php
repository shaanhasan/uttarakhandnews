<?php
session_start();
?>
<?php
$page=$_POST['page'];
if(($_SESSION['fname']=="") || ($_SESSION['lname']=="") || ($_SESSION['email']==""))
{
  $msg="Please, login before comment!!!";
	header ("Location: $page.php? msg=".urlencode($msg));
         exit;
}
else
{		 $fname=$_SESSION['fname'];
$lname=$_SESSION['lname'];
$email=$_SESSION['email'];
$t=gmdate("FdYgisA");
$txt=$_POST['cmnt'];
$myfile=fopen("comments/".$page.$t.".txt","w"); 
fwrite($myfile,$txt);
fclose($myfile); 
$dbc=mysqli_connect('localhost','root','','ktmnews');   
$query="INSERT INTO comment(name,path,fname,lname,email)".
"VALUES('$page','comments/".$page.$t.".txt','$fname','$lname','$email')";  
	$result=mysqli_query($dbc,$query);
mysqli_close($dbc);
header ("Location: $page.php");  
         exit;
}
?>