<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Elit Nexum/Главная страница</title>
  <meta name="description" content="Главная страница">

  <!--Для шапки сайта-->
  <link rel="stylesheet" href="/public/css/header.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  <!--подключаем стили-->
  <link rel="stylesheet" href="/public/css/parallax.css" charset="utf-8">
  <link rel="stylesheet" href="/public/css/footer.css">
  <?php if($_COOKIE['log'] == ''): ?>
    <link rel="stylesheet" href="/public/css/content_logout.css" charset="utf-8">
  <?php else: ?>
    <link rel="stylesheet" href="/public/css/content_login.css" charset="utf-8">
  <?php endif; ?>
</head>
<body>
  <!--подключаем шапку сайта-->
  <?php require 'public/blocks/header.php' ?>

  <!--Для авторизованного пользователя все ссылки станут активными, через куки-->
  <div class="bgimg-1">
    <div class="caption">
      <?php if($_COOKIE['log'] == ''): ?>
        <span class="border">ЛУЧШИЕ ФИЛЬМЫ</span>
      <?php else: ?>
        <span class="border"><a href="/?url=films/store">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          ЛУЧШИЕ ФИЛЬМЫ
        </a></span>
      <?php endif; ?>
    </div>
  </div>

  <!--Для авторизованного пользователя все ссылки станут активными-->
  <div class="content1">
    <h3>Возможности</h3>
    <?php if($_COOKIE['log'] == ''): ?>
      <p>
        <li>Все возможности сайта будут вам доступны после <a href="/?url=user/reg">регистрации</a> или <a href="/?url=user/auth">авторизации</a>, если вы уже имеет аккаунт.</li>
        <li>Наш сайт предоставляет ссылки для просмотра уникальных и доcтупных <i>фильмов</i>.</li>
        <li>Вы можете собирать в своём <i>блокноте</i> собственную коллекцию.</li>
        <li>После регистрации вы можете задать нам интересующие вас вопросы.</li>
        <li>Вы всегда можете поделиться интересным фильмом с нами, отправив необходимые данные по почте.</li>
      </p>
    <?php else: ?>
      <p>
        <li>Наш сайт предоставляет ссылки для просмотра уникальных и доcтупных <a href="/?url=films/store">фильмов</a>.</li>
        <li>Вы можете добавлять в свой <a href="/?url=films/add_user_film">блокнот</a> собственную коллекцию.</li>
        <li>У вас есть возможность задать нам интересующие вас вопросы, перейдя в раздел <a href="/?url=contact/mess">контакты</a>.</li>
        <li>Вы всегда можете поделиться интересным фильмом с нами, отправив необходимые данные в форме для <a href="/?url=contact/offer">предложений</a>.</li>
      </p>
    <?php endif; ?>
  </div>

  <div class="bgimg-2">
    <div class="caption">
      <span class="simple">ДЕЛИСЬ С ДРУЗЬЯМИ</span>
    </div>
  </div>

  <div class="content2">
    <div class="text">
      <p>Присылайте нам свои варианты интересных фильмов и мы обязательно разместим их на сайте!</p>
    </div>
  </div>

  <div class="bgimg-1">
    <div class="caption">
      <?php if($_COOKIE['log'] == ''): ?>
        <span class="border">РАСШИРЯЕМ ВМЕСТЕ</span>
      <?php else: ?>
        <span class="border"><a href="/?url=contact/offer">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          РАСШИРЯЕМ ВМЕСТЕ
        </a></span>
      <?php endif; ?>
    </div>
  </div>

  <!--подключаем футер сайта-->
  <?php require 'public/blocks/footer.php' ?>
</body>
</html>
