<!-- courses.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://kit.fontawesome.com/1ce18db8ca.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách khóa học</title>
    <style>
    /* Thêm các định kiểu CSS của bạn ở đây */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .courses {
        display: flex;
        flex-wrap: wrap;
    }

    .course {
        width: 30%;
        background-color: #f9f9f9;
        margin-bottom: 20px;
        margin-left: 16px;
        margin-right: 16px;
    }

    .course h2 {
        color: #333;
        font-weight: bold;
        margin-top: 8px;
        margin-bottom: 16px;
        padding-left: 8px;
    }

    .course p {
        color: #666;
        margin-bottom: 16px;
        padding-left: 8px;
    }

    .icon {
        margin-right: 4px;
    }

    .main-title {
        padding-left: 4px;
        border-left: 5px red solid;
        color: red;
        margin-bottom: 16px;
    }

    .course img {
        width: 100%;
    }
    </style>
</head>

<body>
    <h1 class="main-title">
        Khóa học sắp khai giảng
    </h1>
    <div class="courses">
        <?php
 // Dữ liệu khóa học lưu động trong mảng
 $courses = [
 [
    "image" =>"https://cdn.tuoitre.vn/thumb_w/480/2021/7/10/screen-shot-2021-07-10-at-114922-1625892571909294221772.png",
 'title' => 'Học viên quốc tế',
 'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
quốc tế.',
 'fee' => '15.000.000 VND',
 'start_date' => '2/2/24',
 'duration' => '2 - 2.5 năm'
 ],
 [
    "image"=>"https://cdn.tuoitre.vn/thumb_w/480/2021/7/10/screen-shot-2021-07-10-at-114922-1625892571909294221772.png",
 'title' => 'Lập trình viên Web Fullstack',
 'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi nostrum ipsam mollitia! Vel, iusto ipsam. Delectus nisi quod, quaerat sed quasi recusandae, dolore odit beatae excepturi at, rerum iste aspernatur!.',
 'fee' => '15.000.000 VND',
 'start_date' => '2/2/24',
 'duration' => '2 - 2.5 năm'
 ],
 [
    "image"=>"https://cdn.tuoitre.vn/thumb_w/480/2021/7/10/screen-shot-2021-07-10-at-114922-1625892571909294221772.png",
 'title' => 'Lập trình viên Java',
 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam repudiandae minima consequatur, temporibus minus alias tenetur quaerat voluptatibus. Sequi animi quae enim consequuntur ipsam numquam saepe voluptatem iusto impedit vel.',
 'fee' => '15.000.000 VND',
 'start_date' => '2/2/24',
 'duration' => '2 - 2.5 năm'
 ],
 [
    "image"=>"https://cdn.tuoitre.vn/thumb_w/480/2021/7/10/screen-shot-2021-07-10-at-114922-1625892571909294221772.png",
 'title' => 'Lập trình viên Front-end',
 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam repudiandae minima consequatur, temporibus minus alias tenetur quaerat voluptatibus. Sequi animi quae enim consequuntur ipsam numquam saepe voluptatem iusto impedit vel.',
 'fee' => '15.000.000 VND',
 'start_date' => '2/2/24',
 'duration' => '2 - 2.5 năm'
 ],
 [
    "image"=>"https://cdn.tuoitre.vn/thumb_w/480/2021/7/10/screen-shot-2021-07-10-at-114922-1625892571909294221772.png",
 'title' => 'Lập trình viên Back-end',
 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam repudiandae minima consequatur, temporibus minus alias tenetur quaerat voluptatibus. Sequi animi quae enim consequuntur ipsam numquam saepe voluptatem iusto impedit vel.',
 'fee' => '15.000.000 VND',
 'start_date' => '2/2/24',
 'duration' => '2 - 2.5 năm'
 ],
 [
    "image"=>"https://cdn.tuoitre.vn/thumb_w/480/2021/7/10/screen-shot-2021-07-10-at-114922-1625892571909294221772.png",
 'title' => 'Data Engineer',
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
 foreach ($courses as $course) {
 echo '<div class="course">';
 echo '<img src="' . $course['image'] .'" />';
 echo '<h2 class="title">' . $course['title'] . '</h2>';
 echo '<p class="desc">' . $course['description'] . '</p>';
 echo ' <p><i class="fa-solid fa-gift icon"></i>Học phí: ' . $course['fee'] . '</p>';
 echo '<p><i class="fa-solid fa-clock icon"></i>Khải giảng: ' . $course['start_date'] . '</p>';
 echo '<p><i class="fa-solid fa-bookmark icon"></i>Thời lượng: ' . $course['duration'] . '</p>';
 echo '</div>';
 }
 ?>
    </div>

</body>

</html>