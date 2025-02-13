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
            <td>" . $row["status"] . "</td>
           
            <td>
                <button onclick='addAmenity(" . $row["roomid"] . ")'>Change</button>
                <button onclick='deleteRoom(" . $row["roomid"] . ")'>Delete</button>
                
            </td>
        </tr>";
    }
} else {
    echo "<tr><td colspan='5'>0 results</td></tr>";
}

$conn->close();
?>
