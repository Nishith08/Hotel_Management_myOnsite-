<!DOCTYPE html>
<html>
<head>
    <title>Create Amenity</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h2>Create Amenity</h2>
    <form id="createForm">
        Name: <input type="text" name="name" required><br>
        <br>
        <input type="submit" value="Create">
    </form>
	<br>
					<button  onClick="document.location.href='dashboard.php'">
										Go to Dashboard ?
										
									</button>

    <script>
    $(document).ready(function() {
        $("#createForm").on("submit", function(event) {
            event.preventDefault();
            $.ajax({
                url: "amenityadd2.php",
                type: "POST",
                data: $(this).serialize(),
                success: function(response) {
                    
                    $("#createForm")[0].reset();
                window.location.href = "room_amenities.php";
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
