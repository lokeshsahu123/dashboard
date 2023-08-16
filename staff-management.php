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
                    <div class="bank-details row d-flex align-items-baseline">
                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                            <h1 class="title_h1 same_heading">Staff Management</h1>
                        </div>
                        <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12 p-0">
                            <ul type="none" class="d-flex align-items-center p-0">
                                <li>
                                    <a href="#" class="nav-link"><button class="btn" data-bs-toggle="modal"
                                            data-bs-target="#AddstaffModal"><i class="fa-solid fa-circle-plus"></i>
                                            Add Staff</button></a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link">
                                        <i class="fa fa-check-circle" style="color: #06c746;"></i>
                                        Active
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-lg-2 px-1">
                                        <i class="fa-solid fa-ban fa-rotate-90" style="color: #d60000;"></i>
                                        Inactive
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link">
                                        <i class="fa-sharp fa-solid fa-trash" style="color: #1c1579;"></i>
                                        Delete
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 px-1 px-lg-2">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Search Exact" aria-label="Username"
                                    aria-describedby="basic-addon1" style="height: 32px;">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1" style="padding: 8px;"><i
                                            class="fa-solid fa-magnifying-glass"></i></span>
                                </div>
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
                                <th><input type="checkbox" name="" id=""></th>
                                <th></th>
                                <th>User Name</th>
                                <th>Client Name</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="odd" role="row">
                                <td><input type="checkbox" name="" id=""></td>
                                <td><i class="fa fa-check-circle"></i></td>
                                <td>9937794250</td>
                                <td>Zerina Thomson</td>
                                <td>winbig</td>
                                <td></td>
                                <td>Customer Executive</td>
                                <td>
                                    <i class="fa fa-key"></i>
                                </td>
                            </tr>
                            <tr class="even" role="row">
                                <td><input type="checkbox" name="" id=""></td>
                                <td><i class="fa fa-check-circle"></i></td>
                                <td>9937794250</td>
                                <td>Zerina Thomson</td>
                                <td>winbig</td>
                                <td></td>
                                <td>Customer Executive</td>
                                <td>
                                    <i class="fa fa-key"></i>
                                </td>
                            </tr>
                            <tr class="odd" role="row">
                                <td><input type="checkbox" name="" id=""></td>
                                <td><i class="fa fa-check-circle"></i></td>
                                <td>9937794250</td>
                                <td>Zerina Thomson</td>
                                <td>winbig</td>
                                <td></td>
                                <td>Customer Executive</td>
                                <td>
                                    <i class="fa fa-key"></i>
                                </td>
                            </tr>
                            <tr class="even" role="row">
                                <td><input type="checkbox" name="" id=""></td>
                                <td><i class="fa fa-check-circle"></i></td>
                                <td>9937794250</td>
                                <td>Zerina Thomson</td>
                                <td>winbig</td>
                                <td></td>
                                <td>Customer Executive</td>
                                <td>
                                    <i class="fa fa-key"></i>
                                </td>
                            </tr>
                            <tr class="odd" role="row">
                                <td><input type="checkbox" name="" id=""></td>
                                <td><i class="fa fa-check-circle"></i></td>
                                <td>9937794250</td>
                                <td>Zerina Thomson</td>
                                <td>winbig</td>
                                <td></td>
                                <td>Customer Executive</td>
                                <td>
                                    <i class="fa fa-key"></i>
                                </td>
                            </tr>
                            <tr class="even" role="row">
                                <td><input type="checkbox" name="" id=""></td>
                                <td><i class="fa fa-check-circle"></i></td>
                                <td>9937794250</td>
                                <td>Zerina Thomson</td>
                                <td>winbig</td>
                                <td></td>
                                <td>Customer Executive</td>
                                <td>
                                    <i class="fa fa-key"></i>
                                </td>
                            </tr>
                            <tr class="odd" role="row">
                                <td><input type="checkbox" name="" id=""></td>
                                <td><i class="fa fa-check-circle"></i></td>
                                <td>9937794250</td>
                                <td>Zerina Thomson</td>
                                <td>winbig</td>
                                <td></td>
                                <td>Customer Executive</td>
                                <td>
                                    <i class="fa fa-key"></i>
                                </td>
                            </tr>
                            <tr class="even" role="row">
                                <td><input type="checkbox" name="" id=""></td>
                                <td><i class="fa fa-check-circle"></i></td>
                                <td>9937794250</td>
                                <td>Zerina Thomson</td>
                                <td>winbig</td>
                                <td></td>
                                <td>Customer Executive</td>
                                <td>
                                    <i class="fa fa-key"></i>
                                </td>
                            </tr>
                            <tr class="odd" role="row">
                                <td><input type="checkbox" name="" id=""></td>
                                <td><i class="fa fa-check-circle"></i></td>
                                <td>9937794250</td>
                                <td>Zerina Thomson</td>
                                <td>winbig</td>
                                <td></td>
                                <td>Customer Executive</td>
                                <td>
                                    <i class="fa fa-key"></i>
                                </td>
                            </tr>
                            <tr class="even" role="row">
                                <td><input type="checkbox" name="" id=""></td>
                                <td><i class="fa fa-check-circle"></i></td>
                                <td>9937794250</td>
                                <td>Zerina Thomson</td>
                                <td>winbig</td>
                                <td></td>
                                <td>Customer Executive</td>
                                <td>
                                    <i class="fa fa-key"></i>
                                </td>
                            </tr>
                            <tr class="odd" role="row">
                                <td><input type="checkbox" name="" id=""></td>
                                <td><i class="fa fa-check-circle"></i></td>
                                <td>9937794250</td>
                                <td>Zerina Thomson</td>
                                <td>winbig</td>
                                <td></td>
                                <td>Customer Executive</td>
                                <td>
                                    <i class="fa fa-key"></i>
                                </td>
                            </tr>
                            <tr class="even" role="row">
                                <td><input type="checkbox" name="" id=""></td>
                                <td><i class="fa fa-check-circle"></i></td>
                                <td>9937794250</td>
                                <td>Zerina Thomson</td>
                                <td>winbig</td>
                                <td></td>
                                <td>Customer Executive</td>
                                <td>
                                    <i class="fa fa-key"></i>
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

    <!-- Modal -->
    <div class="modal fade" id="AddstaffModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Add Staff</h4>
                    <button type="button" class="close-btn" data-bs-dismiss="modal"
                        aria-label="Close"><span>x</span></button>
                </div>
                <div class="modal-body" style="margin: 0 auto;">
                    <form action="" class="modal-add-form">
                        <div class="form-group">
                            <label for="">Select Client<span class="star">*</span></label>
                            <select name="" id="">
                                <option value="" selected>-Select Client-</option>
                                <option value="">1SingalCasino</option>
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
                        <div class="form-group">
                            <label for="">User Name<span class="star">*</span></label>
                            <input type="search" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label for="">First Name</label>
                            <input type="search" placeholder="first name">
                        </div>
                        <div class="form-group">
                            <label for="">Last Name</label>
                            <input type="search" placeholder="last name">
                        </div>
                        <div class="form-group">
                            <label for="">Email<span class="star">*</span></label>
                            <input type="email" placeholder="email">
                        </div>
                        <div class="form-group">
                            <label for="">Password<span class="star">*</span></label>
                            <input type="password" placeholder="password">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn">Save</button>
                    <button type="button" class="btn" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" language="javascript" src="assets/js/jquery.dataTables.min.js"></script>


</body>

</html>