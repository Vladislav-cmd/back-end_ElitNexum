<header>
  <div class="inner-width">
    <a href="/" class="logo"><h3>Elit Nexum</h3></a>
    <i class="menu-toggle-btn fas fa-bars"></i>
    <nav class="navigation-menu">
      <?php if($_COOKIE['log'] == ''): ?>
        <a href="/"><i class="fas fa-home home"></i> Главная</a>
        <a href="/?url=user/reg"><i class="fa fa-user-plus reg"></i> Регистрация</a>
        <a href="/?url=user/auth"><i class="fa fa-power-off login"></i> Войти</a>
      <?php else: ?>
        <a href="/"><i class="fas fa-home home"></i> Главная</a>
        <a href="/?url=films/store"><i class="fa fa-film films"></i> Фильмы</a>
        <a href="/?url=contact/offer"><i class="fa fa-lightbulb idea"></i> Предложения</a>
        <a href="/?url=contact/mess"><i class="fa fa-envelope mail"></i> Контакты</a>
        <a href="/?url=user/dashboard"><i class="fa fa-user user"></i> Кабинет пользователя</a>
      <?php endif; ?>
    </nav>
  </div>
</header>

<!--Скрипт для отрытия/закрытия блока ссылок на малом экране-->
<script type="text/javascript">
  $(".menu-toggle-btn").click(function() {
    $(this).toggleClass("fa-times");
    $(".navigation-menu").toggleClass("active");
  });
</script>
