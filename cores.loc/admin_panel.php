<?php
    $db = mysqli_connect("localhost","root", "","cores");
    mysqli_query($db,"set names utf8");
    session_start(); //Начало сессии
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="" type="image/x-icon"> 
  <link rel="stylesheet" href="css/fonts.css">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/admin_panel.css">
  <link rel="stylesheet" href="css/media.css">
  <title>Курсовая работа</title>
</head>

<body id="body">
  <div class="wrapper">
    <header class="header">
      <div class="header__top">
          <div class="header__container">
            <div class="header__top-inner">
              <a href="./index.php" class="header__logos">
                <img class="header__logo" href="./index.php" src="./images/Logo_admin.png" alt="">
              </a>
              <div class="header__btn-box">
                <a class="header__btn" href="./index.php">Выход</a>
              </div>
            </div>
          </div>
        </div>
    </header>
    <main class="main">
      <section class="main__personal personal">
      <h1 class="top-user-name">
                        <?=$_SESSION ['employee']['name']?>, добро пожаловать!
                      </h1>
                      <br></br>

    </main>
  </div>
  <div align="center";>
  <h1 class="top-user-name">
                        Таблица плательщиков
                      </h1>
                      <h1>
                        ____________________________________________________________________________________
                      </h1>
                      <br></br>
                      
  <?php
  error_reporting(E_ERROR | E_PARSE);
        echo "<table class='table'>";
        echo "<tr>";
        echo  "<th scope='col'>#</th>";
        echo  "<th scope='col'>Имя</th>";
        echo  "<th scope='col'>Фамилия</th>";
        echo  "<th scope='col'>Номер ЛС</th>";
        echo  "<th scope='col'>Адрес</th>";

        echo "</tr>";
			$db=mysqli_connect("localhost", "root", "", "cores");
			mysqli_query($db, "set names utf8");
			$r = mysqli_query($db, "select * from `payer`");
			$myrow = mysqli_fetch_array($r);
			do{
				echo "<tr>
				<form action = 'updatePayer.php' method = 'POST'>
					<td>$myrow[id_payer]</td>
					<td><input size='30' class='form-control', name = 'name' type='text' value='$myrow[name]'></td>
					<td><input size='25' class='form-control', name = 'surname' type='text' value='$myrow[surname]'></td>
          <td><input size='30' class='form-control', name = 'lk_num' type='text' value='$myrow[lk_num]'></td>
					<td><input size='25' class='form-control', name = 'adress' type='text' value='$myrow[adress]'></td>
					<td><input name='id_payer' type='checkbox' value='$myrow[id_payer]'></td>
					<td><input type='submit' class='btn btn-warning' value='Изменить'></td>
				</form>
				<td>
					<form action='deletePayer.php' method='POST'>
						<input name='id_payer' type='checkbox' value='$myrow[id_payer]'>
						<input name='submit' type='submit' class='btn btn-danger' value='Удалить'>
					</form>
				</td>
				</tr>";
			}
            while ($myrow = mysqli_fetch_array($r));
				
			echo "<tr>
				<form action = 'insertPayer.php' method = 'POST'>
					<td>$myrow[id_payer]</td>
          <td><input size='30' class='form-control', name = 'name' type='text' value='$myrow[name]'></td>
					<td><input size='25' class='form-control', name = 'surname' type='text' value='$myrow[surname]'></td>
          <td><input size='30' class='form-control', name = 'lk_num' type='text' value='$myrow[lk_num]'></td>
					<td><input size='25' class='form-control', name = 'adress' type='text' value='$myrow[adress]'></td>
					<td><input name='id_payer' type='checkbox' value='$myrow[id_payer]'></td>
					<td><input type='submit' class='btn btn-warning' value='Добавить'></td>
				</form>
				<td>
				</td>
				</tr>";

        echo "</table>";
        
        ?>
        <br></br>
        <br></br>
        <h1 class="top-user-name">
                        Таблица показаний
                      </h1>
                      <h1>
                        ____________________________________________________________________________________
                      </h1>
                      <br></br>
                 
                      
  <?php
  error_reporting(E_ERROR | E_PARSE);
        echo "<table class='table'>";
        echo "<tr>";
        echo  "<th scope='col'>#</th>";
        echo  "<th scope='col'>Плательщик</th>";
        echo  "<th scope='col'>Месяц</th>";
        echo  "<th scope='col'>КВт/ч</th>";

        echo "</tr>";
			$db=mysqli_connect("localhost", "root", "", "cores");
			mysqli_query($db, "set names utf8");
			$r = mysqli_query($db, "select * from `vls`");
			$myrow = mysqli_fetch_array($r);
			do{
				echo "<tr>
				<form action = 'updateVLS.php' method = 'POST'>
					<td>$myrow[id_vls]</td>
					<td><input size='25' class='form-control', name = 'id_payer' type='text' value='$myrow[id_payer]'></td>
          <td><input size='30' class='form-control', name = 'mnth' type='text' value='$myrow[mnth]'></td>
          <td><input size='30' class='form-control', name = 'kvth' type='text' value='$myrow[kvth]'></td>
					<td><input name='id_vls' type='checkbox' value='$myrow[id_vls]'></td>
					<td><input type='submit' class='btn btn-warning' value='Изменить'></td>
				</form>
				<td>
					<form action='deleteVLS.php' method='POST'>
						<input name='id_vls' type='checkbox' value='$myrow[id_vls]'>
						<input name='submit' type='submit' class='btn btn-danger' value='Удалить'>
					</form>
				</td>
				</tr>";
			}
            while ($myrow = mysqli_fetch_array($r));
				
			echo "<tr>
				<form action = 'insertVLS.php' method = 'POST'>
					<td>$myrow[id_vls]</td>
          <td><input size='30' class='form-control', name = 'id_payer' type='text' value='$myrow[id_payer]'></td>
					<td><input size='25' class='form-control', name = 'mnth' type='text' value='$myrow[mnth]'></td>
          <td><input size='30' class='form-control', name = 'kvth' type='text' value='$myrow[kvth]'></td>
					<td><input name='id_vls' type='checkbox' value='$myrow[id_vls]'></td>
					<td><input type='submit' class='btn btn-warning' value='Добавить'></td>
				</form>
				<td>
				</td>
				</tr>";

        echo "</table>";
        
        ?>
                <br></br>
        <br></br>
        <h1 class="top-user-name">
                        История платежей
                      </h1>
                      <h1>
                        ____________________________________________________________________________________
                      </h1>
                      <br></br>
                 
                      
  <?php
  error_reporting(E_ERROR | E_PARSE);
        echo "<table class='table'>";
        echo "<tr>";
        echo  "<th scope='col'>#</th>";
        echo  "<th scope='col'>Плательщик</th>";
        echo  "<th scope='col'>Месяц</th>";
        echo  "<th scope='col'>Сумма</th>";

        echo "</tr>";
			$db=mysqli_connect("localhost", "root", "", "cores");
			mysqli_query($db, "set names utf8");
			$r = mysqli_query($db, "select * from `pay_history`");
			$myrow = mysqli_fetch_array($r);
			do{
				echo "<tr>
				<form action = 'updatePrice.php' method = 'POST'>
					<td>$myrow[id_pay]</td>
					<td><input size='25' class='form-control', name = 'id_payer' type='text' value='$myrow[id_payer]'></td>
          <td><input size='30' class='form-control', name = 'pay_month' type='text' value='$myrow[pay_month]'></td>
          <td><input size='30' class='form-control', name = 'pay_sum' type='text' value='$myrow[pay_sum]'></td>
					<td><input name='id_pay' type='checkbox' value='$myrow[id_pay]'></td>
					<td><input type='submit' class='btn btn-warning' value='Изменить'></td>
				</form>
				<td>
					<form action='deletePrice.php' method='POST'>
						<input name='id_pay' type='checkbox' value='$myrow[id_pay]'>
						<input name='submit' type='submit' class='btn btn-danger' value='Удалить'>
					</form>
				</td>
				</tr>";
			}
            while ($myrow = mysqli_fetch_array($r));
				
			echo "<tr>
				<form action = 'insertPrice.php' method = 'POST'>
					<td>$myrow[id_pay]</td>
          <td><input size='30' class='form-control', name = 'id_payer' type='text' value='$myrow[id_payer]'></td>
					<td><input size='25' class='form-control', name = 'pay_month' type='text' value='$myrow[pay_month]'></td>
          <td><input size='30' class='form-control', name = 'pay_sum' type='text' value='$myrow[pay_sum]'></td>
					<td><input name='id_pay' type='checkbox' value='$myrow[id_pay]'></td>
					<td><input type='submit' class='btn btn-warning' value='Добавить'></td>
				</form>
				<td>
				</td>
				</tr>";

        echo "</table>";
        
        ?>
        <br></br>
        <br></br>
        <br></br>
        <th scope="col"><a href="otchet.php" type="button" class="btn dtn-outline-primary">Скачать отчет в Excel</th> 
    </tr>
        <br></br>
        <br></br>
        <br></br>
        <br></br>
        <br></br>

          </div>
</body>
<!-- Файл js -->
<script src="js/main.js"></script>

