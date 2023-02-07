<?php
    // Initialize the session
    session_start();
    ?>
<!doctype html>
<html lang="en">

<head>
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
  <source src="images/testedit.mp4" type="video/mp4">
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
                <a href="index.php"> <img src="images/logo2.png" alt="logo" style="height:135px; padding-top:10px;z-index: 1;position: relative;"> </a>
    </ul>
    </div>
    </ul><!-- centred logo end -->
    <!-- Navbar start -->
    <ul class="nav justify-content-center" style="postion: relative; z-index: 1; padding-top: 25%;">
    
        <nav class="navbar navbar-expand-lg" style="padding-top:;">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarContent">
                    <ul class="navbar-nav" style="border-top: 1px solid black; border-bottom: 1px solid black;">
                        <li class="nav-item">
                            <a class="nav-link" href="alllistings.php"
                                style="padding-right: 100px;">
                                Be Inspired
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="lastmin.php" style="padding-right: 100px;">
                                Make a Booking
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pricing.php" style="padding-right: 100px;">
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
                            <a class="nav-link" href="registration.php" style="padding-right: 100px;">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Log In</a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </nav>
    </ul><!-- navbar end -->
    

    <div class="container"><!-- Constainer Start -->

        <div class="row" style="padding-top:25px;"><!-- Row Start -->
            <div class="col-md-3"><!-- Col 4 Start -->
                <div class="card text-center"><!-- Card Start -->
                <div class="card-header">
                <i class="fa-solid fa-signs-post fa-2xl" style="color: #d5bf77;"></i> 
                 </div>
                    <div class="card-body"><!-- Card Body Start -->
                        <h5 class="card-title"><!-- Card Tile Start -->
                           Be Inspired
                        </h5><!-- Card Title end -->
                        <p class="card-text"><!-- Card Text Start -->
                           Search for your next trip using our detailed destination guides or travel style!
                        </p><!-- Card Text End -->
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div><!-- Card Body End -->
                </div><!-- Card End -->
            </div><!-- Col 4 End -->
            <div class="col-md-3"><!-- Col 4 Start -->
                <div class="card text-center"><!-- Card Start -->
                <div class="card-header">
                <i class="fa-solid fa-ticket fa-2xl" style="color: #d5bf77;"></i> 
                 </div>
                    <div class="card-body"><!-- Card Body Start -->
                        <h5 class="card-title"><!-- Card Tile Start -->
                           Book
                        </h5><!-- Card Title end -->
                        <p class="card-text"><!-- Card Text Start -->
                           Search for your next trip using our detailed destination guides or travel style!
                        </p><!-- Card Text End -->
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div><!-- Card Body End -->
                </div><!-- Card End -->
            </div><!-- Col 4 End -->
            <div class="col-md-3"><!-- Col 4 Start -->
                <div class="card text-center"><!-- Card Start -->
                <div class="card-header">
                <i class="fa-solid fa-plane-departure  fa-2xl" style="color: #d5bf77;"></i> 
                 </div>
                    <div class="card-body"><!-- Card Body Start -->
                        <h5 class="card-title"><!-- Card Tile Start -->
                           Pre Departure
                        </h5><!-- Card Title end -->
                        <p class="card-text"><!-- Card Text Start -->
                           Search for your next trip using our detailed destination guides or travel style!
                        </p><!-- Card Text End -->
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div><!-- Card Body End -->
                </div><!-- Card End -->
            </div><!-- Col 4 End -->
            <div class="col-md-3"><!-- Col 4 Start -->
                <div class="card text-center"><!-- Card Start -->
                <div class="card-header">
                <i class="fa-solid fa-plane-arrival fa-2xl" style="color: #d5bf77;"></i> 
                 </div>
                    <div class="card-body"><!-- Card Body Start -->
                        <h5 class="card-title"><!-- Card Tile Start -->
                           Return Home
                        </h5><!-- Card Title end -->
                        <p class="card-text"><!-- Card Text Start -->
                           Search for your next trip using our detailed destination guides or travel style!
                        </p><!-- Card Text End -->
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div><!-- Card Body End -->
                </div><!-- Card End -->
            </div><!-- Col 4 End -->
        </div><!-- Row End -->

        <!-- Footer Start -->
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top" style="position: relative; z-index: 1;">
            <ul class="nav col-md-4 justify-content-start">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">T&Cs</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About Us</a></li>
            </ul>
            <!-- logo start -->
            <ul class="nav">
                <a href="index.php"> <img src="images/logonobg.png" alt="logo" style="height:75px;"> </a>
            </ul><!-- logo end -->
            <a href="https://www.w3schools.com"> <i class="fa-brands fa-facebook fa-2xl "
                    style="padding-right: 5px;"></i> </a>
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