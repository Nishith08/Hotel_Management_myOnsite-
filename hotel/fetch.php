<?php
include "../connect.php";

$sql = "SELECT * FROM res_branch_master";
$result = $conn->query($sql);
//<button onclick='deleteUser(" . $row["branchid"] . ")'>Delete</button>
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>" . $row["branchid"] . "</td>
            <td>" . $row["bname"] . "</td>
            <td>" . $row["username"] . "</td>
            <td>" . $row["password"] . "</td>
           
            
        </tr>";
    }
} else {
    echo "<tr><td colspan='5'>0 results</td></tr>";
}

$conn->close();
?>
