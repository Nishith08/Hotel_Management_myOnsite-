<?php
session_start(); 
/*Country List page */
include  "../connect.php";
	
	 if(!isset($_SESSION['login2']))
	{
		//header('Location: index.php');
		return;
	} 

?>
<!DOCTYPE html>

<html lang="en">
   
    <head>
		

        <meta charset="utf-8" />
        <title>Hotel</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
       <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

   </head>
	<body>
                <div class="row">
                   <div class="col-md-12 hidden-print">
                        <!-- BEGIN EXAMPLE TABLE PORTLET-->
                        <div>
                            <!-- BEGIN PORTLET-->
                                <div class="portlet-title">
                                    <div class="caption">
										<h1> Hotels List<span></h1>
										</div>
                                    <div class="tools">
									<button  onClick="document.location.href='hoteladd.php'">
										Add New 
										
									</button>
									
                                    </div>
									<br>
                                </div>
	<table border="1" id="usersTable" style="height:200px;width:900px; text-align:center; ">
        <tr>
            <th>ID</th>
            <th>Hotel Name</th>
            <th>Username</th>
            <th>Password </th>
        </tr>
    </table>	
                        </div>
                       
                    </div>
					</div>
                   
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
                    alert("An error occurred: " + error);
                }
            });
        }
        loadUsers();
	 });
</script>						
				
		
    </body>

</html>