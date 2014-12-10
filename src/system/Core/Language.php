<?php namespace System\Core;

/**
 * Languages handler
 *
 * @author Huynh Minh Tu
 * @version 1.0
 * @date November 17 - 2014
 */

class Language
{
    /**
     * @var array
     */
    private $languageData = array();

    /**
     * Load language
     * @param  $controller
     * @param  $return
     * @param  $languageCode
     * @return mixed
     */
    public function load($controller, $return = false, $languageCode = null)
    {
        if ($languageCode != null) {
            $languageFile = 'app/language/' . $languageCode . '/' . $controller . '.php';
        } else {
            $languageFile = 'app/language/' . LANGUAGE_CODE . '/' . $controller . '.php';
        }

        if (is_readable($languageFile)) {
            require_once $languageFile;

            $this->languageData = array_merge($this->languageData, $lang);

            return ($return) ? $this->languageData : true;
        } else {
            Error::display('Could not load language file `'. $controller .'`');

            return false;
        }
    }

    /**
     * Get line of file
     * @param  $line
     * @return mixed
     */
    public function get($line)
    {
        return (!empty($this->languageData[$line])) ? $this->languageData[$line] : false;
    }
}
