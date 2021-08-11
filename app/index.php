<!DOCTYPE html>
<html lang="en">

<head>
    <!-- METE TAG GOES THERE -->
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
            <a class="navbar-brand text-bolder fw-bold" href="#">Work Manager</a>
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
                            <a class="dropdown-item" href="#">
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

    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script>
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl)
    })
    </script>
</body>

</html>