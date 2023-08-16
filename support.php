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
                    <div class="row bank-details  d-flex align-items-baseline">
                        <div class="col-lg-2 col-12">
                            <h1 class="title_h1 same_heading">Support Details</h1>
                        </div>
                        <div class="col-lg-7 col-md-9 col-12">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-6">
                                    <div class="form-group">
                                        <select name="" id="" class="w-100">
                                            <option value="" selected="">New</option>
                                            <option value="">On Hold</option>
                                            <option value="">Open</option>
                                            <option value="">Escalated</option>
                                            <option value="">Closed</option>
                                            <option value="">All</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-6">
                                    <div class="form-group">
                                        <select name="" id="" class="w-100">
                                            <option value="" selected="">All</option>
                                            <option value="">Today</option>
                                            <option value="">Yesterday</option>
                                            <option value="">Date Range</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-6 mt-lg-0  mt-md-0 mt-2">
                                    <input type="date" class="w-100">
                                </div>
                                <div class="col-lg-3 col-md-3 col-6 mt-lg-0  mt-md-0 mt-2">
                                    <input type="date" class="w-100">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-12 mt-lg-0 mt-md-0 mt-2">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Search Exact" aria-label="Username"
                                    aria-describedby="basic-addon1" style="height: 26px;">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1" style="padding: 5px;"><i
                                            class="fa-solid fa-magnifying-glass"></i></span>
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
                                <th>Ticket Id</th>
                                <th>Ticket Id</th>
                                <th>Ticket Details</th>
                                <th>Last Comment</th>
                                <th>Mobile No.</th>
                                <th>Assign To</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>

                        </thead>
                        <tbody>
                            <tr>
                                <td>1000000389</td>
                                <td>helloword</td>
                                <td> wcawefc </td>
                                <td> here is comment </td>
                                <td>9461236698</td>
                                <td>52casino</td>
                                <td>2020-12-17 14:57:55</td>
                                <td><i class="fa-solid fa-eye"></i></td>
                                <td>New</td>
                                <td class="position-relative dropdowncaret">
                                    <button class="action btn">
                                        <i class="fa-solid fa-caret-down"></i>
                                    </button>
                                    <div class="action-btn" id="manage-dropdown">
                                        <ul type="none">

                                            <a href="#" class="nav-link">
                                                <li>
                                                    <i class="fa-solid fa-earth-asia"></i>
                                                    Update Status
                                                </li>
                                            </a>
                                            <a href="#" class="nav-link">
                                                <li><i class="fa-sharp fa-solid fa-paper-plane"></i>
                                                    Ticket History
                                                </li>
                                            </a>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>1000000389</td>
                                <td>helloword</td>
                                <td> wcawefc </td>
                                <td> here is comment </td>
                                <td>9461236698</td>
                                <td>52casino</td>
                                <td>2020-12-17 14:57:55</td>
                                <td><i class="fa-solid fa-eye"></i></td>
                                <td>New</td>
                                <td class="position-relative dropdowncaret">
                                    <button class="action btn">
                                        <i class="fa-solid fa-caret-down"></i>
                                    </button>
                                    <div class="action-btn" id="manage-dropdown">
                                        <ul type="none">

                                            <a href="#" class="nav-link">
                                                <li>
                                                    <i class="fa-solid fa-earth-asia"></i>
                                                    Update Status
                                                </li>
                                            </a>
                                            <a href="#" class="nav-link">
                                                <li><i class="fa-sharp fa-solid fa-paper-plane"></i>
                                                    Ticket History
                                                </li>
                                            </a>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>1000000389</td>
                                <td>helloword</td>
                                <td> wcawefc </td>
                                <td> here is comment </td>
                                <td>9461236698</td>
                                <td>52casino</td>
                                <td>2020-12-17 14:57:55</td>
                                <td><i class="fa-solid fa-eye"></i></td>
                                <td>New</td>
                                <td class="position-relative dropdowncaret">
                                    <button class="action btn">
                                        <i class="fa-solid fa-caret-down"></i>
                                    </button>
                                    <div class="action-btn" id="manage-dropdown">
                                        <ul type="none">

                                            <a href="#" class="nav-link">
                                                <li>
                                                    <i class="fa-solid fa-earth-asia"></i>
                                                    Update Status
                                                </li>
                                            </a>
                                            <a href="#" class="nav-link">
                                                <li><i class="fa-sharp fa-solid fa-paper-plane"></i>
                                                    Ticket History
                                                </li>
                                            </a>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>1000000389</td>
                                <td>helloword</td>
                                <td> wcawefc </td>
                                <td> here is comment </td>
                                <td>9461236698</td>
                                <td>52casino</td>
                                <td>2020-12-17 14:57:55</td>
                                <td><i class="fa-solid fa-eye"></i></td>
                                <td>New</td>
                                <td class="position-relative dropdowncaret">
                                    <button class="action btn">
                                        <i class="fa-solid fa-caret-down"></i>
                                    </button>
                                    <div class="action-btn" id="manage-dropdown">
                                        <ul type="none">

                                            <a href="#" class="nav-link">
                                                <li>
                                                    <i class="fa-solid fa-earth-asia"></i>
                                                    Update Status
                                                </li>
                                            </a>
                                            <a href="#" class="nav-link">
                                                <li><i class="fa-sharp fa-solid fa-paper-plane"></i>
                                                    Ticket History
                                                </li>
                                            </a>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>1000000389</td>
                                <td>helloword</td>
                                <td> wcawefc </td>
                                <td> here is comment </td>
                                <td>9461236698</td>
                                <td>52casino</td>
                                <td>2020-12-17 14:57:55</td>
                                <td><i class="fa-solid fa-eye"></i></td>
                                <td>New</td>
                                <td class="position-relative dropdowncaret">
                                    <button class="action btn">
                                        <i class="fa-solid fa-caret-down"></i>
                                    </button>
                                    <div class="action-btn" id="manage-dropdown">
                                        <ul type="none">

                                            <a href="#" class="nav-link">
                                                <li>
                                                    <i class="fa-solid fa-earth-asia"></i>
                                                    Update Status
                                                </li>
                                            </a>
                                            <a href="#" class="nav-link">
                                                <li><i class="fa-sharp fa-solid fa-paper-plane"></i>
                                                    Ticket History
                                                </li>
                                            </a>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>1000000389</td>
                                <td>helloword</td>
                                <td> wcawefc </td>
                                <td> here is comment </td>
                                <td>9461236698</td>
                                <td>52casino</td>
                                <td>2020-12-17 14:57:55</td>
                                <td><i class="fa-solid fa-eye"></i></td>
                                <td>New</td>
                                <td class="position-relative dropdowncaret">
                                    <button class="action btn">
                                        <i class="fa-solid fa-caret-down"></i>
                                    </button>
                                    <div class="action-btn" id="manage-dropdown">
                                        <ul type="none">

                                            <a href="#" class="nav-link">
                                                <li>
                                                    <i class="fa-solid fa-earth-asia"></i>
                                                    Update Status
                                                </li>
                                            </a>
                                            <a href="#" class="nav-link">
                                                <li><i class="fa-sharp fa-solid fa-paper-plane"></i>
                                                    Ticket History
                                                </li>
                                            </a>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>1000000389</td>
                                <td>helloword</td>
                                <td> wcawefc </td>
                                <td> here is comment </td>
                                <td>9461236698</td>
                                <td>52casino</td>
                                <td>2020-12-17 14:57:55</td>
                                <td><i class="fa-solid fa-eye"></i></td>
                                <td>New</td>
                                <td class="position-relative dropdowncaret">
                                    <button class="action btn">
                                        <i class="fa-solid fa-caret-down"></i>
                                    </button>
                                    <div class="action-btn" id="manage-dropdown">
                                        <ul type="none">

                                            <a href="#" class="nav-link">
                                                <li>
                                                    <i class="fa-solid fa-earth-asia"></i>
                                                    Update Status
                                                </li>
                                            </a>
                                            <a href="#" class="nav-link">
                                                <li><i class="fa-sharp fa-solid fa-paper-plane"></i>
                                                    Ticket History
                                                </li>
                                            </a>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>1000000389</td>
                                <td>helloword</td>
                                <td> wcawefc </td>
                                <td> here is comment </td>
                                <td>9461236698</td>
                                <td>52casino</td>
                                <td>2020-12-17 14:57:55</td>
                                <td><i class="fa-solid fa-eye"></i></td>
                                <td>New</td>
                                <td class="position-relative dropdowncaret">
                                    <button class="action btn">
                                        <i class="fa-solid fa-caret-down"></i>
                                    </button>
                                    <div class="action-btn" id="manage-dropdown">
                                        <ul type="none">

                                            <a href="#" class="nav-link">
                                                <li>
                                                    <i class="fa-solid fa-earth-asia"></i>
                                                    Update Status
                                                </li>
                                            </a>
                                            <a href="#" class="nav-link">
                                                <li><i class="fa-sharp fa-solid fa-paper-plane"></i>
                                                    Ticket History
                                                </li>
                                            </a>
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
    <script src="assets/js/jquery.dataTables.min.js"></script>
</body>

</html>