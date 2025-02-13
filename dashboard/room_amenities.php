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
        <title>Amenity List</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
       <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <style>
        /* Style for the box */
        .form-box {
            width: 300px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
            margin: 0 auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Style for the form elements */
        .form-box input[type="text"],
        .form-box select {
            width: 100%;
            padding: 8px;
            margin: 5px 0 10px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .form-box input[type="submit"] {
			
			width: 50%;
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
		.form-box button {
            width: 50%;
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .form-box input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
   </head>
	<body>
                <div class="row">
                   <div class="col-md-12 hidden-print">
                        <!-- BEGIN EXAMPLE TABLE PORTLET-->
                        <div>
                            <!-- BEGIN PORTLET-->
                                <div class="portlet-title">
                                    <div class="caption">
										<h1> Amenity List<span></h1>
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
            <th>Amenities Given</th>
            <th>Action</th>
        </tr>
    </table>	
                        </div>
                        </div>
                       
                    </div>
					<br>
					<div class="form-box">
					 <form id="editForm">
        <input type="text" name="id" id="userId">
        Room: <input type="text" name="name" id="userName" readonly>
        <br>
		<br>
       Amenity
                                                           
                                                                    <select class="form-control select2" name="amenity[]" multiple >
																	
																	<?php
																	$eq="Select * from res_amenities_master";
																	$re=mysqli_query($conn,$eq);
																	if(mysqli_num_rows($re) > 0)
																	{

																			while($rt= mysqli_fetch_assoc($re))
																	{
																	$amenitiesid=$rt['amenitiesid'];
																	$amenitiesname=$rt['amenitiesname'];
																	
																	echo "<option value='$amenitiesid'>$amenitiesname</option>";
																	}  
																	}						
																	?>       
																</select>
																
                                                       
	 
        <input type="submit" value="Update">
		<button  onClick="document.location.href='room_amenities.php'">
										Cancel
										
									</button>
    </form>
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
                url: "fetch_amenity.php",
                type: "GET",
                success: function(data) {
                    $("#usersTable").append(data);
                },
                error: function(xhr, status, error) {
                    alert("An error occurred: " + error);
                }
            });
        }
		$(".form-box").hide();
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
		 window.addAmenity = function(id) {
            $.ajax({
                url: "get_aemenity.php",
                type: "GET",
                data: { id: id },
                success: function(data) {
                    try {
                        console.log("Received data: " + data); // Add this line for debugging
                        var user = JSON.parse(data);
                        $("#userId").val(user.roomid);
                        $("#userName").val(user.rname);
                        $(".form-box").show();
                        //$("#").hide();
                    } catch (e) {
                        alert("Failed to parse user data: " + e);
                    }
                },
                error: function(xhr, status, error) {
                    alert("An error occurred: " + error);
                }
            });
        };
		$("#editForm").on("submit", function(event) {
            event.preventDefault();
            $.ajax({
                url: "update_a.php",
                type: "POST",
                data: $(this).serialize(),
                success: function(response) {
                    //alert(response);
                    location.reload();
                },
                error: function(xhr, status, error) {
                    alert("An error occurred: " + error);
                }
            });
        });
	 });
</script>						
				
		
    </body>

</html>