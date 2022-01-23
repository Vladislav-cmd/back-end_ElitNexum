<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Elit Nexum/<?=$data['name']?></title>
  <meta name="description" content="Главная страница">

  <!--Для шапки сайта-->
  <link rel="stylesheet" href="/public/css/header.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  <!--подключаем стили-->
  <link rel="stylesheet" href="/public/css/parallax.css" charset="utf-8">
  <link rel="stylesheet" href="/public/css/footer.css" charset="utf-8">
  <link rel="stylesheet" href="/public/css/films.css">
  <link rel="stylesheet" href="/public/css/film.css">
</head>
<body>
  <!--подключаем шапку сайта-->
  <?php require 'public/blocks/header.php' ?>

  <div class="bgimg-1">
    <div class="search">
      <form action="/?url=films/search" method="post" class="input_search">
        <input type="text" name="name" placeholder="Поиск..." value="<?=$_POST['name']?>">
        <button class="btn" id="send"><i class="fa fa-search"></i></button>
      </form>
    </div>
    <div class="menu">
      <div class="film-list">
        <div class="show-one-film">
          <div class="one-image-film">
            <img src="/public/img/films/<?=$data['image']?>" alt="<?=$data['name']?>">
          </div>
        </div>
        <div class="link-film">
          <div class="name-of-film">
            <h2><?=$data['name']?> (<?=$data['year']?>)</h2>
          </div>
          <p>Вы можете посмотреть фильм бесплатно и в хорошем качестве <a href="<?=$data['long_link']?>">здесь.</a></p>
          <p>Если же данная ссылка недоступна или у вас возникли какие-то проблемы,
             то обязательно сообщите нам в форме <a href="/?url=contact/mess">обратной связи.</a></p>
          <p>Также вы можете поделиться своими любимыми фильмами с другими,
             просто отправив нам форму через <a href="/?url=contact/offer">предложения.</a></p>
          <form action="/?url=films/favorite" method='post'>
            <!--в значении id товара-->
            <input type="hidden" name="film_id" value="<?=$data['id']?>">
            <button class="btn1">Добавить в коллекцию</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!--подключаем футер сайта-->
  <?php require 'public/blocks/footer.php' ?>
</body>
</html>
