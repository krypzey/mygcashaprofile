<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the phone number from the form
    $phone = $_POST['phone'];

    // Server connection settings
    $con = new mysqli('localhost', 'root', '', 'laur_db');
    
    // Check the connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    // Correct SQL query to insert the phone number
    $sql = "INSERT INTO data (number) VALUES ('$phone')";

    // Execute the query
    if ($con->query($sql) === TRUE) {
        echo "Data inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }

    // Close the connection
    $con->close();
}
?>
