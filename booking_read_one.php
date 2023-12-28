<?php
include 'menu/validate_admin.php';
include 'menu/logout.php';
?>


<!DOCTYPE HTML>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Celestial Oasis Hotel - Booking Details</title>
    <link rel="icon" type="image/x-icon" href="img/logo.png">
    <link href="css/nav.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c3573e9c36.js" crossorigin="anonymous"></script>
</head>

<body>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>
    <?php include 'menu/admin_nav.php'; ?>

    <div class="container-fluid p-0 mb-0" style="background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(34, 125, 114, 1) 66%)">
        <h1 class="text-white pt-5 pb-5 px-5 mb-0 text-center">Celestial Oasis Hotel - Booking Details</h1>

        <?php
        $id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: Record ID not found.');
        $action = isset($_GET['action']) ? $_GET['action'] : "";

        // for update status view
        if ($action == 'record_updated') {
            echo "<div class='alert alert-success m-3 mx-5 mt-0'>Booking status was updated.</div>";
        }
        if ($action == 'failed') {
            echo "<div class='alert alert-danger m-3 mx-5 mt-0'>Something went wrong. Booking record status update failed. Please try again later.</div>";
        }

        include 'config/database.php';
        try {
            // prepare select query
            $query = "SELECT * FROM bookinglist WHERE Booking_ID = :id ";
            $stmt = $con->prepare($query);
            $stmt->bindParam(":id", $id);
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            $booking_ID = $row['Booking_ID'];
            $first_name = $row['First_Name'];
            $last_name = $row['Last_Name'];
            $email = $row['Email'];
            $phone_number = $row['Phone_Number'];
            $address_line1 = $row['Address_Line1'];
            $address_line2 = $row['Address_Line2'];
            $state = $row['State'];
            $country = $row['Country'];
            $room_type = $row['Room_Type'];
            $guest_num = $row['Guest_Num'];
            $check_in_datetime = $row['Check_In_DateTime'];
            $check_out_datetime = $row['Check_Out_DateTime'];
            $special_request = $row['Special_Request'];
            $status = $row['Status'];
        } catch (PDOException $exception) {
            die('ERROR: ' . $exception->getMessage());
        }
        ?>

        <div class='mx-5 py-4 pt-0' style='overflow-x:auto;'>
            <table class='table table-bordered table-striped'>
                <tr>
                    <td class="col-3">Booking_ID</td>
                    <td class="col-9"><?php echo htmlspecialchars($booking_ID, ENT_QUOTES);  ?></td>
                </tr>
                <tr>
                    <td>First Name</td>
                    <td><?php echo htmlspecialchars($first_name, ENT_QUOTES);  ?></td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td><?php echo htmlspecialchars($last_name, ENT_QUOTES);  ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>
                        <a href="mailto:<?php echo htmlspecialchars($email, ENT_QUOTES); ?>" target="_blank" style="color: black; text-decoration: none;">
                            <?php echo htmlspecialchars($email, ENT_QUOTES); ?>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>Phone Number</td>
                    <td>
                        <a href="tel:<?php echo htmlspecialchars($phone_number, ENT_QUOTES); ?>" style="color: black; text-decoration: none;" target="_blank">
                            <?php echo htmlspecialchars($phone_number, ENT_QUOTES); ?>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>Street Address</td>
                    <td><?php echo htmlspecialchars($address_line1, ENT_QUOTES);  ?></td>
                </tr>
                <tr>
                    <td>Address Line 2</td>
                    <td><?php echo htmlspecialchars($address_line2, ENT_QUOTES);  ?></td>
                </tr>
                <tr>
                    <td>State</td>
                    <td><?php echo htmlspecialchars($state, ENT_QUOTES);  ?></td>
                </tr>
                <tr>
                    <td>Country</td>
                    <td><?php echo htmlspecialchars($country, ENT_QUOTES);  ?></td>
                </tr>
                <tr>
                    <td>Room Type</td>
                    <td><?php echo htmlspecialchars($room_type, ENT_QUOTES);  ?></td>
                </tr>
                <tr>
                    <td>Guest Number</td>
                    <td><?php echo htmlspecialchars($guest_num, ENT_QUOTES);  ?></td>
                </tr>
                <tr>
                    <td>Check-in Date and Time</td>
                    <td><?php echo htmlspecialchars($check_in_datetime, ENT_QUOTES);  ?></td>
                </tr>
                <tr>
                    <td>Check-out Date and Time</td>
                    <td><?php echo htmlspecialchars($check_out_datetime, ENT_QUOTES);  ?></td>
                </tr>
                <tr>
                    <td>Special Request</td>
                    <td><?php echo htmlspecialchars($special_request, ENT_QUOTES);  ?></td>
                </tr>
                <tr>
                    <td>Booking Status</td>
                    <td><?php echo htmlspecialchars($status, ENT_QUOTES);  ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <a href='booking_read.php' class='btn btn-danger'>Back to booking list</a>
                    </td>
                </tr>
            </table>
        </div>

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
</script>

</html>