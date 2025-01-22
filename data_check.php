<?php
session_start();  // Start the session

$host = "localhost";
$user = "root";
$password = "";
$db = "collegeproject";

// Establish connection to the database
$data = mysqli_connect($host, $user, $password, $db);

if ($data === false) {
    die("Connection error: " . mysqli_connect_error());  // Handle connection failure
}

if (isset($_POST['apply'])) {
    // Sanitize user input to prevent SQL injection
    $data_name = mysqli_real_escape_string($data, $_POST['name']);
    $data_email = mysqli_real_escape_string($data, $_POST['email']);
    $data_phone = mysqli_real_escape_string($data, $_POST['phone']);
    $data_message = mysqli_real_escape_string($data, $_POST['message']);

    // Prepare the SQL query to insert form data into the database
    $sql = "INSERT INTO admission_home (Name, Email, Phone, Message) 
            VALUES ('$data_name', '$data_email', '$data_phone', '$data_message')";

    // Execute the query
    $result = mysqli_query($data, $sql);

    if ($result) {
        // Set a session message if the insertion is successful
        $_SESSION['message'] = "Your Application Request Sent Successfully!";
        // Redirect to index.php
        header("Location: index.php");
        exit();  // Stop further script execution after redirect
    } else {
        echo "Apply failed. Please try again.";  // Error message if the query fails
    }
}
?>

