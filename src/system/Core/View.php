<?php namespace System\Core;

require SMARTY_DIR . 'Smarty.class.php';
/**
 * Load template file
 *
 * @author Huynh Minh Tu
 * @version 1.0
 * @date November 17 - 2014
 */

class View extends \Smarty
{
    public function __construct()
    {
        parent::__construct();
        $this->setTemplateDir(TEMPLATE_DIR);
        $this->setCompileDir(COMPILE_DIR);
        $this->setConfigDir(CONFIG_DIR);
        $this->setCacheDir(CACHE_DIR);
        // $this->error_reporting = E_ALL & ~E_NOTICE;
        $this->muteExpectedErrors();
        $this->caching = \Smarty::CACHING_LIFETIME_CURRENT;
    }
    /**
     * Render view
     * @param          $path
     * @param  boolean $data
     * @param  boolean $error
     * @return mixed
     */
    public function render($path, $data, $error = false)
    {
        require "../src/app/Views/layout/header.tpl";
        require "../src/app/Views/$path.tpl";
        require "../src/app/Views/layout/footer.tpl";
    }
}
