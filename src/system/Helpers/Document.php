<?php namespace System\Helpers;

/**
 * Document helper
 *
 * @author Huynh Minh Tu
 * @version 1.0
 * @date November 17 - 2014
 */

class Document
{
    /**
     * Get type of file
     * @param  $extension
     * @return string
     */
    public static function getFileType($extension)
    {
        $images = array('jpg', 'gif', 'png', 'bmp');
        $docs   = array('txt', 'rtf', 'doc', 'docx', 'pdf');
        $apps   = array('zip', 'rar', 'exe', 'html');
        $video  = array('mpg', 'wmv', 'avi', 'mp4');
        $audio  = array('wav', 'mp3');
        $db     = array('sql', 'csv', 'xls','xlsx');

        if (in_array($extension, $images)) {
            return 'Image';
        }
        if (in_array($extension, $docs)) {
            return "Document";
        }
        if (in_array($extension, $apps)) {
            return "Application";
        }
        if (in_array($extension, $video)) {
            return "Video";
        }
        if (in_array($extension, $audio)) {
            return "Audio";
        }
        if (in_array($extension, $db)) {
            return "Database/Spreadsheet";
        }
        return "Other";
    }

    /**
     * Format file size
     * @param  $bytes
     * @param  $precision
     * @return float
     */
    public static function formatBytes($bytes, $precision = 2)
    {
        $units = array('B', 'KB', 'MB', 'GB', 'TB');

        $bytes = max($bytes, 0);
        $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
        $pow = min($pow, count($units) - 1);

        $bytes /= pow(1024, $pow);

        return round($bytes, $precision) . ' ' . $units[$pow];
    }

    /**
     * Get file extension
     * @param  $file
     * @return string
     */
    public static function getExtension($file)
    {
        return pathinfo($file, PATHINFO_EXTENSION);
    }

    /**
     * Remove extension of file
     * @param  $file
     * @return mixed
     */
    public static function remove_extension($file)
    {
        if (strpos($file, '.')) {
            $file = pathinfo($file, PATHINFO_FILENAME);
        }

        return $file;
    }
}
