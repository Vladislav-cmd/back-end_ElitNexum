<?php
  class Films extends Controller {
    public function store($page = 1) {
      $films = $this->model('FilmsModel');

      // ceil округляет дробь в большую сторону
      $pages = ceil(count($films->getFilms())/3);

      // получим номер страницы из URL
      $p = isset($_GET["p"]) ? (int) $_GET["p"] : $page;

      // через оператор будем определять, какие фильмы выводить согласно номеру
      // передаваемой странице
      // также делаем проверку на то, если номера страницы не существует, то ошибку выводим
      switch ($p) {
        case $p:
        if($p >= ($pages+1) || $p <= 0)
          $this->view('error_for_pagination/404');
        else {
          $data = [
            'films' => $films->getFilmsPagination(($p-1)*3, 3),
            'count_of_pages' => $pages,
            'num_of_page' => $p
          ];
          $this->view('films/store', $data);
          break;
        }
      }
    }

    // Отображать один фильм
    public function show_one_film($id) {
      // передаем лишь одну запись, которую нужно вывести
      $film = $this->model('FilmsModel');

      $this->view('films/one_film', $film->getOneFilm($id));
    }

    // Для поиска фильма
    public function search() {
      $data = [];
      if(isset($_POST['name'])) {
        $film = $this->model('FilmsModel');
        $data['message'] = $film->searchOneFilm($_POST['name']);
      }

      $this->view('films/store', $data);
    }

    // Для поиска фильма из коллекции пользователя
    public function search_user_film() {
      $data = [];
      if(isset($_POST['name'])) {
        $film = $this->model('FilmsModel');
        $data['message'] = $film->searchOneUserFilm($_POST['name']);
      }

      $this->view('films/user_collection', $data);
    }

    // Добавление фильма в избранное (сперва в новую таблицу с логином пользователя)
    public function favorite() {
      if(isset($_POST['film_id'])) {
        $film = $this->model('FilmsModel');
        $catch_this_film = $film->getOneFilm($_POST['film_id']);
        $add_this_film = $film->addThisFilm($_POST['film_id'], $catch_this_film['name'], $catch_this_film['year'], $catch_this_film['image'], $catch_this_film['long_link']);
      }
    }

    // Вывод всех моих фильмов в коллекции пользователя
    public function show_my_collection() {
      $films = $this->model('FilmsModel');
      $data = [
        'films' => $films->getFavFilmsUser($_COOKIE['log'])
      ];
      $this->view('films/user_collection', $data);
    }

    public function show_user_film($id) {
      // передаем лишь одну запись, которую нужно вывести
      $film = $this->model('FilmsModel');

      $this->view('films/one_user_film', $film->getOneUserFilm($id));
    }

    //Удаление из коллекции пользователя
    public function deleteUserFilm() {
      if(isset($_POST['film_id'])) {
        $film = $this->model('FilmsModel');
        $deleteFilm = $film->deleteFavUserFilm($_POST['film_id']);
      }
    }

    // Добавление фильма пользователем в коллекцию
    public function add_user_film() {
      $data = [];

      if(isset($_POST['name'])) {
        $film = $this->model('FilmsModelUser');
        $film->setDataUserFilm($_POST['name'], $_POST['year'], $_POST['link']);
        $isValid = $film->validForm();
        if($isValid == "Верно")
          $film->addUserFilm();
        else
          $data['message'] = $isValid;
      }

      $this->view('user/note', $data);
    }
  }
