<?php
include "config.php";
date_default_timezone_set("Asia/Kolkata");
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
ob_start();
if(isset($_POST["pickup_info"])){
$source_pincode = mysqli_real_escape_string($conn, $_POST['source_pincode']);
$destination_pincode = mysqli_real_escape_string($conn, $_POST['destination_pincode']);
$package_type = mysqli_real_escape_string($conn, $_POST['package_type']);
$package_weight = mysqli_real_escape_string($conn, $_POST['package_weight']);
$t_type = mysqli_real_escape_string($conn, $_POST['transport_mode']);
$packing_required = mysqli_real_escape_string($conn, $_POST['packing_required']);
$sender_name = mysqli_real_escape_string($conn, $_POST['sender_name']);
$sender_phone = mysqli_real_escape_string($conn, $_POST['sender_phone']);
$sender_address = mysqli_real_escape_string($conn, $_POST['sender_address']);
$receiver_name = mysqli_real_escape_string($conn, $_POST['receiver_name']);
$receiver_phone = mysqli_real_escape_string($conn, $_POST['receiver_phone']);
$receiver_address = mysqli_real_escape_string($conn, $_POST['receiver_address']);
$pickup_registered_by = mysqli_real_escape_string($conn, $_POST['pickup_registered_by']);
$pickup_schedule_timing = mysqli_real_escape_string($conn, $_POST['pickup_schedule_timing']);
$contact_person_name = mysqli_real_escape_string($conn, $_POST['contact_person_name']);
$contact_person_mobile = mysqli_real_escape_string($conn, $_POST['contact_person_mobile']);
$pickup_address = mysqli_real_escape_string($conn, $_POST['pickup_address']);
$approx_charges = mysqli_real_escape_string($conn, $_POST['approx_charges']);
$book_date=date("d-m-Y" . " " . "h:i:sa");

$query_id = "SELECT * FROM  `pickup_info` ORDER BY id DESC LIMIT 1";
                $query_run = mysqli_query($conn, $query_id);
                $i = 1;
                $agentrow = mysqli_num_rows($query_run);
                if ($agentrow > 0) {
                $row = mysqli_fetch_assoc($query_run);
                $last = $row['pickup_id'];
                $delid = $last+1;
                }else{
                   $delid = 222000; 
                }
                




 $sql = "INSERT INTO `pickup_info`(`pickup_id`,`source_pincode`, `destination_pincode`, `package_type`, `package_weight`, `transport_mode`, `packing_required`, `approx_charges`,`sender_name`,`pickup_registered_by`, `sender_phone`, `sender_address`, `receiver_name`, `receiver_phone`, `receiver_address`, `pickup_schedule_timing`, `contact_person_name`, `contact_person_mobile`, `pickup_address`, `book_date`) VALUE
('".$delid."', '".$source_pincode."', '".$destination_pincode."', '".$package_type."', '".$package_weight."', '".$t_type."', '".$packing_required."', '".$approx_charges."', '".$sender_name."', '".$pickup_registered_by."', '".$sender_phone."', '".$sender_address."', '".$receiver_name."', '".$receiver_phone."', '".$receiver_address."', '".$pickup_schedule_timing."', '".$contact_person_name."', '".$contact_person_mobile."', '".$pickup_address."','$book_date' )";
$query = mysqli_query($conn, $sql);
// die;
if ($query == True) {
    header("Location:track.php?v=true&id=$delid");
}else{
    header("Location:booking.php");
}
}else{
    header("Location:booking.php");
}
