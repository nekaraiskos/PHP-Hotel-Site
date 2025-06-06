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
   <title>Mt Gateway</title>
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
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
      media="screen">
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

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
                           <a href="admin_main_page.php"><img src="images/my_logo.png" alt="#" /></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                  <!-- Navigation Bar -->
                  <nav class="navigation navbar navbar-expand-md navbar-dark">
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04"
                        aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                     </button>
                     <div class="collapse navbar-collapse" id="navbarsExample04">
                        <ul class="navbar-nav mr-auto">
                           <li class="nav-item active">
                              <a class="nav-link" href="admin_main_page.php">Home</a>
                           </li>
                           <!-- <li class="nav-item">
                              <a class="nav-link" href="about.html">About</a>
                           </li> -->
                           <li class="nav-item">
                              <a class="nav-link" href="admin_room.php">Our&nbsp;rooms</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="admin_services.php">Services</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="admin_special_offers.php">Special&nbsp;Offers</a>
                           </li>
                        </ul>
                        <form class="form-inline" action="includes/logout/logout.inc.php" method="post">
                           <button class="btn btn-danger ml-2" type="submit">Logout</button>
                        </form>
                     </div>
                  </nav>

               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- end header inner -->
   <!-- end header -->
   <!-- banner -->
   <section class="banner_main">
      <div id="myCarousel" class="carousel slide banner" data-ride="carousel">
         <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
         </ol>
         <div class="carousel-inner">
            <div class="carousel-item active">
               <img class="first-slide" src="images/hotel_swiss.jpg" alt="First slide">
               <div class="container">
               </div>
            </div>
            <div class="carousel-item">
               <img class="second-slide" src="images/please.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
               <img class="third-slide" src="images/interrior.jpg" alt="Third slide">
            </div>
         </div>
         <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
         </a>
      </div>
      <!-- <div class="booking_ocline">
         <div class="container">
            <div class="row">
               <div class="col-md-5">
                  <div class="book_room">
                     <h1>Book a Room Online</h1>
                     <form class="book_now">
                        <div class="row">
                           <div class="col-md-12">
                              <span>Arrival</span>
                              <img class="date_cua" src="images/date.png">
                              <input class="online_book" placeholder="dd/mm/yyyy" type="date" name="dd/mm/yyyy">
                           </div>
                           <div class="col-md-12">
                              <span>Departure</span>
                              <img class="date_cua" src="images/date.png">
                              <input class="online_book" placeholder="dd/mm/yyyy" type="date" name="dd/mm/yyyy">
                           </div>
                           <div class="col-md-12">
                              <button class="book_btn">Book Now</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div> -->
   </section>
   <!-- end banner -->
   <!-- about -->
   <div class="about">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-5">
               <div class="titlepage">
                  <h2>About Us</h2>
                  <p>Welcome to Mt. Getaway, a premier luxury ski resort nestled in stunning snow-covered mountains. Our resort offers an unparalleled blend of adventure and relaxation, perfect for the ultimate winter escape. Whether you're here to conquer the slopes or unwind in style, Mt. Getaway promises a memorable experience with luxurious accommodations and exceptional service tailored just for you.</p>
               </div>
            </div>
            <div class="col-md-7">
               <div class="about_img">
                  <figure><img src="images/about.webp" alt="#" /></figure>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end about -->
   <!--  footer -->
   <footer>
      <div class="footer">
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <h3>Menu Link</h3>
                  <ul class="link_menu">
                     <li class="active"><a href="#">Home</a></li>
                     <!-- <li><a href="about.html"> about</a></li> -->
                     <li><a href="admin_room.php">Our Rooms</a></li>
                     <li><a href="admin_services.php">Services</a></li>
                     <li><a href="admin_special_offers.html">Special Offers</a></li>
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