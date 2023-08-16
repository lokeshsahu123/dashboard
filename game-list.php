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
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <h1 class="title_h1 same_heading">Game Assigned</h1>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
                            <div class="row">
                                <div class="col-lg-4 col-md-4  col-12">
                                    <a href="#" class="nav-link">Total Player:</a>
                                </div>
                                <div class="col-lg-4 col-md-4 col-6  mt-lg-0  mt-md-0 mt-sm-0 mt-2">
                                    <a href="#" class="btn  game-btn" role="button" aria-pressed="true">Advance
                                        Setting</a>
                                </div>
                                <div class="col-lg-4 col-md-4 col-6 mt-lg-0  mt-md-0 mt-sm-0 mt-2 text-end">
                                    <a href="#" class="btn  game-btn" role="button" aria-pressed="true">Publish</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 text-end mt-1">
                            <a href="#" id="excel"><button class="btn  btn-secondary  "><i
                                        class="fa-solid fa-arrow-left"></i></button></a>

                        </div>
                    </div>
                </div>
            </div>
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
                <div class="table-player game_list">
                    <table class="table data-table">
                        <thead>
                            <tr>
                                <th rowspan="2">Category</th>
                                <th rowspan="2">Name</th>
                                <th rowspan="2">SFS Address</th>
                                <th rowspan="2">SFS Port</th>
                                <th rowspan="2">Web URL</th>
                                <th rowspan="2">Web Port</th>
                                <th rowspan="2">Zone Name</th>
                                <th rowspan="2">Room Name</th>
                                <th rowspan="2">Web Service</th>
                                <th colspan="2" rowspan="1">Mobile</th>
                                <th colspan="2" rowspan="1">Web</th>
                                <th rowspan="2">Version</th>
                                <th rowspan="2"> Category Image</th>
                                <th rowspan="2">Web Image</th>
                                <th rowspan="2">Mobile Image</th>
                                <th rowspan="2">Actions</th>
                            </tr>
                            <tr>
                                <th rowspan="1">Status</th>
                                <th rowspan="1">Lock</th>
                                <th rowspan="1">Status</th>
                                <th rowspan="1">Lock</th>
                            </tr>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Draw</td>
                                <td>12 Cards Joker PC</td>
                                <td> 52.221.186.43 </td>
                                <td>9933 </td>
                                <td></td>
                                <td>5502</td>
                                <td>Casino_Lobby</td>
                                <td>Lobby</td>
                                <td>-</td>
                                <td><i class="fa-solid fa-ban fa-rotate-90" style="color: #ff0000;"></i></td>
                                <td><i class="fa-solid fa-lock-open" style="color: #00940a;"></i></td>
                                <td><i class="fa-solid fa-ban fa-rotate-90" style="color: #ff0000;"></i></td>
                                <td><i class="fa-solid fa-lock-open" style="color: #00940a;"></i></td>
                                <td>V17</td>
                                <td><img src="assets/img/img.png" alt=""></td>
                                <td><img src="assets/img/12cardspc.png" alt=""></td>
                                <td><img src="assets/img/andarbahar.png" alt=""></td>
                                <td class="position-relative dropdowncaret">
                                    <button class="action btn">
                                        <i class="fa-solid fa-caret-down"></i>
                                    </button>
                                    <div class="action-btn" id="manage-dropdown">
                                        <ul type="none">

                                            <a href="#" class="nav-link">
                                                <li>
                                                    <i class="fa-solid fa-pen"></i>
                                                    Configure Game
                                                </li>
                                            </a>
                                            <a href="#" class="nav-link">
                                                <li><i class="fa-solid fa-gear"></i>
                                                    Game Setting
                                                </li>
                                            </a>
                                            <a href="#" class="nav-link">
                                                <li><i class="fa-solid fa-user"></i>
                                                    Common Setting
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