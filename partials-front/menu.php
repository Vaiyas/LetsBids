<?php include('config/constants.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bidding Website</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="index.php" title="Logo">
                    <img src="images/Untitled-3.jpg" alt="Logo" class="img-responsive">
                </a>
            </div>
            <?php
            $sel = "select * from tbl_member";
            $Que = mysqli_query($conn, $sel);
            $res = mysqli_fetch_assoc($Que);
            ?>
            <div class="menu text-center">
                <ul>
                    <li>
                        <a href="<?php echo SITEURL; ?>home.php">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>categories.php">Categories</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>events.php">Live Events</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>winners.php">Winner</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>toc.php">Learn To Bid</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>feedback.php">Feedback</a>
                    </li>
                    <span id="pic">
                        <li style="float:right;">
                            <img src="images/usericon.png" style="width:40px; height: 40px;" onclick="toggleMenu()">
                            <span id="name"><?php echo $res['username']; ?></span>
                            <div class="sub-menu-wrap" id="subMenu">
                                <div class="sub-menu">
                                    <div class="user-info">
                                    </div>
                                    <a href="logout.php" class="sub-menu-link">Logout</a>
                                </div>
                            </div>
                        </li>
                    </span>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    <script>
    let subMenu = document.getElementById("subMenu");

    function toggleMenu() {
        subMenu.classList.toggle("open-menu");
    }
    </script>
    <!-- Navbar Section Ends Here -->