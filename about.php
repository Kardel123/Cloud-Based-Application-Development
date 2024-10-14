<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$title = "About Page";
$header = "About Me";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Font Awesome for icons -->
    <style>
        body {
            background-image: url('assets/home-background.jpg'); /* Your background image */
            background-size: cover; /* Cover the entire viewport */
            background-position: center; /* Center the image */
            height: 100vh; /* Full height of the viewport */
        }

        .main-content {
            margin-left: 260px; /* Adjusted margin for sidebar */
            padding-top: 20px; /* Padding for spacing */
            padding-bottom: 20px; /* Padding for spacing */
            border-radius: 10px; /* Rounded corners */
            color: white; /* Set text color to white for visibility */
        }

        .card-title {
            font-family: 'Poppins', sans-serif; /* Use a modern font similar to Spotify */
            font-size: 1.25rem; /* Adjust size as needed */
            font-weight: bold; /* Make the title bold */
            color: #0E0F13; /* Dark color for card titles */
            margin-bottom: 0.5rem; /* Spacing below the title */
        }

        .card-text {
            font-family: 'Poppins', sans-serif; /* Use Poppins or another modern font */
            color: #333333; /* Darker color for card text for better visibility */
            font-size: 1rem; /* Adjust size as needed */
            line-height: 1.5; /* Increase line height for better readability */
        }

        .text-muted {
            color: rgba(255, 255, 255, 0.7); /* Slightly muted white for small text */
        }
    </style>
</head>
<body class="row">

    <?php include 'menu.php'; ?>

    <div class="main-content col-sm-9">
        <h1><?php echo $header; ?></h1>
        <p>This page contains information about me.</p>

        <!-- Add Name and Section -->
        <p><strong>Name:</strong> <?php echo htmlspecialchars($_SESSION['username']); ?></p> <!-- Display logged-in username -->
        <p><strong>Section:</strong> BSCS-3C</p>

        <!-- Bootstrap Cards Section -->
        <div class="container mt-4">
            <div class="row">
                <!-- Card 1 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="assets/sipalay.jpg" class="card-img-top" alt="sipalay Image"> 
                        <div class="card-body">
                            <h5 class="card-title">I like to Travel</h5>
                            <p class="card-text">I love to travel and explore new places.</p>
                            <p class="card-text"><small class="text-muted">Circa September 2024</small></p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="assets/Battlefield.jpg" class="card-img-top" alt="gaming">
                        <div class="card-body">
                            <h5 class="card-title">I like to play Games</h5>
                            <p class="card-text">Game on picture is Battlefield V.</p>
                            <p class="card-text"><small class="text-muted">A Vought F4U Corsair in my Battlefield V gameplay</small></p>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="assets/Coco Verde.jpg" class="card-img-top" alt="Coffee Image"> 
                        <div class="card-body">
                            <h5 class="card-title">I like Coffee</h5>
                            <p class="card-text">I mostly like Americano, Cappuccino, Latte, and Native coffee.</p>
                            <p class="card-text"><small class="text-muted">Coffee yum yum.</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>
</html>
