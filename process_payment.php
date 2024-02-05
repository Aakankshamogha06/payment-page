<?php
// Include your database connection code here

// Get form data from the AJAX request
$cardNumber = $_POST['cardNumber'];
$reenteredCardNumber = $_POST['reenteredCardNumber'];
$accountNumber = $_POST['accountNumber'];
$reenteredAccountNumber = $_POST['reenteredAccountNumber'];
$mobileNumber = $_POST['mobileNumber'];
$emailAddress = $_POST['emailAddress'];
$amountToPay = $_POST['amountToPay'];
$bank_selection = $_POST['bank_selection'];
$card_selection = $_POST['card_selection'];

// Validate the data on the server-side if necessary

$mysqli = new mysqli("localhost", "root", "", "payment");
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$sql = "INSERT INTO payment_data (cardNumber, reenteredCardNumber, accountNumber, reenteredAccountNumber, mobileNumber, emailAddress, amountToPay, bank_selection, card_selection)
        VALUES ('$cardNumber', '$reenteredCardNumber', '$accountNumber', '$reenteredAccountNumber', '$mobileNumber', '$emailAddress', '$amountToPay', '$bank_selection', '$card_selection')";

if ($mysqli->query($sql) === TRUE) {
    echo "Form data stored successfully";
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();
?>
