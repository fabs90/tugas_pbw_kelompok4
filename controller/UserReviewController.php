<?php
require '../config/connection.php';
$errors = array();
$success = array();

class UserReviewController
{
    // Fungsi untuk menampilkan seluruh data review
    public function index()
    {
        // Membuat objek ke class database
        $db = new Database();

        // Membuka koneksi ke database
        $mysqli = $db->connect();

        // Query semua data
        $query = "SELECT * FROM user_reviews";

        // Execute query
        $result = $mysqli->query($query);

        // Cek, jika data table tidak kosong
        if ($result) {
            $hasil = array(); // Inisialisasi array hasil

            // Jadiin fetch & tampung ke array hasil
            while ($row = $result->fetch_assoc()) {
                $hasil[] = $row;
            }

            // Menutup koneksi
            $mysqli->close();

            // Nilai kembalian dalam bentuk array assoc
            return $hasil;
        } else {
            // Jika query gagal, handle error sesuai kebutuhan Anda
            echo "Error: " . $mysqli->error;
        }
    }

    public function store($request)
    {
        // Membuat objek ke class database
        $db = new Database();

        // membuka koneksi ke database (var mysqli bisa dibilang api antara aplikasi dan db)
        $mysqli = $db->connect();

        // Bersihkan data request
        $name = $mysqli->real_escape_string($request['name']);
        $star_rating = intval($request['star_rating']);
        $email = $mysqli->real_escape_string($request['email']);
        $message = $mysqli->real_escape_string($request['message']);
        $image = $mysqli->real_escape_string($request['image']);

        $query = "INSERT INTO user_reviews(name, star_rating, email, messages, image)
                  VALUES ('$name', $star_rating, '$email', '$message', '$image')";

        // Query ke dalam database
        $result = $mysqli->query($query);

        // Cek apakah data berhasil masuk
        if ($result) {
            return true;
        }
        return false;
    }

}
