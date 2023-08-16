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
                <div class="loader-line"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                            <h1 class="gamehistoryheading title_h1 same_heading">Deposit Request</h1>
                        </div>
                        <div class="col-md-8">
                            <div class="row user-select">
                                <div class="col-md-2"></div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <select>
                                            <option value="">Approved</option>
                                            <option value="">Failed</option>
                                            <option value="">Pending</option>
                                            <option value="" selected="selected"> Auto Approved</option>
                                            <option value="">Rejected</option>
                                            <option value="">Not Completed</option>
                                            <option value="">All</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 mt-3 mt-md-0">
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
                                <div class="col-md-4 form-group mt-3 mt-md-0">
                                    <div class="input-group  input-group-sm">
                                        <input type="text" class="form-control" placeholder="Search for...."
                                            aria-label="Username" aria-describedby="basic-addon1"
                                            style="height:33.5px !important">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"
                                                style="padding:9px !important;"><i
                                                    class="fa-solid fa-magnifying-glass"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer top-table">
                <div class="table-player">
                    <table class="table data-table">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Total Amount</th>
                                <th>Amount Approved</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>30 Jan'22 To 30 May'23</td>
                                <td>40048.00</td>
                                <td>17992</td>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">

                <div class="table-player">
                    <table class="table data-table">
                        <thead>
                            <tr>
                                <th>Status</th>
                                <th>Transaction ID</th>
                                <th>Player ID</th>
                                <th>Amount</th>
                                <th>Amount Approved</th>
                                <th>Payment Method</th>
                                <th>Date</th>
                                <th>Remark</th>
                                <th>Action</th>
                            </tr>

                        </thead>
                        <tbody>
                            <tr>
                                <td><label for="" class="approved">Approved</label></td>
                                <td>898348dab5aa6baaa01f</td>
                                <td>6377825801</td>
                                <td>2.00</td>
                                <td>0.00</td>
                                <td>Phonepe</td>
                                <td>30 May 15:13:50</td>
                                <td>Auto-Approved</td>
                                <td>-</td>

                            </tr>
                            <tr>
                                <td><label for="" class="unapproved">Not Completed</label></td>
                                <td>898348dab5aa6baaa01f</td>
                                <td>6377825801</td>
                                <td>2.00</td>
                                <td>0.00</td>
                                <td>Phonepe</td>
                                <td>30 May 15:13:50</td>
                                <td>Auto-Approved</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td><label for="" class="approved">Approved</label></td>
                                <td>898348dab5aa6baaa01f</td>
                                <td>6377825801</td>
                                <td>2.00</td>
                                <td>0.00</td>
                                <td>Phonepe</td>
                                <td>30 May 15:13:50</td>
                                <td>Auto-Approved</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td><label for="" class="unapproved">Not Completed</label></td>
                                <td>898348dab5aa6baaa01f</td>
                                <td>6377825801</td>
                                <td>2.00</td>
                                <td>0.00</td>
                                <td>Phonepe</td>
                                <td>30 May 15:13:50</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td><label for="" class="approved">Approved</label></td>
                                <td>898348dab5aa6baaa01f</td>
                                <td>6377825801</td>
                                <td>2.00</td>
                                <td>0.00</td>
                                <td>Phonepe</td>
                                <td>30 May 15:13:50</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td><label for="" class="approved">Approved</label></td>
                                <td>898348dab5aa6baaa01f</td>
                                <td>6377825801</td>
                                <td>2.00</td>
                                <td>0.00</td>
                                <td>Phonepe</td>
                                <td>30 May 15:13:50</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td><label for="" class="approved">Approved</label></td>
                                <td>898348dab5aa6baaa01f</td>
                                <td>6377825801</td>
                                <td>2.00</td>
                                <td>0.00</td>
                                <td>Phonepe</td>
                                <td>30 May 15:13:50</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td><label for="" class="approved">Approved</label></td>
                                <td>898348dab5aa6baaa01f</td>
                                <td>6377825801</td>
                                <td>2.00</td>
                                <td>0.00</td>
                                <td>Phonepe</td>
                                <td>30 May 15:13:50</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td><label for="" class="approved">Approved</label></td>
                                <td>898348dab5aa6baaa01f</td>
                                <td>6377825801</td>
                                <td>2.00</td>
                                <td>0.00</td>
                                <td>Phonepe</td>
                                <td>30 May 15:13:50</td>
                                <td>-</td>
                                <td>-</td>
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