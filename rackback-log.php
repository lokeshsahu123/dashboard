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
                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                            <h1 class="title_h1 same_heading">Rack Back</h1>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
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
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
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
                    </div>
                </div>
            </div>
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
                <div class="table-player  affiliate-list">
                    <table class="table data-table">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Username</th>
                                <th>Game</th>
                                <th>Table ID</th>
                                <th>Total Bet</th>
                                <th>Rake On Table</th>
                                <th>Rack-Back %</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="11">no record found</td>
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