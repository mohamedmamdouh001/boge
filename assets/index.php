<?php
include '../config/config.php';
session_start();
if(isset($_SESSION['user_email'])){
    $user_email = $_SESSION['user_email'];
}

if(isset($_GET['signout'])){
    unset($_SESSION['user_email']);
    header('location:owner-login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   
    <meta charset="utf-8">
    <title> boge </title>
    <meta content="width=device-width, initial-scale=1.0" name="evport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!---fontawsome cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="fontawesome/css/all.min.css">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!--  Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body  >
    
         
    
            <!-- Header Start -->
            <div class="container-fluid bg-dark px-0">
                <div class="row gx-0">
                    <div class="col-lg-3 bg-dark d-none d-lg-block">
                        <a href="index.php" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                           <img src="BOGE-logos_white.png" alt="" style=" width: 120px;;">

                        </a>
                    </div>
                    <div class="col-lg-9">
                        <div class="row gx-0 bg-white d-none d-lg-flex">
                            <div class="col-lg-7 px-5 text-start">
                                <div class="h-100 d-inline-flex align-items-center py-2 me-4">
                                    <i class="fa fa-envelope text-primary me-2"></i>
                                    <p class="mb-0">billgates@oUtlook.com</p>
                                </div>
                                <div class="h-100 d-inline-flex align-items-center py-2">
                                    <i class="fa fa-phone-alt text-primary me-2"></i>
                                    <p class="mb-0">01511337788</p>
                                </div>
                            </div>
                            <div class="col-lg-5 px-5 text-end">
                                <div class="d-inline-flex align-items-center py-2">
                                    <a class="me-3" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="me-3" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="me-3" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="" href=""><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                        <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
                            <a href="index.html" class="navbar-brand d-block d-lg-none">
                               
                               BOGE
                            </a>
                            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                                <div class="navbar-nav mr-auto py-0">
                                    <a href="index.php" class="nav-item nav-link active">Home</a>
                                    <a href="#hotevents" class="nav-item nav-link"> hot events   </a>
                                    <a href="user-events.php" class="nav-item nav-link"> events </a>
                                    
                                    <div class="nav-item dropdown">
                                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">become a partner</a>
                                        <div class="dropdown-menu rounded-0 m-0">
                                            <a href="owner-signup.php" class="dropdown-item"> REGESTION as apartner </a>
                                            <a href="owner-login.php" class="dropdown-item">login as a partner</a>
                                            <a href="" class="dropdown-item"></a>
                                        </div>
                                    </div>
                                    <a href="user-contact.html" class="nav-item nav-link">Contact</a>
                                </div>
                                <?php
                                if(!empty($user_email)){
                                    $sql = "SELECT * FROM `user` WHERE email='$user_email'";
                                    $result = mysqli_query($conn, $sql);
                                    $row = mysqli_fetch_assoc($result); ?>
                                    <form action="" method="get">
                                        <p class="rounded-0 py-4 px-md-5 d-none d-lg-block" style="background-color:#FEA116; color: white; " > <?=$row['name'] ?> </p>
                                        <button type="submit" name="signout" class="btn btn-danger">Logout</button>
                                    </form>
                                <?php    
                                }
                                else{ ?>
                                    <a href="user-login.php" class="btn btn-primary rounded-0 py-4 px-md-5 d-none d-lg-block"> LOG IN / REGESTION<i class="fa fa-arrow-right ms-3"></i></a>
                                <?php
                                }
                                ?>
                                
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
   
       

        <!-- Carousel Start -->
        <div class="container-fluid p-0 mb-5">
            <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100" src="im/1.jpg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                              
                                <h1 class="display-3 text-white mb-4 animated slideInDown">FIND PLANS FOR TODAY</h1>
                                <h5 class="section-title text-white text-uppercase mb-3 animated slideInDown">Discover new experiences and more ways to do things you love</h5>
                                <a href="user-events.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft"> FIND YOUR NEXT  event</a>
                                
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="im/8d9a42_660305084f1041c5a11cc318fb6801da_mv2_d_3456_2304_s_2.png" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                              
                                <h1 class="display-3 text-white mb-4 animated slideInDown">FIND PLANS FOR TODAY</h1>
                                <h5 class="section-title text-white text-uppercase mb-3 animated slideInDown">Discover new experiences and more ways to do things you love</h5>
                                <a href="user-events.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft"> FIND YOUR NEXT  event</a>

                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
 

       

        <!-- hot events  Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div id="hotevents" class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase"> hot events </h6>
                    <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">events</span></h1>
                </div>
                <div class="row g-4">
                    <?php
                    $stmt = "SELECT * FROM `event` WHERE `status` = 'accepted' LIMIT 3";
                    $result = mysqli_query($conn, $stmt);
                    while($row = mysqli_fetch_assoc($result)){
                        $date_arr = explode( ' ', $row['date'], 2);
                        $date = $date_arr[0];
                        $time = $date_arr[1];

                    ?>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="event_img/<?=$row['event_img']?>" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4"> <?=$date ?> </small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0"><?=$row['name'] ?></h5>
                                    <div class="ps-2">
                                   
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <small class="border-end me-3 pe-3"><i class="fa-sharp fa-solid fa-book"></i> <?=$row['category'] ?> </small>
                                     <small class="border-end me-3 pe-3"><i class="fa-solid fa-clock"></i> <?=$time ?> </small>
                                    <small><i class="fa-solid fa-money-check-dollar"></i> <?=$row['price'] ?> EGP  </small>
                                </div>
                                <p class="text-body mb-3">Event Information:
                                <?=$row['description'] ?><br> hosting by BOGE.</p>
                                <br>
                                    <div class="d-flex justify-content-between">
                                        <a  style="width: 200px;" class=" btn btn-sm btn-dark rounded py-2 px-4 " href="user-view-event-details.php?event_id=<?=$row['id']; ?>"> Book Now  </a>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>

        <div class="container-xxl py-5 px-0 wow zoomIn" data-wow-delay="0.1s">
            <div class="row g-0">
                <div class="col-md-6 bg-dark d-flex align-items-center">
                    <div class="p-5">
                        <h6 class="section-title text-start text-white text-uppercase mb-3"> previous events</h6>
                        <h1 class="text-white mb-4">Watch this video to know more about us
                              </h1>
                        <p class="text-white mb-4">Ready to attend new events ?</p>
                        <a href="user-contact.html" class="btn btn-primary py-md-3 px-md-5 me-3">Contact US </a>
                        <a href="EVENTS.html" class="btn btn-light py-md-3 px-md-5">Book UR Event</a>
                    </div>
                </div>
                <div class="col-md-6">
                    
                    <div  class="video">
                        <iframe 
                        style="width: 100%;height:100%; " src="https://www.youtube.com/embed/ZWl2dZYYotI?start=20" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>


        </div>
        <!-- Video end -->






        <!-- Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Our partners </h6>
                    <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase"> success partners</span></h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="rounded shadow overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/supporters/311765029_5265666016878821_546581458917695528_n.jpg" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">the greek campus</h5>
                                <small></small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="rounded shadow overflow-hidden">
                            <div class="position-relative">
                                <img  class="img-fluid" src="img/supporters/BDAL.jpg">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">BDALTEAM</h5>
                                <small></small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="rounded shadow overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/supporters/ebda3.png" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">ebda3 CAPITAL</h5>
                                <small></small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="rounded shadow overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/supporters/12795620191644998419.jpg" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">elsawyculturewheel</h5>
                                <small></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      



        <!-- Newsletter Start -->
        <div class="container newsletter mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="row justify-content-center">
                <div class="col-lg-10 border rounded p-1">
                    <div class="border rounded text-center p-1">
                        <div class="bg-white rounded text-center p-5">
                            <h4 class="mb-4">Subscribe Our <span class="text-primary text-uppercase">Newsletter</span></h4>
                            <div class="position-relative mx-auto" style="max-width: 400px;">
                                <input class="form-control w-100 py-3 ps-4 pe-5" type="text" placeholder="Enter your email">
                                <button type="button" class="btn btn-primary py-2 px-3 position-absolute top-0 end-0 mt-2 me-2">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer wow fadeIn" data-wow-delay="0.1s">
            <div class="container pb-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-4">
                        <div class="bg-primary rounded p-4">
                            <a href="index.html"><h1 class="text-white text-uppercase mb-3">BOGE</h1></a>
                            <p class="text-white mb-0">
								DISCOVER NEW EXPERIENCES AND MORE WAYS TO DO THINGS YOU LOVE
							</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h6 class="section-title text-start text-primary text-uppercase mb-4">Contact</h6>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i> maadi </p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>012 345 </p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>boge@example.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <div class="row gy-5 g-4">
                            <div class="col-md-6">
                                <h6 class="section-title text-start text-primary text-uppercase mb-4"> be come partner</h6>
                                <a class="btn btn-link" href="">  create an event  </a>
                                <a class="btn btn-link" href="">login as a partner</a>
                                <a class="btn btn-link" href="">Privacy Policy</a>
                                <a class="btn btn-link" href="">Terms & Condition</a>
                                <a class="btn btn-link" href="">Support</a>
                            </div>
                            <div class="col-md-6">
                                <h6 class="section-title text-start text-primary text-uppercase mb-4">Services</h6>
                                <a class="btn btn-link" href="">hosting ur event</a>
                                <a class="btn btn-link" href="">book events </a>
                               
                                
                            </div>
                        </div>
                    </div>
                    
                
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            <a class="border-bottom" href="#">BOGE</a>, All Right Reserved. 
							
							
							Designed By <a class="border-bottom" href="https://www.instagram.com/deyaa_zaher/">deyaazaher</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                               
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    

    <script src="js/main.js"></script>
</body>

</html>