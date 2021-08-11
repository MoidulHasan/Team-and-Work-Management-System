<!DOCTYPE html>
<html lang="en">

<head>
    <!-- META TAG GOES THERE -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CONNECT GOOGLE FONTS CDN -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!-- CONNECT FONT-AWESOME CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- CONNECT BOOTSTRAP CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- CONNECT JQUERY CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- CONNECT CUSTOM CSS -->
    <link rel="stylesheet" href="appstyle/style.css">
    <title>Work Manager</title>
</head>

<body class="bg-custom overflow-auto">
    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar static-top shadow w-100 px-md-5">

        <div class="d-flex">
            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand text-bolder fw-bold" href="index.php">Work Manager</a>
        </div>

        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <!-- Topbar Navbar -->
            <ul class="navbar-nav nav-right d-flex">

                <!-- ALERT -->
                <li class="dropdown">
                    <a class="btn btn-white mx-md-3 position-relative" href="#" role="button" id="alertsDropdown"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-bell fa-fw"></i>
                        <!-- Counter - Alerts -->
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            99+
                        </span>

                    </a>
                    <!-- Dropdown - Alerts -->
                    <ul class="dropdown-menu dropdown-menu-end shadow animated--grow-in pt-0"
                        aria-labelledby="alertsDropdown">
                        <li class="dropdown-item m-0 p-0">
                            <h6 class="dropdown-header bg-primary text-white text-center">
                                Alerts Center
                            </h6>
                        </li>

                        <li class="dropdown-item "><a class="text-decoration-none" href="">Lorem ipsum dolor sit
                                amet.</a></li>
                        <li class="dropdown-item"><a class="text-decoration-none" href="">Lorem ipsum dolor sit
                                amet.</a></li>
                        <li class="dropdown-item"><a class="text-decoration-none" href="">Lorem ipsum dolor sit
                                amet.</a></li>
                        <li class="dropdown-item"><a class="text-decoration-none" href="">Lorem ipsum dolor sit
                                amet.</a></li>
                        <li class="dropdown-item"><a class="text-decoration-none" href="">Lorem ipsum dolor sit
                                amet.</a></li>
                        <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>

                    </ul>
                </li>

                <!-- INBOX -->
                <li class="dropdown">
                    <a class="btn btn-white mx-md-3 position-relative" href="#" role="button" id="dropdownMenuLink"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-envelope fa-fw"></i>
                        <!-- Counter - Alerts -->
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            1O+
                        </span>
                    </a>
                    <!-- Dropdown - Messages -->
                    <ul class="dropdown-menu dropdown-menu-end shadow animated--grow-in pt-0"
                        aria-labelledby="messagesDropdown">
                        <li class="dropdown-item p-0 m-0">
                            <h6 class="dropdown-header bg-primary text-white text-center">
                                Message Center
                            </h6>
                        </li>

                        <li class="dropdown-item "><a class="text-decoration-none" href="">Lorem ipsum dolor sit
                                amet.</a></li>
                        <li class="dropdown-item"><a class="text-decoration-none" href="">Lorem ipsum dolor sit
                                amet.</a></li>
                        <li class="dropdown-item"><a class="text-decoration-none" href="">Lorem ipsum dolor sit
                                amet.</a></li>
                        <li class="dropdown-item"><a class="text-decoration-none" href="">Lorem ipsum dolor sit
                                amet.</a></li>
                        <li class="dropdown-item"><a class="text-decoration-none" href="">Lorem ipsum dolor sit
                                amet.</a></li>
                        <a class="dropdown-item text-center small text-gray-500" href="#">Show All Message</a>
                    </ul>
                </li>

                <!-- PROFILE -->
                <li class="dropdown">
                    <a class="btn btn-white mx-md-3" href="#" role="button" id="userDropdown" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <img class="img-profile rounded-circle" src="">
                        <i class="fas fa-user-circle"></i>
                    </a>
                    <!-- Dropdown - User Information -->

                    <ul class="dropdown-menu dropdown-menu-end shadow animated--grow-in pt-0"
                        aria-labelledby="userDropdown">

                        <li class="dropdown-item ">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                        </li>
                        <li class="dropdown-item">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Settings
                            </a>
                        </li>
                        <li class="dropdown-item">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                Activity Log
                            </a>
                        </li>
                        <li class="dropdown-item">
                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#logoutModal"
                                id="logout">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </nav>
    <!-- End of Topbar -->

    <!-- MAIN CONTENT START-->
    <main class="overflow-hidden">
        <div class="row p-3  d-flex justify-content-around">

            <!-- SIDE BAR START-->
            <div class="col-3 col-md-2 bg-white rounded-3 shadow d-none d-md-block h-50" id="sideBar">
                <!-- Sidebar -->
                <ul class="navbar-nav sidebar sidebar-dark accordion " id="accordionSidebar">

                    <!-- Sidebar - Brand ONLY FOR DESKTOP-->
                    <a class="sidebar-brand d-md-flex align-items-center justify-content-center text-decoration-none fs-5 py-3 d-none"
                        href="index.php">
                        <div class="sidebar-brand-icon rotate-n-15">
                            <i class="fas fa-cog"></i>
                        </div>
                        <div class="sidebar-brand-text p-2">
                            Work Manager<sup>1.0</sup>
                        </div>
                    </a>

                    <!-- Sidebar - Brand ONLY FOR MOBLE-->
                    <a class="sidebar-brand d-flex align-items-center justify-content-center text-decoration-none fs-5 py-3 d-md-none"
                        href="index.php">
                        <div class="sidebar-brand-icon rotate-n-15">
                            <i class="fas fa-cog"></i>
                        </div>
                        <div class="sidebar-brand-text">WM<sup>1.0</sup></div>
                    </a>

                    <!-- Divider -->
                    <hr class="sidebar-divider my-0">

                    <!-- Nav Item - Dashboard For desktop-->
                    <li class="nav-item py-3 fs-6 text-center bg-custom rounded mt-2 d-none d-md-block">
                        <a class="nav-link p-0" href="index.php">
                            <i class="fas fa-fw fa-tachometer-alt"></i>
                            <span class="fs-6">Dashboard</span></a>
                    </li>

                    <!-- Nav Item - Dashboard for mobile-->
                    <li class="nav-item py-3 fs-6 text-center bg-custom rounded mt-2 d-block d-md-none">
                        <a class="nav-link p-0" href="index.php">
                            <i class="fas fa-fw fa-tachometer-alt"></i>
                            <span class="fs-6">DB</span></a>
                    </li>


                    <!-- Nav Item - Pages Collapse Menu -->
                    <li class="nav-item bg-custom rounded p-2 mt-2">
                        <a class="nav-link collapsed text-center" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <span>Work</span>
                        </a>
                        <div id="collapseOne" class="collapse " aria-labelledby="headingTwo"
                            data-parent="#accordionSidebar">
                            <div class="bg-white p-2 collapse-inner rounded">
                                <a class="collapse-item text-decoration-none text-dark" href="#">My Work</a>
                                <br>
                                <a class="collapse-item text-decoration-none" href="#">Create Work</a>
                            </div>
                        </div>
                    </li>

                    <!-- Nav Item - Members Collapse Menu -->
                    <li class="nav-item bg-custom rounded mt-2 p-2">
                        <a class="nav-link collapsed text-center" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                            <span>Team</span>
                        </a>
                        <div id="collapseUtilities" class="collapse " aria-labelledby="headingUtilities"
                            data-parent="#accordionSidebar">
                            <div class="bg-white p-2 collapse-inner rounded">
                                <h6 class="collapse-header"></h6>
                                <a class="collapse-item text-decoration-none" href="#">My Team</a>
                                <br>
                                <a class="collapse-item text-decoration-none" href="#">Join Team</a>
                                <br>
                                <a class="collapse-item text-decoration-none" href="#">Create Team</a>
                            </div>
                        </div>
                    </li>




                    <!-- Divider -->
                    <hr class="sidebar-divider">

                </ul>
                <!-- End of Sidebar -->
            </div>
            <!-- SIDE BAR END-->

            <!-- CONTENT SECTION START -->
            <div class="col-8 col-md-9 bg-white shadow border rounded-3 p-0" id="mainPanel" style="height: 30rem">
                <!-- Page Heading -->
                <h3 class="text-center bg-primary text-white p-0 m-0 shadow">Dashboard</h3>
            </div>
            <!-- CONTENT SECTION END -->
        </div>
    </main>
    <!-- MAIN CONTENT END-->

    <?php
        require_once "includes/modal.php";
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script>
    // Toggle the side navigation
    $("#sidebarToggle, #sidebarToggleTop").on('click', function(e) {
        if ($("#sideBar").hasClass("d-none")) {
            $('#sideBar').removeClass('d-none');
            $('#sideBar').addClass('d-block');
            $('#mainPanel').removeClass('col-12');
            $('#mainPanel').addClass('col-8');
        } else if ($("#sideBar").hasClass("d-block")) {
            $('#sideBar').removeClass('d-block');
            $('#sideBar').addClass('d-none');
            $('#mainPanel').removeClass('col-8');
            $('#mainPanel').addClass('col-12');
        };
    });
    </script>
</body>

</html>