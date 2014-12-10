<?php
namespace app\Http\Controllers;

use System\Core\Controller as Controller;

abstract class BaseController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }
}
