<?php
require_once 'include/db_function.php';
$db = new db_function();
 
// json response array
$response = array("error" => FALSE);
 
if (isset($_POST['email']) && isset($_POST['kodepemesanan']) && isset($_POST['tempat']) && isset($_POST['tanggal']) && isset($_POST['seatcode'])) {
 
    // menerima parameter POST ( email dan password )
    $email = $_POST['email'];
    $kodepemesanan = $_POST['kodepemesanan'];
    $tempat = $_POST['tempat'];
    $tanggal = $_POST['tanggal'];
    $seatcode = $_POST['seatcode'];
 
    // get the user by email and password
    // get user berdasarkan email dan password
    $order = $db->order($email, $kodepemesanan, $tempat, $tanggal, $seatcode);
 	
    if ($order != false) {
        // user ditemukan
        $response["error"] = FALSE;
        $response["message"] = "Order Berhasil";
        $db->sendEmail();
        echo json_encode($response);
    } else {
        // user tidak ditemukan password/email salah
        $response["error"] = TRUE;
        $response["error_msg"] = "Order gagal";
        echo json_encode($response);
    }
} else {
    $response["error"] = TRUE;
    $response["error_msg"] = "Kurang parameter";
    echo json_encode($response);
}
?>