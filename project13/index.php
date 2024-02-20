<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="styles13.css">
    <title>Danh sách khóa học</title>
</head>
<body>
    <h1>KHÓA HỌC SẮP KHAI GIẢNG</h1>
    <?php
    // Dữ liệu khóa học lưu động trong mảng
    $courses = [
        [
            'title' => 'Học viên quốc tế',
            'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
quốc tế.',
            'fee' => '15.000.000 VND',
            'start_date' => '2/2/24',
            'duration' => '2 - 2.5 năm'
        ],
        // Thêm các khóa học khác vào đây
        [
            'title' => 'Khóa học Full-stack Development',
            'description' => 'Khóa học đào tạo full-stack development từ cơ bản đến nâng cao
.',
            'fee' => '20.000.000 VND',
            'start_date' => '5/5/24',
            'duration' => '1.5 - 2 năm'
        ],
        [
            'title' => 'Học viên quốc tế',
            'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
quốc tế.',
            'fee' => '15.000.000 VND',
            'start_date' => '2/2/24',
            'duration' => '2 - 2.5 năm'
        ],
        [
            'title' => 'Khóa học Full-stack Development',
            'description' => 'Khóa học đào tạo full-stack development từ cơ bản đến nâng cao
.',
            'fee' => '20.000.000 VND',
            'start_date' => '5/5/24',
            'duration' => '1.5 - 2 năm'
        ],
        [
            'title' => 'Học viên quốc tế',
            'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
quốc tế.',
            'fee' => '15.000.000 VND',
            'start_date' => '2/2/24',
            'duration' => '2 - 2.5 năm'
        ],
        [
            'title' => 'Khóa học Full-stack Development',
            'description' => 'Khóa học đào tạo full-stack development từ cơ bản đến nâng cao
.',
            'fee' => '20.000.000 VND',
            'start_date' => '5/5/24',
            'duration' => '1.5 - 2 năm'
        ]
    ];

    echo '<div class="container">';
    // Hiển thị danh sách khóa học
    foreach ($courses as $course) {
        echo '<div class="course">';
        // img
        echo '<h2>'.$course['title'].'</h2>';
        echo '<p>'.$course['description'].'</p>';
        echo '<p><i class="fa-solid fa-money-check-dollar"></i>Học phí: '.$course['fee'].'</p>';
        echo '<p><i class="far fa-calendar-alt"></i>Khai giảng: '.$course['start_date'].'</p>';
        echo '<p><i class="far fa-clock"></i>Thời lượng: '.$course['duration'].'</p>';
        echo '</div>';
    }
    echo '</div>';
    ?>
</body>
</html>