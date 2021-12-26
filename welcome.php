<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ 
            font: 14px sans-serif; 
            text-align: center; 
            background: url("https://wallpaperstock.net/old-office-wallpapers_22279_1920x1200.jpg");
            background-size: cover;
            background-attachment: fixed;
        }
    </style>
</head>
<body>
    <div>
    <h1 class="my-5, text-white">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    <p>
        <a href="logout.php" class="btn btn-danger ml-3, align-baseline" style="position:absolute; top:0; right:0;">Sign Out of Your Account</a>
        <a href="booksTable.php" class="btn btn-danger ml-3, align-baseline">Books Table</a>
    </p>
    </div>
</body>
</html>
