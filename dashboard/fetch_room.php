<?php
session_start();
include "../connect.php";
$branchid = $_SESSION['branchid'];
$sql = "SELECT * FROM res_room_master where branchid=$branchid ";
$result = $conn->query($sql);
//<button onclick='deleteUser(" . $row["branchid"] . ")'>Delete</button>
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>" . $row["roomid"] . "</td>
            <td>" . $row["rname"] . "</td>
            <td>" . $row["status"] . "</td>
           
            <td>
                <button onclick='updateRoom(" . $row["roomid"] . ")'>Change</button>
                <button onclick='deleteRoom(" . $row["roomid"] . ")'>Delete</button>
                
            </td>
        </tr>";
    }
} else {
    echo "<tr><td colspan='5'>0 results</td></tr>";
}

$conn->close();
?>
