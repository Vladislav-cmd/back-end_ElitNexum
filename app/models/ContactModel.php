<?php
  class ContactModel {
    private $name;
    private $email;
    private $message;

    public function setData($name, $email, $message) {
      $this->name = $name;
      $this->email = $email;
      $this->message = $message;
    }

    // в функции будем проверять на корректность значий в переменных
    public function validForm() {
      if(strlen($this->name) < 3)
        return "Имя слишком короткое";
      else if(strlen($this->email) < 3)
        return "Email слишком короткий";
      else if(strlen($this->message) < 10)
        return "Сообщение слишком короткое";
      else
        return "Верно";
    }

    // функция для отправки сообщения на электронную почту
    public function mail() {
      $to = "jean41@yandex.ru";
      $message = "Имя: " . $this->name . ". Сообщение: " . $this->message;

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
