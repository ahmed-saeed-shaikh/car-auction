<?php
include('header.php');
?>
              
         
    
    <div class="slider-container">
        <div class="slider">
            <img class="slide" src="./assets/images/banner/slide1.jpg" alt="Slide 1">
            <img class="slide" src="./assets/images/banner/slide02.jpg" alt="Slide 2">
            <img class="slide" src="./assets/images/banner/banner3.jpg" alt="Slide 3">
            <!-- Add more slides as needed -->
        </div>
        
    <!-- Home-area end -->
<!-- filter section  -->
<div class="section">
    <div class="container-fluid newsupdate">
    <div class="row">
    <div class="col-md-3">
        <div class="card">
            News & Updates
        </div>
    </div>
    <div class="col-md-9 d-flex justify-content-start  " id="news-container" >
        <!-- News will be displayed here -->
    </div>
</div>
    </div>

<!-- news script  -->

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Fetch data from the API
    fetch('https://frame.printdesa.com/main.php/?news_all')
        .then(response => response.json())
        .then(data => {
            // Handle the data or perform any desired actions
            console.log(data);

            // Initialize index for tracking the current news
            let currentIndex = 0;

            // Function to update the news
            function updateNews() {
                const newsContainer = document.getElementById('news-container');

                // Get the current news item
                const currentNews = data[currentIndex].news;

                // Create a new div for the news item
                const newsItem = document.createElement('div');
                newsItem.textContent = currentNews;

                // Append the news item to the container
                newsContainer.appendChild(newsItem);

                // Increment index for the next news item
                currentIndex = (currentIndex + 1) % data.length;

                // Check if there are more than one news items, then remove the oldest one
                if (newsContainer.children.length > 1) {
                    newsContainer.removeChild(newsContainer.children[0]);
                }
            }

            // Initial update
            updateNews();

            // Set an interval to update the news every 10 seconds
            setInterval(updateNews, 10000);
        })
        .catch(error => {
            console.error('Error fetching data:', error);
        });
});
</script>
<!-- news script  -->


    <div class="filter">
        <div class="container filter_sections">
            <div class="row">
            <div class="col-md-6">
                <h4>Choose Your Desire Brands Car with Latest Or Earlier Model To Make your Dream Comes True  </h4>
            </div>
            <div class="col-md-6">
    <div class="row">
        <div class="col-md-4">
            <select id="makerSelect"></select>
        </div>
        <div class="col-md-4">
            <select id="modelSelect" placeholder="Select Model">
                <option disabled selected value="">Select Model</option>
            </select>
        </div>
        <div class="col-md-4">
            <select id="locationSelect" placeholder="Select Location">
                <option value="japan"> Japan</option>
                <option value="germany">Germany</option>
                <option value="uk">UK</option>
                <option value="usa">USA</option>
                <option value="thailand">Thailand</option>
                <option value="uae">UAE</option>
            </select>
        </div>
        <div class="col-md-2">
            <select id="yearSelect1" placeholder="Select Year"></select>
        </div>
        <div class="col-md-2">
            <select id="yearSelect2" placeholder="Select Year"></select>
        </div>
        <div class="col-md-4">
            <input type="text" id="keywordsInput" placeholder="Search by ID Or Keywords">
        </div>
        <div class="col-md-4">
            <button id="stockSearchButton">Stock Search</button>
        </div>
    </div>
</div>
            </div>
        </div>
        </div>
    </div>
