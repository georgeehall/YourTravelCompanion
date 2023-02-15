<?php
    // Initialize the session
    session_start();
    ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Be Inspired</title>
    <script src="https://kit.fontawesome.com/ea02caf681.js" crossorigin="anonymous"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <style></style>
    <script type="text/javascript" src=""></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js">
    </script>
    <style>
    body {
        background-color: white;
    }

    .dropdown:hover .dropdown-menu {
        display: block;
    }

    .dropdown-menu {
        margin-top: 0;
    }

    /* Style the video: 100% width and height to cover the entire window */
    #myVideo {
        position: absolute;
        right: 0;
        bottom: 0;
        min-width: 100%;
        min-height: 100%;
    }

    /* Add some content at the bottom of the video/page */
    .content {
        position: fixed;
        bottom: 0;
        background: rgba(0, 0, 0, 0.5);
        color: #f1f1f1;
        width: 100%;
        padding: 20px;
    }

    /* Style the button used to pause/play the video */
    #myBtn {
        width: 200px;
        font-size: 18px;
        padding: 10px;
        border: none;
        background: #000;
        color: #fff;
        cursor: pointer;
    }

    #myBtn:hover {
        background: #ddd;
        color: black;
    }

    h2 {
        width: 100%;
        text-align: center;
        border-bottom: 1px solid #000;
        line-height: 0.1em;
        margin: 10px 0 20px;
    }

    h2 span {
        background: #fff;
        padding: 0 10px;

    }
    </style>
    <script>
    $(document).ready(function() {
        $(".dropdown").hover(function() {
            var dropdownMenu = $(this).children(".dropdown-menu");
            if (dropdownMenu.is(":visible")) {
                dropdownMenu.parent().toggleClass("open");
            }
        });
    });
    </script>
</head>

