<?php
include 'menu/validate_admin.php';
include 'menu/logout.php';
?>


<!DOCTYPE HTML>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Celestial Oasis Hotel - Booking List</title>
    <link rel="icon" type="image/x-icon" href="img/logo.png">
    <link href="css/nav.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c3573e9c36.js" crossorigin="anonymous"></script>
</head>

<body>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>
    <?php include 'menu/admin_nav.php'; ?>

    <div class="container-fluid p-0 mb-0" style="background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(34, 125, 114, 1) 66%)">
        <h1 class="text-white pt-5 pb-5 px-5 mb-0 text-center">Celestial Oasis Hotel - Booking List</h1>

        <?php
        include 'config/database.php';

        $searchKeyword = isset($_GET['search']) ? $_GET['search'] : '';
        $action = isset($_GET['action']) ? $_GET['action'] : "";
        $query = "SELECT * FROM bookinglist";
        if (!empty($searchKeyword)) {
            $query .= " WHERE Email LIKE :keyword OR Booking_ID LIKE :keyword OR Room_Type LIKE :keyword OR Status LIKE :keyword";
            $searchKeyword = "%{$searchKeyword}%";
        }
        $query .= " ORDER BY Booking_ID DESC";
        $stmt = $con->prepare($query);
        if (!empty($searchKeyword)) {
            $stmt->bindParam(':keyword', $searchKeyword);
        }

        $stmt->execute();
        $num = $stmt->rowCount();

        echo '<div class="px-5 pb-1">
            <form method="GET" action="">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="search" placeholder="Search keywords..." value="' . str_replace('%', '', $searchKeyword) . '">
                    <button class="btn btn-primary" type="submit">Search</button>
                </div>
            </form>
        </div>';

        if ($action == 'deleted') {
            echo "<div class='alert alert-success m-3 mx-5'>Booking record was deleted.</div>";
        }

        if ($num > 0) {
            echo "<div class='mx-5 py-4' style='overflow-x:auto;'>";
            echo "<table class='table table-bordered table-striped'>"; //start table
            echo "<tr>";
            echo "<th>Booking_ID</th>";
            echo "<th>Email</th>";
            echo "<th>Room Type</th>";
            echo "<th>Guest Number</th>";
            echo "<th>Check-in Date and Time</th>";
            echo "<th>Check-out Date and Time</th>";
            echo "<th>Status</th>";
            echo "<th>Action</th>";
            echo "</tr>";

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                extract($row);
                echo "<tr>";
                echo "<td>{$Booking_ID}</td>";
                // echo "<td>{$Email}</td>";
                echo "<td>";
                echo "<a href='mailto:" . htmlspecialchars($Email, ENT_QUOTES) . "' target='_blank' style='color: black; text-decoration: none;'>";
                echo htmlspecialchars($Email, ENT_QUOTES);
                echo "</a>";
                echo "</td>";
                echo "<td>{$Room_Type}</td>";
                echo "<td>{$Guest_Num}</td>";
                echo "<td>{$Check_In_DateTime}</td>";
                echo "<td>{$Check_Out_DateTime}</td>";
                echo "<td>{$Status}</td>";

                echo "<td class='col-3'>";
                echo "<a href='booking_read_one.php?id={$Booking_ID}' class='btn btn-info m-r-1em text-white mx-2'>Read</a>";
                echo "<a href='#' onclick='booking_update_confirm({$Booking_ID});'  class='btn btn-success mx-2'>Confirm</a>";
                echo "<a href='#' onclick='booking_update_reject({$Booking_ID});'  class='btn btn-primary mx-2'>Reject</a>";
                echo "<a href='#' onclick='booking_delete({$Booking_ID});'  class='btn btn-danger mx-2'>Delete</a>";
                echo "</td>";
                echo "</tr>";
            }
            echo "</table>";
            echo "</div>";
        } else {
            echo '<div class="p-3">
                <div class="alert alert-danger m-4 my-0 mb-2">No booking record found.</div>
            </div>';
        }
        ?>

    </div>


    <?php include 'menu/admin_footer.php'; ?>

</body>
<!-- js template -->
<script src="js/style.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script type='text/javascript'>
    // confirm record deletion
    function booking_delete(Booking_ID) {
        if (confirm('Are you sure to delete this booking record?')) {
            // if admin clicked ok, pass the id to booking_delete.php and execute the delete query
            window.location = 'booking_delete.php?id=' + Booking_ID;
        }
    }

    function booking_update_confirm(Booking_ID) {
        if (confirm('Are you sure to confirm this booking?')) {
            // if admin clicked ok, pass the id and status to booking_update.php and execute the update query
            window.location = 'booking_update.php?id=' + Booking_ID + '&status=Confirmed';
        }
    }

    function booking_update_reject(Booking_ID) {
        if (confirm('Are you sure to reject this booking?')) {
            // if admin clicked ok, pass the id and status to booking_update.php and execute the update query
            window.location = 'booking_update.php?id=' + Booking_ID + '&status=Rejected';
        }
    }
</script>

</html>