	<?php
	$page=$_POST['page'];
	$dbc=mysqli_connect('localhost','root','','ktmnews');
$query="SELECT point FROM page WHERE name='$page'"; 
	$result=mysqli_query($dbc,$query);
	$row=mysqli_fetch_array($result);
	$n=$row['point']+1;
		$query2="UPDATE page SET point=$n WHERE name='$page'"; 
			$result2=mysqli_query($dbc,$query2);
	mysqli_close($dbc);	
			header ("Location: $page.php");
         exit;	
	?>