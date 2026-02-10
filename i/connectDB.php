<?php
$host = "localhost";
$user = "root";
$pwd  = "Acc123456#";
$DB   = "4098db";

$conn = mysqli_connect($host, $user, $pwd, $DB);

if (!$conn) {
    die("เชื่อมต่อฐานข้อมูลไม่ได้: " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8mb4");
?>

