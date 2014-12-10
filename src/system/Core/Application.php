<?php namespace System\Core;

class Application
{
    public function run()
    {
        require '../src/config/app.php';
        require '../src/app/Http/routes.php';
    }
}
