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
  <link rel="stylesheet" href="css/lk.css">
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
                <img class="header__logo" href="./index.php" src="./images/Logo (1).png" alt="">
              </a>
              <div class="header__btn-box">
                <a class="header__btn" href="./exit.php">Выход</a>
              </div>
            </div>
          </div>
        </div>
    </header>
    <main class="main">
      <section class="main__personal personal">
        <div class="container">
          <div class="personal__inner">
            <div class="personal__top">
              <div class="personal__top-inner">
                <div class="personal__top-user">
                  <div class="top-user-content">
                    <div class="top-user-image">
                      <img class="top-user-img" src="./images/user.png" alt="">
                    </div>
                    <div class="top-user-data">
                      <h1 class="top-user-name">
                        <?=$_SESSION ['user']['surname']?>
                        <?=$_SESSION ['user']['name']?>
                        <input type="hidden" name="id_payer" value="<?php echo $_SESSION['user']['id_payer']?>">
                      </h1>
                      <p class="top-user-number">
                      № <?=$_SESSION ['user']['lk_num']?>
                      </p>
                      <p class="top-user-adress"><?=$_SESSION ['user']['adress']?></p>
                    </div>
                  </div>
                  <div class="top-user-price-info">
                    <p class="top-user-price">Всего к оплате: <?=$_SESSION ['user']['pay_sum']?> руб.</p>
                  </div>
                </div>
                <div class="personal__top-price">
                  <div class="personal__top-price-inner">
                    <h2 class="personal__top-price-title">Оплата</h2>
                    <form class="personal__top-form" action="lk_send_pay.php" method="POST">
                      <div class="personal__top-form-row">
                        <label class="personal__top-form-label">
                          <p>Месяц</p>
                          <select class="personal__top-form-dates" id="pay_month" name="pay_month">
                            <option value="Январь">Январь</option>
                            <option value="Февраль">Февраль</option>
                            <option value="Март">Март</option>
                            <option value="Апрель">Апрель</option>
                            <option value="Май">Май</option>
                            <option value="Июнь">Июнь</option>
                            <option value="Июль">Июль</option>
                            <option value="Август">Август</option>
                            <option value="Сентябрь">Сентябрь</option>
                            <option value="Октябрь">Октябрь</option>
                            <option value="Ноябрь">Ноябрь</option>
                            <option value="Декабрь">Декабрь</option>
                          </select>
                        </label>
                        <label class="personal__top-form-label">
                        <p>Сумма</p>
                        <input type="hidden" name="id_payer" value="<?php echo $_SESSION['user']['id_payer']?>">
                          <input class="personal__top-form-input" name="pay_sum" type="text" placeholder="Введите сумму" required="">
                        </label>
                      </div>
                      <button type="submit" name="run" class="personal__top-form-btn">Оплатить</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="personal__bottom">
              <div class="personal__bottom-inner">
                <div class="personal__bottom-content">
                  <h2 class="personal__bottom-title">История платежей</h2>
                  <ul class="personal__bottom-sckroll">
                  <a class="personal__bottom-sckrolls-link" href="">
                    <li class="personal__bottom-sckrolls">
                        <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $database = "cores";
                        // Создаем подключение
                        $connection = new mysqli($servername, $username, $password, $database);

                        // Проверяем его
                        if ($connection->connect_error) {
                          die("Connection failed: " . $connection->connect_error);
                        }

                        // Считываем все строки из таблицы
                        $id_payer = $_SESSION['user']['id_payer'];
                        $sql = "SELECT * FROM `pay_history` where id_payer = '$id_payer' ";
                        $result = $connection->query($sql);
            
                        if (!$result) {
                            die("Invalid query: " . $connection->error);
                        }
                        while($row = $result->fetch_assoc()) {
                                                  echo"
                                                  <p class=\"bottom-sckroll-first\"> ". $row["pay_month"] ."</p>
                                                  <p class=\"bottom-sckroll-last\">Сумма: ". $row["pay_sum"] ." рублей</p>
                                                  <br>";}
                                                  
                      ?>
                    </li>
                        </a class="personal__bottom-sckrolls-link" href="">
                  </ul>
                </div>
                <div class="personal__bottom-price">
                  <div class="personal__bottom-price-inner">
                    <h2 class="personal__bottom-price-title">Показания</h2>
                    <form class="personal__top-form" action="lk_send_vls.php" method="POST">
                      <div class="personal__top-form-row">
                        <label class="personal__top-form-label">
                        <p>Месяц</p>
                          <select class="personal__top-form-dates" id="mnth" name="mnth">
                            <option value="Январь">Январь</option>
                            <option value="Февраль">Февраль</option>
                            <option value="Март">Март</option>
                            <option value="Апрель">Апрель</option>
                            <option value="Май">Май</option>
                            <option value="Июнь">Июнь</option>
                            <option value="Июль">Июль</option>
                            <option value="Август">Август</option>
                            <option value="Сентябрь">Сентябрь</option>
                            <option value="Октябрь">Октябрь</option>
                            <option value="Ноябрь">Ноябрь</option>
                            <option value="Декабрь">Декабрь</option>
                          </select>
                        </label>
                        <label class="personal__top-form-label">
                        <p>КВт/ч</p>
                          <input class="personal__top-form-input" name="kvth" type="text" placeholder="Введите значение" required="">
                        </label>
                      </div>
                      <button type="submit" name= "run" class="personal__bottom-form-btn">Отправить</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <footer class="footer">
      <div class="footer__inner">
        <div class="footer__content">
          <div class="footer__column">
            <div class="footer__col">
              <p class="footer__col-left">АО “КОР-ЭНЕРГОСБЫТ”
                236016, Россия,
                Калининград, ул. Фрунзе 11
                тел.: (4012) 605-885
                secretar@kores.ru
              </p>
            </div>
            <div class="footer__col">
              <p class="footer__col-right">© 2019-2022 «КорЭС Онлайн»</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
</body>
<!-- Файл js -->
<script src="js/main.js"></script>
<?php
//Подключение к БД
$db = mysql_connect("localhost","root", "");
        mysql_select_db("cores",$db);
		mysql_query("set names utf8");
?>
</html>
