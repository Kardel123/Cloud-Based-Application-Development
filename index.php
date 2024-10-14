<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$title = "Home Page";
$header = "Welcome to the Home Page, " . htmlspecialchars($_SESSION['username']) . "!"; // Personalized header
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> <!-- Roboto Font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Font Awesome for icons -->
    <style>
        body {
            background-color: #f8f9fa; /* Light background color */
            font-family: 'Roboto', sans-serif; /* Use Roboto for the body */
        }
        
        .main-content {
            margin-left: 260px; /* Adjusted margin for sidebar */
            padding-top: 20px; /* Padding for spacing */
            padding-bottom: 20px; /* Padding for spacing */
            border-radius: 10px; /* Rounded corners */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Subtle shadow effect */
        }

        h1 {
            color: #000; /* Darker color for header */
        }

        .card {
            margin-bottom: 20px; /* Spacing between cards */
            position: relative; /* Position relative for absolute positioning of child elements */
        }

        .card-title {
            color: #000; /* Darker color for card titles */
        }

        .card-text {
            color: #333; /* Darker color for card text */
        }

        .footer-box {
            background-color: #e9ecef; /* Light gray background for footer */
            padding: 10px;
            border-radius: 5px;
            margin-top: 20px; /* Space above footer */
            overflow: hidden; /* Hide overflow for smooth transition */
            position: relative; /* Position relative for absolute positioning of images */
            height: 70px; /* Set a fixed height for the footer box */
        }

        .slideshow-container {
            display: flex;
            animation: slide-left 20s infinite linear; /* Animation for sliding effect */
        }

        @keyframes slide-left {
            from {
                transform: translateX(100%); /* Start off-screen to the right */
            }
            to {
                transform: translateX(-100%); /* End off-screen to the left */
            }
        }

        .clickable-image {
            width: auto; /* Maintain original width to avoid distortion */
            max-width: 50px; /* Set a maximum width to maintain uniformity */
            height: auto; /* Maintain aspect ratio */
            margin-right: 10px; /* Space between images */
        }
    </style>
</head>
<body class="row">

    <?php include 'menu.php'; ?>

    <div class="main-content col-sm-9">
        <h1><?php echo $header; ?></h1>
        <p>This is the home page of my beautiful website. You can access all the features of this website by logging in.</p>

        <!-- Single Paragraph Card Section -->
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">Who am I?</h5>
                            <p class="card-text">
                                I love cars, I am a simple student, hardworking, and my ambitions are to travel abroad, achieve my bucket list, and explore deeper meanings within myself.
                                <br>I am Ed Josue Posa. I am a student at the College of Engineering and Computer Science Studies at the University of Saint La Salle, and I am currently pursuing a Bachelor of Science in Computer Science.
                                <br>I live in Purok Kabugwason, Brgy. Cabug, Bacolod City.
                            </p>
                        </div>

                        <!-- Footer Box with Slideshow -->
                        <div class="footer-box">
                            <div class="slideshow-container">
                                <img src="assets/usls.jpg" alt="USLS Logo" class="clickable-image">
                                <img src="assets/comsci society.jpg" alt="Comp Sci Society" class="clickable-image">
                                <img src="assets/Steam.png" alt="Steam Profile" class="clickable-image">
                                <img src="assets/f1.png" alt="F1 Logo" class="clickable-image">
                                <img src="assets/redbullracing.png" alt="Red Bull Racing Logo" class="clickable-image">
                                <img src="assets/naturesspring.png" alt="Natures Spring Logo" class="clickable-image">
                                <img src="assets/pirelli without bg.png" alt="Pirelli Logo" class="clickable-image">
                                <img src="assets/asus.png" alt="ASUS Logo" class="clickable-image">
                                <img src="assets/BMW.png" alt="BMW Logo" class="clickable-image">
                                <img src="assets/Ford without BG.png" alt="Ford Logo" class="clickable-image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End of container -->

    </div> <!-- End of main-content -->

</body>
</html> 
