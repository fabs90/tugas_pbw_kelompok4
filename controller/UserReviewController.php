<?php
require 'config/connection.php';
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
    }
}
