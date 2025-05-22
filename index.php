<?php
      include('db_con.php');

      $result = mysqli_query($con, "SELECT * FROM add_banner");
      
?>
<!DOCTYPE html>
<html lang="en">
   

<head>
      <!-- required meta -->
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- #favicon -->
      <link rel="shortcut icon" href="assets\images\bridge house.svg" type="image/x-icon">
      <link rel="icon" href="assets\images\bridge house.svg" type="image/x-icon">
      <!-- #title -->
      <title>Bridge House | Home</title>
      <!-- #keywords -->
      <meta name="keywords" content="">
      <!-- #description -->
      <meta name="description" content="">
      <!-- google fonts -->
      <link rel="preconnect" href="https://fonts.googleapis.com/">
      <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
      <!-- color themes -->
      <link rel="stylesheet" href="assets/css/blue-theme.css" id="switch-color">
      <!-- <link rel="stylesheet" href="assets/font/flaticon_flaticons.css"> -->
      <!-- main css -->
      <link rel="stylesheet" href="assets/css/main.css">
      <!-- responsive css -->
      <link rel="stylesheet" href="assets/css/responsive.css">
      <script src="assets/js/jquery-3.7.1.min.js"></script>
   </head>
   <body>
     
      <div class="page-wrapper">
         <!-- preloader start -->
        <div class="preloader"></div>
        <!-- / preloader start -->

         <!-- ==== header start ==== -->
         <div id="header">
            <?php
                  include('header.php');
            ?>
          </div>
         <!-- ==== / header end ==== -->
         <!-- ==== banner start ==== -->
         <section class="banner">
            <div class="banner__slider swiper">
               <div class="swiper-wrapper">
                  <?php while($row=mysqli_fetch_assoc($result)) {?>
                  <div class="swiper-slide">
                     <div class="banner__slider-single">
                        <div class="banner__slider-inner" data-background="admin/<?php echo $row['image_path']; ?>"></div>
                        <div class="container">
                           <div class="row justify-content-end">
                              <div class="col-12 col-lg-10 col-xl-8">
                                 <div class="banner__slider-content">
                                    
                                    <h1><?php echo $row['title']; ?>
                                    </h1>
                                   
                                    </p>
                                    <div class="banner__slider-cta">
                                       <a href="https://landsquaretownships.in/projects.php" class="btn--primary">Our Projects</a>
                                       <a href="https://landsquaretownships.in/about-us.php" class="btn--secondary">About Us</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                 <?php } ?>
               </div>
               <div class="slider-navigation d-none d-lg-flex">
                  <button type="button" aria-label="next slide" title="next slide" class="next-banner slider-btn">
                  <i class="fa-solid fa-angle-left"></i>
                  </button>
                  <button type="button" aria-label="prev slide" title="prev slide" class="prev-banner slider-btn">
                  <i class="fa-solid fa-angle-right"></i>
                  </button>
               </div>
            </div>
         </section>
         <!-- ==== / banner end ==== -->
         <!-- ==== / search-property end ==== -->
         <!-- ==== about us section start ==== -->
         <section class="about">
            <div class="container">
               <div class="row vertical-column-gap-lg">
                  <div class="col-12 col-xl-6">
                     <div class="about__content">
                        <div class="section__header">
                           <span>About Us</span>
                           <h2 class="title-animation">Welcome To Bridge House
                           </h2>
                           <div class="icon-thumb">
                              <div class="icon-thumb-single">
                                 <span></span>
                                 <span></span>
                              </div>
                              <img src="assets/images/sub-icon.png" alt="Image" class="filter-img">
                           </div>
                        </div>
                        <div class="about__content-inner">
                           <p>Landsquare Townships Private Limited is a real estate development company incorporated on 20th September 2018. Based in Lucknow, Uttar Pradesh, the company specializes in the buying, selling, renting, and operating of self-owned or leased real estate. This includes residential and commercial properties, land development, and the subdivision of real estate into smaller lots. Landsquare Townships also focuses on property management and leasing services.
                           </p>
                           <div class="about__content-single" data-aos="fade-up" data-aos-duration="1200">
                              <div class="thumb">
                                 <i class="flaticon-mansion"></i>
                              </div>
                              <div class="content">
                                 <h5>Real Estate Development & Services</h5>
                                 <p>Buying, selling, renting, and operating residential and commercial properties, along with land subdivision and development.</p>
                              </div>
                           </div>
                           <div class="about__content-single" data-aos="fade-up" data-aos-duration="1200"
                              data-aos-delay="200">
                              <div class="thumb">
                                 <i class="flaticon-modern-house"></i>
                              </div>
                              <div class="content">
                                 <h5>Property Management & Leasing</h5>
                                 <p>Providing property management and leasing services to ensure efficient operation and tenant satisfaction.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-xl-6">
                     <div class="about__thumb">
                        <div class="about__thumb-single" data-aos="fade-right" data-aos-duration="1200">
                           <img src="assets/images/thumb/about/About-Us-1.png" alt="Image">
                           <div class="thumb">
                              <img src="assets/images/thumb/about/path-one.png" alt="Image">
                           </div>
                        </div>
                        <div class="about__thumb-single" data-aos="fade-left" data-aos-duration="1200">
                           <img src="assets/images/thumb/about/About-Us-3.png" alt="Image">
                           <div class="thumb">
                              <img src="assets/images/thumb/about/path-two.png" alt="Image" class="filter-img">
                           </div>
                        </div>
                        <div class="about__thumb-single" data-aos="fade-up" data-aos-duration="1200">
                           <img src="assets/images/thumb/about/About-Us-2.png" alt="Image">
                           <div class="thumb">
                              <img src="assets/images/thumb/about/path-three.png" alt="Image">
                           </div>
                        </div>
                        <!-- <div class="video-btn-wrapper">
                           <a href="https://www.youtube.com/watch?v=RvreULjnzFo" target="_blank"
                              title="video Player" class="open-video-popup">
                           <i class="fa-solid fa-play"></i>
                           </a>
                        </div> -->
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- ==== / about us section end ==== -->
           <!-- ==== procedure section start ==== -->
         <section class="procedure">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-12">
                     <div class="section__header text-center">
                        <!-- <span>Steps of Procedure</span> -->
                        <h2 class="title-animation">Why Choose Landsquare Townships</h2>
                        <div class="icon-thumb justify-content-center">
                           <div class="icon-thumb-single">
                              <span></span>
                              <span></span>
                           </div>
                           <img src="assets/images/sub-icon.png" alt="Image" class="filter-img">
                           <div class="icon-thumb-single">
                              <span></span>
                              <span></span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-12">
                     <div class="procedure__inner">
                        <div class="row vertical-column-gap-lg">
                           <div class="col-12 col-md-6 col-xl-3">
                              <div class="procedure__single" data-aos="fade-up" data-aos-duration="1200">
                                 <div class="thumb">
                                    <i class="flaticon-realtor"></i>
                                 </div>
                                 <div class="content">
                                    <h4>Expert guidance at every step</h4>
                                    <p>Expert guidance at every step ensures informed decisions and smooth transactions.
                                    </p>
                                 </div>
                              </div>
                           </div>
                           <div class="col-12 col-md-6 col-xl-3">
                              <div class="procedure__single procedure__single-alter" data-aos="fade-up"
                                 data-aos-duration="1200" data-aos-delay="200">
                                 <div class="thumb">
                                    <i class="flaticon-selection"></i>
                                 </div>
                                 <div class="content">
                                    <h4>A wide range of quality properties</h4>
                                    <p>A diverse selection of high-quality properties to suit every need.
                                    </p>
                                 </div>
                              </div>
                           </div>
                           <div class="col-12 col-md-6 col-xl-3">
                              <div class="procedure__single procedure__single-alter" data-aos="fade-up"
                                 data-aos-duration="1200" data-aos-delay="400">
                                 <div class="thumb">
                                    <i class="flaticon-house-2"></i>
                                 </div>
                                 <div class="content">
                                    <h4>Transparent and hassle-free process</h4>
                                    <p>Clear, straightforward procedures ensuring a smooth, stress-free property experience.
                                    </p>
                                 </div>
                              </div>
                           </div>
                           <div class="col-12 col-md-6 col-xl-3">
                              <div class="procedure__single" data-aos="fade-up" data-aos-duration="1200"
                                 data-aos-delay="600">
                                 <div class="thumb">
                                    <i class="flaticon-rent-1"></i>
                                 </div>
                                 <div class="content">
                                    <h4>Quality Homes in Prime Locations</h4>
                                    <p>Premium properties situated in the best locations for ideal living.
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="line">
                           <img src="assets/images/icon/line.png" alt="Image" class="filter-img">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- ==== / procedure section end ==== -->
           <!-- ==== collection section start ==== -->
         <section class="collection">
            <div class="container">
               <div class="row vertical-column-gap-lg">
                  <div class="col-12 col-xl-7">
                     <div class="collection__thumb">
                        <div class="thumb-one" data-aos="fade-left" data-aos-duration="1200">
                           <img src="assets/images/thumb/collection/one.png" alt="Image">
                        </div>
                        <div class="thumb-two" data-aos="fade-right" data-aos-duration="1200">
                           <img src="assets/images/thumb/collection/two.png" alt="Image">
                        </div>
                        <div class="thumb-three" data-aos="fade-up" data-aos-duration="1200">
                           <img src="assets/images/thumb/collection/three.png" alt="Image">
                        </div>
                        <div class="thumb-four">
                           <img src="assets/images/thumb/collection/four.png" alt="Image">
                        </div>
                        <!-- <div class="thumb-logo">
                           <a href="index.html">
                           <img src="assets/images/favs.png" alt="Image">
                           </a>
                           <img src="assets/images/thumb/collection/letter.png" alt="Image" class="letter">
                        </div> -->
                     </div>
                  </div>
                  <div class="col-12 col-xl-5">
                     <div class="collection__content">
                        <div class="section__header">
                           <h2 class="title-animation">Your First Choice for Quality Living
                           </h2>
                           <div class="icon-thumb">
                              <div class="icon-thumb-single">
                                 <span></span>
                                 <span></span>
                              </div>
                              <img src="assets/images/sub-icon.png" alt="Image" class="filter-img">
                           </div>
                        </div>
                        <div class="inner">
                           <!-- <h4>We Provide You Best Services for Landsquare Townships -->
                           </h4>
                           <div class="group" data-aos="fade-up" data-aos-duration="1200">
                              <div class="thumb">
                                 <i class="flaticon-house-2"></i>
                              </div>
                              <div class="content">
                                 <h4>Premium Quality Properties</h4>
                                 <p>High-end homes and commercial spaces designed for comfort and luxury. 
                                 </p>
                              </div>
                           </div>
                           <div class="group" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                              <div class="thumb">
                                 <i class="flaticon-shield"></i>
                              </div>
                              <div class="content">
                                 <h4>Prime Locations</h4>
                                 <p>Properties in well-connected, high-demand areas for convenient living. 
                                 </p>
                              </div>
                           </div>
                           <div class="group" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400">
                              <div class="thumb">
                                 <i class="flaticon-location"></i>
                              </div>
                              <div class="content">
                                 <h4>Investment Potential</h4>
                                 <p>Properties in growth areas, offering long-term value and returns.</p> 
                                 
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- ==== / collection section end ==== -->
         <!-- ==== service section start ==== -->
         <section class="service" data-background="assets/images/background/service-bg.png">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-12 col-xl-5">
                     <div class="section__header text-center">
                        <span>Our Service</span>
                        <h2 class="title-animation">Our Main Services</h2>
                        <div class="icon-thumb justify-content-center">
                           <div class="icon-thumb-single">
                              <span></span>
                              <span></span>
                           </div>
                           <img src="assets/images/sub-icon.png" alt="Image" class="filter-img">
                           <div class="icon-thumb-single">
                              <span></span>
                              <span></span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row vertical-column-gap-sm justify-content-center">
                  <div class="col-12 col-lg-4 col-xl-4">
                     <div class="service__single service__single-active" data-aos="fade-up" data-aos-duration="1200">
                        <div class="thumb">
                           <i class="flaticon-buy-home"></i>
                        </div>
                        <div class="content">
                           <h4><a href="#"> Buying & Selling Property</a></h4>
                           <p>We facilitate seamless transactions for buying and selling residential and commercial properties.
                           </p>
                           <!-- <div class="cta">
                              <a href="properties-grid-view.html" class="btn--primary">Find Home</a>
                           </div> -->
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-lg-4 col-xl-4 order-3 order-lg-2">
                     <div class="service__single service__single-active" data-aos="fade-up" data-aos-duration="1200"
                        data-aos-delay="200">
                        <div class="thumb">
                           <i class="flaticon-rent"></i>
                        </div>
                        <div class="content">
                           <h4><a href="#">Leasing & Renting</a></h4>
                           <p>Specializing in land subdivision and development for residential and commercial use.
                           </p>
                           <!-- <div class="cta">
                              <a href="properties-grid-view.html" class="btn--primary">Find Home</a>
                           </div> -->
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-lg-4 col-xl-4 order-2 order-lg-3">
                     <div class="service__single service__single-active" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400">
                        <div class="thumb">
                           <i class="flaticon-deal"></i>
                        </div>
                        <div class="content">
                           <h4><a href="#">Property Management</a></h4>
                           <p>Comprehensive property management services, including maintenance and tenant relations.
                           </p>
                           <!-- <div class="cta">
                              <a href="properties-grid-view.html" class="btn--primary">Find Home</a>
                           </div> -->
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- ==== / service section end ==== -->
         <!-- ==== properties section start ==== -->
         <section class="properties properties-grid-slider">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-12 col-xl-5">
                     <div class="section__header text-center">
                        <span>Our Projects</span>
                        <h2 class="title-animation">Our Latest Projects</h2>
                        <div class="icon-thumb justify-content-center">
                           <div class="icon-thumb-single">
                              <span></span>
                              <span></span>
                           </div>
                           <img src="assets/images/sub-icon.png" alt="Image" class="filter-img">
                           <div class="icon-thumb-single">
                              <span></span>
                              <span></span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-12">
                     <div class="properties-wrapper">
                        <div class="properties-slider swiper">
                           <div class="swiper-wrapper">
                              <div class="swiper-slide">
                                 <div class="properites__single-item">
                                    <div class="thumb">
                                       <a href="https://landsquaretownships.in/emerald.php">
                                       <img src="assets/images/thumb/properties/emrald1.jpg" alt="Image">
                                       </a>

                                    </div>
                                    <div class="content">
                                       <!-- <div class="specifications">
                                          <p><i class="flaticon-double-bed"></i> 3 Bedroom</p>
                                          <p><i class="flaticon-bathroom"></i> 3 Bathroom</p>
                                          <p><i class="flaticon-house-design"></i> Sq Ft 750 </p>
                                       </div> -->
                                       <h4><a href="https://landsquaretownships.in/emerald.php">Emerald Garden</a></h4>
                                       <p style="font-size:13px; line-height:21px;" class="location"><span class="icon-location"></span> Lucknow - Ayodhya Road, Near Devta Factory, ZaidPur,Barabanki.
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="properites__single-item">
                                    <div class="thumb">
                                       <a href="https://landsquaretownships.in/emarald-garden.php">
                                       <img src="assets/images/thumb/properties/emrald2.jpg" o.alt="Image">
                                       </a>
                                    </div>
                                    <div class="content">
                                       <!-- <div class="specifications">
                                          <p><i class="flaticon-double-bed"></i> 3 Bedroom</p>
                                          <p><i class="flaticon-bathroom"></i> 3 Bathroom</p>
                                          <p><i class="flaticon-house-design"></i> Sq Ft 750 </p>
                                       </div> -->
                                       <h4><a href="https://landsquaretownships.in/emarald-garden.php">Emerald Garden-II</a></h4>
                                       <p class="location" style="font-size:13px; line-height:21px;"><span class="icon-location"></span> Lucknow-Ayodhya Road, Inami Pur Chauraha, Zaidpur Road, Barabanki.
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="swiper-slide mt-0">
                                 <div class="properites__single-item">
                                    <div class="thumb">
                                       <a href="https://landsquaretownships.in/friend-enclave.php">
                                       <img src="assets/images/thumb/properties/friends.jpg" alt="Image">
                                       </a>
                                    </div>
                                    <div class="content">
                                       <!-- <div class="specifications">
                                          <p><i class="flaticon-double-bed"></i> 3 Bedroom</p>
                                          <p><i class="flaticon-bathroom"></i> 3 Bathroom</p>
                                          <p><i class="flaticon-house-design"></i> Sq Ft 750 </p>
                                       </div> -->
                                       <h4><a href="https://landsquaretownships.in/friend-enclave.php">Friends Enclave</a></h4>
                                       <p class="location" style="font-size:13px; line-height:21px;"><span class="icon-location"></span> Friends Enclave is an sublocality in Outer Ring Road (Kisan Path), Lucknow.
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="swiper-slide mt-0">
                                 <div class="properites__single-item">
                                    <div class="thumb">
                                       <a href="https://landsquaretownships.in/friend-farm.php">
                                       <img src="assets/images/thumb/properties/farms.jpg" alt="Image">
                                       </a>
                                    </div>
                                    <div class="content">
                                       <!-- <div class="specifications">
                                          <p><i class="flaticon-double-bed"></i> 3 Bedroom</p>
                                          <p><i class="flaticon-bathroom"></i> 3 Bathroom</p>
                                          <p><i class="flaticon-house-design"></i> Sq Ft 750 </p>
                                       </div> -->
                                       <h4><a href="https://landsquaretownships.in/friend-farm.php">Friends Farms</a></h4>
                                       <p class="location" style="font-size:13px; line-height:21px;"><span class="icon-location"></span>Vill.Sarsawan, near Integral International School, Ring Road, Lucknow.
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              
                           </div>
                        </div>
                        <div class="pagination-one">
                           <div class="properties-pagination"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- ==== / properties section end ==== -->
         <!-- ==== counter section start ==== -->
         <section class="counter" data-background="assets/images/background/counter-bg.png">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-12 col-xl-5">
                     <div class="section__header-light text-center">
                        <!-- <span>Milestones</span> -->
                        <h2 class="title-animation">How We Can Help</h2>
                        <div class="icon-thumb justify-content-center">
                           <div class="icon-thumb-single">
                              <span></span>
                              <span></span>
                           </div>
                           <img src="assets/images/sub-icon-light.png" alt="Image">
                           <div class="icon-thumb-single">
                              <span></span>
                              <span></span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row vertical-column-gap-lg">
                  <div class="col-12 col-md-6 col-xl-3">
                     <div class="counter__single" data-aos="fade-up" data-aos-duration="1200">
                        <div class="thumb">
                           <i class="flaticon-town"></i>
                        </div>
                        <div class="content">
                           <!-- <h2><span class="odometer" data-odometer-final="20500"></span><span>+</span></h2> -->
                           <p>Expert Real Estate Advisory</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-md-6 col-xl-3">
                     <div class="counter__single counter__single-active" data-aos="fade-up" data-aos-duration="1200"
                        data-aos-delay="200">
                        <div class="thumb">
                           <i class="flaticon-house-for-sale"></i>
                        </div>
                        <div class="content">
                           <!-- <h2><span class="odometer" data-odometer-final="7600"></span><span>+</span></h2> -->
                           <p style="text-align:center;">Comprehensive Property Solutions</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-md-6 col-xl-3">
                     <div class="counter__single" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400">
                        <div class="thumb">
                           <i class="flaticon-house-1"></i>
                        </div>
                        <div class="content">
                           <!-- <h2><span class="odometer" data-odometer-final="12300"></span><span>+</span></h2> -->
                           <p>Tailored Leasing Services</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-md-6 col-xl-3">
                     <div class="counter__single" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="600">
                        <div class="thumb">
                           <i class="flaticon-customer-satisfaction"></i>
                        </div>
                        <div class="content">
                           <!-- <h2><span class="odometer" data-odometer-final="15200"></span><span>+</span></h2> -->
                           <p  style="text-align:center;">End-to-End Project Management</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- ==== / counter section end ==== -->
         <!-- ==== testimonial section start ==== -->
         <section class="testimonial" style=" margin-bottom:100px">
            <div class="testimonial__thumb">
               <img src="assets/images/testimonial/thumbnail.png" alt="Image" class="w-100 mh-400 parallax-image">
            </div>
            <div class="container">
               <div class="row ">
                  <div class="col-12">
                     <div class="testimonial__wrapper"
                        data-background="assets/images/testimonial/background.png, assets/images/testimonial/icon.png">
                        <div class="row vertical-column-gap-lg">
                           <div class="col-12 col-xl-3">
                              <div class="testimonial__single">
                                 <div class="section__header">
                                    <span>Testimonial</span>
                                    <h2 class="title-animation">Reviews Of
                                       Our Clients
                                    </h2>
                                    <div class="icon-thumb">
                                       <div class="icon-thumb-single">
                                          <span></span>
                                          <span></span>
                                       </div>
                                       <img src="assets/images/sub-icon-light.png" alt="Image">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-12 col-lg-10 col-xl-7">
                              <div class="testimonial-slider swiper testimonial-alt">
                                 <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                       <div class="testimonial-slider__single">
                                          <div class="author">
                                             <div class="author-thumb">
                                                <img src="assets/images/testimonial/client.png" alt="Image">
                                             </div>
                                             <div class="author-meta">
                                                <div class="review">
                                                   <i class="fa-regular fa-star"></i>
                                                   <i class="fa-regular fa-star"></i>
                                                   <i class="fa-regular fa-star"></i>
                                                   <i class="fa-regular fa-star"></i>
                                                   <i class="fa-regular fa-star"></i>
                                                </div>
                                                <p>Happy Client</p>
                                                <h5>Rohit</h5>
                                             </div>
                                          </div>
                                          <div class="content">
                                             <blockquote>"Landsquare made buying our new home such an easy and seamless process. The team was professional and guided us every step of the way. Highly recommend!"
                                             </blockquote>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="swiper-slide">
                                       <div class="testimonial-slider__single">
                                          <div class="author">
                                             <div class="author-thumb">
                                                <img src="assets/images/testimonial/client.png" alt="Image">
                                             </div>
                                             <div class="author-meta">
                                                <div class="review">
                                                   <i class="fa-regular fa-star"></i>
                                                   <i class="fa-regular fa-star"></i>
                                                   <i class="fa-regular fa-star"></i>
                                                   <i class="fa-regular fa-star"></i>
                                                   <i class="fa-regular fa-star"></i>
                                                </div>
                                                <p>Happy Client</p>
                                                <h5>Kavita</h5>
                                             </div>
                                          </div>
                                          <div class="content">
                                             <blockquote>"A truly great experience! The property options at Landsquare are incredible, and we found exactly what we were looking for. Their customer service is top-notch!"
                                             </blockquote>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="swiper-slide">
                                       <div class="testimonial-slider__single">
                                          <div class="author">
                                             <div class="author-thumb">
                                                <img src="assets/images/testimonial/client.png" alt="Image">
                                             </div>
                                             <div class="author-meta">
                                                <div class="review">
                                                   <i class="fa-regular fa-star"></i>
                                                   <i class="fa-regular fa-star"></i>
                                                   <i class="fa-regular fa-star"></i>
                                                   <i class="fa-regular fa-star"></i>
                                                   <i class="fa-regular fa-star"></i>
                                                </div>
                                                <p>Happy Client</p>
                                                <h5>Adarsh</h5>
                                             </div>
                                          </div>
                                          <div class="content">
                                             <blockquote>"Working with Landsquare was a game-changer. Their expertise in the real estate market made all the difference. Will definitely return for future investments."
                                             </blockquote>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-12 col-xl-2">
                              <div class="testimonial-navigation slider-navigation-two">
                                 <button type="button" aria-label="prev slide" title="prev slide"
                                    class="prev-testimonial">
                                 <i class="fa-solid fa-angles-left"></i><span>Prev</span>
                                 </button>
                                 <button type="button" aria-label="next slide" title="next slide"
                                    class="next-testimonial active">
                                 <span>Next</span><i class="fa-solid fa-angles-right"></i>
                                 </button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- ==== / testimonial section end ==== -->
         <!-- ==== team section start ==== -->
         
       
        <div id="footer">
         <?php
               include('footer.php');
         ?>
        </div>
         <!-- ==== / footer end ==== -->
         
         <!-- ==== mouse cursor drag start ==== -->
         <div class="mouseCursor cursor-outer"></div>
         <div class="mouseCursor cursor-inner"></div>
         <!-- ==== / mouse cursor drag end ==== -->
         <!-- ==== scroll to top start ==== -->
         <button class="progress-wrap" aria-label="scroll indicator" title="back to top">
            <span></span>
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
               <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
         </button>
         <!-- ==== / scroll to top end ==== -->
      </div>
      <!-- ==== js dependencies start ==== -->
      <!-- jquery -->
     
      <!-- bootstrap five js -->
      <script src="assets/js/bootstrap.bundle.min.js"></script>
      <!-- nice select js -->
      <script src="assets/js/jquery.nice-select.min.js"></script>
      <!-- magnific popup js -->
      <script src="assets/js/jquery.magnific-popup.min.js"></script>
      <!-- swiper slider js -->
      <script src="assets/js/swiper-bundle.min.js"></script>
      <!-- viewport js -->
      <script src="assets/js/viewport.jquery.js"></script>
      <!-- odometer js -->
      <script src="assets/js/odometer.min.js"></script>
      <!-- aos js -->
    <script src="assets/js/aos.js"></script>
    <!-- lenis smooth scroll -->
    <script src="assets/js/lenis.min.js"></script>
      <!-- splittext js -->
      <script src="assets/js/SplitText.min.js"></script>
      <!-- scrollto js -->
      <script src="assets/js/ScrollToPlugin.min.js"></script>
      <!-- scrolltrigger js -->
      <script src="assets/js/ScrollTrigger.min.js"></script>
      <!-- gsap js -->
      <script src="assets/js/gsap.min.js"></script>
      <!-- ==== / js dependencies end ==== -->
      <!-- colour settings js -->
      <script src="assets/js/color-settings.js"></script>
      <!-- main js -->
      <script src="assets/js/custom.js"></script>
   </body>

<!-- Mirrored from themecraze.net/html/alexis/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Nov 2024 11:20:46 GMT -->
</html>