<?php
    // Initialize the session
    session_start();
    ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-JQ4FLMNE0V"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-JQ4FLMNE0V');
</script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Your Travel Companion</title>
    <script src="https://kit.fontawesome.com/ea02caf681.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
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
        <a href="https://www.facebook.com/Your.TravelCompanionltd/"> <i class="fa-brands fa-facebook fa-2xl "
                style="padding-right: 5px; color: #325c8c;"></i></a>
        <a href="https://www.instagram.com/your.travelcompanion/"> <i class="fa-brands fa-instagram fa-2xl"
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
                                <a class="nav-link" href="about.php"
                                    style="padding-right: 100px; color: #d5bf77;">
                                    About Us
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="beinspired.php" style="padding-right: 100px; color: #d5bf77;">
                                    Be Inspired
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="getaquote.php" style="padding-right: 100px; color: #d5bf77;">
                                    Get a Quote
                                </a>
                            </li><!-- 
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
                            <?php } ?> -->
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
            <div class="col-md-4" style="padding-top:5px;">
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
                            About Us
                        </h5><!-- Card Title end -->
                        <p class="card-text">
                            <!-- Card Text Start -->
                         Learn more about the people behind Your Travel Companion
                        </p><!-- Card Text End -->
                        <a href="about.php" class="btn btn-primary">Find out about us</a>
                    </div><!-- Card Body End -->
                </div><!-- Card End -->
            </div><!-- Col 4 End -->
            <div class="col-md-4" style="padding-top:5px;">
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
                            Be Inspired
                        </h5><!-- Card Title end -->
                        <p class="card-text">
                            <!-- Card Text Start -->
                         Ignite your wanderlust and take youself on a adventure of a lifetime.
                        </p><!-- Card Text End -->
                        <a href="beinspired.php" class="btn btn-primary">Get Inspired</a>
                    </div><!-- Card Body End -->
                </div><!-- Card End -->
            </div><!-- Col 4 End -->
            <div class="col-md-4" style="padding-top:5px;">
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
                            Get a Quote
                        </h5><!-- Card Title end -->
                        <p class="card-text">
                            <!-- Card Text Start -->
                            Research done, now get booking your next adventure!
                        </p><!-- Card Text End -->
                        <a href="getaquote.php" class="btn btn-primary">Go somewhere</a>
                    </div><!-- Card Body End -->
                </div><!-- Card End -->
            </div><!--Col 4 End -->
        </div><!-- Row End -->

        <h2 style="padding-top:10px;"><span>Why Use Us</span></h2>
        <div class="row" style="padding-top:5px;">
            <!-- Row Start -->
            <div class="col-md-3">
                <!-- Col 3 Start -->
                <div class="card" style="border: none;">
                    <!-- Card Start -->
                    <div class="card-body">
                        <!-- Card Body Start -->
                        <p class="card-text">
                            <!-- Card Text Start -->
                        <div class="row">
                            <div class="col-md-3">
                                <i class="fa-solid fa-person fa-5x" style="color: black;"></i>
                            </div>
                            <div class="col-md-9">
                                <h5>Personal consultant</h5>
                                You will always speak to the same person
                            </div>
                        </div>
                        </p><!-- Card Text End -->
                    </div><!-- Card Body End -->
                </div><!-- Card End -->
            </div><!-- Col 3 End -->
            <div class="col-md-3">
                <!-- Col 3 Start -->
                <div class="card" style="border: none;">
                    <!-- Card Start -->
                    <div class="card-body">
                        <!-- Card Body Start -->
                        <p class="card-text">
                            <!-- Card Text Start -->
                        <div class="row">
                            <div class="col-md-3">
                                <i class="fa-solid fa-earth-europe fa-4x" style="color: black;"></i>
                            </div>
                            <div class="col-md-9">
                                <h5>Worldwide</h5>
                                No destination is to far, We work gloablly
                            </div>
                        </div>
                        </p><!-- Card Text End -->
                    </div><!-- Card Body End -->
                </div><!-- Card End -->
            </div><!-- Col 3 End -->
            <div class="col-md-3">
                <!-- Col 3 Start -->
                <div class="card" style="border: none;">
                    <!-- Card Start -->
                    <div class="card-body">
                        <!-- Card Body Start -->
                        <p class="card-text">
                            <!-- Card Text Start -->
                        <div class="row">
                            <div class="col-md-3">
                                <i class="fa-solid fa-clock fa-4x" style="color: black;"></i>
                            </div>
                            <div class="col-md-9">
                                <h5>Save Time</h5>
                                Let us do the hard work for you
                            </div>
                        </div>
                        </p><!-- Card Text End -->
                    </div><!-- Card Body End -->
                </div><!-- Card End -->
            </div><!-- Col 3 End -->
            <div class="col-md-3">
                <!-- Col 3 Start -->
                <div class="card" style="border: none;">
                    <!-- Card Start -->
                    <div class="card-body">
                        <!-- Card Body Start -->
                        <p class="card-text">
                            <!-- Card Text Start -->
                        <div class="row">
                            <div class="col-md-3">
                                <img src="images/atol.png" class="img-fluid">
                            </div>
                            <div class="col-md-9">
                                <h5>ATOL</h5>
                                Full protected when booking with us
                            </div>
                        </div>
                        </p><!-- Card Text End -->
                    </div><!-- Card Body End -->
                </div><!-- Card End -->
            </div><!-- Col 3 End -->
        </div><!-- Row End -->
 
   

        <h2 style="padding-top:10px;"><span>The Team</span></h2>
        <div class="row">
            <div class="col-md-6">
            This is us - The Hall Family. With the costs of holidays sky rocketing, we got our Travel Agents Licence at first to try and get better rates for future holidays, however, we unlocked amazing rates we could share with friends & family as well that we want to shout from the rooftops!
