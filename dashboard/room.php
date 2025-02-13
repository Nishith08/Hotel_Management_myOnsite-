<?php
session_start(); 
/*Country List page */
include  "../connect.php";
	
	/* if(!isset($_SESSION['yes']))
	{
		//header('Location: index.php');
		return;
	} */

?>
<!DOCTYPE html>

<html lang="en">
   
    <head>
		

        <meta charset="utf-8" />
        <title>Rooms</title>
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
										<h1> Hotel List<span></h1>
										</div>
                                    
									<button  onClick="document.location.href='roomadd.php'">
										Add New 
										
									</button>
									
                                 
                                </div>
								<br>
                                <div>
								
	<table border="1" id="usersTable" style="height:200px;width:900px; text-align:center; ">
        <tr>
            <th>ID</th>
            <th>Room Name</th>
            <th>Availability</th>
            <th>Action</th>
        </tr>
    </table>	
                        </div>
                        </div>
                       
                    </div>
					<br>
					<button  onClick="document.location.href='dashboard.php'">
										Go to Dashboard ?
										
									</button>
					</div>
                   
<script>	
	 $(document).ready(function() {
        function loadUsers() {
            $.ajax({
                url: "fetch_room.php",
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
		  window.updateRoom = function(id) {
            if (confirm("Are you sure you want to Change the Room Status?")) {
                $.ajax({
                    url: "status_update.php",
                    type: "GET",
                    data: { id: id },
                    success: function(response) {
                       console.log(response);
                        location.reload();
                    },
                    error: function(xhr, status, error) {
                        alert("An error occurred: " + error);
                    }
                });
            }
        };
		 window.deleteRoom = function(id) {
            if (confirm("Are you sure you want to delete this user?")) {
                $.ajax({
                    url: "delete_room.php",
                    type: "GET",
                    data: { id: id },
                    success: function(response) {
                       
                        location.reload();
                    },
                    error: function(xhr, status, error) {
                        alert("An error occurred: " + error);
                    }
                });
            }
        };
	 });
</script>						
				
		
    </body>

</html>