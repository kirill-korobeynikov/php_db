<?php
    session_start();

    $db = mysqli_connect("localhost","root", "","cores");
    mysqli_query($db,"set names utf8");

    $lk_num = $_POST['lk_num'];
    $password = $_POST['password'];
    //Выполняю выборку, где ищу в массиве нужные строчки и сравниваю их с данными из БД
    $check_user = mysqli_query($db, "SELECT * FROM `payer`, `price_plan`, `vls`, `pay_history` WHERE `lk_num` = '$lk_num' AND `PASSWORD` = '$password'");
    if (mysqli_num_rows($check_user) > 0) {

        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
            "name" => $user['name'],
            "surname" => $user['surname'],
            "lk_num" => $user['lk_num'],
            "adress" => $user['adress'],
            "id_payer" => $user['id_payer'],
            "price" => $user['price'],
            "pay_month" => $user['pay_month'],
            "pay_sum" => $user['pay_sum'],
            "sum_main" => $user['sum_main']

        
        ];
       

       header('Location: lk.php');  //Переносит на страницу профиля

    } else {
        $_SESSION['message'] = 'Не верный логин или пароль';
        header('Location: auth.php'); //Переносит на главную
    }
    ?>