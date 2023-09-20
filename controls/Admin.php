<?php
require 'db.php';
$n=10;
function getName($n) {
    $characters = '012345admABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';

    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }

    return $randomString;
}

    $matricule = getName($n);

    $pass=password_hash("Focep2023",PASSWORD_BCRYPT);
    $stmt=$pdo->prepare("insert into administrateurs values
                                ('$matricule', 'Focep','microfinance','Focep@gmail.com',null,'$pass')");
    if($stmt->execute()) echo "Admin Added";
