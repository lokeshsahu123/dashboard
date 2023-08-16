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
                        <div class="col-md-4">
                            <h1 class="gamehistoryheading title_h1 same_heading">Withdraw Request</h1>
                        </div>
                        <div class="col-md-8">
                            <div class="row user-select">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select name="" id="" class="w-100">
                                            <option value="" selected="">Pending</option>
                                            <option value="">All</option>
                                            <option value="">Approved</option>
                                            <option value="">Rejected</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
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
                                <div class="col-md-4 form-group mt-3 mt-md-0">
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
        </div>
        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
            <div class="table-player  affiliate-list">
                <table class="table data-table">
                    <thead>
                        <tr>
                            <th>Status</th>
                            <th>Request On</th>
                            <th>Player ID</th>
                            <th>Wallet balance</th>
                            <th>Amount</th>
                            <th>Pay Method</th>
                            <th>Linked Account</th>
                            <th>Action</th>
                        </tr>

                    </thead>
                    <tbody>
                        <tr>
                            <td>-</td>
                            <td>30 May 15:13:50</td>
                            <td>one100</td>
                            <td>514712.00</td>
                            <td>20.00</td>
                            <td>Bank Transfer</td>
                            <td>987656798@upi</td>
                            <td><label for="" class="approved" id="auto-approved" data-bs-toggle="modal"
                                    data-bs-target="#addbtnmodal">Pending</label></td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!------RIGHT SIDE CONTENT END------->
    </div>
    <!-- Modal -->
    <div class="modal fade add-btn-modal" id="addbtnmodal" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content manual_width " style="border-radius: 0;">
                <div class="modal-header p-2" style="background:#eceff4 !important">
                    <h5 class="modal-title">Withdrawal Request</h5>
                    <button class="close-btn" type="button" data-bs-dismiss="modal"
                        aria-label="Close"><span>x</span></button>
                </div>
                <div class="modal-body container">
                    <div class="row">
                        <div class="col-md-3 pay_list">
                            <ul type="none" class="p-0">
                                <li><img src="assets/img/payumoney.png" alt="">
                                    <input type="checkbox">
                                </li>
                                <li><img src="assets/img/paypal.png" alt="">
                                    <input type="checkbox">
                                </li>
                                <li><img src="assets/img/PhonePe.png" alt="">
                                    <input type="checkbox">
                                </li>
                                <li><img src="assets/img/airtel_logo.png" alt="">
                                    <input type="checkbox">
                                </li>
                                <li><img src="assets/img/grameen.png" alt="">
                                    <input type="checkbox">
                                </li>
                                <li><img src="assets/img/teletalk.png" alt="">
                                    <input type="checkbox">
                                </li>
                                <li><img src="assets/img/payumoney.png" alt="">
                                    <input type="checkbox">
                                </li>
                                <li><img src="assets/img/paypal.png" alt="">
                                    <input type="checkbox">
                                </li>
                                <li><img src="assets/img/PhonePe.png" alt="">
                                    <input type="checkbox">
                                </li>
                                <li><img src="assets/img/airtel_logo.png" alt="">
                                    <input type="checkbox">
                                </li>
                                <li><img src="assets/img/grameen.png" alt="">
                                    <input type="checkbox">
                                </li>
                                <li><img src="assets/img/teletalk.png" alt="">
                                    <input type="checkbox">
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4 user_ac_list">
                            <ul type="none" class="p-0">
                                <li>
                                    Request Id:
                                    <span>7588065581012579</span>
                                </li>
                                <li>Last Remark:</li>
                                <li>KYC Status:
                                    <i class="fa-solid fa-circle-xmark fa-xl" style="color: #df0c0c;"></i>
                                </li>
                                <li>
                                    Bank Status:
                                    <i class="fa-solid fa-circle-check  fa-xl" style="color: #00d123;"></i>
                                </li>
                                <li>Holder Name:</li>
                                <li>Bank Name:</li>
                                <li>
                                    Account No:
                                    <span> 6377825801
                                    </span>
                                </li>
                                <li>IFSC Code:</li>
                                <li>Linked Account:
                                    <span>6377825801@alx</span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-5 use-info-list" id="">
                            <ul type="none" class="p-0">
                                <li>
                                    Balance:
                                    <span>517227</span>
                                </li>
                                <li>Requested Amount:
                                    <span> 20.00 (+0.00 TDS)</span>
                                </li>
                                <li>Requested On:
                                    <span>30 May 15:13:50</span>
                                </li>
                                <li>
                                    Requested By:
                                    <span>Kapil Goyal</span>
                                </li>
                                <li>Approved Amount:
                                    <input type="text">
                                </li>
                                <li>
                                    <p>Remark <span class="star">*</span></p>
                                    <textarea name="" id="" cols="22" rows="2"></textarea>
                                </li>
                                <li class="b_btn">
                                    <button type="button" class="btn btn-success">Approve</button>
                                    <button type="button" class="btn btn-danger">Reject</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END -->

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
</body>

</html>