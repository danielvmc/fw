<?php namespace System\Core;

/**
 * Base controller
 *
 * @author Huynh Minh Tu
 * @version 1.0
 * @date November 17 - 2014
 */
use System\Core\View as View;
use System\Core\Language as Language;
use System\Helpers\Session as Session;
use System\Helpers\Password as Password;
use System\Helpers\Url as Url;

class Controller
{
    /**
     * @var View
     */
    public $view;

    /**
     * @var Language
     */
    public $language;

    /**
     * @var Session
     */
    public $session;

    /**
     * @var Password
     */
    public $password;

    /**
     * @var Url
     */
    public $url;

    /**
     * Constructor
     *
     * @var View
     * @var Language
     * @var Session
     * @var Password
     * @var Url
     */
    public function __construct()
    {
        $this->view = new View();
        $this->language = new Language();
        $this->session = new Session();
        $this->password = new Password();
        $this->url = new Url();
    }
}
