<?php
require 'controller/UserReviewController.php';
$success = [];
$errors = [];

// Create const error msg
const NAME_REQUIRED = 'Please enter your name (minimal : 3)';
const EMAIL_REQUIRED = 'Please enter your email';
const STARS_RATING_REQUIRED = 'Please fill your star rating';
const MESSAGE_REQUIRED = 'Please enter your messages';
const IMAGE_REQUIRED = 'Please upload your image';
const EMAIL_INVALID = 'Please enter a valid email';

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["ratingButton"])) {

    $request = [];

    // Validasi name
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    if ($name && strlen($name) > 3) {
        $request["name"] = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
    } else {
        $errors['name'] = NAME_REQUIRED;
    }

// Validasi email
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    if ($email && strlen($email) > 6) {
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
        if ($email === false) {
            $errors['email'] = EMAIL_INVALID;
        }
        $request["email"] = $email;
    } else {
        $errors['email'] = EMAIL_REQUIRED;
    }

    // Validasi star
    $star_rating = filter_input(INPUT_POST, 'star_rating', FILTER_SANITIZE_NUMBER_INT);
    if ($star_rating !== false) {
        $request['star_rating'] = intval($star_rating);
    } else {
        $errors['star_rating'] = STARS_RATING_REQUIRED;
    }

    // Validasi message
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
    if ($message !== false) {
        $request['message'] = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');
    } else {
        $errors['message'] = MESSAGE_REQUIRED;
    }

    if (!empty($errors)) {
        echo "<script type='text/javascript'> alert('Data gagal ditambah!😔'); document.location.href='add_rating.php';</script>";
        exit();
    }

    // Validasi image
    if (isset($_FILES["image"]) && $_FILES["image"]["error"] === UPLOAD_ERR_OK) {

        $result = validateAndStoreImage($_FILES["image"], $request);
        if ($result) {
            $success['store'] = "Data berhasil ditambah";
            header("location:add_rating.php");
            return $success;
        }
        $errors['image'] = "Gagal mengirim foto";
        header("location:add_rating.php");

    }
    $errors['image'] = "Gagal mengirim foto";
    header("location:add_rating.php");
    return $errors;

}

function validateAndStoreImage($file, $request)
{
    $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
    $nama = $file['name'];
    $x = explode('.', $nama);
    $ekstensi = strtolower(end($x));
    $ukuran = $file['size'];
    $file_tmp = $file['tmp_name'];

    if (in_array($ekstensi, $ekstensi_diperbolehkan)) {
        if ($ukuran < 8 * 1024 * 1024) {
            $timestamp = time(); // Waktu saat ini sebagai timestamp
            $nama_baru = $timestamp . '_' . $nama; // Gabungkan timestamp dengan nama file

            $destination = __DIR__ . '/storage/' . $nama_baru;
            if (move_uploaded_file($file_tmp, $destination)) {
                $request["image"] = $nama_baru;
                $obj1 = new UserReviewController();
                if ($obj1->store($request)) {
                    echo "<script type='text/javascript'> alert('Data berhasil ditambah!😁'); document.location.href='add_rating.php';</script>";
                    exit();
                } else {
                    $errors['image'] = "Gagal menyimpan data";
                }
            } else {
                $errors['image'] = "Gagal memindahkan foto ke folder tujuan";
            }
        } else {
            $errors['image_size'] = "Ukuran foto terlalu besar, maksimal 8 MB";
        }
    } else {
        $errors['image'] = "Ekstensi file tidak diperbolehkan";
    }

    return $errors;
}
