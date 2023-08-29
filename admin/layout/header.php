<?php

$app = new App;
$app->startingSession();

define("AdminURL", "http://localhost/jojo-place/admin");


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo AdminURL; ?>/styles/style.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>

<body>
    <div id="wrapper">
        <nav class="navbar header-top fixed-top navbar-expand-lg  navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="<?php echo AdminURL; ?>">LOGO</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarText">
                    <?php if (isset($_SESSION['email'])) : ?>
                        <ul class="navbar-nav side-nav">
                            <li class="nav-item">
                                <a class="nav-link" style="margin-left: 20px;" href="<?php echo AdminURL; ?>">Home
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo AdminURL; ?>/admins/admins.php" style="margin-left: 20px;">Admins</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo AdminURL; ?>/orders-admins/show-orders.php" style="margin-left: 20px;">Orders</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo AdminURL; ?>/foods-admins/show-foods.php" style="margin-left: 20px;">Foods</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo AdminURL; ?>/bookings-admins/show-bookings.php" style="margin-left: 20px;">Bookings</a>
                            </li>
                        </ul>
                    <?php endif; ?>
                    <ul class="navbar-nav ml-md-auto d-md-flex">
                        <?php if (!isset($_SESSION['email'])) : ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo AdminURL; ?>/admins/login-admins.php">login
                                </a>
                            </li>
                        <?php else : ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo AdminURL; ?>">Home
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link  dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <?php echo $_SESSION['email']; ?>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo AdminURL; ?>/admins/logout.php">Logout</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>