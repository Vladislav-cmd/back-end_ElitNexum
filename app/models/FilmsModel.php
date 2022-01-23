<?php
  require 'DB.php';

  class FilmsModel {
    private $_db = null;

    public function __construct() {
      $this->_db = DB::getInstanse();
    }

    public function getFilms() {
      $result = $this->_db->query("SELECT * FROM `films`");
      return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getFilmsPagination($start_from, $films_on_page) {
      $result = $this->_db->query("SELECT * FROM `films` ORDER BY `id` DESC LIMIT $start_from, $films_on_page ");
      return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getOneFilm($id) {
      $result = $this->_db->query("SELECT * FROM `films` WHERE `id` = '$id'");
      return $result->fetch(PDO::FETCH_ASSOC);
    }

    public function searchOneFilm($name) {
      $result = $this->_db->query("SELECT * FROM `films` WHERE `name` = '$name'");
      $film = $result->fetch(PDO::FETCH_ASSOC);
      $id = $film['id'];

      if($film['name'] == '')
        return 'К сожалению, мы не можем найти фильм, который вы ищете.';
      else
        header("Location: /?url=films/show_one_film/$id");
    }

    public function searchOneUserFilm($name) {
      $login = $_COOKIE['log'];
      $result = $this->_db->query("SELECT * FROM `favorites` WHERE `name` = '$name' and `login` = '$login'");
      $film = $result->fetch(PDO::FETCH_ASSOC);
      $id = $film['id'];

      if($film['name'] == '')
        return 'К сожалению, в вашей коллекции нет такого фильма.';
      else
        header("Location: /?url=films/show_user_film/$id");
    }

    // Для добавления в свою коллекцию
    public function addThisFilm($id, $name, $year, $image, $long_link) {
      // Сперва проверяем, есть ли уже такой фильм в списке избранных данного пользователя
      $login = $_COOKIE['log'];
      $result = $this->_db->query("SELECT * FROM `favorites` WHERE `name` = '$name' and `login` = '$login'");
      $film = $result->fetch(PDO::FETCH_ASSOC);

      if($film != '')
        header("Location: /?url=films/show_one_film/$id");
      else {
        $sql = 'INSERT INTO favorites(name, year, image, long_link, login) VALUES(:name, :year, :image, :long_link, :login)';
        $query = $this->_db->prepare($sql);
        $query->execute(['name' => $name, 'year' => $year, 'image' => $image, 'long_link' => $long_link, 'login' => $_COOKIE['log']]);
        header("Location: /?url=films/show_my_collection");
      }
    }

    public function getFavFilmsUser($login) {
      $result = $this->_db->query("SELECT * FROM `favorites` WHERE `login` = '$login' ORDER BY `id` DESC");
      return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getOneUserFilm($id) {
      $login = $_COOKIE['log'];
      $result = $this->_db->query("SELECT * FROM `favorites` WHERE `id` = '$id' and `login` = '$login'");
      return $result->fetch(PDO::FETCH_ASSOC);
    }

    public function deleteFavUserFilm($id) {
      $login = $_COOKIE['log'];
      $sql = "DELETE FROM `favorites` WHERE `id` = '$id' and `login` = '$login'";
      $query = $this->_db->prepare($sql);
      $query->execute();
      header("Location: /?url=films/show_my_collection");
    }
  }
