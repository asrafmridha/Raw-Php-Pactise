<?php

session_start();

$_SESSION['flash_message'] = "I'm a flash message";

if (isset($_SESSION['flash_message'])) {
    $message = $_SESSION['flash_message'];
    unset($_SESSION['flash_message']);
    echo $message;
}
