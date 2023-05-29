<?php

include('../config/constants.php');
include('login-check.php');

?>


<html>

<head>
    <title>Bidding Website - Home Page</title>

    <link rel="stylesheet" href="../css/admin.css">
</head>

<body>
    <!-- Menu Section Starts -->
    <div class="menu text-center">
        <div class="wrapper">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="manage-admin.php">Admin</a></li>
                <li><a href="manage-category.php">Category</a></li>
                <li><a href="manage-event.php">Live Events</a></li>
                <li><a href="manage-bid.php">Bids</a></li>
                <!-- <li><a href="/admin/feedback.html">feedback</a></li> -->
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
    <!-- Menu Section Ends -->