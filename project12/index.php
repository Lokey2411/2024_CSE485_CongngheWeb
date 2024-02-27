<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://kit.fontawesome.com/1ce18db8ca.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    nav {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
    }

    nav>ul {
        display: flex;
        align-items: center;
        background-color: darkblue;
        padding: 0 8px;
    }

    li {
        list-style: none;
        color: #fff;
        cursor: pointer;
    }

    .item {
        border-left: 1px solid #fff;
        text-transform: uppercase;
        position: relative;
        padding: 8px;
    }

    .subitems {
        position: absolute;
        top: 100%;
        left: 0;
        width: fit-content;
        display: none;
    }

    .subitems>.sub-item {
        background-color: cadetblue;
        padding: 4px 8px;
        color: #fff;
        border-top: 1px solid #eee;
        /* display: none; */
    }

    .item:hover {
        background-color: cyan;
    }

    .item:hover>.subitems,
    .subitems:hover,
    .sub-item:hover {
        /* visibility: true;
         */
        display: block;
        transition: 0.4s;
    }

    .icon {
        border: none
    }
    </style>
</head>

<body>
    <?php
    $eduItems = [
    "Sub Item 1",
    "Sub Item 2",
    "Sub Item 3"
    ];
$navItems = [
    ["title"=> "GIỚI THIỆU","subitems"=>[] ],
    ["title"=> "TIN TỨC & THÔNG BÁO","subitems"=>[]],
    ["title"=> "TUYỂN SINH","subitems"=>$eduItems],
    ["title"=> "ĐÀO TẠO","subitems"=>[]],
    ["title"=> "NGHIÊN CỨU","subitems"=>[]],
    ["title"=> "ĐỐI NGOẠI","subitems"=>[]],
    ["title"=> "VĂN BẢN","subitems"=>[]],
    ["title"=> "SINH VIÊN","subitems"=>[]],
    ["title"=> "LIÊN HỆ","subitems"=>[]]
];

    echo '<nav><ul>';
    echo "<li class='item icon'>
    <i class='fa-solid fa-house'></i>
    </li>";
    foreach ($navItems as $item) {
    echo "<li class='item'>{$item['title']} <ul class='subitems'>";
        foreach ($item['subitems'] as $subitem) {
        echo "<li class='sub-item'>$subitem</li>";
        }
    echo "</ul> </li>";
    }
    echo '</ul></nav>';
?>

</body>

</html>
