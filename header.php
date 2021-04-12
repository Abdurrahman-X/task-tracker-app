<?php
    require "controllers/auth.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Tracker  </title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
</head>
<body>
    <div class="parent">
        <div class="app-header">
            <div class="weather">

            </div>
            <div class="logo"> <a href="dashboard.php"> <img src="images/list.png" alt="Logo Icon"> <span>Task Tracker</span> </a> </div>
            <div class="app-nav">
                <ul>
                    <?php if ( isset($_SESSION['id']) ) : ?>
                    <li class="nav-item">
                        <a class="nav-link active" href="dashboard.php">Add Task</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="portfolio-items.php">View All Tasks</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="dashboard.php?logout=1">Logout</a>
                        </li>
                        <?php else : ?>
                        <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="register.php">Register</a>
                    </li>
                    <?php endif ; ?>
                </ul>
            </div>
        </div>