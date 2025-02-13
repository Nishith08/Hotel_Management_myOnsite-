<?php  

session_start(); 

	include("../connectp.php");
	
	$par1=$_POST['username'];
	$par2=$_POST['password'];
	
	date_default_timezone_set("Asia/Kolkata");
	$mdate= date('Y-m-d H:i:s');
	$hour=date('H');
	$minute= date('i');
	
	$d1 = $hour + ($minute * 0.01);
	
	if(isset($_POST['submit']))
	{

	
		//$eve = "select * from res_user_master where uname='$par1' and umobile='$par2'";
		$q = $db7->prepare("select * from res_user_master where uname=:p1 and umobile=:p2");
		$q->bindValue(':p1', "$par1");
		$q->bindValue(':p2',  "$par2");
		$q->execute();
		
		if ($q->rowCount() > 0)
		{
			$i=0;
			while($rt = $q->fetch(PDO::FETCH_ASSOC))
			{
				
					$_SESSION['login2'] = "yes";
				
					$_SESSION['umid'] = $rt['umid'];
					$_SESSION['uname'] = $rt['uname'];
					
					$_SESSION['umobile'] = $rt['umobile'];
					
			 
			header('Location: hotel.php');

			}
	   }
	   else
	   {
					
		   
			$_SESSION['msg1'] = "Invalid Userid or Password";
			header('Location: index.php');
		  
		
	   }
	
	}
	else{
		$_SESSION['msg1'] = "Invalid From";
			header('Location: index.php');
	}
	
?>