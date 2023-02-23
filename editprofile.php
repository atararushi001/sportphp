
<!doctype html>
<html class="no-js" lang="zxx">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Futexo | Gym &amp; Fitness HTML Template</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
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
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
   </head>
   <body>
      <div id="preloader">
         <div class="preloader">
            <span></span>
            <span></span>
         </div>
      </div>
      <div class="progress-wrap">
         <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
         </svg>
      </div>
      <?php include_once('include/header.php') ?>
      
      <?php
 if(!isset($_SESSION['uid'])){ 
   header("location:login.php");
}else{
$userid=$_SESSION['uid'];
$sql="SELECT * FROM `user` WHERE `user_id` = '$userid'"; 
$result = $con->query($sql);
$user_data =  $result->fetch_assoc();

}
?>
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
      <!-- body-overlay -->

      <main>

         <!-- page__title-start -->
         <div class="page__title align-items-center" data-background="assets/img/bg/breadcam-bg.jpg">
            <div class="container">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="page__title-content text-center">
                        <h3 class="breadcrumb-title breadcrumb-title-sd d-block">update profile </h3>
                        <div class="page_title__bread-crumb">
                        <nav>
                           <nav class="breadcrumb-trail breadcrumbs">
                              <ul class="breadcrumb-menu d-block" style="display:block;">
                                 <li class="breadcrumb-trail">
                                    <a href="index.html"><span>Home</span></a>
                                 </li>
                                 <li class="trail-item">
                                    <span>update profile here </span>
                                 </li>
                              </ul>
                           </nav> 
                        </nav>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- page__title-end -->

         <!-- coupon-area-start -->
         <div class="coupon-area pt-120 pb-70">
            <div class="container">
            <div class="row">
           
          
            </div>
        </div>
         </div>
         <!-- coupon-area-end -->

         <!-- checkout-area-start -->
         <div class="checkout-area pb-85">
            <div class="container">
                <form action="include/function.php" method="post" >
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="checkbox-form">
                                <h3>Billing Details</h3>
                                <div class="row">
                                   <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>First Name <span class="required">*</span></label>
                                            <input type="text" placeholder="Enter fist name" name="fname" value="<?php echo $user_data['fname']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Last Name <span class="required">*</span></label>
                                            <input type="text" placeholder="Enter last name" name="laname" value="<?php echo $user_data['lname']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Enrollment number</label>
                                            <input type="text" placeholder="Enter Enrollment number" name="enroll" value="<?php echo $user_data['enroll']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>branch</label>
                                            <input type="text" placeholder="Enter your branch" name="branch" value="<?php echo $user_data['branch']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Address <span class="required">*</span></label>
                                            <input type="text" placeholder="Street address" name="address" value="<?php echo $user_data['address']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list" >
                                            <label>Country<span class="required">*</span></label>
                                            <select onChange="getstate(this.value);"  name="country" id="country"  class="form-control">
                                            <?php 
                                            
                                            $query =mysqli_query($con,"SELECT * FROM country");
                                                    while($row=mysqli_fetch_array($query))
                                                    {   if($user_data['country'] ==  $row['id']){
                                                       ?>
                                                       <option value="<?php echo $row['id'];?>" selected><?php echo $row['name'];?></option>
                                                    <?php
                                                    }else {
                                                   
                                                    ?>
                                                        <option value="<?php echo $row['id'];?>"><?php echo $row['name'];?></option>
                                                    <?php }} ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>State <span class="required">*</span></label>
                                                <select name="statelist" id="statelist" onChange="getcity(this.value);"  class="form-control">
                                              <?php 
                                            
                                            $query =mysqli_query($con,"SELECT * FROM states");
                                                    while($row=mysqli_fetch_array($query))
                                                    {   if($user_data['state'] ==  $row['id']){
                                                       ?>
                                                       <option value="<?php echo $row['id'];?>" selected><?php echo $row['name'];?></option>
                                                    <?php
                                                    }else {
                                                   
                                                    ?>
                                                        <option value="<?php echo $row['id'];?>"><?php echo $row['name'];?></option>
                                                    <?php }} ?>
                                                </select>
                                        </div>
                                    </div>
                                   
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Town / City <span class="required">*</span></label>
                                            <select name="city" id="city" class="form-control">
                                            <?php 
                                            
                                            $query =mysqli_query($con,"SELECT * FROM city");
                                                    while($row=mysqli_fetch_array($query))
                                                    {   if($user_data['city'] ==  $row['id']){
                                                       ?>
                                                       <option value="<?php echo $row['id'];?>" selected><?php echo $row['name'];?></option>
                                                    <?php
                                                    }else {
                                                   
                                                    ?>
                                                        <option value="<?php echo $row['id'];?>"><?php echo $row['name'];?></option>
                                                    <?php }} ?>
                                            </select>
                                        </div>
                                    </div>
                                   
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Email Address <span class="required">*</span></label>
                                            <input type="email" placeholder="Enter your Email " name="email" value="<?php echo $user_data['email']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Phone <span class="required">*</span></label>
                                            <input type="text" placeholder="Your Phone number" name="phone" value="<?php echo $user_data['phone']; ?>"> 
                                        </div>
                                    </div>
                                  
                                  
                                </div>
                            
                            </div>
                        </div>
                                    <div class="order-button-payment mt-20">
                                    <button type="submit" name="update" class="tp-btn-square-lg">Update</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
         </div>
         <!-- checkout-area-end -->

      </main>

      <!-- footer-area-start -->
      <?php include_once('include/footer.php') ?>
       
      <!-- footer-area-end -->

      <!-- modal-search-start -->
      <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
         <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
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
      <!-- modal-search-end -->

      <script>
function getstate(val) {
	//alert(val);
	$.ajax({
	type: "POST",
	url: "get_state.php",
	data:'coutrycode='+val,
	success: function(data){
		$("#statelist").html(data);
	}
	});
}

function getcity(val) {
	//alert(val);
	$.ajax({
	type: "POST",
	url: "get_city.php",
	data:'statecode='+val,
	success: function(data){
		$("#city").html(data);
	}
	});
}
</script>	
      <!-- JS here -->
      <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
      <script src="assets/js/vendor/waypoints.min.js"></script>
      <script src="assets/js/bootstrap.bundle.min.js"></script>
      <script src="assets/js/meanmenu.js"></script>
      <script src="assets/js/swiper-bundle.min.js"></script>
      <script src="assets/js/owl.carousel.min.js"></script>
      <script src="assets/js/magnific-popup.min.js"></script>
      <script src="assets/js/parallax.min.js"></script>
      <script src="assets/js/backToTop.js"></script>
      <script src="assets/js/counterup.min.js"></script>
      <script src="assets/js/ajax-form.js"></script>
      <script src="assets/js/wow.min.js"></script>
      <script src="assets/js/isotope.pkgd.min.js"></script>
      <script src="assets/js/imagesloaded.pkgd.min.js"></script>
      <script src="assets/js/main.js"></script>
   </body>
</html>
