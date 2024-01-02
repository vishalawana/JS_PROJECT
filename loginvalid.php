<?php
    session_start();
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    // Connect to the database
    $host = "localhost";
    $username = "root";
    $password = "Rubi@123";
    $database = "registration";
    $conn = new mysqli($host, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    echo "Hello There";

    if(isset($_POST['login'])){
        // Get values from the login form
        $email = $password2 = "";
        $email = $_POST['email'];
        $password2 = $_POST['password'];

        // Check if the user exists
        $sql = "SELECT ID, password FROM users WHERE email='$email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            // Verify the password
            if (password_verify($password2, $row['password'])) {
                // Password is correct
                $_SESSION["auth_user"] = $row['ID'];
                header("Location: Dashboard.php");
                exit;
            } else {
                // Incorrect credentials
                echo "<script>alert('Login failed. Incorrect credentials.');</script>";
                exit;
            }
        } else {
            // User doesn't exist
            echo "<script>alert('User not found.');</script>";
            exit;
        }
    }

    // Close the database connection
    $conn->close();
?>
