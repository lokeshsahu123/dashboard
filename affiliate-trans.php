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
                    <div class="bank-details row d-flex align-items-center">
                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                            <h1 class="title_h1 same_heading">Affiliate Transaction</h1>
                        </div>
                        <div class="col-lg-3"></div>
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
                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 mt-lg-0 mt-md-0 mt-2">
                            <div class="row">
                                <!-- <div class="col-lg-1 col-6 accountHBcheckbox">
                                    <input type="checkbox">
                                </div> -->
                                <div class="col-lg-12 col-md-6 col-sm-12">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search for..."
                                            aria-label="Username" aria-describedby="basic-addon1" style="height: 32px;">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1" style="padding: 8px;"><i
                                                    class="fa-solid fa-magnifying-glass"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="Tabletabsbox">
                <ul class="nav nav-pills mb-3 transtabs" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                            aria-selected="true">All</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                            aria-selected="false">Withdrawal</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                            aria-selected="false">Deposit</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="paid-tab" data-bs-toggle="pill" data-bs-target="#pills-paid"
                            type="button" role="tab" aria-controls="paid" aria-selected="false">Paid Commission</button>
                    </li>

                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                        aria-labelledby="pills-home-tab">
                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
                            <div class="table-player">
                                <table class="table data-table">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Total Send Out</th>
                                            <th>Total Claim Back</th>
                                            <th>Total Paid Commission</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2003-03-01 to 2023-06-23</td>
                                            <td>N/A</td>
                                            <td>N/A</td>
                                            <td>N/A</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="table-player">
                                <table class="table data-table">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Player ID</th>
                                            <th>Agent ID</th>
                                            <th>Total Bet</th>
                                            <th>Total Refund</th>
                                            <th>Total Win</th>
                                            <th>Win/Loss</th>
                                            <th>Total Rake</th>
                                            <th>Commission</th>
                                            <th>Net</th>
                                            <th>Net %</th>
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
                                            <td>0.00</td>
                                            <td>-8.3</td>
                                            <td>100</td>
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
                                            <td>0.00</td>
                                            <td>-8.3</td>
                                            <td>100</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
                            <div class="table-player">
                                <table class="table data-table">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Total Bet</th>
                                            <th>Total Refund</th>
                                            <th>Total Win</th>
                                            <th>Total Win/Lose</th>
                                            <th>Total Rake</th>
                                            <th>Commission</th>
                                            <th>Net</th>
                                            <th>Net %</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2003-03-01 to 2023-06-23</td>
                                            <td>40.00</td>
                                            <td>0</td>
                                            <td>45.2</td>
                                            <td>45.5</td>
                                            <td>60.60</td>
                                            <td>0</td>
                                            <td>55</td>
                                            <td>54.25</td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="table-player">
                                <table class="table data-table">
                                    <thead>
                                        <tr>
                                            <th>S.No.</th>
                                            <th>Player ID</th>
                                            <th>Agent ID</th>
                                            <th>Total Bet</th>
                                            <th>Total Refund</th>
                                            <th>Total Win</th>
                                            <th>Win/Loss</th>
                                            <th>Total Rake</th>
                                            <th>Commission</th>
                                            <th>Net</th>
                                            <th>Net %</th>
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
                                            <td>0.00</td>
                                            <td>-8.3</td>
                                            <td>100</td>
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
                                            <td>0.00</td>
                                            <td>-8.3</td>
                                            <td>100</td>
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
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
                            <div class="table-player">
                                <table class="table data-table">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Total Bet</th>
                                            <th>Total Refund</th>
                                            <th>Total Win</th>
                                            <th>Total Win/Lose</th>
                                            <th>Total Rake</th>
                                            <th>Commission</th>
                                            <th>Net</th>
                                            <th>Net %</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2003-03-01 to 2023-06-23</td>
                                            <td>40.00</td>
                                            <td>0</td>
                                            <td>45.2</td>
                                            <td>45.5</td>
                                            <td>60.60</td>
                                            <td>0</td>
                                            <td>55</td>
                                            <td>54.25</td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="table-player">
                                <table class="table data-table">
                                    <thead>
                                        <tr>
                                            <th>S.No.</th>
                                            <th>Player ID</th>
                                            <th>Agent ID</th>
                                            <th>Total Bet</th>
                                            <th>Total Refund</th>
                                            <th>Total Win</th>
                                            <th>Win/Loss</th>
                                            <th>Total Rake</th>
                                            <th>Commission</th>
                                            <th>Net</th>
                                            <th>Net %</th>
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
                                            <td>0.00</td>
                                            <td>-8.3</td>
                                            <td>100</td>
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
                                            <td>0.00</td>
                                            <td>-8.3</td>
                                            <td>100</td>
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
                    <div class="tab-pane fade" id="pills-paid" role="tabpanel" aria-labelledby="paid-tab">
                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
                            <div class="table-player">
                                <table class="table data-table">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Total Bet</th>
                                            <th>Total Refund</th>
                                            <th>Total Win</th>
                                            <th>Total Win/Lose</th>
                                            <th>Total Rake</th>
                                            <th>Commission</th>
                                            <th>Net</th>
                                            <th>Net %</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2003-03-01 to 2023-06-23</td>
                                            <td>40.00</td>
                                            <td>0</td>
                                            <td>45.2</td>
                                            <td>45.5</td>
                                            <td>60.60</td>
                                            <td>0</td>
                                            <td>55</td>
                                            <td>54.25</td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="table-player">
                                <table class="table data-table">
                                    <thead>
                                        <tr>
                                            <th>S.No.</th>
                                            <th>Player ID</th>
                                            <th>Agent ID</th>
                                            <th>Total Bet</th>
                                            <th>Total Refund</th>
                                            <th>Total Win</th>
                                            <th>Win/Loss</th>
                                            <th>Total Rake</th>
                                            <th>Commission</th>
                                            <th>Net</th>
                                            <th>Net %</th>
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
                                            <td>0.00</td>
                                            <td>-8.3</td>
                                            <td>100</td>
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
                                            <td>0.00</td>
                                            <td>-8.3</td>
                                            <td>100</td>
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
                </div>
            </div>
        </div>
        <!------RIGHT SIDE CONTENT END------->
    </div>

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- PAGINATION -->
    <script type="text/javascript" language="javascript" src="assets/js/jquery.dataTables.min.js"></script>

</body>

</html>