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
                            <h1 class="title_h1 same_heading">Player Management </h1>
                        </div>
                        <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-6">
                                    <div class="form-group">
                                        <select name="" id="" class="w-100">
                                            <option value="" selected="">All</option>
                                            <option value="">Login</option>
                                            <option value="">signup</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-6">
                                    <div class="form-group">
                                        <select name="" id="" class="w-100">
                                            <option value="" selected="">Today</option>
                                            <option value="">Yesterday</option>
                                            <option value="">Date Range</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-6 mt-lg-0  mt-md-0 mt-2">
                                    <input type="search" placeholder="2023-06-21" class="w-100">
                                </div>
                                <div class="col-lg-3 col-md-3 col-6 mt-lg-0  mt-md-0 mt-2">
                                    <input type="search" placeholder="2023-06-21" class="w-100">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-4  col-6 mt-lg-0 mt-2"
                                    style="white-space: nowrap; font-size: 12px; font-weight: 600; color: #393939db;">
                                    <input type="checkbox">
                                    <label for="">Group By IP</label>
                                </div>
                                <div class="col-lg-8  col-6 mt-lg-0 mt-md-0  mt-2">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Search for...."
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
                            <a href="#" id="excel"><button class="btn btn-danger btn-sm ">Download Excel</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
                <div class="table-player  affiliate-list">
                    <table class="table data-table">
                        <thead>
                            <tr>
                                <th>User Name</th>
                                <th>Event</th>
                                <th>Location</th>
                                <th>Device ID</th>
                                <th>IP</th>
                                <th>Device Type</th>
                                <th>Browser Type</th>
                                <th>Login Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>8955646946</td>
                                <td>login</td>
                                <td>-</td>
                                <td>5034a5dfb32f0f2fd81a1e8235b08ab8</td>
                                <td>157.38.41.52</td>
                                <td>ANDROID</td>
                                <td>ANDROID</td>
                                <td>06-27-2023 10:28:41</td>
                            </tr>
                            <tr>
                                <td>8955646946</td>
                                <td>login</td>
                                <td>-</td>
                                <td>5034a5dfb32f0f2fd81a1e8235b08ab8</td>
                                <td>157.38.41.52</td>
                                <td>ANDROID</td>
                                <td>ANDROID</td>
                                <td>06-27-2023 10:28:41</td>
                            </tr>
                            <tr>
                                <td>8955646946</td>
                                <td>login</td>
                                <td>-</td>
                                <td>5034a5dfb32f0f2fd81a1e8235b08ab8</td>
                                <td>157.38.41.52</td>
                                <td>ANDROID</td>
                                <td>ANDROID</td>
                                <td>06-27-2023 10:28:41</td>
                            </tr>
                            <tr>
                                <td>8955646946</td>
                                <td>login</td>
                                <td>-</td>
                                <td>5034a5dfb32f0f2fd81a1e8235b08ab8</td>
                                <td>157.38.41.52</td>
                                <td>ANDROID</td>
                                <td>ANDROID</td>
                                <td>06-27-2023 10:28:41</td>
                            </tr>
                            <tr>
                                <td>8955646946</td>
                                <td>login</td>
                                <td>-</td>
                                <td>5034a5dfb32f0f2fd81a1e8235b08ab8</td>
                                <td>157.38.41.52</td>
                                <td>ANDROID</td>
                                <td>ANDROID</td>
                                <td>06-27-2023 10:28:41</td>
                            </tr>
                            <tr>
                                <td>8955646946</td>
                                <td>login</td>
                                <td>-</td>
                                <td>5034a5dfb32f0f2fd81a1e8235b08ab8</td>
                                <td>157.38.41.52</td>
                                <td>ANDROID</td>
                                <td>ANDROID</td>
                                <td>06-27-2023 10:28:41</td>
                            </tr>
                            <tr>
                                <td>8955646946</td>
                                <td>login</td>
                                <td>-</td>
                                <td>5034a5dfb32f0f2fd81a1e8235b08ab8</td>
                                <td>157.38.41.52</td>
                                <td>ANDROID</td>
                                <td>ANDROID</td>
                                <td>06-27-2023 10:28:41</td>
                            </tr>
                            <tr>
                                <td>8955646946</td>
                                <td>login</td>
                                <td>-</td>
                                <td>5034a5dfb32f0f2fd81a1e8235b08ab8</td>
                                <td>157.38.41.52</td>
                                <td>ANDROID</td>
                                <td>ANDROID</td>
                                <td>06-27-2023 10:28:41</td>
                            </tr>
                            <tr>
                                <td>8955646946</td>
                                <td>login</td>
                                <td>-</td>
                                <td>5034a5dfb32f0f2fd81a1e8235b08ab8</td>
                                <td>157.38.41.52</td>
                                <td>ANDROID</td>
                                <td>ANDROID</td>
                                <td>06-27-2023 10:28:41</td>
                            </tr>
                            <tr>
                                <td>8955646946</td>
                                <td>login</td>
                                <td>-</td>
                                <td>5034a5dfb32f0f2fd81a1e8235b08ab8</td>
                                <td>157.38.41.52</td>
                                <td>ANDROID</td>
                                <td>ANDROID</td>
                                <td>06-27-2023 10:28:41</td>
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