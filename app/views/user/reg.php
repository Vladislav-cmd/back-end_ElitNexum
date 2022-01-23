<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Elit Nexum/Регистрация</title>
  <meta name="description" content="Главная страница">

  <!--Для шапки сайта-->
  <link rel="stylesheet" href="/public/css/header.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  <!--подключаем стили-->
  <link rel="stylesheet" href="/public/css/parallax.css" charset="utf-8">
  <link rel="stylesheet" href="/public/css/footer.css" charset="utf-8">
  <link rel="stylesheet" href="/public/css/form_reg.css" charset="utf-8">
</head>
<body>
  <!--подключаем шапку сайта-->
  <?php require 'public/blocks/header.php' ?>

  <div class="bgimg-1">
   <div class="form-control">
     <form action="/?url=user/reg" method="post" class="form">
       <h1>Регистрация</h1>
       <input type="email" name="email" placeholder="Введите email" value="<?=$_POST['email']?>"><br>
       <input type="text" name="login" placeholder="Введите логин" value="<?=$_POST['login']?>"><br>
       <input type="password" name="pass" placeholder="Введите пароль" value="<?=$_POST['pass']?>"><br>
       <input type="password" name="re_pass" placeholder="Повторите пароль" value="<?=$_POST['re_pass']?>"><br>

       <div class="error"><?=$data['message']?></div>
       <button class="btn" id="send">Зарегистрироваться</button>
     </form>
   </div>
  </div>

  <!--подключаем футер сайта-->
  <?php require 'public/blocks/footer.php' ?>
</body>
</html>
