<?php
require_once 'include/db_function.php';
$db = new db_function();
 
// json response array
$response = array("error" => FALSE);
$_POST = json_decode(file_get_contents('php://input'), true);
 
if (isset($_POST['id_user']) && isset($_POST['id_paket']) && isset($_POST['jumlah']) && isset($_POST['tanggal']) && isset($_POST['total'])) {
 
    // menerima parameter POST ( email dan password )
    $user = $_POST['id_user'];
    $paket = $_POST['id_paket'];
    $jumlah = $_POST['jumlah'];
    $total_harga = $_POST['total'];
    $tanggal = $_POST['tanggal'];
 
    // get the user by email and password
    // get user berdasarkan email dan password
    $order = $db->orderpesan($user, $paket, $jumlah, $total_harga, $tanggal);
 
    if ($order != false) {
        // user ditemukan
        $response["error"] = FALSE;
        $response["message"] = "Order Berhasil";
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