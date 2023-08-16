<?php
    require 'header.php';
    ?>

<body>

    <div class="full-page">
        <!------LEFT SIDE MENU-START------->
        <?php require('sidepanel.php');?>
        <!------LEFT SIDE MENU-END------->
        <!------RIGHT SIDE CONTENT START------->
        <div class="right-sidebar">
            <div class="das-bg-block w-100">
                <div class="container-fluid">
                    <div class="usp">
                        <h5 class="title_h1 same_heading"><i class="fa-regular fa-id-badge"></i> User Info</i></h5>
                        <a href="manage-player.php" class="nav-link">
                            <h5 class="back_btn"><i class="fa-solid fa-xmark"></i></h5>
                        </a>
                    </div>
                    <div class="row user_summery mt-2">
                        <div class="col-lg-5">
                            <div class="info-card">
                                <div class="info-header">
                                    <h6>Personal Information</h6>
                                </div>
                                <div class="uer-info">
                                    <form action="">
                                        <div class="row">
                                            <div class="col-6">
                                                <label for="">First Name</label>
                                                <label for="" class="not-edit">Lakshya</label>
                                            </div>
                                            <div class="col-6">
                                                <label for="">Last Name</label>
                                                <label for="" class="not-edit">vilas</label>
                                            </div>
                                            <div class="col-6  mt-3 mt-md-0">
                                                <label for="">Gender</label>
                                                <label for="" class="not-edit">Male</label>
                                            </div>
                                            <div class="col-6 mt-3 mt-md-0">
                                                <label for="">Date of Birth</label>
                                                <label for="" class="not-edit">10/05/2010 12:07</label>

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 mt-lg-0  mt-3">
                            <div class="info-card">
                                <div class="info-header">
                                    <h6>Contact Info</h6>
                                </div>
                                <div class="uer-info">
                                    <form action="">
                                        <div class="row">
                                            <div class="col-md-4 col-6">
                                                <label for="">E-mail</label>
                                                <label for="" class="not-edit">Lakshya123@gmail.com</label>

                                            </div>
                                            <div class="col-md-4 col-6 form-group">
                                                <label for="">Phone</label>
                                                <label for="" class="not-edit">8545505050</label>

                                            </div>
                                            <div class="col-md-4 col-6 form-group mt-3 mt-md-0">
                                                <label for="">Address</label>
                                                <label for="" class="not-edit">55/02 Court</label>
                                            </div>
                                            <div class="col-md-4 col-6 mt-3 mt-md-0">
                                                <label for="">City</label>
                                                <label for="" class="not-edit">London</label>
                                            </div>
                                            <div class="col-md-4 col-6 mt-3 mt-md-0">
                                                <label for="">Country</label>
                                                <label for="" class="not-edit">U.K.</label>
                                            </div>
                                            <div class="col-md-4 col-6 mt-3 mt-md-0">
                                                <label for="">Zip Code</label>
                                                <label for="" class="not-edit">322001</label>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-3">
                            <div class="info-card">
                                <div class="info-header">
                                    <h6>Personal Information</h6>
                                </div>
                                <div class="uer-info">
                                    <form action="">
                                        <div class="row">
                                            <div class="col-md-4 col-6">
                                                <label for="">VIP Level</label>
                                                <label for="" class="not-edit">Wilder</label>
                                            </div>
                                            <div class="col-md-4 col-6 form-group">
                                                <label for="">Total Wagered</label>
                                                <label for="" class="not-edit">21</label>

                                            </div>
                                            <div class="col-md-4 col-6 form-group mt-3 mt-md-0">
                                                <label for="">Exclude from Bonus</label><br>
                                                <input type="checkbox" checked>
                                            </div>
                                            <div class="col-md-4 col-6 mt-3 mt-md-0">
                                                <label for="">Player category </label>
                                                <label for="" class="not-edit">None</label>
                                            </div>
                                            <div class="col-md-4 col-6 mt-3 mt-md-0">
                                                <label for="">Verification</label>
                                                <label for="" class="not-edit">Basic</label>
                                            </div>
                                            <div class="col-md-4 col-6 mt-3 mt-md-0">
                                                <label for="">Date Registered</label>
                                                <label for="" class="not-edit">10/05/2023 12:07</label>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-3">
                            <div class="info-card">
                                <div class="info-header">
                                    <h6>Social Preferences</h6>
                                </div>
                                <div class="uer-info">
                                    <form action="">
                                        <div class="row">
                                            <div class="col-6">
                                                <label for="">Subscribed to Email</label><br>
                                                <input type="checkbox" checked>
                                            </div>
                                            <div class="col-6">
                                                <label for="">Subscribed to Internal Message</label><br>
                                                <input type="checkbox" checked>
                                            </div>
                                            <div class="col-6 mt-3 mt-md-0">
                                                <label for="">Subscribed to Internal Message</label><br>
                                                <input type="checkbox" checked>
                                            </div>
                                            <div class="col-6 mt-3 mt-md-0">
                                                <label for="">Subscribed to Phone Call</label><br>
                                                <input type="checkbox">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mt-3">
                            <div class="info-card">
                                <div class="info-header">
                                    <h6>Account Info</h6>
                                </div>
                                <div class="uer-info">
                                    <form action="">
                                        <div class="row">
                                            <div class="col-md-2 col-4">
                                                <label for="">Player ID</label>
                                                <label for="" class="not-edit">885045</label>

                                            </div>
                                            <div class="col-md-2 col-4">
                                                <label for="">Username</label>
                                                <label for="" class="not-edit">885045</label>

                                            </div>
                                            <div class="col-md-2 col-4">
                                                <label for="">Account Status</label><br>
                                                <label for="" class="approved">Online</label>
                                            </div>
                                            <div class="col-md-2 col-4">
                                                <label for="">Affiliate ID</label>
                                                <label for="" class="not-edit">504105</label>
                                            </div>
                                            <div class="col-md-2 col-4">
                                                <label for="">Partner</label>
                                                <label for="" class="not-edit">Cwinz</label>
                                            </div>
                                            <div class="col-md-2 col-4">
                                                <label for="">Promocode</label>
                                                <label for="" class="not-edit">GH6G54GEE</label>
                                            </div>
                                            <div class="col-md-2 col-4 mt-3 mt-md-0">
                                                <label for="">Balance</label>
                                                <label for="" class="not-edit">$18.17"</label>
                                            </div>
                                            <div class="col-md-2 col-4 mt-3 mt-md-0">
                                                <label for="">Casino Blocked</label><br>
                                                <input type="checkbox" checked>
                                            </div>
                                            <div class="col-md-2 col-4 mt-3 mt-md-0">
                                                <label for="">Sport Blocked</label><br>
                                                <input type="checkbox" checked>
                                            </div>
                                            <div class="col-md-2 col-4 mt-3 mt-md-0">
                                                <label for="">Exclusion From</label><br>
                                                <input type="checkbox">
                                            </div>
                                            <div class="col-md-2 col-4 mt-3 mt-md-0">
                                                <label for="">Exclusion Until</label><br>
                                                <input type="checkbox">
                                            </div>
                                            <div class="col-md-2 col-4 mt-3 mt-md-0">
                                                <label for="">2FA State</label><br>
                                                <label class="approved" for=""
                                                    style="background: #d5e5f5;color: #2d7fd1 !important;">On</label>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!------RIGHT SIDE CONTENT END------->
    </div>

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
</body>

</html>