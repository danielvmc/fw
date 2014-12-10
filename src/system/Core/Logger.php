<?php namespace System\Core;

/**
 * Custom logger
 *
 * @author Huynh Minh Tu
 * @version 1.0
 * @date November 17 - 2014
 */

class Logger
{
    /**
     * Show error on page
     * @var boolean
     */
    private static $printError = true;

    /**
     * Custom error message
     * @return mixed
     */
    public static function customErrorMsg()
    {
        echo "<p>An error occured, The error has been reported. We will fix it as soon as posible</p>";
        exit();
    }

    /**
     * Exception handler
     * @param  Exception $e
     * @return mixed
     */
    public static function exceptionHandler($e)
    {
        self::newMessage($e);
        self::customErrorMsg();
    }

    /**
     * Error handler
     * @param  $number
     * @param  $message
     * @param  $file
     * @param  $line
     * @return mixed
     */
    public static function errorHandler($number, $message, $file, $line)
    {
        $msg = "$message in $file on line $line";

        if (($number !== E_NOTICE) && ($number < 2048)) {
            self::errorMessage($msg);
            self::customErrorMsg();
        }

        return 0;
    }

    /**
     * Create new error message
     * @param  Exception $exception
     * @param  boolean   $printError
     * @param  boolean   $clear
     * @param  string    $errorFile
     * @return mixed
     */
    public static function newMessage(Exception $exception, $printError = false, $clear = false, $errorFile = 'errorlog.html')
    {
        $message = $exception->getMessage();
        $code = $exception->getCode();
        $file = $exception->getFile();
        $line = $exception->getLine();
        $trace = $exception->getTraceAsString();
        $date = date('M d, Y G:iA');

        $logMessage = "<h3>Exception information:</h3>\n
		<p><strong>Date:</strong> {$date}</p>\n
		<p><strong>Message:</strong> {$message}</p>\n
		<p><strong>Code:</strong> {$code}</p>\n
		<p><strong>File:</strong> {$file}</p>\n
		<p><strong>Line:</strong> {$line}</p>\n
		<h3>Stack trace:</h3>\n
		<pre>{$trace}</pre>\n
		<hr />\n";

        if (is_file($errorFile) === false) {
            file_put_contents($errorFile, '');
        }

        if ($clear) {
            $content = '';
        } else {
            $content = file_get_contents($errorFile);
        }

        file_put_contents($errorFile, $logMessage . $content);

        if ($printError == true) {
            echo $logMessage;
            exit;
        }
    }

    /**
     * Insert error message into error log file
     * @param  Exception $error
     * @param  boolean   $printError
     * @param  string    $errorFile
     * @return mixed
     */
    public static function errorMessage($error, $printError = false, $errorFile = 'errorlog.html')
    {
        $date = date('M d, Y G:iA');
        $logMessage = "<p>Error on $date - $error</p>";

        if (is_file($errorFile) === false) {
            file_put_contents($errorFile, '');
        }

        $content = file_get_contents($errorFile);
        file_put_contents($errorFile, $logMessage. $content);

        if ($printError == true) {
            echo $logMessage;
            exit;
        }
    }
}
