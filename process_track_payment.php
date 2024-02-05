<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize the inputs (you may add more validation as needed)
    $cardNumber = filter_input(INPUT_POST, 'card_number');
    $transactionDate = filter_input(INPUT_POST, 'transaction_date');

    // Perform server-side validation (add more validation as needed)
    if (empty($cardNumber) || empty($transactionDate)) {
        echo "Error: Please enter Card Number and Transaction Date.";
        exit();
    }

    // Perform database connection (replace with your database credentials)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "payment";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert data into the track_payments table
    $sql = "INSERT INTO track_payments (card_number, transaction_date) VALUES ('$cardNumber', '$transactionDate')";

    if ($conn->query($sql) === TRUE) {
        echo "Track payment form submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
} else {
    // If the form is not submitted through POST request, return an error message
    echo "Error: Invalid request.";
}
?>
