<?php 
include 'account.php';
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$user = null;
if(isset($users)){
    foreach($users as $u){
        if($u['username'] == $username){
            $user = $u;
            break;
        }
    }
}

if($user && password_verify($password, $uuser['password'])){
    $_SESSION['user_id'] = $user['username'];
    setcookie('logged_in', true, time()+60*60*24*30, "/");
    header('Location: profile.php');
}else{
    $_SESSION['error'] = "Incorrect username or password";
    header('Location: profile.php');
}
?>