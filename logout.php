<?php
//memulai sesi
session_start();

//dihapus sesi
session_destroy();

header("Location: login.php");
exit();
?>
