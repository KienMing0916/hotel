<?php
include 'config/database.php';
try {
    $id = isset($_GET['id']) ? $_GET['id'] :  die('ERROR: Record ID not found.');
    // delete query
    $deleteQuery = "DELETE FROM bookinglist WHERE Booking_ID = ?";
    $deleteQueryStmt = $con->prepare($deleteQuery);
    $deleteQueryStmt->bindParam(1, $id);

    if ($deleteQueryStmt->execute()) {
        header('Location: booking_read.php?action=deleted');
    } else {
        die('Unable to delete record.');
    }

} catch (PDOException $exception) {
    die('ERROR: ' . $exception->getMessage());
}
