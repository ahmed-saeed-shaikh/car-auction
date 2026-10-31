<?php
include('header.php');
include('main.php');





// Function to get the product ID from the URL
 

// Get the product ID from the URL
// $productId = getProductIdFromUrl();

// // Check if the product ID is valid
// if ($productId) {
//     // Output a script to execute on the client side
//     echo '<script>';
//     echo 'document.addEventListener("DOMContentLoaded", function() {';
//     echo '  var productId = ' . $productId . ';';
//     echo '  var apiURL = "https://frame.printdesa.com/main.php/?vehicle_detail=" + productId;';
//     echo '  fetch(apiURL)';
//     echo '    .then(response => response.json())';
//     echo '    .then(data => {';
//     echo '      sessionStorage.setItem("brand_detail", JSON.stringify(data));';
//     echo '      window.location.href = "car-details.php";';
//     echo '    })';
//     echo '    .catch(error => console.error("Error:", error));';
//     echo '});';
//     echo '</script>';
// } else {
//     echo "Invalid product ID.";
// }
?>


    <!-- Page title start-->
    <div class="page-title-area pb-100 bg-img bg-s-cover" data-bg-image="assets/images/banner/19.jpg" style="margin-top:175px;">
        <div class="container">
            <div class="content">
                <h2>Car Details</h2>
              
            </div>
        </div>
    </div>
    <!-- Page title end-->

    <!-- car-details-area start -->
    <div class="car-details-area pt-100 pb-60">
        <div class="container-fluid w-80">
        <div class="product-single-details">
                        <div class="row" data-aos="fade-up">
                            <div class="col-md-8">
                                
             <?php
          

        foreach ($ob->vh($_GET['product_id']) as $b) {

              echo '<h3 class="product-title mt-10 mb-20">' . $b['v_color'] . ' - ' . $b['b_name'] . ' - ' . $b['v_manufacture'] . '</h3>';
                }
             ?>



                                
                            </div>
                        </div></div>
            <div class="row gx-xl-5">
                <div class="col-lg-7">
                    <div class="product-single-gallery mb-40">
                        <div class="swiper product-single-slider">
                            <div class="swiper-wrapper">
                              

                            <?php
        foreach ($ob->vh($_GET['product_id']) as $b) {
            // Check if 'img' key exists and is an array

            $img = json_decode($b['img'],true);
           
            foreach($img as $mg) {
                echo('
                                <div class="swiper-slide">
                                    <figure class="lazy-container ratio ratio-5-3">
                                        <a href="https://frame.printdesa.com/img/vehicle/'.$mg.'" class="lightbox-single">
                                            <img class="lazyload" src="https://frame.printdesa.com/img/vehicle/'.$mg.'"
                                                data-src="https://frame.printdesa.com/img/vehicle/'.$mg.'" alt="product image">
                                        </a>
                                    </figure>
                                </div>
                              

                                ');}
            }
                                ?>
                            </div>
                        </div>
        
                        <div class="product-thumb">
                            <div class="swiper slider-thumbnails">
                                <div class="swiper-wrapper">
                                <?php
                                $img = json_decode($b['img'],true);
           
           foreach($img as $mg) {
echo('
                                    <div class="swiper-slide">
                                        <div class="thumbnail-img lazy-container ratio ratio-5-3">
                                            <img class="lazyload" src="https://frame.printdesa.com/img/vehicle/'.$mg.'"
                                                data-src="https://frame.printdesa.com/img/vehicle/'.$mg.'" alt="product image">
                                        </div>
                                    </div>
      ');     }
                                    ?>
                                   
                                </div>
                            </div>
                            <!-- Slider navigation buttons -->
                            <div class="slider-navigation">
                                <button type="button" title="Slide prev" class="slider-btn slider-btn-prev radius-0">
                                    <i class="fal fa-angle-left"></i>
                                </button>
                                <button type="button" title="Slide next" class="slider-btn slider-btn-next radius-0">
                                    <i class="fal fa-angle-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-5">
                <div class="widget widget-share bg-light mb-30">
                            <h5 class="title">
                                
                            </h5>
                            <div id="share" class="collapse show">
                                <div class="accordion-body">
                                    <div class="social-link_deatler style-2 mb-20">
                                        <div class="row">
                                            <div class="col-md-4">
                                            <button (click)="onClick()" class="facebook_btnn"><i class="fab fa-facebook" style="
    margin-top: 3px;
    padding-right: 7px;
"></i> Facebook</button>
                                            </div>
                                            <div class="col-md-4">
                                            <button (click)="onClick()" class="whatsapp_btnn"><i class="fab fa-whatsapp" style="font-size: 18px;
    margin-left: -19px;
    color: #fff;
    margin-right: 5px;
    margin-top: 3px;"></i> Whatsapp</button>

                                                </div>
                                                <div class="col-md-4">
                                                                                        <button (click)="onClick()" class="email_btnn"> <img src="./assets/images/image-removebg-preview (12).png" height="20px"  style="    height: 17px;
    margin-right: 5px;" alt="">  Email</button>

                                                </div>
                                        </div>

                                        
                                        <!-- <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
                                        <a href="https://www.dribbble.com/" target="_blank"><i class="fab fa-dribbble"></i></a>
                                        <a href="https://www.twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                                        <a href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube"></i></a> -->
                                    </div>
                                  
                                </div>
                            </div>
                        </div>
                    <aside class="widget-area" data-aos="fade-up">
                    
                    <div class="row">
                        <div class="col-md-12 vehicle_specf">
                            <h4>Vehicles Specfication</h4>
                        </div>
                    <div class="col-md-12">
                    <div class="table-responsive-sm">
                    <table class="table car_des_table">
                    
                        <?php 
                        foreach($ob->vh($_GET['product_id']) as $b){
                         echo('
                         <tbody>
                                <tr>
                                    <td><img src="./assets/images/9185604.png"     height="20px" alt=""> Stock ID</td>
                                    <td>'.$_GET['product_id'].'</td>
                                    <td><img src="./assets/images/speedometer_glyph_style.jpg"     height="20px " alt=""> Millege</td>
                                    <td>'.$b['v_mileage'].'</td> 
                                </tr>
                                <tr>
                                    <td><img src="./assets/images/caricon.png"     height="20px " alt="">   Brand</td>
                                    <td>'.$b['v_brand'].'</td>
                                    <td> <img src="./assets/images/transmission-repair_1.png" height="20px " alt=""> Transmission</td>
                                    <td>'.$b['v_transmission'].'</td>
                           
                                </tr>
                                <tr>
                                    <td> <img src="./assets/images/caricon.png"     height="20px " alt="">  Model</td>
                                    <td>Corolla Axio</td>
                                    <td>  <img src="./assets/images/latest-news-10646205-8547346.png" height="20px" alt=""> Grade</td>
                                    <td>'.$b['v_grade'].'</td>
                                </tr>
                                <tr>
                                    <td><img src="./assets/images/system-information-3.png" height="20px" alt=""> Type </td>
                                    <td>'.$b['v_type'].'</td>
                                  
                                    <td> <img src="./assets/images/sterr.png" height="20px" alt=""> Driving Hand</td>
                                    <td>'.$b['v_dh'].'</td>
                                </tr>
                                <tr>
                                    <td> <img src="./assets/images/57856-200.png" height="20px" alt=""> Chassis</td>
                                    <td>'.$b['v_chassis_code'].'</td>
                                    <td>  <img src="./assets/images/mui-icon-r-cal.png" height="20px" alt=""> Maunfacture</td>
                                    <td>'.$b['v_manufacture'].'</td>
                                </tr>
                                <tr>
                                    <td> <img src="./assets/images/377-200.png" height="20px" alt=""> CC</td>
                                    <td>'.$b['v_cc'].'</td>
                                    <td> <img src="./assets/images/door.png" height="20px" alt=""> Door / Seats</td>
                                    <td>'.$b['v_ds'].'</td>
                                </tr>
                                <tr>
                                    <td> <img src="./assets/images/color.jpeg" height="20px" alt=""> Color</td>
                                      <td>'.$b['v_color'].'</td>
                                    <td> <img src="./assets/images/3021593.png" height="20px" alt=""> Dimension</td>
                                     <td>'.$b['v_dimension'].'</td>
                                </tr>
                                <tr>
                                    <td> <img src="./assets/images/status.png" height="20px" alt=""> Status</td>
                                    <td>'. ($b['status'] == 2 ? 'In Stock' : 'Out of Stock') .'</td>

                                    <td>    <img src="./assets/images/pngtree-vector-location-icon-png-image_515550.jpg" height="20px" alt=""> Location</td>
                                      <td>'.$b['location'].'</td>
                                </tr>
                               

                                
                            </tbody>

                        ');} ?>
                        </table>

                        <div class="additional_feature">
                            <h3> &nbsp;&nbsp;Additional Feature</h3>

                            <p> 
                                <div class="row">
                                <?php 
                                $thi = json_decode($b['things'],true);
                                foreach($thi as $things){
                                    echo(' <div class="col-md-4 featuress">
                                    &nbsp; <img src="./assets/images/=tickk.png" height="20px" style="background: #cf2127; padding: 3px;border-radius: 50px;" alt=""><i class="fab fa-tick"></i> '.$things.'  &nbsp;
                                    </div>');
                                }
                                ?>
                                </div>
                            
                           
                           
                        </div>
                        <div class="remark_feature">
                            <h3>Remarks</h3>

                            <p><?php echo($b['remarks']); ?>  </p>
                        </div>
                    </div>
                </div>
                       
                   
                   
                        <!-- Spacer -->
                     </aside>
                </div>
         
            </div>
        </div>
    </div>
    <!-- car-details-area start -->
    <section class="testimonial-area testimonial-2 mb-75">
        <div class="container">
            <div class="section-title title-inline mb-30" data-aos="fade-up">
                <div class="col-lg-5">
                    <!-- <span class="subtitle">Our Achievement</span> -->
                    <h2 class="title mb-20 mt-0">Customer <span>Reviews</span> </h2>
                </div>
                <div class="col-lg-6">
                    <!-- Slider navigation buttons -->
                    <div class="slider-navigation text-end mb-20">
                        <button type="button" title="Slide prev" class="slider-btn" id="testimonial-slider-btn-prev">
                            <i class="fal fa-angle-left"></i>
                        </button>
                        <button type="button" title="Slide next" class="slider-btn" id="testimonial-slider-btn-next">
                            <i class="fal fa-angle-right"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-end" data-aos="fade-up">
                <div class="col-lg-9">
                    <div class="swiper pt-xl-5" id="testimonial-slider-1">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide pb-25">
                                <div class="slider-item radius-md">
                                    <div class="quote">
                                        <span class="icon"><i class="fal fa-quote-right"></i></span>
                                        <p class="text mb-0">
                                            They are definitely recommend them if you are looking for a good car service. always on time, and they're very professional. Plus, their prices are very.
                                        </p>
                                    </div>
                                    <div class="client">
                                        <div class="client-info d-flex align-items-center">
                                            <div class="client-img">
                                                <div class="lazy-container rounded-pill ratio ratio-1-1">
                                                    <img class="lazyload" src="assets/images/placeholder.png" data-src="assets/images/avatar-1.jpg" alt="Person Image">
                                                </div>
                                            </div>
                                            <div class="content">
                                                <h6 class="name">Franky Yong</h6>
                                                <span class="designation">CEO, EX Car</span>
                                            </div>
                                        </div>
                                        <div class="ratings">
                                            <div class="rate">
                                                <div class="rating-icon"></div>
                                            </div>
                                            <span class="ratings-total">5 star of 20 review</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide pb-25">
                                <div class="slider-item radius-md">
                                    <div class="quote">
                                        <span class="icon"><i class="fal fa-quote-right"></i></span>
                                        <p class="text mb-0">
                                            People are definitely recommend them if you are looking for a good car service. always on time, and they're very professional. Plus, their prices are very.
                                        </p>
                                    </div>
                                    <div class="client">
                                        <div class="client-info d-flex align-items-center">
                                            <div class="client-img">
                                                <div class="lazy-container rounded-pill ratio ratio-1-1">
                                                    <img class="lazyload" src="assets/images/placeholder.png" data-src="assets/images/avatar-2.jpg" alt="Person Image">
                                                </div>
                                            </div>
                                            <div class="content">
                                                <h6 class="name">Maria Mae</h6>
                                                <span class="designation">Developer</span>
                                            </div>
                                        </div>
                                        <div class="ratings">
                                            <div class="rate">
                                                <div class="rating-icon"></div>
                                            </div>
                                            <span class="ratings-total">5 star of 20 review</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide pb-25">
                                <div class="slider-item radius-md">
                                    <div class="quote">
                                        <span class="icon"><i class="fal fa-quote-right"></i></span>
                                        <p class="text mb-0">
                                            Human are definitely recommend them if you are looking for a good car service. always on time, and they're very professional. Plus, their prices are very.
                                        </p>
                                    </div>
                                    <div class="client">
                                        <div class="client-info d-flex align-items-center">
                                            <div class="client-img">
                                                <div class="lazy-container rounded-pill ratio ratio-1-1">
                                                    <img class="lazyload" src="assets/images/placeholder.png" data-src="assets/images/avatar-3.jpg" alt="Person Image">
                                                </div>
                                            </div>
                                            <div class="content">
                                                <h6 class="name">Hames Rodrigo</h6>
                                                <span class="designation">UI/UX Designer</span>
                                            </div>
                                        </div>
                                        <div class="ratings">
                                            <div class="rate">
                                                <div class="rating-icon"></div>
                                            </div>
                                            <span class="ratings-total">5 star of 20 review</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="img-content d-none d-lg-block" data-aos="fade-right">
            <div class="img">
                <img class="lazyload blur-up" src="./assets/images/testimonial-2.png" data-src="assets/images/testimonial-2.png" alt="Image">
            </div>
        </div>
    </section>
    <?php
include('footer.php');
?>