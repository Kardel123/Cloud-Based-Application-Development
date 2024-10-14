<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Sidebar Styles */
        .sidebar {
            height: 100vh; /* Full height sidebar */
            width: 250px; /* Width of the sidebar */
            position: fixed; /* Fixed position */
            top: 0;
            left: 0;
            background-image: url('assets/verticalbg.jpg'); /* Path to your background image */
            background-size: cover; /* Cover the entire sidebar */
            background-position: bottom center; /* Center the background image */
            padding-top: 20px; /* Padding for sidebar items */
            color: #C1D4D9; /* Light color for text */
        }

        body {
            background-image: url('assets/norway.jpg'); /* Your background image */
            background-size: cover; /* Cover the entire viewport */
            background-position: center; /* Center the image */
            height: 100vh; /* Full height of the viewport */
        }

        .main-content {
            margin-left: 260px; /* Adjusted margin for sidebar */
            padding-top: 20px; /* Padding for spacing */
            padding-bottom: 20px; /* Padding for spacing */
            border-radius: 10px; /* Rounded corners */
            color: white; /* Text color for better visibility */
        }

        .sidebar a {
            padding: 15px 20px; /* Increased padding for better click area */
            text-decoration: none;
            font-size: 17px;
            color: #f2f2f2; /* Light text color */
            display: block; /* Each link takes full width */
            transition: background-color 0.3s ease; /* Smooth background transition */
        }

        .sidebar a:hover {
            background-color: #ddd; /* Light hover effect */
            color: black; /* Dark text on hover */
        }

        .sidebar a.active {
            background-color: #027373; /* Active link color */
            color: white; /* Active link text color */
        }

        .rounded {
            width: 100px; /* Width of the circle */
            height: 100px; /* Height of the circle */
            border-radius: 50%; /* Set to 50% for a perfect circle */
            background-repeat: no-repeat;
            background-size: cover;
            margin: 1vh auto; /* Centered vertically with auto horizontal */
        }

        .profile-image {
            width: 100px; /* Width of the circular image */
            height: 100px; /* Height of the circular image */
            border-radius: 50%; /* Make it circular */
            object-fit: cover; /* Ensure the image covers the circle without distortion */
            margin-bottom: 20px; /* Space below the image */
        }

        .date-container {
            margin-top: auto; /* Push it to the bottom of the sidebar */
            padding: 10px;
            text-align: center; /* Center the date text */
            color: white; /* White text color for visibility */
            font-size: 16px; /* Font size for date */
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <img src="assets/profile.jpg" alt="Profile Picture" class="profile-image"> <!-- Profile image -->
        <a href="index.php">Home</a>
        <a href="skills.php">Skills</a>
        <a href="contact.php">Contact</a>
        <a href="about.php">About</a>
        <a href="logout.php">Logout</a> <!-- Added Logout Link -->

        <!-- Date Display Container -->
        <div class="date-container" id="currentDate"></div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        // Function to display the current date
        function displayCurrentDate() {
            const today = new Date();
            const options = { year: 'numeric', month: 'long', day: 'numeric' };
            const formattedDate = today.toLocaleDateString('en-US', options);
            document.getElementById('currentDate').innerText = formattedDate;
        }

        // Function to set the active link based on the current URL
        function setActiveLink() {
            const currentPath = window.location.pathname.split('/').pop(); // Get current file name
            const links = document.querySelectorAll('.sidebar a'); // Get all sidebar links

            links.forEach(link => {
                if (link.getAttribute('href') === currentPath) {
                    link.classList.add('active'); // Add active class to the link
                } else {
                    link.classList.remove('active'); // Remove active class from others
                }
            });
        }

        // Call functions to display date and set active link
        displayCurrentDate();
        setActiveLink();
    </script>
</body>
</html>
