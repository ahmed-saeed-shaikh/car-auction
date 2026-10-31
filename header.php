<!DOCTYPE html>
<html lang="zxx">


 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="KreativDev">

    <!-- Title -->
    <title>Auction Cars  </title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/fav.png" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/vendors/bootstrap.min.css">
    <!-- Fontawesome Icon CSS -->
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/all.min.css">
    <!-- Icomoon Icon CSS -->
    <link rel="stylesheet" href="assets/fonts/icomoon/style.css">
    <!-- NoUi Range Slider -->
    <link rel="stylesheet" href="assets/css/vendors/nouislider.min.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="assets/css/vendors/magnific-popup.min.css">
    <!-- Swiper Slider -->
    <link rel="stylesheet" href="assets/css/vendors/swiper-bundle.min.css">
    <!-- Nice Select -->
    <link rel="stylesheet" href="assets/css/vendors/nice-select.css">
    <!-- AOS Animation CSS -->
    <link rel="stylesheet" href="assets/css/vendors/aos.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/css/vendors/animate.min.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- Include jQuery -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-...." crossorigin="anonymous" />

</head>
<style>
    /* Add this CSS for responsiveness */
@media (max-width: 767px) {
    /* Adjust mobile menu styles */
    .main-responsive-nav {
        display: block;
    }

    .main-navbar {
        display: none;
    }

    .mobile-menu {
        display: block;
    }

    /* Add styles for mobile logo if needed */
    /* .mobile-logo {
        display: block;
    } */

    /* Adjust navigation items for mobile view */
    #mainMenu {
        display: flex;
        flex-direction: column;
        /* align-items: center; */
    }

    .nav-link {
        text-align: center;
        margin: 10px 0;
    }
}

/* Add styles for larger screens if needed */
@media (min-width: 768px) {
    .main-responsive-nav {
        display: none;
    }

    .main-navbar {
        display: block;
    }

    .mobile-menu {
        display: none;
    }
}
i.fab.fa-whatsapp {
    font-size: 22px;
    margin-left: -21px;
    color: #cf2127;
}
i.fas.fa-phone {
    margin-left: -17px;
    margin-right: 4px;
    background: #cf2127;
    padding: 5px;
    border-radius: 50px;
    color: white;
}
@media only screen and (max-width: 767px) {
.alignorders{margin-left: 42px;}
.alignaccounts{margin-left: 61px;}
}
</style>
<body class="theme-color-2">
    
    <!-- Preloader start -->
    <div id="preLoader">
        <div class="loader">
            <div class="road">
                <div class="line"></div>
                <div class="line center-line"></div>
                <div class="line"></div>
                <div class="icon">
                    <i class="fas fa-car"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader end -->

    <!-- Header-area start -->
    <header class="header-area header-2" data-aos="slide-down">
        <div class="row header-top ">
            <div class="col-md-5 d-flex justify-content-center">
                <img src="./assets/images/nj.png" class="logo_imgg" alt="">
            </div>
            <div class="col-md-7">
                <div class="row hide_mob">
                    <div class="col-md-3">
                        <span>Whatsapp Number</span>
                        <p><i class="fab fa-whatsapp"></i> +81 80 7655 5912</p>
                    </div>
                    <div class="col-md-3">
                        <span>24/7 Sales & Support</span>
                        <p><i class="fas fa-phone"></i> +81 80-7655-5912</p>
                    </div>
                    <div class="col-md-3" id="japanTimeContainer">
    <span>Japan Time</span><br>
    <div class="d-inline-flex">
    <img src="./assets/images/icon/clock-solid.svg" style="    margin-left: -26px;margin-right: 8px;    height: 27px;padding: 4px;background: red;border-radius: 50px;"   alt="clock icon"> <p id="japanTime"></p>
    </div>
