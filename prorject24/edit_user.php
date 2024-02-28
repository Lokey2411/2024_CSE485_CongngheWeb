<?php
require "data.php";
session_start();

if (!isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in']) ||$_SESSION['user_role'] !== "admin") {
    header('Location: login.php');
}

$username = $_GET['username']; 
$user = null;

foreach ($users as $u) {
    if ($username == $u['username']) {
        $user = $u;
    }
}

echo "<h2>Edit User: " . $user['name'] . "</h2>";