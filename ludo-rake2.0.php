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
                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                            <h1 class="title_h1 same_heading">Ludo Rake 2.0</h1>
                        </div>
                        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-6 mt-lg-0">
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
                                <div class="col-lg-3 col-md-3 col-6 mt-lg-0">
                                    <div class="form-group">
                                        <input type="date" class="w-100">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-6 mt-lg-0  mt-md-0 mt-2">
                                    <div class="form-group">
                                        <input type="date" class="w-100">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-6 mt-lg-0  mt-md-0 mt-2">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search for..."
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
                <div class="table-player">
                    <table class="table data-table">
                        <thead>
                            <tr>
                                <th>Status</th>
                                <th>Table</th>
                                <th>Owner</th>
                                <th>Total Player</th>
                                <th>Hands Played</th>
                                <th>Bet</th>
                                <th>Win</th>
                                <th>Rake</th>
                                <th>Created On </th>
                                <th>Valid till </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr></tr>
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