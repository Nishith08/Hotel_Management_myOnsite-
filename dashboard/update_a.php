<?php
include '../connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id']; // New room ID to be added
    $amenities = $_POST['amenity']; // Array of selected amenities

    // Loop through each selected amenity
    foreach ($amenities as $amenity) {
        if ($amenity != 0) { // Skip the "Select" option
            // Step 1: Fetch the existing roomid values
            $fetchSql = "SELECT roomid FROM res_amenities_master WHERE amenitiesid = $amenity";
            $result = $conn->query($fetchSql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $existingRoomIds = $row['roomid']; // Existing room IDs as a string

                // Step 2: Append the new ID to the existing array
                if (!empty($existingRoomIds)) {
                    $existingRoomIdsArray = explode(',', $existingRoomIds); // Convert string to array
                    if (!in_array($id, $existingRoomIdsArray)) { // Avoid duplicates
                        $existingRoomIdsArray[] = $id; // Append new ID
                        $updatedRoomIds = implode(',', $existingRoomIdsArray); // Convert array back to string
                    } else {
                        $updatedRoomIds = $existingRoomIds; // No change if ID already exists
                    }
                } else {
                    $updatedRoomIds = $id; // If no existing IDs, just use the new ID
                }

                // Step 3: Update the roomid field with the new combined array
                $updateSql = "UPDATE res_amenities_master SET roomid = '$updatedRoomIds' WHERE amenitiesid = $amenity";
                if ($conn->query($updateSql) !== TRUE) {
                    echo "Error: " . $updateSql . "<br>" . $conn->error;
                }
            } else {
                echo "Error: Amenity not found.";
            }
        }
    }

    $conn->close();
}
?>