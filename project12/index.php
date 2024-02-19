<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    nav>ul {
        display: flex;
        align-items: center;
        background-color: darkblue;
        padding: 8px;
    }

    li {
        list-style: none;
        border-left: 1px solid #fff;
        text-transform: uppercase;
        padding: 0 8px;
        color: #fff;
    }
    </style>
</head>

<body>
    <?php
$navItems = [
 "GIỚI THIỆU",
 "TIN TỨC & THÔNG BÁO",
 "TUYỂN SINH",
 "ĐÀO TẠO",
 "NGHIÊN CỨU",
 "ĐỐI NGOẠI",
 "VĂN BẢN",
 "SINH VIÊN",
 "LIÊN HỆ"
];
echo '<nav><ul>';
foreach ($navItems as $item) {
 echo "<li>$item</li>";
}
echo '</ul></nav>';
?>

</body>

</html>