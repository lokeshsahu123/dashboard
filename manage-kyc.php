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
                            <h1 class="gamehistoryheading title_h1 same_heading">KYC Documents</h1>
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
                <div class="table-player  manage-kyc">
                    <table class="table data-table w-100">
                        <thead>
                            <tr>
                                <th>Status</th>
                                <th>Requested Date</th>
                                <th>Username</th>
                                <th>Document type</th>
                                <th>Name on document</th>
                                <th>Document Number</th>
                                <th>Last Update</th>
                                <th>Updated by</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr role="row">
                                <td><label for="" class="approved">Approved</label></td>
                                <td>30 May 15:13:50</td>
                                <td>rule10</td>
                                <td> AADHAAR Card</td>
                                <td>Kapil</td>
                                <td>**********</td>
                                <td>-</td>
                                <td>-</td>
                                <td data-bs-toggle="modal" data-bs-target="#review"><label for="" id="auto-approved"
                                        style="padding:3px 10px;">Review</label></td>
                            </tr>
                            <tr role="row">
                                <td><label id="auto-approved">Pending</label></td>
                                <td>30 May 15:13:50</td>
                                <td>rule10</td>
                                <td> AADHAAR Card</td>
                                <td>Kapil</td>
                                <td>**********</td>
                                <td>-</td>
                                <td>-</td>
                                <td data-bs-toggle="modal" data-bs-target="#review"><label for="" id="auto-approved"
                                        style="padding:3px 10px;">Review</label></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!------RIGHT SIDE CONTENT END------->
        <!-- Modal -->
        <div class="modal fade add-btn-modal" id="review" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content manual_width " style="border-radius: 0;">
                    <div class="modal-header p-2" style="background:#eceff4 !important">
                        <h5 class="modal-title">KYC Details- Kapil</h5>
                        <button class="close-btn" type="button" data-bs-dismiss="modal"
                            aria-label="Close"><span>x</span></button>
                    </div>
                    <div class="modal-body container" style="background: #a09ec959;
">
                        <div class="row">
                            <div class="col-md-6 docs">
                                <div class="doc-img">
                                    <img src="assets/img/revenue.jpg" alt="">
                                </div>
                                <h4>KYC Details</h4>
                                <div class="doc-details">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <label for="">Document Type:</label>
                                        <span>AADHAAR Card</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <label for="">Name on Doc:</label>
                                        <span>Kapil</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <label for="">Doc No:</label>
                                        <span>1234-5678-9123</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <label for="">Comment:</label>
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 docs">
                                <div class="doc-img">
                                    <img src="assets/img/revenue.jpg" alt="">
                                </div>
                                <h4>Bank Details</h4>
                                <div class="doc-details">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <label for="">A/C holder Name:</label>
                                        <span>Kapil</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <label for="">UPI:<label>
                                                <span>8723123456@ibl</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <label for="">A/C No:</label>
                                        <span>5585253698</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <label for="">IFSC Code:</label>
                                        <span>Punb0014700</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer p-0 justify-content-center" style="background: #eceff4 !important;">
                        <button type="button" class="btn btn-success">Approve</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Rejected</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END -->
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" language="javascript" src="assets/js/jquery.dataTables.min.js"></script>
</body>

</html>