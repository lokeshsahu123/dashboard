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
                        <div class="col-lg-3 col-12">
                            <h1 class="title_h1 same_heading">Bonus History</h1>
                        </div>
                        <div class="col-lg-3"></div>
                        <div class="col-lg-3 col-6">
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
                        <div class="col-lg-3 col-6">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Search Exact" aria-label="Username"
                                    aria-describedby="basic-addon1" style="height: 29px;">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1" style="padding: 7px;"><i
                                            class="fa-solid fa-magnifying-glass"></i></span>
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
                                <th>session id</th>
                                <th>username</th>
                                <th>Game</th>
                                <th>Opening Balance</th>
                                <th>Closing Balance</th>
                                <th>Remark</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="odd" role="row">
                                <td>2023-02-11 18:58:08</td>
                                <td>6205847732</td>
                                <td>waihgt211220</td>
                                <td>Single Chance Dark Theme PC</td>
                                <td>3,600.00</td>
                                <td>10.00</td>
                                <td>Bet</td>
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