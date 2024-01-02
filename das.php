<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-
scale=1.0">
    <title>Dashboard</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" 
href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.
min.css">
</head>
<body>
        <?php 
            session_start();
            // echo $_SESSION['auth_user'] ;
            
            // if(isset($_SESSION['auth_user'])) {
            //      header("Location:/PhpProject/Dashboard/dashboard.php");
            // };
        ?>
        <div class="container mt-5">
        <h2>User Dashboard</h2>
        <form action="<?php include 'Dashconfig.php'?>" method="post">
        <table class='table'>
                    <thead>
                        <tr>
                            <th>Email</th>
                            <th>Username</th>
                            <th>Gender</th>
                            <th>City</th>
                            <th>Courses</th>
                            <th>Contact</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>" <?php echo $email;?>"</td>
                            <td>" <?php echo $name;?> "</td>
                            <td>" <?php echo $gender;?>"</td>
                            <td>" <?php echo $city;?>"</td>
                            <td>" <?php echo $courses;?>"</td>
                            <td>" <?php echo $contact;?> "</td>
                            <td>" <?php echo $created_at;?>"</td>
                            <td>" <?php echo $updated_at;?>"</td>
                        </tr>
                    </tbody>
        </table>
    </div>
</body>
                
