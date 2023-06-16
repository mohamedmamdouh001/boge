<?php
include "../config/config.php";
session_start();
$user_id = $_SESSION['user_id'];
$sql = "SELECT * 
        FROM `payment`
        INNER JOIN  `event`
        ON payment.event_id=event.id
        WHERE payment.user_id='$user_id'";
$result = mysqli_query($conn, $sql);

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
            <div class="container-fluid bg-dark px-2">
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
                                   
                                    <a href="#hotevents" class="nav-item nav-link"> booked events  </a>
                                    
                                   
                                    
                                    
                               
                                </div>
                                <div class="avatar-menu" id="avatar-menu">
                                    <div class="header-avatar" id="header-avatar"  
                                         style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTgm1Ri8HveQuqF6IgIz_oxOAVYUn0qWTBNuKdc1n0Roog4Q69C9DJVmptkFo83QgFJBVM&usqp=CAU);"> 
                                        <span class="icon icon-caret-down"></span>
                                    </div>
                                    <div class="notification-bubble" id="notification-bubble"><span> ali </span></div>
                                    <ul id="avatar-dropdownmenu">
                                        <li><a href="#"><span class="icon icon-user"></span> my events</a></li>
                                  <li><a href="#"><span class="icon icon-exit"></span> Sign Out</a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
   <!-- end nav bar -------->


