<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Elit Nexum/Кабинет пользователя</title>
  <meta name="description" content="Главная страница">

  <!--Для шапки сайта-->
  <link rel="stylesheet" href="/public/css/header.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  <!--подключаем стили-->
  <link rel="stylesheet" href="/public/css/parallax.css" charset="utf-8">
  <link rel="stylesheet" href="/public/css/footer.css" charset="utf-8">
  <link rel="stylesheet" href="/public/css/dashboard.css" charset="utf-8">
</head>
<body>
  <!--подключаем шапку сайта-->
  <?php require 'public/blocks/header.php' ?>

  <div class="bgimg-1">
   <div class="dashboard">
      <h1>Кабинет пользователя</h1>
      <p>Привет, <b><?=$data['login']?>!</b></p>
      <form action="/?url=user/dashboard" method="post">
        <a href="/?url=films/add_user_film">Записать в блокнот</a>
        <a href="/?url=films/show_my_collection">Моя коллекция</a>

        <input type="hidden" name="exit_btn">
        <button type="submit" class="btn">Выйти</button>
      </form>
   </div>
  </div>

  <!--подключаем футер сайта-->
  <?php require 'public/blocks/footer.php' ?>
</body>
</html>
