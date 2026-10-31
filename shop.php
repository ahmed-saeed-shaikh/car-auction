
<?php
include('header.php');
?>
    <!-- Page title start-->
    <div class="page-title-area pb-100 bg-img bg-s-cover" data-bg-image="assets/images/banner/stockooo.jpg    " style="margin-top:175px;      opacity: 1.5 !important;
  ">
        <div class="container">
            <div class="content">
                <!-- <h2>Stock</h2> -->
                <!-- <p style="color:white;">Select your Desired Quality & Well Inspected Cars, Vans, Trucks, Buses & Construction Machinery available in stock ready to Export. -->
</p>
                
            </div>
        </div>
    </div>
    <!-- Page title end-->
    <div class="section">
    <div class="container-fluid newsupdate">
     
    </div>
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
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Get the select elements and input field
        let makerSelect = document.getElementById("makerSelect");
        let modelSelect = document.getElementById("modelSelect");
        let locationSelect = document.getElementById("locationSelect");
        let yearSelect1 = document.getElementById("yearSelect1");
        let yearSelect2 = document.getElementById("yearSelect2");
        let keywordsInput = document.getElementById("keywordsInput");
        let stockSearchButton = document.getElementById("stockSearchButton");

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
            var paginate = document.getElementById('paginate');

            let selectedBrandValue = makerSelect.value;
        let selectedModel = modelSelect.value;
        let selectedLocation = locationSelect.value; // Corrected variable name
        let selectedYearFrom = yearSelect1.value;
        let selectedYearTo = yearSelect2.value;
        let selectedKeywords = keywordsInput.value;

        // Construct the API request URL
        const apiUrl = 'https://frame.printdesa.com/main.php/?vehicle_fillter=' +
            '&maker=' + encodeURIComponent(selectedBrandValue) +
            '&model=' + encodeURIComponent(selectedModel) +
            '&location=' + encodeURIComponent(selectedLocation) + // Corrected variable name
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
                            let pagei = data.pagination

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
                            console.log(pagei);
        paginate.innerHTML = ''
        let current_length = (pagei.current_page + 5)
        if(pagei.current_page != 1){
        paginate.innerHTML += `<a onclick="pagination(${1})" class="page-numbers radius-0"  > Start </a>`;
    }
        for(let k = pagei.current_page; k < current_length ;k ++ ){
            // <a href="car-details.php?product_id=' . $productID . '" class="page-numbers radius-0">2</a>
            // paginate.innerHTML += `<a onclick="pagination(${k})" class="page-numbers radius-0 ${k == pagei.current_page ? 'current' : '' }"  > ${k}</a>`;
            paginate.innerHTML += `<a onclick="pagination(${k}, '${selectedLocationFilter}')" class="page-numbers radius-0 ${k == pagei.current_page ? 'current' : '' }"  > ${k}</a>`;

        }
        paginate.innerHTML += `<a onclick="pagination(${pagei.total_pages})" class="page-numbers radius-0 "  > Last </a>`;
      
                        }
                    })
                    .catch(error => console.error('Error in API request:', error));
        });
    });
