<?php
    $host = "localhost";
    $username = "root";
    $password = "Rubi@123";
    $database = "registration";
    $conn = new mysqli($host, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    session_start();
    $userId = $_SESSION['auth_user'];
    // $email = "Hello";

    $sql = "SELECT * FROM users WHERE id='$userId'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();  
        if ($row) {
            $email = $row['email'];
            // $name = $row['username'];
            $created_at = $row['created_at'];
            $updated_at = $row['updated_at'];
            // Access other fields as needed
        }
    }

    $sql = "SELECT * FROM users_details WHERE users_id='$userId'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();  
        if ($row) {
            $contact=$row['contact'];
            $name = $row['username'];
            $gender = $row['gender'];
            $city=$row['city'];
            $courses = $row['course'];
        }
    }

    // Close the database connection
    $conn->close();
?>