</div>
  <!-- script filter -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Get the select elements and input field
        const makerSelect = document.getElementById("makerSelect");
        const modelSelect = document.getElementById("modelSelect");
        const locationSelect = document.getElementById("locationSelect");
        const yearSelect1 = document.getElementById("yearSelect1");
        const yearSelect2 = document.getElementById("yearSelect2");
        const keywordsInput = document.getElementById("keywordsInput");
        const stockSearchButton = document.getElementById("stockSearchButton");

        // Add a placeholder option for modelSelect
        const modelPlaceholderOption = document.createElement('option');
        modelPlaceholderOption.value = '';
        modelPlaceholderOption.textContent = 'Select Model';
        modelSelect.appendChild(modelPlaceholderOption);

        // Add placeholder options for yearSelect1 and yearSelect2
        const yearPlaceholderOption = document.createElement('option');
        yearPlaceholderOption.value = '';
        yearPlaceholderOption.textContent = 'Select Year';

        yearSelect1.appendChild(yearPlaceholderOption.cloneNode(true));
        yearSelect2.appendChild(yearPlaceholderOption.cloneNode(true));

        // Populate yearSelect1 and yearSelect2 with years from 2000 to current year in descending order
        const currentYear = new Date().getFullYear();
        for (let year = currentYear; year >= 2000; year--) {
            const option = document.createElement('option');
            option.value = year;
            option.textContent = year;
            yearSelect1.appendChild(option.cloneNode(true));
            yearSelect2.appendChild(option);
        }

        // Add event listener to makerSelect
        makerSelect.addEventListener('change', function () {
            const selectedBrandId = makerSelect.value;

            // Clear existing options in modelSelect
            modelSelect.innerHTML = '';

            // If a brand is selected, fetch models
            if (selectedBrandId) {
                // Fetch data from the API for models based on the selected brand
                fetch(`https://frame.printdesa.com/main.php/?brand_model=${selectedBrandId}`)
                    .then(response => response.json())
                    .then(data => {
                        // Populate the select element with models
                        data.forEach(model => {
                            const option = document.createElement('option');
                            option.value = model.m_name;
                            option.textContent = model.m_name;
                            modelSelect.appendChild(option);
                        });
                    })
                    .catch(error => console.error('Error fetching models:', error));
            } else {
                // If no brand is selected, add back the placeholder option
                modelSelect.appendChild(modelPlaceholderOption);
            }
        });

        // Fetch data from the API for brands
        fetch('https://frame.printdesa.com/main.php/?brand_sum')
            .then(response => response.json())
            .then(data => {
                // Populate the select element with brands
                data.forEach(brand => {
                    const option = document.createElement('option');
                    option.value = brand.brand_id; // Assuming brand_id is available in the API response
                    option.textContent = brand.brand_name;
                    makerSelect.appendChild(option);
                });
            })
            .catch(error => console.error('Error fetching brands:', error));

        // Add event listener to stockSearchButton
        stockSearchButton.addEventListener('click', function () {
            // Get selected values
            const selectedBrandValue = makerSelect.value;
            const selectedModel = modelSelect.value;
            const selectedLocation = locationSelect.value;
            const selectedYearFrom = yearSelect1.value;
            const selectedYearTo = yearSelect2.value;
            const selectedKeywords = keywordsInput.value;

            // Construct the API request URL
            const apiUrl = 'https://frame.printdesa.com/main.php/?vehicle_fillter=' +
                '&maker=' + encodeURIComponent(selectedBrandValue) +
                '&model=' + encodeURIComponent(selectedModel) +
                '&location=' + encodeURIComponent(selectedLocation) +
                '&year_from=' + encodeURIComponent(selectedYearFrom) +
                '&year_to=' + encodeURIComponent(selectedYearTo) +
                '&keywords=' + encodeURIComponent(selectedKeywords);

            // Perform the API request
            fetch(apiUrl)
                    .then(response => response.json())
                    .then(data => {
                        // Handle the API response as needed
                        console.log('API response:', data);

                        // Assuming 'data' structure is similar to the response in your success function
                        let carsListing = document.getElementById('cars_listing');
                        carsListing.innerHTML = '';

                        // Check if the response contains 'data'
                        if (data && data.data) {
                            let responseData = data.data;

                            for (let i = 0; i < responseData.length; i++) {
                                let img = JSON.parse(responseData[i].img);

                                carsListing.innerHTML += `
                                    <div class="col-xl-3 col-md-6 aos-init aos-animate" data-aos="fade-up">
                                        <a href="car-details.php?product_id=${responseData[i].v_id}">
                                            <div class="product-default p-15 mb-25">
                                                <figure class="product-img mb-15">
                                                    <a href="car-details.php?product_id=${responseData[i].v_id}" target="_self" title="Link" class="lazy-container ratio ratio-2-3">
                                                        <img class="lazyloaded" src="https://frame.printdesa.com/img/vehicle/${img[0]}" data-src="./assets/images/pro-1.png" alt="Product">
                                                    </a>
                                                </figure>
                                                <div class="product-details">
                                                    <div class="d-flex align-items-center justify-content-between mb-15">
                                                        <h5 class="product-title lc-1 mb-0"><a href="car-details.php?product_id=${responseData[i].v_id}" target="_self" title="Link">${responseData[i].b_name} - ${responseData[i].v_model}</a></h5><br>
                                                        <div class="quote">
                                                            <h6>${responseData[i].v_price === null || responseData[i].v_price === "" ? "Quote" : '$' + responseData[i].v_price}</h6>
                                                        </div>
                                                    </div>
                                                    <p class="product-category font-xsm">${responseData[i].v_manufacture}</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                `;
                            }
                        }
                    })
                    .catch(error => console.error('Error in API request:', error));
        });
    });
