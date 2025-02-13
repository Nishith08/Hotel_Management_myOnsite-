<!-- insert.php -->
<?php
session_start();
$branchid = $_SESSION['branchid'];
include "../connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    
     $sql = "INSERT INTO res_room_master (rname,status,branchid) VALUES ('$name','Available','$branchid')";
    
    if ($conn->query($sql) === TRUE) {
       
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

?>
