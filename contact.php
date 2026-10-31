<?php
include('header.php');
?>
<style>select{
        --size: 55px;
    border: 1px solid var(--border-color);
    border-radius: 0;
    height: var(--size);
    line-height: var(--size);
    padding: 0;
    padding-inline-start: 18px;
    padding-inline-end: 10px;
    font-size: 16px;
    width:100%;
    }
</style>
    <!-- Page title start-->
    <div class="page-title-area pb-100 bg-img bg-s-cover" data-bg-image="assets/images/banner/00.jpg" style="margin-top:175px;">
        <div class="container">
            <div class="content">
                <h2>Create Account</h2>
            
            </div>
        </div>
    </div>
    <!-- Page title end-->

    <!-- Contact-area start -->
    <div class="contact-area pt-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="card mb-30 color-1" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon">
                            <i class="fal fa-phone-plus"></i>
                        </div>
                        <div class="card-text">
                            <p><a href="tel:+990123456789">+81 80-7655-5912</a></p>
                            <p><a href="tel:+990456123789">+81 80-7655-5912</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card mb-30 color-2" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon">
                            <i class="fal fa-envelope"></i>
                        </div>
                        <div class="card-text">
                            <p><a href="mailTo:hello@example.com">nipponjidosha.co</a></p>
                            <p><a href="mailTo:info@example.com">info@nipponjidosha.co</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card mb-30 color-3" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon">
                            <i class="fal fa-map-marker-alt"></i>
                        </div>
                        <div class="card-text">
                            <p>Oritate 1-30-9, Gifu-City, Gifu-Ken 501-1132, JAPAN</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pb-70"></div>

            <div class="row gx-xl-5">
               
                <div class="col-lg-12 mb-30 order-lg-first" data-aos="fade-right">
                <div class="content-title">
                        <span class="subtitle color-primary mb-15 d-block">Get Connected</span>
                        <h2 class="mb-20">How Can We Help You?</h2>
                        <p class="mb-20">
                        </p>
                        <p class="mb-0">
                        </p>
                    </div>
                    <form id="contactForm" method="post" action="contact.php">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-20">
                                    <input type="text" name="name" class="form-control" id="name" required data-error="Enter your name" placeholder="Your Name*">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-20">
                                    <input type="email" name="email" class="form-control" id="email" required data-error="Enter your email" placeholder="Your Email*">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-20">
                                    <!-- <input type="text" name="name" class="form-control" id="name" required data-error="Enter your name" placeholder="Your Country*"> -->
                                    <select id="locationSelect" placeholder="Select Location">
                                    <option value="japan"> Japan</option>
                                    <option value="germany">Germany</option>
                                    <option value="uk">UK</option>
                                    <option value="usa">USA</option>
                                    <option value="thailand">Thailand</option>
                                    <option value="uae">UAE</option>
                                </select>       
                                                             <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-20">
                                    <input type="text" name="name" class="form-control" id="name" required data-error="Enter your name" placeholder="Your Port*">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
    <div class="form-group mb-20">
        <select name="vehicle" id="vehicle" required data-error="Select your vehicle">
            <option value="" disabled selected>Select your vehicle</option>
            <!-- Options will be dynamically added here -->
        </select>
        <div class="help-block with-errors"></div>
    </div>
</div>

<div class="col-md-3">
    <div class="form-group mb-20">
        <select name="model" id="model" required data-error="Select your model">
            <option value="" disabled selected>Select your model</option>
            <!-- Options will be dynamically added here -->
        </select>
        <div class="help-block with-errors"></div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const vehicleSelect = document.getElementById('vehicle');
        const modelSelect = document.getElementById('model');

        // Fetch data for the vehicle select
        fetch('https://frame.printdesa.com/main.php/?brand_sum')
            .then(response => response.json())
            .then(data => {
                // Populate the vehicle select
                data.forEach(item => {
                    const option = document.createElement('option');
                    option.value = item.brand_id;
                    option.textContent = item.brand_name;
                    vehicleSelect.appendChild(option);
                });
            })
            .catch(error => console.error('Error fetching vehicle data:', error));

        // Event listener for vehicle select change
        vehicleSelect.addEventListener('change', function () {
            const selectedBrandId = vehicleSelect.value;

            // Fetch data for the model select based on the selected brand
            fetch(`https://frame.printdesa.com/main.php/?brand_model=${selectedBrandId}`)
                .then(response => response.json())
                .then(data => {
                    // Clear previous options
                    modelSelect.innerHTML = '<option value="" disabled selected>Select your model</option>';

                    // Populate the model select
                    data.forEach(item => {
                        const option = document.createElement('option');
                        option.value = item.m_name;
                        option.textContent = item.m_name;
                        modelSelect.appendChild(option);
                    });
                })
                .catch(error => console.error('Error fetching model data:', error));
        });
    });
</script>

<div class="col-md-3">
    <div class="form-group mb-20">
        <select name="year"   id="year" required data-error="Select a year">
            <option value="" disabled selected>Select Your Year*</option>
            <?php
            $currentYear = date("Y");
            $startYear = 2000;
            for ($year = $startYear; $year <= $currentYear; $year++) {
                echo "<option value='$year'>$year</option>";
            }
            ?>
        </select>
        <div class="help-block with-errors"></div>
    </div>
</div>
 

                            <div class="col-lg-12">
                                <div class="checkbox mb-20">
                                    <input type="checkbox" id="checkboxInput">
                                    <label for="checkboxInput" id="checkbox">
                                        <svg viewBox="0 0 100 100">
                                            <path class="box" d="M82,89H18c-3.87,0-7-3.13-7-7V18c0-3.87,3.13-7,7-7h64c3.87,0,7,3.13,7,7v64C89,85.87,85.87,89,82,89z" />
                                            <polyline class="check" points="25.5,53.5 39.5,67.5 72.5,34.5 " />
                                        </svg>
                                        <span>I agreed Nippon JiDosha INTL CO's <a href="terms-conditions.html" target="_self" title="Link">Terms of Services</a></span>
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-12">
                            <button type="submit" name="btn" class="btn btn-lg btn-primary" title="Send message">
                                    Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="pb-70"></div>

        </div>
    
 

    </div>
    <!-- Contact-area end -->

    <!-- Footer-area start -->
    <?php
include('footer.php');
?>

<?php
if (isset($_POST['btn'])) {
    $from = $_POST['email'];
    $sub = "Contact Form Submission"; // You can customize the subject
    $msg = "Name: " . $_POST['name'] . "\n";
    $msg .= "Email: " . $_POST['email'] . "\n";
    $msg .= "Country: " . $_POST['location'] . "\n"; // Assuming you want to include the selected location
    $msg .= "Port: " . $_POST['port'] . "\n"; // Assuming you want to include the port
    $msg .= "Vehicle: " . $_POST['vehicle'] . "\n";
    $msg .= "Model: " . $_POST['model'] . "\n";
    $msg .= "Year: " . $_POST['year'] . "\n";
     $msg .= "Agreed to Terms: " . (isset($_POST['checkboxInput']) ? 'Yes' : 'No') . "\n";

    $to = "info@nipponjidosha.co";

    if (mail($to, $sub, $msg, "From: $from")) {
        echo '<script>alert("Mail sent successfully!")</script>';
    } else {
        echo '<script>alert("Error sending message")</script>';
    }
}
?>
