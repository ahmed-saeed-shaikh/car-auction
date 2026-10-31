
<?php
include('header.php');
?>
    <!-- Page title start-->
    <div class="page-title-area pb-100 bg-img bg-s-cover" data-bg-image="assets/images/page-title-bg-4.jpg" style="margin-top:175px;    ">
        <div class="container">
            <div class="content">
                <h2>Stock</h2>
                <p style="color:white;">Select your Desired Quality & Well Inspected Cars, Vans, Trucks, Buses & Construction Machinery available in stock ready to Export.
</p>
                
            </div>
        </div>
    </div>
    <!-- Page title end-->

    <!-- Shop-area start -->
    <div class="shop-area pt-100 pb-60">
        <div class="container">
            <div class="row gx-xl-5">
                <div class="col-lg-4 col-xl-3">
                    <div class="widget-offcanvas offcanvas-lg offcanvas-start" tabindex="-1" id="widgetOffcanvas" aria-labelledby="widgetOffcanvas">
                        <div class="offcanvas-header px-20">
                            <h4 class="offcanvas-title">Filter</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#widgetOffcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body p-3 p-lg-0">
                            <aside class="widget-area" data-aos="fade-up">
                                <div class="widget p-0 mb-40">
                                    <h5 class="title">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#brands" aria-expanded="true" aria-controls="brands">
                                            Category
                                        </button>
                                    </h5>
                                    <div id="brands" class="collapse show">
                                        <div class="accordion-body scroll-y mt-20">
                                            <ul class="list-group custom-radio">
                                            <?php
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'frame.printdesa.com/main.php/?all_brand',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'Cookie: PHPSESSID=avn6pthl4hvrsk7o86vjphrlq6'
  ),
));

$response = curl_exec($curl);

curl_close($curl);

// Decode the JSON response
$data = json_decode($response, true);

// Check if the decoding was successful
if ($data === null) {
    die('Error decoding JSON response');
}

// Access the data for a single vehicle (assuming it's an array)
// print_r($data); 
// $brand = reset($data); // Get the first element of the array
foreach($data as $brand){
    $productID = $brand['v_id'];

$img = json_decode($brand['img'] ,true);

 echo
('
<li>
<input class="input-radio" type="radio" name="radio" id="radio1" value="">
<label class="form-radio-label" for="radio1"><span>All</span><span class="qty">(2,000)</span></label>
</li>
');

}
?>
                                               
                                               
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget widget-price p-0 mb-40">
                                    <h5 class="title">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#price" aria-expanded="true" aria-controls="price">
                                            Pricing
                                        </button>
                                    </h5>
                                    <div id="price" class="collapse show">
                                        <div class="accordion-body scroll-y mt-20">
                                            <div class="row gx-sm-3">
                                                <div class="col-md-6">
                                                    <div class="form-group mb-30">
                                                        <label class="mb-1 color-dark">Minimum</label>
                                                        <input class="form-control" type="number" name="min" id="min">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group mb-30">
                                                        <label class="mb-1 color-dark">Maximum</label>
                                                        <input class="form-control" type="number" name="max" id="max">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-item">
                                                <div class="price-slider" data-range-slider='filterPriceSlider'></div>
                                                <div class="price-value">
                                                    <span class="color-dark">Price:
                                                        <span class="filter-price-range" data-range-value='filterPriceSliderValue'></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget widget-ratings p-0 mb-40">
                                    <h5 class="title">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#ratings" aria-expanded="true" aria-controls="ratings">
                                            Ratings
                                        </button>
                                    </h5>
                                    <div id="ratings" class="collapse show">
                                        <div class="accordion-body scroll-y mt-20">
                                            <ul class="list-group custom-checkbox">
                                                <li>
                                                    <input class="input-checkbox" type="checkbox" name="checkbox" id="checkbox1" value="">
                                                    <label class="form-check-label" for="checkbox1"><span>Show All</span><span class="qty">(12)</span></label>
                                                </li>
                                                <li>
                                                    <input class="input-checkbox" type="checkbox" name="checkbox" id="checkbox2" value="">
                                                    <label class="form-check-label" for="checkbox2"><span>1 star and higher</span><span class="qty">(0)</span></label>
                                                </li>
                                                <li>
                                                    <input class="input-checkbox" type="checkbox" name="checkbox" id="checkbox3" value="">
                                                    <label class="form-check-label" for="checkbox3"><span>2 stars and higher</span><span class="qty">(3)</span></label>
                                                </li>
                                                <li>
                                                    <input class="input-checkbox" type="checkbox" name="checkbox" id="checkbox4" value="">
                                                    <label class="form-check-label" for="checkbox4"><span>3 stars and higher</span><span class="qty">(67)</span></label>
                                                </li>
                                                <li>
                                                    <input class="input-checkbox" type="checkbox" name="checkbox" id="checkbox5" value="">
                                                    <label class="form-check-label" for="checkbox5"><span>4 stars and higher</span><span class="qty">(98)</span></label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <button class="btn btn-lg btn-primary icon-start w-100" type="submit"><i class="fal fa-sync-alt"></i>Reset All</button>
                                </div>
                                <!-- Spacer -->
                                <div class="pb-40"></div>
                            </aside>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-xl-9">
                    <div class="product-sort-area" data-aos="fade-up">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <h4 class="mb-20">1,000+ Product Available</h4>
                            </div>
                            <div class="col-4 d-lg-none">
                                <button class="btn btn-sm btn-outline icon-end radius-sm mb-20" type="button" data-bs-toggle="offcanvas" data-bs-target="#widgetOffcanvas" aria-controls="widgetOffcanvas">
                                    Filter <i class="fal fa-filter"></i>
                                </button>
                            </div>
                            <div class="col-8 col-lg-6">
                                <ul class="product-sort-list list-unstyled mb-20">
                                    <li class="item">
                                        <div class="sort-item d-flex align-items-center">
                                            <label class="me-2 font-sm">Sort By:</label>
                                            <select name="type" class="nice-select right color-dark">
                                                <option value="high">Trending</option>
                                                <option value="low">Newest</option>
                                                <option value="New">Popular</option>
                                                <option value="Old">Used</option>
                                            </select>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Products -->
                    <div class="row">
                    <?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'frame.printdesa.com/main.php/?vehicle_details',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_POSTFIELDS =>' ',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'Cookie: PHPSESSID=69eff6n1l9aqhsekbtunkasb5o'
  ),
));

