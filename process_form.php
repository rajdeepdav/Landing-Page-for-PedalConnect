<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];

    // Validate form data (you can add more validation)
    if (empty($name) || empty($email)) {
        echo "Please fill out all fields.";
    } else {
        // Process form data (e.g., store in database)
        // Here you can add your database connection code and insert query
        
        // For demonstration, we'll just echo the submitted data
        echo "Thank you, $name! You have successfully signed up with email: $email";
    }
} else {
    // Redirect back to the form if accessed directly
    header("Location: index.html");
    exit;
}
?>
