   
<?php
session_start();

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if ($username === 'Yuri' && $password === 'Y106699048') {
    $_SESSION['user'] = $username;
    header('Location: welcome.php');
    exit();
} else {
    echo "Invalid login. <a href='login.html'>Try again</a>";
}
?>