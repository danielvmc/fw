<?php namespace System\Helpers;

/**
 * Session
 *
 * @author Huynh Minh Tu
 * @version 1.0
 * @date November 17 - 2014
 */

class Session
{
    /**
     * Determine if session has started
     * @var boolean
     */
    private static $sessionStarted = false;

    /**
     * Start session
     * @return mixed
     */
    public static function init()
    {
        if (self::$sessionStarted == false) {
            session_start();
            self::$sessionStarted = true;
        }
    }

    /**
     * Add value to a session
     * @param string  $key
     * @param boolean $value
     */
    public static function set($key, $value = false)
    {
        if (is_array($key) && $value == false) {
            foreach ($key as $as => $value) {
                $_SESSION[SESSION_PREFIX.$name] = $value;
            }
        } else {
            $_SESSION[SESSION_PREFIX.$key] = $value;
        }
    }

    /**
     * Extract item from session then delete from session
     * @param  string $key
     * @return string
     */
    public static function pull($key)
    {
        $value = $_SESSION[SESSION_PREFIX.$key];
        unset($_SESSION[SESSION_PREFIX.$key]);

        return $value;
    }

    /**
     * Get item from session
     * @param  string  $key
     * @param  boolean $secondKey
     * @return string
     */
    public static function get($key, $secondKey = false)
    {
        if ($secondKey == true) {
            if (isset($_SESSION[SESSION_PREFIX.$key][$secondKey])) {
                return $_SESSION[SESSION_PREFIX.$key][$secondKey];
            }
        } else {
            if (isset($_SESSION[SESSION_PREFIX.$key])) {
                return $_SESSION[SESSION_PREFIX.$key];
            }
        }

        return false;
    }

    /**
     * Return session id
     * @return session_id
     */
    public static function id()
    {
        return session_id();
    }

    /**
     * Return session array
     * @return $_SESSION
     */
    public static function display()
    {
        return $_SESSION;
    }

    /**
     * Destroy session
     * @param  string $key
     * @return mixed
     */
    public static function destroy($key = '')
    {
        if (self::$sessionStarted == true) {
            if (empty($key)) {
                session_unset();
                session_destroy();
            } else {
                unset($_SESSION[SESSION_PREFIX.$key]);
            }
        }
    }
}
