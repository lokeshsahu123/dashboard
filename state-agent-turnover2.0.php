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
                            <h1 class="title_h1 same_heading">State Agent Turnover 2.0</h1>
                        </div>
                        <div class="col-lg-9 col-12">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-6 ">
                                    <div class="form-group">
                                        <select name="" id="" class="w-100 ">
                                            <option value="" selected="">1SingalCasino</option>
                                            <option value="">3baan</option>
                                            <option value="">52casino</option>
                                            <option value="">52clubs</option>
                                            <option value="">99casino</option>
                                            <option value="">allrummy</option>
                                            <option value="">dadyqueen</option>
                                            <option value="">DeltinRummy</option>
                                            <option value="">dhamaalGames</option>
                                            <option value="">DreamIkka</option>
                                            <option value="">Fortune</option>
                                            <option value="">ForyouRummy</option>
                                            <option value="">KheloJeetloAsia</option>
                                            <option value="">LordofGames</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3  col-6 mt-lg-0">
                                    <div class="form-group">
                                        <select name="" id="" class="w-100">
                                            <option value="" selected="">All</option>
                                            <option value="">Pending</option>
                                            <option value="">Approved</option>
                                            <option value="">Rejected</option>
                                            <option value="">Reset</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3  col-6 mt-lg-0  mt-md-0 mt-2 col-xs-12">
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
                                <div class="col-lg-3 col-md-3 col-6 mt-lg-0  mt-md-0 mt-2 col-xs-12">
                                    <div class="input-group mb-3">
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
                        <div class="col-12 text-end">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form>
                                        <input type="radio" id="class" name="View">
                                        <label for="class">Classic View</label>
                                        <input type="radio" id="advance" name="View">
                                        <label for="advance">Advance View</label>
                                    </form>
                                </div>
                                <div class="col-lg-6 ms-auto">
                                    <a href="#" id="excel"><button class="btn btn-danger btn-sm ">Download
                                            Excel</button></a>
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
                                <th>Date</th>
                                <th>Total Bet</th>
                                <th>Total Refund</th>
                                <th>Total Win</th>
                                <th>Agent Commission</th>
                                <th>Super Agent Commission</th>
                                <th>Master Commission</th>
                                <th>State Agent Commission</th>
                                <th>Net <i class="fa-sharp fa-solid fa-circle-question"></i></th>
                                <th>Profit <i class="fa-sharp fa-solid fa-circle-question"></i></th>
                                <th>Profit % <i class="fa-sharp fa-solid fa-circle-question"></i></th>
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
                                <td>0</td>
                                <td>0</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="table-player">
                    <table class="table data-table">
                        <thead>
                            <tr>
                                <th>S.No.</th>
                                <th>State Agent ID</th>
                                <th>Total Bet</th>
                                <th>Total Refund</th>
                                <th>Total Win</th>
                                <th>Agent Commission</th>
                                <th>Super Agent Commission</th>
                                <th>Master Commission</th>
                                <th>State Agent Commission</th>
                                <th>Net % <i class="fa-sharp fa-solid fa-circle-question"></i></th>
                                <th>Profit <i class="fa-sharp fa-solid fa-circle-question"></i></th>
                                <th>Profit % <i class="fa-sharp fa-solid fa-circle-question"></i></th>
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
                                <td>100</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <!------RIGHT SIDE CONTENT END------->
    </div>

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- <script src="assets/js/jquery.dataTables.min.js"></script> -->
</body>

</html>