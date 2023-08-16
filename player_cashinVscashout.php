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
                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                            <h1 class="title_h1 same_heading">Cashin vs Cashout</h1>
                        </div>
                        <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-4 col-md-4  col-sm-6 mt-lg-0  mt-md-0 mt-2 col-xs-12 px-1">
                                    <div class="form-group">
                                        <select name="" id="" class="w-100">
                                            <option value="" selected="">All</option>
                                            <option value="">Approved</option>
                                            <option value="">Rejected</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4  col-sm-6 mt-lg-0  mt-md-0 mt-2 col-xs-12 px-1">
                                    <div class="form-group">
                                        <select name="" id="" class="w-100">
                                            <option value="" selected="">All</option>
                                            <option value="">Online</option>
                                            <option value="">Offline</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4  col-sm-6 mt-lg-0  mt-md-0 mt-2 col-xs-12 px-1">
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
                        <div class="col-lg-3 col-md-6 col-sm-6  px-1 px-lg-2  mt-lg-0  mt-md-0 mt-2 ">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Search Exact" aria-label="Username"
                                    aria-describedby="basic-addon1" style="height: 26px;">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1" style="padding: 5px;"><i
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
                                <th>Total No of deposits</th>
                                <th>Total Deposit</th>
                                <th>Total No of withdraws</th>
                                <th>Total Withdraw</th>
                                <th>Total Net</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>56007</td>
                                <td>40048.00</td>
                                <td>17992</td>
                                <td>56007</td>
                                <td>2251346.37</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="table-player">
                    <table class="table data-table">
                        <thead>
                            <tr>
                                <th>User Name</th>
                                <th>No of deposits</th>
                                <th>Total Deposit</th>
                                <th>No of withdraws</th>
                                <th>Total Withdraw</th>
                                <th>Net</th>
                                <th>Last Action</th>
                            </tr>

                        </thead>
                        <tbody>
                            <tr class="odd">
                                <td>rkobro</td>
                                <td>8</td>
                                <td>2.00</td>
                                <td>4</td>
                                <td>200.00</td>
                                <td>200</td>
                                <td>20-02-2023 15:13:50</td>
                            </tr>
                            <tr class="even">
                                <td>box021</td>
                                <td>8</td>
                                <td>2.00</td>
                                <td>0</td>
                                <td>20000.00</td>
                                <td>790</td>
                                <td>20-02-2023 15:13:50</td>
                            </tr>
                            <tr class="odd">
                                <td>rkobro</td>
                                <td>8</td>
                                <td>2.00</td>
                                <td>4</td>
                                <td>200.00</td>
                                <td>200</td>
                                <td>20-02-2023 15:13:50</td>
                            </tr>
                            <tr class="even">
                                <td>box021</td>
                                <td>8</td>
                                <td>2.00</td>
                                <td>0</td>
                                <td>20000.00</td>
                                <td>790</td>
                                <td>20-02-2023 15:13:50</td>
                            </tr>
                            <tr class="odd">
                                <td>rkobro</td>
                                <td>8</td>
                                <td>2.00</td>
                                <td>4</td>
                                <td>200.00</td>
                                <td>200</td>
                                <td>20-02-2023 15:13:50</td>
                            </tr>
                            <tr class="even">
                                <td>box021</td>
                                <td>8</td>
                                <td>2.00</td>
                                <td>0</td>
                                <td>20000.00</td>
                                <td>790</td>
                                <td>20-02-2023 15:13:50</td>
                            </tr>
                            <tr class="odd">
                                <td>rkobro</td>
                                <td>8</td>
                                <td>2.00</td>
                                <td>4</td>
                                <td>200.00</td>
                                <td>200</td>
                                <td>20-02-2023 15:13:50</td>
                            </tr>
                            <tr class="even">
                                <td>box021</td>
                                <td>8</td>
                                <td>2.00</td>
                                <td>0</td>
                                <td>20000.00</td>
                                <td>790</td>
                                <td>20-02-2023 15:13:50</td>
                            </tr>
                            <tr class="odd">
                                <td>rkobro</td>
                                <td>8</td>
                                <td>2.00</td>
                                <td>4</td>
                                <td>200.00</td>
                                <td>200</td>
                                <td>20-02-2023 15:13:50</td>
                            </tr>
                            <tr class="even">
                                <td>box021</td>
                                <td>8</td>
                                <td>2.00</td>
                                <td>0</td>
                                <td>20000.00</td>
                                <td>790</td>
                                <td>20-02-2023 15:13:50</td>
                            </tr>
                            <tr class="odd">
                                <td>rkobro</td>
                                <td>8</td>
                                <td>2.00</td>
                                <td>4</td>
                                <td>200.00</td>
                                <td>200</td>
                                <td>20-02-2023 15:13:50</td>
                            </tr>
                            <tr class="even">
                                <td>box021</td>
                                <td>8</td>
                                <td>2.00</td>
                                <td>0</td>
                                <td>20000.00</td>
                                <td>790</td>
                                <td>20-02-2023 15:13:50</td>
                            </tr>
                            <tr class="odd">
                                <td>rkobro</td>
                                <td>8</td>
                                <td>2.00</td>
                                <td>4</td>
                                <td>200.00</td>
                                <td>200</td>
                                <td>20-02-2023 15:13:50</td>
                            </tr>
                            <tr class="even">
                                <td>box021</td>
                                <td>8</td>
                                <td>2.00</td>
                                <td>0</td>
                                <td>20000.00</td>
                                <td>790</td>
                                <td>20-02-2023 15:13:50</td>
                            </tr>
                            <tr class="odd">
                                <td>rkobro</td>
                                <td>8</td>
                                <td>2.00</td>
                                <td>4</td>
                                <td>200.00</td>
                                <td>200</td>
                                <td>20-02-2023 15:13:50</td>
                            </tr>
                            <tr class="even">
                                <td>box021</td>
                                <td>8</td>
                                <td>2.00</td>
                                <td>0</td>
                                <td>20000.00</td>
                                <td>790</td>
                                <td>20-02-2023 15:13:50</td>
                            </tr>
                            <tr class="odd">
                                <td>rkobro</td>
                                <td>8</td>
                                <td>2.00</td>
                                <td>4</td>
                                <td>200.00</td>
                                <td>200</td>
                                <td>20-02-2023 15:13:50</td>
                            </tr>
                            <tr class="even">
                                <td>box021</td>
                                <td>8</td>
                                <td>2.00</td>
                                <td>0</td>
                                <td>20000.00</td>
                                <td>790</td>
                                <td>20-02-2023 15:13:50</td>
                            </tr>
                            <tr class="odd">
                                <td>rkobro</td>
                                <td>8</td>
                                <td>2.00</td>
                                <td>4</td>
                                <td>200.00</td>
                                <td>200</td>
                                <td>20-02-2023 15:13:50</td>
                            </tr>
                            <tr class="even">
                                <td>box021</td>
                                <td>8</td>
                                <td>2.00</td>
                                <td>0</td>
                                <td>20000.00</td>
                                <td>790</td>
                                <td>20-02-2023 15:13:50</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- <div class="d-flex px-2 d-none">
                                <div class="dataTables_length" id="DataTables_Table_0_length">
                                    <label>Rows per page
                                        <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select>
                                    </label>
                                </div>
                                <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">1 of 6
                                </div>
                                <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><a
                                        class="paginate_button previous disabled" aria-controls="DataTables_Table_0" data-dt-idx="0"
                                        tabindex="-1" id="DataTables_Table_0_previous">&lt;</a><span><a
                                            class="paginate_button current" aria-controls="DataTables_Table_0" data-dt-idx="1"
                                            tabindex="0">1</a><a class="paginate_button " aria-controls="DataTables_Table_0"
                                            data-dt-idx="2" tabindex="0">2</a><a class="paginate_button "
                                            aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0">3</a><a
                                            class="paginate_button " aria-controls="DataTables_Table_0" data-dt-idx="4"
                                            tabindex="0">4</a><a class="paginate_button " aria-controls="DataTables_Table_0"
                                            data-dt-idx="5" tabindex="0">5</a><a class="paginate_button "
                                            aria-controls="DataTables_Table_0" data-dt-idx="6" tabindex="0">6</a></span><a
                                        class="paginate_button next" aria-controls="DataTables_Table_0" data-dt-idx="7" tabindex="0"
                                        id="DataTables_Table_0_next">&gt;</a>
                                </div>
                            </div> -->
                <div class="clearfix px-2">
                    <div class="col-sm-6 div_sort">
                        showing
                        <span id="sp_start">1</span>
                        to
                        <span id="sp_end">19</span>
                        of
                        <span id="sp_totel">19</span>
                        entries
                    </div>
                </div>
            </div>
        </div>
        <!------RIGHT SIDE CONTENT END------->
    </div>

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
</body>

</html>