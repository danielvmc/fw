<?php
namespace app\Http\Controllers;

/**
 * Calls a 404 page
 *
 * @author Huynh Minh Tu
 * @version 1.0
 * @date November 17 - 2014
 */

class Error extends BaseController
{
    /**
     * @var array
     */
    private $errors = null;

    /**
     * Constructor
     * @param array $errors
     */
    public function __construct($errors)
    {
        parent::__construct();
        $this->errors = $errors;
    }

    /**
     * 404 page
     * @return mixed
     */
    public function index()
    {
        header("HTTP/1.0 404 Not Found");

        $title = '404';
        $errors = $this->errors;

        $this->view->assign(['title'  => $title,
                             'errors' => $errors
                            ]);

        $this->view->display('error/404.tpl');
    }

    /**
     * Display error on page
     * @param  array  $errors
     * @param  string $class
     * @return mixed
     */
    public static function display(array $errors, $class = 'alert alert-danger')
    {
        $errorRow = null;

        if (is_array($errors)) {
            foreach ($errors as $error) {
                $errorRow.= "<div class='$class'>$error</div>";
            }

            return $errorRow;
        }
    }
}
