<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$title = "Skills Page";
$header = "My Skills";
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
            font-family: 'Poppins', sans-serif; /* Use Poppins for card titles */
            font-size: 1.25rem; /* Adjust size as needed */
            font-weight: bold; /* Make the title bold */
            color: #0E0F13; /* Dark color for card titles */
            margin-bottom: 0.5rem; /* Spacing below the title */
        }

        .card-text {
            font-family: 'Lato', sans-serif; /* Use Lato for card text */
            color: #222222; /* Darker color for card text */
            font-size: 1rem; /* Adjust size as needed */
            line-height: 1.5; /* Increase line height for better readability */
        }
    </style>
</head>
<body class="row">

    <?php include 'menu.php'; ?>

    <div class="main-content col-sm-9">
        <h1><?php echo $header; ?></h1>
        <p>This page showcases my skills and expertise.</p>

        <!-- Skills Section -->
        <div class="container mt-4">
            <div class="row">
                <!-- JavaScript Card -->
                <div class="col-md-4">
                    <div class="card text-center">
                        <img src="assets/JS.png" class="card-img-top" alt="JavaScript" style="height: 150px; object-fit: contain;"> 
                        <div class="card-body">
                            <h5 class="card-title">JavaScript</h5>
                            <p class="card-text">Experienced in building interactive web applications using JavaScript.</p>
                        </div>
                    </div>
                </div>

                <!-- C++ Card -->
                <div class="col-md-4">
                    <div class="card text-center">
                        <img src="assets/C++.png" class="card-img-top" alt="C++" style="height: 150px; object-fit: cover;"> 
                        <div class="card-body">
                            <h5 class="card-title">C++</h5>
                            <p class="card-text">Proficient in C++ for systems programming and performance-critical applications.</p>
                        </div>
                    </div>
                </div>

                <!-- Python Card -->
                <div class="col-md-4">
                    <div class="card text-center">
                        <img src="assets/Python.jpg" class="card-img-top" alt="Python" style="height: 150px; object-fit: cover;"> 
                        <div class="card-body">
                            <h5 class="card-title">Python</h5>
                            <p class="card-text">Skilled in Python for data analysis and machine learning projects.</p>
                        </div>
                    </div>
                </div>

                <!-- HTML Card -->
                <div class="col-md-4 mt-4">
                    <div class="card text-center">
                        <img src="assets/HTML.jpg" class="card-img-top" alt="Java" style="height: 150px; object-fit: cover;"> 
                        <div class="card-body">
                            <h5 class="card-title">HTML</h5>
                            <p class="card-text">Basic HTML Knowledge & Skills for web development.</p>
                        </div>
                    </div>
                </div>

                <!-- MYSQL Card -->
                <div class="col-md-4 mt-4">
                    <div class="card text-center">
                        <img src="assets/mysql.png" class="card-img-top" alt="PHP" style="height: 150px; object-fit: cover;"> 
                        <div class="card-body">
                            <h5 class="card-title">MYSQL</h5>
                            <p class="card-text">Proficient in PHP for server-side web development.</p>
                        </div>
                    </div>
                </div>

                <!-- More to Come Card -->
                <div class="col-md-4 mt-4">
                    <div class="card text-center">
                        <img src="assets/questionmark.jpg" class="card-img-top" alt="HTML/CSS" style="height: 150px; object-fit: fill;"> 
                        <div class="card-body">
                            <h5 class="card-title">More to Come</h5>
                            <p class="card-text">More skills will be added soon.</p>
                        </div>
                    </div>
                </div>

            </div> <!-- End of row -->
        </div> <!-- End of container -->

    </div> <!-- End of main-content -->

</body>
</html>
