<?php
class database
{
// Membuat method koneksi ke database

    public function connect()
    {
        $db = new mysqli(hostname: 'localhost', username: 'root', password: '', database: 'pbw_kelompok5');

        if ($db->connect_errno) {
            echo "Database tidak dapat terhubung";
            exit();
        }

        return $db;
    }
}
