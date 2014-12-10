<?php
namespace app\Http\Controllers;

class WelcomeController extends BaseController
{
    public function index()
    {
        $this->view->display('welcome/index.tpl');
    }
}
