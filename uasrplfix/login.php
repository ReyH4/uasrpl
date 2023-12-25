<?php
require 'connection.php';
$email = $_POST["email"];
$password = $_POST["password"];

$query_sql = "SELECT * FROM registration WHERE email = '$email' AND password = '$password'";

$result = mysqli_query ($conn, $query_sql);

if (mysqli_num_rows($result) > 0) {
    header("Location: index.html");
} else {
    echo "Silahkan coba login kembali";
}