<br><br>
George has worked in all aspects of the travel industry for the past 10 years ! From major airlines, travel and touring companies and travel customer experiences. He really is the all knowing and all knowledgeable when it comes to travelling!
<br><br>
Kasey has always been fascinated with travelling and exploring different destinations and finding the weird and wonderful this world has to offer. Kasey is behind all these pretty posts and stories !
<br><br>
PJ, our little tag along ❤️ we love to travel and was told numerous times before starting a family that it would all have to stop - we say NEVER! We want PJ to experience the world with us and have these amazing opportunities as a family
<br><br>
Last but not least, our little nugget (baby no.2 on the way!) we may be crazy... but we have already booked our first family holiday as a 4 for later in the year - watch this space!
            </div>
        <div class="col-md-6">
        <img src="images/us.jpg" class="img-fluid" alt="...">
        </div>
        </div>

        <h2></h2>
        <h3>Holidays for Everyone</h3>
        <div class="row">
            <div class="col-md-4">
                <div class="card" style="border: none;">
                    <div class="card-body">
                        <p class="card-text">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="images/solo.jpg" class="img-fluid rounded" alt="...">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-body">
                                    <h5 class="card-title text-center">Solo Travel</h5>
                                    <p class="card-text">Embark on a journey of self-discovery with solo travel. Explore new places, meet new people, and create unforgettable memories on your own terms</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card" style="border: none;">
                    <div class="card-body">
                        <p class="card-text">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="images/couple.jpg" class="img-fluid rounded" alt="...">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-body">
                                    <h5 class="card-title text-center">Couple Holidays</h5>
                                    <p class="card-text">Relax, rejuvenate and create unforgettable memories together. From romantic getaways to adventure-packed trips, there's something for every couple to enjoy and cherish</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="border: none;">
                    <div class="card-body">
                        <p class="card-text">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="images/family.jpg" class="img-fluid rounded" alt="...">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-body">
                                    <h5 class="card-title text-center">Family Holidays</h5>
                                    <p class="card-text">Create unforgettable memories and strengthen bonds with a fun-filled family holiday. Beaches to cultural adventures, something for every family to enjoy and remember for years to come</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    </p>
                </div>
            </div>
                            </div>
    <!-- Footer Start -->
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4"
        style="">
        <ul class="nav col-md-4 justify-content-start">
            <li class="nav-item"><a href="privacy.php" class="nav-link px-2 text-muted">Privacy Policy</a></li>
            <li class="nav-item"><a href="about.php" class="nav-link px-2 text-muted">About Us</a></li>
        </ul>
        <!-- logo start -->
        <ul class="nav">
            <a href="index.php"> <img src="images/logonobg.png" alt="logo" style="height:5px;"> </a>
        </ul><!-- logo end -->
        <a href="https://www.facebook.com/Your.TravelCompanionltd/"> <i class="fa-brands fa-facebook fa-2xl " style="padding-right: 5px;"></i>
        </a>
        <a href="https://www.instagram.com/your.travelcompanion/"> <i class="fa-brands fa-instagram fa-2xl"
                style="padding-right: 15px;"></i></a>
    </footer><!-- Footer End -->
    </div> <!-- Container End -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>