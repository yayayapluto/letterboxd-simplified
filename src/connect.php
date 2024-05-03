<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "project");

//if
if (isset($_POST["action"])) {
    if ($_POST['action'] == 'register') {
        register();
    } else if ($_POST['action'] == 'login') {
        login();
    }
}

function register()
{
    global $conn;

    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Periksa apakah ada kolom yang kosong
    if (empty($email) || empty($username) || empty($password)) {
        echo 'Please fill out all fields';
        exit;
    }

    // Periksa apakah username sudah digunakan
    // Periksa apakah username sudah digunakan
    $user_check_query = "SELECT COUNT(*) as count FROM tb_user WHERE username='$username'";
    $result = mysqli_query($conn, $user_check_query);
    $row = mysqli_fetch_assoc($result);
    if ($row['count'] > 0) {
        echo 'Username already exists';
        exit;
    }


    // Masukkan data ke dalam database
    $query = "INSERT INTO tb_user (email, username, password) VALUES ('$email', '$username', '$password')";
    mysqli_query($conn, $query);
    echo 'Register successful';
}


function login()
{
    global $conn;

    $username = $_POST["username"];
    $password = $_POST["password"];

    $user = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username'");

    if (mysqli_num_rows($user) > 0) {
        $row = mysqli_fetch_assoc($user);

        if ($password == $row['password']) {
            echo 'login succesful';
            $_SESSION['login'] = true;
            $_SESSION['id'] = $row['id'];
        } else {
            echo 'worng password';
            exit;
        }
    } else {
        echo 'user not register';
        exit;
    }
}
