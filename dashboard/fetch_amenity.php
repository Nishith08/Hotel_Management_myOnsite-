<?php
include "../connect.php";

$sql = "SELECT * FROM res_room_master";
$result = $conn->query($sql);
//<button onclick='deleteUser(" . $row["branchid"] . ")'>Delete</button>
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>" . $row["roomid"] . "</td>
            <td>" . $row["rname"] . "</td>
			";
			$roomId = $row["roomid"];
$sql4 = "SELECT amenitiesname 
         FROM res_amenities_master 
         WHERE FIND_IN_SET('$roomId', roomid) > 0";
$result4 = $conn->query($sql4);
//<button onclick='deleteUser(" . $row["branchid"] . ")'>Delete</button>
$amenitiesNames = [];
if ($result4->num_rows > 0) {
    while($row4 = $result4->fetch_assoc()) {
        $amenitiesNames[] = $row4["amenitiesname"];
	}
}

echo "<td>" . implode(", ", $amenitiesNames) . "</td>";
			echo"
            
           
            <td>
                <button onclick='addAmenity(" . $row["roomid"] . ")'>Add More</button>
                
            </td>
        </tr>";
    }
} else {
    echo "<tr><td colspan='5'>0 results</td></tr>";
}

$conn->close();
?>
