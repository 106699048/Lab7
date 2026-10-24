<?php

session_start();

if (!isset($_SESSION['user'])) {
    header('Location: login.html');
    exit(); // escape if procedure after redirecting to login
}

include 'header.inc';
echo "Welcome to your Lab 7 session, " . htmlspecialchars($_SESSION['user']);
include 'footer.inc';

?>