</script>
    <!-- Steps-area start -->
 
     
    <section class="product-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-12" data-aos="fade-up">
                    <div class="section-title title-inline mb-30" data-aos="fade-up">
                        <h2 class="title mb-20">  Top <span>Featured</span> Vehicles</h2>
                        <div class="tabs-navigation mb-20">
                            <!-- <ul class="nav nav-tabs" data-hover="fancyHover">
                                <li class="nav-item active">
                                    <button class="nav-link hover-effect active btn-md radius-sm" data-bs-toggle="tab" data-bs-target="#forAll" type="button">All Cars</button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link hover-effect btn-md radius-sm" data-bs-toggle="tab" data-bs-target="#newArrival" type="button">New Arrival</button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link hover-effect btn-md radius-sm" data-bs-toggle="tab" data-bs-target="#bestSeller" type="button">Best Seller</button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link hover-effect btn-md radius-sm" data-bs-toggle="tab" data-bs-target="#usedCar" type="button">Used Car</button>
                                </li>
                            </ul> -->
                        </div>
                    </div>
                </div>
                <div class="shop-area pb-60">
        <div class="container">
            <div class="row gx-xl-5">
             
                <div class="col-lg-12 col-xl-12">
                    
                    <!-- Products -->
                    <div class="row" id="cars_listing">
         


                </div>
            </div>
        </div>
    </div>
        
                    <div class="text-center mt-20 mb-30" data-aos="fade-up">
                        <a href="shop.php" class="btn btn-lg btn-primary radius-sm">All Vehicles</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
 
    <!-- Product-area end -->

   
   
    <!-- Testimonial-area start -->
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
    <!-- Testimonial-area end -->
 

     

   
