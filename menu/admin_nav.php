<!DOCTYPE html>

<nav id="mainNavigation" class="border-bottom">
    <div role="navigation">
        <div class="py-3 text-center border-bottom">
            <img src="img/logo.png" alt="logo" width="100" height="80" class="invert">
        </div>
    </div>
    <div class="navbar-expand-md">
        <div class="navbar-dark text-center my-md-3">
            <button class="navbar-toggler w-75 my-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon m-1"></span> <span class="align-middle">Menu</span>
            </button>
        </div>
        <div class="text-center my-md-3 collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mx-auto pt-0 pb-md-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="booking_read.php">Booking List</a>
                </li>

                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="company-dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Staff
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="company-dropdown">
                        <li><a class="dropdown-item" href="staff_read.php">Staff List</a></li>
                        <li><a class="dropdown-item" href="staff_insert.php">Insert New Staff</a></li>
                    </ul>
                </li> -->

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="company-dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Account
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="company-dropdown">
                        <?php
                        // Check if the user is logged in
                        if (empty($_SESSION['User_ID'])) {
                            echo '<li><a class="dropdown-item" href="loginsignup.php">Login</a></li>';
                        }else{
                            echo '<li><a class="dropdown-item" href="?logout=true">Logout</a></li>';
                        }
                        // if ($userLogin === null) {
                        //     echo '<li><a class="dropdown-item" href="loginsignup.php">Login</a></li>';
                        // }
                        // if ($userLogin !== null) {
                        //     echo '<li><a class="dropdown-item" href="?logout=true">Logout</a></li>';
                        // }
                        ?>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div>
</nav>