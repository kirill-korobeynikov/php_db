<?php
session_start(); //Начало сессии
//Подключение к БД
$db = mysqli_connect("localhost","root", "","cores");
mysqli_query($db,"set names utf8");


if(isset($_POST['run']) || isset($mnth) || isset($kvth) || isset($id_payer)){

    $mnth = $_POST['mnth'];
    $kvth = $_POST['kvth'];
    $id_payer = $_SESSION['user'] ['id_payer'];
    
  
    //Выполнение запроса на добавление
    echo "hello";
    $ir = "INSERT INTO vls (id_payer, kvth, mnth) VALUES ('$id_payer', '$kvth', '$mnth')";
    $ir_run = mysqli_query($db, $ir);
    if ($ir_run=='true')
    {
    echo "<script>alert('Успешно')</script><meta http-equiv='refresh' content='0; url=dbauthorization.php'>";
      }
    else
    {
    echo "<script>alert('Ошибка')</script><meta http-equiv='refresh' content='0; url=index.php'>";
      }
      header('Location: lk.php');
  

}
//Занесение в переменные ранее введенные данные 
?>
   