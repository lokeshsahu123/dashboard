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
                    <div class="bank-details row">
                        <div class="col-lg-12">
                            <h1 class="title_h1 same_heading">Transfer Points</h1>
                        </div>
                    </div>
                    <div class="tabs">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item col-6" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                    aria-selected="true">Send Out</button>
                            </li>
                            <li class="nav-item col-6" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-profile" type="button" role="tab"
                                    aria-controls="pills-profile" aria-selected="false">Claim Back</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab">
                                <div class="row px-lg-5 px-2 mx-0">
                                    <div class="col-lg-5 col-md-4 col-sm-12 p-0">
                                        <label for="">User ID</label>
                                        <input type="search" placeholder="search by username">
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-12 p-0"></div>
                                    <div class="col-lg-5 col-md-4 col-sm-12 p-0">
                                        <label for="">Amount To Deposit<span class="star">*</span> :</label>
                                        <input type="search" placeholder="Please Enter Amount">
                                    </div>
                                    <div class="col-12 bg-balance">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-2 col-12">
                                                <label><b>Balance :</b></label>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-0"></div>
                                            <div class="col-lg-3 col-md-3 col-4">
                                                <label>Agent :</label><br>
                                                <label>Master :</label>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-6">
                                                <label>Super Agent :</label><br>
                                                <label>MState Agent :</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="Col-12 p-0 mt-3">
                                        <label for="">Remark<span class="star">*</span></label>
                                        <textarea name="" id="" cols="30" rows="5" class="w-100"></textarea>
                                    </div>
                                    <div class="Col-12 text-center mt-2">
                                        <button class="btn submit">Send Out</button>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab">
                                <div class="row px-lg-5 px-2 mx-0">
                                    <div class="col-lg-5 col-md-4 col-sm-12 p-0">
                                        <label for="">User ID</label>
                                        <input type="search" placeholder="search by username">
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-12 p-0"></div>
                                    <div class="col-lg-5 col-md-4 col-sm-12 p-0">
                                        <label for="">Amount To Withdraw<span class="star">*</span> :</label>
                                        <input type="search" placeholder="Please Enter Amount">
                                    </div>
                                    <div class="col-12 bg-balance">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-2 col-12">
                                                <label><b>Balance :</b></label>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-0"></div>
                                            <div class="col-lg-3 col-md-3 col-4">
                                                <label>Agent :</label><br>
                                                <label>Master :</label>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-6">
                                                <label>Super Agent :</label><br>
                                                <label>MState Agent :</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="Col-12 p-0 mt-3">
                                        <label for="">Remark<span class="star">*</span></label>
                                        <textarea name="" id="" cols="30" rows="5" class="w-100"></textarea>
                                    </div>
                                    <div class="Col-12 text-center mt-2">
                                        <button class="btn submit">Claim Back</button>
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
</body>

</html>