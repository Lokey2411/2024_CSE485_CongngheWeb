<?php
$products = [
    [
        "id" => 1,
        "name" => "T-shirt",
        "price" => '100.000 VND',
        "description" => "Comfortable and stylish.",
        "image" => "t-shirt.avif"
    ],
    [
        "id" => 2,
        "name" => "Pants",
        "price" => '150.000 VND',
        "description" => "Comfortable and stylish.",
        "image" => "pants.jfif"
    ],
    [
        "id" => 3,
        "name" => "Shoes",
        "price" => '200.000 VND',
        "description" => "Comfortable and stylish.",
        "image" => "shoes.avif"
    ],
    [
        "id" => 4,
        "name" => "Jeans",
        "price" => '100.000 VND',
        "description" => "Comfortable and stylish.",
        "image" => "jeans.jfif"
    ],
    [
        "id" => 5,
        "name" => "T-shirt",
        "price" => "100.000 VND",
        "description" => "Comfortable and stylish.",
        "image" => "t-shirt.avif"
    ],
    [
        "id" => 6,
        "name" => "Pants",
        "price" => '150.000 VND',
        "description" => "Comfortable and stylish.",
        "image" => "pants.jfif"
    ],
    [
        "id" => 7,
        "name" => "Shoes",
        "price" => "200.000 VND",
        "description" => "Comfortable and stylish.",
        "image" => "shoes.avif"
    ],
    [
        "id" => 8,
        "name" => "Jeans",
        "price" => '100.000 VND',
        "description" => "Comfortable and stylish.",
        "image" => "jeans.jfif"
    ]
];

$itemsPerPage = 4;
$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
$totalPages = ceil(count($products) / $itemsPerPage);
$currentPageItems = array_slice($products, ($currentPage - 1) * $itemsPerPage, $itemsPerPage);
?>