<?php
include 'menu/validate_login.php';

if (empty($_SESSION['User_ID'])) {
    echo '<script>alert("You cannot book a hotel room without logging in to your account.");</script>';
    echo '<script>window.location.href = "loginsignup.php";</script>';
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Celestial Oasis Hotel - Reservation Form</title>
    <link rel="icon" type="image/x-icon" href="img/logo.png">
    <link href="css/nav.css" rel="stylesheet" />
    <link href="css/bookingform.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c3573e9c36.js" crossorigin="anonymous"></script>
</head>

<body>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>
    <?php include 'menu/nav.php'; ?>

    <?php
    if ($_POST) {
        include 'config/database.php';

        try {
            $query = "INSERT INTO bookinglist SET First_Name=:first_name, Last_Name=:last_name, Email=:email, Phone_Number=:phone_number, Address_Line1=:address_line1, Address_Line2=:address_line2, State=:state, Country=:country, Room_Type=:room_type, Guest_Num=:guest_num, Check_In_DateTime=:check_in_datetime, Check_Out_DateTime=:check_out_datetime, Special_Request=:special_request, Status=:status";
            $stmt = $con->prepare($query);
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $email = $_POST['email'];
            $phone_number = $_POST['phone_number'];
            $address_line1 = $_POST['address_line1'];
            $address_line2 = $_POST['address_line2'];
            $state = $_POST['state'];
            $country = $_POST['country'];
            // $room_type = $_POST['room_type'];
            $room_type = isset($_POST['room_type']) ? $_POST['room_type'] : '';
            $guest_num = $_POST['guest_num'];
            $check_in_datetime = $_POST['check_in_datetime'];
            $check_out_datetime = $_POST['check_out_datetime'];
            $special_request = $_POST['special_request'];
            $status = "Pending";
            $currentDateTime = date('Y-m-d H:i:s');

            $errorMessage = array();

            if (empty($first_name)) {
                $errorMessage[] = "First name field is required.";
            }
            if (empty($last_name)) {
                $errorMessage[] = "Last name field is required.";
            }
            if (empty($email)) {
                $errorMessage[] = "Email field is required.";
            }
            if (empty($phone_number)) {
                $errorMessage[] = "Phone number field is required.";
            }
            if (empty($address_line1)) {
                $errorMessage[] = "Street address field is required.";
            }
            if (empty($address_line2)) {
                $errorMessage[] = "Street address line 2 field is required.";
            }
            if (empty($state)) {
                $errorMessage[] = "State field is required.";
            }
            if (empty($country)) {
                $errorMessage[] = "Country field is required.";
            }
            if (empty($room_type)) {
                $errorMessage[] = "Please select a room type.";
            }
            if (empty($guest_num)) {
                $errorMessage[] = "Please enter number of people staying.";
            }
            if (empty($check_in_datetime)) {
                $errorMessage[] = "Please enter your check-in date and time.";
            } else {
                $currentDateTime = strtotime(date('Y-m-d H:i:s'));
                $checkInDateTime = strtotime($check_in_datetime);
            
                if ($checkInDateTime < ($currentDateTime + 86400)) { // 86400 seconds in a day
                    $errorMessage[] = "Check-in date and time must be at least 1 day from the current time.";
                }
            }
            
            if (empty($check_out_datetime)) {
                $errorMessage[] = "Please enter your check-out date and time.";
            } elseif (strtotime($check_out_datetime) <= strtotime($check_in_datetime)) {
                $errorMessage[] = "Check-out date and time must be later than the check-in date and time.";
            }
            


            if (!empty($errorMessage)) {
                echo "<div class='alert alert-danger m-4 mb-0'>";
                foreach ($errorMessage as $displayErrorMessage) {
                    echo $displayErrorMessage . "<br>";
                }
                echo "</div>";
            } else {
                $stmt->bindParam(':first_name', $first_name);
                $stmt->bindParam(':last_name', $last_name);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':phone_number', $phone_number);
                $stmt->bindParam(':address_line1', $address_line1);
                $stmt->bindParam(':address_line2', $address_line2);
                $stmt->bindParam(':state', $state);
                $stmt->bindParam(':country', $country);
                $stmt->bindParam(':room_type', $room_type);
                $stmt->bindParam(':guest_num', $guest_num);
                $stmt->bindParam(':check_in_datetime', $check_in_datetime);
                $stmt->bindParam(':check_out_datetime', $check_out_datetime);
                $stmt->bindParam(':special_request', $special_request);
                $stmt->bindParam(':status', $status);

                if ($stmt->execute()) {
                    //record saved
                    echo "<div class='alert alert-success m-4 mb-0'>Reservation form submitted successfully! Please kindly wait for the processing time and check your email for futher instructions.</div>";
                    $_POST = array();
                } else {
                    echo "<div class='alert alert-danger m-3'>Something went wrong. Reservation form submission failed. Please try again later or contact support for assistance.</div>";
                }
            }
        } catch (PDOException $exception) {
            die('ERROR: ' . $exception->getMessage());
        }
    }
    ?>

    <div class="form-wrapper mt-4">
        <img src="img/formimg.png" alt="Hotel Image" style="width: 100%; display: block; margin: 0 auto;">
        <h2 style="text-align: center;">Hotel Reservation Form</h2>
        <p style="text-align: center;">Book your stay with us</p>

        <form action="bookingform.php" method="post">
            <!-- Personal Information -->
            <div class="form-group two-in-one mt-5">
                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" id="first_name" name="first_name" value="<?php echo isset($_POST['first_name']) ? $_POST['first_name'] : ''; ?>">
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" id="last_name" name="last_name" value="<?php echo isset($_POST['last_name']) ? $_POST['last_name'] : ''; ?>">
                </div>
            </div>
            <!-- Contact Information -->
            <div class="form-group two-in-one">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>">
                </div>
                <div class="form-group">
                    <label for="phone_number">Phone Number</label>
                    <input type="text" id="phone_number" name="phone_number" value="<?php echo isset($_POST['phone_number']) ? $_POST['phone_number'] : ''; ?>">
                </div>
            </div>
            <!-- Address Details -->
            <div class="form-group two-in-one">
                <div class="form-group">
                    <label for="address_line1">Street Address</label>
                    <input type="text" id="address_line1" name="address_line1" value="<?php echo isset($_POST['address_line1']) ? $_POST['address_line1'] : ''; ?>">
                </div>
            </div>
            <div class="form-group two-in-one">
                <div class="form-group">
                    <label for="address_line2">Address Line 2</label>
                    <input type="text" id="address_line2" name="address_line2" value="<?php echo isset($_POST['address_line2']) ? $_POST['address_line2'] : ''; ?>">
                </div>
            </div>
            <div class="form-group two-in-one">
                <div class="form-group">
                    <label for="state">State / City</label>
                    <input type="text" id="state" name="state" value="<?php echo isset($_POST['state']) ? $_POST['state'] : ''; ?>">
                </div>
                <div class="form-group">
                    <label for="country">Country</label>
                    <input type="text" id="country" name="country" value="<?php echo isset($_POST['country']) ? $_POST['country'] : ''; ?>">
                </div>
            </div>
            <!-- Booking Details -->
            <div class="form-group two-in-one">
                <div class="form-group">
                    <label for="room_type">Room Type</label>
                    <!-- <input type="text" id="room_type" name="room_type" > -->
                    <select id="room_type" name="room_type" class="form-select">
                        <option value="" selected hidden>Choose a room type</option>
                        <option value="Standard Room" <?php echo (isset($_POST['room_type']) && $_POST['room_type'] === 'Standard Room') ? 'selected' : ''; ?>>Standard Room</option>
                        <option value="Deluxe Suite" <?php echo (isset($_POST['room_type']) && $_POST['room_type'] === 'Deluxe Suite') ? 'selected' : ''; ?>>Deluxe Suite</option>
                        <option value="Executive Penthouse" <?php echo (isset($_POST['room_type']) && $_POST['room_type'] === 'Executive Penthouse') ? 'selected' : ''; ?>>Executive Penthouse</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="guest_num">Number of Guests</label>
                    <input type="number" id="guest_num" name="guest_num" min="1" max="10" step="1" value="<?php echo isset($_POST['guest_num']) ? $_POST['guest_num'] : ''; ?>">
                </div>
            </div>
            <!-- Check out and Check in Date -->
            <div class="form-group two-in-one">
                <div class="form-group">
                    <label for="check_in_datetime">Check-in Date and Time</label>
                    <input type="datetime-local" id="check_in_datetime" name="check_in_datetime" value="<?php echo isset($_POST['check_in_datetime']) ? $_POST['check_in_datetime'] : ''; ?>">
                </div>
                <div class="form-group">
                    <label for="check_out_datetime">Check-out Date and Time</label>
                    <input type="datetime-local" id="check_out_datetime" name="check_out_datetime" value="<?php echo isset($_POST['check_out_datetime']) ? $_POST['check_out_datetime'] : ''; ?>">
                </div>
            </div>
            <!-- Notes -->
            <div class="form-group">
                <label for="special_request">Special Request</label>
                <textarea id="notes" name="special_request" rows="5" value="<?php echo isset($_POST['special_request']) ? $_POST['special_request'] : ''; ?>"></textarea>
            </div>

            <div class="form-group">
                <input class="btn btn-primary" type="submit" value="Submit">
            </div>
        </form>
    </div>
    <?php include 'menu/footer.php'; ?>

    <script src="js/style.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>