<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Elit Nexum/Фильмы</title>
  <meta name="description" content="Главная страница">

  <!--Для шапки сайта-->
  <link rel="stylesheet" href="/public/css/header.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  <!--подключаем стили-->
  <link rel="stylesheet" href="/public/css/parallax.css" charset="utf-8">
  <link rel="stylesheet" href="/public/css/footer.css" charset="utf-8">
  <link rel="stylesheet" href="/public/css/films.css">
  <link rel="stylesheet" href="/public/css/pagination.css">
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
      <div class="films-list">
        <?php for($i = 0; $i < count($data['films']); $i++): ?>
          <div class="one-film">
            <div class="image-film">
              <a href="/?url=films/show_one_film/<?=$data['films'][$i]['id']?>">
                <img src="/public/img/films/<?=$data['films'][$i]['image']?>" alt="<?=$data['films'][$i]['name']?>">
              </a>
            </div>
            <a href="/?url=films/show_one_film/<?=$data['films'][$i]['id']?>">
              <h2><?=$data['films'][$i]['name']?> (<?=$data['films'][$i]['year']?>)</h2>
            </a>
          </div>
        <?php endfor; ?>

        <div class="error"><?=$data['message']?></div>
        
        <!--подключаем пагинацию-->
        <?php require 'public/blocks/pagination.php' ?>
      </div>
    </div>
  </div>

  <!--подключаем футер сайта-->
  <?php require 'public/blocks/footer.php' ?>
</body>
</html>
