<?php 

// Окружение: dev - разработка
// Окружение: prod - продакшн
define('ENVIRONMENT', 'dev');

// Публичная директория
define('PPATH', __DIR__);

require_once (realpath(PPATH . '/../core/Autoload.php'));

$render = new \Core\Views\Render('2','2');
echo $render->view();