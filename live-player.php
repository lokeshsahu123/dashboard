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
                        <div class="col-md-8">
                            <h1 class="title_h1 same_heading">Online Tables</h1>
                        </div>

                        <div class="text-end col-md-4 col-7">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Search for..."
                                    aria-label="Username" aria-describedby="basic-addon1" style="height: 36px;">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1" style="padding: 10px;"><i
                                            class="fa-solid fa-magnifying-glass"></i></span>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-md-3 col-5">
                            <a href="#" class="nav-link"> <i class="fa-solid fa-right-from-bracket"></i>Force
                                Logout</a>
                        </div> -->
                    </div>
                </div>
            </div>
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
                <div class="table-player  bank-details">
                    <table class="table data-table">
                        <thead>
                            <tr>
                                <th>Table Name</th>
                                <th>Players Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="12">No records found</td>
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