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
                    <div class="row">
                        <div class="col-md-6">
                            <h1 class="gamehistoryheading title_h1 same_heading">Summary Report </h1>
                        </div>
                        <div class="col-md-6">
                            <div class="row user-select">
                                <div class="col-6">
                                    <div class="form-group">
                                        <select>
                                            <option value="0" selected>Today</option>
                                            <option value="1">Yesterday</option>
                                            <option value="2">Current Week</option>
                                            <option value="3">Last Week</option>
                                            <option value="4">Current Month</option>
                                            <option value="5">Last Month</option>
                                            <option value="6">Last 6 Months</option>
                                            <option value="7">Date Range</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6 form-group">
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
                <div class="table-player  bank-details">
                    <table class="table data-table w-100">
                        <thead>

                            <tr>
                                <th>Date</th>
                                <th>Total Bet</th>
                                <th>Total Win</th>
                                <th>R.T.P</th>
                                <th>Net Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>30 Jan'22 To 30 May'23</td>
                                <td>40.00</td>
                                <td>0</td>
                                <td>50.00</td>
                                <td>0.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
                <div class="table-player  bank-details">
                    <table class="table data-table w-100">
                        <thead>

                            <tr>
                                <th>Game</th>
                                <th>Play points</th>
                                <th>Bonus Contr.</th>
                                <th>Bonus/JP Win</th>
                                <th>No. of JP</th>
                                <th>Bets</th>
                                <th>Avg. Bet</th>
                                <th>R.T.P</th>
                                <th>Net Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="tag"><span>MZ020045 - </span> Dragon tiger</td>
                                <td>50.00</td>
                                <td>0.00</td>
                                <td>0.00</td>
                                <td>0</td>
                                <td>4</td>
                                <td>12.50</td>
                                <td>0.00</td>
                                <td>50.00</td>
                            </tr>
                            <tr>
                                <td class="tag"><span>MZ020019 - </span> Baccarat </td>
                                <td>50.00</td>
                                <td>0.00</td>
                                <td>0.00</td>
                                <td>0</td>
                                <td>4</td>
                                <td>12.50</td>
                                <td>0.00</td>
                                <td>50.00</td>
                            </tr>
                            <tr>
                                <td class="tag"><span>MZ020105 - </span> Wingo </td>
                                <td>50.00</td>
                                <td>0.00</td>
                                <td>0.00</td>
                                <td>0</td>
                                <td>4</td>
                                <td>12.50</td>
                                <td>0.00</td>
                                <td>50.00</td>
                            </tr>
                            <tr>
                                <td class="tag"><span>MZ020080 - </span> Crazy Win </td>
                                <td>50.00</td>
                                <td>0.00</td>
                                <td>0.00</td>
                                <td>0</td>
                                <td>4</td>
                                <td>12.50</td>
                                <td>0.00</td>
                                <td>50.00</td>
                            </tr>
                            <tr>
                                <td class="tag"><span>MZ020017 - </span> European Roulette </td>
                                <td>50.00</td>
                                <td>0.00</td>
                                <td>0.00</td>
                                <td>0</td>
                                <td>4</td>
                                <td>12.50</td>
                                <td>0.00</td>
                                <td>50.00</td>
                            </tr>
                            <tr>
                                <td class="tag"><span>MZ020015 - </span> American Roulette</td>
                                <td>50.00</td>
                                <td>0.00</td>
                                <td>0.00</td>
                                <td>0</td>
                                <td>4</td>
                                <td>12.50</td>
                                <td>0.00</td>
                                <td>50.00</td>
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