$response = curl_exec($curl);

if (curl_errno($curl)) {
    die('Curl error: ' . curl_error($curl));
}

$http_status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
if ($http_status !== 200) {
    die('HTTP error: ' . $http_status);
}

curl_close($curl);

// Decode the JSON response
$data = $response;

// Check if the decoding was successful
if ($data === null) {
    die('Error decoding JSON response');
}

// Access the data for a single vehicle (assuming it's an array)
// print_r($data); 
// $brand = reset($data); // Get the first element of the array
foreach($data as $brand){
    $productID = $brand['v_id'];

$img = json_decode($brand['img'] ,true);

 echo
('
<div class="col-xl-4 col-sm-6" data-aos="fade-up">
<div class="product-default shadow-none text-center mb-25">
    <figure class="product-img mb-15">
        <a href="car-details.php?product_id=' . $productID . '" target="_self" title="Link" class="lazy-container ratio ratio-1-1">
        <img class="lazyloaded" src="https://frame.printdesa.com/img/vehicle/'.$img[0].'" data-src="./assets/images/pro-1.png" alt="Product">        </a>
        <div class="product-overlay">
            <a href="car-details.php?product_id=' . $productID . '" target="_self" title="Image" class="icon"><i class="fas fa-eye"></i></a>
            <!-- <a href="cart.html" target="_self" title="Add to cart" class="icon cart-btn"><i class="fas fa-shopping-cart"></i></a> -->
            <!-- <a href="wishlist.html" target="_self" title="Add to wishlist" class="icon wishlist-btn"><i class="fas fa-heart"></i></a> -->
        </div>
    </figure>
    <div class="product-details">
        <div class="d-flex justify-content-between">
        <h5 class="product-title mt-10 mb-2 ratings">
            <a href="car-details.php?product_id=' . $productID . '" target="_self" title="Link">'.$brand['v_brand'].' ' . $brand['v_model'] . '</a>
            <div class="rate">
                <div class="rating-icon"></div>
            </div>
        </h5>
        <div class="quote product-price justify-content-center">
            <h6 class="new-price">' . ($brand['v_price'] == "" ? "Quote" : $brand['v_price']) . '</h6>
         </div>
        </div>
     
    </div>
</div> 
</div> 
');

}
// echo '<script>';
// echo 'document.addEventListener("DOMContentLoaded", function() {';
// echo '  var productLinks = document.querySelectorAll(".product-link");';
// echo '  productLinks.forEach(function(link) {';
// echo '    link.addEventListener("click", function(event) {';
// echo '      event.preventDefault();';
// echo '      var productID = this.getAttribute("data-product-id");';
// echo '      var apiURL = "https://frame.printdesa.com/main.php/?vehicle_detail=" + productID;';
// echo '      fetch(apiURL)';
// echo '        .then(response => response.json())';
// echo '        .then(data => {';
// echo '          sessionStorage.setItem("brand_detail", JSON.stringify(data));';
// echo '          window.location.href = "car-details.php";';
// echo '        })';
// echo '        .catch(error => console.error("Error:", error));';
// echo '    });';
// echo '  });';
// echo '});';
// echo '</script>';
?>
                       
                    </div>
 
                     <div class="pagination mt-20 mb-40 justify-content-end" data-aos="fade-up">
                        <a href="car-details.php?product_id=' . $productID . '" class="page-numbers radius-0 prev">Prev</a>
                        <span class="page-numbers radius-0 current" aria-current="page">1</span>
                        <a href="car-details.php?product_id=' . $productID . '" class="page-numbers radius-0">2</a>
                        <a href="car-details.php?product_id=' . $productID . '" class="page-numbers radius-0">3</a>
                        <a href="car-details.php?product_id=' . $productID . '" class="page-numbers radius-0">4</a>
                        <a href="car-details.php?product_id=' . $productID . '" class="page-numbers radius-0 next">Next</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop-area end -->
 
<?php
include('footer.php');
?>