<?php
include 'menu/validate_admin.php';
include 'menu/logout.php';
include 'config/database.php';

try {     
    $id = isset($_GET['id']) ? $_GET['id'] :  die('ERROR: Record ID not found.');
    $status = isset($_GET['status']) ? $_GET['status'] :  die('ERROR: Status not found.');

    // update query
    $updateStatusQuery = "UPDATE bookinglist SET status = ? WHERE Booking_ID = ?";
    $updateStmt = $con->prepare($updateStatusQuery);
    $updateStmt->bindParam(1, $status);
    $updateStmt->bindParam(2, $id);

    if ($updateStmt->execute()) {
        header('Location: booking_read_one.php?action=record_updated&id=' . $id);

    } else {
        header('Location: booking_read_one.php?action=failed&id=' . $id);
    }
} catch (PDOException $exception) {
    die('ERROR: ' . $exception->getMessage());
}
?>


