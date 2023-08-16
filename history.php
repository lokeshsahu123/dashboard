<?php
    require 'header.php';
?>

<body>
    <div class="full-page">

        <!------LEFT SIDE MENU-START------->
        <?php require('sidepanel.php');?>
        <!------LEFT SIDE MENU-END------->
        <!------RIGHT SIDE CONTENT START------>
        <div class="right-sidebar">
            <div class="das-bg-block w-100">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                            <h1 class="gamehistoryheading title_h1 same_heading">Game History </h1>
                        </div>
                        <div class="col-md-8">
                            <div class="row user-select">
                                <div class="col-md-3 col-6">
                                    <dl class="dropdown1">
                                        <dt>
                                            <a href="#">
                                                <i class="fa-solid fa-chevron-down icon"></i>
                                                <!-- <span class="hida"></span> -->
                                                <span class="multiSel">Ludo</span>
                                                <!-- <img class="multiSel1" src="assets/img/ace.png" /> -->
                                            </a>
                                        </dt>

                                        <dd>
                                            <div class="mutliSelect">
                                                <ul>
                                                    <li class="dropDownitem">
                                                        <span>P2p
                                                            <i class="fa-solid fa-caret-down"
                                                                style="color:#aaa4a4;"></i>
                                                        </span>
                                                        <ul class="sub-menu-block">
                                                            <li class="sub-menu-block-item sub-menu-block-li"><i
                                                                    class="fa-solid fa-check"></i>
                                                                Ludo</li>
                                                            <li class="sub-menu-block-item"><i
                                                                    class="fa-solid fa-check"></i>
                                                                Rummy</li>
                                                            <li class="sub-menu-block-item"><i
                                                                    class="fa-solid fa-check"></i>
                                                                Poker</li>
                                                        </ul>

                                                    </li>

                                                    <li class="dropDownitem">
                                                        <span>Roulette
                                                            <i class="fa-solid fa-caret-down"
                                                                style="color:#aaa4a4;"></i>
                                                        </span>
                                                        <ul class="sub-menu-block">
                                                            <li class="sub-menu-block-item"><i
                                                                    class="fa-solid fa-check"></i>
                                                                Roulette 1</li>
                                                            <li class="sub-menu-block-item"><i
                                                                    class="fa-solid fa-check"></i>
                                                                Roulette 2</li>
                                                            <li class="sub-menu-block-item"><i
                                                                    class="fa-solid fa-check"></i>
                                                                Roulette 3</li>
                                                        </ul>

                                                    </li>
                                                    <li class="dropDownitem">
                                                        <span> Single Chance
                                                            <i class="fa-solid fa-caret-down"
                                                                style="color:#aaa4a4;"></i>
                                                        </span>
                                                        <ul class="sub-menu-block">
                                                            <li class="sub-menu-block-item"><i
                                                                    class="fa-solid fa-check"></i>
                                                                Single Chance 1</li>
                                                            <li class="sub-menu-block-item"><i
                                                                    class="fa-solid fa-check"></i>
                                                                Single Chance 2</li>
                                                            <li class="sub-menu-block-item"><i
                                                                    class="fa-solid fa-check"></i>
                                                                Single Chance 3</li>
                                                        </ul>

                                                    </li>
                                                    <li class="dropDownitem">
                                                        <span> Teen patti
                                                            <i class="fa-solid fa-caret-down"
                                                                style="color:#aaa4a4;"></i>
                                                        </span>
                                                        <ul class="sub-menu-block">
                                                            <li class="sub-menu-block-item"><i
                                                                    class="fa-solid fa-check"></i>
                                                                Teen patti</li>
                                                            <li class="sub-menu-block-item"><i
                                                                    class="fa-solid fa-check"></i>
                                                                Teen patti 2</li>

                                                        </ul>

                                                    </li>
                                                    <li class="dropDownitem">
                                                        <span> Slot
                                                            <i class="fa-solid fa-caret-down"
                                                                style="color:#aaa4a4;"></i>
                                                        </span>
                                                        <ul class="sub-menu-block">
                                                            <li class="sub-menu-block-item"><i
                                                                    class="fa-solid fa-check"></i>
                                                                Snake Ladder</li>
                                                            <li class="sub-menu-block-item"><i
                                                                    class="fa-solid fa-check"></i>
                                                                Triple Chance </li>
                                                            <li class="sub-menu-block-item"><i
                                                                    class="fa-solid fa-check"></i>
                                                                Mega Wheel </li>
                                                        </ul>

                                                    </li>



                                                </ul>
                                            </div>
                                        </dd>
                                    </dl>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="form-group">
                                        <select name="" id="" class="w-100">
                                            <option value="" selected="">Today</option>
                                            <option value="">Current Week</option>
                                            <option value="">Last Week</option>
                                            <option value="">Current Month</option>
                                            <option value="">Last Month</option>
                                            <option value="">Last 6 Month</option>
                                            <option value="">Date Range</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2 col-6 mt-2 mt-md-0">
                                    <div class="form-group">
                                        <select name="" id="" class="w-100">
                                            <option value="" selected="">All</option>
                                            <option value="">Normal</option>
                                            <option value="">Active</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 col-6 mt-2 mt-md-0">
                                    <div class="input-group  input-group-sm">
                                        <input type="text" class="form-control" placeholder="Search for...."
                                            aria-label="Username" aria-describedby="basic-addon1"
                                            style="height:33.5px !important">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"
                                                style="padding:9px !important;"><i
                                                    class="fa-solid fa-magnifying-glass"></i></span>
                                        </div>
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
                                <th>Date</th>
                                <th>Session ID</th>
                                <th>Table Name</th>
                                <th>Player Count</th>
                                <th>Total bet</th>
                                <th>Total Win</th>
                                <th>Winner Name </th>
                                <th>Winer cards</th>
                                <th>Total Rake</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>30 Jan'22</td>
                                <td>400488700</td>
                                <td>17992</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <!------RIGHT SIDE CONTENT END------->
    </div>

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
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
        $('.dropDownitem').click(function() {
            $(this).addClass('dropDownitem-active').siblings().removeClass('dropDownitem-active');
        });
        $('.sub-menu-block-item').click(function() {
            var textHtml = $(this).text();
            $(this).addClass('sub-menu-block-li').siblings().removeClass('sub-menu-block-li');
            $('.multiSel').text(textHtml);
        });
    });
    </script>
</body>

</html>