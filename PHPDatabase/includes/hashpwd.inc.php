<?php
    $pwdSignup = "BRITO";
    $options = [
        'cost' => 12
    ];

    $hashedPwd = password_hash($pwdSignup, PASSWORD_DEFAULT, $options);

    $pwdLogin = "BRITO";
    if (password_verify($pwdLogin, $hashedPwd)) {
        echo "Password matched";
    } else {
        echo "ERROR: Password didn't match";
    }
    
/* $sensitiveData = "DAVI";
$salt = bin2hex(random_bytes(16));
$pepper = "ASecretPepperString";

$dataToHash = $sensitiveData . $salt . $pepper;
$hash = hash("sha256", $dataToHash);

// DATABASE ^^^^^

$sensitiveData = "DAVI";

$storedSalt = $salt;
$storedHash = $hash;
$pepper = "ASecretPepperString";

$dataToHash = $sensitiveData . $storedSalt . $pepper;

$verificationHash = hash("sha256", $dataToHash);

if ($storedHash === $verificationHash) {
    echo "The data matches";
} else {
    echo "ERROR: hash does not match";
} */