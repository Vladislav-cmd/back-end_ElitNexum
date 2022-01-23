<?php
  class ContactModelOffer {
    private $name;
    private $email;
    private $film;
    private $year;
    private $link;

    public function setData($name, $email, $film, $year, $link) {
      $this->name = $name;
      $this->email = $email;
      $this->film = $film;
      $this->year = $year;
      $this->link = $link;
    }

    // в функции будем проверять на корректность значий в переменных
    public function validForm() {
      if($this->name == '')
        return "Введите имя";
      else if(strlen($this->name) < 2)
        return "Имя слишком короткое";
      else if($this->email == '')
        return "Введите Email";
      else if(strlen($this->email) < 3)
        return "Email слишком короткий";
      else if($this->film == '')
        return "Введите название фильма";
      else if($this->year == '')
        return "Введите год фильма";
      else if(!is_numeric($this->year) || $this->year <= 1894 || $this->year > 2022)
        return "Вы ввели недействительный год для фильма";
      else if(strlen($this->year) != 4)
        return "Введите корректный год";
      else if($this->link == '')
        return "Введите ссылку на фильм";
      else if(strlen($this->link) < 8)
        return "Ссылка слишком короткая";
      else
        return "Верно";
    }

    // функция для отправки сообщения на электронную почту
    public function mail() {
      $to = "jean41@yandex.ru";
      $message = "Имя: " . $this->name . ".\n Название фильма: " . $this->film . ".\n Год фильма: " . $this->year . ".\n Ссылка: " . $this->link;

      // чтобы отправить письмо, нужна тема, которая оборачивается в следующий синтаксис
      $subject = "=?utf-8?B?".base64_encode("Сообщение с нашего сайта")."?=";
      // отправляем заголовки
      $headers = "From: $this->email\r\nReply-to: $this->email\r\nContent-type: text/html; charset=utf-8\r\n";
      // обращаемся к встроенной в PHP функции mail, которая позволяет отправить письмо на эл. адрес
      $success = mail($to, $subject, $message, $headers);

      if(!$success)
        return "Сообщение было не отправлено";
      else
        return true; // изменить на удаленном, чтобы выводилось сообщение об отправке
    }
  }
