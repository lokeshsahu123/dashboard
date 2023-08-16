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
                    <div class="bank-details row d-flex align-items-baseline">
                        <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
                            <h1 class="title_h1 same_heading">Master Commission 2.0</h1>
                        </div>
                        <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-3 col-md-3  col-6  col-xs-12  p-1">
                                    <div class="form-group">
                                        <select name="" id="" class="w-100 ">
                                            <option value="" selected="">1SingalCasino</option>
                                            <option value="">3baan</option>
                                            <option value="">52casino</option>
                                            <option value="">52clubs</option>
                                            <option value="">99casino</option>
                                            <option value="">allrummy</option>
                                            <option value="">dadyqueen</option>
                                            <option value="">DeltinRummy</option>
                                            <option value="">dhamaalGames</option>
                                            <option value="">DreamIkka</option>
                                            <option value="">Fortune</option>
                                            <option value="">ForyouRummy</option>
                                            <option value="">KheloJeetloAsia</option>
                                            <option value="">LordofGames</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3  col-6 mt-lg-0  col-xs-12 p-1">
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
                                <div class="col-lg-3 col-md-3  col-6 mt-lg-0  mt-md-0 mt-1 col-xs-12 p-1">
                                    <div class="form-group">
                                        <input type="date" class="w-100">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3  col-6 mt-lg-0  mt-md-0 mt-1 col-xs-12 p-1">
                                    <div class="form-group">
                                        <input type="date" class="w-100">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6  px-1 px-lg-2">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for..."
                                    aria-label="Username" aria-describedby="basic-addon1" style="height: 26px;">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1" style="padding: 5px;"><i
                                            class="fa-solid fa-magnifying-glass"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-6 text-end">
                            <div class="col-lg-6 ms-auto">
                                <a href="#" id="excel"><button class="btn btn-danger btn-sm ">Download
                                        Excel</button></a>
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
                                <th>Total Bet</th>
                                <th>Total Commission</th>
                                <th>Paid Commission</th>
                                <th>Remaining Commission </th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr></tr>
                        </tbody>
                    </table>
                </div>
                <div class="table-player">
                    <table class="table data-table">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>State Agent</th>
                                <th>Total Bet</th>
                                <th>Commission Per</th>
                                <th>Commission</th>
                                <th>Paid</th>
                                <th>Remaining</th>
                                <th>Action</th>
                            </tr>

                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <!------RIGHT SIDE CONTENT END------->
    </div>

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- <script src="assets/js/jquery.dataTables.min.js"></script> -->
</body>

</html>