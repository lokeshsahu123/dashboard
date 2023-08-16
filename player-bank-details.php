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
                            <h1 class="gamehistoryheading title_h1 same_heading">Bank Details</h1>
                        </div>
                        <div class="col-md-6">
                            <div class="row user-select">
                                <div class="col-md-6">
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
                                <th>Status</th>
                                <th>Player id</th>
                                <th>Account Holder Name</th>
                                <th>Account type</th>
                                <th>Account Details</th>
                                <th>Country</th>
                                <th>Last Updated</th>
                                <th>Updated by</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><label for="" class="approved">Approved</label></td>
                                <td>6205847732</td>
                                <td>Kapil Goyal</td>
                                <td>UPI</td>
                                <td>XXXXXXXX5458@upi</td>
                                <td>India</td>
                                <td>30 May 15:13:50</td>
                                <td>-</td>
                                <td><button class="btn-info reset-btn">Reset</button></td>
                            </tr>
                            <tr>
                                <td><label for="" class="approved">Approved</label></td>
                                <td>6205847732</td>
                                <td>Kapil Goyal</td>
                                <td>Phonepe</td>
                                <td>XXXXXXXX5458@ybl</td>
                                <td>India</td>
                                <td>30 May 15:13:50</td>
                                <td>-</td>
                                <td><button class="btn-info reset-btn">Reset</button></td>
                            </tr>
                            <tr>
                                <td><label for="" class="approved">Approved</label></td>
                                <td>6205847732</td>
                                <td>Kapil Goyal</td>
                                <td>Paytm</td>
                                <td>XXXXXXXX5458@paytm</td>
                                <td>India</td>
                                <td>30 May 15:13:50</td>
                                <td>-</td>
                                <td><button class="btn-info reset-btn">Reset</button></td>
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