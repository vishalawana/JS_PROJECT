<?php
   

    session_start();

 
    if (!empty($_SESSION['auth_user'])) {
        
        $_SESSION = array();

        session_destroy();

        
        header("Location: login.php"); 
        exit;
    } else {
        
        echo "User is not logged in.";
    }
?>