<div class="container-xxl py-5">
    <div class="container">
        <div id="hotevents" class="text-center wow fadeInUp" data-wow-delay="0.1s">
         
            <h1 class="mb-5"> <span class="text-primary text-uppercase">booked</span> events </h1>
        </div>
        <div class="row g-4">
  
      



   


  

   
        

        
        <?php
        while ($row = mysqli_fetch_array($result)) { ?>
            <div class="projcard projcard-customcolor" style="--projcard-color: #F5AF41;">
            <div class="projcard-innerbox">
              <img class="projcard-img" src="event_img/<?=$row['event_img']?>" />
              <small style="height: 70px ;" class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">26 feb </small>
              <div class="projcard-textbox">
                <div class="projcard-title"><?=$row['name']?></div>
                <div class="projcard-subtitle"> Have a nice day!</div>
                <div class="projcard-bar"></div>    
                <div class="projcard-description">
                    <?=$row['description']?>
                  <br>
                  <small class="border-end me-3 pe-3"><i class="fa-sharp fa-solid fa-book"></i> <?=$row['category']?> </small>
                  <small class="border-end me-3 pe-3"><i class="fa-solid fa-clock"></i> <?=$row['date']?></small>
                  <small><i class="fa-solid fa-money-check-dollar"></i> <?=$row['price']?> </small>
                  <br>
                
                
                  </div>
                
                
              </div>
                
            </div>
                
          </div>
        <?php
        }
        ?>

        </div>   
           
                
                <style>
                    /* Demo Code: */
    body {
        font-family: 'Open Sans', arial, sans-serif;
        color: #333;
        font-size: 14px;
    }
    .projcard-container {
        margin: 50px 0;
    }
    
    /* Actual Code: */
    .projcard-container,
    .projcard-container * {
        box-sizing: border-box;
    }
    .projcard-container {
        margin-left: auto;
        margin-right: auto;
        width: 1000px;
    }
    .projcard {
        position: relative;
        width: 100%;
        height: 300px;
        margin-bottom: 40px;
        border-radius: 10px;
        background-color: #fff;
        border: 2px solid #ddd;
        font-size: 18px;
        overflow: hidden;
        cursor: pointer;
        box-shadow: 0 4px 21px -12px rgba(0, 0, 0, .66);
        transition: box-shadow 0.2s ease, transform 0.2s ease;
    }
    .projcard:hover {
        box-shadow: 0 34px 32px -33px rgba(0, 0, 0, .18);
        transform: translate(0px, -3px);
    }
    .projcard::before {
        content: "";
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background-image: linear-gradient(-70deg, #424242, transparent 50%);
        opacity: 0.07;
    }
    .projcard:nth-child(2n)::before {
        background-image: linear-gradient(-250deg, #424242, transparent 50%);
    }
    .projcard-innerbox {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
    }
    .projcard-img {
        position: absolute;
        height: 300px;
        width: 400px;
        top: 0;
        left: 0;
        transition: transform 0.2s ease;
    }
    .projcard:nth-child(2n) .projcard-img {
        left: initial;
        right: 0;
    }
    .projcard:hover .projcard-img {
        transform: scale(1.05) rotate(1deg);
    }
    .projcard:hover .projcard-bar {
        width: 70px;
    }
    .projcard-textbox {
        position: absolute;
        top: 7%;
        bottom: 7%;
        left: 430px;
        width: calc(100% - 470px);
        font-size: 17px;
    }
    .projcard:nth-child(2n) .projcard-textbox {
        left: initial;
        right: 430px;
    }
    .projcard-textbox::before,
    .projcard-textbox::after {
        content: "";
        position: absolute;
        display: block;
        background: #ff0000bb;
        background: #fff;
        top: -20%;
        left: -55px;
        height: 140%;
        width: 60px;
        transform: rotate(8deg);
    }
    .projcard:nth-child(2n) .projcard-textbox::before {
        display: none;
    }
    .projcard-textbox::after {
        display: none;
        left: initial;
        right: -55px;
    }
    .projcard:nth-child(2n) .projcard-textbox::after {
        display: block;
    }
    .projcard-textbox * {
        position: relative;
    }
    .projcard-title {
        font-family: 'Voces', 'Open Sans', arial, sans-serif;
        font-size: 24px;
    }
    .projcard-subtitle {
        font-family: 'Voces', 'Open Sans', arial, sans-serif;
        color: #888;
    }
    .projcard-bar {
        left: -2px;
        width: 50px;
        height: 5px;
        margin: 10px 0;
        border-radius: 5px;
        background-color: #424242;
        transition: width 0.2s ease;
    }
    .projcard-blue .projcard-bar { background-color: #0088FF; }
    .projcard-blue::before { background-image: linear-gradient(-70deg, #0088FF, transparent 50%); }
    .projcard-blue:nth-child(2n)::before { background-image: linear-gradient(-250deg, #0088FF, transparent 50%); }
    .projcard-red .projcard-bar { background-color: #D62F1F; }
    .projcard-red::before { background-image: linear-gradient(-70deg, #D62F1F, transparent 50%); }
    .projcard-red:nth-child(2n)::before { background-image: linear-gradient(-250deg, #D62F1F, transparent 50%); }
    .projcard-green .projcard-bar { background-color: #40BD00; }
    .projcard-green::before { background-image: linear-gradient(-70deg, #40BD00, transparent 50%); }
    .projcard-green:nth-child(2n)::before { background-image: linear-gradient(-250deg, #40BD00, transparent 50%); }
    .projcard-yellow .projcard-bar { background-color: #F5AF41; }
    .projcard-yellow::before { background-image: linear-gradient(-70deg, #F5AF41, transparent 50%); }
    .projcard-yellow:nth-child(2n)::before { background-image: linear-gradient(-250deg, #F5AF41, transparent 50%); }
    .projcard-orange .projcard-bar { background-color: #FF5722; }
    .projcard-orange::before { background-image: linear-gradient(-70deg, #FF5722, transparent 50%); }
    .projcard-orange:nth-child(2n)::before { background-image: linear-gradient(-250deg, #FF5722, transparent 50%); }
    .projcard-brown .projcard-bar { background-color: #C49863; }
    .projcard-brown::before { background-image: linear-gradient(-70deg, #C49863, transparent 50%); }
    .projcard-brown:nth-child(2n)::before { background-image: linear-gradient(-250deg, #C49863, transparent 50%); }
    .projcard-grey .projcard-bar { background-color: #424242; }
    .projcard-grey::before { background-image: linear-gradient(-70deg, #424242, transparent 50%); }
    .projcard-grey:nth-child(2n)::before { background-image: linear-gradient(-250deg, #424242, transparent 50%); }
    .projcard-customcolor .projcard-bar { background-color: var(--projcard-color); }
    .projcard-customcolor::before { background-image: linear-gradient(-70deg, var(--projcard-color), transparent 50%); }
    .projcard-customcolor:nth-child(2n)::before { background-image: linear-gradient(-250deg, var(--projcard-color), transparent 50%); }
    .projcard-description {
        z-index: 10;
        font-size: 15px;
        color: #424242;
        height: 125px;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    .projcard-tagbox {
        position: absolute;
        bottom: 3%;
        font-size: 14px;
        cursor: default;
        user-select: none;
        pointer-events: none;
    }
    .projcard-tag {
        display: inline-block;
        background: #E0E0E0;
        color: #777;
        border-radius: 3px 0 0 3px;
        line-height: 26px;
        padding: 0 10px 0 23px;
        position: relative;
        margin-right: 20px;
        cursor: default;
        user-select: none;
        transition: color 0.2s;
    }
    .projcard-tag::before {
        content: '';
        position: absolute;
        background: #fff;
        border-radius: 10px;
        box-shadow: inset 0 1px rgba(0, 0, 0, 0.25);
        height: 6px;
        left: 10px;
        width: 6px;
        top: 10px;
    }
    .projcard-tag::after {
        content: '';
        position: absolute;
        border-bottom: 13px solid transparent;
        border-left: 10px solid #E0E0E0;
        border-top: 13px solid transparent;
        right: -10px;
        top: 0;
    }
                </style>
        
                
              </div>
    
        </div>
    </div>

        <!-- booked events  End -->
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