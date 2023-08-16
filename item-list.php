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
                        <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
                            <h1 class="title_h1 same_heading">Items List</h1>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="row">
                                <div class="col-lg-6 col-md-4 col-sm-4 col-12">
                                    <div class="form-group">
                                        <select name="" id="" class="w-100 ">
                                            <option value="" selected="">All</option>
                                            <option value="">Chips</option>
                                            <option value="">Diamond</option>
                                            <option value="">Diamond-Convert</option>
                                            <option value="">IOS-Chips</option>
                                            <option value="">IOS-Diamond</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12 mt-lg-0 mt-md-0 mt-sm-0 mt-2">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Search Exact"
                                            aria-label="Username" aria-describedby="basic-addon1" style="height: 30px;">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1" style="padding: 7px;"><i
                                                    class="fa-solid fa-magnifying-glass"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 ">
                            <div class="d-flex gap-2 list-add">
                                <a href="#" class="nav-link">
                                    <i class="fa fa-plus-circle"></i>
                                    Items
                                </a>
                                <a href="#" class="nav-link">
                                    <i class="fa fa-check-circle"></i>
                                    Active
                                </a>
                                <a href="#" class="nav-link">
                                    <i class="fa-solid fa-ban"></i>
                                    Inactive
                                </a>
                                <a href="#" class="nav-link">
                                    <i class="fa fa-trash"></i>
                                    Delete
                                </a>
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
                                <th><input type="checkbox"></th>
                                <th>Item Name</th>
                                <th>Item Key</th>
                                <th>Item type</th>
                                <th>Quantity</th>
                                <th>Amount</th>
                                <th>Date</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tr class="odd">
                            <td><input type="checkbox"></td>
                            <td>tetedyyy </td>
                            <td>5</td>
                            <td>Chips</td>
                            <td>55</td>
                            <td>55.5</td>
                            <td>2023-02-01 12:05:36</td>
                            <td>Active</td>
                        </tr>
                        <tr class="Even">
                            <td><input type="checkbox"></td>
                            <td>Test Product </td>
                            <td>5</td>
                            <td>Chips</td>
                            <td>55</td>
                            <td>55.5</td>
                            <td>2023-02-01 12:05:36</td>
                            <td>Active</td>
                        </tr>
                        <tr class="odd">
                            <td><input type="checkbox"></td>
                            <td>tetedyyy </td>
                            <td>5</td>
                            <td>Chips</td>
                            <td>55</td>
                            <td>55.5</td>
                            <td>2023-02-01 12:05:36</td>
                            <td>Active</td>
                        </tr>
                        <tr class="Even">
                            <td><input type="checkbox"></td>
                            <td>Test Product </td>
                            <td>5</td>
                            <td>Chips</td>
                            <td>55</td>
                            <td>55.5</td>
                            <td>2023-02-01 12:05:36</td>
                            <td>Active</td>
                        </tr>
                        <tr class="odd">
                            <td><input type="checkbox"></td>
                            <td>tetedyyy </td>
                            <td>5</td>
                            <td>Chips</td>
                            <td>55</td>
                            <td>55.5</td>
                            <td>2023-02-01 12:05:36</td>
                            <td>Active</td>
                        </tr>
                        <tr class="Even">
                            <td><input type="checkbox"></td>
                            <td>Test Product </td>
                            <td>5</td>
                            <td>Chips</td>
                            <td>55</td>
                            <td>55.5</td>
                            <td>2023-02-01 12:05:36</td>
                            <td>Active</td>
                        </tr>
                        <tr class="odd">
                            <td><input type="checkbox"></td>
                            <td>tetedyyy </td>
                            <td>5</td>
                            <td>Chips</td>
                            <td>55</td>
                            <td>55.5</td>
                            <td>2023-02-01 12:05:36</td>
                            <td>Active</td>
                        </tr>
                        <tr class="Even">
                            <td><input type="checkbox"></td>
                            <td>Test Product </td>
                            <td>5</td>
                            <td>Chips</td>
                            <td>55</td>
                            <td>55.5</td>
                            <td>2023-02-01 12:05:36</td>
                            <td>Active</td>
                        </tr>
                        <tr class="odd">
                            <td><input type="checkbox"></td>
                            <td>tetedyyy </td>
                            <td>5</td>
                            <td>Chips</td>
                            <td>55</td>
                            <td>55.5</td>
                            <td>2023-02-01 12:05:36</td>
                            <td>Active</td>
                        </tr>
                        <tr class="Even">
                            <td><input type="checkbox"></td>
                            <td>Test Product </td>
                            <td>5</td>
                            <td>Chips</td>
                            <td>55</td>
                            <td>55.5</td>
                            <td>2023-02-01 12:05:36</td>
                            <td>Active</td>
                        </tr>
                        <tr class="odd">
                            <td><input type="checkbox"></td>
                            <td>tetedyyy </td>
                            <td>5</td>
                            <td>Chips</td>
                            <td>55</td>
                            <td>55.5</td>
                            <td>2023-02-01 12:05:36</td>
                            <td>Active</td>
                        </tr>
                        <tr class="Even">
                            <td><input type="checkbox"></td>
                            <td>Test Product </td>
                            <td>5</td>
                            <td>Chips</td>
                            <td>55</td>
                            <td>55.5</td>
                            <td>2023-02-01 12:05:36</td>
                            <td>Active</td>
                        </tr>
                        <tr class="odd">
                            <td><input type="checkbox"></td>
                            <td>tetedyyy </td>
                            <td>5</td>
                            <td>Chips</td>
                            <td>55</td>
                            <td>55.5</td>
                            <td>2023-02-01 12:05:36</td>
                            <td>Active</td>
                        </tr>
                        <tr class="Even">
                            <td><input type="checkbox"></td>
                            <td>Test Product </td>
                            <td>5</td>
                            <td>Chips</td>
                            <td>55</td>
                            <td>55.5</td>
                            <td>2023-02-01 12:05:36</td>
                            <td>Active</td>
                        </tr>
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