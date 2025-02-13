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
<html>
<head>
    <title>Create Hotel</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h2>Create Hotel</h2>
    <form id="createForm">
        Name: <input type="text" name="name" required><br>
        Username: <input type="text" name="username" required><br>
        Password: <input type="text" name="password" required><br>
        <br>
        <input type="submit" value="Create">
    </form>
<br>
					<button  onClick="document.location.href='hotel.php'">
										Go Back ?
										
									</button>
    <script>
    $(document).ready(function() {
        $("#createForm").on("submit", function(event) {
            event.preventDefault();
            $.ajax({
                url: "hoteladd2.php",
                type: "POST",
                data: $(this).serialize(),
                success: function(response) {
                    
                    $("#createForm")[0].reset();
                window.location.href = "hotel.php";
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
