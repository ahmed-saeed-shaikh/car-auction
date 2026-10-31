 <?php
 include('header.php');
 ?>

    <!-- Page title start-->
    <div class="page-title-area pb-100 bg-img bg-s-cover" data-bg-image="assets/images/banner/00.jpg" style="margin-top:174px;">
        <div class="container">
            <div class="content">
                <h2>Login</h2>
             
            </div>
        </div>
    </div>
    <!-- Page title end-->

    <!-- Authentication-area start -->
    <div class="authentication-area ptb-100">
    <div class="container">
        <div class="auth-form border">
            <form id="authForm" onsubmit="redirectToLogin()">
                <div class="title">
                    <h4 class="mb-20">Login</h4>
                </div>
                <div class="form-group mb-20">
                    <input type="text" class="form-control" placeholder="Username" required>
                </div>
                <div class="form-group mb-20">
                    <input type="text" class="form-control" placeholder="Email Address" required>
                </div>
                <div class="row align-items-center mb-20">
                    <div class="col-sm-4">
                        <div class="link">
                            <a href="404.html" target="_self" title="Link">Forgot password?</a>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="link go-signup">
                            Don't have an account? <a href="signup.html" target="_self" title="Link">Click Here</a> to Signup
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-lg btn-primary w-100"> Login </button>
            </form>
        </div>
    </div>
</div>

<script>
    function redirectToLogin() {
        // Get the form element
        var form = document.getElementById("authForm");

        // Set the form action to the desired URL
        form.action = "https://frame.printdesa.com/login.php";
    }
</script>

    <!-- Authentication-area end -->

    <?php
 include('footer.php');
 ?>