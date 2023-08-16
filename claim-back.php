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
                    <div class="bank-details row ">
                        <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
                            <h1 class="title_h1 same_heading">Claim Back</h1>
                        </div>
                        <div class="col-lg-2"></div>
                        <div class="col-lg-5  col-md-6 col-sm-6 col-12">
                            <div class="row">
                                <div class="col-lg-6"></div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12  col-xs-12 px-1">
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
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12  px-1 px-lg-2 mt-lg-0 mt-md-0 mt-2">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Search for..."
                                    aria-label="Username" aria-describedby="basic-addon1" style="height: 30px;">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1" style="padding: 7px;"><i
                                            class="fa-solid fa-magnifying-glass"></i></span>
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
                <div class="table-player  manage-kyc">
                    <table class="table data-table">
                        <thead>
                            <tr>
                                <th>Transaction</th>
                                <th>Type</th>
                                <th>Form</th>
                                <th>Amount</th>
                                <th>By</th>
                                <th>Remark</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>

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