</script>
    <!-- Shop-area start -->
    <div class="shop-area pt-100 pb-60">
        <div class="container">

            <div class="row gx-xl-5">
              
                <div class="col-lg-12 col-xl-12">
                  
                    <!-- Products -->
                    <div class="row" id="cars_listing">
                  
   </div>   </div>   </div>
      
   <div class="pagination mt-20 mb-40 justify-content-end" id="paginate" data-aos="fade-up">

   </div>




                </div>
            </div>
       
        </div>
  
    </div>
    <!-- Shop-area end -->
  
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
             
    let selectedBrandValueFilter = document.getElementById('makerSelect').value;
    let selectedModelFilter = document.getElementById('modelSelect').value;
    let selectedLocationFilter = document.getElementById('locationSelect').value;
    let selectedYearFromFilter = document.getElementById('yearSelect1').value;
    let selectedYearToFilter = document.getElementById('yearSelect2').value;
    let selectedKeywordsFilter = document.getElementById('keywordsInput').value;

    $.ajax({
        url: 'https://frame.printdesa.com/main.php/?vehicle_fillter=' +
            '&page=' + page +
            '&maker=' + selectedBrandValue ?? ''+
            '&model=' + modelNameValue ?? ''+
            '&location=' + selectedLocation ?? ''+  // Ensure that the parameter name matches
            '&year_from=' + selectedYearFrom ?? ''+
            '&year_to=' + selectedYearTo ?? ''+
            '&keywords=' + selectedKeywords ?? '',
        method: 'GET',
        data: {
            // selectedModelName: modelNameValue,
            // Add other parameters as needed
            selectedBrandFilter: selectedBrandValueFilter ,
            selectedModelFilter: selectedModelFilter ,
            selectedLocationFilter: selectedLocationFilter ,
            selectedYearFromFilter: selectedYearFromFilter ,
            selectedYearToFilter: selectedYearToFilter ,
            selectedKeywordsFilter: selectedKeywordsFilter ,
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
         
            // paginate.innerHTML += `<a onclick="pagination(${k})" class="page-numbers radius-0 ${k == pagei.current_page ? 'current' : '' }"  > ${k}</a>`;
            paginate.innerHTML += `<a onclick="pagination(${k}, '${selectedLocationFilter}')" class="page-numbers radius-0 ${k == pagei.current_page ? 'current' : '' }"  > ${k}</a>`;

        }
        paginate.innerHTML += `<a onclick="pagination(${pagei.total_pages})" class="page-numbers radius-0 "  > Last </a>`;
        
        },
        error: function(error) {
            console.error('Error:', error);
        }
    });
    }

    function getcars() {
    //     // alert('dfkhj');
    // // Assuming there is only one radio button with the name "selectedBrand"
    // var selectedBrandRadioButton = document.querySelector('input[name="selectedBrand"]:checked');
    // var selectedBrandValue = selectedBrandRadioButton ? selectedBrandRadioButton.value : '';

    // // Assuming there is only one radio button with the name "model_name"
    // var modelNameRadioButton = document.querySelector('input[name="model_name"]:checked');
    // var modelNameValue = modelNameRadioButton ? modelNameRadioButton.value : '';

    // var max_amount = document.querySelector('input[name="max_amount"]');
    // var max_amountValue = max_amount ? max_amount.value : 0;

    // var min_amount = document.querySelector('input[name="min_amount"]');
    // var min_amountValue = min_amount ? min_amount.value : 0;
    // var paginate = document.getElementById('paginate');

    let selectedBrandValueFilter = document.getElementById('makerSelect').value;
    let selectedModelFilter = document.getElementById('modelSelect').value;
    let selectedLocationFilter = document.getElementById('locationSelect').value;
    let selectedYearFromFilter = document.getElementById('yearSelect1').value;
    let selectedYearToFilter = document.getElementById('yearSelect2').value;
    let selectedKeywordsFilter = document.getElementById('keywordsInput').value;

    // Assuming you have jQuery available for AJAX requests
    $.ajax({
        url: 'https://frame.printdesa.com/main.php/?vehicle_fillter=&maker=&model=&location=&year_from=&year_to=&keywords=',
        // url: 'https://frame.printdesa.com/main.php/?vehicle_fillter=&maker=' + selectedBrandValue + '&model=' + modelNameValue + '&startPrice=' + parseInt(min_amountValue) + '&endPrice=' + parseInt(max_amountValue),
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
            // paginate.innerHTML += `<a onclick="pagination(${k})" class="page-numbers radius-0 ${k == pagei.current_page ? 'current' : '' }"  > ${k}</a>`;
            paginate.innerHTML += `<a onclick="pagination(${k}, '${selectedLocationFilter}')" class="page-numbers radius-0 ${k == pagei.current_page ? 'current' : '' }"  > ${k}</a>`;

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
        start: [1, 0],
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
        start: [1, 20000],
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


  
    $("[data-hover='fancyHover']").mouseHover();



</script>
