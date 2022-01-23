<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Elit Nexum/Обратная связь</title>
  <meta name="description" content="Главная страница">

  <!--Для шапки сайта-->
  <link rel="stylesheet" href="/public/css/header.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  <!--подключаем стили-->
  <link rel="stylesheet" href="/public/css/parallax.css" charset="utf-8">
  <link rel="stylesheet" href="/public/css/footer.css" charset="utf-8">
  <link rel="stylesheet" href="/public/css/form_mess.css" charset="utf-8">
</head>
<body>
  <!--подключаем шапку сайта-->
  <?php require 'public/blocks/header.php' ?>

  <div class="bgimg-1">
    <div class="form-control">
      <form action="/?url=contact/mess" method="post" class="form">
        <h1>Обратная связь</h1>
        <input type="text" name="name" placeholder="Введите имя" value="<?=$_POST['name']?>"><br>
        <input type="email" name="email" placeholder="Введите email" value="<?=$_POST['email']?>"><br>
        <textarea name="message" placeholder="Введите само сообщение"><?=$_POST['message']?></textarea>

        <!--Блок сообщений с ошибками-->
        <div class="error"><?=$data['message']?></div>
        <button class="btn" id="send">Отправить</button>
      </form>
    </div>
  </div>

  <!--подключаем футер сайта-->
  <?php require 'public/blocks/footer.php' ?>
</body>
</html>
