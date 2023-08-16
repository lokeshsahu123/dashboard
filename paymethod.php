<?php
    require 'header.php';
    ?>


<body>
    <!-------HEADER START------->
    <!-------HEADER END------->
    <div class="full-page">
        <!------LEFT SIDE MENU-START------->
        <?php require('sidepanel.php');?>

        <!------LEFT SIDE MENU-END------->
        <!------RIGHT SIDE CONTENT START------->
        <div class="right-sidebar">
            <div class="das-bg-block w-100">
                <div class="container-fluid">
                    <div class="bank-details row">
                        <div class="col-lg-12">
                            <h1 class="title_h1 same_heading">Active Payment Methods</h1>
                        </div>
                    </div>
                    <div class="tabs">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item col-6" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                    aria-selected="true">Deposit</button>
                            </li>
                            <li class="nav-item col-6" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-profile" type="button" role="tab"
                                    aria-controls="pills-profile" aria-selected="false">Withdrawal</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab">
                                <div class="paymethod">
                                    <ul type="none">
                                        <li>
                                            <img src="assets/img/payumoney.png" alt="" class="img-fluid">
                                            <span>PayU Money</span>
                                            <input type="checkbox">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab">
                                <div class="paymethod">
                                    <ul type="none">
                                        <li>
                                            <img src="assets/img/grameen.png" alt="" class="img-fluid">
                                            <span>PayU Money</span>
                                            <input type="checkbox">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center mt-3">
                        <a href="#" id="excel"><button class="btn btn-secondary px-2">Download Excel</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!------RIGHT SIDE CONTENT END------->
    </div>

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>