<?php
include('footer.php');
?>
<script>
getcars();

  function getmodels(id) {
    var url = `https://frame.printdesa.com/main.php/?brand_model=${id}`;
    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var responseData = xhr.response; // Use responseText instead of response
                      var dataa = JSON.parse(responseData);
            console.log(responseData)
            let list = document.getElementById('models_list');
            list.innerHTML = '';

            for (let i = 0; i < dataa.length; i++) {
                list.innerHTML += `
                    <li data-bname="${dataa[i].m_name}">
                        <input class="input-radio" type="radio" id="selectedBrand${dataa[i].m_name}" name="model_name" value="${dataa[i].m_name}" onclick="getcars()">
                        <label class="form-radio-label" for="selectedBrand${dataa[i].m_name}">
                            <span>${dataa[i].m_name}</span>
                            <span class="qty">(${dataa[i].mtotal ?? 0   })</span>
                        </label>
                    </li>
                `;
            }
            
        }
    };

    xhr.open('GET', url, true);
    xhr.send();
 

                
                 
            

         
    }

    function pagination(page){
        console.log(page);
        var selectedBrandRadioButton = document.querySelector('input[name="selectedBrand"]:checked');
    var selectedBrandValue = selectedBrandRadioButton ? selectedBrandRadioButton.value : '';

    // Assuming there is only one radio button with the name "model_name"
    var modelNameRadioButton = document.querySelector('input[name="model_name"]:checked');
    var modelNameValue = modelNameRadioButton ? modelNameRadioButton.value : '';

    var max_amount = document.querySelector('input[name="max_amount"]');
    var max_amountValue = max_amount ? max_amount.value : 0;

    var min_amount = document.querySelector('input[name="min_amount"]');
    var min_amountValue = min_amount ? min_amount.value : 0;
    var paginate = document.getElementById('paginate');

    $.ajax({
        url: 'https://frame.printdesa.com/main.php/?vehicle_fillter=&page= '+page+'&maker=' + selectedBrandValue + '&model=' + modelNameValue + '&startPrice=' + parseInt( min_amountValue) + '&endPrice=' + parseInt(max_amountValue),
        method: 'GET',
        data: {
            // selectedModelName: modelNameValue
            // Add other parameters as needed
        },
        success: function(response) {

            let res = JSON.parse(response);
            let data = res.data;
            let pagei = res.pagination
            console.log('API Response:', data.length);
            let cars_listing = document.getElementById('cars_listing');
            cars_listing.innerHTML = '';
            for(let i = 0; i < data.length; i++){
                let img = JSON.parse(data[i].img);
                cars_listing.innerHTML += `
 <div class="col-xl-3 col-md-6 aos-init aos-animate" data-aos="fade-up" >
 <a  href="car-details.php?product_id=${data[i].v_id}">
 <div class="product-default p-15 mb-25">
 <figure class="product-img mb-15">
 <a href="car-details.php?product_id=${data[i].v_id}"target="_self" title="Link" class="lazy-container ratio ratio-2-3">
<img class="lazyloaded" src="https://frame.printdesa.com/img/vehicle/${img[0]}" data-src="./assets/images/pro-1.png" alt="Product">
 
 </a>
</figure>
<div class="product-details">

<div class="d-flex align-items-center justify-content-between mb-15">
<h5 class="product-title lc-1 mb-0"><a href="car-details.php?product_id=${data[i].v_id}"target="_self" title="Link">${data[i].b_name} - ${data[i].v_model}</a></h5><br>
<div class="quote">
<h6>${data[i].v_price === null || data[i].v_price === "" ? "Quote" : '$' + data[i].v_price}</h6>

</div>
</div>
 <p class="product-category font-xsm"> ${data[i].v_manufacture}</p>

 </div>
 </div>
 </a>
 </div>

 
`
        }
        console.log(pagei);
        paginate.innerHTML = ''
        let current_length = (parseInt(pagei.current_page )+ 5)
        console.log(`length ${current_length}`);
        paginate.innerHTML += `<a onclick="pagination(${1})" class="page-numbers radius-0"  > Start </a>`;
        for(let k = pagei.current_page; k < current_length ;k ++ ){
         
            paginate.innerHTML += `<a onclick="pagination(${k})" class="page-numbers radius-0 ${k == pagei.current_page ? 'current' : '' }"  > ${k}</a>`;

        }
        paginate.innerHTML += `<a onclick="pagination(${pagei.total_pages})" class="page-numbers radius-0 "  > Last </a>`;
        
        },
        error: function(error) {
            console.error('Error:', error);
        }
    });
    }

    function getcars() {
        // alert('dfkhj');
    // Assuming there is only one radio button with the name "selectedBrand"
    var selectedBrandRadioButton = document.querySelector('input[name="selectedBrand"]:checked');
    var selectedBrandValue = selectedBrandRadioButton ? selectedBrandRadioButton.value : '';

    // Assuming there is only one radio button with the name "model_name"
    var modelNameRadioButton = document.querySelector('input[name="model_name"]:checked');
    var modelNameValue = modelNameRadioButton ? modelNameRadioButton.value : '';

    var max_amount = document.querySelector('input[name="max_amount"]');
    var max_amountValue = max_amount ? max_amount.value : 0;

    var min_amount = document.querySelector('input[name="min_amount"]');
    var min_amountValue = min_amount ? min_amount.value : 0;
    var paginate = document.getElementById('paginate');



    // Assuming you have jQuery available for AJAX requests
    $.ajax({
        url: 'https://frame.printdesa.com/main.php/?vehicle_fillter=&maker=' + selectedBrandValue + '&model=' + modelNameValue + '&startPrice=' + parseInt(min_amountValue) + '&endPrice=' + parseInt(max_amountValue),
        method: 'GET',
        data: {
            // selectedModelName: modelNameValue
            // Add other parameters as needed
        },
        success: function(response) {

            let res = JSON.parse(response);
            let data = res.data;
            let pagei = res.pagination

        
            let cars_listing = document.getElementById('cars_listing');
            cars_listing.innerHTML = '';
            for(let i = 0; i < data.length; i++){
                let img = JSON.parse(data[i].img);
                cars_listing.innerHTML += `
 <div class="col-xl-3 col-md-6 aos-init aos-animate" data-aos="fade-up" >
 <a  href="car-details.php?product_id=${data[i].v_id}">
 <div class="product-default p-15 mb-25">
 <figure class="product-img mb-15">
 <a href="car-details.php?product_id=${data[i].v_id}"target="_self" title="Link" class="lazy-container ratio ratio-2-3">
<img class="lazyloaded" src="https://frame.printdesa.com/img/vehicle/${img[0]}" data-src="./assets/images/pro-1.png" alt="Product">
 
 </a>
</figure>
<div class="product-details">

<div class="d-flex align-items-center justify-content-between mb-15">
<h5 class="product-title lc-1 mb-0"><a href="car-details.php?product_id=${data[i].v_id}"target="_self" title="Link">${data[i].b_name} - ${data[i].v_model}</a></h5><br>
<div class="quote">
<h6>${data[i].v_price === null || data[i].v_price === "" ? "Quote" : '$' + data[i].v_price}</h6>

</div>
</div>
 <p class="product-category font-xsm"> ${data[i].v_manufacture}</p>

 </div>
 </div>
 </a>
 </div>
 


`
        }
        console.log(pagei);
        paginate.innerHTML = ''
        let current_length = (pagei.current_page + 5)
        if(pagei.current_page != 1){
        paginate.innerHTML += `<a onclick="pagination(${1})" class="page-numbers radius-0"  > Start </a>`;
    }
        for(let k = pagei.current_page; k < current_length ;k ++ ){
            // <a href="car-details.php?product_id=' . $productID . '" class="page-numbers radius-0">2</a>
            paginate.innerHTML += `<a onclick="pagination(${k})" class="page-numbers radius-0 ${k == pagei.current_page ? 'current' : '' }"  > ${k}</a>`;

        }
        paginate.innerHTML += `<a onclick="pagination(${pagei.total_pages})" class="page-numbers radius-0 "  > Last </a>`;
        },
        error: function(error) {
            console.error('Error:', error);
        }
    });
}



