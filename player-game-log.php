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
                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                            <h1 class="title_h1 same_heading">Player Game Log</h1>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-4 col-md-6  col-sm-6 mt-lg-0  mt-md-4 col-xs-12">
                                    <div class="form-group">
                                        <select name="" id="" class="w-100">
                                            <option value="" selected="">All</option>
                                            <option value="">Bot</option>
                                            <option value="">Player</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12  col-sm-12  col-xs-12">
                                    <div class="form-group">
                                        <select name="" id="" class="w-100 ">
                                            <option value="" selected="">All Games</option>
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
                                <div class="col-lg-4 col-md-6  col-sm-6 mt-lg-0  mt-md-4 mt-2 col-xs-12">
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
                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Search Exact" aria-label="Username"
                                    aria-describedby="basic-addon1" style="height: 26px;">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1" style="padding: 5px;"><i
                                            class="fa-solid fa-magnifying-glass"></i></span>
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
                                <th>Username</th>
                                <th>Total Session</th>
                                <th>Total Bet</th>
                                <th>Total Win</th>
                                <th>Win/Lose</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>redbot1</td>
                                <td>1</td>
                                <td>2695</td>
                                <td>3219.3</td>
                                <td id="green">15</td>
                                <td><button class="btn"><i class="fa-solid fa-arrows-rotate"></i></button></td>
                            </tr>
                            <tr>
                                <td>7062966885</td>
                                <td>1</td>
                                <td>25595</td>
                                <td>32719.3</td>
                                <td class="star">1555</td>
                                <td><button class="btn"><i class="fa-solid fa-arrows-rotate"></i></button></td>
                            </tr>
                            <tr>
                                <td>redbot1</td>
                                <td>1</td>
                                <td>2695</td>
                                <td>3219.3</td>
                                <td id="green">15</td>
                                <td><button class="btn"><i class="fa-solid fa-arrows-rotate"></i></button></td>
                            </tr>
                            <tr>
                                <td>7062966885</td>
                                <td>1</td>
                                <td>25595</td>
                                <td>32719.3</td>
                                <td class="star">1555</td>
                                <td><button class="btn"><i class="fa-solid fa-arrows-rotate"></i></button></td>
                            </tr>
                            <tr c>
                                <td>redbot1</td>
                                <td>1</td>
                                <td>2695</td>
                                <td>3219.3</td>
                                <td id="green">15</td>
                                <td><button class="btn"><i class="fa-solid fa-arrows-rotate"></i></button></td>
                            </tr>
                            <tr>
                                <td>7062966885</td>
                                <td>1</td>
                                <td>25595</td>
                                <td>32719.3</td>
                                <td class="star">1555</td>
                                <td><button class="btn"><i class="fa-solid fa-arrows-rotate"></i></button></td>
                            </tr>
                            <tr>
                                <td>redbot1</td>
                                <td>1</td>
                                <td>2695</td>
                                <td>3219.3</td>
                                <td id="green">15</td>
                                <td><button class="btn"><i class="fa-solid fa-arrows-rotate"></i></button></td>
                            </tr>
                            <tr>
                                <td>7062966885</td>
                                <td>1</td>
                                <td>25595</td>
                                <td>32719.3</td>
                                <td class="star">1555</td>
                                <td><button class="btn"><i class="fa-solid fa-arrows-rotate"></i></button></td>
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