</div>
                    <div class="col-md-3">
                        <span>Total Cars</span>
                        <p>
        <img src="./assets/images/icon/car-solid.svg" style="margin-left: -26px; margin-right: 8px; height: 27px; padding: 4px; background: red; border-radius: 50px;" alt="car icon">
        <span id="totalCarsCount"></span>
    </p>
                    </div>
                </div>
            </div>
        </div>

<!-- total cars script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  fetch('https://frame.printdesa.com/main.php/?total_cars')
    .then(response => response.json())
    .then(data => {
        console.log(data);
        const totalCarsCountElement = document.getElementById('totalCarsCount');
        if (totalCarsCountElement) {
            const countValue = parseInt(data[0].Count, 10); 
            totalCarsCountElement.textContent = countValue; 
        }
    })
    .catch(error => {
        console.error('Error fetching data:', error);
    });
});
</script>
<!-- total cars script -->



























        <!-- Start mobile menu -->
        <div class="mobile-menu">
            <div class="container">
                <div class="mobile-menu-wrapper"></div>
            </div>
        </div>
        <!-- End mobile menu -->

        <div class="main-responsive-nav">
            <div class="container">
                <!-- Mobile Logo -->
             
                <!-- Menu toggle button -->
                <button class="menu-toggler" type="button">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>

        <div class="main-navbar">
            <div class="container custom-container">
                <nav class="navbar navbar-expand-lg justify-content-between">
                    <!-- Logo -->
                 
                    <!-- Navigation items -->
                    <div class="collapse navbar-collapse">
                        <ul id="mainMenu" class="navbar-nav mobile-item mx-auto">
                            <li class="nav-item">
                                <a href="index.php" class="nav-link toggle"><img src="./assets/images/icon/home.png" height="35px" alt="home icon"> &nbsp;Home </a>
                            
                            </li>
                            <li class="nav-item">
                                <a class="nav-link toggle" href="auction.php"><img src="./assets/images/icon/info.png" height="35px" alt="home icon"> &nbsp; About </a>
                                 
                            </li>
                            <li class="nav-item">
                                <a class="nav-link toggle" href="shop.php"><img src="./assets/images/icon/icons8-stock-64.png" height="35px" alt="home icon"> &nbsp; Stock</a>
                            
                            </li>
                          
                            <li class="nav-item">
                                <a class="nav-link toggle" href="about.php"><img src="./assets/images/icon/icons8-auction-100.png" height="35px" alt="home icon"> &nbsp; Auction </a>
                                
                            </li>
                            <li class="nav-item">
                                <a class="nav-link toggle" > <img src="./assets/images/icon/icons8-order-50.png" height="35px" class="alignorders"   alt="home icon"> &nbsp; How to Order </a>
                                <div class="row">
                                <div class="col-md-3">
                                    <ul class="menu-dropdown">
                                        <li class="nav-item">
                                            <a class="nav-link" href="order.php">Auction Order Process</a>
                                        </li>
                                         <li class="nav-item">
                                            <a class="nav-link" href="stock.php">Auction  Stock Process</a>
                                        </li>
                                    </ul>
                                </div>  
                              </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php"><img src="./assets/images/icon/icons8-add-user-50.png" height="35px" class="alignaccounts" alt="home icon"> &nbsp; Create Account </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://admin.nipponjidosha.co/login.php"><img src="./assets/images/icon/icons8-add-user-50.png" height="35px" alt="home icon"> &nbsp; Login </a>
                            </li>
                        </ul>
                    </div>
                 
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <script>
function updateJapanTime() {
    var japanTimeContainer = document.getElementById('japanTime');
    if (japanTimeContainer) {
        var now = new Date();
        var options = { timeZone: 'Asia/Tokyo', hour12: false };
        var japanTime = now.toLocaleTimeString('en-US', options);
        japanTimeContainer.textContent = japanTime;
    }
}

// Update Japan time initially
updateJapanTime();

// Update Japan time every second (1000 milliseconds)
setInterval(updateJapanTime, 1000);
</script>