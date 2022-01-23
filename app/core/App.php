<?php
    class App {
        protected $controller = 'Home';
        protected $method = 'index';
        protected $params = [];

        public function __construct() {
            $url = $this->parseUrl();

            if(file_exists('app/controllers/' . ucfirst($url[0]) . '.php')) {
                $this->controller = ucfirst($url[0]);
                unset($url[0]);
            }

            // Подключаем сам файл контроллера
            require_once 'app/controllers/' . $this->controller . '.php';

            // вызываем нужную функцию из контроллера
            // в качестве названия класса используем переменную $this->controller, где записывается Home
            $this->controller = new $this->controller;

            // теперь проверяем второй параметр (название функции)
            if(isset($url[1])) {
                if(method_exists($this->controller, $url[1])) {
                    $this->method = $url[1];
                    unset($url[1]);
                }
            }

            // установим дополнительные параметры
            // изначально проверяем, является ли массив с какими либо данными ($url ?)
            // если не пустой, то функцию array_values($url) обнуляет индексы для конкретного массива (то есть не учитывает уже удалённые)

            // если пустой, то просто устанавливаем :[]
            $this->params = $url ? array_values($url) : [];
            // можем проверить   print_r($url);

            // ДЛЯ ОШИБКИ 404
            // Установим проверку на корректный URL:
            // Предположим что контроллер ИЗ ИМЕЮЩИХСЯ В app/controllers/ и в нем функция с названием
            // ИЗ ИМЕЮЩИХСЯ В 'app/views/' и не должно быть лишних параметров после
            // Мы добавляем сюда тогда проверку

            $correctUrl = false; // Изначально наш URL думаем что некорректный
            // Если контроллер и метод совпадают
            // и количество дополнительных параметров не больше 0,
            // то в таком случае это нормальный URL и не нужно вызывать страницу 404
            if(is_a($this->controller, 'app/controllers/') && $this->method == 'app/views/' && count($this->params) <= 1)
                $correctUrl = true; // Здесь говорим что URL корректный

            // Чтобы корректно отображало пагинацию с фильмами
            else if(is_a($this->controller, 'Films') && $this->method == 'store' && count($this->params) <= 1)
              $correctUrl = true;

            // Чтобы корректно отображало пагинацию с фильмами в моей коллекции
            else if(is_a($this->controller, 'Films') && $this->method == 'show_my_collection' && count($this->params) <= 1)
              $correctUrl = true;

            // Чтобы корректно отображало отдельный фильм
            else if(is_a($this->controller, 'Films') && $this->method == 'show_one_film' && count($this->params) <= 1)
              $correctUrl = true;

            // Чтобы корректно отображало отдельный фильм
            else if(is_a($this->controller, 'Films') && $this->method == 'show_user_film' && count($this->params) <= 1)
              $correctUrl = true;

            // Если переменная $correctUrl равна false и параметров больше чем 0, то выдаем страницу 404
            if(count($this->params) != 0 && !$correctUrl)
                $this->errorPage404();


            // call_user_func_array(); мы можем вызвать функцию внутри какого-либо класса
            // при этом в эту функцию мы можем передать какие-то параметры
            // [указываем класс, потом функцию в классе], и потом параметры, которые передаем
            call_user_func_array([$this->controller, $this->method], $this->params);
        }

        public function parseUrl() {
            if(isset($_GET['url'])) {
                return explode('/', filter_var(
                    rtrim($_GET['url'], '/'),
                    FILTER_SANITIZE_STRING));
            }
        }

        public function errorPage404() {
            $host = '/404.php';
            header('HTTP/1.1 404 Not Found');
            header("Status: 404 Not Found");
            header('Location: '.$host);
        }
    }
