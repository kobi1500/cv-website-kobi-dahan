<?php

session_start();
session_destroy();
require_once ('../db/connect_db.php');
$conn = new connect_db();
if (isset($_POST['user']) && isset($_POST['password'])) {

    $username = $_POST['user'];
    $password = $_POST['password'];
    if ($conn->login($username, $password)) {
        $row = $conn->GetUserInfo($username, $password);
        if ($row['id'] == 1) {
            echo "Admin";
            session_start();
            $_SESSION['id'] = $row['id'];
            $_SESSION['fullname'] = $row['fullname'] . " ";
        } else if ($row['id'] == 2) {
            echo "visitor";
            session_start();
            $_SESSION['id'] = $row['id'];
            $_SESSION['fullname'] = $row['fullname'] . " ";
        }
    } else {
        echo "<script type='text/javascript'>alert('שם משתמש וסיסמא לא נכונים');</script>";
    }
}