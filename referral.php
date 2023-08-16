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
                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                            <h1 class="title_h1 same_heading">Promotion Level Setting</h1>
                        </div>
                        <div class="col-lg-6"></div>
                        <div class="col-lg-2">
                            <a href="#" class="nav-link db-btn">
                                <i class="fa-solid fa-circle-plus"></i>
                                Add Level
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="DataTables_Table_0_wrapper " class="dataTables_wrapper no-footer">
                <div class="manage_club">
                    <div class="manage-club-inside px-2 row">
                        <div class="col-12 pb-3"
                            style="display: flex;justify-content: space-between; align-items: baseline">
                            <h5>Level 1</h5>
                            <a href="#"><i class="fa-solid fa-trash"></i></a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group row">
                                <div class="col-6">
                                    <label>Signup Commission <span class="star">*</span></label>
                                </div>
                                <div class="col-6">
                                    <input type="text" maxlength="9" value="10" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group row">
                                <div class="col-6">
                                    <label>Max Reward invites<span class="star">*</span></label>
                                </div>
                                <div class="col-6">
                                    <input type="text" maxlength="9" value="10" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group row">
                                <div class="col-6">
                                    <label>Deposit Direct Invite Commission <span class="star">*</span></label>
                                </div>
                                <div class="col-6">
                                    <input type="text" maxlength="9" value="10" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group row">
                                <div class="col-6">
                                    <label>Deposit Indirect Invite Commission<span class="star">*</span></label>
                                </div>
                                <div class="col-6">
                                    <input type="text" maxlength="9" value="10" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group row">
                                <div class="col-6">
                                    <label>Spending Direct Invite Commission <span class="star">*</span></label>
                                </div>
                                <div class="col-6">
                                    <input type="text" maxlength="9" value="0" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group row">
                                <div class="col-6">
                                    <label>Spending Indirect Invite Commission <span class="star">*</span></label>
                                </div>
                                <div class="col-6">
                                    <input type="text" maxlength="9" value="1" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group row">
                                <div class="col-6">
                                    <label>No Of Times <span class="star">*</span></label>
                                </div>
                                <div class="col-6">
                                    <select name="" id="">
                                        <option value="">First Time</option>
                                        <option value="">Unlimited</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group row">
                                <div class="col-6">
                                    <label>Minimum claimable <span class="star">*</span></label>
                                </div>
                                <div class="col-6">
                                    <input type="text" maxlength="9" value="4" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group row">
                                <div class="col-6">
                                    <label>Total Deposit amount for Upgrade <span class="star">*</span></label>
                                </div>
                                <div class="col-6">
                                    <input type="text" maxlength="9" value="4" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group row">
                                <div class="col-6">
                                    <label>Minimum Reffered user for deposit <span class="star">*</span></label>
                                </div>
                                <div class="col-6">
                                    <input type="text" maxlength="9" value="4" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group row">
                                <div class="col-6">
                                    <label>Level Upgrade Bonus
                                        <span class="star">*</span></label>
                                </div>
                                <div class="col-6">
                                    <input type="text" maxlength="9" value="4" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="manage-club-inside px-2 row">
                        <div class="col-12 pb-3"
                            style="display: flex;justify-content: space-between; align-items: baseline">
                            <h5>Level 2</h5>
                            <a href="#"><i class="fa-solid fa-trash"></i></a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group row">
                                <div class="col-6">
                                    <label>Signup Commission <span class="star">*</span></label>
                                </div>
                                <div class="col-6">
                                    <input type="text" maxlength="9" value="10" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group row">
                                <div class="col-6">
                                    <label>Max Reward invites<span class="star">*</span></label>
                                </div>
                                <div class="col-6">
                                    <input type="text" maxlength="9" value="10" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group row">
                                <div class="col-6">
                                    <label>Deposit Direct Invite Commission <span class="star">*</span></label>
                                </div>
                                <div class="col-6">
                                    <input type="text" maxlength="9" value="10" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group row">
                                <div class="col-6">
                                    <label>Deposit Indirect Invite Commission<span class="star">*</span></label>
                                </div>
                                <div class="col-6">
                                    <input type="text" maxlength="9" value="10" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group row">
                                <div class="col-6">
                                    <label>Spending Direct Invite Commission <span class="star">*</span></label>
                                </div>
                                <div class="col-6">
                                    <input type="text" maxlength="9" value="0" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group row">
                                <div class="col-6">
                                    <label>Spending Indirect Invite Commission <span class="star">*</span></label>
                                </div>
                                <div class="col-6">
                                    <input type="text" maxlength="9" value="1" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group row">
                                <div class="col-6">
                                    <label>No Of Times <span class="star">*</span></label>
                                </div>
                                <div class="col-6">
                                    <select name="" id="">
                                        <option value="">First Time</option>
                                        <option value="">Unlimited</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group row">
                                <div class="col-6">
                                    <label>Minimum claimable <span class="star">*</span></label>
                                </div>
                                <div class="col-6">
                                    <input type="text" maxlength="9" value="4" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group row">
                                <div class="col-6">
                                    <label>Total Deposit amount for Upgrade <span class="star">*</span></label>
                                </div>
                                <div class="col-6">
                                    <input type="text" maxlength="9" value="4" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group row">
                                <div class="col-6">
                                    <label>Minimum Reffered user for deposit <span class="star">*</span></label>
                                </div>
                                <div class="col-6">
                                    <input type="text" maxlength="9" value="4" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group row">
                                <div class="col-6">
                                    <label>Level Upgrade Bonus
                                        <span class="star">*</span></label>
                                </div>
                                <div class="col-6">
                                    <input type="text" maxlength="9" value="4" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 text-end">
                        <a href="#" id="excel"><button class="btn btn-secondary px-5">Save</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!------RIGHT SIDE CONTENT END------->
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
</body>

</html>