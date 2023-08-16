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
                            <h1 class="title_h1 same_heading">Role Management</h1>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 px-1 px-lg-2">
                            <div class="form-group">
                                <select name="" id="" class="w-100">
                                    <option value="" selected>Agent</option>
                                    <option value="">City Agent</option>
                                    <option value="">Client</option>
                                    <option value="">Customer Executive</option>
                                    <option value="">Executive</option>
                                    <option value="">Operator</option>
                                    <option value="">Player</option>
                                    <option value="">Player and AI</option>
                                    <option value="">Sports Admin</option>
                                    <option value="">State Agent</option>
                                    <option value="">Subadmin</option>
                                    <option value="">Super Agent</option>
                                </select>
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
                                <th style="vertical-align: baseline;">Module / Action</th>
                                <th style="vertical-align: baseline;">Module name</th>
                                <th>View/Report<br>
                                    <input type="checkbox">
                                </th>
                                <th>Add/Edit<br>
                                    <input type="checkbox">
                                </th>
                                <th>Active/Inactive<br>
                                    <input type="checkbox">
                                </th>
                                <th>Delete<br>
                                    <input type="checkbox">
                                </th>
                                <th>Send Out<br>
                                    <input type="checkbox">
                                </th>
                                <th>Claim Back<br>
                                    <input type="checkbox">
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="odd" role="row">
                                <td rowspan="6">Affiliate Management</td>
                                <td>Agent</td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                                <td>
                                    <input type="checkbox">
                                </td>
                            </tr>
                            <tr class="even" role="row">
                                <td>Manage Affiliate</td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                                <td>
                                    <input type="checkbox">
                                </td>
                            </tr>
                            <tr class="odd" role="row">
                                <td>Affiliate Commission Log</td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                                <td>
                                    <input type="checkbox">
                                </td>
                            </tr>
                            <tr class="even" role="row">
                                <td>Day Game Session</td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                                <td>
                                    <input type="checkbox">
                                </td>
                            </tr>
                            <tr class="odd" role="row">
                                <td>Affiliate Commission Log</td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                                <td>
                                    <input type="checkbox">
                                </td>
                            </tr>
                            <tr class="even" role="row">
                                <td>Day Game Session</td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                                <td>
                                    <input type="checkbox">
                                </td>
                            </tr>
                            <tr class="odd" role="row">
                                <td rowspan="6">Analytics</td>
                                <td>Affiliate Commission Log</td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                                <td>
                                    <input type="checkbox">
                                </td>
                            </tr>
                            <tr class="even" role="row">
                                <td>Client Status Log</td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                                <td>
                                    <input type="checkbox">
                                </td>
                            </tr>
                            <tr class="odd" role="row">
                                <td>Device Log</td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                                <td>
                                    <input type="checkbox">
                                </td>
                            </tr>
                            <tr class="even" role="row">
                                <td>Jackpot Summary</td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                                <td>
                                    <input type="checkbox">
                                </td>
                            </tr>
                            <tr class="odd" role="row">
                                <td>Affiliate Commission Log</td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                                <td>
                                    <input type="checkbox">
                                </td>
                            </tr>
                            <tr class="even" role="row">
                                <td>Day Game Session</td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                                <td><input type="checkbox"></td>
                                <td>
                                    <input type="checkbox">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!------RIGHT SIDE CONTENT END------->
    </div>

    <!-----ADD-STAFF----->
    <!-- Button trigger modal -->



    <script src="assets/bootstrap/js/bootstrap.min.js"></script>


</body>

</html>