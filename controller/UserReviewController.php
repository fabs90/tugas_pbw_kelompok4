<?php
require '../config/connection.php';
$errors = array();
$success = array();

class UserReviewController
{
    // Fungsu untuk menampilkan seluruh data review

    public function index()
    {
        // Membuat objek ke class database
        $db = new database();

        // membuka koneksi ke database (var mysqli bisa dibilang api antara aplikasi dan db)
        $mysqli = $db->connect();

        // Query semua data
        $query = "SELECT * FROM user_reviews";

        // execute query
        $result = $mysqli->query($query);

        // Cek, jika data table tidak kosong
        if ($result->num_rows > 0) {
            // Jadiin fetch & tampung ke array hasil
            while ($row = $result->fetch_object()) {
                $hasil[] = $row;
            }
        }

        // Menutup koneksi
        $mysqli->close();

        // Nilai kembalian dalam bentuk array assoc
        return $hasil;
    }

    public function store($request)
    {
        // Membuat objek ke class database
        $db = new database();

        // membuka koneksi ke database (var mysqli bisa dibilang api antara aplikasi dan db)
        $mysqli = $db->connect();

        // bersihkan data request
        $name = $mysqli->real_escape_string($request->name);
        $email = $mysqli->real_escape_string($request->email);
        $message = $mysqli->real_escape_string($request->message);
        $image = $mysqli->real_escape_string($request->imageFileUpload);

        $query = "INSERT INTO user_reviews(name,email,messages,image) values('$name','$email','$message','$image')";

        // Query kedalam database
        $result = $mysqli->query($query);

        // Cek apakah data berhasil masuk
        if ($result) {
            return true;
        }
        return false;

    }
}
