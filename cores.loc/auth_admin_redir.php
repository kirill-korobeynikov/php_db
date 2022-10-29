<?php
    session_start();

    $db = mysqli_connect("localhost","root", "","cores");
    mysqli_query($db,"set names utf8");

    $login = $_POST['login'];
    $password = $_POST['password'];

    //Выполняю выборку, где ищу в массиве нужные строчки и сравниваю их с данными из БД
    $check_employee = mysqli_query($db, "SELECT * FROM `employee` WHERE `login` = '$login' AND `password` = '$password'");
    if (mysqli_num_rows($check_employee) > 0) {

        $employee = mysqli_fetch_assoc($check_employee);

        $_SESSION['employee'] = [
            "name" => $employee['name']
        ];

       header('Location: admin_panel.php');  //Переносит на страницу профиля

    } else {
        $_SESSION['message'] = 'Не верный логин или пароль';
        header('Location: auth.php'); //Переносит на главную
    }
    ?>