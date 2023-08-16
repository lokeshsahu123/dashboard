<?php
    require 'header.php';
    ?>


<body>
    <!-------HEADER START------->

    <!-------HEADER END------->
    <div class="full-page">
        <!------LEFT SIDE MENU-START------->
        <?php require('sidepanel.php');?>
        <!------LEFT SIDE MENU-END------->
        <!------RIGHT SIDE CONTENT START------->
        <div class="right-sidebar">
            <div class="das-bg-block w-100">
                <div class="container-fluid">
                    <div class="bank-details row">
                        <div class="col-lg-12">
                            <h1 class="title_h1 same_heading">Manage Maintenance </h1>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-6 col-md-6  col-sm-6 col-xs-12">
                                    <p class="mb-0">Select Game</p>
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
                                <div class="col-lg-6 col-md-6  col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <p class="mb-0">52 Casino</p>
                                        <select name="" id="" class="w-100">
                                            <option value="" selected="">All</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <div class="row">
                                <p class="mb-0">Date and Status</p>
                                <div class="col-lg-6 col-md-6  col-sm-6 mt-lg-0 col-6   ">
                                    <input type="date" class="w-100">
                                </div>
                                <div class="col-lg-6 col-md-6  col-sm-6 mt-lg-0 col-6  ">
                                    <input type="date" class="w-100">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-12  col-sm-12  col-xs-12">
                            <form action="">
                                <p class="mb-0">Message</p>
                                <textarea name="" id="" cols="15" rows="1"></textarea>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
                <div class="table-player  affiliate-list">
                    <table class="table data-table">
                        <thead>
                            <tr>
                                <th>Category Name/th>
                                <th>Maintenance For</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Utc Start</th>
                                <th>Utc End</th>
                                <th>Message</th>
                                <th>Action</th>
                            </tr>

                        </thead>
                        <tbody>
                            <tr>
                                <td>BLACKJACK</td>
                                <td>Public</td>
                                <td>2022-02-22 16:04:33</td>
                                <td>2022-04-22 16:04:36</td>
                                <td>2022-02-22 10:34:33</td>
                                <td>2022-02-22 10:34:33</td>
                                <td>ttt</td>
                                <td><a href="#"><button class="btn remove-btn">Remove</button></a></td>
                            </tr>
                            <tr>
                                <td>BLACKJACK</td>
                                <td>Public</td>
                                <td>2022-02-22 16:04:33</td>
                                <td>2022-04-22 16:04:36</td>
                                <td>2022-02-22 10:34:33</td>
                                <td>2022-02-22 10:34:33</td>
                                <td>ttt</td>
                                <td><a href="#"><button class="btn remove-btn">Remove</button></a></td>
                            </tr>
                            <tr>
                                <td>BLACKJACK</td>
                                <td>Public</td>
                                <td>2022-02-22 16:04:33</td>
                                <td>2022-04-22 16:04:36</td>
                                <td>2022-02-22 10:34:33</td>
                                <td>2022-02-22 10:34:33</td>
                                <td>ttt</td>
                                <td><a href="#"><button class="btn remove-btn">Remove</button></a></td>
                            </tr>
                            <tr>
                                <td>BLACKJACK</td>
                                <td>Public</td>
                                <td>2022-02-22 16:04:33</td>
                                <td>2022-04-22 16:04:36</td>
                                <td>2022-02-22 10:34:33</td>
                                <td>2022-02-22 10:34:33</td>
                                <td>ttt</td>
                                <td><a href="#"><button class="btn remove-btn">Remove</button></a></td>
                            </tr>
                            <tr>
                                <td>BLACKJACK</td>
                                <td>Public</td>
                                <td>2022-02-22 16:04:33</td>
                                <td>2022-04-22 16:04:36</td>
                                <td>2022-02-22 10:34:33</td>
                                <td>2022-02-22 10:34:33</td>
                                <td>ttt</td>
                                <td><a href="#"><button class="btn remove-btn">Remove</button></a></td>
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