<?php
    require 'header.php';
    ?>

<body>
    <div class="full-page">
        <!------LEFT SIDE MENU-START------->
        <?php require('sidepanel.php');?>
        <!------LEFT SIDE MENU-END------->
        <div class="right-sidebar">
            <div class="das-bg-block w-100">
                <div class="container-fluid" id="font">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="title_h1 dashboard">Dashboard</h1>
                        </div>
                        <div class="dash_top_content row">
                            <div class="left_action col-lg-7 row">
                                <div class=" col-lg-6 col-md-6 col-12">
                                    <div class="custom-box">
                                        <div class="icon-sm-card">
                                            <i class="fa-solid fa-user-tie"></i>
                                            <div>
                                                <span>4010</span>
                                                <h6>Total Player</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 mt-lg-0 mt-md-0 mt-3 ">
                                    <div class="custom-box">
                                        <div class="icon-sm-card" id="light-green">
                                            <i class="fa-solid fa-user-plus"></i>
                                            <div>
                                                <span>0</span>
                                                <h6>Today's Signup</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 mt-3 mt">
                                    <div class="custom-box">
                                        <div class="icon-sm-card">
                                            <i class="fa-solid fa-users"
                                                style="background:rgba(255, 0, 227, 0.2); color: #a70197;"></i>
                                            <div>
                                                <span>1036</span>
                                                <h6>Total Affiliates</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 mt-3 mt">
                                    <div class="custom-box">
                                        <div class="icon-sm-card">
                                            <i class="fa-solid fa-comment-dollar"
                                                style="background:rgba(255, 167, 0, 0.2); color: #7d5100;"></i>
                                            <div>
                                                <span>0.00</span>
                                                <h6>Todays Commission</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 mt-3 mt">
                                    <div class="custom-box">
                                        <div class="icon-sm-card">
                                            <i class="fa-solid fa-bullhorn"
                                                style="background:rgba(255, 20, 20, 0.3); color: #8c0000;"></i>
                                            <div>
                                                <span>4010</span>
                                                <h6>Active Promotion</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 mt-3 mt">
                                    <div class=" custom-box">
                                        <div class="icon-sm-card">
                                            <i class="fa-solid fa-exchange"
                                                style="background:rgba(0, 255, 135, 0.3); color: #006737;"></i>
                                            <div>
                                                <span>0.00 vs 0.00</span>
                                                <h6>Cash-in vs Cash-out</h6>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="right_action col-lg-5 row p-0 m-0">
                                <div class="row p-0 m-0">
                                    <div class="col-lg-6 col-md-6 col-12 mt-lg-0 mt-3 ">
                                        <div class="custom-box">
                                            <div class="inner-box p-3">
                                                <div class="custom-content1">
                                                    <p class="icon-bg"><i
                                                            class="fa-sharp fa-solid fa-magnifying-glass-dollar fa-2x"></i>
                                                    </p>
                                                    <h5><a href="#" class="nav-link">Total KYC Pending</a></h5>
                                                    <p class="content-total">5</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12 mt-lg-0 mt-3">
                                        <div class="custom-box">
                                            <div class="inner-box p-3">
                                                <div class="custom-content1">
                                                    <p class="icon-bg"><i
                                                            class="fa-sharp fa-solid fa-magnifying-glass-dollar fa-2x"></i>
                                                    </p>
                                                    <h5><a href="#" class="nav-link">Total Cashout Pending</a></h5>
                                                    <p class="content-total">5544</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12 mt-lg-3 mt-3 ">
                                        <div class="custom-box">
                                            <div class="inner-box p-3">
                                                <div class="custom-content1">
                                                    <p class="icon-bg pro-icon"><i
                                                            class="fa-solid fa-bullhorn fa-2x"></i>
                                                    </p>
                                                    <h5><a href="#" class="nav-link">Total Promotion</a></h5>
                                                    <p class="content-total">8563.00</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12 mt-lg-3 mt-3">
                                        <div class="custom-box">
                                            <div class="inner-box p-3">
                                                <div class="custom-content1">
                                                    <p class="icon-bg pro-icon"><i
                                                            class="fa-solid fa-bullhorn fa-2x"></i>
                                                    </p>
                                                    <h5><a href="#" class="nav-link">Today's Promotion</a></h5>
                                                    <p class="content-total">0.00(0)</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 mt-lg-4 mt-md-5 mt-2">
                            <div class="custom-box">
                                <div class="content-bg-box c1">
                                    <h5>Statistics Card</h5>
                                    <div class="custom-content-icon">
                                        <!-- <i class="fa-solid fa-money-bill " style="color: #e8aa41;"></i> -->
                                        <img src="assets/img/cash-in.png" alt="">
                                    </div>
                                    <!-- <p>Total 48.5% growth 😎 this month</p> -->
                                    <div class="w-100 inside-box">
                                        <div class="custom-content">
                                            <h5><a href="#" class="nav-link">Total Cash-in</a></h5>
                                            <p class="content-total">210</p>

                                        </div>
                                        <div class="custom-content">
                                            <h5><a href="#" class="nav-link">Today's Cash-in</a></h5>
                                            <p class="content-total">0.00(0)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 mt-lg-4 mt-md-5 mt-2">
                            <div class="custom-box">
                                <div class="content-bg-box c1">
                                    <h5>Statistics Card</h5>
                                    <div class="custom-content-icon">
                                        <!-- <i class="fa-solid fa-money-bill " style="color: #e8aa41;"></i> -->
                                        <img src="assets/img/cash-in.png" alt="">
                                    </div>
                                    <!-- <p>Total 48.5% growth 😎 this month</p> -->
                                    <div class="w-100 inside-box">
                                        <div class="custom-content">
                                            <div>
                                                <h5><a href="#" class="nav-link">Today's Sendout</a></h5>
                                                <p class="content-total">580134.00</p>
                                            </div>
                                        </div>
                                        <div class="custom-content">
                                            <div>
                                                <h5><a href="#" class="nav-link">Total Sendout</a></h5>
                                                <p class="content-total">580134.00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 mt-lg-4 mt-md-5 mt-2">
                            <div class="custom-box">
                                <div class="content-bg-box c1">
                                    <h5>Statistics Card</h5>
                                    <div class="custom-content-icon">
                                        <!-- <i class="fa-solid fa-coins " style="color: #e8aa41;"></i> -->
                                        <img src="assets/img/refund.png" alt="">
                                    </div>
                                    <!-- <p>Total 48.5% growth 😎 this month</p> -->
                                    <div class="w-100 inside-box">
                                        <div class="custom-content">
                                            <h5><a href="#" class="nav-link">Total Cashout</a></h5>
                                            <p class="content-total">210</p>

                                        </div>
                                        <div class="custom-content">
                                            <h5><a href="#" class="nav-link">Cashout Pending</a></h5>
                                            <p class="content-total">0.00</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 mt-lg-4 mt-md-5 mt-2">
                            <div class="custom-box">
                                <div class="content-bg-box c1">
                                    <h5>Statistics Card</h5>
                                    <div class="custom-content-icon">
                                        <!-- <i class="fa-solid fa-coins " style="color: #e8aa41;"></i> -->
                                        <img src="assets/img/refund.png" alt="">

                                    </div>
                                    <!-- <p>Total 48.5% growth 😎 this month</p> -->
                                    <div class="w-100 inside-box">
                                        <div class="custom-content">
                                            <div>
                                                <h5><a href="#" class="nav-link">Cashout Approved</a></h5>
                                                <p class="content-total">5801</p>
                                            </div>
                                        </div>
                                        <div class="custom-content">
                                            <div>
                                                <h5><a href="#" class="nav-link">Today's Cashout</a></h5>
                                                <p class="content-total">58</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 mt-lg-4 mt-md-5 mt-2">
                            <div class="custom-box">
                                <div class="content-bg-box c1">
                                    <h5>Statistics Card</h5>
                                    <div class="custom-content-icon">
                                        <!-- <i class="fa-solid fa-money-bill " style="color: #e8aa41;"></i> -->
                                        <img src="assets/img/money-bag.png" alt="">

                                    </div>
                                    <!-- <p>Total 48.5% growth 😎 this month</p> -->
                                    <div class="w-100 inside-box">
                                        <div class="custom-content">
                                            <h5><a href="#" class="nav-link">Total Cash-in(Bot)</a></h5>
                                            <p class="content-total">210744.20</p>

                                        </div>
                                        <div class="custom-content">
                                            <h5><a href="#" class="nav-link">Total Cashout(Bot)</a></h5>
                                            <p class="content-total">210744.20</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 mt-lg-4 mt-md-5 mt-2">
                            <div class="custom-box">
                                <div class="content-bg-box c1">
                                    <h5>Statistics Card</h5>
                                    <div class="custom-content-icon">
                                        <!-- <i class="fa-solid fa-money-bill " style="color: #e8aa41;"></i> -->
                                        <img src="assets/img/money-bag.png" alt="">

                                    </div>
                                    <!-- <p>Total 48.5% growth 😎 this month</p> -->
                                    <div class="w-100 inside-box">
                                        <div class="custom-content">
                                            <div>
                                                <h5><a href="#" class="nav-link">Today's Cash-in(Bot)</a></h5>
                                                <p class="content-total">00.00</p>
                                            </div>
                                        </div>
                                        <div class="custom-content">
                                            <div>
                                                <h5><a href="#" class="nav-link">Today's Cashout(Bot)</a></h5>
                                                <p class="content-total">00.00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-12 mt-lg-5 mt-3">
                            <div class="chart-box" style=" border-bottom: 3px solid #8af774;">
                                <svg version="1.1" style="font-family: Roboto; font-size: 12px; padding-top: 30px;"
                                    xmlns="" width="200" height="250" viewBox="0 0 250 250" aria-hidden="false"
                                    aria-label="Interactive chart">
                                    <defs aria-hidden="true">
                                        <clipPath>
                                            <rect x="0" y="0" width="230" height="187" fill="none"></rect>
                                        </clipPath>
                                        <clipPath>
                                            <rect x="0" y="0" width="230" height="499.3561522880976" fill="none"></rect>
                                        </clipPath>
                                    </defs>
                                    <rect fill="#ffffff" x="0" y="0" width="250" height="250" rx="0" ry="0"
                                        aria-hidden="true"></rect>
                                    <rect fill="none" x="10" y="10" width="230" height="187" aria-hidden="true"></rect>
                                    <g data-z-index="0" aria-hidden="true">
                                        <path fill="rgb(237, 238, 240)"
                                            d="M 125 14.488000000000014 A 89.01199999999999 89.01199999999999 0 1 1 124.91098801483528 14.4880445059963 M 124.93006201165629 33.5620349689971 A 69.93799999999999 69.93799999999999 0 1 0 125 33.56200000000001">
                                        </path>
                                    </g>
                                    <rect fill="none" data-z-index="1" x="10" y="10" width="230" height="187"
                                        aria-hidden="true"></rect>
                                    <g data-z-index="1" aria-hidden="true"></g>
                                    <g data-z-index="2" aria-hidden="true">
                                        <path fill="none" data-z-index="7"
                                            d="M 125 24.025000000000006 A 79.475 79.475 0 1 1 124.9205250132458 24.025039737496698 M 125 103.5 A 0 0 0 1 0 125 103.5">
                                        </path>
                                    </g>
                                    <g data-z-index="2" opacity="1" transform="translate(10,10) scale(1 1)"
                                        aria-hidden="true" style="cursor: pointer;">
                                        <g data-z-index="1" transform="translate(98,83)" style="cursor: pointer;"><text
                                                font-family='Roboto-Regular,Roboto' x="5" data-z-index="1" y="16"
                                                style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 600; fill: rgb(0, 0, 0);">
                                                <tspan fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px"
                                                    stroke-linejoin="round" style="">0.95<tspan x="5" dy="0">​</tspan>
                                                </tspan>0.95
                                            </text></g>
                                    </g>
                                    <g data-z-index="3" aria-hidden="false">
                                        <g data-z-index="0.1" opacity="1" transform="translate(10,10) scale(1 1)"
                                            clip-path="url(#highcharts-hw758el-89-)" style="cursor: pointer;"
                                            aria-hidden="false">
                                            <path fill="#8af774"
                                                d="M 115 4.488000000000014 A 89.01199999999999 89.01199999999999 0 1 1 87.40913762128712 8.872105915372543 A 9.536999999999999 9.536999999999999 0 1 1 93.32146527386845 27.006654647792715 A 69.93799999999999 69.93799999999999 0 1 0 115 23.562000000000012 A 9.536999999999999 9.536999999999999 0 1 1 115 4.488000000000014"
                                                sweep-flag="0" stroke-linecap="round" stroke-linejoin="round"
                                                tabindex="-1" role="img" aria-label="0.95." style="outline: none;">
                                            </path>
                                        </g>
                                        <g data-z-index="0.1" opacity="1" transform="translate(10,10) scale(1 1)"
                                            clip-path="none" aria-hidden="true"></g>
                                    </g>
                                    <g data-z-index="3" aria-hidden="true">
                                        <!-- <g stroke-linecap="round" style="cursor: pointer;"
                                            transform="translate(216,10)">
                                            <title>Chart context menu</title>
                                            <rect fill="#ffffff" x="0.5" y="0.5" width="24" height="22" rx="2" ry="2"
                                                stroke="none" stroke-width="1"></rect>
                                            <path fill="#666666"
                                                d="M 6 6.5 L 20 6.5 M 6 11.5 L 20 11.5 M 6 16.5 L 20 16.5"
                                                data-z-index="1" stroke="#666666" stroke-width="3"></path><text
                                                font-family='Roboto-Regular,Roboto' x="0" data-z-index="1" y="15.5"
                                                style="color: rgb(51, 51, 51); font-weight: normal; fill: rgb(51, 51, 51);"></text>
                                        </g> -->
                                    </g><text font-family='Roboto-Regular,Roboto' x="125" text-anchor="middle"
                                        data-z-index="4"
                                        style="color: rgb(51, 51, 51); font-size: 18px; fill: rgb(51, 51, 51);" y="24"
                                        aria-hidden="true"><i class="fa-solid fa-chart-line  mb-3"
                                            style="color: #8af774;"></i></text><text font-family='Roboto-Regular,Roboto'
                                        x="125" text-anchor="middle" data-z-index="4"
                                        style="color: rgb(102, 102, 102); fill: rgb(102, 102, 102);" y="24"
                                        aria-hidden="true"></text><text font-family='Roboto-Regular,Roboto' x="10"
                                        text-anchor="start" data-z-index="4"
                                        style="color: rgb(102, 102, 102); fill: rgb(102, 102, 102);" y="247"
                                        aria-hidden="true"></text>
                                    <g data-z-index="7" aria-hidden="true" transform="translate(85,209)">
                                        <rect fill="none" rx="0" ry="0" x="0" y="0" width="80" height="26"></rect>
                                        <g data-z-index="1">
                                            <g>
                                                <g data-z-index="1" transform="translate(8,3)"><text
                                                        font-family='Roboto-Regular,Roboto' x="21" text-anchor="start"
                                                        data-z-index="2" y="15"
                                                        style="color: rgb(0 0 0);cursor: pointer;font-size: 16px;font-weight: 500;fill: rgb(0 0 0);">
                                                        Bet vs Win</text>
                                                    <rect x="2" y="4" width="12" height="12" fill="#cccccc" rx="6"
                                                        ry="6" data-z-index="3"></rect>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                    <g data-z-index="7" aria-hidden="true"></g>
                                </svg>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 mt-lg-5 mt-3">
                            <div class="chart-box" style=" border-bottom: 3px solid #c83629;">
                                <svg version="1.1" style="font-family: Roboto; font-size: 12px;" xmlns="" width="250"
                                    height="250" viewBox="0 0 250 250" aria-hidden="false"
                                    aria-label="Interactive chart">
                                    <defs aria-hidden="true">
                                        <clipPath>
                                            <rect x="0" y="0" width="230" height="150" fill="none"></rect>
                                        </clipPath>
                                        <clipPath>
                                            <rect x="0" y="0" width="230" height="400.5530633326986" fill="none"></rect>
                                        </clipPath>
                                    </defs>
                                    <!-- <rect fill="#ffffff" x="0" y="0" width="250" height="250" rx="0" ry="0"
                                        aria-hidden="true"></rect> -->
                                    <rect fill="none" x="10" y="47" width="230" height="150" aria-hidden="true"></rect>
                                    <g data-z-index="0" aria-hidden="true">
                                        <path fill="rgb(237, 238, 240)"
                                            d="M 125 50.599999999999994 A 71.4 71.4 0 1 1 124.92860001189996 50.60003569999702 M 124.94390000934997 65.90002804999766 A 56.1 56.1 0 1 0 125 65.9">
                                        </path>
                                    </g>
                                    <rect fill="none" data-z-index="1" x="10" y="47" width="230" height="150"
                                        aria-hidden="true"></rect>
                                    <g data-z-index="1" aria-hidden="true"></g>
                                    <g data-z-index="2" aria-hidden="true">
                                        <path fill="none" data-z-index="7"
                                            d="M 125 58.25 A 63.75 63.75 0 1 1 124.93625001062496 58.25003187499734 M 125 122 A 0 0 0 1 0 125 122">
                                        </path>
                                    </g>
                                    <g data-z-index="2" opacity="1" transform="translate(10,47) scale(1 1)"
                                        aria-hidden="true" style="cursor: pointer;">
                                        <g data-z-index="1" transform="translate(98,64)" style="cursor: pointer;"><text
                                                font-family='Roboto-Regular,Roboto' x="5" data-z-index="1" y="16"
                                                style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 600; fill: rgb(0, 0, 0);">
                                                <tspan fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px"
                                                    stroke-linejoin="round" style="">0.29<tspan x="5" dy="0">​</tspan>
                                                </tspan>0.29
                                            </text></g>
                                    </g>
                                    <g data-z-index="3" aria-hidden="false">
                                        <g data-z-index="0.1" opacity="1" transform="translate(10,47) scale(1 1)"
                                            clip-path="url(#highcharts-auwowx5-317-)" style="cursor: pointer;"
                                            aria-hidden="false">
                                            <path fill="#c83629"
                                                d="M 115 3.5999999999999943 A 71.4 71.4 0 0 1 184.17455958115244 92.68729223916395 A 7.650000000000002 7.650000000000002 0 1 1 169.3514396709055 88.89715818791453 A 56.1 56.1 0 0 0 115 18.9 A 7.650000000000002 7.650000000000002 0 1 1 115 3.5999999999999943"
                                                sweep-flag="0" stroke-linecap="round" stroke-linejoin="round"
                                                tabindex="-1" role="img" aria-label="0.29." style="outline: none;">
                                            </path>
                                        </g>
                                        <g data-z-index="0.1" opacity="1" transform="translate(10,47) scale(1 1)"
                                            clip-path="none" aria-hidden="true"></g>
                                    </g>
                                    <g data-z-index="3" aria-hidden="true">
                                        <!-- <g stroke-linecap="round" style="cursor: pointer;"
                                            transform="translate(216,10)">
                                            <title>Chart context menu</title>
                                            <rect fill="#ffffff" x="0.5" y="0.5" width="24" height="22" rx="2" ry="2"
                                                stroke="none" stroke-width="1"></rect>
                                            <path fill="#666666"
                                                d="M 6 6.5 L 20 6.5 M 6 11.5 L 20 11.5 M 6 16.5 L 20 16.5"
                                                data-z-index="1" stroke="#666666" stroke-width="3"></path><text
                                                font-family='Roboto-Regular,Roboto' x="0" data-z-index="1" y="15.5"
                                                style="color: rgb(51, 51, 51); font-weight: normal; fill: rgb(51, 51, 51);"></text>
                                        </g> -->
                                    </g><text font-family='Roboto-Regular,Roboto' x="125" text-anchor="middle"
                                        data-z-index="4"
                                        style="color: rgb(51, 51, 51); font-size: 18px; fill: rgb(51, 51, 51);" y="24"
                                        aria-hidden="true"><i class="fa-solid fa-robot  mb-3 icons"
                                            style="color: #c83629;"></i></text><text font-family='Roboto-Regular,Roboto'
                                        x="125" text-anchor="middle" data-z-index="4"
                                        style="color: rgb(102, 102, 102); fill: rgb(102, 102, 102);" y="46"
                                        aria-hidden="true"></text><text font-family='Roboto-Regular,Roboto' x="10"
                                        text-anchor="start" data-z-index="4"
                                        style="color: rgb(102, 102, 102); fill: rgb(102, 102, 102);" y="247"
                                        aria-hidden="true"></text>
                                    <g data-z-index="7" aria-hidden="true" transform="translate(85,209)">
                                        <rect fill="none" rx="0" ry="0" x="0" y="0" width="80" height="26"></rect>
                                        <g data-z-index="1">
                                            <g>
                                                <g data-z-index="1" transform="translate(8,3)"><text x="21"
                                                        text-anchor="start" data-z-index="2" y="15"
                                                        style="    color: rgb(0 0 0);cursor: pointer;font-size: 16px;font-weight: 500;fill: rgb(0 0 0);">Bet
                                                        vs Win (Bot)</text>
                                                    <rect x="2" y="4" width="12" height="12" fill="#cccccc" rx="6"
                                                        ry="6" data-z-index="3"></rect>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                    <g data-z-index="7" aria-hidden="true"></g>
                                </svg>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 mt-lg-5 mt-3">
                            <div class="chart-box" style=" border-bottom: 3px solid #6ee5d2;">
                                <svg version="1.1" style="font-family: Roboto; font-size: 12px;" xmlns="#" width="250"
                                    height="250" viewBox="0 0 250 250" aria-hidden="false"
                                    aria-label="Interactive chart">
                                    <defs aria-hidden="true">
                                        <clipPath>
                                            <rect x="0" y="0" width="230" height="150" fill="none"></rect>
                                        </clipPath>
                                        <clipPath>
                                            <rect x="0" y="0" width="230" height="400.5530633326986" fill="none"></rect>
                                        </clipPath>
                                    </defs>
                                    <!-- <rect fill="#ffffff" x="0" y="0" width="250" height="250" rx="0" ry="0"
                                        aria-hidden="true"></rect> -->
                                    <rect fill="none" x="10" y="47" width="230" height="150" aria-hidden="true"></rect>
                                    <g data-z-index="0" aria-hidden="true">
                                        <path fill="rgb(237, 238, 240)"
                                            d="M 125 50.599999999999994 A 71.4 71.4 0 1 1 124.92860001189996 50.60003569999702 M 124.94390000934997 65.90002804999766 A 56.1 56.1 0 1 0 125 65.9">
                                        </path>
                                    </g>
                                    <rect fill="none" data-z-index="1" x="10" y="47" width="230" height="150"
                                        aria-hidden="true"></rect>
                                    <g data-z-index="1" aria-hidden="true"></g>
                                    <g data-z-index="2" aria-hidden="true">
                                        <path fill="none" data-z-index="7"
                                            d="M 125 58.25 A 63.75 63.75 0 1 1 124.93625001062496 58.25003187499734 M 125 122 A 0 0 0 1 0 125 122">
                                        </path>
                                    </g>
                                    <g data-z-index="2" opacity="1" transform="translate(10,47) scale(1 1)"
                                        aria-hidden="true" style="cursor: pointer;">
                                        <g data-z-index="1" transform="translate(98,64)" style="cursor: pointer;"><text
                                                x="5" data-z-index="1" y="16"
                                                style="color: rgb(0, 0, 0); font-size: 16px; font-weight: 600; fill: rgb(0, 0, 0);">
                                                <tspan fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2px"
                                                    stroke-linejoin="round" style="">0.73<tspan x="5" dy="0">​</tspan>
                                                </tspan>0.73
                                            </text></g>
                                    </g>
                                    <g data-z-index="3" aria-hidden="false">
                                        <g data-z-index="0.1" opacity="1" transform="translate(10,47) scale(1 1)"
                                            clip-path="url(#highcharts-auwowx5-133-)" style="cursor: pointer;"
                                            aria-hidden="false">
                                            <path fill="#6ee5d2"
                                                d="M 115 3.5999999999999943 A 71.4 71.4 0 1 1 44.17199453602319 84.01962537996296 A 7.650000000000002 7.650000000000002 0 1 1 59.349424278303935 82.08684851282804 A 56.1 56.1 0 1 0 115 18.9 A 7.650000000000002 7.650000000000002 0 1 1 115 3.5999999999999943"
                                                sweep-flag="0" stroke-linecap="round" stroke-linejoin="round"
                                                tabindex="-1" role="img" aria-label="0.73." style="outline: none;">
                                            </path>
                                        </g>
                                        <g data-z-index="0.1" opacity="1" transform="translate(10,47) scale(1 1)"
                                            clip-path="none" aria-hidden="true"></g>
                                    </g>
                                    <g data-z-index="3" aria-hidden="true">
                                        <!-- <g stroke-linecap="round" style="cursor: pointer;"
                                            transform="translate(216,10)">
                                            <title>Chart context menu</title>
                                            <rect fill="#ffffff" x="0.5" y="0.5" width="24" height="22" rx="2" ry="2"
                                                stroke="none" stroke-width="1"></rect>
                                            <path fill="#666666"
                                                d="M 6 6.5 L 20 6.5 M 6 11.5 L 20 11.5 M 6 16.5 L 20 16.5"
                                                data-z-index="1" stroke="#666666" stroke-width="3"></path><text
                                                font-family='Roboto-Regular,Roboto' x="0" data-z-index="1" y="15.5"
                                                style="color: rgb(51, 51, 51); font-weight: normal; fill: rgb(51, 51, 51);"></text>
                                        </g> -->
                                    </g><text font-family='Roboto-Regular,Roboto' x="125" text-anchor="middle"
                                        data-z-index="4"
                                        style="color: rgb(51, 51, 51); font-size: 18px; fill: rgb(51, 51, 51);" y="24"
                                        aria-hidden="true"><i class="fa-solid fa-pie-chart  mb-3 icons"
                                            style="color: #6ee5d2;"></i></text><text x="125" text-anchor="middle"
                                        data-z-index="4" style="color: rgb(102, 102, 102); fill: rgb(102, 102, 102);"
                                        y="46" aria-hidden="true"></text><text font-family='Roboto-Regular,Roboto'
                                        x="10" text-anchor="start" data-z-index="4"
                                        style="color: rgb(102, 102, 102); fill: rgb(102, 102, 102);" y="247"
                                        aria-hidden="true"></text>
                                    <g data-z-index="7" aria-hidden="true" transform="translate(85,209)">
                                        <rect fill="none" rx="0" ry="0" x="0" y="0" width="80" height="26"></rect>
                                        <g data-z-index="1">
                                            <g>
                                                <g data-z-index="1" transform="translate(8,3)"><text
                                                        font-family='Roboto-Regular,Roboto' x="21" text-anchor="start"
                                                        data-z-index="2" y="15"
                                                        style="color: rgb(0 0 0);cursor: pointer;font-size: 16px;font-weight: 500;fill: rgb(0 0 0);">System
                                                        Surplus</text>
                                                    <rect x="2" y="4" width="12" height="12" fill="#cccccc" rx="6"
                                                        ry="6" data-z-index="3"></rect>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                    <g data-z-index="7" aria-hidden="true"></g>
                                </svg>
                            </div>
                        </div>
                        <div class="col-12 my-4">
                            <a href="#" class="nav-link"><button class="highlight-btn btn">Today's Game
                                    Highlights</button></a>
                        </div>
                    </div>
                </div>

            </div>
        </diV>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>