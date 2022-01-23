<?php
  class Contact extends Controller {
    public function offer() {
      $data = [];
      if(isset($_POST['name'])) {
        $offer = $this->model('ContactModelOffer');
        $offer->setData($_POST['name'], $_POST['email'], $_POST['film'], $_POST['year'], $_POST['link']);

        // Выполняется проверка
        $isValid = $offer->validForm();
        if($isValid == "Верно")
          $data['message'] = $offer->mail();
        else
          $data['message'] = $isValid;
      }

      $this->view('contact/offer', $data);
    }

    public function mess() {
      $data = [];
      if(isset($_POST['name'])) {
        $mail = $this->model('ContactModel');
        $mail->setData($_POST['name'], $_POST['email'], $_POST['message']);

        // Выполняется проверка
        $isValid = $mail->validForm();
        if($isValid == "Верно")
          $data['message'] = $mail->mail();
        else
          $data['message'] = $isValid;
      }

      $this->view('contact/mess', $data);
    }
  }
