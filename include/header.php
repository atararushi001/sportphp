<?php
require_once("include/config.php");
session_start();
?>
<style>

ul {
  margin: 0;
  padding: 0;
  display: flex;
  align-items: center;
  gap: 3rem;
}

li {
  list-style-type: none;
  position: relative;
  padding: 0.625rem 0 0.5rem;
}
li ul {
  flex-direction: column;
  position: absolute;
  background-color: white;
  align-items: flex-start;
  transition: all 0.5s ease;
  width: 20rem;
  right: -3rem;
  top: 4.5rem;
  border-radius: 0.325rem;
  gap: 0;
  padding: 1rem 0rem;
  opacity: 0;
  box-shadow: 0px 0px 100px rgba(20, 18, 18, 0.25);
  display: none;
}

ul li:hover > ul,
ul li ul:hover {
  visibility: visible;
  opacity: 1;
  display: flex;
}

.material-icons-outlined {
  color: #888888;
  transition: all 0.3s ease-out;
}

.material-icons-outlined:hover {
  color: #ff9800;
  transform: scale(1.25) translateY(-4px);
  cursor: pointer;
}


.profile {
  height: 3rem;
  width: auto;
  cursor: pointer;
}

.sub-item {
  width: 100%;
  display: flex;
  align-items: center;
  gap: 0.725rem;
  cursor: pointer;
  padding: 0.5rem 1.5rem;
}

.sub-item:hover {
  background-color: rgba(232, 232, 232, 0.4);
}

.sub-item:hover .material-icons-outlined {
  color: #ff9800;
  transform: scale(1.08) translateY(-2px);
  cursor: pointer;
}

.sub-item:hover p {
  color: #000;
  cursor: pointer;
}

.sub-item p {
  font-size: 0.85rem;
  color: #888888;
  font-weight: 500;
  margin: 0.4rem 0;
  flex: 1;
}
   </style>
<header class="top-nav">
         <div class="top-address d-none d-lg-block">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-xxl-7 col-xl-5 col-lg-4 col-md-3">
                     <div class="top-logo">
                        <a href="#"><img src="assets/img/logo/logo.png" alt=""></a>
                     </div>
                  </div>
                  <div class="col-xxl-5 col-xl-7 col-lg-8 col-md-9">
                     <div class="topbar-info">
                        <div class="contact-item">
                           <i class="flaticon-pin"></i>
                           <div class="content">
                              <p>Our Location</p>
                              <a href="https://www.google.com/maps/search/25%2F7+Barden,+London/@51.5287718,-0.2416803,11z/data=!3m1!4b1" target="blank">Rku hostel</a>
                           </div>
                        </div>
                        <div class="contact-item">
                           <i class="flaticon-email"></i>
                           <div class="content">
                              <p>Online Support</p>
                              <a href="mailto:rkugym@rku.ac.in">rkugym@rku.ac.in</a>
                           </div>
                        </div>
                        <div class="contact-item">
                           <i class="flaticon-contact"></i>
                           <div class="content">
                              <p>Free Contact</p>
                              <a href="tel:7984648758">7984648758</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="menu-area" id="header-sticky">
            <div class="container">
               <div class="row align-items-center justify-content-center">
                  <div class="col-xxl-12 col-xl-12 col-lg-12">
                     <!-- <div class="topcontact-btn f-right d-none d-lg-block">
                        <div class="contact-btn">
                           <a href="contact.html" class="top-btn">Contact Us <i class="fal fa-chevron-double-right"></i></a>
                        </div>
                     </div> -->
                     <div class="menu-content" style="width:100%;">
                        <div class="top-logo d-lg-none">
                           <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                        </div>
                        <div class="main-menu">
                           <nav id="mobile-menu">
                              <ul>
                                 <li><a href="index.php" class="active">Home </a></li>
                                 <!-- <li><a href="about.php">About </a></li>
                            -->
                            <li><a href="contact.php">Contact </a></li>
                            <li><a href="schedule.php">our schedule </a></li>   
                            <?php if(!isset($_SESSION['uid'])){ ?>
                                 <li><a href="register.php">register  </a>
                                 </li>   
                                 <li><a href="login.php">login </a>
                                 </li> 
                                 
                                 <?php }else{  ?> 
                                    <li> <a href="editprofile.php">Update Profile</a></li>
                                       <li> <a href="logout.php">Logout</a></li>
                                 <li>
                                    
                                 <!-- <a href="about.html" class="active" style="padding: 0px;"><img src="assets\img\logo\logo.png" class="rounded-circle profile"  /> </a>
                                    <ul class="sub-menu">
                                       <li> <a href="editprofile.php">Update Profile</a></li>
                                       <li> <a href="logout.php">Logout</a></li>
                                       </ul>
                                 </li> -->
                                 <?php  } ?> 
                                

                    

                           
                           </nav>
                        </div>
                                 
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>