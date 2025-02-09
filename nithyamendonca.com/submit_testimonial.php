<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $message = htmlspecialchars($_POST['message']);

    // Ensure each testimonial entry is separated by a unique delimiter, e.g., "###"
    $testimonial = "$name\n$message\n###\n";

    // Append the testimonial to the file
    file_put_contents('testimonials.txt', $testimonial, FILE_APPEND);

    // Redirect back to the testimonials page
    header("Location: testimonials.php");
    exit();
}
?>
