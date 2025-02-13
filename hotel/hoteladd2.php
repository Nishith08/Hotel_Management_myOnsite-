<!-- insert.php -->
<?php
include "../connect.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    
     $sql = "INSERT INTO res_branch_master (bname,username,password) VALUES ('$name','$username','$password')";
    
    if ($conn->query($sql) === TRUE) {
       
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

?>
