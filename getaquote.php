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
    <title>Get a Quote</title>
    <script src="https://kit.fontawesome.com/ea02caf681.js" crossorigin="anonymous"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
                                Get Inspired
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="getaquote.php" style="padding-right: 100px; color: #d5bf77;">
                                    Get a Quote
                                </a>
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
                            Flight Only
                        </h5><!-- Card Title end -->
                        <p class="card-text">
                            <!-- Card Text Start -->
                            Explore the world with ease - book your flight only with us and let your next adventure take
                            flight.
                        </p><!-- Card Text End -->
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target=".bd-example-modal-lg">Get Flight Only Quote</button>
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
                            Hotel Only
                        </h5><!-- Card Title end -->
                        <p class="card-text">
                            <!-- Card Text Start -->
                            Relax in comfort and style - book your hotel only with us and make your stay a memorable one
                        </p><!-- Card Text End -->
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target=".bd-example-modal-lg2">Get Hotel Only Quote</button>
                    </div><!-- Card Body End -->
                </div><!-- Card End -->
            </div><!-- Col 4 End -->
            <div class="col-md-4" style="padding-top:5px;">
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
                            Flight and Hotel
                        </h5><!-- Card Title end -->
                        <p class="card-text">
                            <!-- Card Text Start -->
                            Fly and stay with ease - book your air and hotel with us for the perfect travel experience
                        </p><!-- Card Text End -->
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target=".bd-example-modal-lg3">Get Flight & Hotel Quote</button>
                    </div><!-- Card Body End -->
                </div><!-- Card End -->
            </div><!-- Col 4 End -->
        </div><!-- Row End -->
   <!--      <h2 style="padding-top:20px;"><span>Latest Offers</span></h2>

        <div class="row">
            <div class="col-md-6">
                <div class="card text-center">
                    <img src="images/maldives.jpg" class="img-fluid rounded-start" alt="..." style="height: 300px;">
                    <div class="card-body">
                        <h5 class="card-title">Maldives</h5>
                        <p class="card-text">Step into a paradise of crystal-clear waters and pristine beaches in the
                            Maldives, where luxurious overwater bungalows and vibrant marine life await.</p>
                        <a href="#" class="link-primary" style="display: flex;justify-content: end;">Read More</a>

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card text-center">
                    <img src="images/mexico.jpg" class="img-fluid rounded-start" alt="..." style="height: 300px;">
                    <div class="card-body">
                        <h5 class="card-title">Mexico</h5>
                        <p class="card-text">Experience the colorful culture, ancient ruins, and mouth-watering cuisine
                            of Mexico, where every corner is a fiesta for the senses</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div> -->


        <!-- Flight Only -->
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Flight Quote</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <form method="post" action="insertflightquote.php">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone number</label>
                                <input type="tel" class="form-control" id="phone" name="phone" required>
                            </div>
                            <div class="mb-3">
                                <label for="destination" class="form-label">Destination</label>
                                <input type="text" class="form-control" id="destination" name="destination" required>
                            </div>
                            <div class="mb-3">
                                <label for="outbound_date" class="form-label">Outbound date</label>
                                <input type="date" class="form-control" id="outbound_date" name="outbound_date" required>
                            </div>
                            <div class="mb-3">
                                <label for="return_date" class="form-label">Return date</label>
                                <input type="date" class="form-control" id="return_date" name="return_date" required>
                            </div>
                            <div class="mb-3">
                                <label for="travel_class" class="form-label">Travel Class</label>
                                <select class="form-select" id="travel_class" name="travel_class" required>
                                    <option value="">Select travel class...</option>
                                    <option value="economy">Economy</option>
                                    <option value="premium_economy">Premium Econony</option>
                                    <option value="business_class">Business Class</option>
                                    <option value="first_class">First Class</option>
                                    <option value="all_inclusive">Other (Put details in Additional info)</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="preferred_airline" class="form-label">Preferred Airline</label>
                                <input type="text" class="form-control" id="preferred_airline" name="preferred_airline">
                            </div>
                            <div class="mb-3">
                                <label for="adults" class="form-label">Number of adults</label>
                                <input type="number" class="form-control" id="adults" name="adults" required>
                            </div>
                            <div class="mb-3">
                                <label for="children" class="form-label">Number of children</label>
                                <input type="number" class="form-control" id="children" name="children" required>
                            </div>
                            <div class="mb-3">
                                <label for="infants" class="form-label">Number of infants</label>
                                <input type="number" class="form-control" id="infants" name="infants" required>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Additional information</label>
                                <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Hotel Only -->
        <div class="modal fade bd-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Hotel Quote</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="inserthotelquote.php">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone number</label>
                                <input type="tel" class="form-control" id="phone" name="phone" required>
                            </div>
                            <div class="mb-3">
                                <label for="destination" class="form-label">Destination</label>
                                <input type="text" class="form-control" id="destination" name="destination" required>
                            </div>
                            <div class="mb-3">
                                <label for="checkin" class="form-label">Check-in date</label>
                                <input type="date" class="form-control" id="checkin" name="checkin" required>
                            </div>
                            <div class="mb-3">
                                <label for="checkout" class="form-label">Check-out date</label>
                                <input type="date" class="form-control" id="checkout" name="checkout" required>
                            </div>
                            <div class="mb-3">
                                <label for="board_basis" class="form-label">Board Basis</label>
                                <select class="form-select" id="board_basis" name="board_basis" required>
                                    <option value="">Select board basis...</option>
                                    <option value="room_only">Room Only</option>
                                    <option value="bed_and_breakfast">Bed and Breakfast</option>
                                    <option value="half_board">Half Board</option>
                                    <option value="full_board">Full Board</option>
                                    <option value="all_inclusive">All Inclusive</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="adults" class="form-label">Number of adults</label>
                                <input type="number" class="form-control" id="adults" name="adults" required>
                            </div>
                            <div class="mb-3">
                                <label for="children" class="form-label">Number of children</label>
                                <input type="number" class="form-control" id="children" name="children" required>
                            </div>
                            <div class="mb-3">
                                <label for="infants" class="form-label">Number of infants</label>
                                <input type="number" class="form-control" id="infants" name="infants" required>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Additional information</label>
                                <textarea class="form-control" id="message" name="message" rows="3" ></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- Air + Hotel -->
        <div class="modal fade bd-example-modal-lg3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">

                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Flight & Hotel Quote</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <form method="post" action="insertpackagequote.php">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone number</label>
                                <input type="tel" class="form-control" id="phone" name="phone" required>
                            </div>
                            <div class="mb-3">
                                <label for="destination" class="form-label">Destination</label>
                                <input type="text" class="form-control" id="destination" name= "destination" required>
                            </div>
                            <div class="mb-3">
                                <label for="preferred_hotel" class="form-label">Preferred Hotel</label>
                                <input type="text" class="form-control" id="preferred_hotel" name="preferred_hotel">
                            </div>
                            
                            <div class="mb-3">
                                <label for="board_basis" class="form-label">Board Basis</label>
                                <select class="form-select" id="board_basis" name="board_basis" required>
                                    <option value="">Select board basis...</option>
                                    <option value="room_only">Room Only</option>
                                    <option value="bed_and_breakfast">Bed and Breakfast</option>
                                    <option value="half_board">Half Board</option>
                                    <option value="full_board">Full Board</option>
                                    <option value="all_inclusive">All Inclusive</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="outbound_date" class="form-label">Outbound date</label>
                                <input type="date" class="form-control" id="outbound_date" name="outbound_date" required>
                            </div>
                            <div class="mb-3">
                                <label for="return_date" class="form-label">Return date</label>
                                <input type="date" class="form-control" id="return_date" name="return_date" required>
                            </div>
                            <div class="mb-3">
                                <label for="travel_class" class="form-label">Travel Class</label>
                                <select class="form-select" id="travel_class" name="travel_class" required>
                                    <option value="">Select travel class...</option>
                                    <option value="economy">Economy</option>
                                    <option value="premium_economy">Premium Econony</option>
                                    <option value="business_class">Business Class</option>
                                    <option value="first_class">First Class</option>
                                    <option value="all_inclusive">Other (Put details in Additional info)</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="preferred_airline" class="form-label">Preferred Airline</label>
                                <input type="text" class="form-control" id="preferred_airline" name="preferred_airline">
                            </div>
                            <div class="mb-3">
                                <label for="adults" class="form-label">Number of adults</label>
                                <input type="number" class="form-control" id="adults" name="adults" required>
                            </div>
                            <div class="mb-3">
                                <label for="children" class="form-label">Number of children</label>
                                <input type="number" class="form-control" id="children" name="children" required>
                            </div>
                            <div class="mb-3">
                                <label for="infants" class="form-label">Number of infants</label>
                                <input type="number" class="form-control" id="infants" name="infants" required>
                            </div>

                            <div class="mb-3">
                                <label for="rooms" class="form-label">Number of rooms</label>
                                <input type="number" class="form-control" id="rooms" name="rooms" required>
                            </div>

                            <div class="mb-3">
                                <label for="car_hire" class="form-label">Require Car Hire?</label>
                                <select class="form-select" id="car_hire" name="car_hire" required>
                                    <option value="">Select if you require car hire</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="transfers" class="form-label">Require transfers? </label>
                                <select class="form-select" id="transfers" name="transfers" required>
                                    <option value="">Select if you require transfers, we only offer private, add to notes if you want shared</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="total_budget" class="form-label">Total Budget</label>
                                <input type="text" class="form-control" id="total_budget" name="total_budget">
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Additional information</label>
                                <textarea class="form-control" id="message" name="message" rows="3" placeholder="Add here if you have any special requests or preferred room types, anything that can make your holiday better. Is it special occassion tell us!"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>





        <!-- Footer Start -->
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4" style="">
            <ul class="nav col-md-4 justify-content-start">
                <li class="nav-item"><a href="privacy.php" class="nav-link px-2 text-muted">Privacy Policy</a></li>
                <li class="nav-item"><a href="about.php" class="nav-link px-2 text-muted">About Us</a></li>
            </ul>
            <!-- logo start -->
            <ul class="nav">
                <a href="index.php"> <img src="images/logonobg.png" alt="logo" style="height:5px;"> </a>
            </ul><!-- logo end -->
            <a href="https://www.facebook.com/Your.TravelCompanionltd/"> <i class="fa-brands fa-facebook fa-2xl "
                    style="padding-right: 5px;"></i>
            </a>
            <a href="https://www.instagram.com/your.travelcompanion/"> <i class="fa-brands fa-instagram fa-2xl"
                    style="padding-right: 15px;"></i></a>
        </footer><!-- Footer End -->
    </div> <!-- Container End -->
    <script>
    var myModal = document.getElementById('myModal')
    var myInput = document.getElementById('myInput')

    myModal.addEventListener('shown.bs.modal', function() {
        myInput.focus()
    })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>