<?php

session_start(); //untuk memulai sesi

if(isset($_SESSION['username'])){
    header("Location: dashboard.php");
    exit();
}

$user = [
    'admin1' => 'password123',
    'user1' => 'password321',
];

//pengecekkan yang pertama
if(isset($_POST['submit_login'])){
    //ini ambil dari sata super global variabel $_post
$username =$_POST['txt_username']; //admin1
$password =$_POST['txt_password']; //password123 

if(isset($user[$username]) && $user[$username] === $password){
    //ini kondisi true
    $_SESSION['username'] = $username;
    header("Location: dashboard.php");
    exit();
}else{
    //kondisi false
    $err = "Password atau Username salah.";
}
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
    <?php if(isset($err)): ?>
    <p style="color: red; margin-bottom: 16px"><?= $err; ?></p>
    <?php endif; ?>
    
    <form method="POST">
    <div style="margin-bottom: 16px;">
    <label style="margin-bottom: 8px; display: block;" >Username</label>
    <input type="text" name="txt_username" placeholder="Username"/>
</div>

<div style="margin-bottom: 16px;">
    <label style="margin-bottom: 8px; display: block;">Password</label>
    <input type="password" name="txt_password" placeholder="Password"> 
</div>
<div>
<button type="submit" name="submit_login">submit</button>
    </div>
</form>
</body>
</html>