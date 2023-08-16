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
                            <h1 class="title_h1 same_heading">Purchase List </h1>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Search Exact" aria-label="Username"
                                    aria-describedby="basic-addon1" style="height: 30px;">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1" style="padding: 7px;"><i
                                            class="fa-solid fa-magnifying-glass"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-6">
                                    <p>Quantity: 0</p>
                                </div>
                                <div class="col-6">
                                    <p>Total amount: 0.00</p>
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
                                <th>Order On</th>
                                <th>Item Name </th>
                                <th>Item Key </th>
                                <th>Username </th>
                                <th>Quantity</th>
                                <th> Amount</th>
                                <th>Type</th>
                                <th>Order Id</th>
                            </tr>

                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="11">no record found</td>
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