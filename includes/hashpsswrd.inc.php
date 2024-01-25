<?php 

// $sensitive_data = "vasquez";
// $salt = bin2hex(random_bytes(16));  //generate random salt
// $pepper = "ASecretPepperString";

// echo $salt;

// $dataToHash = $sensitive_data . $salt . $pepper;
// $hash = hash("sha256", $dataToHash);

// echo "<br>" . $hash . "<br>";

// /////////////////////////////

// $sensitive_data = "vasquez";

// $storedSalt = $salt;
// $storedHash = $hash;

// $pepper = "ASecretPepperString";

// $dataToHash = $sensitive_data . $storedSalt . $pepper;

// $verificationHash = hash("sha256", $dataToHash);

// if ($storedHash == $verificationHash) {
//     echo "<h1>The data is the same.<h/1>";
// }
// else {
//     echo "The data is not the same";
// }


$psswrdSignUp = "jilbert";

// PASSWORD_DEFAULT -> CAN BE UPDATED

$options = [
    'cost' => 12
];

$hashedPassword = password_hash($psswrdSignUp, PASSWORD_BCRYPT, $options);

$psswrdLogin = "jilbert";

if (password_verify($psswrdLogin, $hashedPassword)) {
        echo "<h1>The data is the same.<h/1>";
    }
    else {
        echo "The data is not the same";
    }