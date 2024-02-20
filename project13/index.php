<!-- courses.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Danh sách khóa học</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    // Dữ liệu khóa học lưu động trong mảng
    $courses = [
        [
            'img' => 'https://images.unsplash.com/photo-1708269311289-fc780cf2cfdc?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'title' => 'Lập trình viên quốc tế',
            'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
quốc tế.',
            'fee' => '15.000.000 VND',
            'start_date' => '2/2/24',
            'duration' => '2 - 2.5 năm'
        ],
        [
            'img' => 'https://images.unsplash.com/photo-1707430393809-784967fe6fee?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'title' => 'Lập trình viên WEB FULLSTACK',
            'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
quốc tế.',
            'fee' => 'Ưu đãi giảm 15% học phí',
            'start_date' => '2/2/24',
            'duration' => '2 - 2.5 năm'
        ],
        [
            'img' => 'https://images.unsplash.com/photo-1707343844152-6d33a0bb32c3?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'title' => 'Lập trình JAVA FULLSTACK',
            'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
quốc tế.',
            'fee' => 'Ưu đãi giảm 15% học phí',
            'start_date' => '2/2/24',
            'duration' => '2 - 2.5 năm'
        ],
        [
            'img' => 'https://images.unsplash.com/photo-1708035900782-58f2815aa5bd?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'title' => 'lập trình PHP & LARAVEL',
            'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
quốc tế.',
            'fee' => '15.000.000 VND',
            'start_date' => '2/2/24',
            'duration' => '2 - 2.5 năm'
        ],
        [
            'img' => 'https://images.unsplash.com/photo-1707343848873-d6a834b5f9b9?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'title' => 'Khóa học lập trình .NET',
            'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
quốc tế.',
            'fee' => '15.000.000 VND',
            'start_date' => '2/2/24',
            'duration' => '2 - 2.5 năm'
        ],
        [
            'img' => 'https://images.unsplash.com/photo-1690885732016-f44e973ed3bf?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'title' => 'Lập trình SQL SERVER',
            'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
quốc tế.',
            'fee' => '15.000.000 VND',
            'start_date' => '2/2/24',
            'duration' => '2 - 2.5 năm'
        ],
        // Thêm các khóa học khác vào đây
    ];
    // Hiển thị danh sách khóa học
    echo '<div class="title">Khóa học sắp khai giảng</div>';
    echo '<div class="container">';
    foreach ($courses as $course) {

        echo '<div class="course">';
        echo '<img class="course-img" src="' . $course['img'] . '" alt="' . $course['title'] . '">';
        echo '<h2>' . $course['title'] . '</h2>';
        echo '<p>' . $course['description'] . '</p>';
        echo '<div class="course-info"><i class="gift fa-solid fa-gift"></i><p style="margin-left: 10px;">Học phí: ' . $course['fee'] . '</p></div>';
        echo '<div class="course-info"><i class="clock fa-solid fa-clock"></i><p style="margin-left: 10px;">Khải giảng: ' . $course['start_date'] . '</p></div>';
        echo '<div class="course-info"><i class="fa-solid fa-bookmark"></i><p style="margin-left: 10px;">Thời lượng: ' . $course['duration'] . '</p></div>';
        echo '</div>';
    }
    echo '</div>';
    ?>
</body>

</html>