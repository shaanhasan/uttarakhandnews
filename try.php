<?php 
$to="8057061741@vtext.com";
$subject="HRK Institute of Online Education";
$body="Dear your password is ";
$headers="From: HRK Institute of Online Education <hrkfounder@hrkonlineedu.com>";
?>
<?php 
if(mail($to,$subject,$body,$headers))
{
 echo 'We have sent your password to your email account......<br>'.
'Check your email then come back to login again......<br>It may take several minutes, please have patience.....';
}
else
	echo 'Something is going wrong during sending email to you.';
?>
