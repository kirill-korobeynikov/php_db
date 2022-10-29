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
  width: 170px;
  margin-top: 15px;
  height: 40px;
  border: none;
  background: linear-gradient(264.61deg, #87DF41 -9.34%, #00AB4F 101.57%);
  border-radius: 12px;
  font-weight: 700;
  font-size: 17px;
  line-height: 18px;
  color: #FFFFFF;
}
/* .personal__top-form-label {
  display: flex;
  flex-direction: column;
  margin-right: 25px;
  flex: 1 1 auto;
  font-weight: 400;
  font-size: 24px;
  line-height: 34px;
  color: #000000;
  width: 369px;
} */
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
  margin-bottom: 50px;
  margin-top: 20px;
}
.sentence__lk-title {
  font-weight: 700;
  font-size: 15px;
  /* line-height: 1.4; */
  background: linear-gradient(264.61deg, #87DF41 -9.34%, #00AB4F 101.57%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.regbut {
  text-decoration: underline;
  background: #ffffff;
  border: #80CF5A;
  border-radius: 12px;
  color: #80CF5A;
  font-weight: 700;
  font-size: 13px;
  width: 200px;
  height: 40px;
}
.authbut {
  text-decoration: none;
  background: linear-gradient(264.61deg, #87DF41 -9.34%, #00AB4F 101.57%);
  border-radius: 12px;
  color: #ffffff;
  font-weight: 700;
  font-size: 15px;
  width: 150px;
  height: 40px;
  border: none;
  margin-top: 20px;
}
.regsot {
  text-decoration: underline;
  background: #ffffff;
  border: #80CF5A;
  border-radius: 12px;
  color: #8E8E8E;
  font-weight: 700;
  font-size: 11px;
  width: 200px;
  height: 40px;

}

</style>
<body>

            

              <div class="auth">
              <img class="header__logo" href="./index.php" src="./images/logo_auth.png" alt="" width="80%" height="80%">
              <div class="sentence__lk-text">
          
</div>
                    <form action="./auth_redir.php" method="POST">

                    <label class="personal__top-form-label">
                          <input class="personal__top-form-input" type="text" name="lk_num" placeholder="Лицевой счет" required="">
                        </label><br>
                        <br>
                        <label class="personal__top-form-label">
                          <input class="personal__top-form-input" type="text" name="password" placeholder="Пароль" required="">
                        </label>
                        <p></p>
                        <p></p>
                       <button class="authbut">Войти</button>
                      <p></p>
                    </form>
                    <form action="./reg.php" method="POST">
                    <button type="submit" class="regbut">Нет аккаунта? Регистрация</button>
                    </form>
                      
                    <form action="./auth_admin.php" method="POST">
                    <button type="submit" class="regsot">Вход для сотрудника</button>
                    </form>
              </div>
</body>
</html>