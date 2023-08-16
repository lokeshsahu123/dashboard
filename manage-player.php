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
                <div class="d-flex justify-content-between align-items-baseline">
                    <h1 class="gamehistoryheading title_h1 same_heading" style="width: unset;">
                        Player Management
                        <small>List Player </small>
                    </h1>
                    <a href="" class="nav-link db-btn">
                        <i class="fa-solid fa-circle-plus"></i>
                        Add Player
                    </a>
                </div>
                <div class="container-fluid bg">
                    <div class="row user-select mt-2">
                        <div class="col-lg-2 col-md-3 col-sm-6 col-12">
                            <div class="form-group">
                                <select name="" id="" class="w-100">
                                    <option value="" selected="">Active Player</option>
                                    <option value="">In Active Player</option>
                                    <option value="">Not approved Player</option>
                                    <option value="">Flagged Player</option>
                                    <option value="">Blocked Player</option>
                                    <option value="">Deleted Player</option>
                                    <option value="">All Player</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-1 d-lg-block  d-none p-0 text-end" style="margin-top: 6px;">
                            <span class="showoff_responsive">Created on</span>
                        </div>
                        <div class="col-lg-2  col-md-3 col-sm-6 col-12 mt-lg-0 mt-md-0 mt-sm-0 mt-2">
                            <div class="form-group">
                                <select name="" id="" class="w-100">
                                    <option value="">All</option>
                                    <option value="" selected="">Recent</option>
                                    <option value="">Today</option>
                                    <option value="">Yesterday</option>
                                    <option value="">Current Week</option>
                                    <option value="">Last Week</option>
                                    <option value="">Current Month</option>
                                    <option value="">Last Week</option>
                                    <option value="">Last 6 Months</option>
                                    <option value="">Date Range</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-1 d-lg-block  d-none" style="margin-top: 6px;">
                            <span class="showoff_responsive">Sort</span>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-6 col-12 mt-lg-0 mt-md-0 mt-2" id="ml-10">
                            <dl class="dropdown1">
                                <dt>
                                    <a href="#">
                                        <i class="fa-solid fa-chevron-down icon"></i>
                                        <!-- <span class="hida"></span> -->
                                        <span class="multiSel">Username</span>
                                        <img class="multiSel1" src="assets/img/ace.png" />
                                    </a>
                                </dt>

                                <dd>
                                    <div class="mutliSelect">
                                        <ul>
                                            <div class="gamelist">
                                                <span>Sort By</span>
                                                <li>
                                                    <input id="lg" type="checkbox" value="Last Login" />
                                                    <label for="lg"><i class="fa-solid fa-check"></i> Last Login</label>
                                                </li>
                                                <li>
                                                    <input id="signup" type="checkbox" value="Sign Up" />
                                                    <label for="signup"><i class="fa-solid fa-check"></i> Sign
                                                        Up</label>
                                                </li>
                                                <li class="active">
                                                    <input id="username" type="checkbox" value="Username" />
                                                    <label for="username"><i class="fa-solid fa-check"></i>
                                                        Username</label>
                                                </li>
                                                <li>
                                                    <input id="balance" type="checkbox" value="Balance" />
                                                    <label for="balance"><i class="fa-solid fa-check"></i>
                                                        Balance</label>
                                                </li>
                                                <li>
                                                    <input id="ingame" type="checkbox" value="In Game" />
                                                    <label for="ingame"><i class="fa-solid fa-check"></i> In
                                                        Game</label>
                                                </li>
                                            </div>
                                            <div class="orderlist">
                                                <span>Order By</span>
                                                <li class="active">
                                                    <!-- <input id="Ace" type="checkbox" value="Ace" /> -->
                                                    <label for="Ace">Ascending</label>
                                                    <i class="fa-solid fa-check" style="margin-top: 5px;"></i>
                                                    <img src="assets/img/ace.png" alt="img">
                                                </li>
                                                <li>
                                                    <!-- <input id="dec" type="checkbox" value="Dec" /> -->
                                                    <label for="dec"> Descending</label>
                                                    <i class="fa-solid fa-check" style="margin-top: 5px;"></i>
                                                    <img src="assets/img/dec.png" alt="img">
                                                </li>
                                            </div>

                                        </ul>
                                    </div>
                                </dd>
                            </dl>
                        </div>
                        <!-- <div class="col-lg-1 d-flex justify-content-end">
                            <div class=" sort-btn"><img src="assets/img/ace.png" alt=""></div>
                        </div> -->
                        <div class="col-lg-4 col-md-3 col-sm-6 col-12 col-xs-4 d-flex mt-lg-0 mt-md-0 mt-2" id="ml-33">
                            <div class="input-group  input-group-sm">
                                <input type="text" class="form-control" placeholder="Search for...."
                                    aria-label="Username" aria-describedby="basic-addon1"
                                    style="height:33.5px !important">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1" style="padding:9px !important;"><i
                                            class="fa-solid fa-magnifying-glass"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
            <div class="table-player">
                <table class="table data-table">
                    <thead>
                        <tr>
                            <th><input type="checkbox" name="" id=""></th>
                            <th>Login id</th>
                            <th>Nick Name</th>
                            <th>Wallet</th>
                            <th>Last Login</th>
                            <th>Mobile No</th>
                            <th>email id</th>
                            <th>Signup Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr class="odd tx-tr" role="row">
                            <td><input type="checkbox" name="" id=""></td>
                            <td><a href="user-summary.php" class="nav-link"><i class="fa-solid fa-phone"></i>
                                    759458124</a></td>
                            <td><span> Techno</span>
                            </td>
                            <td>
                                <span>00.00</span>
                            </td>
                            <td>
                                <span>11 Apr' 23</span>
                            </td>
                            <td>
                                <span>9183451592</span>
                            </td>
                            <td>
                                <span>abcd@gmail.com</span>
                            </td>
                            <td>
                                <span>30 May 15:13:50</span>
                            </td>
                            <td class="position-relative dropdowncaret">
                                <button class="action btn">
                                    <i class="fa-solid fa-caret-down"></i>
                                </button>
                                <div class="action-btn actin-payment-btn-sc">
                                    <div class="item-3">
                                        <button>
                                            <i class="fa-solid fa-money-bill-transfer"></i>
                                            <p>
                                                Transaction
                                            </p>
                                        </button>
                                        <button>
                                            <!-- <img src="assets/img/joystick.png"> -->
                                            <i class="fa-solid fa-clock-rotate-left"></i>
                                            <p>
                                                Game History
                                            </p>
                                        </button>
                                    </div>
                                    <div class="item-3">
                                        <button>
                                            <i class="fa-solid fa-laptop"></i>
                                            <p>
                                                Make Tester
                                            </p>
                                        </button>
                                        <button>
                                            <i class="fa-solid fa-gamepad"></i>
                                            <p>
                                                Player Club
                                            </p>
                                        </button>
                                    </div>
                                    <div class="item-3" style="border-right: none;">
                                        <button>
                                            <i class="fa-solid fa-circle-user"></i>
                                            <p>
                                                Change Affiliate
                                            </p>
                                        </button>
                                        <button>
                                            <i class="fa-solid fa-infinity"></i>
                                            <p>
                                                Flag
                                            </p>
                                        </button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="even tx-tr" role="row">
                            <td><input type="checkbox" name="" id=""></td>
                            <td><a href="user-summary.php" class="nav-link"><i class="fa-solid fa-user"></i> Lakshya
                                    vilas</a></td>
                            <td><span> Techno</span>
                            </td>
                            <td>
                                <span>00.00</span>
                            </td>
                            <td>
                                <span>11 Apr'23</span>
                            </td>
                            <td>
                                <span>9183451592</span>
                            </td>
                            <td>
                                <span>abcd@gmail.com</span>
                            </td>
                            <td>
                                <span>30 May 15:13:50</span>
                            </td>
                            <td class="position-relative dropdowncaret">
                                <button class="action btn">
                                    <i class="fa-solid fa-caret-down"></i>
                                </button>
                                <div class="action-btn actin-payment-btn-sc">
                                    <div class="item-3">
                                        <button>
                                            <i class="fa-solid fa-money-bill-transfer"></i>
                                            <p>
                                                Transaction
                                            </p>
                                        </button>
                                        <button>
                                            <!-- <img src="assets/img/joystick.png"> -->
                                            <i class="fa-solid fa-clock-rotate-left"></i>
                                            <p>
                                                Game History
                                            </p>
                                        </button>
                                    </div>
                                    <div class="item-3">
                                        <button>
                                            <i class="fa-solid fa-laptop"></i>
                                            <p>
                                                Make Tester
                                            </p>
                                        </button>
                                        <button>
                                            <i class="fa-solid fa-gamepad"></i>
                                            <p>
                                                Player Club
                                            </p>
                                        </button>
                                    </div>
                                    <div class="item-3" style="border-right: none;">
                                        <button>
                                            <i class="fa-solid fa-circle-user"></i>
                                            <p>
                                                Change Affiliate
                                            </p>
                                        </button>
                                        <button>
                                            <i class="fa-solid fa-infinity"></i>
                                            <p>
                                                Flag
                                            </p>
                                        </button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="odd tx-tr" role="row">
                            <td><input type="checkbox" name="" id=""></td>
                            <td><a href="user-summary.php" class="nav-link"><i class="fa-solid fa-envelope"></i>
                                    Techno123@gmail.com</a></td>
                            <td><span> Techno</span>
                            </td>
                            <td>
                                <span>00.00</span>
                            </td>
                            <td>
                                <span>11 Apr'23</span>
                            </td>
                            <td>
                                <span>9183451592</span>
                            </td>
                            <td>
                                <span>abcd@gmail.com</span>
                            </td>
                            <td>
                                <span>30 May 15:13:50</span>
                            </td>
                            <td class="position-relative dropdowncaret">
                                <button class="action btn">
                                    <i class="fa-solid fa-caret-down"></i>
                                </button>
                                <div class="action-btn actin-payment-btn-sc">
                                    <div class="item-3">
                                        <button>
                                            <i class="fa-solid fa-money-bill-transfer"></i>
                                            <p>
                                                Transaction
                                            </p>
                                        </button>
                                        <button>
                                            <!-- <img src="assets/img/joystick.png"> -->
                                            <i class="fa-solid fa-clock-rotate-left"></i>
                                            <p>
                                                Game History
                                            </p>
                                        </button>
                                    </div>
                                    <div class="item-3">
                                        <button>
                                            <i class="fa-solid fa-laptop"></i>
                                            <p>
                                                Make Tester
                                            </p>
                                        </button>
                                        <button>
                                            <i class="fa-solid fa-gamepad"></i>
                                            <p>
                                                Player Club
                                            </p>
                                        </button>
                                    </div>
                                    <div class="item-3" style="border-right: none;">
                                        <button>
                                            <i class="fa-solid fa-circle-user"></i>
                                            <p>
                                                Change Affiliate
                                            </p>
                                        </button>
                                        <button>
                                            <i class="fa-solid fa-infinity"></i>
                                            <p>
                                                Flag
                                            </p>
                                        </button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="odd tx-tr" role="row">
                            <td><input type="checkbox" name="" id=""></td>
                            <td><a href="user-summary.php" class="nav-link"><i class="fa-solid fa-phone"></i>
                                    759458124</a></td>
                            <td><span> Techno</span>
                            </td>
                            <td>
                                <span>00.00</span>
                            </td>
                            <td>
                                <span>11 Apr'23</span>
                            </td>
                            <td>
                                <span>9183451592</span>
                            </td>
                            <td>
                                <span>abcd@gmail.com</span>
                            </td>
                            <td>
                                <span>30 May 15:13:50</span>
                            </td>
                            <td class="position-relative dropdowncaret">
                                <button class="action btn">
                                    <i class="fa-solid fa-caret-down"></i>
                                </button>
                                <div class="action-btn actin-payment-btn-sc">
                                    <div class="item-3">
                                        <button>
                                            <i class="fa-solid fa-money-bill-transfer"></i>
                                            <p>
                                                Transaction
                                            </p>
                                        </button>
                                        <button>
                                            <!-- <img src="assets/img/joystick.png"> -->
                                            <i class="fa-solid fa-clock-rotate-left"></i>
                                            <p>
                                                Game History
                                            </p>
                                        </button>
                                    </div>
                                    <div class="item-3">
                                        <button>
                                            <i class="fa-solid fa-laptop"></i>
                                            <p>
                                                Make Tester
                                            </p>
                                        </button>
                                        <button>
                                            <i class="fa-solid fa-gamepad"></i>
                                            <p>
                                                Player Club
                                            </p>
                                        </button>
                                    </div>
                                    <div class="item-3" style="border-right: none;">
                                        <button>
                                            <i class="fa-solid fa-circle-user"></i>
                                            <p>
                                                Change Affiliate
                                            </p>
                                        </button>
                                        <button>
                                            <i class="fa-solid fa-infinity"></i>
                                            <p>
                                                Flag
                                            </p>
                                        </button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="even tx-tr" role="row">
                            <td><input type="checkbox" name="" id=""></td>
                            <td><a href="user-summary.php" class="nav-link"><i class="fa-solid fa-user"></i> Lakshya
                                    vilas</a></td>
                            <td><span> Techno</span>
                            </td>
                            <td>
                                <span>00.00</span>
                            </td>
                            <td>
                                <span>11 Apr'23</span>
                            </td>
                            <td>
                                <span>9183451592</span>
                            </td>
                            <td>
                                <span>abcd@gmail.com</span>
                            </td>
                            <td>
                                <span>30 May 15:13:50</span>
                            </td>
                            <td class="position-relative dropdowncaret">
                                <button class="action btn">
                                    <i class="fa-solid fa-caret-down"></i>
                                </button>
                                <div class="action-btn actin-payment-btn-sc">
                                    <div class="item-3">
                                        <button>
                                            <i class="fa-solid fa-money-bill-transfer"></i>
                                            <p>
                                                Transaction
                                            </p>
                                        </button>
                                        <button>
                                            <!-- <img src="assets/img/joystick.png"> -->
                                            <i class="fa-solid fa-clock-rotate-left"></i>
                                            <p>
                                                Game History
                                            </p>
                                        </button>
                                    </div>
                                    <div class="item-3">
                                        <button>
                                            <i class="fa-solid fa-laptop"></i>
                                            <p>
                                                Make Tester
                                            </p>
                                        </button>
                                        <button>
                                            <i class="fa-solid fa-gamepad"></i>
                                            <p>
                                                Player Club
                                            </p>
                                        </button>
                                    </div>
                                    <div class="item-3" style="border-right: none;">
                                        <button>
                                            <i class="fa-solid fa-circle-user"></i>
                                            <p>
                                                Change Affiliate
                                            </p>
                                        </button>
                                        <button>
                                            <i class="fa-solid fa-infinity"></i>
                                            <p>
                                                Flag
                                            </p>
                                        </button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="odd tx-tr" role="row">
                            <td><input type="checkbox" name="" id=""></td>
                            <td><a href="user-summary.php" class="nav-link"><i class="fa-solid fa-envelope"></i>
                                    Techno123@gmail.com</a></td>
                            <td><span> Techno</span>
                            </td>
                            <td>
                                <span>00.00</span>
                            </td>
                            <td>
                                <span>11 Apr'23</span>
                            </td>
                            <td>
                                <span>9183451592</span>
                            </td>
                            <td>
                                <span>abcd@gmail.com</span>
                            </td>
                            <td>
                                <span>30 May 15:13:50</span>
                            </td>
                            <td class="position-relative dropdowncaret">
                                <button class="action btn">
                                    <i class="fa-solid fa-caret-down"></i>
                                </button>
                                <div class="action-btn actin-payment-btn-sc">
                                    <div class="item-3">
                                        <button>
                                            <i class="fa-solid fa-money-bill-transfer"></i>
                                            <p>
                                                Transaction
                                            </p>
                                        </button>
                                        <button>
                                            <!-- <img src="assets/img/joystick.png"> -->
                                            <i class="fa-solid fa-clock-rotate-left"></i>
                                            <p>
                                                Game History
                                            </p>
                                        </button>
                                    </div>
                                    <div class="item-3">
                                        <button>
                                            <i class="fa-solid fa-laptop"></i>
                                            <p>
                                                Make Tester
                                            </p>
                                        </button>
                                        <button>
                                            <i class="fa-solid fa-gamepad"></i>
                                            <p>
                                                Player Club
                                            </p>
                                        </button>
                                    </div>
                                    <div class="item-3" style="border-right: none;">
                                        <button>
                                            <i class="fa-solid fa-circle-user"></i>
                                            <p>
                                                Change Affiliate
                                            </p>
                                        </button>
                                        <button>
                                            <i class="fa-solid fa-infinity"></i>
                                            <p>
                                                Flag
                                            </p>
                                        </button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="odd tx-tr" role="row">
                            <td><input type="checkbox" name="" id=""></td>
                            <td><a href="user-summary.php" class="nav-link"><i class="fa-solid fa-phone"></i>
                                    759458124</a></td>
                            <td><span> Techno</span>
                            </td>
                            <td>
                                <span>00.00</span>
                            </td>
                            <td>
                                <span>11 Apr'23</span>
                            </td>
                            <td>
                                <span>9183451592</span>
                            </td>
                            <td>
                                <span>abcd@gmail.com</span>
                            </td>
                            <td>
                                <span>30 May 15:13:50</span>
                            </td>
                            <td class="position-relative dropdowncaret">
                                <button class="action btn">
                                    <i class="fa-solid fa-caret-down"></i>
                                </button>
                                <div class="action-btn actin-payment-btn-sc">
                                    <div class="item-3">
                                        <button>
                                            <i class="fa-solid fa-money-bill-transfer"></i>
                                            <p>
                                                Transaction
                                            </p>
                                        </button>
                                        <button>
                                            <!-- <img src="assets/img/joystick.png"> -->
                                            <i class="fa-solid fa-clock-rotate-left"></i>
                                            <p>
                                                Game History
                                            </p>
                                        </button>
                                    </div>
                                    <div class="item-3">
                                        <button>
                                            <i class="fa-solid fa-laptop"></i>
                                            <p>
                                                Make Tester
                                            </p>
                                        </button>
                                        <button>
                                            <i class="fa-solid fa-gamepad"></i>
                                            <p>
                                                Player Club
                                            </p>
                                        </button>
                                    </div>
                                    <div class="item-3" style="border-right: none;">
                                        <button>
                                            <i class="fa-solid fa-circle-user"></i>
                                            <p>
                                                Change Affiliate
                                            </p>
                                        </button>
                                        <button>
                                            <i class="fa-solid fa-infinity"></i>
                                            <p>
                                                Flag
                                            </p>
                                        </button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="even tx-tr" role="row">
                            <td><input type="checkbox" name="" id=""></td>
                            <td><a href="user-summary.php" class="nav-link"><i class="fa-solid fa-user"></i> Lakshya
                                    vilas</a></td>
                            <td><span> Techno</span>
                            </td>
                            <td>
                                <span>00.00</span>
                            </td>
                            <td>
                                <span>11 Apr'23</span>
                            </td>
                            <td>
                                <span>9183451592</span>
                            </td>
                            <td>
                                <span>abcd@gmail.com</span>
                            </td>
                            <td>
                                <span>30 May 15:13:50</span>
                            </td>
                            <td class="position-relative dropdowncaret">
                                <button class="action btn">
                                    <i class="fa-solid fa-caret-down"></i>
                                </button>
                                <div class="action-btn actin-payment-btn-sc">
                                    <div class="item-3">
                                        <button>
                                            <i class="fa-solid fa-money-bill-transfer"></i>
                                            <p>
                                                Transaction
                                            </p>
                                        </button>
                                        <button>
                                            <!-- <img src="assets/img/joystick.png"> -->
                                            <i class="fa-solid fa-clock-rotate-left"></i>
                                            <p>
                                                Game History
                                            </p>
                                        </button>
                                    </div>
                                    <div class="item-3">
                                        <button>
                                            <i class="fa-solid fa-laptop"></i>
                                            <p>
                                                Make Tester
                                            </p>
                                        </button>
                                        <button>
                                            <i class="fa-solid fa-gamepad"></i>
                                            <p>
                                                Player Club
                                            </p>
                                        </button>
                                    </div>
                                    <div class="item-3" style="border-right: none;">
                                        <button>
                                            <i class="fa-solid fa-circle-user"></i>
                                            <p>
                                                Change Affiliate
                                            </p>
                                        </button>
                                        <button>
                                            <i class="fa-solid fa-infinity"></i>
                                            <p>
                                                Flag
                                            </p>
                                        </button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="odd tx-tr" role="row">
                            <td><input type="checkbox" name="" id=""></td>
                            <td><a href="user-summary.php" class="nav-link"><i class="fa-solid fa-envelope"></i>
                                    Techno123@gmail.com</a></td>
                            <td><span> Techno</span>
                            </td>
                            <td>
                                <span>00.00</span>
                            </td>
                            <td>
                                <span>11 Apr'23</span>
                            </td>
                            <td>
                                <span>9183451592</span>
                            </td>
                            <td>
                                <span>abcd@gmail.com</span>
                            </td>
                            <td>
                                <span>30 May 15:13:50</span>
                            </td>
                            <td class="position-relative dropdowncaret">
                                <button class="action btn">
                                    <i class="fa-solid fa-caret-down"></i>
                                </button>
                                <div class="action-btn actin-payment-btn-sc">
                                    <div class="item-3">
                                        <button>
                                            <i class="fa-solid fa-money-bill-transfer"></i>
                                            <p>
                                                Transaction
                                            </p>
                                        </button>
                                        <button>
                                            <!-- <img src="assets/img/joystick.png"> -->
                                            <i class="fa-solid fa-clock-rotate-left"></i>
                                            <p>
                                                Game History
                                            </p>
                                        </button>
                                    </div>
                                    <div class="item-3">
                                        <button>
                                            <i class="fa-solid fa-laptop"></i>
                                            <p>
                                                Make Tester
                                            </p>
                                        </button>
                                        <button>
                                            <i class="fa-solid fa-gamepad"></i>
                                            <p>
                                                Player Club
                                            </p>
                                        </button>
                                    </div>
                                    <div class="item-3" style="border-right: none;">
                                        <button>
                                            <i class="fa-solid fa-circle-user"></i>
                                            <p>
                                                Change Affiliate
                                            </p>
                                        </button>
                                        <button>
                                            <i class="fa-solid fa-infinity"></i>
                                            <p>
                                                Flag
                                            </p>
                                        </button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="odd tx-tr" role="row">
                            <td><input type="checkbox" name="" id=""></td>
                            <td><a href="user-summary.php" class="nav-link"><i class="fa-solid fa-phone"></i>
                                    759458124</a></td>
                            <td><span> Techno</span>
                            </td>
                            <td>
                                <span>00.00</span>
                            </td>
                            <td>
                                <span>11 Apr'23</span>
                            </td>
                            <td>
                                <span>9183451592</span>
                            </td>
                            <td>
                                <span>abcd@gmail.com</span>
                            </td>
                            <td>
                                <span>30 May 15:13:50</span>
                            </td>
                            <td class="position-relative dropdowncaret">
                                <button class="action btn">
                                    <i class="fa-solid fa-caret-down"></i>
                                </button>
                                <div class="action-btn actin-payment-btn-sc">
                                    <div class="item-3">
                                        <button>
                                            <i class="fa-solid fa-money-bill-transfer"></i>
                                            <p>
                                                Transaction
                                            </p>
                                        </button>
                                        <button>
                                            <!-- <img src="assets/img/joystick.png"> -->
                                            <i class="fa-solid fa-clock-rotate-left"></i>
                                            <p>
                                                Game History
                                            </p>
                                        </button>
                                    </div>
                                    <div class="item-3">
                                        <button>
                                            <i class="fa-solid fa-laptop"></i>
                                            <p>
                                                Make Tester
                                            </p>
                                        </button>
                                        <button>
                                            <i class="fa-solid fa-gamepad"></i>
                                            <p>
                                                Player Club
                                            </p>
                                        </button>
                                    </div>
                                    <div class="item-3" style="border-right: none;">
                                        <button>
                                            <i class="fa-solid fa-circle-user"></i>
                                            <p>
                                                Change Affiliate
                                            </p>
                                        </button>
                                        <button>
                                            <i class="fa-solid fa-infinity"></i>
                                            <p>
                                                Flag
                                            </p>
                                        </button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="even tx-tr" role="row">
                            <td><input type="checkbox" name="" id=""></td>
                            <td><a href="user-summary.php" class="nav-link"><i class="fa-solid fa-user"></i> Lakshya
                                    vilas</a></td>
                            <td><span> Techno</span>
                            </td>
                            <td>
                                <span>00.00</span>
                            </td>
                            <td>
                                <span>11 Apr'23</span>
                            </td>
                            <td>
                                <span>9183451592</span>
                            </td>
                            <td>
                                <span>abcd@gmail.com</span>
                            </td>
                            <td>
                                <span>30 May 15:13:50</span>
                            </td>
                            <td class="position-relative dropdowncaret">
                                <button class="action btn">
                                    <i class="fa-solid fa-caret-down"></i>
                                </button>
                                <div class="action-btn actin-payment-btn-sc">
                                    <div class="item-3">
                                        <button>
                                            <i class="fa-solid fa-money-bill-transfer"></i>
                                            <p>
                                                Transaction
                                            </p>
                                        </button>
                                        <button>
                                            <!-- <img src="assets/img/joystick.png"> -->
                                            <i class="fa-solid fa-clock-rotate-left"></i>
                                            <p>
                                                Game History
                                            </p>
                                        </button>
                                    </div>
                                    <div class="item-3">
                                        <button>
                                            <i class="fa-solid fa-laptop"></i>
                                            <p>
                                                Make Tester
                                            </p>
                                        </button>
                                        <button>
                                            <i class="fa-solid fa-gamepad"></i>
                                            <p>
                                                Player Club
                                            </p>
                                        </button>
                                    </div>
                                    <div class="item-3" style="border-right: none;">
                                        <button>
                                            <i class="fa-solid fa-circle-user"></i>
                                            <p>
                                                Change Affiliate
                                            </p>
                                        </button>
                                        <button>
                                            <i class="fa-solid fa-infinity"></i>
                                            <p>
                                                Flag
                                            </p>
                                        </button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="odd tx-tr" role="row">
                            <td><input type="checkbox" name="" id=""></td>
                            <td><a href="user-summary.php" class="nav-link"><i class="fa-solid fa-envelope"></i>
                                    Techno123@gmail.com</a></td>
                            <td><span> Techno</span>
                            </td>
                            <td>
                                <span>00.00</span>
                            </td>
                            <td>
                                <span>11 Apr'23</span>
                            </td>
                            <td>
                                <span>9183451592</span>
                            </td>
                            <td>
                                <span>abcd@gmail.com</span>
                            </td>
                            <td>
                                <span>30 May 15:13:50</span>
                            </td>
                            <td class="position-relative dropdowncaret">
                                <button class="action btn">
                                    <i class="fa-solid fa-caret-down"></i>
                                </button>
                                <div class="action-btn actin-payment-btn-sc">
                                    <div class="item-3">
                                        <button>
                                            <i class="fa-solid fa-money-bill-transfer"></i>
                                            <p>
                                                Transaction
                                            </p>
                                        </button>
                                        <button>
                                            <!-- <img src="assets/img/joystick.png"> -->
                                            <i class="fa-solid fa-clock-rotate-left"></i>
                                            <p>
                                                Game History
                                            </p>
                                        </button>
                                    </div>
                                    <div class="item-3">
                                        <button>
                                            <i class="fa-solid fa-laptop"></i>
                                            <p>
                                                Make Tester
                                            </p>
                                        </button>
                                        <button>
                                            <i class="fa-solid fa-gamepad"></i>
                                            <p>
                                                Player Club
                                            </p>
                                        </button>
                                    </div>
                                    <div class="item-3" style="border-right: none;">
                                        <button>
                                            <i class="fa-solid fa-circle-user"></i>
                                            <p>
                                                Change Affiliate
                                            </p>
                                        </button>
                                        <button>
                                            <i class="fa-solid fa-infinity"></i>
                                            <p>
                                                Flag
                                            </p>
                                        </button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="odd tx-tr" role="row">
                            <td><input type="checkbox" name="" id=""></td>
                            <td><a href="user-summary.php" class="nav-link"><i class="fa-solid fa-phone"></i>
                                    759458124</a></td>
                            <td><span> Techno</span>
                            </td>
                            <td>
                                <span>00.00</span>
                            </td>
                            <td>
                                <span>11 Apr'23</span>
                            </td>
                            <td>
                                <span>9183451592</span>
                            </td>
                            <td>
                                <span>abcd@gmail.com</span>
                            </td>
                            <td>
                                <span>30 May 15:13:50</span>
                            </td>
                            <td class="position-relative dropdowncaret">
                                <button class="action btn">
                                    <i class="fa-solid fa-caret-down"></i>
                                </button>
                                <div class="action-btn actin-payment-btn-sc">
                                    <div class="item-3">
                                        <button>
                                            <i class="fa-solid fa-money-bill-transfer"></i>
                                            <p>
                                                Transaction
                                            </p>
                                        </button>
                                        <button>
                                            <!-- <img src="assets/img/joystick.png"> -->
                                            <i class="fa-solid fa-clock-rotate-left"></i>
                                            <p>
                                                Game History
                                            </p>
                                        </button>
                                    </div>
                                    <div class="item-3">
                                        <button>
                                            <i class="fa-solid fa-laptop"></i>
                                            <p>
                                                Make Tester
                                            </p>
                                        </button>
                                        <button>
                                            <i class="fa-solid fa-gamepad"></i>
                                            <p>
                                                Player Club
                                            </p>
                                        </button>
                                    </div>
                                    <div class="item-3" style="border-right: none;">
                                        <button>
                                            <i class="fa-solid fa-circle-user"></i>
                                            <p>
                                                Change Affiliate
                                            </p>
                                        </button>
                                        <button>
                                            <i class="fa-solid fa-infinity"></i>
                                            <p>
                                                Flag
                                            </p>
                                        </button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="even tx-tr" role="row">
                            <td><input type="checkbox" name="" id=""></td>
                            <td><a href="user-summary.php" class="nav-link"><i class="fa-solid fa-user"></i> Lakshya
                                    vilas</a></td>
                            <td><span> Techno</span>
                            </td>
                            <td>
                                <span>00.00</span>
                            </td>
                            <td>
                                <span>11 Apr'23</span>
                            </td>
                            <td>
                                <span>9183451592</span>
                            </td>
                            <td>
                                <span>abcd@gmail.com</span>
                            </td>
                            <td>
                                <span>30 May 15:13:50</span>
                            </td>
                            <td class="position-relative dropdowncaret">
                                <button class="action btn">
                                    <i class="fa-solid fa-caret-down"></i>
                                </button>
                                <div class="action-btn actin-payment-btn-sc">
                                    <div class="item-3">
                                        <button>
                                            <i class="fa-solid fa-money-bill-transfer"></i>
                                            <p>
                                                Transaction
                                            </p>
                                        </button>
                                        <button>
                                            <!-- <img src="assets/img/joystick.png"> -->
                                            <i class="fa-solid fa-clock-rotate-left"></i>
                                            <p>
                                                Game History
                                            </p>
                                        </button>
                                    </div>
                                    <div class="item-3">
                                        <button>
                                            <i class="fa-solid fa-laptop"></i>
                                            <p>
                                                Make Tester
                                            </p>
                                        </button>
                                        <button>
                                            <i class="fa-solid fa-gamepad"></i>
                                            <p>
                                                Player Club
                                            </p>
                                        </button>
                                    </div>
                                    <div class="item-3" style="border-right: none;">
                                        <button>
                                            <i class="fa-solid fa-circle-user"></i>
                                            <p>
                                                Change Affiliate
                                            </p>
                                        </button>
                                        <button>
                                            <i class="fa-solid fa-infinity"></i>
                                            <p>
                                                Flag
                                            </p>
                                        </button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="odd tx-tr" role="row">
                            <td><input type="checkbox" name="" id=""></td>
                            <td><a href="user-summary.php" class="nav-link"><i class="fa-solid fa-envelope"></i>
                                    Techno123@gmail.com</a></td>
                            <td><span> Techno</span>
                            </td>
                            <td>
                                <span>00.00</span>
                            </td>
                            <td>
                                <span>11 Apr'23</span>
                            </td>
                            <td>
                                <span>9183451592</span>
                            </td>
                            <td>
                                <span>abcd@gmail.com</span>
                            </td>
                            <td>
                                <span>30 May 15:13:50</span>
                            </td>
                            <td class="position-relative dropdowncaret">
                                <button class="action btn">
                                    <i class="fa-solid fa-caret-down"></i>
                                </button>
                                <div class="action-btn actin-payment-btn-sc">
                                    <div class="item-3">
                                        <button>
                                            <i class="fa-solid fa-money-bill-transfer"></i>
                                            <p>
                                                Transaction
                                            </p>
                                        </button>
                                        <button>
                                            <!-- <img src="assets/img/joystick.png"> -->
                                            <i class="fa-solid fa-clock-rotate-left"></i>
                                            <p>
                                                Game History
                                            </p>
                                        </button>
                                    </div>
                                    <div class="item-3">
                                        <button>
                                            <i class="fa-solid fa-laptop"></i>
                                            <p>
                                                Make Tester
                                            </p>
                                        </button>
                                        <button>
                                            <i class="fa-solid fa-gamepad"></i>
                                            <p>
                                                Player Club
                                            </p>
                                        </button>
                                    </div>
                                    <div class="item-3" style="border-right: none;">
                                        <button>
                                            <i class="fa-solid fa-circle-user"></i>
                                            <p>
                                                Change Affiliate
                                            </p>
                                        </button>
                                        <button>
                                            <i class="fa-solid fa-infinity"></i>
                                            <p>
                                                Flag
                                            </p>
                                        </button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="odd tx-tr" role="row">
                            <td><input type="checkbox" name="" id=""></td>
                            <td><a href="user-summary.php" class="nav-link"><i class="fa-solid fa-phone"></i>
                                    759458124</a></td>
                            <td><span> Techno</span>
                            </td>
                            <td>
                                <span>00.00</span>
                            </td>
                            <td>
                                <span>11 Apr'23</span>
                            </td>
                            <td>
                                <span>9183451592</span>
                            </td>
                            <td>
                                <span>abcd@gmail.com</span>
                            </td>
                            <td>
                                <span>30 May 15:13:50</span>
                            </td>
                            <td class="position-relative dropdowncaret">
                                <button class="action btn">
                                    <i class="fa-solid fa-caret-down"></i>
                                </button>
                                <div class="action-btn actin-payment-btn-sc">
                                    <div class="item-3">
                                        <button>
                                            <i class="fa-solid fa-money-bill-transfer"></i>
                                            <p>
                                                Transaction
                                            </p>
                                        </button>
                                        <button>
                                            <!-- <img src="assets/img/joystick.png"> -->
                                            <i class="fa-solid fa-clock-rotate-left"></i>
                                            <p>
                                                Game History
                                            </p>
                                        </button>
                                    </div>
                                    <div class="item-3">
                                        <button>
                                            <i class="fa-solid fa-laptop"></i>
                                            <p>
                                                Make Tester
                                            </p>
                                        </button>
                                        <button>
                                            <i class="fa-solid fa-gamepad"></i>
                                            <p>
                                                Player Club
                                            </p>
                                        </button>
                                    </div>
                                    <div class="item-3" style="border-right: none;">
                                        <button>
                                            <i class="fa-solid fa-circle-user"></i>
                                            <p>
                                                Change Affiliate
                                            </p>
                                        </button>
                                        <button>
                                            <i class="fa-solid fa-infinity"></i>
                                            <p>
                                                Flag
                                            </p>
                                        </button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="even tx-tr" role="row">
                            <td><input type="checkbox" name="" id=""></td>
                            <td><a href="user-summary.php" class="nav-link"><i class="fa-solid fa-user"></i> Lakshya
                                    vilas</a></td>
                            <td><span> Techno</span>
                            </td>
                            <td>
                                <span>00.00</span>
                            </td>
                            <td>
                                <span>11 Apr'23</span>
                            </td>
                            <td>
                                <span>9183451592</span>
                            </td>
                            <td>
                                <span>abcd@gmail.com</span>
                            </td>
                            <td>
                                <span>30 May 15:13:50</span>
                            </td>
                            <td class="position-relative dropdowncaret">
                                <button class="action btn">
                                    <i class="fa-solid fa-caret-down"></i>
                                </button>
                                <div class="action-btn actin-payment-btn-sc">
                                    <div class="item-3">
                                        <button>
                                            <i class="fa-solid fa-money-bill-transfer"></i>
                                            <p>
                                                Transaction
                                            </p>
                                        </button>
                                        <button>
                                            <!-- <img src="assets/img/joystick.png"> -->
                                            <i class="fa-solid fa-clock-rotate-left"></i>
                                            <p>
                                                Game History
                                            </p>
                                        </button>
                                    </div>
                                    <div class="item-3">
                                        <button>
                                            <i class="fa-solid fa-laptop"></i>
                                            <p>
                                                Make Tester
                                            </p>
                                        </button>
                                        <button>
                                            <i class="fa-solid fa-gamepad"></i>
                                            <p>
                                                Player Club
                                            </p>
                                        </button>
                                    </div>
                                    <div class="item-3" style="border-right: none;">
                                        <button>
                                            <i class="fa-solid fa-circle-user"></i>
                                            <p>
                                                Change Affiliate
                                            </p>
                                        </button>
                                        <button>
                                            <i class="fa-solid fa-infinity"></i>
                                            <p>
                                                Flag
                                            </p>
                                        </button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="odd tx-tr" role="row">
                            <td><input type="checkbox" name="" id=""></td>
                            <td><a href="user-summary.php" class="nav-link"><i class="fa-solid fa-envelope"></i>
                                    Techno123@gmail.com</a></td>
                            <td><span> Techno</span>
                            </td>
                            <td>
                                <span>00.00</span>
                            </td>
                            <td>
                                <span>11 Apr'23</span>
                            </td>
                            <td>
                                <span>9183451592</span>
                            </td>
                            <td>
                                <span>abcd@gmail.com</span>
                            </td>
                            <td>
                                <span>30 May 15:13:50</span>
                            </td>
                            <td class="position-relative dropdowncaret">
                                <button class="action btn">
                                    <i class="fa-solid fa-caret-down"></i>
                                </button>
                                <div class="action-btn actin-payment-btn-sc">
                                    <div class="item-3">
                                        <button>
                                            <i class="fa-solid fa-money-bill-transfer"></i>
                                            <p>
                                                Transaction
                                            </p>
                                        </button>
                                        <button>
                                            <!-- <img src="assets/img/joystick.png"> -->
                                            <i class="fa-solid fa-clock-rotate-left"></i>
                                            <p>
                                                Game History
                                            </p>
                                        </button>
                                    </div>
                                    <div class="item-3">
                                        <button>
                                            <i class="fa-solid fa-laptop"></i>
                                            <p>
                                                Make Tester
                                            </p>
                                        </button>
                                        <button>
                                            <i class="fa-solid fa-gamepad"></i>
                                            <p>
                                                Player Club
                                            </p>
                                        </button>
                                    </div>
                                    <div class="item-3" style="border-right: none;">
                                        <button>
                                            <i class="fa-solid fa-circle-user"></i>
                                            <p>
                                                Change Affiliate
                                            </p>
                                        </button>
                                        <button>
                                            <i class="fa-solid fa-infinity"></i>
                                            <p>
                                                Flag
                                            </p>
                                        </button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!------RIGHT SIDE CONTENT END------->
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" language="javascript" src="assets/js/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function() {
        // Toggle dropdown menu on click of the anchor tag
        $(".dropdown1 dt a").on('click', function(e) {
            e.stopPropagation();
            $(".dropdown1 dd ul").slideToggle('fast');
        });

        // Hide dropdown menu when clicking anywhere outside of it
        $(document).click(function(e) {
            if (!$(e.target).closest('.dropdown1').length) {
                $(".dropdown1 dd ul").hide();
            }
        });

        // Hide dropdown menu when clicking on an item inside the dropdown
        $(".dropdown1 dd ul li a").on('click', function() {
            $(".dropdown1 dd ul").hide();
        });

        // Gamelist Selection
        $('.gamelist li').click(function() {
            $(this).addClass('active').siblings().removeClass('active');
            var getValue = $(this).find('label').text();
            $('.multiSel').text(getValue);
        });

        // Orderlist Selection
        $('.orderlist li').click(function() {
            $(this).addClass('active-over').siblings().removeClass('active-over');
            var getSrc = $(this).find('img').attr('src');
            $('.multiSel1').attr('src', getSrc);
        });

        $('.orderlist li').click(function() {
            $(this).addClass('active').siblings().removeClass('active');
        });
    });
    </script>

</body>

</html>

</html>