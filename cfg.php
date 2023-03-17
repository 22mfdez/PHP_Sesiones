<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "test";

$conn = new PDO('mysql:host=' . $host . ';dbname=' . $db . '', $user, $password);
