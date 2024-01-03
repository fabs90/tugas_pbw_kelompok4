<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["ratingButton"])) {

    // Validasi input
    $request["name"] = htmlspecialchars($_POST["name"]);
    $request["email"] = htmlspecialchars($_POST["email"]);
    $request["star"] = htmlspecialchars($_POST["star"]);
    $request["message"] = htmlspecialchars($_POST["message"]);
    $request["image"] = $_FILES["image"]['name'];

    header("Location:add_rating.php");

}
