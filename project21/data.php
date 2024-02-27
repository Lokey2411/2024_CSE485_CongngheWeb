<?php
$products = [
    [
        "id" => 1,
        "name" => "T-Shirt",
        "price" => 15.99,
        "description" => "A comfortable and stylish T-Shirt."
    ],
    [
        "id" => 2,
        "name" => "knife",
        "price" => 20,
        "description" => "A comfortable and stylish Jean."
    ],
    [
        "id" => 3,
        "name" => "Jean",
        "price" => 23,
        "description" => "A comfortable and stylish Jean."
    ],
    [
        "id" => 4,
        "name" => "glove",
        "price" => 200,
        "description" => "A comfortable and stylish Jean."
    ],
    // ... add more products
];
// Đặt số mục trên mỗi trang
$itemsPerPage = 4;

// Truy cập số trang hiện tại từ URL
$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;

// Tính toán dữ liệu phân trang
$totalPages = ceil(count($products) / $itemsPerPage);
$currentPageItems = array_slice($products, ($currentPage - 1) * $itemsPerPage, $itemsPerPage);