var sliders = document.querySelectorAll("[data-range-slider='priceSlider']");
var filterSliders = document.querySelector("[data-range-slider='filterPriceSlider']");
var input0 = document.getElementById('min');
var input1 = document.getElementById('max');
var inputs = [input0, input1];

// Home price slider
for (let i = 0; i < sliders.length; i++) {
    const el = sliders[i];

    noUiSlider.create(el, {
        start: [0, 0],
        connect: !0,
        step: 10,
        margin: 10,
        range: {
            min: 0,
            max: 1000
        }
    }), el.noUiSlider.on("update", function(values) {
        $("[data-range-value='priceSliderValue']").text("$" + values.join(" - " + "$"));
    })
}

// Filter frice slider
if (filterSliders) {
    noUiSlider.create(filterSliders, {
        start: [0, 20000],
        connect: !0,
        step: 10,
        margin: 10,
        range: {
            min: 0,
            max: 20000
        }
    }), filterSliders.noUiSlider.on("update", function(values, handle) {
        $("[data-range-value='filterPriceSliderValue']").text("$" + values.join(" - " + "$"));

        inputs[handle].value = values[handle];
        getcars();
    })

    inputs.forEach(function(input, handle) {
        if (input) {
            input.addEventListener('change', function() {
                filterSliders.noUiSlider.setHandle(handle, this.value);
            });
        }
    });
}


    /*============================================
        Tabs mouse hover animation
    ============================================*/
    $("[data-hover='fancyHover']").mouseHover();





</script>
