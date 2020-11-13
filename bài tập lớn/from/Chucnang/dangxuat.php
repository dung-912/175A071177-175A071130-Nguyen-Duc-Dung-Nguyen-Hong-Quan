<?php
    session_start();
    unset($name);
    session_destroy();
    header("Location: ../dangnhap.php");
?>