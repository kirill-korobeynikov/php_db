<?php
session_start(); //Начало сессии
//Подключение к БД
$db = mysqli_connect("localhost","root", "","cores");
mysqli_query($db,"set names utf8");

if(isset($_POST['runner']) || isset($pay_month) || isset($pay_sum) || isset($id_payer)){

    $pay_month = $_POST['pay_month'];
    $pay_sum = $_POST['pay_sum'];
    $id_payer = $_SESSION['user'] ['id_payer'];
  
  
    //Выполнение запроса на добавление
    echo "hello";
    $ir = "DELETE FROM `vls` WHERE `id_payer`='$id_payer' and `mnth`='$pay_month'";
    
    $ir_run = mysqli_query($db, $ir);
    if ($ir_run=='true')
    {
      echo "hello";
      }
    else
    {
      echo "bye";
      }
      header( "Location: lk.php" );
  

}
//Занесение в переменные ранее введенные данные 
?>
   