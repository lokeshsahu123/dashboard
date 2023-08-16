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
                            <h1 class="title_h1 same_heading">Send Out</h1>
                        </div>
                        <div class="col-lg-7 col-md-5 col-sm-6 col-12">
                            <div class="row">
                                <div class="col-lg-4">
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-12 px-2 ">
                                    <div class="form-group">
                                        <select name="" id="" class="w-100">
                                            <option value="" selected="">All</option>
                                            <option value="">Send Out</option>
                                            <option value="">Auto-Refills</option>
                                            <option value="">Paid Commission</option>
                                        </select>
                                    </div>
                                </div>
                                <div
                                    class="col-lg-4 col-md-6 col-sm-6 col-12  col-xs-12 px-2 my-2 my-lg-0 my-sm-0 my-md-0">
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
                        <div class="col-lg-3 col-md-5 col-sm-6 col-12  px-2">
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
                <div class="table-player">
                    <table class="table data-table">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Total Deposit</th>
                                <th>Total Auto-Refill</th>
                                <th>Total Paid Commission</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2003-03-01 to 2023-06-23</td>
                                <td>40.00</td>
                                <td>0</td>
                                <td>45.2</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="table-player second_table">
                    <table class="table data-table">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Transaction Id</th>
                                <th>Deposited To</th>
                                <th>Openning Balance</th>
                                <th>Amount</th>
                                <th>Closing Balance</th>
                                <th>Deposited By</th>
                                <th>Remark</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="odd">
                                <td>1</td>
                                <td>6377825801</td>
                                <td>68892_agt</td>
                                <td>0.00</td>
                                <td>0</td>
                                <td>49.5</td>
                                <td>25</td>
                                <td>2.5</td>
                            </tr>
                            <tr class="even">
                                <td>2</td>
                                <td>6377825801</td>
                                <td>68892_agt</td>
                                <td>0.00</td>
                                <td>0</td>
                                <td>49.5</td>
                                <td>25</td>
                                <td>2.5</td>
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