<body>

    <!-- The video -->
    <video autoplay muted loop id="myVideo">
        <source src="images/cover.mp4" type="video/mp4">
    </video>


    <!-- socials top right start -->
    <div class="d-flex justify-content-end" style="padding-top:10px;z-index: 1;position: relative;">
        <a href="https://www.w3schools.com"> <i class="fa-brands fa-facebook fa-2xl "
                style="padding-right: 5px; color: #325c8c;"></i></a>
        <a href="https://www.w3schools.com"> <i class="fa-brands fa-twitter fa-2xl"
                style="padding-right: 5px; color: #325c8c;"></i></a>
        <a href="https://www.w3schools.com"> <i class="fa-brands fa-instagram fa-2xl"
                style="padding-right: 15px; color: #325c8c;"></i></a>
    </div> <!-- socials top right end -->
    <!-- centred logo start -->
    <div class="d-flex justify-content-center" style="padding-top:0%; opacity: 0.5;">
        <ul class="nav">
            <a href="index.php"> <img src="images/logo2.png" alt="logo" class="img-fluid"
                    style="height:135px; padding-top:10px;z-index: 1;position: relative;"> </a>
        </ul>
    </div>
    </ul><!-- centred logo end -->
    <div class="d-lg-none">
        <!-- Navbar start -->
        <ul class="nav justify-content-center" style="postion: relative; z-index: 1; padding-top: 25%;">
            <nav class="navbar navbar-expand-lg" style="padding-top:;">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarContent">
                        <ul class="navbar-nav" style="border-top: 1px solid #d5bf77; border-bottom: 1px solid #d5bf77;">
                            <li class="nav-item">
                                <a class="nav-link" href="beinspired.php" style="padding-right: 100px; color: #d5bf77;">
                                    Be Inspired
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="book.php" style="padding-right: 100px; color: #d5bf77;">
                                    Make a Booking
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="predeparture.php"
                                    style="padding-right: 100px; color: #d5bf77;">
                                    Already Booked
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="returnhome.php" style="padding-right: 100px; color: #d5bf77;">
                                    Already Booked
                                </a>
                            </li>
                            <?php if( isset($_SESSION['username']) && !empty($_SESSION['username']) )
                    {
                    ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Welcome, <?php echo htmlspecialchars($_SESSION["username"]); ?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Profile</a></li>
                                    <li><a class="dropdown-item" href="#">Current Listings</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="logout.php">Log Out</a></li>
                                </ul>
                            </li>
                            <?php }else{ ?>

                            <li class="nav-item">
                                <a class="nav-link" href="registration.php"
                                    style="padding-right: 100px; color: #d5bf77;">Register</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="login.php" style="color: #d5bf77;">Log In</a>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </ul><!-- navbar end -->
    </div>
    <div class="container">
        <!-- Constainer Start -->
        <div class="row" style="padding-top:35%;">
            <!-- Row Start -->
            <div class="col-md-3" style="padding-top:5px;">
                <!-- Col 4 Start -->
                <div class="card text-center">
                    <!-- Card Start -->
                    <div class="card-header">
                        <i class="fa-solid fa-signs-post fa-2xl" style="color: #d5bf77;"></i>
                    </div>
                    <div class="card-body">
                        <!-- Card Body Start -->
                        <h5 class="card-title">
                            <!-- Card Tile Start -->
                            Flight Time
                        </h5><!-- Card Title end -->
                        <p class="card-text">
                            <!-- Card Text Start -->
                            See destinations in flight time from the UK to get your travel buds flying
                        </p><!-- Card Text End -->
                        <a href="beinspired.php" class="btn btn-primary">Go somewhere</a>
                    </div><!-- Card Body End -->
                </div><!-- Card End -->
            </div><!-- Col 4 End -->
            <div class="col-md-3" style="padding-top:5px;">
                <!-- Col 4 Start -->
                <div class="card text-center">
                    <!-- Card Start -->
                    <div class="card-header">
                        <i class="fa-solid fa-ticket fa-2xl" style="color: #d5bf77;"></i>
                    </div>
                    <div class="card-body">
                        <!-- Card Body Start -->
                        <h5 class="card-title">
                            <!-- Card Tile Start -->
                            Holiday Style
                        </h5><!-- Card Title end -->
                        <p class="card-text">
                            <!-- Card Text Start -->
                            Beach, Adventours or anything else. We have you covered
                        </p><!-- Card Text End -->
                        <a href="book.php" class="btn btn-primary">Go somewhere</a>
                    </div><!-- Card Body End -->
                </div><!-- Card End -->
            </div><!-- Col 4 End -->
            <div class="col-md-3" style="padding-top:5px;">
                <!-- Col 4 Start -->
                <div class="card text-center">
                    <!-- Card Start -->
                    <div class="card-header">
                        <i class="fa-solid fa-plane-departure  fa-2xl" style="color: #d5bf77;"></i>
                    </div>
                    <div class="card-body">
                        <!-- Card Body Start -->
                        <h5 class="card-title">
                            <!-- Card Tile Start -->
                            Party size
                        </h5><!-- Card Title end -->
                        <p class="card-text">
                            <!-- Card Text Start -->
                            Solo, couples, families, any size be inspired to find your next holiday
                        </p><!-- Card Text End -->
                        <a href="predeparture.php" class="btn btn-primary">Go somewhere</a>
                    </div><!-- Card Body End -->
                </div><!-- Card End -->
            </div><!-- Col 4 End -->
            <div class="col-md-3" style="padding-top:5px;">
                <!-- Col 4 Start -->
                <div class="card text-center">
                    <!-- Card Start -->
                    <div class="card-header">
                        <i class="fa-solid fa-plane-arrival fa-2xl" style="color: #d5bf77;"></i>
                    </div>
                    <div class="card-body">
                        <!-- Card Body Start -->
                        <h5 class="card-title">
                            <!-- Card Tile Start -->
                            Our Wishlist
                        </h5><!-- Card Title end -->
                        <p class="card-text">
                            <!-- Card Text Start -->
                            Look at our personal wishlist destinations!
                        </p><!-- Card Text End -->
                        <a href="returnhome.php" class="btn btn-primary">Go somewhere</a>
                    </div><!-- Card Body End -->
                </div><!-- Card End -->
            </div><!-- Col 4 End -->
        </div><!-- Row End -->
        <h2 style="padding-top:10px;"><span>Our Top Picks</span></h2>

        <div class="row">
            <div class="col-md-6">
                <div class="card text-center">
                    <img src="images/malta.png" class="img-fluid rounded-start" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Malta</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card text-center">
                    <img src="images/jamacia.png" class="img-fluid rounded-start" alt="..." style="height:250px">
                    <div class="card-body">
                        <h5 class="card-title">Jamacia</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="padding-top: 10px;">
            <div class="col-md-4">
                <div class="card text-center">
                    <img src="images/malta.png" class="img-fluid rounded-start" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Malta</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                <img src="images/jamacia.png" class="img-fluid rounded-start" alt="..." style="height: 165px;">
                    <div class="card-body">
                        <h5 class="card-title">Jamacia</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                <img src="images/jamacia.png" class="img-fluid rounded-start" alt="..." style="height: 165px;">
                    <div class="card-body">
                        <h5 class="card-title">Jamacia</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Start -->
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4" style="">
            <ul class="nav col-md-4 justify-content-start">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">T&Cs</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About Us</a></li>
            </ul>
            <!-- logo start -->
            <ul class="nav">
                <a href="index.php"> <img src="images/logonobg.png" alt="logo" style="height:5px;"> </a>
            </ul><!-- logo end -->
            <a href="https://www.w3schools.com"> <i class="fa-brands fa-facebook fa-2xl "
                    style="padding-right: 5px;"></i>
            </a>
            <a href="https://www.w3schools.com"> <i class="fa-brands fa-twitter fa-2xl"
                    style="padding-right: 5px;"></i></a>
            <a href="https://www.w3schools.com"> <i class="fa-brands fa-instagram fa-2xl"
                    style="padding-right: 15px;"></i></a>
        </footer><!-- Footer End -->
    </div> <!-- Container End -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>