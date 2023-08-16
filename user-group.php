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
                    <div class="game_history_table row">
                        <div class="col-4 no-paddings">
                            <h1 class=" heading_summary gamehistoryheading" style="width: unset;">
                                Group Management <small style="color:#fff;">
                                    List Player </small>
                            </h1>
                        </div>
                        <div class="col-8 text-end">
                            <a href="#" class="nav-link db-btn" data-bs-toggle="modal" data-bs-target="#addbtnmodal">
                                <i class="fa-solid fa-circle-plus"></i>
                                Add Group
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
                <div class="table-player">
                    <table class="table data-table">
                        <thead>
                            <tr>

                                <th>Created On</th>
                                <th>Group Name</th>
                                <th>No of users</th>
                                <th>Modified on</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>30 May 15:13:50</td>
                                <td>td_log1</td>
                                <td>10</td>
                                <td>30 May'23</td>
                                <td class="position-relative dropdowncaret  p-0">
                                    <button class="action btn">
                                        <i class="fa-solid fa-caret-down"></i>
                                    </button>
                                    <div class="action-btn" id="manage-dropdown">
                                        <ul type="none" style="width: 100px;">
                                            <a href="#" class="nav-link">
                                                <li data-bs-toggle="modal" data-bs-target="#edit-btn-modal"><i
                                                        class="fa-solid fa-pen-to-square"></i> Edit</li>
                                            </a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-arrows-rotate"></i>
                                                Refresh
                                            </li></a>
                                            </a href="#">
                                            <li>
                                                <i class="fa-solid fa-trash"></i>
                                                Delete
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-download"></i>
                                                Download
                                            </li></a>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>30 May 15:13:50</td>
                                <td>td_log1</td>
                                <td>10</td>
                                <td>30 May'23</td>
                                <td class="position-relative dropdowncaret  p-0">
                                    <button class="action btn">
                                        <i class="fa-solid fa-caret-down"></i>
                                    </button>
                                    <div class="action-btn" id="manage-dropdown">
                                        <ul type="none" style="width: 100px;">
                                            <a href="#" class="nav-link">
                                                <li data-bs-toggle="modal" data-bs-target="#edit-btn-modal"><i
                                                        class="fa-solid fa-pen-to-square"></i> Edit</li>
                                            </a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-arrows-rotate"></i>
                                                Refresh
                                            </li></a>
                                            </a href="#">
                                            <li>
                                                <i class="fa-solid fa-trash"></i>
                                                Delete
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-download"></i>
                                                Download
                                            </li></a>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>30 May 15:13:50</td>
                                <td>td_log1</td>
                                <td>10</td>
                                <td>30 May'23</td>
                                <td class="position-relative dropdowncaret  p-0">
                                    <button class="action btn">
                                        <i class="fa-solid fa-caret-down"></i>
                                    </button>
                                    <div class="action-btn" id="manage-dropdown">
                                        <ul type="none" style="width: 100px;">
                                            <a href="#" class="nav-link">
                                                <li data-bs-toggle="modal" data-bs-target="#edit-btn-modal"><i
                                                        class="fa-solid fa-pen-to-square"></i> Edit</li>
                                            </a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-arrows-rotate"></i>
                                                Refresh
                                            </li></a>
                                            </a href="#">
                                            <li>
                                                <i class="fa-solid fa-trash"></i>
                                                Delete
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-download"></i>
                                                Download
                                            </li></a>
                                        </ul>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>30 May 15:13:50</td>
                                <td>td_log1</td>
                                <td>10</td>
                                <td>30 May'23</td>
                                <td class="position-relative dropdowncaret  p-0">
                                    <button class="action btn">
                                        <i class="fa-solid fa-caret-down"></i>
                                    </button>
                                    <div class="action-btn" id="manage-dropdown">
                                        <ul type="none" style="width: 100px;">
                                            <a href="#" class="nav-link">
                                                <li data-bs-toggle="modal" data-bs-target="#edit-btn-modal"><i
                                                        class="fa-solid fa-pen-to-square"></i> Edit</li>
                                            </a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-arrows-rotate"></i>
                                                Refresh
                                            </li></a>
                                            </a href="#">
                                            <li>
                                                <i class="fa-solid fa-trash"></i>
                                                Delete
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-download"></i>
                                                Download
                                            </li></a>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>30 May 15:13:50</td>
                                <td>td_log1</td>
                                <td>10</td>
                                <td>30 May'23</td>
                                <td class="position-relative dropdowncaret  p-0">
                                    <button class="action btn">
                                        <i class="fa-solid fa-caret-down"></i>
                                    </button>
                                    <div class="action-btn" id="manage-dropdown">
                                        <ul type="none" style="width: 100px;">
                                            <a href="#" class="nav-link">
                                                <li data-bs-toggle="modal" data-bs-target="#edit-btn-modal"><i
                                                        class="fa-solid fa-pen-to-square"></i> Edit</li>
                                            </a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-arrows-rotate"></i>
                                                Refresh
                                            </li></a>
                                            </a href="#">
                                            <li>
                                                <i class="fa-solid fa-trash"></i>
                                                Delete
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-download"></i>
                                                Download
                                            </li></a>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>30 May 15:13:50</td>
                                <td>td_log1</td>
                                <td>10</td>
                                <td>30 May'23</td>
                                <td class="position-relative dropdowncaret  p-0">
                                    <button class="action btn">
                                        <i class="fa-solid fa-caret-down"></i>
                                    </button>
                                    <div class="action-btn" id="manage-dropdown">
                                        <ul type="none" style="width: 100px;">
                                            <a href="#" class="nav-link">
                                                <li data-bs-toggle="modal" data-bs-target="#edit-btn-modal"><i
                                                        class="fa-solid fa-pen-to-square"></i> Edit</li>
                                            </a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-arrows-rotate"></i>
                                                Refresh
                                            </li></a>
                                            </a href="#">
                                            <li>
                                                <i class="fa-solid fa-trash"></i>
                                                Delete
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-download"></i>
                                                Download
                                            </li></a>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>30 May 15:13:50</td>
                                <td>td_log1</td>
                                <td>10</td>
                                <td>30 May'23</td>
                                <td class="position-relative dropdowncaret  p-0">
                                    <button class="action btn">
                                        <i class="fa-solid fa-caret-down"></i>
                                    </button>
                                    <div class="action-btn" id="manage-dropdown">
                                        <ul type="none" style="width: 100px;">
                                            <a href="#" class="nav-link">
                                                <li data-bs-toggle="modal" data-bs-target="#edit-btn-modal"><i
                                                        class="fa-solid fa-pen-to-square"></i> Edit</li>
                                            </a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-arrows-rotate"></i>
                                                Refresh
                                            </li></a>
                                            </a href="#">
                                            <li>
                                                <i class="fa-solid fa-trash"></i>
                                                Delete
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-download"></i>
                                                Download
                                            </li></a>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>30 May 15:13:50</td>
                                <td>td_log1</td>
                                <td>10</td>
                                <td>30 May'23</td>
                                <td class="position-relative dropdowncaret  p-0">
                                    <button class="action btn">
                                        <i class="fa-solid fa-caret-down"></i>
                                    </button>
                                    <div class="action-btn" id="manage-dropdown">
                                        <ul type="none" style="width: 100px;">
                                            <a href="#" class="nav-link">
                                                <li data-bs-toggle="modal" data-bs-target="#edit-btn-modal"><i
                                                        class="fa-solid fa-pen-to-square"></i> Edit</li>
                                            </a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-arrows-rotate"></i>
                                                Refresh
                                            </li></a>
                                            </a href="#">
                                            <li>
                                                <i class="fa-solid fa-trash"></i>
                                                Delete
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-download"></i>
                                                Download
                                            </li></a>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>30 May 15:13:50</td>
                                <td>td_log1</td>
                                <td>10</td>
                                <td>30 May'23</td>
                                <td class="position-relative dropdowncaret  p-0">
                                    <button class="action btn">
                                        <i class="fa-solid fa-caret-down"></i>
                                    </button>
                                    <div class="action-btn" id="manage-dropdown">
                                        <ul type="none" style="width: 100px;">
                                            <a href="#" class="nav-link">
                                                <li data-bs-toggle="modal" data-bs-target="#edit-btn-modal"><i
                                                        class="fa-solid fa-pen-to-square"></i> Edit</li>
                                            </a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-arrows-rotate"></i>
                                                Refresh
                                            </li></a>
                                            </a href="#">
                                            <li>
                                                <i class="fa-solid fa-trash"></i>
                                                Delete
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-download"></i>
                                                Download
                                            </li></a>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>30 May 15:13:50</td>
                                <td>td_log1</td>
                                <td>10</td>
                                <td>30 May'23</td>
                                <td class="position-relative dropdowncaret  p-0">
                                    <button class="action btn">
                                        <i class="fa-solid fa-caret-down"></i>
                                    </button>
                                    <div class="action-btn" id="manage-dropdown">
                                        <ul type="none" style="width: 100px;">
                                            <a href="#" class="nav-link">
                                                <li data-bs-toggle="modal" data-bs-target="#edit-btn-modal"><i
                                                        class="fa-solid fa-pen-to-square"></i> Edit</li>
                                            </a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-arrows-rotate"></i>
                                                Refresh
                                            </li></a>
                                            </a href="#">
                                            <li>
                                                <i class="fa-solid fa-trash"></i>
                                                Delete
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-download"></i>
                                                Download
                                            </li></a>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>30 May 15:13:50</td>
                                <td>td_log1</td>
                                <td>10</td>
                                <td>30 May'23</td>
                                <td class="position-relative dropdowncaret  p-0">
                                    <button class="action btn">
                                        <i class="fa-solid fa-caret-down"></i>
                                    </button>
                                    <div class="action-btn" id="manage-dropdown">
                                        <ul type="none" style="width: 100px;">
                                            <a href="#" class="nav-link">
                                                <li data-bs-toggle="modal" data-bs-target="#edit-btn-modal"><i
                                                        class="fa-solid fa-pen-to-square"></i> Edit</li>
                                            </a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-arrows-rotate"></i>
                                                Refresh
                                            </li></a>
                                            </a href="#">
                                            <li>
                                                <i class="fa-solid fa-trash"></i>
                                                Delete
                                            </li></a>
                                            </a href="#">
                                            <li><i class="fa-solid fa-download"></i>
                                                Download
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
    <!-- Modal-add-player -->
    <div class="modal fade add-btn-modal" id="addbtnmodal" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content manual_width " style="border-radius: 0;">
                <div class="modal-header p-2" style="background:#eceff4 !important">
                    <h5 class="modal-title">Add Group</h5>
                    <button class="close-btn" type="button" data-bs-dismiss="modal"
                        aria-label="Close"><span>x</span></button>
                </div>
                <div class="modal-body container">
                    <form action="">
                        <div class="p-0 row us_gp">
                            <div class="col-md-6">
                                <input type="checkbox">
                                <label for="">Last Login <span class="star">*</span></label>
                                <select>
                                    <!-- <option value="8" selected="selected">Recent</option> -->
                                    <option name="All" value="">All</option>
                                    <option value="0">Today</option>
                                    <option value="1">Yesterday</option>
                                    <option value="2">Current Week</option>
                                    <option value="3">Last Week</option>
                                    <option value="4">Current Month</option>
                                    <option value="5">Last Month</option>
                                    <option value="6">Last 6 Months</option>
                                    <option value="7">Date Range</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <input type="checkbox">
                                <label for="">Not Login <span class="star">*</span></label>
                                <select>
                                    <!-- <option value="8" selected="selected">Recent</option> -->
                                    <option name="All" value="">All</option>
                                    <option value="0">Today</option>
                                    <option value="1">Yesterday</option>
                                    <option value="2">Current Week</option>
                                    <option value="3">Last Week</option>
                                    <option value="4">Current Month</option>
                                    <option value="5">Last Month</option>
                                    <option value="6">Last 6 Months</option>
                                    <option value="7">Date Range</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <input type="checkbox">
                                <label for="">Sign up <span class="star">*</span></label>
                                <select>
                                    <!-- <option value="8" selected="selected">Recent</option> -->
                                    <option name="All" value="">All</option>
                                    <option value="0">Today</option>
                                    <option value="1">Yesterday</option>
                                    <option value="2">Current Week</option>
                                    <option value="3">Last Week</option>
                                    <option value="4">Current Month</option>
                                    <option value="5">Last Month</option>
                                    <option value="6">Last 6 Months</option>
                                    <option value="7">Date Range</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <input type="checkbox">
                                <label for="">Not Deposited <span class="star">*</span></label>
                                <select>
                                    <!-- <option value="8" selected="selected">Recent</option> -->
                                    <option name="All" value="">All</option>
                                    <option value="0">Today</option>
                                    <option value="1">Yesterday</option>
                                    <option value="2">Current Week</option>
                                    <option value="3">Last Week</option>
                                    <option value="4">Current Month</option>
                                    <option value="5">Last Month</option>
                                    <option value="6">Last 6 Months</option>
                                    <option value="7">Date Range</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <input type="checkbox">
                                <label for="">Number of deposit<span class="star">*</span></label>
                                <select>
                                    <!-- <option value="8" selected="selected">Recent</option> -->
                                    <option name="All" value="">All</option>
                                    <option value="0_10">0 to 10</option>
                                    <option value="10_20">10 to 20</option>
                                    <option value="20_30">20 to 30</option>
                                    <option value="30_40">30 to 40</option>
                                    <option value="40_50">40 to 50</option>
                                    <option value="50_100">50 to 100</option>
                                    <option value="100_200">100 to 200</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <input type="checkbox">
                                <label for="">Last Deposit<span class="star">*</span></label>
                                <select>
                                    <!-- <option value="8" selected="selected">Recent</option> -->
                                    <option name="All" value="">All</option>
                                    <option value="0">Today</option>
                                    <option value="1">Yesterday</option>
                                    <option value="2">Current Week</option>
                                    <option value="3">Last Week</option>
                                    <option value="4">Current Month</option>
                                    <option value="5">Last Month</option>
                                    <option value="6">Last 6 Months</option>
                                    <option value="7">Date Range</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <input type="checkbox">
                                <label for="">Last Game Play</label>
                                <select>
                                    <option name="All" value="">All</option>
                                    <option value="9">Before</option>
                                    <option value="0">Today</option>
                                    <option value="1">Yesterday</option>
                                    <option value="2">Current Week</option>
                                    <option value="3">Last Week</option>
                                    <option value="4">Current Month</option>
                                    <option value="5">Last Month</option>
                                    <option value="6">Last 6 Months</option>
                                    <option value="7">Date Range</option>
                                </select>
                            </div>
                            <div class="col-md-6 d-flex justify-content-between gap-1">
                                <label for="" style="width: 25%;"> Game</label>
                                <select name="" id="">
                                    <option value="">None</option>
                                    <option value="all">ALL</option>
                                    <option value="ludo">Ludo</option>
                                    <option value="rummy">Rummy</option>
                                    <option value="poker">Poker</option>
                                </select>

                                <select name="" id="">
                                    <option value="">Played</option>
                                    <option value="">Not Played</option>
                                </select>

                            </div>
                            <div class="col-md-6">
                                <input type="checkbox">
                                <label for="">Referring player
                                </label>
                                <select>
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                            </div>
                            <div class="col-md-6"></div>
                            <div class="col-md-6">
                                <input type="checkbox">
                                <label for="">Group Name<span class="star">*</span></label>
                                <input type="text" placeholder="Group name">
                            </div>
                            <div class="col-md-6 lc_t">
                                <label for="">User Count : <span>0</span></label>

                                <label>Date: <span>30 May'23</span></label>

                            </div>
                            <div class="col-12 text-center">
                                <a href="#"><button type="submit"
                                        class="btn btn-secondary btn-sm px-4 py-2">Find</button></a>

                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer p-0">
                    <button type="button" class="btn btn-primary">Save</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <!-- END -->
    <!-- Modal-edit-player -->
    <div class="modal fade add-btn-modal" id="edit-btn-modal" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content manual_width " style="border-radius: 0;">
                <div class="modal-header p-2" style="background:#eceff4 !important">
                    <h5 class="modal-title">Edit Group</h5>
                    <button class="close-btn" type="button" data-bs-dismiss="modal"
                        aria-label="Close"><span>x</span></button>
                </div>
                <div class="modal-body container">
                    <form action="">
                        <div class="p-0 row us_gp">
                            <div class="col-md-6">
                                <input type="checkbox">
                                <label for="">Last Login <span class="star">*</span></label>
                                <select>
                                    <!-- <option value="8" selected="selected">Recent</option> -->
                                    <option name="All" value="">All</option>
                                    <option value="0">Today</option>
                                    <option value="1">Yesterday</option>
                                    <option value="2">Current Week</option>
                                    <option value="3">Last Week</option>
                                    <option value="4">Current Month</option>
                                    <option value="5">Last Month</option>
                                    <option value="6">Last 6 Months</option>
                                    <option value="7">Date Range</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <input type="checkbox">
                                <label for="">Not Login <span class="star">*</span></label>
                                <select>
                                    <!-- <option value="8" selected="selected">Recent</option> -->
                                    <option name="All" value="">All</option>
                                    <option value="0">Today</option>
                                    <option value="1">Yesterday</option>
                                    <option value="2">Current Week</option>
                                    <option value="3">Last Week</option>
                                    <option value="4">Current Month</option>
                                    <option value="5">Last Month</option>
                                    <option value="6">Last 6 Months</option>
                                    <option value="7">Date Range</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <input type="checkbox">
                                <label for="">Sign up <span class="star">*</span></label>
                                <select>
                                    <!-- <option value="8" selected="selected">Recent</option> -->
                                    <option name="All" value="">All</option>
                                    <option value="0">Today</option>
                                    <option value="1">Yesterday</option>
                                    <option value="2">Current Week</option>
                                    <option value="3">Last Week</option>
                                    <option value="4">Current Month</option>
                                    <option value="5">Last Month</option>
                                    <option value="6">Last 6 Months</option>
                                    <option value="7">Date Range</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <input type="checkbox">
                                <label for="">Not Deposited <span class="star">*</span></label>
                                <select>
                                    <!-- <option value="8" selected="selected">Recent</option> -->
                                    <option name="All" value="">All</option>
                                    <option value="0">Today</option>
                                    <option value="1">Yesterday</option>
                                    <option value="2">Current Week</option>
                                    <option value="3">Last Week</option>
                                    <option value="4">Current Month</option>
                                    <option value="5">Last Month</option>
                                    <option value="6">Last 6 Months</option>
                                    <option value="7">Date Range</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <input type="checkbox">
                                <label for="">Number of deposit<span class="star">*</span></label>
                                <select>
                                    <!-- <option value="8" selected="selected">Recent</option> -->
                                    <option name="All" value="">All</option>
                                    <option value="0_10">0 to 10</option>
                                    <option value="10_20">10 to 20</option>
                                    <option value="20_30">20 to 30</option>
                                    <option value="30_40">30 to 40</option>
                                    <option value="40_50">40 to 50</option>
                                    <option value="50_100">50 to 100</option>
                                    <option value="100_200">100 to 200</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <input type="checkbox">
                                <label for="">Last Deposit<span class="star">*</span></label>
                                <select>
                                    <!-- <option value="8" selected="selected">Recent</option> -->
                                    <option name="All" value="">All</option>
                                    <option value="0">Today</option>
                                    <option value="1">Yesterday</option>
                                    <option value="2">Current Week</option>
                                    <option value="3">Last Week</option>
                                    <option value="4">Current Month</option>
                                    <option value="5">Last Month</option>
                                    <option value="6">Last 6 Months</option>
                                    <option value="7">Date Range</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <input type="checkbox">
                                <label for="">Last Game Play</label>
                                <select>
                                    <option name="All" value="">All</option>
                                    <option value="9">Before</option>
                                    <option value="0">Today</option>
                                    <option value="1">Yesterday</option>
                                    <option value="2">Current Week</option>
                                    <option value="3">Last Week</option>
                                    <option value="4">Current Month</option>
                                    <option value="5">Last Month</option>
                                    <option value="6">Last 6 Months</option>
                                    <option value="7">Date Range</option>
                                </select>
                            </div>
                            <div class="col-md-6 d-flex justify-content-between gap-1">
                                <label for="" style="width: 25%;"> Game</label>
                                <select name="" id="">
                                    <option value="">None</option>
                                    <option value="all">ALL</option>
                                    <option value="ludo">Ludo</option>
                                    <option value="rummy">Rummy</option>
                                    <option value="poker">Poker</option>
                                </select>

                                <select name="" id="">
                                    <option value="">Played</option>
                                    <option value="">Not Played</option>
                                </select>

                            </div>
                            <div class="col-md-6">
                                <input type="checkbox">
                                <label for="">Referring player
                                </label>
                                <select>
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                            </div>
                            <div class="col-md-6"></div>
                            <div class="col-md-6">
                                <input type="checkbox">
                                <label for="">Group Name<span class="star">*</span></label>
                                <input type="text" placeholder="Group name">
                            </div>
                            <div class="col-md-6 lc_t">
                                <label for="">User Count : <span>0</span></label>

                                <label>Date: <span>30 May'23</span></label>

                            </div>
                            <div class="col-12 text-center">
                                <a href="#"><button type="submit"
                                        class="btn btn-secondary btn-sm px-4 py-2">Find</button></a>

                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer p-0">
                    <button type="button" class="btn btn-primary">Save</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <!-- END -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" language="javascript" src="assets/js/jquery.dataTables.min.js"></script>
</body>

</html>