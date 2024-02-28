<?php
$users = [
[
"username" => "quynhanh",
"password" => password_hash("password123", PASSWORD_DEFAULT),
"name" => "Quynh Anh",
"email" => "quynhanhtt@gmail.com",
"role" => "user"
],
[
"username" => "lanhuong",
"password" => password_hash("password456", PASSWORD_DEFAULT),
"name" => "Lan Huong",
"email" => "lanhuongst@gmail.com",
"role" => "admin"
]
];

$authorization_levels = [
"user" => [
"access_profile" => true,
"edit_profile" => true,
"access_admin_panel" => false,
],
"admin" => [
"access_profile" => true,
"edit_profile" => true,
"access_admin_panel" => true,
"manage_users" => true,
],
];
?>