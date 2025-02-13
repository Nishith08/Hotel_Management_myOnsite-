<?php
session_start(); 
/*Country List page */
include  "../connect.php";
	$branchid = $_SESSION['branchid'];
	 if(!isset($_SESSION['login']))
	{
		header('Location: ../index.php');
		return;
	} 
	$eve = "select * from res_branch_master where branchid='$branchid'";
		$re = mysqli_query($conn,$eve);
		if (mysqli_num_rows($re) > 0)
		{
			$i=0;
			while($rt = mysqli_fetch_assoc($re))
			{
				
				
					$bname = $rt['bname'];
			}
		}
?>
<!DOCTYPE html>

<html lang="en">
   
    <head>
		

        <meta charset="utf-8" />
        <title>Dashboard</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
       <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

   </head>
	<body>
                <div class="row">
                   
                            <!-- BEGIN PORTLET-->
                                <div class="portlet-title">
                                  
										<h2> Welcome To <?php echo $bname; ?> </h2>
										</div>
					</div>
                                    
									<br>
									<button  onClick="document.location.href='room.php'">
										Rooms Page
										
									</button>
									
                                  <br>
                                  <br>
									<button  onClick="document.location.href='room_amenities.php'">
										Amenities Page
										
									</button>
									
                                  <br>
                                  <br>
									<button  onClick="document.location.href='room_rates.php'">
										Rate Management
										
									</button>
									
                                  
                       
             
					
                   
<script>	
	 $(document).ready(function() {
        function loadUsers() {
            $.ajax({
                url: "fetch.php",
                type: "GET",
                success: function(data) {
                    $("#usersTable").append(data);
                },
                error: function(xhr, status, error) {
                   // alert("An error occurred: " + error);
                }
            });
        }
        loadUsers();
	 });
</script>						
				
		
    </body>

</html>