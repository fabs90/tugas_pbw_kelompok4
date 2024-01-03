<?php
require './controller/UserReviewController.php';
require './views/add_rating.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btnAddRating'])) {

    // Form validation logic
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $message = isset($_POST['message']) ? trim($_POST['message']) : '';

    // Example validation: Checking if required fields are not empty
    if (empty($name) || empty($email) || empty($message)) {
        // Handle validation error, for example, redirect back to the form with an error message
        header("Location: /path/to/your/form.php?error=Fields cannot be empty");
        exit();
    }

    // Additional validation logic as needed

    // If the validation passes, you can proceed with further actions (e.g., database insertion)
    // Example: Insert data into the database
    // $db->insertReview($name, $email, $message);

    // Redirect to a success page or wherever you need
    header("Location: /path/to/success-page.php");
    exit();
}
