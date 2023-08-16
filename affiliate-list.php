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
                        <div class="col-md-3 col-12">
                            <h1 class="title_h1 same_heading">Manage Affiliates</h1>
                        </div>
                        <div class="col-md-9 col-12">
                            <div class="row">
                                <div class="col-md-3 col-6">
                                    <div class=" form-group">
                                        <select name="" id="" class="w-100">
                                            <option value="" selected="">All</option>
                                            <option value="">Active</option>
                                            <option value="">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="form-group">
                                        <select name="" id="" class="w-100">
                                            <option value="" selected="">All</option>
                                            <option value="">State Agent</option>
                                            <option value="">Master</option>
                                            <option value="">Super Agent</option>
                                            <option value="">Agent</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 mt-2 mt-md-0">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Search for..."
                                            aria-label="Username" aria-describedby="basic-addon1" style="height: 26px;">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text w-100" id="basic-addon1"
                                                style="padding: 5px;"><i
                                                    class="fa-solid fa-magnifying-glass"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 mt-2 mt-md-0 text-end">
                                    <button class="btn add-btn" data-bs-toggle="modal"
                                        data-bs-target="#addbtnmodal"><img src="assets/img/user-plus.png" alt=""
                                            class="img-fluid">Add State Agent</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
                <div class="table-player  affiliate-list p-3">
                    <table class="table data-table mb-0">
                        <thead>
                            <tr>
                                <th scope="col" class="w-25">Affiliate</th>
                                <th scope="col">Type</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Commission</th>
                                <th scope="col">Balance</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="toggelTr plusIcon acc-table">
                                <td scope="row" style="padding-left: 70px;position: absolute;left: 14px;">
                                    <span>Kapil</span>
                                </td>
                                <td><span class="ml-13">State Agent</span></td>
                                <td><span class="ml-13">kapil123@gmail.com</span></td>
                                <td><span class="ml-10">4521784521</span></td>
                                <td><span>10.10</span></td>
                                <td><span>10.10</span></td>
                                <td class="position-relative dropdowncaret  p-0"
                                    style="position: absolute !important;right: 50px;">
                                    <button class="action btn">
                                        <i class="far fa-caret-square-down caret_custom"></i>
                                    </button>
                                    <div class="action-btn top_drop" id="manage-dropdown">
                                        <ul type="none" style="width: 135px;">
                                            <a href="#" class="nav-link">
                                                <li><i class="fa-solid fa-money-bill-transfer"></i> Transaction
                                                </li>
                                            </a>

                                            <li><i class="fa-solid fa-circle-plus"></i>
                                                Add New Master
                                            </li>

                                            <li>
                                                <i class="fa-solid fa-paper-plane"></i>
                                                Send Out
                                            </li>

                                            <li><i class="fa-solid fa-rotate-left"></i>
                                                Claim Back
                                            </li>
                                            <a href="#" class="nav-link">
                                                <li data-bs-toggle="modal" data-bs-target="#edit-btn-modal"><i
                                                        class="fa-solid fa-pen-to-square"></i> Edit </li>
                                            </a>
                                            <li><i class="fa-solid fa-unlock-keyhole"></i>
                                                Change Password
                                            </li>
                                            <li><i class="fa-solid fa-ban fa-rotate-90"></i>
                                                Inactive
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-trash"></i>
                                                Delete
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="toggelTr1 ">
                                <td colspan="7" class="py-0 px-1">
                                    <table class="acc-table">
                                        <thead>
                                            <tr>
                                                <th scope="col" style="width: 25%;">Affiliate</th>
                                                <th scope="col">Type</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Phone</th>
                                                <th scope="col">Commission</th>
                                                <th scope="col">Balance</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tr class="toggelTr11 plusIcon">
                                            <td scope="row" style="padding-left: 70px;position: absolute;left: 14px;">
                                                Sunny</td>
                                            <td>Master Agent</td>
                                            <td>kapil123@gmail.com</td>
                                            <td>4521784521</td>
                                            <td>10.10</td>
                                            <td>10.10</td>
                                            <td class=" position-relative dropdowncaret p-0">
                                                <button class="action btn">
                                                    <i class="far fa-caret-square-down caret_custom"></i>
                                                </button>
                                                <div class="action-btn" id="manage-dropdown">
                                                    <ul type="none" style="width: 135px;">
                                                        <a href="#" class="nav-link">
                                                            <li><i class="fa-solid fa-money-bill-transfer"></i>
                                                                Transaction
                                                            </li>
                                                        </a>

                                                        <li><i class="fa-solid fa-circle-plus"></i>
                                                            Add New Master
                                                        </li>

                                                        <li>
                                                            <i class="fa-solid fa-paper-plane"></i>
                                                            Send Out
                                                        </li>

                                                        <li><i class="fa-solid fa-rotate-left"></i>
                                                            Claim Back
                                                        </li>
                                                        <a href="#" class="nav-link">
                                                            <li data-bs-toggle="modal" data-bs-target="#edit-btn-modal">
                                                                <i class="fa-solid fa-pen-to-square"></i> Edit
                                                            </li>
                                                        </a>
                                                        <li><i class="fa-solid fa-unlock-keyhole"></i>
                                                            Change Password
                                                        </li>
                                                        <li><i class="fa-solid fa-ban fa-rotate-90"></i>
                                                            Inactive
                                                        </li>
                                                        <li>
                                                            <i class="fa-solid fa-trash"></i>
                                                            Delete
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="toggelTr2 plusIcon plusIcon1">
                                            <td scope="row" style="padding-left: 70px;position: absolute;left: 30px;">
                                                Yash</td>
                                            <td>Super Agent</td>
                                            <td>kapil123@gmail.com</td>
                                            <td>4521784521</td>
                                            <td>10.10</td>
                                            <td>10.10</td>
                                            <td class="position-relative dropdowncaret  p-0">
                                                <button class="action btn">
                                                    <i class="far fa-caret-square-down caret_custom"></i>
                                                </button>
                                                <div class="action-btn" id="manage-dropdown">
                                                    <ul type="none" style="width: 135px;">
                                                        <a href="#" class="nav-link">
                                                            <li><i class="fa-solid fa-money-bill-transfer"></i>
                                                                Transaction
                                                            </li>
                                                        </a>

                                                        <li><i class="fa-solid fa-circle-plus"></i>
                                                            Add New Master
                                                        </li>

                                                        <li>
                                                            <i class="fa-solid fa-paper-plane"></i>
                                                            Send Out
                                                        </li>

                                                        <li><i class="fa-solid fa-rotate-left"></i>
                                                            Claim Back
                                                        </li>
                                                        <a href="#" class="nav-link">
                                                            <li data-bs-toggle="modal" data-bs-target="#edit-btn-modal">
                                                                <i class="fa-solid fa-pen-to-square"></i> Edit
                                                            </li>
                                                        </a>
                                                        <li><i class="fa-solid fa-unlock-keyhole"></i>
                                                            Change Password
                                                        </li>
                                                        <li><i class="fa-solid fa-ban fa-rotate-90"></i>
                                                            Inactive
                                                        </li>
                                                        <li>
                                                            <i class="fa-solid fa-trash"></i>
                                                            Delete
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="toggelTr3 ">
                                            <td scope="row" style="left: 0px;padding-left: 0px;">Lakshya</td>
                                            <td> Agent</td>
                                            <td>kapil123@gmail.com</td>
                                            <td>4521784521</td>
                                            <td>10.10</td>
                                            <td>10.10</td>
                                            <td class="position-relative dropdowncaret  p-0">
                                                <button class="action btn">
                                                    <i class="far fa-caret-square-down caret_custom"></i>
                                                </button>
                                                <div class="action-btn" id="manage-dropdown">
                                                    <ul type="none" style="width: 135px;">
                                                        <a href="#" class="nav-link">
                                                            <li><i class="fa-solid fa-money-bill-transfer"></i>
                                                                Transaction
                                                            </li>
                                                        </a>

                                                        <li><i class="fa-solid fa-circle-plus"></i>
                                                            Add New Master
                                                        </li>

                                                        <li>
                                                            <i class="fa-solid fa-paper-plane"></i>
                                                            Send Out
                                                        </li>

                                                        <li><i class="fa-solid fa-rotate-left"></i>
                                                            Claim Back
                                                        </li>
                                                        <a href="#" class="nav-link">
                                                            <li data-bs-toggle="modal" data-bs-target="#edit-btn-modal">
                                                                <i class="fa-solid fa-pen-to-square"></i> Edit
                                                            </li>
                                                        </a>
                                                        <li><i class="fa-solid fa-unlock-keyhole"></i>
                                                            Change Password
                                                        </li>
                                                        <li><i class="fa-solid fa-ban fa-rotate-90"></i>
                                                            Inactive
                                                        </li>
                                                        <li>
                                                            <i class="fa-solid fa-trash"></i>
                                                            Delete
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>

                            <!-- <tr class="">
                                <th scope="row">4</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            <tr class="">
                                <th scope="row">5</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            <tr class="">
                                <th scope="row">6</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                            </tr> -->
                            <!-- <tr class="toggelTr">
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr class="toggelTr1">
                                <td colspan="4">
                                    <table>
                                        <tr class="toggelTr11">
                                            <th scope="row">2</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr class="toggelTr2">
                                            <th scope="row">3</th>
                                            <td colspan="2">Larry the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr class="">
                                <th scope="row">7</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                            </tr> -->
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <!------RIGHT SIDE CONTENT END------->
    </div>

    <!-----ADD-BTN-MODAL------>
    <!-- Button trigger modal -->

    <!-- Modal -->
    <div class="modal fade add-btn-modal" id="addbtnmodal" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content manual_width " style="border-radius: 0;">
                <div class="modal-header text-center">
                    <h5 class="modal-title" id="staticBackdropLabel">ADDING NEW AFFILIATE</h5>
                    <p class="mb-0">Adding a new <span>State Agent</span></p>
                    <button class="close-btn" type="button" data-bs-dismiss="modal"
                        aria-label="Close"><span>x</span></button>
                </div>
                <div class="modal-body container" style="background: rgb(229, 229, 252);">
                    <div class="row">
                        <div
                            class="col-lg-3 col-md-3 col-sm-4 col-xs-12 text-center bg-white sharing_div border-1 h-100">
                            <div class="sharing_shade">
                                <p>SHARING</p>
                            </div>
                            <div class="totel_bet">
                                <input type="radio">
                                <p> On Net Revenue</p>
                            </div>
                            <div class="totel_bet">
                                <input type="radio">
                                <p>On Total Bet</p>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-6 staffform">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <label for="">User Name</label>
                                    <input type="text" placeholder="User Name" aria-label="Username"
                                        aria-describedby="basic-addon1">
                                </div>
                                <div class="col-lg-6 col-md-12 mt-3 mt-lg-0">
                                    <label for="">Phone</label>
                                    <input type="text" placeholder="Phone" aria-label="Username"
                                        aria-describedby="basic-addon1">
                                </div>
                                <div class="col-lg-6 col-md-12 mt-3">
                                    <label for="">Password</label>
                                    <input type="text" placeholder="Password" aria-label="Username"
                                        aria-describedby="basic-addon1">
                                </div>
                                <div class="col-lg-6 col-md-12 mt-3">
                                    <label for="">Email</label>
                                    <input type="text" placeholder="Email" aria-label="Username"
                                        aria-describedby="basic-addon1">
                                </div>
                                <div class="col-lg-6 col-md-12 mt-3">
                                    <label for="">Commission</label>
                                    <input type="text" placeholder="Commission" aria-label="Username"
                                        aria-describedby="basic-addon1">
                                </div>
                                <div class="col-lg-6 col-md-12 mt-3">
                                    <label for="">Note</label>
                                    <input type="text" placeholder="Note" aria-label="Username"
                                        aria-describedby="basic-addon1">
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 p-2 text-center">
                                    <button class="btn create-btn">Create</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END -->

    <!-- PAGINATION -->

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script>
    $('.toggelTr').click(function() {
        //debugger
        $(this).next('.toggelTr1').toggleClass("toggelTr1-active");
        $(this).toggleClass('toggelTr1-active');
    });
    $('.toggelTr11').click(function() {

        $(this).next('.toggelTr2').toggleClass("toggelTr1-active");
        $(this).toggleClass('toggelTr1-active');
    });
    $('.toggelTr2').click(function() {

        $(this).next('.toggelTr3').toggleClass("toggelTr1-active");
        $(this).toggleClass('toggelTr1-active2');
    });
    </script>
</body>

</html>