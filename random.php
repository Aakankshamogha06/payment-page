<?php

echo"1. ";
//Generates a random integer using the Mersenne Twister algorithm.
$random_number = mt_rand(1, 100); // Random number between 1 and 100
echo "Random Number: $random_number";




echo"<br>";
echo"2. ";
//Generates a pseudo-random float value between 0 and 1 using a linear congruential generator.
$random_float = lcg_value();
echo "Random Float: $random_float";




echo"<br>";
echo"3. ";
//Used to select one or more random keys from an array.
$array = array('apple', 'banana', 'cherry', 'date');
$random_key = array_rand($array);
$random_value = $array[$random_key];
echo "Random Value: $random_value";





echo"<br>";
echo"4. ";
//Generates a unique identifier based on the current time in microseconds.
$unique_id = uniqid('prefix_');
echo "Unique ID: $unique_id";




echo"<br>";
echo"5. ";
//Generates a random integer using a less advanced algorithm.
$random_number = rand(1, 100); // Random number between 1 and 100
echo "Random Number: $random_number";




echo"<br>";
echo"6. ";
//Symmetric Encryption (AES) Advanced Encryption Standard
$plaintext = 'This is a secret message';
$key = openssl_random_pseudo_bytes(32); // 256-bit key
$cipher = 'aes-256-cbc';
$iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length($cipher));

$encrypted = openssl_encrypt($plaintext, $cipher, $key, 0, $iv);
echo "Encrypted: $encrypted\n";
echo"<br>";
$decrypted = openssl_decrypt($encrypted, $cipher, $key, 0, $iv);
echo "Decrypted: $decrypted\n";




echo"<br>";
echo"7. ";
//cryptographically secure random number generators
$random_key = bin2hex(random_bytes(32)); // 256-bit key
echo "Random Key: $random_key\n";
?>