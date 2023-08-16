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
            <div class="das-bg-block w-">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <h1 class="gamehistoryheading title_h1 same_heading">Player Transaction</h1>
                        </div>
                        <div class="col-md-6">
                            <div class="row user-select">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select>
                                            <option selected="selected">Recent</option>
                                            <option>Today</option>
                                            <option>Yesterday</option>
                                            <option>Current Week</option>
                                            <option>Last Week</option>
                                            <option>Date Range</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
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
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
                <div class="table-player  bank-details">
                    <table class="table data-table">
                        <thead>
                            <tr>

                                <th>Date</th>
                                <th>Transaction Id</th>
                                <th>Player ID</th>
                                <th>Game</th>
                                <th>Opening Balance</th>
                                <th>Amount</th>
                                <th>Closing Balance</th>
                                <th>Remark</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr role="row">
                                <td>30 May'23</td>
                                <td>8001533</td>
                                <td>frank3</td>
                                <td>Rummy</td>
                                <td>64,701.80</td>
                                <td><i class="fa-solid fa-arrow-down" style="color: #a80000;"></i></td>


                                <td>64,760.80 </td>
                                <td>Point rummy</td>
                            </tr>
                            <tr role="row">
                                <td>30 May'23</td>
                                <td>8001533</td>
                                <td>frank3</td>
                                <td>Rummy</td>
                                <td>64,701.80</td>
                                <td><i class="fa-solid fa-arrow-up" style="color: #00c70d;"></i></td>


                                <td>64,760.80 </td>
                                <td>Point rummy</td>
                            </tr>
                            <tr role="row">
                                <td>30 May'23</td>
                                <td>8001533</td>
                                <td>frank3</td>
                                <td>Rummy</td>
                                <td>64,701.80</td>
                                <td><i class="fa-solid fa-arrow-down" style="color: #a80000;"></i></td>


                                <td>64,760.80 </td>
                                <td>Point rummy</td>
                            </tr>
                            <tr role="row">
                                <td>30 May'23</td>
                                <td>8001533</td>
                                <td>frank3</td>
                                <td>Rummy</td>
                                <td>64,701.80</td>
                                <td><i class="fa-solid fa-arrow-up" style="color: #00c70d;"></i></td>


                                <td>64,760.80 </td>
                                <td>Point rummy</td>
                            </tr>
                            <tr role="row">
                                <td>30 May'23</td>
                                <td>8001533</td>
                                <td>frank3</td>
                                <td>Rummy</td>
                                <td>64,701.80</td>
                                <td><i class="fa-solid fa-arrow-up" style="color: #00c70d;"></i></td>


                                <td>64,760.80 </td>
                                <td>Point rummy</td>
                            </tr>
                            <tr role="row">
                                <td>30 May'23</td>
                                <td>8001533</td>
                                <td>frank3</td>
                                <td>Rummy</td>
                                <td>64,701.80</td>
                                <td><i class="fa-solid fa-arrow-up" style="color: #00c70d;"></i></td>


                                <td>64,760.80 </td>
                                <td>Point rummy</td>
                            </tr>
                            <tr role="row">
                                <td>30 May'23</td>
                                <td>8001533</td>
                                <td>frank3</td>
                                <td>Rummy</td>
                                <td>64,701.80</td>
                                <td><i class="fa-solid fa-arrow-up" style="color: #00c70d;"></i></td>


                                <td>64,760.80 </td>
                                <td>Point rummy</td>
                            </tr>
                            <tr role="row">
                                <td>30 May'23</td>
                                <td>8001533</td>
                                <td>frank3</td>
                                <td>Rummy</td>
                                <td>64,701.80</td>
                                <td><i class="fa-solid fa-arrow-down" style="color: #a80000;"></i></td>


                                <td>64,760.80 </td>
                                <td>Point rummy</td>
                            </tr>
                            <tr role="row">
                                <td>30 May'23</td>
                                <td>8001533</td>
                                <td>frank3</td>
                                <td>Rummy</td>
                                <td>64,701.80</td>
                                <td><i class="fa-solid fa-arrow-down" style="color: #a80000;"></i></td>


                                <td>64,760.80 </td>
                                <td>Point rummy</td>
                            </tr>
                            <tr role="row">
                                <td>30 May'23</td>
                                <td>8001533</td>
                                <td>frank3</td>
                                <td>Rummy</td>
                                <td>64,701.80</td>
                                <td><i class="fa-solid fa-arrow-up" style="color: #00c70d;"></i></td>



                                <td>64,760.80 </td>
                                <td>Point rummy</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!------RIGHT SIDE CONTENT END------->
        </div>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" language="javascript" src="assets/js/jquery.dataTables.min.js"></script>
</body>

</html>