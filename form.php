<?php
session_start();

// Check if the session is already set
if (isset($_SESSION['username'])) {
    header("Location: index.php"); // Redirect to home if already logged in
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Save the username in the session
    $_SESSION['username'] = htmlspecialchars($_POST['username']);
    header("Location: index.php"); // Redirect to the home page
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<body class="d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="container">
        <h2>Please Enter Your Username</h2>
        <form method="post" action="">
            <div class="mb-3">
                <input type="text" name="username" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
