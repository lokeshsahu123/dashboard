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
                        <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
                            <h1 class="title_h1 same_heading">Version Update</h1>
                        </div>
                        <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 mt-lg-0 ">
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
                                <div class="col-lg-4 col-md-4  col-sm-6 mt-lg-0 mt-md-0 mt-2 col-6">
                                    <input type="date" class="w-100">
                                </div>
                                <div class="col-lg-4 col-md-4  col-sm-6 mt-lg-0 mt-md-0 mt-2 col-6 ">
                                    <input type="date" class="w-100">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
                            <div class="row">
                                <div class="col-lg-6 col-6 text-lg-end">
                                    <a href="#" class="nav-link db-btn">
                                        <i class="fa-solid fa-circle-plus"></i>
                                        Update Version
                                    </a>
                                </div>
                                <div class="col-lg-6 col-6 order-md-1 mt-lg-0 mt-md-0 mt-sm-0 mt-2">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Search for..."
                                            aria-label="Username" aria-describedby="basic-addon1" style="height: 30px;">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1" style="padding: 7px;"><i
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
                <div class="table-player  affiliate-list">
                    <table class="table data-table">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Device</th>
                                <th>Version</th>
                                <th>App Url</th>
                                <th>Updates</th>
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