<?php
include "../connect.php";

$roomid = $_REQUEST['id'];
$sql2 = "SELECT * FROM res_room_master where roomid = '$roomid'";
$result2 = $conn->query($sql2);

    while($row2 = $result2->fetch_assoc()) {
		$status = $row2["status"];
	}

$status2 = 'Booked';
if($status == 'Booked'){
	$status2 = 'Available';
}


$sql = "Update res_room_master Set status = '$status2' where roomid='$roomid'";

//<button onclick='deleteUser(" . $row["branchid"] . ")'>Delete</button>

    if ($conn->query($sql) === TRUE) {
        echo "Room Availablity Updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


$conn->close();
?>
