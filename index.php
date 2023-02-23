<!doctype html>
<html class="no-js" lang="zxx">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>rku | Gym &amp; Fitness HTML Template</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Place favicon.ico in the root directory -->
      <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
      <!-- CSS here -->
      <link rel="stylesheet" href="assets/css/preloader.css">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/meanmenu.css">
      <link rel="stylesheet" href="assets/css/animate.min.css">
      <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
      <link rel="stylesheet" href="assets/css/swiper-bundle.css">
      <link rel="stylesheet" href="assets/css/backToTop.css">
      <link rel="stylesheet" href="assets/css/magnific-popup.css">
      <link rel="stylesheet" href="assets/css/nice-select.css">
      <link rel="stylesheet" href="assets/css/fontAwesome5Pro.css">
      <link rel="stylesheet" href="assets/flatiocn/flaticon.css">
      <link rel="stylesheet" href="assets/css/default.css">
      <link rel="stylesheet" href="assets/css/style.css">
   </head>
   <body>
      <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->

      <!-- Add your site or application content here -->

      <!-- preloader start -->
      <div id="preloader">
         <div class="preloader">
            <span></span>
            <span></span>
         </div>
      </div>
      <!-- preloader end -->

      <!-- back to top start -->
      <div class="progress-wrap">
         <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
         </svg>
      </div>
      <!-- back to top end -->

      <!-- top-nav-start -->
 <?php include_once('include/header.php') ?>
      <!-- top-nav-end -->

      <!-- sidebar area start -->
      <div class="sidebar__area">
         <div class="sidebar__wrapper">
            <div class="sidebar__close">
               <button class="sidebar__close-btn" id="sidebar__close-btn">
                  <i class="fal fa-times"></i>
               </button>
            </div>
            <div class="sidebar__content">
               <div class="sidebar__logo mb-40">
                  <a href="index.html">
                  <img src="assets/img/logo/logo.png" alt="logo">
                  </a>
               </div>
               <div class="sidebar__search mb-25">
                  <form action="#">
                     <input type="text" placeholder="What are you searching for?">
                     <button type="submit" ><i class="far fa-search"></i></button>
                  </form>
               </div>
               <div class="mobile-menu fix"></div>
               <div class="sidebar__contact mt-30 mb-20">
                  <h4>Contact Info</h4>
                  <ul>
                     <li class="d-flex align-items-center">
                        <div class="sidebar__contact-icon mr-15">
                           <i class="fal fa-map-marker-alt"></i>
                        </div>
                        <div class="sidebar__contact-text">
                           <a target="_blank" href="https://www.google.com/maps/place/Dhaka/@23.7806207,90.3492859,12z/data=!3m1!4b1!4m5!3m4!1s0x3755b8b087026b81:0x8fa563bbdd5904c2!8m2!3d23.8104753!4d90.4119873">12/A, Mirnada City Tower, NYC</a>
                        </div>
                     </li>
                     <li class="d-flex align-items-center">
                        <div class="sidebar__contact-icon mr-15">
                           <i class="far fa-phone"></i>
                        </div>
                        <div class="sidebar__contact-text">
                           <a href="tel:+012-345-6789">088889797697</a>
                        </div>
                     </li>
                     <li class="d-flex align-items-center">
                        <div class="sidebar__contact-icon mr-15">
                           <i class="fal fa-envelope"></i>
                        </div>
                        <div class="sidebar__contact-text">
                           <a href="mailto:support@gmail.com">support@mail.com</a>
                        </div>
                     </li>
                  </ul>
               </div>
               <div class="sidebar__social">
                  <ul>
                     <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                     <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                     <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                     <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <!-- sidebar area end -->      
      <div class="body-overlay"></div>
      <!-- sidebar area end -->

      <main>
         <!-- hero-area-start  -->
         <div class="hero-area fix">
            <div class="hero-slider slider__active swiper-container swiper-container-fade">
               <div class="swiper-wrapper p-relative">
                  <div class="hero-pagination"></div>
                  <div class="item-slider swiper-slide">
                     <div class="slide-bg" data-background="assets/img/bg/hero-1.jpg"></div>
                     <div class="container">
                        <div class="row ">
                           <div class="col-lg-12">
                              <div class="slider-all-text">
                                 <span data-animation="fadeInUp" data-delay=".2s">Rku Fitness Zone</span>
                                 <h2 class="hero-title" data-animation="fadeInUp" data-delay=".4s">be storong</h2>
                                 <p class="description mt-10 mb-50" data-animation="fadeInUp" data-delay=".6s">Hardest part is walking out in the front door</p>
                                 <?php if(!isset($_SESSION['uid'])){ ?>
                                 <div class="play-option" data-animation="fadeInUp" data-delay=".8s">
                                    <a href="price.php" class="tp-btn">gym pricing details <i class="fal fa-chevron-double-right"></i></a>
                                
                                      <!-- <a class="video-play-button hero-play popup-video ml-30" href="https://www.youtube.com/watch?v=ZoZSp-wy8h8">
                                          <i class="fas fa-play"></i>
                                       </a> -->
                                 </div>
                                  <?php } ?>
                                 <div class="play-option" data-animation="fadeInUp" data-delay=".8s">
                                    <a href="get sport.php" class="tp-btn">Sport equqment <i class="fal fa-chevron-double-right"></i></a>
                                    
                                 </div>
                              </div>
                              <!-- <div class="hero-social-icon">
                                 <a href="#"><i class="fab fa-facebook-f"></i></a>
                                 <a href="#"><i class="fab fa-twitter"></i></a>
                                 <a href="#"><i class="fab fa-instagram"></i></a>
                                 <a href="#"><i class="fab fa-google"></i></a>
                              </div> -->
                           </div>
                     </div>
                     </div>
                  </div>
                  <!-- <div class="item-slider swiper-slide">
                     <div class="slide-bg" data-background="assets/img/bg/hero-2.jpg"></div>
                     <div class="container">
                        <div class="row ">
                           <div class="col-lg-12">
                              <div class="slider-all-text">
                                 <span data-animation="fadeInUp" data-delay=".2s">Fitness Zone</span>
                                 <h2 class="hero-title" data-animation="fadeInUp" data-delay=".4s">be Stronger</h2>
                                 <p class="description mt-10 mb-50" data-animation="fadeInUp" data-delay=".6s">Out in the front door, hardest part is walking</p>
                                 <div class="play-option" data-animation="fadeInUp" data-delay=".8s">
                                    <a href="about.html" class="tp-btn">explore More <i class="fal fa-chevron-double-right"></i></a>
                                       <a class="video-play-button hero-play popup-video ml-30" href="https://www.youtube.com/watch?v=ZoZSp-wy8h8">
                                          <i class="fas fa-play"></i>
                                       </a>
                                 </div>
                              </div>
                              <div class="hero-social-icon">
                                 <a href="#"><i class="fab fa-facebook-f"></i></a>
                                 <a href="#"><i class="fab fa-twitter"></i></a>
                                 <a href="#"><i class="fab fa-instagram"></i></a>
                                 <a href="#"><i class="fab fa-google"></i></a>
                              </div>
                           </div>
                     </div>
                     </div>
                  </div>  -->
                  <!-- <div class="item-slider swiper-slide">
                     <div class="slide-bg" data-background="assets/img/bg/hero-3.jpg"></div>
                     <div class="container">
                        <div class="row ">
                           <div class="col-lg-12">
                              <div class="slider-all-text">
                                 <span data-animation="fadeInUp" data-delay=".2s">Fitness Area</span>
                                 <h2 class="hero-title" data-animation="fadeInUp" data-delay=".4s">Fitness Made</h2>
                                 <p class="description mt-10 mb-50" data-animation="fadeInUp" data-delay=".6s">Hardest part is walking out in the front door</p>
                                 <div class="play-option" data-animation="fadeInUp" data-delay=".8s">
                                    <a href="about.html" class="tp-btn">explore More <i class="fal fa-chevron-double-right"></i></a>
                                       <a class="video-play-button hero-play popup-video ml-30" href="https://www.youtube.com/watch?v=ZoZSp-wy8h8">
                                          <i class="fas fa-play"></i>
                                       </a>
                                 </div>
                              </div>
                              <div class="hero-social-icon">
                                 <a href="#"><i class="fab fa-facebook-f"></i></a>
                                 <a href="#"><i class="fab fa-twitter"></i></a>
                                 <a href="#"><i class="fab fa-instagram"></i></a>
                                 <a href="#"><i class="fab fa-google"></i></a>
                              </div>
                           </div>
                     </div>
                     </div>
                  </div> -->
               </div>
            </div>
         </div>
         <!-- hero-area-end -->

         <!-- tpfeatures-lists-start -->
         <div class="tpfeatures-lists">
            <div class="container">
               <div class="row g-0">
                  <div class="col-lg-3 col-md-3">
                     <div class="tp-features-item tp-features-item-border text-center mb-30 wow fadeInUp"  data-wow-delay=".2s">
                        <div class="tpfeatures-icon mb-25">
                           <i class="flaticon-muscle"></i>
                        </div>
                        <span>gym Services</span>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-3">
                     <div class="tp-features-item tp-features-item-border item-active text-center mb-30 wow fadeInUp" data-wow-delay=".5s">
                        <div class="tpfeatures-icon mb-25">
                           <i class="flaticon-customer"></i>
                        </div>
                        <span>Qualified Instructor</span>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-3">
                     <div class="tp-features-item tp-features-item-border text-center mb-30 wow fadeInUp" data-wow-delay=".8s">
                        <div class="tpfeatures-icon mb-25">
                           <i class="flaticon-apple"></i>
                        </div>
                        <span>sports</span>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-3">
                     <div class="tp-features-item text-center mb-30 wow fadeInUp" data-wow-delay=".10s">
                        <div class="tpfeatures-icon mb-25">
                           <i class="flaticon-lawn-mower"></i>
                        </div>
                        <span>sport Programs</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- tpfeatures-lists-end -->

         <!-- tp-about-area-start -->
         <!-- <div class="tp-about-area pb-95 pt-80">
            <div class="container">
               <div class="row">
                  <div class="col-xl-5 col-lg-6">
                     <div class="about-image mb-30 wow fadeInUp" data-wow-delay=".4s" >
                        <img src="assets/img/about/about-1.jpg" alt="" class="img-fluid">
                        <div class="about-shape">
                           <img src="assets/img/about/about-shape.png" alt="">
                           <div class="content">
                              <h4>25 + Year</h4>
                               <span>Work Experience</span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-7 col-lg-6 ">
                     <div class="about-info wow fadeInUp" data-wow-delay=".7s">
                        <div class="section-wrap">
                           <span class="tpsub-title mb-15">About us</span>
                           <h3 class="section-title mb-20">Make yourself stronger than
                           your best excuses</h3>
                           <span class="section-border mb-20"><i class="far fa-circle"></i></span>
                           <p class="section-description mb-40">Duis nunc sodales conubia a laoreet aliquet on nostra eleifend lacinia prasent hendrerit quisque penatibus erat a pulvina integer semper ridiculus lectus con dimentum obor tise verodar capmtaso morin</p>
                        </div>
                        <blockquote class="ab-bquote">
                           <span>Push harder than yesterday if you want on
                              the different tomorrow.</span>
                           <div class="quote">
                              <img src="assets/img/about/quote.png" alt="">
                           </div>
                        </blockquote>
                        <div class="author-info">
                           <div class="author-data">
                              <div class="author_img mb-30"><a href="#"><img src="assets/img/about/author.jpg" alt=""></a></div>
                              <div class="author-degination mb-30">
                                 <h4>Mark Hander</h4>
                                 <span>CEO - Fetoxe</span>
                              </div>
                           </div>
                           <div class="about-btn mb-30">
                              <a href="about.html" class="tp-btn-round">What do we do <i class="fal fa-chevron-double-right"></i></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="about-bg-shape">
               <img src="assets/img/about/about-bg-png.png" alt="" class="img-fluid">
            </div>
         </div> -->
         <!-- tp-about-area-end -->

         <!-- services-list-start -->
         <div class="services-list mt-100" data-background="assets/img/services/services-bg.jpg">
            <div class="container custome-container">
               <div class="section-wrap-two text-center wow fadeInUp" data-wow-delay=".2s">
                  <span class="tpsub-title-two mb-15"><i class="far fa-circle"></i>Our services<i class="far fa-circle"></i></span>
                  <h3 class="section-title-two  mb-30 white-color">Solutions for moving better and feeling a healthier</h3>
               </div>
               <div class="row mt-60">
                  <div class="col-lg-3 col-md-6 col-sm-6">
                     <div class="services-item text-center wow fadeInUp mb-30" data-wow-delay=".6s">
                        <div class="sv-inner sv-inner2">
                           <div class="services-icon">
                              <i class="flaticon-dumbbell"></i>
                           </div>
                        </div>
                        <h4 class="services-item-title services-item-title-2 mb-20"><a href="protfolio-details.html">Weight Lifting</a></h4>
                        <p class="mb-25">Commodo metuse a dictum faucibus felis</p>
                           </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                     <div class="services-item text-center wow fadeInUp mb-30" data-wow-delay=".9s">
                        <div class="sv-inner sv-inner2">
                           <div class="services-icon">
                              <i class="flaticon-muscle"></i>
                           </div>
                        </div>
                        <h4 class="services-item-title services-item-title-2 mb-20"><a href="protfolio-details.html">Power Yoga</a></h4>
                        <p class="mb-25">Feugiat varius facilisis mus, Commodo metu</p>
                           </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                     <div class="services-item text-center wow fadeInUp mb-30" data-wow-delay="1s">
                        <div class="sv-inner sv-inner2">
                           <div class="services-icon">
                              <i class="flaticon-customer"></i>
                           </div>
                        </div>
                        <h4 class="services-item-title services-item-title-2 mb-20"><a href="protfolio-details.html">Crosfit Tools</a></h4>
                        <p class="mb-25">Dictum faucibus felis, Feugiat varius facilisis</p>
                           </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                     <div class="services-item text-center wow fadeInUp mb-30" data-wow-delay="1.4s">
                        <div class="sv-inner sv-inner2">
                           <div class="services-icon">
                              <i class="flaticon-lawn-mower"></i>
                           </div>
                        </div>
                        <h4 class="services-item-title services-item-title-2 mb-20"><a href="protfolio-details.html">Body Building</a></h4>
                        <p class="mb-25">Varius facilisis Dictum faucibus feugiat facil</p>
                           </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- services-list-end -->

         <!-- tpcounter-area -->
         <div class="tpcounter-area">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="counter-lists">
                        <div class="row g-0">
                           <div class="col-lg-3 col-md-6">
                              <div class="counter-item counter-item-border">
                                 <div class="counter-number">
                                    <h4><span class="counter">330</span></h4>
                                 </div>
                                 <div class="counterinfo">
                                    <i class="flaticon-support"></i>
                                    <span>Expert Trainer</span>
                                 </div>
                                 <div class="counter-shape">
                                    <img src="assets/img/bg/counter-shape.png" alt="">
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="counter-item counter-item-border">
                                 <div class="counter-number">
                                    <h4><span class="counter">430</span></h4>
                                 </div>
                                 <div class="counterinfo">
                                    <i class="flaticon-feedback"></i>
                                    <span>Client Feedback</span>
                                 </div>
                                 <div class="counter-shape">
                                    <img src="assets/img/bg/counter-shape.png" alt="">
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="counter-item counter-item-border">
                                 <div class="counter-number">
                                    <h4><span class="counter">230</span></h4>
                                 </div>
                                 <div class="counterinfo">
                                    <i class="flaticon-kettlebells"></i>
                                    <span>Total Branches</span>
                                 </div>
                                 <div class="counter-shape">
                                    <img src="assets/img/bg/counter-shape.png" alt="">
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="counter-item">
                                 <div class="counter-number">
                                    <h4><span class="counter">540</span></h4>
                                 </div>
                                 <div class="counterinfo">
                                    <i class="flaticon-medal"></i>
                                    <span>Award Winning</span>
                                 </div>
                                 <div class="counter-shape">
                                    <img src="assets/img/bg/counter-shape.png" alt="">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- tpcounter-area-end -->

         <!-- fitness-gallery-area-start -->
         <!-- <div class="fitness-gallery-area">
            <div class="container">
               <div class="wow fadeInUp" data-wow-delay=".2s">
                  <div class="row justify-content-center align-items-center">
                     <div class="col-xl-6 col-lg-7">
                        <div class="section-wrap">
                           <span class="tpsub-title mb-15">Fitness gallery</span>
                           <h3 class="section-title mb-20">Solutions for moving better and feeling a healthier</h3>
                           <span class="section-border mb-30"><i class="far fa-circle"></i></span>
                        </div>
                     </div>
                     <div class="col-xl-4 col-lg-5">
                        <div class="fitness_button">
                           <a href="protfolio-details.html" class="tp-btn-round">All showcase <i class="fal fa-chevron-double-right"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="fitnes-gallery-shape">
               <img src="assets/img/protfolio/gallery-shape.png" class="img-fluid" alt="">
            </div>
            <div class="fitnes-gallery-shape-2">
               <img src="assets/img/protfolio/gallery-shape-2.png" class="img-fluid" alt="">
            </div>
            <div class="gallery-items fix">
               <div class="container-fluid">
                  <div class="row mt-55 gx-0">
                     <div class="col-xxl-12 gx-0">
                        <div class="fitness-slider_active owl-carousel">
                           <div class="fitness-item position-relative  wow flipInY" data-wow-delay=".3s"> 
                              <a href="protfolio-details.html"><img src="assets/img/protfolio/g-1.jpg" alt="" class="img-fluid"></a>
                              <div class="fitness-info">
                                 <div class="fitness-content">
                                    <span><a href="protfolio-details.html">Couple Fitness Workout</a></span>
                                    <p>Weight loss Program</p>
                                 </div>
                                 <div class="fitness-icon">
                                    <a href="protfolio-details.html" class="tp-btn-circle"><i class="fal fa-chevron-double-right"></i></a>
                                 </div>
                              </div>
                           </div>
                           <div class="fitness-item position-relative wow flipInY" data-wow-delay=".6s">
                              <a href="protfolio-details.html"><img src="assets/img/protfolio/g-3.jpg" alt="" class="img-fluid"></a>
                              <div class="fitness-info">
                                 <div class="fitness-content">
                                    <span><a href="protfolio-details.html">Couple Fitness Workout</a></span>
                                    <p>Weight loss Program</p>
                                 </div>
                                 <div class="fitness-icon">
                                    <a href="protfolio-details.html" class="tp-btn-circle"><i class="fal fa-chevron-double-right"></i></a>
                                 </div>
                              </div>
                           </div>
                           <div class="fitness-item position-relative wow flipInY" data-wow-delay=".9s">
                              <a href="protfolio-details.html"><img src="assets/img/protfolio/g-4.jpg" alt="" class="img-fluid"></a>
                              <div class="fitness-info">
                                 <div class="fitness-content">
                                    <span><a href="protfolio-details.html">Couple Fitness Workout</a></span>
                                    <p>Weight loss Program</p>
                                 </div>
                                 <div class="fitness-icon">
                                    <a href="protfolio-details.html" class="tp-btn-circle"><i class="fal fa-chevron-double-right"></i></a>
                                 </div>
                              </div>
                           </div>
                           <div class="fitness-item position-relative wow flipInY" data-wow-delay=".9s">
                              <a href="protfolio-details.html"><img src="assets/img/protfolio/g-5.jpg" alt="" class="img-fluid"></a>
                              <div class="fitness-info">
                                 <div class="fitness-content">
                                    <span><a href="protfolio-details.html">Couple Fitness Workout</a></span>
                                    <p>Weight loss Program</p>
                                 </div>
                                 <div class="fitness-icon">
                                    <a href="protfolio-details.html" class="tp-btn-circle"><i class="fal fa-chevron-double-right"></i></a>
                                 </div>
                              </div>
                           </div>
                           <div class="fitness-item position-relative wow flipInY" data-wow-delay=".9s">
                              <a href="protfolio-details.html"><img src="assets/img/protfolio/g-6.jpg" alt="" class="img-fluid"></a>
                              <div class="fitness-info">
                                 <div class="fitness-content">
                                    <span><a href="protfolio-details.html">Couple Fitness Workout</a></span>
                                    <p>Weight loss Program</p>
                                 </div>
                                 <div class="fitness-icon">
                                    <a href="protfolio-details.html" class="tp-btn-circle"><i class="fal fa-chevron-double-right"></i></a>
                                 </div>
                              </div>
                           </div>
                           <div class="fitness-item position-relative wow flipInY" data-wow-delay=".9s">
                              <a href="protfolio-details.html"><img src="assets/img/protfolio/g-7.jpg" alt="" class="img-fluid"></a>
                              <div class="fitness-info">
                                 <div class="fitness-content">
                                    <span><a href="protfolio-details.html">Couple Fitness Workout</a></span>
                                    <p>Weight loss Program</p>
                                 </div>
                                 <div class="fitness-icon">
                                    <a href="protfolio-details.html" class="tp-btn-circle"><i class="fal fa-chevron-double-right"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div> -->
         <!-- fitness-gallery-area-end -->

         <!-- schedule-area-start -->
         <!-- schedule-area-end -->
         
         <!-- video-area-start -->
         
         <!-- video-area-end -->

         <!-- choose-us-area-start -->
         <!-- <div class="choose-us-area pt-120 pb-65">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-xl-6 col-lg-6">
                     <div class="choose-iamge mb-30">
                        <img src="assets/img/bg/choose.jpg" alt="choose-img">
                     </div>
                  </div>
                  <div class="col-xl-6 col-lg-6">
                     <div class="choose-info">
                        <div class="section-wrap mb-35">
                           <span class="tpsub-title mb-15">Why choose us</span>
                           <h3 class="section-title mb-20">Make yourself stronger than your best excuses</h3>
                           <span class="section-border mb-30"><i class="far fa-circle"></i></span>
                        </div>
                        <div class="choose-list mb-40">
                           <div class="choose-icon-wrap">
                              <div class="choose-icon">
                                 <i class="flaticon-dumbbell"></i>
                              </div>
                           </div>
                           <div class="choose-content">
                              <h5>Cardio Exercise</h5>
                              <p>Sultan and interdu mmassa pellentesque mattis vulputate nam hyme lectus parturient accumsan.</p>
                           </div>
                        </div>
                        <div class="choose-list mb-40">
                           <div class="choose-icon-wrap">
                              <div class="choose-icon">
                                 <i class="flaticon-hand-grip"></i>
                              </div>
                           </div>
                           <div class="choose-content">
                              <h5>Cardio Exercise</h5>
                              <p>Lectus parturient pellentesque accumsan mattis vulputate nam hyme sultan and interdum massa.</p>
                           </div>
                        </div>
                        <div class="choose-list mb-40">
                           <div class="choose-icon-wrap">
                              <div class="choose-icon">
                                 <i class="flaticon-shirt"></i>
                              </div>
                           </div>
                           <div class="choose-content">
                              <h5>Cardio Exercise</h5>
                              <p>Vulputate nam massa pellentesque accumsan hyme lectus parturient sultan and interdum mattis.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div> -->
         <!-- choose-us-area-end -->

         <!-- trainer-area-start -->
         <div class="trainer-area pb-150 d-none">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-lg-10">
                     <div class="section-wrap-two text-center wow fadeInUp" data-wow-delay=".2s">
                        <span class="tpsub-title-two mb-15"><i class="far fa-circle"></i>Best Trainer<i class="far fa-circle"></i></span>
                        <h3 class="section-title-two  mb-30">Dedicated and professional trainer ready to supporting</h3>
                     </div>
                  </div>
               </div>
            </div>
            <div class="container">
               <div class="row mt-35">
                  <div class="col-xxl-3 col-lg-4 col-md-6">
                     <div class="trainer-single wow fadeInUp mb-30" data-wow-delay=".4s">
                        <div class="trainer-image">
                           <a href="team-details.html"><img src="assets/img/trainer/trainer-1.jpg" alt=""></a>
                        </div>
                        <div class="trainer-info">
                           <h5 class="trainer-name"><a href="team-details.html">Desert Antony</a></h5>
                           <p class="mb-20">Fitness Trainer</p>
                           <div class="trainer-soicial-icon">
                              <a href="#"><i class="fab fa-facebook-f"></i></a>
                              <a href="#"><i class="fab fa-twitter"></i></a>
                              <a href="#"><i class="fab fa-instagram"></i></a>
                              <a href="#"><i class="fab fa-google"></i></a>
                           </div>
                        </div>
                        <div class="trainer-btn">
                           <a href="team-details.html" class="tp-btn-square"><i class="fal fa-chevron-double-right"></i></a>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-3 col-lg-4 col-md-6">
                     <div class="trainer-single wow fadeInUp mb-30" data-wow-delay=".8s">
                        <div class="trainer-image">
                           <a href="team-details.html"><img src="assets/img/trainer/trainer-2.jpg" alt=""></a>
                        </div>
                        <div class="trainer-info">
                           <h5 class="trainer-name"><a href="team-details.html">Desert Antony</a></h5>
                           <p class="mb-20">Fitness Trainer</p>
                           <div class="trainer-soicial-icon">
                              <a href="#"><i class="fab fa-facebook-f"></i></a>
                              <a href="#"><i class="fab fa-twitter"></i></a>
                              <a href="#"><i class="fab fa-instagram"></i></a>
                              <a href="#"><i class="fab fa-google"></i></a>
                           </div>
                        </div>
                        <div class="trainer-btn">
                           <a href="team-details.html" class="tp-btn-square"><i class="fal fa-chevron-double-right"></i></a>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-3 col-lg-4 col-md-6">
                     <div class="trainer-single wow fadeInUp mb-30" data-wow-delay="1.2s">
                        <div class="trainer-image">
                           <a href="team-details.html"><img src="assets/img/trainer/trainer-3.jpg" alt=""></a>
                        </div>
                        <div class="trainer-info">
                           <h5 class="trainer-name"><a href="team-details.html">Desert Antony</a></h5>
                           <p class="mb-20">Fitness Trainer</p>
                           <div class="trainer-soicial-icon">
                              <a href="#"><i class="fab fa-facebook-f"></i></a>
                              <a href="#"><i class="fab fa-twitter"></i></a>
                              <a href="#"><i class="fab fa-instagram"></i></a>
                              <a href="#"><i class="fab fa-google"></i></a>
                           </div>
                        </div>
                        <div class="trainer-btn">
                           <a href="team-details.html" class="tp-btn-square"><i class="fal fa-chevron-double-right"></i></a>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-3 col-lg-4 col-md-6">
                     <div class="trainer-single wow fadeInUp mb-30" data-wow-delay="1.4s">
                        <div class="trainer-image">
                           <a href="team-details.html"><img src="assets/img/trainer/trainer-4.jpg" alt=""></a>
                        </div>
                        <div class="trainer-info">
                           <h5 class="trainer-name"><a href="team-details.html">Desert Antony</a></h5>
                           <p class="mb-20">Fitness Trainer</p>
                           <div class="trainer-soicial-icon">
                              <a href="#"><i class="fab fa-facebook-f"></i></a>
                              <a href="#"><i class="fab fa-twitter"></i></a>
                              <a href="#"><i class="fab fa-instagram"></i></a>
                              <a href="#"><i class="fab fa-google"></i></a>
                           </div>
                        </div>
                        <div class="trainer-btn">
                           <a href="team-details.html" class="tp-btn-square"><i class="fal fa-chevron-double-right"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- trainer-area-end -->

         <!-- company-static-area-start -->
         <div class="company-static-area" data-background="assets/img/bg/static-bg.jpg"> 
            <div class="container custome-container">
               <div class="row justify-content-center align-items-center">
                  <div class="col-xl-7 col-lg-5 col-md-12">
                     <div class="section-wrap">
                        <span class="tpsub-title mb-15">company statics</span>
                        <h3 class="section-title mb-20">Everything you want outside your comfort zone</h3>
                        <span class="section-border mb-20"><i class="far fa-circle"></i></span>
                        <p class="section-description mb-30">Duis nunc sodales conubia a laoreet aliquet on nostra eleifend lacinia prasent hendrerit quisque penatibus erat a pulvina integer semper ridiculus lectus con dimentum obor tise verodar capmtaso morin</p>
                     </div>
                     <div class="tp-skill--content">
                        <div class="tp-skill__wrapper mb-25 fix">
                            <div class="tp-skill--title__wrapper">
                                <h5 class="tp-skill--title">Client Satisfaction</h5>
                            </div>
                           <div class="progress">
                              <div class="progress-bar wow slideInLeft" data-wow-duration="1s" data-wow-delay=".3s" role="progressbar" data-width="90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"><span>90%</span></div>
                           </div>
                        </div>
                        <div class="tp-skill__wrapper mb-30 fix">
                            <div class="tp-skill--title__wrapper">
                                <h5 class="tp-skill--title">Support Customer</h5>
                            </div>
                            <div class="progress progress-two">
                              <div class="progress-bar-two progress-bar wow slideInLeft" data-wow-duration="1s" data-wow-delay=".3s" role="progressbar" data-width="70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"><span>70%</span></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-5 col-lg-7 col-md-12">
                     <div class="tp-calculate mb-30">
                        <form action="#" class="calculate-form-wrapper">
                           <h3 class="tp-calculate-form-title mb-30">BMI Calculator</h3>
                           <div class="input-field mb-15">
                                <input type="text" placeholder="Height">
                           </div>
                           <div class="input-field mb-15">
                                <input type="text" placeholder="Weight">
                           </div>
                           <div class="input-field select-field-arrow mb-15 p-relative">
                                <select>
                                    <option value="" disabled selected hidden>Gender</option>
                                    <option value="">Male</option>
                                    <option value="">Female</option>
                                    <option value="">Other</option>
                                </select>
                           </div>
                           <div class="input-field mb-15">
                              <input type="text" placeholder="Age">
                           </div>
                           <div class="input-field mb-15">
                                 <input type="text" placeholder="Inches">
                           </div>
                           <div class="input-field">
                                <button type="submit" class="calculate-btn"> Calculate now <i class="fal fa-chevron-double-right"></i></button>
                           </div>
                        </form>
                    </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- company-static-area-end -->

         <!-- testimonial-area-start -->
         <!-- <div class="testimonial-area">
            <div class="container">
               <div class="pt-120 pb-115" data-background="assets/img/testimonial/testimonial-bg.png">
                  <div class="row justify-content-center">
                     <div class="col-xxl-10 col-xl-11 col-lg-12">
                        <div class="swiper-container testimonial_active">
                           <div class="testimonial-wrapper swiper-wrapper wow fadeInUp" data-wow-delay=".4s">
                              <div class="testimonial-slider-item swiper-slide text-center">
                                 <div class="tesimonial-quote mb-60">
                                    <img src="assets/img/testimonial/testimoinal-quote.png" alt="">
                                 </div>
                                 <div class="testimonial-info">
                                    <p class="testimonial_description pb-50">Eleifend dis luctus be hace sociis porta sociosqu praesent lobortis tortor augue enim muse saoreet aenean litorace uterns dictum dolor convallis urnan erose nulla semper elementum primis tempor enim hac ante id sagittis suscipit nunc per luctus lacus utern aliquet nase vele anic scelerisque dus dapibus feugiat scelerisque metre</p>
                                    <h5 class="client-name">Calwen Synton</h5>
                                    <span class="client-degination">Sr Designer</span>
                                 </div>
                              </div>
                              <div class="testimonial-slider-item swiper-slide text-center">
                                 <div class="tesimonial-quote mb-60">
                                    <img src="assets/img/testimonial/testimoinal-quote.png" alt="">
                                 </div>
                                 <div class="testimonial-info">
                                    <p class="testimonial_description pb-50">Sagittis suscipit nunc per luctus lacus utern aliquet nase vele anic scelerisque dus dapibus feugiat scelerisque metre. eleifend dis luctus be hace sociis porta sociosqu praesent lobortis tortor augue enim muse saoreet aenean litorace uterns dictum dolor convallis urnan erose nulla semper elementum primis tempor enim hac ante id.</p>
                                    <h5 class="client-name">Andrew Jekson</h5>
                                    <span class="client-degination">Sr Devloper</span>
                                 </div>
                              </div>
                              <div class="testimonial-slider-item swiper-slide text-center">
                                 <div class="tesimonial-quote mb-60">
                                    <img src="assets/img/testimonial/testimoinal-quote.png" alt="">
                                 </div>
                                 <div class="testimonial-info">
                                    <p class="testimonial_description pb-50">Suscipit elementum sagittis nunc per luctus lacus utern aliquet nase vele anic scelerisque dus dapibus feugiat scelerisque metre. eleifend dis luctus be hace sociis porta sociosqu praesent lobortis tortor augue enim muse saoreet aenean litorace uterns dictum dolor urnan erose nulla semper  primis tempor enim hac ante id convallis.</p>
                                    <h5 class="client-name">Synton Calwen</h5>
                                    <span class="client-degination">Sr Designer</span>
                                 </div>
                              </div>
                           </div>
                           <!-- If we need navigation buttons -->
                           <div class="swiper-button-prev ts-button ts-button-prev"></div>
                           <div class="swiper-button-next ts-button ts-button-next"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div> -->
         <!-- testimonial-area-end -->

         <!-- priceing-area-start -->
         <!-- <div class="priceing-area pt-115 pb-90">
            <div class="container custome-container">
               <div class="row justify-content-center">
                  <div class="col-lg-12">
                     <div class="section-wrap-two text-center wow fadeInUp" data-wow-delay=".3s">
                        <span class="tpsub-title-two mb-15"><i class="far fa-circle"></i>Pricing plan<i class="far fa-circle"></i></span>
                        <h3 class="section-title-two  mb-30">Comportable Pricing package and choose your best plan</h3>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tp_priceing">
               <div class="container custome-container mt-35">
                  <div class="row justify-content-center">
                     <div class="row">
                        <div class="col-lg-4 col-md-6">
                           <div class="price_item mb-30 wow fadeInUp" data-wow-delay=".6s">
                              <div class="priceing_image mb-10">
                                 <img src="assets/img/priceing/price1.jpg" alt="" class="img-fluid">
                              </div>
                              <div class="price_info pt-80" data-background="assets/img/priceing/price-bg.png">
                                 <div class="price text-center">
                                    <div class="inner">
                                       <h5>$35</h5>
                                       <p>Monthly</p>
                                    </div>
                                 </div>
                                 <h5 class="price_type mb-20 text-center">Standard</h5>
                                 <div class="tp_pricing-list pb-45">
                                    <ul>
                                       <li><i class="fal fa-check"></i> Personal Trainer</li>
                                       <li><i class="fal fa-check"></i> Special Meditation</li>
                                       <li><i class="fal fa-check"></i> Using all Tools</li>
                                       <li><i class="fal fa-check"></i> 24 Hour Services</li>
                                    </ul>
                                 </div>
                                 <div class="price-btn text-center pb-30">
                                    <a href="price.html" class="tp-btn-round">join today <i class="fal fa-chevron-double-right"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                           <div class="price_item mb-30 wow fadeInUp" data-wow-delay=".9s">
                              <div class="priceing_image priceing_image-active mb-10 ">
                                 <img src="assets/img/priceing/price2.jpg" alt="" class="img-fluid">

                                 <div class="price__popular">
                                    <span>popular</span>
                                 </div>

                              </div>
                              <div class="price_info pt-80" data-background="assets/img/priceing/price-bg2.png">
                                 <div class="price price-active text-center">
                                    <div class="inner">
                                       <h5>$40</h5>
                                       <p>Monthly</p>
                                    </div>
                                 </div>
                                 <h5 class="price_type price_type-active mb-20 text-center">Premium</h5>
                                 <div class="tp_pricing-list tp_pricing-list-active pb-45">
                                    <ul>
                                       <li><i class="fal fa-check"></i> Personal Trainer</li>
                                       <li><i class="fal fa-check"></i> Special Meditation</li>
                                       <li><i class="fal fa-check"></i> Using all Tools</li>
                                       <li><i class="fal fa-check"></i> 24 Hour Services</li>
                                    </ul>
                                 </div>
                                 <div class="price-btn text-center pb-30">
                                    <a href="price.html" class="tp-btn-round servic_btn-active">join today <i class="fal fa-chevron-double-right"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                           <div class="price_item mb-30 wow fadeInUp" data-wow-delay="1.2s">
                              <div class="priceing_image mb-10">
                                 <img src="assets/img/priceing/price3.jpg" alt="" class="img-fluid">
                              </div>
                              <div class="price_info pt-80" data-background="assets/img/priceing/price-bg.png">
                                 <div class="price text-center">
                                    <div class="inner">
                                       <h5>$45</h5>
                                       <p>Monthly</p>
                                    </div>
                                 </div>
                                 <h5 class="price_type mb-20 text-center">Platinum</h5>
                                 <div class="tp_pricing-list pb-45">
                                    <ul>
                                       <li><i class="fal fa-check"></i> Personal Trainer</li>
                                       <li><i class="fal fa-check"></i> Special Meditation</li>
                                       <li><i class="fal fa-check"></i> Using all Tools</li>
                                       <li><i class="fal fa-check"></i> 24 Hour Services</li>
                                    </ul>
                                 </div>
                                 <div class="price-btn text-center pb-30">
                                    <a href="price.html" class="tp-btn-round">join today <i class="fal fa-chevron-double-right"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="pricing-shape fix">
               <img src="assets/img/priceing/price-shape1.png" alt="">
            </div>
            <div class="pricing-shape-two fix">
               <img src="assets/img/priceing/price-shape2.png" alt="">
            </div>
            <div class="pricing-shape-three fix">
               <img src="assets/img/priceing/price-shape3.png" alt="">
            </div>
         </div> -->
         <!-- priceing-area-end -->

         <!-- priceing-area-start -->
         <!-- <div class="product-area pt-115 pb-80" data-background="assets/img/product/product-bg.jpg">
            <div class="container custome-container">
               <div class="row justify-content-center align-items-center">
                  <div class="row align-items-center">
                     <div class="col-lg-6">
                        <div class="section-wrap">
                           <span class="tpsub-title mb-15">our goods</span>
                           <h3 class="section-title mb-20">Quality products buying our online gym store</h3>
                           <span class="section-border mb-30"><i class="far fa-circle"></i></span>
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="shop_button text-lg-end"><a href="shop.html" class="tp-btn-round">All products <i class="fal fa-chevron-double-right"></i></a></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="container custome-container mt-30">
               <div class="row">
                  <div class="col-lg-4 col-md-6">
                     <div class="product-item mb-30 wow fadeInUp" data-wow-delay=".3s">
                        <div class="prouct-wrapper">
                           <div class="product_thum product_thum-new mb-30">
                              <div class="fix">
                                 <a href="shop-details.html"><img src="assets/img/product/product-1.jpg" class="img-fluid" alt="product-img"></a>
                              </div>
                              <div class="sale-tag">
                                 <span class="new">new</span>
                              </div>
                              <div class="product-item-action">
                                 <a href="wishlist.html"><i class="far fa-heart"></i></a>
                                 <a href="assets/img/product/product-1.jpg" class="image-popups"><i class="fas fa-compress"></i></a>
                                 <a href="checkout.html"><i class="far fa-exchange"></i></a>
                              </div>
                           </div>
                           <div class="product-content">
                              <div class="product-info">
                                 <h5 class="product_name"><a href="shop-details.html">Boxing Glove</a></h5>
                                 <span class="product_price">$508.00</span>
                              </div>
                              <div class="product-button">
                                 <a href="shop-details.html" class="tp-btn-round-product">buy now <i class="fal fa-chevron-double-right"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                     <div class="product-item mb-30 wow fadeInUp" data-wow-delay=".6s">
                        <div class="prouct-wrapper">
                           <div class="product_thum mb-30">
                              <div class="fix"><a href="shop-details.html"><img src="assets/img/product/product-2.jpg" class="img-fluid" alt="product-img"></a></div>
                              <div class="product-item-action">
                                 <a href="wishlist.html"><i class="far fa-heart"></i></a>
                                 <a href="assets/img/product/product-2.jpg" class="image-popups"><i class="fas fa-compress"></i></a>
                                 <a href="checkout.html"><i class="far fa-exchange"></i></a>
                              </div>
                           </div>
                           <div class="product-content">
                              <div class="product-info">
                                 <h5 class="product_name"><a href="shop-details.html">Fitness Grip</a></h5>
                                 <span class="product_price">$408.00</span>
                              </div>
                              <div class="product-button">
                                 <a href="shop-details.html" class="tp-btn-round-product">buy now <i class="fal fa-chevron-double-right"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                     <div class="product-item mb-30 wow fadeInUp" data-wow-delay=".9s">
                        <div class="prouct-wrapper">
                           <div class="product_thum product_thum-new mb-30">
                              <div class="fix">
                                 <a href="shop-details.html"><img src="assets/img/product/product-3.jpg" class="img-fluid" alt="product-img"></a>
                              </div>
                              <div class="sale-tag">
                                 <span class="new">new</span>
                             </div>
                              <div class="product-item-action">
                                 <a href="wishlist.html"><i class="far fa-heart"></i></a>
                                 <a href="assets/img/product/product-3.jpg" class="image-popups"><i class="fas fa-compress"></i></a>
                                 <a href="checkout.html"><i class="far fa-exchange"></i></a>
                              </div>
                           </div>
                           <div class="product-content">
                              <div class="product-info">
                                 <h5 class="product_name"><a href="shop-details.html">Hand Dumbell</a></h5>
                                 <span class="product_price">$608.00</span>
                              </div>
                              <div class="product-button">
                                 <a href="shop-details.html" class="tp-btn-round-product">buy now <i class="fal fa-chevron-double-right"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div> -->
         <!-- priceing-area-end -->

         <!-- blog-area -->
         <!-- <div class="blog-area pt-115 pb-120">
            <div class="container custome-container">
               <div class="row justify-content-center">
                  <div class="col-lg-12">
                     <div class="section-wrap-two text-center">
                        <span class="tpsub-title-two mb-15"><i class="far fa-circle"></i>recent article<i class="far fa-circle"></i></span>
                        <h3 class="section-title-two  mb-30">Every single update and story from our journal</h3>
                     </div>
                  </div>
               </div>
            </div>
            <div class="container mt-30 custome-container">
               <div class="row justify-content-center">
                  <div class="blog__slider-inner p-relative">
                     <div class="blog-slider_active swiper-container wow fadeInUp" data-wow-delay=".4s">
                        <div class="blog-slider_wrapper swiper-wrapper">
                           <div class="bolg_slider_item swiper-slide">
                              <div class="row g-0">
                                 <div class="col-lg-6">
                                    <div class="blog-image">
                                       <a href="blog-details.html"><img src="assets/img/blog/blog-1.jpg" class="img-fluid" alt="blog-img"></a>
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="blog_content mt-85" data-background="assets/img/blog/blog-bg.jpg">
                                       <div class="blog-info">
                                          <div class="blog__meta mb-15">
                                             <span><a href="#"><i class="far fa-bookmark"></i>Fitness Workout</a></span>
                                             <span><a href="#"><i class="far fa-comments"></i> 02 Comment</a></span>
                                          </div>
                                          <h5 class="blog_title mb-20"><a href="blog-details.html">Risus purus namien parturient accumsan cacus pulvinar magna.</a></h5>
                                          <p class="mb-40">Tincidunt litora eget pulvinar fringilla rhoncus cuirae tristique, tortor orci Etiam auctor torquent vel tortor porta class natoque est luctus at rutrum ipsum porttitor viverra in curabitur conubia non vivamus hymenaeos enim suscipit.</p>
                                          <div class="blog-button">
                                             <a href="blog-details.html" class="tp-btn-round">Read More <i class="fal fa-chevron-double-right"></i></a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="bolg_slider_item swiper-slide">
                              <div class="row g-0">
                                 <div class="col-lg-6">
                                    <div class="blog-image">
                                       <a href="blog-details.html"><img src="assets/img/blog/blog-2.jpg" class="img-fluid" alt="blog-img"></a>
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="blog_content mt-85" data-background="assets/img/blog/blog-bg.jpg">
                                       <div class="blog-info">
                                          <div class="blog__meta mb-15">
                                             <span><a href="#"><i class="far fa-bookmark"></i>Fitness Workout</a></span>
                                             <span><a href="#"><i class="far fa-comments"></i> 02 Comment</a></span>
                                          </div>
                                          <h5 class="blog_title mb-20"><a href="blog-details.html">Parturient accumsan cacus pulvinar magna, Risus purus namien.</a></h5>
                                          <p class="mb-40">Fringilla rhoncus cuirae tristique tincidunt litora eget pulvinar, tortor orci Etiam auctor torquent vel tortor porta class natoque est luctus at rutrum ipsum porttitor viverra in curabitur conubia non vivamus hymenaeos enim suscipit.</p>
                                          <div class="blog-button">
                                             <a href="blog-details.html" class="tp-btn-round">Read More <i class="fal fa-chevron-double-right"></i></a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="bolg_slider_item swiper-slide">
                              <div class="row g-0">
                                 <div class="col-lg-6">
                                    <div class="blog-image">
                                       <a href="blog-details.html"><img src="assets/img/blog/blog-3.jpg" class="img-fluid" alt="blog-img"></a>
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="blog_content mt-85" data-background="assets/img/blog/blog-bg.jpg">
                                       <div class="blog-info">
                                          <div class="blog__meta mb-15">
                                             <span><a href="#"><i class="far fa-bookmark"></i>Fitness Workout</a></span>
                                             <span><a href="#"><i class="far fa-comments"></i> 02 Comment</a></span>
                                          </div>
                                          <h5 class="blog_title mb-20">
                                             <a href="blog-details.html">Going to the gym for the first time doesn’t need to be daunting</a>
                                          </h5>
                                          <p class="mb-40">Etiam auctor torquent vel tortor porta class natoque est luctus at rutrum ipsum porttitor viverra in curabitur conubia non vivamus hymenaeos enim suscipit. Fringilla rhoncus cuirae tristique tincidunt litora eget pulvinar orci.</p>
                                          <div class="blog-button">
                                             <a href="blog-details.html" class="tp-btn-round">Read More <i class="fal fa-chevron-double-right"></i></a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     If we need navigation buttons -->
                     <div class="swiper-button-prev bs-button bs-button-prev"><i class="far fa-long-arrow-left"></i></div>
                     <div class="swiper-button-next bs-button bs-button-next"><i class="far fa-long-arrow-right"></i></div>
                  </div>
               </div>
            </div>
         </div> -->
         <!-- blog-area-end -->

      </main>

      <!-- footer-area-start -->
      <?php include_once('include/footer.php') ?>
      <!-- footer-area-end -->


      <!-- modal-search-start -->
      <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
         <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"></span>
         </button>
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <form>
                     <input type="text" placeholder="Search here...">
                     <button>
                        <i class="fa fa-search"></i>
                     </button>
               </form>
            </div>
         </div>
      </div>


      <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
      <script src="assets/js/vendor/waypoints.min.js"></script>
      <script src="assets/js/bootstrap.bundle.min.js"></script>
      <script src="assets/js/meanmenu.js"></script>
      <script src="assets/js/swiper-bundle.min.js"></script>
      <script src="assets/js/owl.carousel.min.js"></script>
      <script src="assets/js/magnific-popup.min.js"></script>
      <script src="assets/js/parallax.min.js"></script>
      <script src="assets/js/backToTop.js"></script>
      <script src="assets/js/nice-select.min.js"></script>
      <script src="assets/js/counterup.min.js"></script>
      <script src="assets/js/ajax-form.js"></script>
      <script src="assets/js/wow.min.js"></script>
      <script src="assets/js/isotope.pkgd.min.js"></script>
      <script src="assets/js/imagesloaded.pkgd.min.js"></script>
      <script src="assets/js/main.js"></script>
      
   </body>
</html>
