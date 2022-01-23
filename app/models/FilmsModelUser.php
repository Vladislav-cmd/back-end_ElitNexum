<?php
  require 'DB.php';

  class FilmsModelUser {
    private $name;
    private $year;
    private $link;

    private $_db = null;

    public function __construct() {
      $this->_db = DB::getInstanse();
    }

    public function setDataUserFilm($name, $year, $link) {
      $this->name = $name;
      $this->year = $year;
      $this->link = $link;
    }

     // в функции будем проверять на корректность значий в переменных
    public function validForm() {
      if($this->name == '')
        return "Введите название фильма";
      else if($this->year == '')
        return "Введите год";
      else if(strlen($this->year) != 4)
        return "Введите корректный год";
      else if($this->link == '')
        return "Введите ссылку на фильм";
      else if(strlen($this->link) < 5)
        return "Ссылка на фильм слишком короткая";
      else
        return "Верно";
    }

    // Добавление фильма пользователем в свою коллекцию
    public function addUserFilm() {
      $login = $_COOKIE['log'];

      $sql = 'INSERT INTO favorites(name, year, image, long_link, login) VALUES(:name, :year, :image, :long_link, :login)';
      $query = $this->_db->prepare($sql);
      $query->execute(['name' => $this->name, 'year' => $this->year, 'image' => 'Фильм пользователя.jpg', 'long_link' => $this->link, 'login' => $_COOKIE['log']]);
      header("Location: /?url=films/show_my_collection");
    }
  }
