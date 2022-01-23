<?php
  class User extends Controller {
    // Регистрация
    public function reg() {
      $data = [];

      // функционал для обработки формы регистрации
      if(isset($_POST['login'])) {
        $user = $this->model('UserModel');
        $user->setData($_POST['email'], $_POST['login'], $_POST['pass'], $_POST['re_pass']);
        $isValid = $user->validForm();
        if($isValid == "Верно")
          $user->addUser();
        else
          $data['message'] = $isValid;
      }

      $this->view('user/reg', $data);
    }

    // Авторизация
    public function auth() {
      $data = [];
      if(isset($_POST['login'])) {
        $user = $this->model('UserModel');
        $data['message'] = $user->auth($_POST['login'], $_POST['pass']);
      }

      $this->view('user/auth', $data);
    }

    // Кабинет пользователя
    public function dashboard() {
      $user = $this->model('UserModel');

      if(isset($_POST['exit_btn'])) {
        $user->logOut();
        exit();
      }
      $this->view('user/dashboard', $user->getUser());
    }

    public function collection($page = 1) {
      $films = $this->model('FilmsModel');

      $pages = ceil(count($films->getAllFavFilms())/3);

      // получим номер страницы из URL
      $p = isset($_GET["p"]) ? (int) $_GET["p"] : $page;

      switch ($p) {
        case $p:
          if($p >= ($pages+1) || $p <= 0)
            $this->view('error_for_pagination/404');
          else {
            $data = [
              'films' => $films->getFavFilmsPagination(($p-1)*3, 3),
              'count_of_pages' => $pages,
              'num_of_page' => $p
            ];
            $this->view('user/collection', $data);
            break;
          }
      }
    }


  }
