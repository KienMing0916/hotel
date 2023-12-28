<?php
session_start();
if((empty($_SESSION['User_ID']) || $_SESSION['Role'] != "admin")){
    header("Location: loginsignup.php?action=warning");
    exit();
}

?>
