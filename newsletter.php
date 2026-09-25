<?php
if (isset($_POST['subscribe'])) {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

        // Save email to a file (simple storage, replace with DB if needed)
        $file = 'subscribers.txt';
        file_put_contents($file, $email.PHP_EOL, FILE_APPEND | LOCK_EX);

        // Optional: send confirmation email
        $subject = "Subscription Confirmation";
        $message = "Thank you for subscribing to our newsletter!";
        $headers = "From: vermaabhishek79326@gmail.com";

        mail($email, $subject, $message, $headers);

        echo "<script>alert('Thank you for subscribing!'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Please enter a valid email address!'); window.history.back();</script>";
    }
} else {
    header("Location: index.php");
    exit;
}
?>
