<?php
namespace app\Http;

use System\Core\Router;

Router::any('', 'WelcomeController@index');

Router::error('Error@index');

Router::dispatch();
