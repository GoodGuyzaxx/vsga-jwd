<?php
$serverDB = 'localhost:3306';
$user = 'root';
$password = 'zaxx';
$name_database = 'jwd';
$db = mysqli_connect($serverDB, $user, $password, $name_database);
if (!$db) {
    die("Gagal terhubun 500" . mysqli_connect_error());
}
