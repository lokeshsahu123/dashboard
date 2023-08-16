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
                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                            <h1 class="title_h1 same_heading">Deposit Transaction </h1>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-4">
                                </div>
                                <div class="col-lg-4 col-md-6  col-sm-6 mt-lg-0  mt-md-4 mt-2 col-xs-12 p-1">
                                    <div class="form-group">
                                        <select name="" id="" class="w-100">
                                            <option value="" selected="">All</option>
                                            <option value="">Pending</option>
                                            <option value="">Approved</option>
                                            <option value="">Rejected</option>
                                            <option value="">Reset</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6  col-sm-6 mt-lg-0  mt-md-4 mt-2 col-xs-12 p-1">
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
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-3 col-md-6  col-sm-6 mt-lg-0 mt-2  col-6 order-md-3 order-lg-1 p-1">
                                    <input type="search" placeholder="2023-06-21" class="w-100">
                                </div>
                                <div class="col-lg-3 col-md-6  col-sm-6 mt-lg-0 mt-2  col-6  order-md-2 order-lg-2 p-1">
                                    <input type="search" placeholder="2023-06-21" class="w-100">
                                </div>
                                <div
                                    class="col-lg-6 col-md-12  col-sm-12  col-xs-12 order-md-1 mt-lg-0 mt-md-0 mt-sm-2 order-lg-3 mt-2 p-1">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Search Exact"
                                            aria-label="Username" aria-describedby="basic-addon1" style="height: 26px;">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1" style="padding: 5px;"><i
                                                    class="fa-solid fa-magnifying-glass"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 text-end">
                            <a href="#" id="excel"><button class="btn btn-danger btn-sm ">Download Excel</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
                <div class="table-player  affiliate-list">
                    <table class="table data-table">
                        <thead>
                            <tr>
                                <th>Transaction ID </th>
                                <th>User Name </th>
                                <th>Client UPI </th>
                                <th>User UPI </th>
                                <th>Amount</th>
                                <th> Amount Approved </th>
                                <th>Payment Method </th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>

                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="11">no record found</td>
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
</body>

</html>