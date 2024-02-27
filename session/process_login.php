<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    //Lay ra DL tu form
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    //Kiem tra CSDL
    if($user == 'quynhanh' && $pass == 'abc'){
        session_start();
        $_SESSION['isLogin'] == $user; //Cap the
        header('Location: login.php');
    }else{
        header("Location: http://tlu.edu.vn");
    }
}