<?php
session_start(); // Start session to access session variables

require_once 'includes/book_now/book_now_view.inc.php';
$user_id = $_SESSION["user_id"];
$username = isset($_SESSION['user_username']) ? $_SESSION['user_username'] : null;;

$arrival = isset($_GET['arrival']) ? htmlspecialchars($_GET['arrival']) : null;
$departure = isset($_GET['departure']) ? htmlspecialchars($_GET['departure']) : null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Booking Confirmation</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="main_page.php"><img src="images/my_logo.png" alt="#" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <nav class="navigation navbar navbar-expand-md navbar-dark ">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarsExample04">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item ">
                                        <a class="nav-link" href="main_page.php">Home</a>
                                    </li>
                                    <li class="nav-item active">
                                        <a class="nav-link" href="room.php">Our rooms</a>
                                    </li>                                    
                                    <li class="nav-item">
                                        <a class="nav-link" href="get_services.php">Services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="get_all_offers.php">Special Offers</a>
                                    </li>
                                    <li class="nav-item">                              
                                        <span class="nav-link" style="color: #a8a6a5; text-shadow: 1px 1px 2px rgba(0,0,0,0.3); font-family: 'Garamond', serif;"><?php echo htmlspecialchars($username); ?></span>
                                    </li>
                                    <li class="nav-item">
                                        <form class="form-inline" action="includes/logout/logout.inc.php" method="post">
                                            <button class="btn btn-danger ml-2" type="submit">Logout</button>
                                        </form>
                                    </li>
                                </ul>                               
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end header inner -->
    <!-- end header -->
    
    <div class="back_re">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h2>All Available Rooms for Your Selected Dates</h2>                                                
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Space Divider -->
    <div style="height: 30px;"></div>

    <!-- Filter Section -->
    <div class="filter_section">
        <div class="container">            
            <form method="GET" action="filter_rooms.php">                
                <div class="row">
                    <div class="col-md-3">
                        <label for="arrival">Arrival Date:</label>
                        <input type="date" name="arrival" id="arrival" class="form-control" value="<?php echo isset($_GET['arrival']) ? htmlspecialchars($_GET['arrival']) : null; ?>">
                    </div>
                    <div class="col-md-3">
                        <label for="departure">Departure Date:</label>
                        <input type="date" name="departure" id="departure" class="form-control" value="<?php echo isset($_GET['departure']) ? htmlspecialchars($_GET['departure']) : null; ?>">
                    </div>
                    <div class="col-md-3">
                        <label for="room_type">Room Type:</label>
                        <select name="room_type" id="room_type" class="form-control">
                            <option value="">Any</option>
                            <option value="single" <?php echo isset($_GET['room_type']) && $_GET['room_type'] == 'single' ? 'selected' : null; ?>>Single</option>
                            <option value="double" <?php echo isset($_GET['room_type']) && $_GET['room_type'] == 'double' ? 'selected' : null; ?>>Double</option>
                            <option value="suite" <?php echo isset($_GET['room_type']) && $_GET['room_type'] == 'suite' ? 'selected' : null; ?>>Suite</option>
                        </select>
                    </div>
                    <!-- New Search Bar -->        
                    <div class="col-md-3">
                        <label for="search" class="form-label"></label>
                        <input type="text" name="search" id="search" class="form-control" placeholder="Search by room name..." 
                            value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : null; ?>">
                    </div>

                    <div class="col-md-3">
                        <label for="num_beds">Number of Beds:</label>
                        <select name="num_beds" id="num_beds" class="form-control">
                            <option value="">Any</option>
                            <option value="1" <?php echo isset($_GET['num_beds']) && $_GET['num_beds'] == '1' ? 'selected' : null; ?>>1</option>
                            <option value="2" <?php echo isset($_GET['num_beds']) && $_GET['num_beds'] == '2' ? 'selected' : null; ?>>2</option>
                            <option value="3" <?php echo isset($_GET['num_beds']) && $_GET['num_beds'] == '3' ? 'selected' : null; ?>>3</option>
                            <option value="4" <?php echo isset($_GET['num_beds']) && $_GET['num_beds'] == '4' ? 'selected' : null; ?>>4</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="capacity">Capacity:</label>
                        <select name="capacity" id="capacity" class="form-control">
                            <option value="">Any</option>
                            <option value="1" <?php echo isset($_GET['capacity']) && $_GET['capacity'] == '1' ? 'selected' : null; ?>>1</option>
                            <option value="2" <?php echo isset($_GET['capacity']) && $_GET['capacity'] == '2' ? 'selected' : null; ?>>2</option>
                            <option value="3" <?php echo isset($_GET['capacity']) && $_GET['capacity'] == '3' ? 'selected' : null; ?>>3</option>
                            <option value="4" <?php echo isset($_GET['capacity']) && $_GET['capacity'] == '4' ? 'selected' : null; ?>>4+</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="sort_order">Order by Price:</label>
                        <select name="sort_order" id="sort_order" class="form-control">
                            <option value="">Any</option>
                            <option value="asc" <?php echo isset($_GET['sort_order']) && $_GET['sort_order'] == 'asc' ? 'selected' : null; ?>>Low to High</option>
                            <option value="desc" <?php echo isset($_GET['sort_order']) && $_GET['sort_order'] == 'desc' ? 'selected' : null; ?>>High to Low</option>
                        </select>
                    </div> 
                </div>                
                <button type="submit" class="btn btn-primary mt-3">Apply Filters</button>
                <!-- Clear Filters Button -->
                <button type="reset" class="btn btn-secondary mt-3" onclick="window.location.href='filter_rooms.php';">Clear Filters</button>
            </form>
        </div>
    </div>
    <!-- End Filter Section -->
    
    <!-- Booking Details -->
    <div class="our_room">
        <div class="container">           
            <div class="row">
                <?php                 
                // Pass filter values to the function
                output_available_rooms($arrival, $departure);                 
                ?>
            </div>
        </div>
    </div>
    <!-- end Booking Details -->

    <!--  footer -->
    <footer>
      <div class="footer">
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <h3>Menu Link</h3>
                  <ul class="link_menu">
                     <li class="active"><a href="#">Home</a></li>
                     <li><a href="get_all_rooms.php">Our Rooms</a></li>
                     <li><a href="get_services.php">Services</a></li>
                     <li><a href="get_all_offers.php">Special Offers</a></li>                     
                  </ul>
               </div>
               <div class="col-md-4">
                  <h3>News letter</h3>
                  <form class="bottom_form">
                     <input class="enter" placeholder="Enter your email" type="text" name="Enter your email">
                     <button class="sub_btn">subscribe</button>
                  </form>
                  <ul class="social_icon">
                     <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                     <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                     <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                     <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="copyright">
            <div class="container">
               <div class="row">
                  <div class="col-md-10 offset-md-1">

                     <p>
                        © 2019 All Rights Reserved. Design by <a href="https://html.design/"> Free Html Templates</a>
                        <br><br>
                        Distributed by <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
                     </p>

                  </div>
               </div>
            </div>
         </div>
      </div>
   </footer>
    <!-- end footer -->
    
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
