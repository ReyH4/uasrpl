<?php
require 'connection.php';
$email = $_POST["email"];
$password = $_POST["password"];
$number = $_POST["number"];

$query_sql = "INSERT INTO registration (email, password, number)
            VALUES ('$email', '$password', '$number')";

if (mysqli_query($conn, $query_sql)) {
    header("Location: login.html");
} else {
    echo "Pendaftaran Gagal : " . mysqli_connect_error($conn);
}