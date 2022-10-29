
<?php
//Подключение к БД
$db = mysqli_connect("localhost","root", "","cores");
mysqli_query($db,"set names utf8");

if(isset($_POST['run'])){
  $password = $_POST['password'];
  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $adress = $_POST['adress'];
  $lk_num = $_POST['lk_num'];
  
  
  //Выполнение запроса на добавление
  $ir = "INSERT INTO payer(name, surname, password, adress, lk_num) VALUES ('$name', '$surname', '$password','$adress', '$lk_num')";
  $ir_run = mysqli_query($db, $ir);
  if ($ir_run=='true')
  {
  echo "<script>alert('Успешно')</script><meta http-equiv='refresh' content='0; url=dbauthorization.php'>";
    }
  else
  {
  echo "<script>alert('Ошибка')</script><meta http-equiv='refresh' content='0; url=index.php'>";
    }
    header('Location: auth.php');
}
//Занесение в переменные ранее введенные данные
?>
   