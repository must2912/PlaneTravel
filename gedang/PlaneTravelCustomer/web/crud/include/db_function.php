<?php
 
class db_function {
 
    private $conn;
 
    // constructor
    function __construct() {
        require_once 'db_connect.php';
        // koneksi ke database
        $db = new db_connect();
        $this->conn = $db->connect();
    }
 
    // destructor
    function __destruct() {
         
    }
 
    public function order($email, $kodepemesanan, $tempat, $tanggal, $seatcode) {
        $stmt = $this->conn->prepare("INSERT into pemesanan (email, kode_pemesanan, tempat_pemesanan, tanggal_pemesanan, seat_code) VALUES(?,?,?,?,?)");
        $stmt->bind_param("sisss", $email, $kodepemesanan, $tempat, $tanggal, $seatcode);

        $result = $stmt->execute();
        $stmt->close();

        if ($result) {
            $stmt = $this->conn->prepare("SELECT email, kode_pemesanan from pemesanan WHERE email = ?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $user->get_result();
            return $result;
        } else {
            return NULL;
        }

    }
 
    /**
     * Get user berdasarkan email dan password
     */
    public function getUserByEmailAndPassword($email, $password) {
 
        $stmt = $this->conn->prepare("SELECT * FROM user WHERE email = ?");
 
        $stmt->bind_param("s", $email);
 
        if ($stmt->execute()) {
            $user = $stmt->get_result()->fetch_assoc();
            $stmt->close();
 
            // verifikasi password user
            $salt = $user['salt'];
            $encrypted_password = $user['encrypted_password'];
            $hash = $this->checkhashSSHA($salt, $password);
            // cek password jika sesuai
            if ($encrypted_password == $hash) {
                // autentikasi user berhasil
                return $user;
            }
        } else {
            return NULL;
        }
    }

    public function viewHistoryOrder($id_user){

        $stmt = $this->conn->prepare("SELECT a.tanggal, a.status, b.nama_paket from pesan_produk a INNER JOIN produk b on a.id_paket = b.id_paket WHERE a.id_user = ?");
        $stmt->bind_param("i", $id_user);

        $stmt->execute();

        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            $history = array();
             while ($fetch = $result->fetch_assoc()) {

                $history[] = $fetch;
        
            }

            return $history;

        } else {
            return NULL;
        }

    }
    
    public function orderpesan($user, $paket, $jumlah, $total_harga, $tanggal){

        $stmt = $this->conn->prepare("INSERT INTO pesan_produk (id_user, id_paket, jumlah, total_harga, tanggal) VALUES (?, ?, ?, ?, ?)");
        
        $stmt->bind_param("iiiis", $user, $paket, $jumlah, $total_harga, $tanggal);

        $result = $stmt->execute();

        $stmt->close();

        if ($result) {
            
            return $result;   
        } else {
            return NULL;
        }

    }

    public function getAllProduct() {

        $stmt = $this->conn->prepare("SELECT id_paket, nama_paket, komposisi, harga, gambar from produk");

        $stmt->execute();

        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $produk = array();
             while ($fetch = $result->fetch_assoc()) {

                $produk[] = $fetch;
                /*$produk = array(
                    'id_paket' => $fetch['id_paket'],
                    'nama_paket' => $fetch['nama_paket'],
                    'komposisi' => $fetch['komposisi'],
                    'harga' => $fetch['harga']
                );*/
        
            }

            return $produk;

        } else {
            return NULL;
        }
 
    }

    public function isUserExisted($email) {
        $stmt = $this->conn->prepare("SELECT email from user WHERE email = ?");
 
        $stmt->bind_param("s", $email);
 
        $stmt->execute();
 
        $stmt->store_result();
 
        if ($stmt->num_rows > 0) {
            // user telah ada 
            $stmt->close();
            return true;
        } else {
            // user belum ada 
            $stmt->close();
            return false;
        }
    }
 
    /**
     * Encrypting password
     * @param password
     * returns salt and encrypted password
     */
    public function hashSSHA($password) {
 
        $salt = sha1(rand());
        $salt = substr($salt, 0, 10);
        $encrypted = base64_encode(sha1($password . $salt, true) . $salt);
        $hash = array("salt" => $salt, "encrypted" => $encrypted);
        return $hash;
    }
 
    /**
     * Decrypting password
     * @param salt, password
     * returns hash string
     */
    public function checkhashSSHA($salt, $password) {
 
        $hash = base64_encode(sha1($password . $salt, true) . $salt);
 
        return $hash;
    }
 
}
 
?>