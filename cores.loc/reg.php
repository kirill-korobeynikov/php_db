<?php
$db = mysqli_connect("localhost","root", "","cores");
mysqli_query($db,"set names utf8");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Auth</title>
</head>




<style>
  
  html, body {
  font-family: 'SF Pro Display', sans-serif;
  font-weight: 700;
  color: #FFFFFF;

}
  .auth {
    position: absolute;
    left: 50%;
    text-align: center;
    top: 50%;
    transform: translate(-50%, -50%);
  }
  .personal__top-form-btn {
  text-decoration: none;
  padding: 10px 30px;
  margin-top: 50px;
  border: none;
  background: linear-gradient(264.61deg, #87DF41 -9.34%, #00AB4F 101.57%);
  border-radius: 12px;
  font-weight: 700;
  font-size: 17px;
  color: #FFFFFF;
}
.personal__top-form-input {
  width: 350px;
  height: 40px;
  background: #FFFFFF;
  border: 2px solid #CFCFCF;
  border-radius: 15px;
}

.personal__top-form-input::placeholder{
  text-align: center;
  color: #8E8E8E;
  font-weight: 400;
  font-size: 14px;
  line-height: 24px;
}
.sentence__lk-text {
  max-width: 676px;
  margin-bottom: 30px;
}
.sentence__lk-title {
  font-weight: 700;
  font-size: 17px;
  /* line-height: 1.4; */
  background: linear-gradient(264.61deg, #87DF41 -9.34%, #00AB4F 101.57%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  margin-top: 20px;
}
.regbut {
  background: #ffffff;
  border: #80CF5A;
  border-radius: 12px;
  color: #80CF5A;
  font-weight: 700;
  font-size: 12px;
  width: 200px;
  height: 40px;
}
</style>







<body>
              <div class="auth">
              <img class="header__logo" href="./index.php" src="./images/logo_auth.png" alt="" width="80%" 
     height="80%">
              <div class="sentence__lk-text">
                    <h1 class="sentence__lk-title">
                      Регистрация
                    </h1>
</div>
                  <form action="reg_redir.php" method="POST">
                    <label class="personal__top-form-label">
                          <input class="personal__top-form-input" type="text" name="name" placeholder="Имя" required="">
                        </label><br>
                        <br>
                        <label class="personal__top-form-label">
                          <input class="personal__top-form-input" type="text" name="surname" placeholder="Фамилия" required="">
                        </label>
                        <br><br>
                        <label class="personal__top-form-label">
                          <input class="personal__top-form-input" type="text" name="lk_num" placeholder="Лицевой счет" required="">
                        </label><br>
                        <br>
                        <label class="personal__top-form-label">
                          <input class="personal__top-form-input" type="text" name="adress" placeholder="Адрес" required="">
                        </label><br>
                        <br>
                        <label class="personal__top-form-label">
                          <input class="personal__top-form-input" type="text" name="password" placeholder="Пароль" required="">
                        </label>
                       <br><br>
                        <div class="sentence__lk-btn--box">
                          <button type="submit" name= "run" class="personal__top-form-btn">Продолжить</button></a>
                    </form>
                  </div>
                      
                      <p></p>
                  
              </div>
</body>
</html>
