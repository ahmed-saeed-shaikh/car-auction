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
                                            Cars Brands
                                        </button>
                                    </h5>
                                    <div id="brands" class="collapse show">
                                        <div class="accordion-body scroll-y mt-20">
                                            <ul class="list-group custom-radio">
                                            <?php
$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'frame.printdesa.com/main.php/?brand_sum',
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
if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
    // Print the raw response and JSON decoding error for debugging purposes
    echo 'Raw Response: ' . $response . PHP_EOL;
    echo 'JSON Decode Error: ' . json_last_error_msg() . PHP_EOL;
    die('Error decoding JSON response');
}

// Check if a brand is selected
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['selectedBrand'])) {
    $selectedBrand = $_POST['selectedBrand'];

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'frame.printdesa.com/main.php/?brand_model=' . urlencode($selectedBrand),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET', // Assuming it's a GET request, modify if needed
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'Cookie: PHPSESSID=avn6pthl4hvrsk7o86vjphrlq6'
        ),
    ));

    $apiResponse = curl_exec($curl);

    // Check for cURL errors
    if ($apiResponse === false) {
        echo 'cURL Error: ' . curl_error($curl) . PHP_EOL;
    }

    curl_close($curl);

    // Output the response
    header('Content-Type: application/json');
    echo json_encode(['apiResponse' => $apiResponse]);
    exit;
}
?>

 
<ul id="brandList">
    <?php foreach ($data as $brand) : ?>
        <li data-bname="<?= $brand['brand_name'] ?>">
       
            <input class="input-radio" type="radio" id="selectedBrand<?= $brand['brand_id'] ?>" name="selectedBrand" value="<?= $brand['brand_id'] ?>" onclick="getcars(),getmodels(<?=$brand['brand_id']?>)">
   
            <label class="form-radio-label" for="selectedBrand<?= $brand['brand_id'] ?>">
                <span><?= $brand['brand_name'] ?></span>
                <span class="qty">(<?= $brand['vehicle_count'] ?>)</span>
            </label>
        </li>
    <?php endforeach; ?>
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
                                                        <input class="form-control" type="number" name="min_amount" id="min" oninput="getcars()">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group mb-30">
                                                        <label class="mb-1 color-dark">Maximum</label>
                                                        <input class="form-control" type="number" name="max_amount" id="max" oninput="getcars()">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-item">
    <div class="price-slider" data-range-slider="filterPriceSlider"></div>
    <div class="price-value">
        <span class="color-dark">Price:
            <span class="filter-price-range" data-range-value="filterPriceSliderValue"></span>
        </span>
    </div>
</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget p-0 mb-40">
                                    <h5 class="title">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#brands" aria-expanded="true" aria-controls="brands">
                                            Models
                                        </button>
                                    </h5>
                                    <div id="brands" class="collapse show">
                                        <div class="accordion-body scroll-y mt-20">
                                            <ul class="list-group custom-radio" id="models_list">
                                          
                                          
                                            </ul>
                                        </div>
                                    </div>
                                <div class="cta">
                                    <!-- <button class="btn btn-lg btn-primary icon-start w-100" type="submit"><i class="fal fa-sync-alt"></i>Reset All</button> -->
                                </div>
                                <!-- Spacer -->
                                <div class="pb-40"></div>
                            </aside>
                        </div>
                    </div>
                </div>