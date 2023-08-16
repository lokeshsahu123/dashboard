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
                            <h1 class="title_h1 same_heading">Referral Report</h1>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4  col-xs-6">
                                    <div class="form-group">
                                        <select name="" id="" class="w-100 ">
                                            <option value="" selected="">Today</option>
                                            <option value="">Yesterday</option>
                                            <option value="">Current Week</option>
                                            <option value="">Last Week</option>
                                            <option value="">Current Month</option>
                                            <option value="">Last Month</option>
                                            <option value="">Date Range</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4  col-xs-6 mt-lg-0 mt-md-0 mt-sm-0 mt-2">
                                    <div class="form-group">
                                        <input type="date" class="w-100">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4  col-xs-6 mt-lg-0 mt-md-0 mt-sm-0  mt-2">
                                    <div class="form-group">
                                        <input type="date" class="w-100">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12 mt-lg-0 mt-2">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...."
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
        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
            <div class="table-player  bank-details">
                <table class="table data-table">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Referring</th>
                            <th>Code</th>
                            <th>Level</th>
                            <th>Total Reward Referral</th>
                            <th>Signup Commission</th>
                            <th>Direct/Indirect Deposit Comm</th>
                            <th>Direct/indirect Spending Comm</th>
                            <th>Direct/Indirect deposits</th>
                            <th>Claimable Available</th>
                            <th>Claimed Amount</th>
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
    <script src="assets/js/jquery.dataTables.min.js"></script>
</body>

</html>