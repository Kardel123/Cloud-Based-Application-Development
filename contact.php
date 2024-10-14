<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$title = "Contact Page";
$header = "Contact Us";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Font Awesome for icons -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet"> <!-- Lato Font -->
    <style>
        body {
            background-color: #f8f9fa; /* Light background color */
        }

        .main-content {
            margin-left: 260px; /* Adjusted margin for sidebar */
            padding-top: 20px; /* Padding for spacing */
            padding-bottom: 20px; /* Padding for spacing */
        }

        .card-title {
            font-family: 'Lato', sans-serif; /* Use Lato for card titles */
            font-size: 1.25rem; /* Adjust size as needed */
            font-weight: bold; /* Make the title bold */
            color: #0A0A0A; /* Darker color for card titles */
            margin-bottom: 0.5rem; /* Spacing below the title */
        }

        .card-text {
            font-family: 'Lato', sans-serif; /* Use Lato for card text */
            color: #111111; /* Even darker color for card text */
            font-size: 1rem; /* Adjust size as needed */
            line-height: 1.5; /* Increase line height for better readability */
        }
    </style>
</head>
<body class="row">

    <?php include 'menu.php'; ?>

    <div class="main-content col-sm-9">
        <h1><?php echo $header; ?></h1>
        <p>This page contains my contact information.</p>

        <!-- Contact Form Section -->
        <div class="container mt-4">
            <h2>Get in Touch</h2>
            <form>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message" rows="4" placeholder="Your message here..." required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>

        <!-- Contact Information Section -->
        <div class="container mt-4">
            <h2>Contact Information</h2>
            <div class="row">
                <!-- Address Card -->
                <div class="col-md-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">Address</h5>
                            <p class="card-text">Purok Kabugwason, Brgy. Cabug <br>Bacolod, Philippines</p>
                        </div>
                    </div>
                </div>

                <!-- Phone Card -->
                <div class="col-md-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">Phone Number</h5>
                            <p class="card-text">09478333842 Smart<br>7030427 Landline</p>
                        </div>
                    </div>
                </div>

                <!-- Email Card -->
                <div class="col-md-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">Gmail</h5>
                            <p class="card-text">jedposa@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Social Media Icons Section -->
            <div class="text-center mt-4">
                <h5>Follow Me @ My Socials</h5>
                <a href="https://web.facebook.com/profile.php?id=100001309858685" target="_blank" rel="noopener noreferrer" class="btn btn-outline-primary mx-2"><i class="fab fa-facebook-f"></i> Facebook</a>
                <a href="https://www.instagram.com/posa_ed/" target="_blank" rel="noopener noreferrer" class="btn btn-outline-info mx-2"><i class="fab fa-instagram"></i> Instagram</a>
                <a href="https://music.apple.com/profile/ed025" target="_blank" rel="noopener noreferrer" class="btn btn-outline-dark mx-2"><i class="fab fa-apple"></i> Apple Music</a>
            </div>

        </div>

    </div>

</body>
</html>
