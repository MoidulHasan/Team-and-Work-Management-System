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