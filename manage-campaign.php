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
                            <h1 class="title_h1 same_heading">Manage Campaign</h1>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-6 col-md-6  col-sm-6 mt-lg-0  mt-md-0 mt-2 col-xs-12 px-1">
                                    <div class="form-group">
                                        <select name="" id="" class="w-100">
                                            <option value="" selected="">All</option>
                                            <option value="">Login</option>
                                            <option value="">Sign Up</option>
                                            <option value="">Deposite</option>
                                            <option value="">Referral</option>
                                            <option value="">Play/Spend/Win</option>
                                            <option value="">Rask Back-Porker</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6  col-sm-6 mt-lg-0  mt-md-0 mt-2 col-xs-12 px-1">
                                    <div class="form-group">
                                        <select name="" id="" class="w-100">
                                            <option value="" selected="">Running</option>
                                            <option value="">Created</option>
                                            <option value="">Expired</option>
                                            <option value="">Inactive</option>
                                            <option value="">Unpublish</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <ul type="none" class="d-flex align-items-center">
                                <a href="#" class="nav-link db-btn">
                                    <li>
                                        <i class="fa-solid fa-circle-plus"></i>
                                        Add Campaign
                                    </li>
                                </a>
                                <a href="#">
                                    <li><button class="btn refresh-btn"><i
                                                class="fa-solid fa-arrows-rotate"></i></button></li>
                                </a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
                <div class="table-player">
                    <table class="table data-table">
                        <thead>
                            <tr>
                                <th>Status</th>
                                <th>Campaign Name</th>
                                <th>Code</th>
                                <th>Category</th>
                                <th>How it will be credited</th>
                                <th>Campaign For</th>
                                <th>Rack Back %</th>
                                <th>Start From</th>
                                <th>Valid till</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="odd" role="row">
                                <td>
                                    <label for="" class="btn btn-success btn-sm">In Progress</label>
                                </td>
                                <td>Refer and Deposit</td>
                                <td></td>
                                <td>Referral</td>
                                <td>Auto credit into wallet</td>
                                <td>-</td>
                                <td>1.10</td>
                                <td>2022-10-31 18:23:00</td>
                                <td>2025-12-31 07:37:00</td>
                                <td class="position-relative dropdowncaret">
                                    <button class="action btn">
                                        <i class="fa-solid fa-caret-down"></i>
                                    </button>
                                    <div class="action-btn" id="manage-dropdown">
                                        <ul type="none">

                                            <a href="#" class="nav-link">
                                                <li><i class="fa-solid fa-circle-play"></i>
                                                    Unpublish
                                                </li>
                                            </a>
                                            <a href="#" class="nav-link">
                                                <li><i class="fa-solid fa-pen-to-square"></i>
                                                    Edit
                                                </li>
                                            </a>
                                            <a href="#" class="nav-link">
                                                <li><i class="fa-solid fa-ban fa-rotate-90"></i>
                                                    Inactive
                                                </li>
                                            </a>
                                            <a href="#" class="nav-link">
                                                <li><i class="fa-solid fa-circle-play"></i>
                                                    Beneficial Report
                                                </li>
                                            </a>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="even" role="row">
                                <td>
                                    <label for="" class="btn btn-success btn-sm">In Progress</label>
                                </td>
                                <td>Refer and Deposit</td>
                                <td></td>
                                <td>Referral</td>
                                <td>Auto credit into wallet</td>
                                <td>-</td>
                                <td>1.10</td>
                                <td>2022-10-31 18:23:00</td>
                                <td>2025-12-31 07:37:00</td>
                                <td class="position-relative dropdowncaret">
                                    <button class="action btn">
                                        <i class="fa-solid fa-caret-down"></i>
                                    </button>
                                    <div class="action-btn" id="manage-dropdown">
                                        <ul type="none">
                                            </a href="#">
                                            <li><i class="fa-solid fa-circle-play"></i>
                                                Unpublish
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-pen-to-square"></i>
                                                Edit
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-ban fa-rotate-90"></i>
                                                Inactive
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-circle-play"></i>
                                                Beneficial Report
                                            </li></a>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="odd" role="row">
                                <td>
                                    <label for="" class="btn btn-success btn-sm">In Progress</label>
                                </td>
                                <td>Refer and Deposit</td>
                                <td></td>
                                <td>Referral</td>
                                <td>Auto credit into wallet</td>
                                <td>-</td>
                                <td>1.10</td>
                                <td>2022-10-31 18:23:00</td>
                                <td>2025-12-31 07:37:00</td>
                                <td class="position-relative dropdowncaret">
                                    <button class="action btn">
                                        <i class="fa-solid fa-caret-down"></i>
                                    </button>
                                    <div class="action-btn" id="manage-dropdown">
                                        <ul type="none">
                                            </a href="#">
                                            <li><i class="fa-solid fa-circle-play"></i>
                                                Unpublish
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-pen-to-square"></i>
                                                Edit
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-ban fa-rotate-90"></i>
                                                Inactive
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-circle-play"></i>
                                                Beneficial Report
                                            </li></a>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="even" role="row">
                                <td>
                                    <label for="" class="btn btn-success btn-sm">In Progress</label>
                                </td>
                                <td>Refer and Deposit</td>
                                <td></td>
                                <td>Referral</td>
                                <td>Auto credit into wallet</td>
                                <td>-</td>
                                <td>1.10</td>
                                <td>2022-10-31 18:23:00</td>
                                <td>2025-12-31 07:37:00</td>
                                <td class="position-relative dropdowncaret">
                                    <button class="action btn">
                                        <i class="fa-solid fa-caret-down"></i>
                                    </button>
                                    <div class="action-btn" id="manage-dropdown">
                                        <ul type="none">
                                            </a href="#">
                                            <li><i class="fa-solid fa-circle-play"></i>
                                                Unpublish
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-pen-to-square"></i>
                                                Edit
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-ban fa-rotate-90"></i>
                                                Inactive
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-circle-play"></i>
                                                Beneficial Report
                                            </li></a>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="odd" role="row">
                                <td>
                                    <label for="" class="btn btn-success btn-sm">In Progress</label>
                                </td>
                                <td>Refer and Deposit</td>
                                <td></td>
                                <td>Referral</td>
                                <td>Auto credit into wallet</td>
                                <td>-</td>
                                <td>1.10</td>
                                <td>2022-10-31 18:23:00</td>
                                <td>2025-12-31 07:37:00</td>
                                <td class="position-relative dropdowncaret">
                                    <button class="action btn">
                                        <i class="fa-solid fa-caret-down"></i>
                                    </button>
                                    <div class="action-btn" id="manage-dropdown">
                                        <ul type="none">
                                            </a href="#">
                                            <li><i class="fa-solid fa-circle-play"></i>
                                                Unpublish
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-pen-to-square"></i>
                                                Edit
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-ban fa-rotate-90"></i>
                                                Inactive
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-circle-play"></i>
                                                Beneficial Report
                                            </li></a>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="even" role="row">
                                <td>
                                    <label for="" class="btn btn-success btn-sm">In Progress</label>
                                </td>
                                <td>Refer and Deposit</td>
                                <td></td>
                                <td>Referral</td>
                                <td>Auto credit into wallet</td>
                                <td>-</td>
                                <td>1.10</td>
                                <td>2022-10-31 18:23:00</td>
                                <td>2025-12-31 07:37:00</td>
                                <td class="position-relative dropdowncaret">
                                    <button class="action btn">
                                        <i class="fa-solid fa-caret-down"></i>
                                    </button>
                                    <div class="action-btn" id="manage-dropdown">
                                        <ul type="none">
                                            </a href="#">
                                            <li><i class="fa-solid fa-circle-play"></i>
                                                Unpublish
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-pen-to-square"></i>
                                                Edit
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-ban fa-rotate-90"></i>
                                                Inactive
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-circle-play"></i>
                                                Beneficial Report
                                            </li></a>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="odd" role="row">
                                <td>
                                    <label for="" class="btn btn-success btn-sm">In Progress</label>
                                </td>
                                <td>Refer and Deposit</td>
                                <td></td>
                                <td>Referral</td>
                                <td>Auto credit into wallet</td>
                                <td>-</td>
                                <td>1.10</td>
                                <td>2022-10-31 18:23:00</td>
                                <td>2025-12-31 07:37:00</td>
                                <td class="position-relative dropdowncaret">
                                    <button class="action btn">
                                        <i class="fa-solid fa-caret-down"></i>
                                    </button>
                                    <div class="action-btn" id="manage-dropdown">
                                        <ul type="none">
                                            </a href="#">
                                            <li><i class="fa-solid fa-circle-play"></i>
                                                Unpublish
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-pen-to-square"></i>
                                                Edit
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-ban fa-rotate-90"></i>
                                                Inactive
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-circle-play"></i>
                                                Beneficial Report
                                            </li></a>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="even" role="row">
                                <td>
                                    <label for="" class="btn btn-success btn-sm">In Progress</label>
                                </td>
                                <td>Refer and Deposit</td>
                                <td></td>
                                <td>Referral</td>
                                <td>Auto credit into wallet</td>
                                <td>-</td>
                                <td>1.10</td>
                                <td>2022-10-31 18:23:00</td>
                                <td>2025-12-31 07:37:00</td>
                                <td class="position-relative dropdowncaret">
                                    <button class="action btn">
                                        <i class="fa-solid fa-caret-down"></i>
                                    </button>
                                    <div class="action-btn" id="manage-dropdown">
                                        <ul type="none">
                                            </a href="#">
                                            <li><i class="fa-solid fa-circle-play"></i>
                                                Unpublish
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-pen-to-square"></i>
                                                Edit
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-ban fa-rotate-90"></i>
                                                Inactive
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-circle-play"></i>
                                                Beneficial Report
                                            </li></a>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="odd" role="row">
                                <td>
                                    <label for="" class="btn btn-success btn-sm">In Progress</label>
                                </td>
                                <td>Refer and Deposit</td>
                                <td></td>
                                <td>Referral</td>
                                <td>Auto credit into wallet</td>
                                <td>-</td>
                                <td>1.10</td>
                                <td>2022-10-31 18:23:00</td>
                                <td>2025-12-31 07:37:00</td>
                                <td class="position-relative dropdowncaret">
                                    <button class="action btn">
                                        <i class="fa-solid fa-caret-down"></i>
                                    </button>
                                    <div class="action-btn" id="manage-dropdown">
                                        <ul type="none">
                                            </a href="#">
                                            <li><i class="fa-solid fa-circle-play"></i>
                                                Unpublish
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-pen-to-square"></i>
                                                Edit
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-ban fa-rotate-90"></i>
                                                Inactive
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-circle-play"></i>
                                                Beneficial Report
                                            </li></a>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="even" role="row">
                                <td>
                                    <label for="" class="btn btn-success btn-sm">In Progress</label>
                                </td>
                                <td>Refer and Deposit</td>
                                <td></td>
                                <td>Referral</td>
                                <td>Auto credit into wallet</td>
                                <td>-</td>
                                <td>1.10</td>
                                <td>2022-10-31 18:23:00</td>
                                <td>2025-12-31 07:37:00</td>
                                <td class="position-relative dropdowncaret">
                                    <button class="action btn">
                                        <i class="fa-solid fa-caret-down"></i>
                                    </button>
                                    <div class="action-btn" id="manage-dropdown">
                                        <ul type="none">
                                            </a href="#">
                                            <li><i class="fa-solid fa-circle-play"></i>
                                                Unpublish
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-pen-to-square"></i>
                                                Edit
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-ban fa-rotate-90"></i>
                                                Inactive
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-circle-play"></i>
                                                Beneficial Report
                                            </li></a>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="odd" role="row">
                                <td>
                                    <label for="" class="btn btn-success btn-sm">In Progress</label>
                                </td>
                                <td>Refer and Deposit</td>
                                <td></td>
                                <td>Referral</td>
                                <td>Auto credit into wallet</td>
                                <td>-</td>
                                <td>1.10</td>
                                <td>2022-10-31 18:23:00</td>
                                <td>2025-12-31 07:37:00</td>
                                <td class="position-relative dropdowncaret">
                                    <button class="action btn">
                                        <i class="fa-solid fa-caret-down"></i>
                                    </button>
                                    <div class="action-btn" id="manage-dropdown">
                                        <ul type="none">
                                            </a href="#">
                                            <li><i class="fa-solid fa-circle-play"></i>
                                                Unpublish
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-pen-to-square"></i>
                                                Edit
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-ban fa-rotate-90"></i>
                                                Inactive
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-circle-play"></i>
                                                Beneficial Report
                                            </li></a>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="even" role="row">
                                <td>
                                    <label for="" class="btn btn-success btn-sm">In Progress</label>
                                </td>
                                <td>Refer and Deposit</td>
                                <td></td>
                                <td>Referral</td>
                                <td>Auto credit into wallet</td>
                                <td>-</td>
                                <td>1.10</td>
                                <td>2022-10-31 18:23:00</td>
                                <td>2025-12-31 07:37:00</td>
                                <td class="position-relative dropdowncaret">
                                    <button class="action btn">
                                        <i class="fa-solid fa-caret-down"></i>
                                    </button>
                                    <div class="action-btn" id="manage-dropdown">
                                        <ul type="none">
                                            </a href="#">
                                            <li><i class="fa-solid fa-circle-play"></i>
                                                Unpublish
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-pen-to-square"></i>
                                                Edit
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-ban fa-rotate-90"></i>
                                                Inactive
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-circle-play"></i>
                                                Beneficial Report
                                            </li></a>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="odd" role="row">
                                <td>
                                    <label for="" class="btn btn-success btn-sm">In Progress</label>
                                </td>
                                <td>Refer and Deposit</td>
                                <td></td>
                                <td>Referral</td>
                                <td>Auto credit into wallet</td>
                                <td>-</td>
                                <td>1.10</td>
                                <td>2022-10-31 18:23:00</td>
                                <td>2025-12-31 07:37:00</td>
                                <td class="position-relative dropdowncaret">
                                    <button class="action btn">
                                        <i class="fa-solid fa-caret-down"></i>
                                    </button>
                                    <div class="action-btn" id="manage-dropdown">
                                        <ul type="none">
                                            </a href="#">
                                            <li><i class="fa-solid fa-circle-play"></i>
                                                Unpublish
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-pen-to-square"></i>
                                                Edit
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-ban fa-rotate-90"></i>
                                                Inactive
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-circle-play"></i>
                                                Beneficial Report
                                            </li></a>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="even" role="row">
                                <td>
                                    <label for="" class="btn btn-success btn-sm">In Progress</label>
                                </td>
                                <td>Refer and Deposit</td>
                                <td></td>
                                <td>Referral</td>
                                <td>Auto credit into wallet</td>
                                <td>-</td>
                                <td>1.10</td>
                                <td>2022-10-31 18:23:00</td>
                                <td>2025-12-31 07:37:00</td>
                                <td class="position-relative dropdowncaret">
                                    <button class="action btn">
                                        <i class="fa-solid fa-caret-down"></i>
                                    </button>
                                    <div class="action-btn" id="manage-dropdown">
                                        <ul type="none">
                                            </a href="#">
                                            <li><i class="fa-solid fa-circle-play"></i>
                                                Unpublish
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-pen-to-square"></i>
                                                Edit
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-ban fa-rotate-90"></i>
                                                Inactive
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-circle-play"></i>
                                                Beneficial Report
                                            </li></a>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="odd" role="row">
                                <td>
                                    <label for="" class="btn btn-success btn-sm">In Progress</label>
                                </td>
                                <td>Refer and Deposit</td>
                                <td></td>
                                <td>Referral</td>
                                <td>Auto credit into wallet</td>
                                <td>-</td>
                                <td>1.10</td>
                                <td>2022-10-31 18:23:00</td>
                                <td>2025-12-31 07:37:00</td>
                                <td class="position-relative dropdowncaret">
                                    <button class="action btn">
                                        <i class="fa-solid fa-caret-down"></i>
                                    </button>
                                    <div class="action-btn" id="manage-dropdown">
                                        <ul type="none">
                                            </a href="#">
                                            <li><i class="fa-solid fa-circle-play"></i>
                                                Unpublish
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-pen-to-square"></i>
                                                Edit
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-ban fa-rotate-90"></i>
                                                Inactive
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-circle-play"></i>
                                                Beneficial Report
                                            </li></a>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="even" role="row">
                                <td>
                                    <label for="" class="btn btn-success btn-sm">In Progress</label>
                                </td>
                                <td>Refer and Deposit</td>
                                <td></td>
                                <td>Referral</td>
                                <td>Auto credit into wallet</td>
                                <td>-</td>
                                <td>1.10</td>
                                <td>2022-10-31 18:23:00</td>
                                <td>2025-12-31 07:37:00</td>
                                <td class="position-relative dropdowncaret">
                                    <button class="action btn">
                                        <i class="fa-solid fa-caret-down"></i>
                                    </button>
                                    <div class="action-btn" id="manage-dropdown">
                                        <ul type="none">
                                            </a href="#">
                                            <li><i class="fa-solid fa-circle-play"></i>
                                                Unpublish
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-pen-to-square"></i>
                                                Edit
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-ban fa-rotate-90"></i>
                                                Inactive
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-circle-play"></i>
                                                Beneficial Report
                                            </li></a>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="odd" role="row">
                                <td>
                                    <label for="" class="btn btn-success btn-sm">In Progress</label>
                                </td>
                                <td>Refer and Deposit</td>
                                <td></td>
                                <td>Referral</td>
                                <td>Auto credit into wallet</td>
                                <td>-</td>
                                <td>1.10</td>
                                <td>2022-10-31 18:23:00</td>
                                <td>2025-12-31 07:37:00</td>
                                <td class="position-relative dropdowncaret">
                                    <button class="action btn">
                                        <i class="fa-solid fa-caret-down"></i>
                                    </button>
                                    <div class="action-btn" id="manage-dropdown">
                                        <ul type="none">
                                            </a href="#">
                                            <li><i class="fa-solid fa-circle-play"></i>
                                                Unpublish
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-pen-to-square"></i>
                                                Edit
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-ban fa-rotate-90"></i>
                                                Inactive
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-circle-play"></i>
                                                Beneficial Report
                                            </li></a>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="even" role="row">
                                <td>
                                    <label for="" class="btn btn-success btn-sm">In Progress</label>
                                </td>
                                <td>Refer and Deposit</td>
                                <td></td>
                                <td>Referral</td>
                                <td>Auto credit into wallet</td>
                                <td>-</td>
                                <td>1.10</td>
                                <td>2022-10-31 18:23:00</td>
                                <td>2025-12-31 07:37:00</td>
                                <td class="position-relative dropdowncaret">
                                    <button class="action btn">
                                        <i class="fa-solid fa-caret-down"></i>
                                    </button>
                                    <div class="action-btn" id="manage-dropdown">
                                        <ul type="none">
                                            </a href="#">
                                            <li><i class="fa-solid fa-circle-play"></i>
                                                Unpublish
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-pen-to-square"></i>
                                                Edit
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-ban fa-rotate-90"></i>
                                                Inactive
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-circle-play"></i>
                                                Beneficial Report
                                            </li></a>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="odd" role="row">
                                <td>
                                    <label for="" class="btn btn-success btn-sm">In Progress</label>
                                </td>
                                <td>Refer and Deposit</td>
                                <td></td>
                                <td>Referral</td>
                                <td>Auto credit into wallet</td>
                                <td>-</td>
                                <td>1.10</td>
                                <td>2022-10-31 18:23:00</td>
                                <td>2025-12-31 07:37:00</td>
                                <td class="position-relative dropdowncaret">
                                    <button class="action btn">
                                        <i class="fa-solid fa-caret-down"></i>
                                    </button>
                                    <div class="action-btn" id="manage-dropdown">
                                        <ul type="none">
                                            </a href="#">
                                            <li><i class="fa-solid fa-circle-play"></i>
                                                Unpublish
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-pen-to-square"></i>
                                                Edit
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-ban fa-rotate-90"></i>
                                                Inactive
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-circle-play"></i>
                                                Beneficial Report
                                            </li></a>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="even" role="row">
                                <td>
                                    <label for="" class="btn btn-success btn-sm">In Progress</label>
                                </td>
                                <td>Refer and Deposit</td>
                                <td></td>
                                <td>Referral</td>
                                <td>Auto credit into wallet</td>
                                <td>-</td>
                                <td>1.10</td>
                                <td>2022-10-31 18:23:00</td>
                                <td>2025-12-31 07:37:00</td>
                                <td class="position-relative dropdowncaret">
                                    <button class="action btn">
                                        <i class="fa-solid fa-caret-down"></i>
                                    </button>
                                    <div class="action-btn" id="manage-dropdown">
                                        <ul type="none">
                                            </a href="#">
                                            <li><i class="fa-solid fa-circle-play"></i>
                                                Unpublish
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-pen-to-square"></i>
                                                Edit
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-ban fa-rotate-90"></i>
                                                Inactive
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-circle-play"></i>
                                                Beneficial Report
                                            </li></a>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="odd" role="row">
                                <td>
                                    <label for="" class="btn btn-success btn-sm">In Progress</label>
                                </td>
                                <td>Refer and Deposit</td>
                                <td></td>
                                <td>Referral</td>
                                <td>Auto credit into wallet</td>
                                <td>-</td>
                                <td>1.10</td>
                                <td>2022-10-31 18:23:00</td>
                                <td>2025-12-31 07:37:00</td>
                                <td class="position-relative dropdowncaret">
                                    <button class="action btn">
                                        <i class="fa-solid fa-caret-down"></i>
                                    </button>
                                    <div class="action-btn" id="manage-dropdown">
                                        <ul type="none">
                                            </a href="#">
                                            <li><i class="fa-solid fa-circle-play"></i>
                                                Unpublish
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-pen-to-square"></i>
                                                Edit
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-ban fa-rotate-90"></i>
                                                Inactive
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-circle-play"></i>
                                                Beneficial Report
                                            </li></a>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="even" role="row">
                                <td>
                                    <label for="" class="btn btn-success btn-sm">In Progress</label>
                                </td>
                                <td>Refer and Deposit</td>
                                <td></td>
                                <td>Referral</td>
                                <td>Auto credit into wallet</td>
                                <td>-</td>
                                <td>1.10</td>
                                <td>2022-10-31 18:23:00</td>
                                <td>2025-12-31 07:37:00</td>
                                <td class="position-relative dropdowncaret">
                                    <button class="action btn">
                                        <i class="fa-solid fa-caret-down"></i>
                                    </button>
                                    <div class="action-btn" id="manage-dropdown">
                                        <ul type="none">
                                            </a href="#">
                                            <li><i class="fa-solid fa-circle-play"></i>
                                                Unpublish
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-pen-to-square"></i>
                                                Edit
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-ban fa-rotate-90"></i>
                                                Inactive
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-circle-play"></i>
                                                Beneficial Report
                                            </li></a>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!------RIGHT SIDE CONTENT END------->
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" language="javascript" src="assets/js/jquery.dataTables.min.js"></script>
</body>

</html>